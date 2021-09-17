<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin extends CI_Controller {

    function __construct()	
	{
		parent::__construct();
        $this->load->model("User_Model");
		$this->load->model("Kapal_Model");
        $this->load->model("Keberangkatan_m");
        $this->load->model("Kedatangan_m");
        $this->load->model("User_Model");
        $this->load->helper(array('form', 'url'));

        if($this->session->userdata("login") == null)
		{
			redirect(base_url('beranda'));
		}
		$this->user = $this->User_Model->findOne("id_user", $this->session->userdata("login"));

	}

    public function home_admin() 
    {
        $this->load->view('admin/daftar_akun');
    }

    public function insert_akun() 
    {
		$nama_lengkap = $this->input->post("nama_lengkap");
        $role = $this->input->post("role");
        $email = $this->input->post("email");
		$username = $this->input->post("username");
		$password = password_hash($this->input->post("password"), PASSWORD_DEFAULT);
        date_default_timezone_set('Asia/Jakarta');
		$tanggal_register = date('Y-m-d');
		$waktu_register = date('H:i:s');
        $no_hp = $this->input->post("no_hp");
        $alamat = $this->input->post("alamat");

        $user = $this->User_Model->findOne("username", $username);
		if($user != null)
		{
			echo"
 			<script>
 				alert('Username telah terdaftar, pilih username lain');
 				document.location.href = '../home_admin';
 			</script>";
		}
        else {

            $data = array(
                "nama_lengkap" => $nama_lengkap,
                "email" => $email,
                "username" => $username,
                "password" => $password,
                "tanggal_register" => $tanggal_register,
                "waktu_register" => $waktu_register,
                "role" => $role,
                "no_hp" => $no_hp,
                "alamat" => $alamat,
            );

            $this->session->set_flashdata('ambil',$role);
            $this->User_Model->input($data,'user');
            
            $user = $this->session->flashdata('ambil');
            if($user=='User')
            {
                redirect('data_user');
            }
            else
            {
                redirect('data_admin');
            }
        }
    }

    public function data_user()
    {
        //PAGINATION
        $this->load->library('pagination');

        //config
        $config['base_url'] = base_url('admin/data_user');
        $config['total_rows'] = $this->User_Model->countalluser();
        $config['per_page'] = 10;
        // var_dump($config['total_rows']); die;

        //styling
        $config['full_tag_open'] = '<nav class="mt-2"><ul class="pagination">';
        $config['full_tag_close'] = '  </ul></nav>';
        
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize pagination
        $this->pagination->initialize($config);

        $data['start']= $this->uri->segment(3);   
        $data['datauser'] = $this->User_Model->get_user($config['per_page'], $data['start'])->result_array();

        $this->load->view('admin/data_user', $data);
    } 

    public function data_admin() 
    {
        //PAGINATION
        $this->load->library('pagination');

        //config
        $config['base_url'] = base_url('admin/data_admin');
        $config['total_rows'] = $this->User_Model->countalladmin();
        $config['per_page'] = 10;
        // var_dump($config['total_rows']); die;

        //styling
        $config['full_tag_open'] = '<nav class="mt-2"><ul class="pagination">';
        $config['full_tag_close'] = '  </ul></nav>';
        
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize pagination
        $this->pagination->initialize($config);

        $data['start']= $this->uri->segment(3);   
        $data['dataadmin'] = $this->User_Model->get_admin($config['per_page'], $data['start'])->result_array();

        // $data = [
		// 	"user" => $this->user,
		// 	"usr" => $this->User_Model->findAllByUser($this->user->id_user),
		// 	"error" => " "
		// ];  
        // $data['dataadmin'] = $this->User_Model->get_admin()->result_array();
        $this->load->view('admin/data_admin', $data);
    }

    public function hapus_datauser($id_user)
	{
        if($this->User_Model->delete($id_user) != 1)
		{
            echo"
            <script>
                alert('Data gagal dihapus');
				document.location.href = '../data_user';
            </script>";
        }
        echo"
        <script>
            alert('Data berhasil dihapus');
			document.location.href = '../data_user';
        </script>";
	}

    public function hapus_dataadmin($id_user)
	{
		if($this->User_Model->delete($id_user) != 1)
		{
            echo"
            <script>
                alert('Data gagal dihapus');
				document.location.href = '../data_admin';
            </script>";
        }
        echo"
        <script>
            alert('Data berhasil dihapus');
			document.location.href = '../data_admin';
        </script>";
	}

    public function datakapal_admin() 
    {
        //PAGINATION
        $this->load->library('pagination');

        //config
        $config['base_url'] = base_url('admin/datakapal_admin');
        $config['total_rows'] = $this->Kapal_Model->countallKapalaktif();
        $config['per_page'] = 10;
        // var_dump($config['total_rows']); die;

        //styling
        $config['full_tag_open'] = '<nav class="mt-2"><ul class="pagination">';
        $config['full_tag_close'] = '  </ul></nav>';
        
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize pagination
        $this->pagination->initialize($config);

        $data['start']= $this->uri->segment(3);   
        $data['datakapal'] = $this->Kapal_Model->getKapal_aktif($config['per_page'], $data['start'])->result_array();
        
        $this->load->view('admin/data_kapal', $data);
    }

    public function datakapal_admin2() 
    {
        //PAGINATION
        $this->load->library('pagination');

        //config
        $config['base_url'] = base_url('admin/datakapal_admin2');
        $config['total_rows'] = $this->Kapal_Model->countallKapalnonaktif();
        $config['per_page'] = 10;
        // var_dump($config['total_rows']); die;

        //styling
        $config['full_tag_open'] = '<nav class="mt-2"><ul class="pagination">';
        $config['full_tag_close'] = '  </ul></nav>';
        
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize pagination
        $this->pagination->initialize($config);

        $data['start']= $this->uri->segment(3);   
        $data['datakapal'] = $this->Kapal_Model->getKapal_nonaktif($config['per_page'], $data['start'])->result_array();

        $this->load->view('admin/data_kapal_non', $data);
    }

    // public function datakapal_admin2() 
    // {
    //     $data['datakapal'] = $this->Kapal_Model->getAllKapal_nonaktif()->result_array();
    //     $this->load->view('admin/data_kapal_non', $data);
    // }

    // public function search_kapal() //this
    // {
    //     $key = $this->input->post('key');
    //     $data['datakapal'] = $this->Kapal_Model->search($key);
    //     $this->load->view('admin/search_kapal', $data);
    // }

    //menampilkan halaman view edit kapal
    public function edit_kapal($id_kapal) 
    {
        //echo "<pre>";
        //print_r($id_kapal);
        //echo "</pre>";
        $data['kapal'] = $this->Kapal_Model->getById_Kapal($id_kapal);   
        $this->load->view ('admin/edit_kapal', $data);
    }

    //proses edit kapal
    public function aksi_edit()
	{
		$id_kapal = $this->input->post("id_kapal");
		$nama_kapal = $this->input->post("nama_kapal");
        $gt = $this->input->post("gt");
        $kelompok_gt = $this->input->post("kelompok_gt");
		$tanggal_daftar = $this->input->post("tanggal_daftar");
        $waktu_daftar = $this->input->post("waktu_daftar");
        $nama_pemilik = $this->input->post("nama_pemilik");
        $no_hp_pemilik = $this->input->post("no_hp_pemilik");
        $jenis_kapal = $this->input->post("jenis_kapal");
        $status_kapal = $this->input->post("status_kapal");
        $panjang_kapal = $this->input->post("panjang_kapal");
        $mesin_utama = $this->input->post("mesin_utama");
        $tanda_selar = $this->input->post("tanda_selar");
        $izin_WPP = $this->input->post("izin_WPP");
        $izin_PP = $this->input->post("izin_PP");
        $izin_AT = $this->input->post("izin_AT");

		$data = [
			"nama_kapal" => $nama_kapal,
            "gt" => $gt,
            "kelompok_gt" => $kelompok_gt,
			"tanggal_daftar" => $tanggal_daftar,
			"waktu_daftar" => $waktu_daftar,
			"nama_pemilik" => $nama_pemilik,
			"no_hp_pemilik" => $no_hp_pemilik,
            "jenis_kapal" => $jenis_kapal,
            "status_kapal" => $status_kapal,
            "panjang_kapal" => $panjang_kapal,
            "mesin_utama" => $mesin_utama,
            "tanda_selar" => $tanda_selar,
            "izin_WPP" => $izin_WPP,
            "izin_PP" => $izin_PP,
            "izin_AT" => $izin_AT
		];
        
        if($this->Kapal_Model->update($data, $id_kapal) == 1)
		{
            echo"
            <script>
                alert('Data berhasil diubah');
                document.location.href = '../datakapal_admin';
            </script>";
        }
        else {
            echo"
            <script>
                alert('Data gagal diubah');
                document.location.href = '../datakapal_admin';
            </script>";
        }

		$this->load->view('admin/edit_kapal');
	}

    public function delete_kapal($id_kapal)
	{
		if($this->Kapal_Model->delete($id_kapal) != 1)
		{
            echo"
            <script>
                alert('Pesanan gagal dihapus');
				window.history.go(-1);
            </script>";
        }
        echo"
        <script>
            alert('Pesanan berhasil dihapus');
			window.history.go(-1);
        </script>";
	}

    public function profile_admin()
    {
		$data = [
			"user" => $this->user,
			"usr" => $this->User_Model->findAllByUser($this->user->id_user),
			"error" => " "
		];
		$this->load->view('admin/profile_admin', $data);
	}

    public function hapus_akun($id_user)
	{
		if($this->User_Model->delete($id_user) != 1)
		{
            echo"
            <script>
                alert('Data gagal dihapus');
				window.history.go(-1);
            </script>";
        }
        echo"
        <script>
            alert('Data berhasil dihapus');
			window.history.go(-1);
        </script>";
	} 

    public function search_user($rowno=0)
    {
        // Search text
        $search_text = "";
        if($this->input->post('key') != NULL ){
            $search_text = $this->input->post('key');
            $this->session->set_userdata(array("key"=>$search_text));
        }else{
            if($this->session->userdata('key') != NULL){
                $search_text = $this->session->userdata('key');
            }
        }

        $data['key'] =$search_text;

        $this->load->library('pagination');

        // Row per page
        $rowperpage = 10;

        // Row position
        if($rowno != 0){
        $rowno = ($rowno-1) * $rowperpage;
        }
    
        // All records count
        $allcount = $this->User_Model->getrecordCount($search_text);

        // var_dump($allcount); die;

        // Get records
        $users_record = $this->User_Model->getDatauser($rowno,$rowperpage,$search_text);
    
        // Pagination Configuration
        $config['base_url'] = base_url('admin/search_user');
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;

        //styling
        $config['full_tag_open'] = '<nav class="mt-2"><ul class="pagination">';
        $config['full_tag_close'] = '  </ul></nav>';
                
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        
        $config['attributes'] = array('class' => 'page-link');

        // Initialize
        $this->pagination->initialize($config);
        
        $data['result'] = $users_record;
        $data['row'] = $rowno;

        $this->load->view('search/search_user', $data);
    }

    public function search_admin($rowno=0)
    {
        // Search text
        $search_text = "";
        if($this->input->post('key') != NULL ){
            $search_text = $this->input->post('key');
            $this->session->set_userdata(array("key"=>$search_text));
        }else{
            if($this->session->userdata('key') != NULL){
                $search_text = $this->session->userdata('key');
            }
        }

        $data['key'] =$search_text;

        $this->load->library('pagination');

        // Row per page
        $rowperpage = 10;

        // Row position
        if($rowno != 0){
        $rowno = ($rowno-1) * $rowperpage;
        }
    
        // All records count
        $allcount = $this->User_Model->getrecordCountAdmin($search_text);

        //    var_dump($allcount); die;

        // Get records
        $users_record = $this->User_Model->getDataadmin($rowno,$rowperpage,$search_text);
    
        // Pagination Configuration
        $config['base_url'] = base_url('admin/search_admin');
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;

        //styling
        $config['full_tag_open'] = '<nav class="mt-2"><ul class="pagination">';
        $config['full_tag_close'] = '  </ul></nav>';
                
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        
        $config['attributes'] = array('class' => 'page-link');

        // Initialize
        $this->pagination->initialize($config);
        
        $data['result'] = $users_record;
        $data['row'] = $rowno;

        $this->load->view('search/search_admin', $data);
    }

    public function search_kapalaktif($rowno=0)
    {
        // Search text
        $search_text = "";
        if($this->input->post('key') != NULL ){
            $search_text = $this->input->post('key');
            $this->session->set_userdata(array("key"=>$search_text));
        }else{
            if($this->session->userdata('key') != NULL){
                $search_text = $this->session->userdata('key');
            }
        }

        $data['key'] =$search_text;

        $this->load->library('pagination');

        // Row per page
        $rowperpage = 10;

        // Row position
        if($rowno != 0){
        $rowno = ($rowno-1) * $rowperpage;
        }
    
        // All records count
        $allcount = $this->Kapal_Model->getrecordCount($search_text);

        // Get records
        $users_record = $this->Kapal_Model->getData($rowno,$rowperpage,$search_text);
    
        // Pagination Configuration
        $config['base_url'] = base_url('admin/search_kapalaktif');
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;

        //styling
        $config['full_tag_open'] = '<nav class="mt-2"><ul class="pagination">';
        $config['full_tag_close'] = '  </ul></nav>';
                
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        
        $config['attributes'] = array('class' => 'page-link');

        // Initialize
        $this->pagination->initialize($config);
        
        $data['result'] = $users_record;
        $data['row'] = $rowno;

        $this->load->view('search/search_kapalaktif', $data);
    }

    public function search_kapalnon($rowno=0)
    {
        // Search text
        $search_text = "";
        if($this->input->post('key') != NULL ){
            $search_text = $this->input->post('key');
            $this->session->set_userdata(array("key"=>$search_text));
        }else{
            if($this->session->userdata('key') != NULL){
                $search_text = $this->session->userdata('key');
            }
        }

        $data['key'] =$search_text;

        $this->load->library('pagination');

        // Row per page
        $rowperpage = 10;

        // Row position
        if($rowno != 0){
        $rowno = ($rowno-1) * $rowperpage;
        }
    
        // All records count
        $allcount = $this->Kapal_Model->getrecordkapalnon($search_text);

        // Get records
        $users_record = $this->Kapal_Model->getDatanon($rowno,$rowperpage,$search_text);
    
        // Pagination Configuration
        $config['base_url'] = base_url('admin/search_kapalnon');
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;

        //styling
        $config['full_tag_open'] = '<nav class="mt-2"><ul class="pagination">';
        $config['full_tag_close'] = '  </ul></nav>';
                
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        
        $config['attributes'] = array('class' => 'page-link');

        // Initialize
        $this->pagination->initialize($config);
        
        $data['result'] = $users_record;
        $data['row'] = $rowno;

        // $data['search_kapalaktif'] = $this->User_Model->search_kapalaktif($key);
        $this->load->view('search/search_kapalnon', $data);
    }

}