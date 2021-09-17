<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Filter extends CI_Controller {
  
  function __construct()	
	{
		parent::__construct();
		$this->load->model("Kapal_Model");
    $this->load->model("Keberangkatan_m");
    $this->load->model("Kedatangan_m");
    $this->load->helper(array('form', 'url'));
	}

  public function tanggalfilter()
  {
    $tanggalawal_out = $this->input->post("tanggalawal_out");
    $tanggalakhir_out = $this->input->post("tanggalakhir_out");

    $data['awal'] =$tanggalawal_out;
    $data['akhir'] =$tanggalakhir_out;
    $data['jenis_ikan'] = $this->Kedatangan_m->dataproduksi_getjenisikan();
    $data['kondisi_ikan'] = $this->Kedatangan_m->dataproduksi_getkondisiikan();
    $data['datafilter'] = $this->Kedatangan_m->filterbytanggal($tanggalawal_out, $tanggalakhir_out);

    $this->load->view('sort&filter/filter_ikan', $data);
  }

  public function filter_kapal_kelompokgt($rowno=0)
  {
    // Search text
    if($this->input->post('kelompok_gt') != NULL ){
      $filter_text = $this->input->post('kelompok_gt');
      $this->session->set_userdata(array("kelompok_gt"=>$filter_text));
    }else{
      if($this->session->userdata('kelompok_gt') != NULL){
        $filter_text = $this->session->userdata('kelompok_gt');
      }
    }

    $data['kelompok_gt'] =$filter_text;

    $this->load->library('pagination');

    // Row per page
    $rowperpage = 10;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
 
    // All records count
    $allcount = $this->Kapal_Model->getrecordCountGT($filter_text);

    // Get records
    $users_record = $this->Kapal_Model->getDataGT($rowno,$rowperpage,$filter_text);
 
    // Pagination Configuration
    $config['base_url'] = base_url('filter/filter_kapal_kelompokgt');
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
    $data['kelompok_gt'] = $filter_text;

    // Load view
    
    $this->load->view('/sort&filter/filter_kapal_kelompokgt', $data);
  }

  public function filter_out_lokasi($rowno=0) 
  {
    // Search text
    if($this->input->post('lokasi') != NULL ){
      $filter_text = $this->input->post('lokasi');
      $this->session->set_userdata(array("lokasi"=>$filter_text));
    }else{
      if($this->session->userdata('lokasi') != NULL){
      $filter_text = $this->session->userdata('lokasi');
      }
    }
  
    $data['location'] = $filter_text;
  
    $this->load->library('pagination');
  
    // Row per page
    $rowperpage = 10;
  
    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

    // All records count
    $allcount = $this->Keberangkatan_m->getrecordCountlokasi($filter_text);

    // Get records
    $users_record = $this->Keberangkatan_m->getDataoutfilter($rowno,$rowperpage,$filter_text);
   
    // Pagination Configuration
    $config['base_url'] = base_url('filter/filter_out_lokasi');
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
  
    // Load view
    $data['lokasi'] = $this->Keberangkatan_m->dataout_getlokasi();
    $data['alat_tangkap'] = $this->Keberangkatan_m->dataout_alattangkap();
    $this->load->view('sort&filter/filter_out_lokasi', $data);
  }

  public function filter_out_alattangkap($rowno=0) 
  {       
    // Search text
    if($this->input->post('alat_tangkap') != NULL AND $this->input->post('alat_tangkap2') == NULL ){
      $filter_text = $this->input->post('alat_tangkap');
      $this->session->set_userdata(array("alat_tangkap"=>$filter_text));
    }elseif($this->input->post('alat_tangkap') == NULL AND $this->input->post('alat_tangkap2') != NULL ){
      $filter_text = $this->input->post('alat_tangkap2');
      $this->session->set_userdata(array("alat_tangkap2"=>$filter_text));
    }
    else{
      // $this->session->unset_userdata('alat_tangkap');
      if($this->session->userdata('alat_tangkap') != NULL){
        $filter_text = $this->session->userdata('alat_tangkap');
        $this->session->unset_userdata('alat_tangkap');
      }else{
        $filter_text = $this->session->userdata('alat_tangkap2');
        $this->session->unset_userdata('alat_tangkap2');
      }
    }
    
    $this->load->library('pagination');

    // Row per page
    $rowperpage = 10;

    // Row position
    if($rowno != 0){
        $rowno = ($rowno-1) * $rowperpage;
    }

    // All records count
    $allcount = $this->Keberangkatan_m->getrecordCountalattangkap($filter_text);

    // Get records
    $users_record = $this->Keberangkatan_m->getDataoutfilterAT($rowno,$rowperpage,$filter_text);

    // Pagination Configuration
    $config['base_url'] = base_url('filter/filter_out_alattangkap');
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
    $data['alat'] = $filter_text;

    // Load view
    $data['lokasi'] = $this->Keberangkatan_m->dataout_getlokasi();
    $data['alat_tangkap'] = $this->Keberangkatan_m->dataout_alattangkap();
    $this->load->view('sort&filter/filter_out_alattangkap', $data);
  }

  public function filter_in_jenisikan($rowno=0) 
  {
    // Search text
    if($this->input->post('jenis_ikan') != NULL ){
      $filter_text = $this->input->post('jenis_ikan');
      $this->session->set_userdata(array("jenis_ikan"=>$filter_text));
    }else{
      if($this->session->userdata('jenis_ikan') != NULL){
        $filter_text = $this->session->userdata('jenis_ikan');
      }
    }

    $data['jenis'] = $filter_text;

    $this->load->library('pagination');

    // Row per page
    $rowperpage = 10;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

    // All records count
    $allcount = $this->Kedatangan_m->getrecordCountjenisikan($filter_text);

    // Get records
    $users_record = $this->Kedatangan_m->getDatajenisikan($rowno,$rowperpage,$filter_text);
 
    // Pagination Configuration
    $config['base_url'] = base_url('filter/filter_in_jenisikan');
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

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

    // Initialize
    $this->pagination->initialize($config);
    
    $data['result'] = $users_record;
    $data['row'] = $rowno;

    // Load view
    $data['jenis_ikan'] = $this->Kedatangan_m->dataproduksi_getjenisikan();
    $data['kondisi_ikan'] = $this->Kedatangan_m->dataproduksi_getkondisiikan();
    $this->load->view('sort&filter/filter_in_jenisikan', $data);
  }

  //   public function filter_in_jenisikan() {
  //     $jenis_ikan = $this->input->post("jenis_ikan");
  //     $kondisi_ikan = $this->input->post("kondisi_ikan");

  //     $data['jenis_ikan'] = $this->Kedatangan_m->dataproduksi_getjenisikan();
  //     $data['kondisi_ikan'] = $this->Kedatangan_m->dataproduksi_getkondisiikan();
  //     $data['datafilter'] = $this->Kedatangan_m->filterbyjenisikan($jenis_ikan);
  //     $this->load->view('sort&filter/filter_in_jenisikan', $data);
  // }

  public function filter_in_kondisiikan($rowno=0) 
  {
    // Search text
    if($this->input->post('kondisi_ikan') != NULL ){
      $filter_text = $this->input->post('kondisi_ikan');
      $this->session->set_userdata(array("kondisi_ikan"=>$filter_text));
    }else{
      if($this->session->userdata('kondisi_ikan') != NULL){
        $filter_text = $this->session->userdata('kondisi_ikan');
      }
    }

    $data['kondisi'] = $filter_text;

    $this->load->library('pagination');

    // Row per page
    $rowperpage = 10;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

    // All records count
    $allcount = $this->Kedatangan_m->getrecordCountkondisiikan($filter_text);

    // Get records
    $users_record = $this->Kedatangan_m->getDatakondisiikan($rowno,$rowperpage,$filter_text);
 
    // Pagination Configuration
    $config['base_url'] = base_url('filter/filter_in_kondisiikan');
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

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

    // Initialize
    $this->pagination->initialize($config);
    
    $data['result'] = $users_record;
    $data['row'] = $rowno;

    // Load view
    $data['jenis_ikan'] = $this->Kedatangan_m->dataproduksi_getjenisikan();
    $data['kondisi_ikan'] = $this->Kedatangan_m->dataproduksi_getkondisiikan();
    $this->load->view('sort&filter/filter_in_kondisiikan', $data);
  }


    // public function filter_in_kondisiikan() {

    //     $jenis_ikan = $this->input->post("jenis_ikan");
    //     $kondisi_ikan = $this->input->post("kondisi_ikan");

    //     $data['jenis_ikan'] = $this->Kedatangan_m->dataproduksi_getjenisikan();
    //     $data['kondisi_ikan'] = $this->Kedatangan_m->dataproduksi_getkondisiikan();
    //     $data['datafilter'] = $this->Kedatangan_m->filterbykondisiikan($kondisi_ikan);
    //     $this->load->view('sort&filter/filter_in_kondisiikan', $data);
    // }

  public function filter_in_lokasi($rowno=0) 
  {
    // Search text
    if($this->input->post('lokasi_in') != NULL ){
      $filter_text = $this->input->post('lokasi_in');
      $this->session->set_userdata(array("lokasi_in"=>$filter_text));
    }else{
      if($this->session->userdata('lokasi_in') != NULL){
        $filter_text = $this->session->userdata('lokasi_in');
      }
    }
  
    $data['lokasi_in'] = $filter_text;
  
    $this->load->library('pagination');
  
    // Row per page
    $rowperpage = 10;
  
    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

    // All records count
    $allcount = $this->Kedatangan_m->getrecordCountlokasiin($filter_text);

    // Get records
    $users_record = $this->Kedatangan_m->getDatainlokasi($rowno,$rowperpage,$filter_text);
   
    // Pagination Configuration
    $config['base_url'] = base_url('filter/filter_in_lokasi');
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

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
  
    // Initialize
    $this->pagination->initialize($config);
      
    $data['result'] = $users_record;
    $data['row'] = $rowno;
    $data['lokasi'] = $filter_text;
  
    // Load view
    $data['lokasi'] = $this->Kedatangan_m->datain_getlokasi();
    $data['kegiatan'] = $this->Kedatangan_m->datain_getkegiatan();
    $this->load->view('sort&filter/filter_in_lokasi', $data);
  }

  public function filter_in_kegiatan($rowno=0) 
  {
    // Search text
    if($this->input->post('kegiatan') != NULL ){
      $filter_text = $this->input->post('kegiatan');
      $this->session->set_userdata(array("kegiatan"=>$filter_text));
    }else{
      if($this->session->userdata('kegiatan') != NULL){
        $filter_text = $this->session->userdata('kegiatan');
      }
    }
  
    $data['kgtn'] = $filter_text;
  
    $this->load->library('pagination');
  
    // Row per page
    $rowperpage = 10;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

    // All records count
    $allcount = $this->Kedatangan_m->getrecordCountkegiatan($filter_text);

    // Get records
    $users_record = $this->Kedatangan_m->getDatainkegiatan($rowno,$rowperpage,$filter_text);
   
    // Pagination Configuration
    $config['base_url'] = base_url('filter/filter_in_kegiatan');
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

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
  
    // Initialize
    $this->pagination->initialize($config);
      
    $data['result'] = $users_record;
    $data['row'] = $rowno;
  
    // Load view
    $data['lokasi'] = $this->Kedatangan_m->datain_getlokasi();
    $data['kegiatan'] = $this->Kedatangan_m->datain_getkegiatan();
    $this->load->view('sort&filter/filter_in_kegiatan', $data);
    }
    
}