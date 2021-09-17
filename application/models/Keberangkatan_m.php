<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keberangkatan_m extends CI_Model {
    private $table = "keberangkatan";
    private $table2 = "kedatangan";
    private $table3 = "kapal";
    private $table4 = "hasil_tangkap";

    public function input($data,$table)
    {
        return $this->db->insert($this->table, $data);
    }

    public function input2($data,$table2)
    {
        return $this->db->insert($this->table2, $data);
    }

    public function find_kapal()
    {
        $this->db->select('*');
        $this->db->from('keberangkatan');
        $this->db->join('kapal','kapal.id_kapal=keberangkatan.id_kapal', 'left');
        
        return $this->db->get()->result();
    }

    public function get_kapal()
    {
        return $this->db->get('kapal');
    }

    function getAlldataout1()
    { 
        return $this->db->query("SELECT * FROM keberangkatan ORDER BY tanggal_out ASC");
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array('id_out' => $id));
    }

    public function join($table, $tbljoin, $join)
    {       
        $this->db->join($tbljoin, $join);
        return $this->db->get($table);
    }

    public function join2($table2, $tbljoin, $join)
    {
        $this->db->join($tbljoin, $join);
        return $this->db->get($table2);
    }

    public function getKolam1() 
    {
        return $this->db->query("SELECT * FROM keberangkatan JOIN kapal ON keberangkatan.id_kapal = kapal.id_kapal WHERE keberangkatan.lokasi = 'Kolam 1'");
    }

    public function getKolam2() 
    {
        return $this->db->query("SELECT * FROM keberangkatan JOIN kapal ON keberangkatan.id_kapal = kapal.id_kapal WHERE keberangkatan.lokasi = 'Kolam 2'");
    }

    
    public function getbyid_out($id_out) 
    {
        return $this->db->get_where($this->table, ["id_out" => $id_out])->row();
    }

    public function update($data, $id_out)
    {
        return $this->db->update($this->table, $data, array('id_out' => $id_out));
    }

    public function get_keberangkatan($id_kapal) 
    {
        return $this->db->query("SELECT * FROM keberangkatan JOIN kapal ON keberangkatan.id_kapal = kapal.id_kapal WHERE keberangkatan.id_kapal=$id_kapal ORDER BY keberangkatan.id_out ASC" )->result_array();
    }

    public function count_out($id_kapal) 
    {
        return $this->db->query("SELECT COUNT(id_out) as id_out FROM keberangkatan WHERE id_kapal=$id_kapal");
    }

    public function dataout_getlokasi() 
    {
        return $this->db->query("SELECT DISTINCT lokasi FROM keberangkatan ORDER BY lokasi ASC")->result();
    }

    public function filterbylokasi($lokasi) 
    {
        return $this->db->query("SELECT * FROM keberangkatan JOIN kapal ON keberangkatan.id_kapal = kapal.id_kapal WHERE lokasi='$lokasi' ORDER BY lokasi ASC" )->result_array();
    }

    public function getrecordCountlokasi($filter_text = '') 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('keberangkatan');
        $this->db->join('kapal', 'kapal.id_kapal = keberangkatan.id_kapal');
     
        if($filter_text != ''){
          $this->db->where('lokasi', $filter_text);
        }
    
        $query = $this->db->get();
        $result = $query->result_array();
     
        return $result[0]['allcount'];
    }

    public function getDataoutfilter($rowno,$rowperpage,$filter_text="") 
    {
        $this->db->select('*');
        $this->db->from('keberangkatan');
        $this->db->join('kapal', 'kapal.id_kapal = keberangkatan.id_kapal');
        $this->db->order_by("nama_kapal", "ASC");
    
        if($filter_text != ''){
          $this->db->where('lokasi', $filter_text);
        }
    
        $this->db->limit($rowperpage, $rowno); 
        $query = $this->db->get();
     
        return $query->result_array();
    }
    
    public function dataout_alattangkap() 
    {
        return $this->db->query("SELECT DISTINCT alat_tangkap2 FROM kapal WHERE alat_tangkap=''")->result();
    }

    public function getrecordCountalattangkap($filter_text = '') 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('keberangkatan');
        $this->db->join('kapal', 'kapal.id_kapal = keberangkatan.id_kapal');
     
        if($filter_text != ''){
          $this->db->where('alat_tangkap', $filter_text);
          $this->db->or_where('alat_tangkap2', $filter_text);
        }
    
        $query = $this->db->get();
        $result = $query->result_array();
     
        return $result[0]['allcount'];
    }

    public function getDataoutfilterAT($rowno,$rowperpage,$filter_text="") 
    { 
        $this->db->select('*');
        $this->db->from('keberangkatan');
        $this->db->join('kapal', 'kapal.id_kapal = keberangkatan.id_kapal');
        $this->db->order_by("nama_kapal", "ASC");
    
        if($filter_text != ''){
          $this->db->where('alat_tangkap', $filter_text);
          $this->db->or_where('alat_tangkap2', $filter_text);
        }
    
        $this->db->limit($rowperpage, $rowno); 
        $query = $this->db->get();
     
        return $query->result_array();
    }
    
}