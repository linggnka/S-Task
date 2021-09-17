<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kapal_Model extends CI_Model {
  private $table = "kapal";
  private $table2 = "keberangkatan";
	
  public function input($data,$table)
  {
    return $this->db->insert($this->table, $data);
  }

  public function update($data, $id_kapal)
  {
    return $this->db->update($this->table, $data, array('id_kapal' => $id_kapal));
  }

  public function delete($id)
  {
    return $this->db->delete($this->table, array('id_kapal' => $id));
  }

  function getAllKapal()
  { 
    return $this->db->query("SELECT * FROM kapal ORDER BY nama_kapal ASC");
  }

  public function getById_Kapal($id_kapal) 
  {
    return $this->db->get_where($this->table, ["id_kapal" => $id_kapal])->row();
  }

  public function search($key)
  {
    $this->db->select('*');
    $this->db->from('kapal');
    $this->db->join('keberangkatan', 'keberangkatan.id_kapal = kapal.id_kapal');
    $this->db->where('status', 'Belum');
    $this->db->like('nama_kapal', $key);

    return $this->db->get()->result_array();
  }

  public function search3($key)
  {
    $this->db->select('*');
    $this->db->from('kapal');
    $this->db->join('keberangkatan', 'keberangkatan.id_kapal = kapal.id_kapal');
    $this->db->like('nama_kapal', $key);
    $this->db->or_like('GT', $key);
    $this->db->or_like('nama_pemilik', $key);
    $this->db->or_like('tanggal_out', $key);
    $this->db->or_like('no_SPB', $key);
    $this->db->or_like('daerah_asal', $key);
    $this->db->or_like('plb_tujuan', $key);
    $this->db->or_like('nama_nahkoda', $key);

    return $this->db->get()->result_array();
  }

    // public function search4($key) //this
    // {
    //     $this->db->select('*');
    //     $this->db->from('kedatangan');
    //     $this->db->join('kapal', 'kapal.id_kapal = kedatangan.id_kapal');
    //     $this->db->join('keberangkatan', 'keberangkatan.id_out = kedatangan.id_out');
    //     $this->db->like('nama_kapal', $key);
    //     $this->db->or_like('GT', $key);
    //     $this->db->or_like('nama_pemilik', $key);
    //     $this->db->or_like('tanggal_out', $key);
    //     $this->db->or_like('tanggal_in', $key);

    //     return $this->db->get()->result_array();
    // }

    // public function search5($key) //this
    // {
    //     $this->db->select('*');
    //     $this->db->from('hasil_tangkap');
    //     $this->db->join('kapal', 'kapal.id_kapal = hasil_tangkap.id_kapal');
    //     $this->db->join('keberangkatan', 'keberangkatan.id_out = hasil_tangkap.id_out');
    //     $this->db->join('kedatangan', 'keberangkatan.id_out = kedatangan.id_out');
    //     $this->db->like('nama_kapal', $key);

    //     return $this->db->get()->result_array();
    // }

  public function datakapal_getkelompokgt() 
  {
    return $this->db->query("SELECT DISTINCT kelompok_gt FROM kapal ORDER BY kelompok_gt DESC")->result();
  }

  public function filterbykelompokgt($kelompok_gt, $limit, $start) 
  {
    $this->db->select('*');
    $this->db->from('kapal');
    $this->db->where('kondisi', 'Aktif');
    $this->db->where('kelompok_gt', $kelompok_gt);
    $this->db->order_by("nama_kapal", "ASC");
    $this->db->limit($limit, $start);
        
    return $this->db->get();
  }

  public function update_kondisi($data, $id_kapal)
  {
    return $this->db->update($this->table, $data, array('id_kapal' => $id_kapal));
  }

  public function getdaftarkapal() 
  {
    return $this->db->query("SELECT * FROM kapal ORDER BY GT ASC");
  }

  function getKapal_aktif($limit, $start)
  {        
    $this->db->select('*');
    $this->db->from('kapal');
    $this->db->where('kondisi', 'Aktif');
    $this->db->order_by("nama_kapal", "ASC");
    $this->db->limit($limit, $start);
        
    return $this->db->get();
  }

  function getKapal_nonaktif($limit, $start)
  {        
    $this->db->select('*');
    $this->db->from('kapal');
    $this->db->where('kondisi', 'Non Aktif');
    $this->db->order_by("nama_kapal", "ASC");
    $this->db->limit($limit, $start);
        
    return $this->db->get();
  }

  function getKapal_aktifjoin($limit, $start)
  {         
    $this->db->select('*');
    $this->db->from('keberangkatan');
    $this->db->join('kapal', 'kapal.id_kapal = keberangkatan.id_kapal');
    $this->db->where('kondisi', 'Aktif');
    $this->db->order_by("nama_kapal", "ASC");
    $this->db->limit($limit, $start);
        
    return $this->db->get();
  }

  public function search2($key, $limit, $start) //this
  {
    $this->db->select('*');
    $this->db->from('kapal');
    $this->db->where('kondisi', 'Aktif');
    $this->db->like('nama_kapal', $key);
    $this->db->or_like('GT', $key);
    $this->db->or_like('nama_pemilik', $key);
    $this->db->or_like('tanggal_daftar', $key);
    $this->db->or_like('nama_pemilik', $key);
    $this->db->or_like('tanda_selar', $key);
    $this->db->or_like('nama_pemilik', $key);
    $this->db->or_like('izin_WPP', $key);
    $this->db->or_like('izin_PP', $key);
    $this->db->or_like('izin_AT', $key);
    $this->db->order_by("nama_kapal", "ASC");
    $this->db->limit($limit, $start);

    return $this->db->get()->result_array();
  }

  function countallKapalaktif()
  { 
    return $this->db->query("SELECT * FROM kapal WHERE kondisi='Aktif'")->num_rows();
  }

  function countallKapalnonaktif()
  { 
    return $this->db->query("SELECT * FROM kapal WHERE kondisi='Non Aktif'")->num_rows();
  }

  function countallKapalaktifjoin()
  {   
    return $this->db->query("SELECT * FROM keberangkatan JOIN kapal ON keberangkatan.id_kapal = kapal.id_kapal WHERE kapal.kondisi='Aktif'")->num_rows();
  }

  function countallKapalsearch($key)
  { 
    return $this->db->query("SELECT * FROM kapal WHERE kondisi='Aktif' AND nama_kapal LIKE '$key'")->num_rows();
  }

  // Fetch records
  public function getData($rowno,$rowperpage,$key="") 
  {
    $this->db->select('*');
    $this->db->from('kapal');
    $this->db->where('kondisi', 'Aktif');
    $this->db->order_by("nama_kapal", "ASC");

    if($key != ''){
      $this->db->like('nama_kapal', $key);
      // $this->db->or_like('content', $key);
    }

    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
    
    return $query->result_array();
  }

  public function getDatanon($rowno,$rowperpage,$key="") 
  {
    $this->db->select('*');
    $this->db->from('kapal');
    $this->db->where('kondisi', 'Non Aktif');
    $this->db->order_by("nama_kapal", "ASC");

    if($key != ''){
      $this->db->like('nama_kapal', $key);
      // $this->db->or_like('content', $key);
    }

    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
    
    return $query->result_array();
  }

  public function getDataSearch($rowno,$rowperpage,$key="") 
  { 
    $this->db->select('*');
    $this->db->from('kapal');
    $this->db->join('keberangkatan', 'keberangkatan.id_kapal = kapal.id_kapal');
    $this->db->order_by("nama_kapal", "ASC");

    if($key != ''){
      $this->db->like('nama_kapal', $key);
    //   $this->db->or_like('content', $key);
    }

    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
 
    return $query->result_array();
  }

  // Select total records
  public function getrecordCount($key = '') 
  {
    $this->db->select('count(*) as allcount');
    $this->db->from('kapal');
    $this->db->where('kondisi', 'Aktif');
    
 
    if($key != ''){
      $this->db->like('nama_kapal', $key);
    //$this->db->or_like('content', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }

  public function getrecordkapalnon($key = '') 
  {
    $this->db->select('count(*) as allcount');
    $this->db->from('kapal');
    $this->db->where('kondisi', 'Non Aktif');
    
 
    if($key != ''){
      $this->db->like('nama_kapal', $key);
    //$this->db->or_like('content', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }

  public function getrecordCountdataout($key = '') 
  {
    $this->db->select('count(*) as allcount');
    $this->db->from('keberangkatan');
    $this->db->join('kapal', 'kapal.id_kapal = keberangkatan.id_kapal');
 
    if($key != ''){
      $this->db->like('nama_kapal', $key);
    //$this->db->or_like('content', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }

  // Filter Kapal
  public function getDataGT($rowno,$rowperpage,$filter_text="") 
  { 
    $this->db->select('*');
    $this->db->from('kapal');
    $this->db->order_by("nama_kapal", "ASC");

    if($filter_text != ''){
      $this->db->where('kelompok_gt', $filter_text);
    }

    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
 
    return $query->result_array();
  }

  // Select total records filter kapal
  public function getrecordCountGT($filter_text = '') 
  {
    $this->db->select('count(*) as allcount');
    $this->db->from('kapal');
 
    if($filter_text != ''){
      $this->db->where('kelompok_gt', $filter_text);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  } 

  // function getAllKapal_nonaktif()
  // { 
  //   return $this->db->query("SELECT * FROM kapal WHERE kondisi='Non Aktif' ORDER BY nama_kapal ASC");
  // }

  // public function getDataSearchdatain($rowno,$rowperpage,$key="") {
 
  //   $this->db->select('*');
  //   $this->db->from('kapal');
  //   $this->db->join('keberangkatan', 'keberangkatan.id_kapal = kapal.id_kapal');
  //   $this->db->order_by("nama_kapal", "ASC");

  //   if($key != ''){
  //     $this->db->like('nama_kapal', $key);
  //   //   $this->db->or_like('content', $key);
  //   }

  //   $this->db->limit($rowperpage, $rowno); 
  //   $query = $this->db->get();
 
  //   return $query->result_array();
  // }

  // // Select total records
  // public function getrecordCountdatain($key = '') {

  //   $this->db->select('count(*) as allcount');
  //   $this->db->from('kapal');
 
  //   if($key != ''){
  //     $this->db->like('nama_kapal', $key);
  //   //$this->db->or_like('content', $search);
  //   }

  //   $query = $this->db->get();
  //   $result = $query->result_array();
 
  //   return $result[0]['allcount'];
  // }

}
