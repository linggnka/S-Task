<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Auth extends CI_Controller {

    function __construct()	
	{
		parent::__construct();
        $this->load->model("User_Model");

	}

    public function post_login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		
		$user = $this->User_Model->findOne("username", $username);
		if($user != null)
		{
			if(password_verify($password, $user->password))
			{
				$this->session->set_userdata(["login" => $user->id_user]);
				if($user->role == "Admin")
				{
					$this->session->set_userdata(["Admin" => true]);
					redirect(base_url('home_admin'));
				}
				else
				{
                    // echo "<pre>";
                    // print_r($id_username);
                    // echo "</pre>";
					redirect(base_url('home'));
				}
			}
			else
			{
				echo"
 				<script>
 					alert('Password salah');
 					document.location.href = 'beranda';
 				</script>";
			}
		}
		else{
			echo"
 			<script>
 				alert('Isikan Username yang sudah terdaftar! Jika belum punya akun, silahkan hubungi admin');
 				document.location.href = 'beranda';
 			</script>";
		}

        // echo "<pre>";
        // print_r($username);
        // echo "</pre>";
	}

    public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('beranda'));
	}

    public function edit_profile()
	{
		$id_user = $this->input->post("id_user");
		$nama_lengkap = $this->input->post("nama_lengkap");
		$email = $this->input->post("email");
        $username = $this->input->post("username");
        $no_hp = $this->input->post("no_hp");
        $alamat = $this->input->post("alamat");
        $avatar = $this->input->post("old_avatar");

        $this->session->set_flashdata('ambil',$avatar);

		if (!empty($_FILES["new_avatar"]["name"])) {
			$avatar = $this->_upload_avatar();
		}

		$data = [
			"nama_lengkap" => $nama_lengkap,
            "email" => $email,
			"username" => $username,
            "no_hp" => $no_hp,
			"alamat" => $alamat,
			"avatar" => $avatar
		];
        
        if($this->User_Model->update($data, $id_user) == 1)
		{
            echo"
            <script>
                alert('Profile berhasil diubah');
                window.history.go(-1);
            </script>";
        }
        else {
            echo"
            <script>
                alert('Profile gagal diubah');
                window.history.go(-1);
            </script>";
        }
	}
	
	private function _upload_avatar()
	{ 
        $user = $this->session->flashdata('ambil');

		$config['upload_path']          = './assets/avatar/';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['file_name']            = uniqid();
		$config['overwrite']			= true;
		$config['max_size']             = 1000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('new_avatar'))
        {
            echo"
            <script>
                alert('Terjadi kesalahan upload');
                window.history.go(-1);
            </script>";die();
        }
		else
		{
			return $this->upload->data("file_name");
		}
		$this->load->view('user/edit_profile');

	}

	public function edit_pass()
    {
        $id_user = $this->input->post("id_user");
        $password = password_hash($this->input->post("password"), PASSWORD_DEFAULT);

        $data = [
            "password" => $password,
            ];
            
        if($this->User_Model->update($data, $id_user) == 1)
        {
            echo"
            <script>
                alert('Password berhasil diubah');
                window.history.go(-1);
            </script>";
        }
        else {
            echo"
            <script>
                alert('Password gagal diubah');
                window.history.go(-1);
            </script>";
        }
    }

	public function edit_passuser()
    {
        $id_user = $this->input->post("id_user");
        $password = password_hash($this->input->post("password"), PASSWORD_DEFAULT);

        $data = [
            "password" => $password,
            ];
            
        if($this->User_Model->update($data, $id_user) == 1)
        {
            echo"
            <script>
                alert('Password berhasil diubah');
                document.location.href = '../data_user'	;
            </script>";
        }
        else {
            echo"
            <script>
                alert('Password gagal diubah');
                document.location.href = '../data_user'	;
            </script>";
        }
    }

	public function edit_passadmin()
    {
        $id_user = $this->input->post("id_user");
        $password = password_hash($this->input->post("password"), PASSWORD_DEFAULT);

        $data = [
            "password" => $password,
            ];
            
        if($this->User_Model->update($data, $id_user) == 1)
        {
            echo"
            <script>
                alert('Password berhasil diubah');
                document.location.href = '../data_admin'	;
            </script>";
        }
        else {
            echo"
            <script>
                alert('Password gagal diubah');
                document.location.href = '../data_admin'	;
            </script>";
        }
    }

}