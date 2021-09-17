<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User extends CI_Controller {

    function __construct()	
	{
		parent::__construct();
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

    public function home() 
    {
        $this->load->view('user/home_user');
    }

    public function keberangkatan() 
    {
        //PAGINATION
        $this->load->library('pagination');

        //config
        $config['base_url'] = base_url('user/keberangkatan');
        $config['total_rows'] = $this->Kapal_Model->countallKapalaktif();
        $config['per_page'] = 10;
        // var_dump($config['total_rows']); die;

        //styling
        $config['full_tag_open'] = '<nav class="mt-4"><ul class="pagination">';
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
        $data['datakapal_user'] = $this->Kapal_Model->getKapal_aktif($config['per_page'], $data['start'])->result_array();

        $this->load->view('fitur/keberangkatan', $data);
    }

    //menampilkan halaman view inputberangkat
    public function inputberangkat($id_kapal) 
    {
        //echo "<pre>";
        //print_r($id_kapal);
        //echo "</pre>";
        $data['kapal'] = $this->Kapal_Model->getById_Kapal($id_kapal);
        $this->load->view ('fitur/inputberangkat', $data);
    }

    public function kedatangan() 
    {
        //PAGINATION
        $this->load->library('pagination');

        //config
        $config['base_url'] = base_url('user/kedatangan');
        $config['total_rows'] = $this->Kedatangan_m->countallkedatanganaktif();
        $config['per_page'] = 10;
        //var_dump($config['total_rows']); die;

        //styling
        $config['full_tag_open'] = '<nav class="mt-4"><ul class="pagination">';
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
        $data['keberangkatan'] = $this->Kedatangan_m->getKapal_keberangkatan($config['per_page'], $data['start'])->result_array();

        $this->load->view('fitur/kedatangan', $data);
    }

    public function inputdatang($id_out) 
    {
        //echo "<pre>";
        //print_r($id_kapal);
        //echo "</pre>";
        $data['berangkat'] = $this->Kedatangan_m->getById_out($id_out);
        $this->load->view ('fitur/inputdatang', $data);
    }

    public function insert_kapal() 
    {
		$nama_kapal = $this->input->post("nama_kapal");
        $gt = $this->input->post("gt");
        $kelompok_gt = $this->input->post("kelompok_gt");
        date_default_timezone_set('Asia/Jakarta');
		$tanggal_daftar = date('Y-m-d');
		$waktu_daftar = date('H:i:s');
		$nama_pemilik = $this->input->post("nama_pemilik");
		$no_hp_pemilik = $this->input->post("no_hp_pemilik");
        $nama_nahkoda = $this->input->post("nama_nahkoda");
        $abk = $this->input->post("abk");
        $alat_tangkap = $this->input->post("alat_tangkap");
        $alat_tangkap2 = $this->input->post("alat_tangkap2");
        $alat_bantu_tangkap = $this->input->post("alat_bantu_tangkap");
        $jenis_kapal = $this->input->post("jenis_kapal");
        $panjang_kapal = $this->input->post("panjang_kapal");
        $status_kapal = $this->input->post("status_kapal");
        $mesin_utama = $this->input->post("mesin_utama");
        $tanda_selar = $this->input->post("tanda_selar");
        $jenis_izin = $this->input->post("jenis_izin");
        $izin_WPP = $this->input->post("izin_WPP");
        $izin_PP = $this->input->post("izin_PP");
        $izin_AT = $this->input->post("izin_AT");

		$data = array(
			"nama_kapal" => $nama_kapal,
            "gt" => $gt,
            "kelompok_gt" => $kelompok_gt,
			"tanggal_daftar" => $tanggal_daftar,
			"waktu_daftar" => $waktu_daftar,
			"nama_pemilik" => $nama_pemilik,
			"no_hp_pemilik" => $no_hp_pemilik,
            "nama_nahkoda" => $nama_nahkoda,
            "abk" => $abk,
            "alat_tangkap" => $alat_tangkap,
            "alat_tangkap2" => $alat_tangkap2,
            "alat_bantu_tangkap" => $alat_bantu_tangkap,
            "jenis_kapal" => $jenis_kapal,
            "panjang_kapal" => $panjang_kapal,
            "status_kapal" => $status_kapal,
            "mesin_utama" => $mesin_utama,
            "tanda_selar" => $tanda_selar,
            "jenis_izin" => $jenis_izin,
            "izin_WPP" => $izin_WPP,
            "izin_PP" => $izin_PP,
            "izin_AT" => $izin_AT,
        );

        $this->Kapal_Model->input($data,'kapal');
        redirect('user/datakapal_user');
	}

    public function datakapal_user() 
    {
        $data['kelompokgt'] = $this->Kapal_Model->datakapal_getkelompokgt();

        //PAGINATION
        $this->load->library('pagination');

        //config
        $config['base_url'] = base_url('user/datakapal_user');
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
        $data['datakapal_user'] = $this->Kapal_Model->getKapal_aktif($config['per_page'], $data['start'])->result_array();

        $this->load->view('user/data_kapal', $data);
    }

    public function search_kapaluser($rowno=0)
    {
        // Search text
        $search_text = "";
        if($this->input->post('submit') != NULL ){
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
        $config['base_url'] = base_url('user/search_kapaluser');
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
        $data['search'] = $search_text;
        $data['kelompokgt'] = $this->Kapal_Model->datakapal_getkelompokgt();

        // Load view
        $this->load->view('search/search_kapaluser', $data);
    }

    public function edit_kapal($id_kapal) 
    {
        $data['kapal'] = $this->Kapal_Model->getById_Kapal($id_kapal);   
        $this->load->view('user/edit_kapal', $data);
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
        $nama_nahkoda = $this->input->post("nama_nahkoda");
        $abk = $this->input->post("abk");
        $alat_bantu_tangkap = $this->input->post("alat_bantu_tangkap");
        $jenis_kapal = $this->input->post("jenis_kapal");
        $status_kapal = $this->input->post("status_kapal");
        $panjang_kapal = $this->input->post("panjang_kapal");
        $mesin_utama = $this->input->post("mesin_utama");
        $tanda_selar = $this->input->post("tanda_selar");
        $jenis_izin = $this->input->post("jenis_izin");
        $izin_WPP = $this->input->post("izin_WPP");
        $izin_PP = $this->input->post("izin_PP");
        $izin_AT = $this->input->post("izin_AT");

        if($this->input->post("alat_tangkap") != NULL AND $this->input->post("alat_tangkap2") != NULL){
            $alat_tangkap = "";
            $alat_tangkap2 = $this->input->post("alat_tangkap2");
        }
        else{
            $alat_tangkap = $this->input->post("alat_tangkap");
            $alat_tangkap2 = $this->input->post("alat_tangkap2");    
        }

        $data = [
            "nama_kapal" => $nama_kapal,
            "gt" => $gt,
            "kelompok_gt" => $kelompok_gt,
            "tanggal_daftar" => $tanggal_daftar,
            "waktu_daftar" => $waktu_daftar,
            "nama_pemilik" => $nama_pemilik,
            "no_hp_pemilik" => $no_hp_pemilik,
            "nama_nahkoda" => $nama_nahkoda,
            "abk" => $abk,
            "alat_tangkap" => $alat_tangkap,
            "alat_tangkap2" => $alat_tangkap2,
            "alat_bantu_tangkap" => $alat_bantu_tangkap,
            "jenis_kapal" => $jenis_kapal,
            "status_kapal" => $status_kapal,
            "panjang_kapal" => $panjang_kapal,
            "mesin_utama" => $mesin_utama,
            "tanda_selar" => $tanda_selar,
            "jenis_izin" => $jenis_izin,
            "izin_WPP" => $izin_WPP,
            "izin_PP" => $izin_PP,
            "izin_AT" => $izin_AT
            ];
            
        if($this->Kapal_Model->update($data, $id_kapal) == 1)
        {
            echo"
            <script>
                alert('Data berhasil diubah');
                document.location.href = '../user/datakapal_user';
            </script>";
        }
        else {
            echo"
            <script>
                alert('Data gagal diubah');
                document.location.href = '../user/datakapal_user';
            </script>";
        }
    
        $this->load->view('user/edit_kapal');
    }

    // public function aksi_edit()
    // {
    //     $id_kapal = $this->input->post("id_kapal");
    //     $nama_kapal = $this->input->post("nama_kapal");
    //     $gt = $this->input->post("gt");
    //     $kelompok_gt = $this->input->post("kelompok_gt");
    //     $tanggal_daftar = $this->input->post("tanggal_daftar");
    //     $waktu_daftar = $this->input->post("waktu_daftar");
    //     $nama_pemilik = $this->input->post("nama_pemilik");
    //     $no_hp_pemilik = $this->input->post("no_hp_pemilik");
    //     $nama_nahkoda = $this->input->post("nama_nahkoda");
    //     $abk = $this->input->post("abk");
    //     $alat_tangkap = $this->input->post("alat_tangkap");
    //     $alat_tangkap2 = $this->input->post("alat_tangkap2");
    //     $alat_bantu_tangkap = $this->input->post("alat_bantu_tangkap");
    //     $jenis_kapal = $this->input->post("jenis_kapal");
    //     $status_kapal = $this->input->post("status_kapal");
    //     $panjang_kapal = $this->input->post("panjang_kapal");
    //     $mesin_utama = $this->input->post("mesin_utama");
    //     $tanda_selar = $this->input->post("tanda_selar");
    //     $jenis_izin = $this->input->post("jenis_izin");
    //     $izin_WPP = $this->input->post("izin_WPP");
    //     $izin_PP = $this->input->post("izin_PP");
    //     $izin_AT = $this->input->post("izin_AT");

    //     $data = [
    //         "nama_kapal" => $nama_kapal,
    //         "gt" => $gt,
    //         "kelompok_gt" => $kelompok_gt,
    //         "tanggal_daftar" => $tanggal_daftar,
    //         "waktu_daftar" => $waktu_daftar,
    //         "nama_pemilik" => $nama_pemilik,
    //         "no_hp_pemilik" => $no_hp_pemilik,
    //         "nama_nahkoda" => $nama_nahkoda,
    //         "abk" => $abk,
    //         "alat_tangkap" => $alat_tangkap,
    //         "alat_tangkap2" => $alat_tangkap2,
    //         "alat_bantu_tangkap" => $alat_bantu_tangkap,
    //         "jenis_kapal" => $jenis_kapal,
    //         "status_kapal" => $status_kapal,
    //         "panjang_kapal" => $panjang_kapal,
    //         "mesin_utama" => $mesin_utama,
    //         "tanda_selar" => $tanda_selar,
    //         "jenis_izin" => $jenis_izin,
    //         "izin_WPP" => $izin_WPP,
    //         "izin_PP" => $izin_PP,
    //         "izin_AT" => $izin_AT
    //         ];
            
    //     if($this->Kapal_Model->update($data, $id_kapal) == 1)
    //     {
    //         echo"
    //         <script>
    //             alert('Data berhasil diubah');
    //             document.location.href = '../user/datakapal_user';
    //         </script>";
    //     }
    //     else {
    //         echo"
    //         <script>
    //             alert('Data gagal diubah');
    //             document.location.href = '../user/datakapal_user';
    //         </script>";
    //     }
    
    //     $this->load->view('user/edit_kapal');
    // }

    public function hapus_kapal($id_kapal)
	{ 
        $id_kapal = $this->input->post("id_kapal");
        $kondisi = $this->input->post("kondisi");
    
        $data = [
            "kondisi" => $kondisi,
            ];
            
        if($this->Kapal_Model->update_kondisi($data, $id_kapal) == 1)
        {
            echo"
            <script>
                alert('Data berhasil dihapus');
                document.location.href = '../datakapal_user';
                </script>";
        }else {
            echo"
            <script>
                alert('Data gagal dihapus');
                document.location.href = '../datakapal_user';
            </script>";
        }
    
	}
  
    public function dataout() 
    {
        //PAGINATION
        $this->load->library('pagination');

        //config
        $config['base_url'] = base_url('user/dataout');
        $config['total_rows'] = $this->Kapal_Model->countallKapalaktifjoin();
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
        $data['keberangkatan'] = $this->Kapal_Model->getKapal_aktifjoin($config['per_page'], $data['start'])->result_array();

        $data['lokasi'] = $this->Keberangkatan_m->dataout_getlokasi();
        $data['alat_tangkap'] = $this->Keberangkatan_m->dataout_alattangkap();

        $this->load->view('fitur/dataout', $data);
    }

    public function edit_dataout($id_out) 
    {
        $data['out'] = $this->Keberangkatan_m->getbyid_out($id_out);   
        $this->load->view('user/edit_dataout', $data);
    }    

    //proses edit dataout
    public function aksi_editdataout()
	{
        $id_kapal = $this->input->post("id_kapal");
        $id_out = $this->input->post("id_out");
		$tanggal_out = $this->input->post("tanggal_out");
        $waktu_out = $this->input->post("waktu_out");
        $no_SPB = $this->input->post("no_SPB");
        $tujuan_berangkat = $this->input->post("tujuan_berangkat");
        $daerah_asal = $this->input->post("daerah_asal");
        $plb_tujuan = $this->input->post("plb_tujuan");
        $lokasi = $this->input->post("lokasi");
		$bbm = $this->input->post("bbm");
        $solar = $this->input->post("solar");
        $minyak_or_gas = $this->input->post("minyak_or_gas");
        $es = $this->input->post("es");
        $air = $this->input->post("air");
        $bensin = $this->input->post("bensin");
        $makanan = $this->input->post("makanan");
        $oli = $this->input->post("oli");
        $garam = $this->input->post("garam");
        $umpan = $this->input->post("umpan");
        $bekal_lainnya = $this->input->post("bekal_lainnya");

		$data = [
			"tanggal_out" => $tanggal_out,
            "waktu_out" => $waktu_out,
            "no_SPB" => $no_SPB,
            "tujuan_berangkat" => $tujuan_berangkat,
            "daerah_asal" => $daerah_asal,
            "plb_tujuan" => $plb_tujuan,
            "lokasi" => $lokasi,
			"bbm" => $bbm,
            "solar" => $solar,
            "minyak_or_gas" => $minyak_or_gas,
            "es" => $es,
            "air" => $air,
            "bensin" => $bensin,
            "makanan" => $makanan,
            "oli" => $oli,
            "garam" => $garam,
            "umpan" => $umpan,
            "bekal_lainnya" => $bekal_lainnya
		];
        
        if($this->Keberangkatan_m->update($data, $id_out) == 1)
		{
            echo"
            <script>
                alert('Data berhasil diubah');
                document.location.href = '../dataout';
            </script>";
        }
        else {
            echo"
            <script>
                alert('Data gagal diubah');
                document.location.href = '../dataout';
            </script>";
        }

		$this->load->view('user/edit_dataout');
	}

    public function datain() 
    {
        //PAGINATION
        $this->load->library('pagination');

        //config
        $config['base_url'] = base_url('user/datain');
        $config['total_rows'] = $this->Kedatangan_m->countadatainaktif();
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
        $data['kedatangan'] = $this->Kedatangan_m->getdatain($config['per_page'], $data['start'])->result_array();

        $data['lokasi'] = $this->Kedatangan_m->datain_getlokasi();
        $data['kegiatan'] = $this->Kedatangan_m->datain_getkegiatan();
        // $data['kedatangan'] = $this->Kedatangan_m->getdatain()->result_array();
        $this->load->view('fitur/datain', $data);
    }
    
    public function edit_datain($id_in) 
    {
        $data['in'] = $this->Kedatangan_m->getbyid_in($id_in);   
        $this->load->view('user/edit_datain', $data);
    }

    //proses edit datain
    public function aksi_editdatain()
	{
        $id_kapal = $this->input->post("id_kapal");
        $id_out = $this->input->post("id_out");
        $id_in = $this->input->post("id_in");
		$tanggal_in = $this->input->post("tanggal_in");
        $waktu_in = $this->input->post("waktu_in");
        $lokasi_in = $this->input->post("lokasi_in");
        $jumlah_hari_trip = $this->input->post("jumlah_hari_trip");
        $kegiatan = $this->input->post("kegiatan");
        $lainnya = $this->input->post("lainnya");

		$data = [
			"tanggal_in" => $tanggal_in,
            "waktu_in" => $waktu_in,
            "lokasi_in" => $lokasi_in,
            "jumlah_hari_trip" => $jumlah_hari_trip,
            "kegiatan" => $kegiatan,
            "lainnya" => $lainnya,
		];
        
        if($this->Kedatangan_m->update($data, $id_in) == 1)
		{
            echo"
            <script>
                alert('Data berhasil diubah');
                document.location.href = '../datain';
            </script>";
        }
        else {
            echo"
            <script>
                alert('Data gagal diubah');
                document.location.href = '../datain';
            </script>";
        }

		$this->load->view('user/edit_datain');
	}


    public function insert_dataout() 
    {
        
        $id_kapal = $this->input->post("id_kapal");
		$tanggal_out = $this->input->post("tanggal_out");
        $waktu_out = $this->input->post("waktu_out");
        $no_SPB = $this->input->post("no_SPB");
        $tujuan_berangkat = $this->input->post("tujuan_berangkat");
        $daerah_asal = $this->input->post("daerah_asal");
        $plb_tujuan = $this->input->post("plb_tujuan");
        $lokasi = $this->input->post("lokasi");
		$bbm = $this->input->post("bbm");
        $solar = $this->input->post("solar");
        $minyak_or_gas = $this->input->post("minyak_or_gas");
        $es = $this->input->post("es");
        $air = $this->input->post("air");
        $bensin = $this->input->post("bensin");
        $makanan = $this->input->post("makanan");
        $oli = $this->input->post("oli");
        $garam = $this->input->post("garam");
        $umpan = $this->input->post("umpan");
        $bekal_lainnya = $this->input->post("bekal_lainnya");

		$data = array(
            "id_kapal" => $id_kapal,
			"tanggal_out" => $tanggal_out,
            "waktu_out" => $waktu_out,
            "no_SPB" => $no_SPB,
            "tujuan_berangkat" => $tujuan_berangkat,
            "daerah_asal" => $daerah_asal,
            "plb_tujuan" => $plb_tujuan,
            "lokasi" => $lokasi,
			"bbm" => $bbm,
            "solar" => $solar,
            "minyak_or_gas" => $minyak_or_gas,
            "es" => $es,
            "air" => $air,
            "bensin" => $bensin,
            "makanan" => $makanan,
            "oli" => $oli,
            "garam" => $garam,
            "umpan" => $umpan,
            "bekal_lainnya" => $bekal_lainnya
        );

        $this->Keberangkatan_m->input($data,'keberangkatan');
        redirect('keberangkatan');
	}

    public function insert_datain() 
    {

        $id_kapal = $this->input->post("id_kapal");
        $id_out = $this->input->post("id_out");
		$tanggal_in = $this->input->post("tanggal_in");
        $waktu_in = $this->input->post("waktu_in");
        $lokasi_in = $this->input->post("lokasi_in");
        $jumlah_hari_trip = $this->input->post("jumlah_hari_trip");
        $kegiatan = $this->input->post("kegiatan");
        $lainnya = $this->input->post("lainnya");

		$data = array(
            "id_kapal" => $id_kapal,
            "id_out" => $id_out,
			"tanggal_in" => $tanggal_in,
            "waktu_in" => $waktu_in,
            "lokasi_in" => $lokasi_in,
            "jumlah_hari_trip" => $jumlah_hari_trip,
            "kegiatan" => $kegiatan,
            "lainnya" => $lainnya,
        );

        $this->Kedatangan_m->input($data,'kedatangan');

        $id_out = $this->input->post("id_out");
		$status = $this->input->post("status");

		$data2['status']= $status;

        $this->Kedatangan_m->update_status($data2, $id_out);

        $this->session->set_flashdata('ambil',$kegiatan);
         
        $user = $this->session->flashdata('ambil');
        if($user=='Bongkar Ikan')
        {
            redirect('inputikan/'.$id_out);
        }
        else
        {
            redirect('datain');
        }
	}

    public function insert_ikan() 
    {
        $id_kapal = $this->input->post('id_kapal');
        $id_out = $this->input->post('id_out');
        $jenis_ikan = $this->input->post('jenis_ikan[]');
        $volume_timbang = $this->input->post('volume_timbang[]');
        $volume_estimasi = $this->input->post('volume_estimasi[]');
        $kondisi_ikan = $this->input->post('kondisi_ikan[]');

        // echo '<pre>';
        // print_r($jenis_ikan);
        // echo '</pre>';
     
        $data = array();   
        $index = 0;
        foreach($jenis_ikan as $j){
          array_push($data, array(
            'id_kapal'=> $id_kapal,
            'id_out'=> $id_out,
            'jenis_ikan'=> $j,
            'volume_timbang'=>$volume_timbang[$index],
            'volume_estimasi'=>$volume_estimasi[$index],
            'kondisi_ikan'=>$kondisi_ikan[$index]
            ));
               
          $index++;
        } // end foreach
           
        $this->db->insert_batch('hasil_tangkap', $data);
        redirect('kedatangan');
	}

    public function inputikan($id_out) 
    {
        $data['berangkat'] = $this->Kedatangan_m->getById_out($id_out);
        $this->load->view('fitur/inputikan', $data);
    }

    public function hasil_tangkap($id_out) 
    {
        // echo "<pre>";
        // print_r($id_out);
        // echo "</pre>";
        $data['kapal'] = $this->Kedatangan_m->get_namakapal($id_out);
        $data['hasil'] = $this->Kedatangan_m->get_hasil($id_out);

        if(isset($data['kapal'])){
            $this->load->view('fitur/hasil_tangkap', $data);
        }
        else{
            echo"
            <script>
                alert('Tidak Ada Data Hasil Tangkapan');
                if (confirm('Masukkan Hasil Tangkapan?')) {
                    // Save it!
                    document.location.href = '../tambah_ikan/$id_out';
                } else {
                    // Do nothing!
                    window.history.go(-1);
                }        
            </script>";
        }
    }

    public function daftar_ikan() 
    {
        //PAGINATION
        $this->load->library('pagination');

        //config
        $config['base_url'] = base_url('user/daftar_ikan');
        $config['total_rows'] = $this->Kedatangan_m->countallhasil();
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
        $data['kedatangan'] = $this->Kedatangan_m->gethasiltangkap($config['per_page'], $data['start'])->result_array();

        $data['jenis_ikan'] = $this->Kedatangan_m->dataproduksi_getjenisikan();
        $data['kondisi_ikan'] = $this->Kedatangan_m->dataproduksi_getkondisiikan();
        $this->load->view('fitur/daftar_ikan', $data);
    }

    public function hapus_dataproduksi($id_hasil)
	{
		if($this->Kedatangan_m->delete_produksi($id_hasil) != 1)
		{
            echo"
            <script>
                alert('Data gagal dihapus');
				document.location.href = '../daftar_ikan';
            </script>";
        }
        echo"
        <script>
            alert('Data berhasil dihapus');
			document.location.href = '../daftar_ikan';
        </script>";
	}

    public function hapus_dataout($id_out)
	{
		if($this->Keberangkatan_m->delete($id_out) != 1)
		{
            echo"
            <script>
                alert('Data gagal dihapus');
				document.location.href = '../dataout';
            </script>";
        }
        echo"
        <script>
            alert('Data berhasil dihapus');
			document.location.href = '../dataout';
        </script>";
	}

    public function hapus_datain($id_in)
	{   
        $id_out = $this->input->post("id_out");
        $status = $this->input->post("status");

        $data2 = [
            "status" => $status,
            ];

        $this->Kedatangan_m->update_status($data2, $id_out);

		if($this->Kedatangan_m->delete($id_in) != 1)
		{
            echo"
            <script>
                alert('Data gagal dihapus');
				window.history.go(-1);
            </script>";
        }
        else {
            $this->Kedatangan_m->delete2($id_out);
            echo"
            <script>
            alert('Data berhasil dihapus');
			window.history.go(-1);
            </script>";
        }
        
	}

    public function delete_dataout2($id_out2)
	{
		if($this->Keberangkatan_m->delete2($id_out2) != 1)
		{
            echo"
            <script>
                alert('Data gagal dihapus');
				document.location.href = '../dataout2';
            </script>";
        }
        echo"
        <script>
            alert('Data berhasil dihapus');
			document.location.href = '../dataout2';
        </script>";
	}

    public function coba() 
    {
        $this->load->view('user/contoh');
    }

    public function edit_ikan($id_hasil) 
    {
        $data['ikan'] = $this->Kedatangan_m->getbyid_hasil($id_hasil);   
        $this->load->view('user/edit_ikan', $data);
    }   

    

    //proses edit dataout
    public function aksi_editikan()
    {
        $id_hasil = $this->input->post('id_hasil');
        $id_kapal = $this->input->post('id_kapal');
        $id_out = $this->input->post('id_out');
        $jenis_ikan = $this->input->post('jenis_ikan');
        $volume_timbang = $this->input->post('volume_timbang');
        $volume_estimasi = $this->input->post('volume_estimasi');
        $kondisi_ikan = $this->input->post('kondisi_ikan');
    
        $data = [
            'jenis_ikan'=> $jenis_ikan,
            'volume_timbang'=>$volume_timbang,
            'volume_estimasi'=>$volume_estimasi,
            'kondisi_ikan'=>$kondisi_ikan
        ];
            
        if($this->Kedatangan_m->update_ikan($data, $id_hasil) == 1)
        {
            echo"
            <script>
                alert('Data berhasil diubah');
                window.history.go(-2);
            </script>";
        }
        else {
            echo"
            <script>
                alert('Data gagal diubah');
                window.history.go(-2);
            </script>";
        }
    }

    public function hapus_ikan($id_hasil)
	{
		if($this->Kedatangan_m->delete_ikan($id_hasil) != 1)
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

    public function tambah_ikan($id_out) 
    {
        $data['hasil'] = $this->Kedatangan_m->getById_out($id_out);
        $this->load->view('user/tambah_ikan', $data);
    }

    public function insert_ikan2() 
    {
        $id_kapal = $this->input->post('id_kapal');
        $id_out = $this->input->post('id_out');
        $jenis_ikan = $this->input->post('jenis_ikan[]');
        $volume_timbang = $this->input->post('volume_timbang[]');
        $volume_estimasi = $this->input->post('volume_estimasi[]');
        $kondisi_ikan = $this->input->post('kondisi_ikan[]');

        // echo '<pre>';
        // print_r($jenis_ikan);
        // echo '</pre>';
     
        $data = array();   
        $index = 0;
        foreach($jenis_ikan as $j){
          array_push($data, array(
            'id_kapal'=> $id_kapal,
            'id_out'=> $id_out,
            'jenis_ikan'=> $j,
            'volume_timbang'=>$volume_timbang[$index],
            'volume_estimasi'=>$volume_estimasi[$index],
            'kondisi_ikan'=>$kondisi_ikan[$index]
            ));
               
          $index++;
        } // end foreach
           
        $this->db->insert_batch('hasil_tangkap', $data); //('nama table', 'variabel')
        redirect('hasil_tangkap/'.$id_out);
	}

    public function excel() 
    {
        $data['export'] = $this->Kedatangan_m->getdataproduksi()->result();

        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator("Lingga Nazila P.");
        $object->getProperties()->setLastModifiedBy("Lingga Nazila P.");
        $object->getProperties()->setTitle("Data Produksi dan Kapal");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama Kapal');
        $object->getActiveSheet()->setCellValue('C1', 'Nama Pemilik Kapal');
        $object->getActiveSheet()->setCellValue('D1', 'Nama Nahkoda');
        $object->getActiveSheet()->setCellValue('E1', 'Jumlah ABK');
        $object->getActiveSheet()->setCellValue('F1', 'Daerah Asal');
        $object->getActiveSheet()->setCellValue('G1', 'Tanggal Berangkat');
        $object->getActiveSheet()->setCellValue('H1', 'Tanggal Bongkar');
        $object->getActiveSheet()->setCellValue('I1', 'Lama Melaut (Hari)');
        $object->getActiveSheet()->setCellValue('J1', 'Status Kapal');
        $object->getActiveSheet()->setCellValue('K1', 'Jenis Kapal');
        $object->getActiveSheet()->setCellValue('L1', 'GT');
        $object->getActiveSheet()->setCellValue('M1', 'Kelompok GT');
        $object->getActiveSheet()->setCellValue('N1', 'Panjang Kapal');
        $object->getActiveSheet()->setCellValue('O1', 'Mesin Utama (PK)');
        $object->getActiveSheet()->setCellValue('P1', 'Alat Tangkap');
        $object->getActiveSheet()->setCellValue('Q1', 'Jenis Ikan');
        $object->getActiveSheet()->setCellValue('R1', 'Volume Timbang (KG)');
        $object->getActiveSheet()->setCellValue('S1', 'Volume Estimasi');
        $object->getActiveSheet()->setCellValue('T1', 'Kondisi Ikan');
        $object->getActiveSheet()->setCellValue('U1', 'Lainnya');

        $baris = 2;
        $no = 1;

        foreach ($data['export'] as $export) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $export->nama_kapal);
            $object->getActiveSheet()->setCellValue('C'.$baris, $export->nama_pemilik);
            $object->getActiveSheet()->setCellValue('D'.$baris, $export->nama_nahkoda);
            $object->getActiveSheet()->setCellValue('E'.$baris, $export->abk);
            $object->getActiveSheet()->setCellValue('F'.$baris, $export->daerah_asal);
            $object->getActiveSheet()->setCellValue('G'.$baris, $export->tanggal_out);
            $object->getActiveSheet()->setCellValue('H'.$baris, $export->tanggal_in);
            $object->getActiveSheet()->setCellValue('I'.$baris, $export->jumlah_hari_trip);
            $object->getActiveSheet()->setCellValue('J'.$baris, $export->status_kapal);
            $object->getActiveSheet()->setCellValue('K'.$baris, $export->jenis_kapal);
            $object->getActiveSheet()->setCellValue('L'.$baris, $export->GT);
            $object->getActiveSheet()->setCellValue('M'.$baris, $export->kelompok_gt);
            $object->getActiveSheet()->setCellValue('N'.$baris, $export->panjang_kapal);
            $object->getActiveSheet()->setCellValue('O'.$baris, $export->mesin_utama);
            $object->getActiveSheet()->setCellValue('P'.$baris, $export->alat_tangkap);
            $object->getActiveSheet()->setCellValue('P'.$baris, $export->alat_tangkap2);
            $object->getActiveSheet()->setCellValue('Q'.$baris, $export->jenis_ikan);
            $object->getActiveSheet()->setCellValue('R'.$baris, $export->volume_timbang);
            $object->getActiveSheet()->setCellValue('S'.$baris, $export->volume_estimasi);
            $object->getActiveSheet()->setCellValue('T'.$baris, $export->kondisi_ikan);
            $object->getActiveSheet()->setCellValue('U'.$baris, $export->lainnya);

            $baris++;
        }

        $filename="Data Produksi dan Kapal".'.xlsx';

        $object->getActiveSheet()->setTitle("Data Produksi dan Kapal");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename. '"');
        header('Cache-Control: max-age=0');

        $writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }

    public function excelfilter() 
    {
        $tanggalawal_out = $this->input->post("tanggalawal_out");
        $tanggalakhir_out = $this->input->post("tanggalakhir_out");

        $data['datafilter'] = $this->Kedatangan_m->getdataproduksi2($tanggalawal_out, $tanggalakhir_out)->result();
        // $data['export'] = $this->Kedatangan_m->getdataproduksi2()->result();

        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator("Lingga Nazila P.");
        $object->getProperties()->setLastModifiedBy("Lingga Nazila P.");
        $object->getProperties()->setTitle("Data Produksi dan Kapal");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama Kapal');
        $object->getActiveSheet()->setCellValue('C1', 'Nama Pemilik Kapal');
        $object->getActiveSheet()->setCellValue('D1', 'Nama Nahkoda');
        $object->getActiveSheet()->setCellValue('E1', 'Jumlah ABK');
        $object->getActiveSheet()->setCellValue('F1', 'Daerah Asal');
        $object->getActiveSheet()->setCellValue('G1', 'Tanggal Berangkat');
        $object->getActiveSheet()->setCellValue('H1', 'Tanggal Bongkar');
        $object->getActiveSheet()->setCellValue('I1', 'Lama Melaut (Hari)');
        $object->getActiveSheet()->setCellValue('J1', 'Status Kapal');
        $object->getActiveSheet()->setCellValue('K1', 'Jenis Kapal');
        $object->getActiveSheet()->setCellValue('L1', 'GT');
        $object->getActiveSheet()->setCellValue('M1', 'Kelompok GT');
        $object->getActiveSheet()->setCellValue('N1', 'Panjang Kapal');
        $object->getActiveSheet()->setCellValue('O1', 'Mesin Utama (PK)');
        $object->getActiveSheet()->setCellValue('P1', 'Alat Tangkap');
        $object->getActiveSheet()->setCellValue('Q1', 'Jenis Ikan');
        $object->getActiveSheet()->setCellValue('R1', 'Volume Timbang (KG)');
        $object->getActiveSheet()->setCellValue('S1', 'Volume Estimasi');
        $object->getActiveSheet()->setCellValue('T1', 'Kondisi Ikan');
        $object->getActiveSheet()->setCellValue('U1', 'Lainnya');

        $baris = 2;
        $no = 1;

        foreach ($data['datafilter'] as $export) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $export->nama_kapal);
            $object->getActiveSheet()->setCellValue('C'.$baris, $export->nama_pemilik);
            $object->getActiveSheet()->setCellValue('D'.$baris, $export->nama_nahkoda);
            $object->getActiveSheet()->setCellValue('E'.$baris, $export->abk);
            $object->getActiveSheet()->setCellValue('F'.$baris, $export->daerah_asal);
            $object->getActiveSheet()->setCellValue('G'.$baris, $export->tanggal_out);
            $object->getActiveSheet()->setCellValue('H'.$baris, $export->tanggal_in);
            $object->getActiveSheet()->setCellValue('I'.$baris, $export->jumlah_hari_trip);
            $object->getActiveSheet()->setCellValue('J'.$baris, $export->status_kapal);
            $object->getActiveSheet()->setCellValue('K'.$baris, $export->jenis_kapal);
            $object->getActiveSheet()->setCellValue('L'.$baris, $export->GT);
            $object->getActiveSheet()->setCellValue('M'.$baris, $export->kelompok_gt);
            $object->getActiveSheet()->setCellValue('N'.$baris, $export->panjang_kapal);
            $object->getActiveSheet()->setCellValue('O'.$baris, $export->mesin_utama);
            $object->getActiveSheet()->setCellValue('P'.$baris, $export->alat_tangkap);
            $object->getActiveSheet()->setCellValue('P'.$baris, $export->alat_tangkap2);
            $object->getActiveSheet()->setCellValue('Q'.$baris, $export->jenis_ikan);
            $object->getActiveSheet()->setCellValue('R'.$baris, $export->volume_timbang);
            $object->getActiveSheet()->setCellValue('S'.$baris, $export->volume_estimasi);
            $object->getActiveSheet()->setCellValue('T'.$baris, $export->kondisi_ikan);
            $object->getActiveSheet()->setCellValue('U'.$baris, $export->lainnya);

            $baris++;
        }

        $filename="Data Produksi dan Kapal".'.xlsx';

        $object->getActiveSheet()->setTitle("Data Produksi dan Kapal");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename. '"');
        header('Cache-Control: max-age=0');

        $writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;

        $this->load->view('sort&filter/filter_ikan', $data);
    }

    public function rincian_kapal($id_kapal) 
    {
        $data['keberangkatan'] = $this->Keberangkatan_m->get_keberangkatan($id_kapal);
        $data['kedatangan'] = $this->Kedatangan_m->get_kedatangan($id_kapal);
        $data['hasil'] = $this->Kedatangan_m->get_sum_ikan($id_kapal)->row();
        $data['count_out'] = $this->Keberangkatan_m->count_out($id_kapal)->row();
        $data['count_in'] = $this->Kedatangan_m->count_in($id_kapal)->row();
        $data['kapal'] = $this->Kapal_Model->getById_Kapal($id_kapal);
        
        $this->load->view('fitur/rincian_kapal', $data);
    }

    public function search_kedatangan($rowno=0)
    {
        // Search text
        $search_text = "";
        if($this->input->post('submit') != NULL ){
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
        $allcount = $this->Kedatangan_m->getrecordCount($search_text);

        // Get records
        $users_record = $this->Kedatangan_m->getData($rowno,$rowperpage,$search_text);
    
        // Pagination Configuration
        $config['base_url'] = base_url('user/search_kedatangan');
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;

        //styling
        $config['full_tag_open'] = '<nav class="mt-4"><ul class="pagination">';
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

        // Load view
        $this->load->view('search/search_kedatangan', $data);
    }

    public function search_keberangkatan($rowno=0)
    {
        // Search text
        $search_text = "";
        if($this->input->post('submit') != NULL ){
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
        $config['base_url'] = base_url('user/search_keberangkatan');
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;

        //styling
        $config['full_tag_open'] = '<nav class="mt-4"><ul class="pagination">';
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
        $data['search'] = $search_text;
        $data['kelompokgt'] = $this->Kapal_Model->datakapal_getkelompokgt();

        // Load view
        $this->load->view('search/search_keberangkatan', $data);
    }

    public function search_dataout($rowno = 0)
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
        $allcount = $this->Kapal_Model->getrecordCountdataout($search_text);

        // Get records
        $users_record = $this->Kapal_Model->getDataSearch($rowno,$rowperpage,$search_text);
    
        // Pagination Configuration
        $config['base_url'] = base_url('user/search_dataout');
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
        $data['search'] = $search_text;
        $data['kelompokgt'] = $this->Kapal_Model->datakapal_getkelompokgt();

        $data['lokasi'] = $this->Keberangkatan_m->dataout_getlokasi();
        $data['alat_tangkap'] = $this->Keberangkatan_m->dataout_alattangkap();
        $this->load->view('search/search_dataout', $data);
    }

    public function search_datain($rowno=0)
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
        $allcount = $this->Kedatangan_m->getrecordCountdatain($search_text);

        // Get records
        $users_record = $this->Kedatangan_m->getDataSearchdatain($rowno,$rowperpage,$search_text);
    
        // Pagination Configuration
        $config['base_url'] = base_url('user/search_datain');
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

        $data['lokasi'] = $this->Kedatangan_m->datain_getlokasi();
        $data['kegiatan'] = $this->Kedatangan_m->datain_getkegiatan();
        // $data['datakapal'] = $this->Kapal_Model->search4($key);
        $this->load->view('search/search_datain', $data);
    }

    public function search_dataproduksi($rowno=0)
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
        $allcount = $this->Kedatangan_m->getrecordCounthasil($search_text);

        // Get records
        $users_record = $this->Kedatangan_m->getDataSearchhasil($rowno,$rowperpage,$search_text);
    
        // Pagination Configuration
        $config['base_url'] = base_url('user/search_dataproduksi');
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

        $data['jenis_ikan'] = $this->Kedatangan_m->dataproduksi_getjenisikan();
        $data['kondisi_ikan'] = $this->Kedatangan_m->dataproduksi_getkondisiikan();

        $this->load->view('search/search_dataproduksi', $data);
    }

    public function profile_user() 	
    {
		$data = [
			"user" => $this->user,
			"usr" => $this->User_Model->findAllByUser($this->user->id_user),
			"error" => " "
		];
		$this->load->view('user/profile_user', $data);
	}

    public function excel_kapal() 
    {
        $data['export'] = $this->Kapal_Model->getdaftarkapal()->result();

        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator("Lingga Nazila P.");
        $object->getProperties()->setLastModifiedBy("Lingga Nazila P.");
        $object->getProperties()->setTitle("Daftar Kapal");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama Kapal');
        $object->getActiveSheet()->setCellValue('C1', 'GT Kapal');
        $object->getActiveSheet()->setCellValue('D1', 'Kelompok GT');
        $object->getActiveSheet()->setCellValue('E1', 'Tanggal Daftar');
        $object->getActiveSheet()->setCellValue('F1', 'Waktu Daftar');
        $object->getActiveSheet()->setCellValue('G1', 'Pemilik');
        $object->getActiveSheet()->setCellValue('H1', 'No. HP Pemilik');
        $object->getActiveSheet()->setCellValue('I1', 'Nama Nahkoda');
        $object->getActiveSheet()->setCellValue('J1', 'Jumlah ABK');
        $object->getActiveSheet()->setCellValue('K1', 'Alat Tangkap');
        $object->getActiveSheet()->setCellValue('L1', 'Alat Bantu Tangkap');
        $object->getActiveSheet()->setCellValue('M1', 'Jenis Kapal');
        $object->getActiveSheet()->setCellValue('N1', 'Status Kapal');
        $object->getActiveSheet()->setCellValue('O1', 'Mesin Utama (PK)');
        $object->getActiveSheet()->setCellValue('P1', 'Tanda Selar');
        $object->getActiveSheet()->setCellValue('Q1', 'Jenis Izin');
        $object->getActiveSheet()->setCellValue('R1', 'Izin WPP');
        $object->getActiveSheet()->setCellValue('S1', 'Izin Pelabuhan Pangkalan');
        $object->getActiveSheet()->setCellValue('T1', 'Izin Alat Tangkap');

        $baris = 2;
        $no = 1;

        foreach ($data['export'] as $export) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $export->nama_kapal);
            $object->getActiveSheet()->setCellValue('C'.$baris, $export->GT);
            $object->getActiveSheet()->setCellValue('D'.$baris, $export->kelompok_gt);
            $object->getActiveSheet()->setCellValue('E'.$baris, $export->tanggal_daftar);
            $object->getActiveSheet()->setCellValue('F'.$baris, $export->waktu_daftar);
            $object->getActiveSheet()->setCellValue('G'.$baris, $export->nama_pemilik);
            $object->getActiveSheet()->setCellValue('H'.$baris, $export->nama_nahkoda);
            $object->getActiveSheet()->setCellValue('I'.$baris, $export->abk);
            $object->getActiveSheet()->setCellValue('J'.$baris, $export->alat_tangkap);
            $object->getActiveSheet()->setCellValue('J'.$baris, $export->alat_tangkap2);
            $object->getActiveSheet()->setCellValue('K'.$baris, $export->alat_bantu_tangkap);
            $object->getActiveSheet()->setCellValue('L'.$baris, $export->jenis_kapal);
            $object->getActiveSheet()->setCellValue('M'.$baris, $export->status_kapal);
            $object->getActiveSheet()->setCellValue('N'.$baris, $export->mesin_utama);
            $object->getActiveSheet()->setCellValue('O'.$baris, $export->tanda_selar);
            $object->getActiveSheet()->setCellValue('P'.$baris, $export->jenis_izin);
            $object->getActiveSheet()->setCellValue('Q'.$baris, $export->izin_WPP);
            $object->getActiveSheet()->setCellValue('R'.$baris, $export->izin_PP);
            $object->getActiveSheet()->setCellValue('S'.$baris, $export->izin_AT);

            $baris++;
        }

        $filename="Daftar Kapal".'.xlsx';

        $object->getActiveSheet()->setTitle("Daftar Kapal");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename. '"');
        header('Cache-Control: max-age=0');

        $writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }

}