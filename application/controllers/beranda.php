<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Beranda extends CI_Controller {

    function __construct()	
	{
		parent::__construct();
		$this->load->model("Kapal_Model");
        $this->load->model("Keberangkatan_m");
        $this->load->model("Kedatangan_m");
        $this->load->model("User_Model");
        $this->load->helper(array('form', 'url'));
	}

    public function index() 
    {
        $data['count_user'] = $this->User_Model->count_user()->row();
        $data['count_kapal'] = $this->User_Model->count_kapal()->row();
        $data['hasil'] = $this->User_Model->get_sum_ikan()->row();
        $this->load->view('index', $data);
    }

}