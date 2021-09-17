<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {
    private $table = "user";
    // private $table2 = "kapal";
    // private $table3 = "keberangkatan";
    // private $table4 = "kedatangan";
    // private $table5 = "hasil_tangkap";

    public function input($data,$table)
    {
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array('id_user' => $id));
    }

    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, array('id_user' => $id));
    }

    public function findOne($col, $val)
    {
        return $this->db->get_where($this->table, [$col => $val])->row();
    }

    public function findAllByUser($id)
    {
        return $this->db->query("SELECT * FROM user WHERE id_user='$id'")->result();
    }

    public function count_user() {
        return $this->db->query("SELECT COUNT(id_user) as id_user FROM user WHERE role='User'");
    }

    public function count_kapal() {
        return $this->db->query("SELECT COUNT(id_kapal) as id_kapal FROM kapal WHERE kondisi='Aktif'");
    }

    public function get_sum_ikan() {
        return $this->db->query("SELECT SUM(volume_timbang) as volume_ikan FROM hasil_tangkap");
    }

    // public function search($key) //this
    // {
    //     $this->db->select('*');
    //     $this->db->from('user');
    //     $this->db->where('role', 'User');
    //     $this->db->like('nama_lengkap', $key);
    //     $this->db->or_like('username', $key);

    //     return $this->db->get()->result_array();
    // }

    // public function search_admin($key)
    // {
    //     $this->db->select('*');
    //     $this->db->from('user');
    //     $this->db->where('role', 'Admin');
    //     $this->db->like('nama_lengkap', $key);
    //     $this->db->or_like('username', $key);

    //     return $this->db->get()->result_array();
    // }

    function countalluser()
    { 
      return $this->db->query("SELECT * FROM user WHERE role='User'")->num_rows();
    }

    function get_user($limit, $start)
    {        
      $this->db->select('*');
      $this->db->from('user');
      $this->db->where('role', 'User');
      $this->db->order_by("tanggal_register", "ASC");
      $this->db->limit($limit, $start);
          
      return $this->db->get();
    }

    public function getrecordCount($key = '') 
    {
      $this->db->select('count(*) as allcount');
      $this->db->from('user');
      $this->db->where('role', 'User');
      
   
      if($key != ''){
        $this->db->like('nama_lengkap', $key);
        // $this->db->or_like('username', $key);
      }
  
      $query = $this->db->get();
      $result = $query->result_array();
   
      return $result[0]['allcount'];
    }

    public function getDatauser($rowno,$rowperpage,$key="") 
    {
      $this->db->select('*');
      $this->db->from('user');
      $this->db->where('role', 'User');
      $this->db->order_by("tanggal_register", "ASC");
  
      if($key != ''){
        $this->db->like('nama_lengkap', $key);
        // $this->db->or_like('username', $key);
      }
  
      $this->db->limit($rowperpage, $rowno); 
      $query = $this->db->get();
      
      return $query->result_array();
    }

    public function getrecordCountAdmin($key = '') 
    {
      $this->db->select('count(*) as allcount');
      $this->db->from('user');
      $this->db->where('role', 'Admin');
      
   
      if($key != ''){
        $this->db->like('nama_lengkap', $key);
        // $this->db->or_like('username', $key);
      }
  
      $query = $this->db->get();
      $result = $query->result_array();
   
      return $result[0]['allcount'];
    }

    public function getDataadmin($rowno,$rowperpage,$key="") 
    {
      $this->db->select('*');
      $this->db->from('user');
      $this->db->where('role', 'Admin');
      $this->db->order_by("tanggal_register", "ASC");
  
      if($key != ''){
        $this->db->like('nama_lengkap', $key);
        // $this->db->or_like('username', $key);
      }
  
      $this->db->limit($rowperpage, $rowno); 
      $query = $this->db->get();
      
      return $query->result_array();
    }

    function countalladmin()
    { 
      return $this->db->query("SELECT * FROM user WHERE role='Admin'")->num_rows();
    }

    function get_admin($limit, $start)
    {        
      $this->db->select('*');
      $this->db->from('user');
      $this->db->where('role', 'Admin');
      $this->db->order_by("tanggal_register", "ASC");
      $this->db->limit($limit, $start);
          
      return $this->db->get();
    }

    // public function get_user() 
    // {
    //     return $this->db->query("SELECT * FROM user WHERE role='User' ORDER BY tanggal_register ASC");
    // }

    // public function search_kapalaktif($key) //this
    // {
    //     $this->db->select('*');
    //     $this->db->from('kapal');
    //     $this->db->where('kondisi', 'Aktif');
    //     $this->db->like('nama_kapal', $key);
    //     $this->db->or_like('kelompok_gt', $key);
    //     $this->db->or_like('nama_pemilik', $key);
    //     $this->db->or_like('jenis_kapal', $key);
    //     $this->db->or_like('status_kapal', $key);
    //     $this->db->or_like('mesin_utama', $key);
    //     $this->db->or_like('tanda_selar', $key);
    //     $this->db->or_like('izin_WPP', $key);
    //     $this->db->or_like('izin_PP', $key);
    //     $this->db->or_like('izin_AT', $key);

    //     return $this->db->get()->result_array();
    // }
}