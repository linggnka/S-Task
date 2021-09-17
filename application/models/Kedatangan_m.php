<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kedatangan_m extends CI_Model {
    
    private $table = "keberangkatan";
    // private $table3 = "kapal";
    private $table4 = "kedatangan";
    private $table5 = "hasil_tangkap";

    public function getById_out($id_out) 
    {
        return $this->db->query("SELECT * FROM keberangkatan JOIN kapal ON keberangkatan.id_kapal = kapal.id_kapal WHERE id_out=$id_out")->row();
    }

    public function get_hasil($id_out) 
    {
        return $this->db->query("SELECT * FROM hasil_tangkap JOIN kapal ON hasil_tangkap.id_kapal = kapal.id_kapal WHERE id_out=$id_out" )->result_array();
    }

    public function get_namakapal($id_out) 
    {
        return $this->db->query("SELECT * FROM hasil_tangkap JOIN kapal ON hasil_tangkap.id_kapal = kapal.id_kapal JOIN kedatangan ON hasil_tangkap.id_out = kedatangan.id_out WHERE kedatangan.id_out=$id_out")->row();
    }

    public function join($table, $tbljoin, $join) 
    {
        $this->db->join($tbljoin, $join);
        return $this->db->get($table);
    }

    public function input($data,$table4) 
    {
        return $this->db->insert($this->table4, $data);
    }

    public function update_status($data2, $id_out) 
    {
        return $this->db->update($this->table, $data2, array('id_out' => $id_out));
    }

    public function delete($id) 
    {
        return $this->db->delete($this->table4, array('id_in' => $id));
    }

    public function delete2($id) 
    {
        return $this->db->delete($this->table5, array('id_out' => $id));
    }

    public function delete_produksi($id) 
    {
        return $this->db->delete($this->table5, array('id_hasil' => $id));
    }

    public function update($data, $id_in) 
    {
        return $this->db->update($this->table4, $data, array('id_in' => $id_in));
    }

    public function getbyid_in($id_in) 
    {
        return $this->db->get_where($this->table4, ["id_in" => $id_in])->row();
    }

    public function getbyid_hasil($id_hasil) 
    {
        return $this->db->get_where($this->table5, ["id_hasil" => $id_hasil])->row();
    }

    public function update_ikan($data, $id_hasil) 
    {
        return $this->db->update($this->table5, $data, array('id_hasil' => $id_hasil));
    }

    public function delete_ikan($id) 
    {
        return $this->db->delete($this->table5, array('id_hasil' => $id));
    }

    public function filterbytanggal($tanggalawal_out, $tanggalakhir_out) 
    {
        return $this->db->query("SELECT * FROM hasil_tangkap JOIN kapal ON hasil_tangkap.id_kapal = kapal.id_kapal JOIN keberangkatan ON hasil_tangkap.id_out = keberangkatan.id_out JOIN kedatangan ON keberangkatan.id_out = kedatangan.id_out WHERE keberangkatan.tanggal_out BETWEEN '$tanggalawal_out' AND '$tanggalakhir_out' ORDER BY keberangkatan.tanggal_out ASC ")->result_array();
    }

    public function getdataproduksi2($tanggalawal_out, $tanggalakhir_out) 
    {
        return $this->db->query("SELECT * FROM hasil_tangkap JOIN kapal ON hasil_tangkap.id_kapal = kapal.id_kapal JOIN keberangkatan ON hasil_tangkap.id_out = keberangkatan.id_out JOIN kedatangan ON keberangkatan.id_out = kedatangan.id_out WHERE keberangkatan.tanggal_out BETWEEN '$tanggalawal_out' AND '$tanggalakhir_out' ORDER BY keberangkatan.tanggal_out ASC ");
    }
    public function get_kedatangan($id_kapal) 
    {
        return $this->db->query("SELECT * FROM kedatangan JOIN kapal ON kedatangan.id_kapal = kapal.id_kapal WHERE kedatangan.id_kapal=$id_kapal ORDER BY kedatangan.id_in ASC" )->result_array();
    }

    public function get_sum_ikan($id_kapal) 
    {
        return $this->db->query("SELECT SUM(volume_timbang) as volume_ikan FROM hasil_tangkap WHERE id_kapal=$id_kapal");
    }

    public function count_in($id_kapal) 
    {
        return $this->db->query("SELECT COUNT(id_in) as id_in FROM kedatangan WHERE id_kapal=$id_kapal");
    }

    public function datain_getlokasi() 
    {
        return $this->db->query("SELECT DISTINCT lokasi_in FROM kedatangan ORDER BY lokasi_in ASC")->result();
    }

    public function datain_getkegiatan() 
    {
        return $this->db->query("SELECT DISTINCT kegiatan FROM kedatangan ORDER BY kegiatan ASC")->result();
    }

    public function dataproduksi_getjenisikan() 
    {
        return $this->db->query("SELECT DISTINCT jenis_ikan FROM hasil_tangkap ORDER BY jenis_ikan ASC")->result();
    }

    public function dataproduksi_getkondisiikan() 
    {
        return $this->db->query("SELECT DISTINCT kondisi_ikan FROM hasil_tangkap ORDER BY kondisi_ikan ASC")->result();
    }

    function countallkedatanganaktif()
    {         
        return $this->db->query("SELECT * FROM keberangkatan JOIN kapal ON keberangkatan.id_kapal = kapal.id_kapal WHERE kondisi='Aktif' AND status='Belum'")->num_rows();
    }

    function getKapal_keberangkatan($limit, $start) 
    {         
        $this->db->select('*');
        $this->db->from('keberangkatan');
        $this->db->join('kapal', 'kapal.id_kapal = keberangkatan.id_kapal');
        $this->db->where('kondisi', 'Aktif');
        $this->db->where('status', 'Belum');
        $this->db->order_by("nama_kapal", "ASC");
        $this->db->limit($limit, $start);
        
        return $this->db->get();
    }

    // Select total records
    public function getrecordCount($key = '') 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('keberangkatan');
        $this->db->join('kapal', 'kapal.id_kapal = keberangkatan.id_kapal');
        $this->db->where('kondisi', 'Aktif');
        $this->db->where('status', 'Belum');
    
        if($key != ''){
        $this->db->like('nama_kapal', $key);
        //$this->db->or_like('content', $search);
        }

        $query = $this->db->get();
        $result = $query->result_array();
    
        return $result[0]['allcount'];
    }

    // Fetch records
    public function getData($rowno,$rowperpage,$key="") 
    { 
        $this->db->select('*');
        $this->db->from('keberangkatan');
        $this->db->join('kapal', 'kapal.id_kapal = keberangkatan.id_kapal');
        $this->db->where('kondisi', 'Aktif');
        $this->db->where('status', 'Belum');
        $this->db->order_by("nama_kapal", "ASC");
    
        if($key != ''){
          $this->db->like('nama_kapal', $key);
        //   $this->db->or_like('content', $key);
        }
    
        $this->db->limit($rowperpage, $rowno); 
        $query = $this->db->get();
     
        return $query->result_array();
    }

    function countadatainaktif()
    {        
        return $this->db->query("SELECT * FROM kedatangan JOIN kapal ON kedatangan.id_kapal = kapal.id_kapal JOIN keberangkatan ON kedatangan.id_out = keberangkatan.id_out WHERE kapal.kondisi='Aktif' AND status='Sudah'")->num_rows();
    }

    function getdatain($limit, $start)
    {         
        $this->db->select('*');
        $this->db->from('kedatangan');
        $this->db->join('kapal', 'kapal.id_kapal = kedatangan.id_kapal');
        $this->db->join('keberangkatan', 'keberangkatan.id_out = kedatangan.id_out');
        $this->db->where('kondisi', 'Aktif');
        $this->db->where('status', 'Sudah');
        $this->db->order_by("tanggal_in", "ASC");
        $this->db->limit($limit, $start);
        
        return $this->db->get();
    }

    public function getrecordCountdatain($key = '') 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('kedatangan');
        $this->db->join('kapal', 'kapal.id_kapal = kedatangan.id_kapal');
        $this->db->join('keberangkatan', 'keberangkatan.id_out = kedatangan.id_out');
        $this->db->where('kondisi', 'Aktif');
        $this->db->where('status', 'Sudah');
     
        if($key != ''){
          $this->db->like('nama_kapal', $key);
        //$this->db->or_like('content', $search);
        }
    
        $query = $this->db->get();
        $result = $query->result_array();
     
        return $result[0]['allcount'];
    }


    public function getDataSearchdatain($rowno,$rowperpage,$key="") 
    { 
        $this->db->select('*');
        $this->db->from('kedatangan');
        $this->db->join('kapal', 'kapal.id_kapal = kedatangan.id_kapal');
        $this->db->join('keberangkatan', 'keberangkatan.id_out = kedatangan.id_out');
        $this->db->where('kondisi', 'Aktif');
        $this->db->where('status', 'Sudah');
        $this->db->order_by("nama_kapal", "ASC");
    
        if($key != ''){
          $this->db->like('nama_kapal', $key);
        //   $this->db->or_like('content', $key);
        }
    
        $this->db->limit($rowperpage, $rowno); 
        $query = $this->db->get();
     
        return $query->result_array();
    }

    public function getrecordCountlokasiin($filter_text = '') 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('kedatangan');
        $this->db->join('kapal', 'kapal.id_kapal = kedatangan.id_kapal');
        $this->db->join('keberangkatan', 'keberangkatan.id_out = kedatangan.id_out');
        $this->db->where('kondisi', 'Aktif');
     
        if($filter_text != ''){
          $this->db->where('lokasi_in', $filter_text);
        }
    
        $query = $this->db->get();
        $result = $query->result_array();
     
        return $result[0]['allcount'];
    }

    public function getDatainlokasi($rowno,$rowperpage,$filter_text="") 
    { 
        $this->db->select('*');
        $this->db->from('kedatangan');
        $this->db->join('kapal', 'kapal.id_kapal = kedatangan.id_kapal');
        $this->db->join('keberangkatan', 'keberangkatan.id_out = kedatangan.id_out');
        $this->db->where('kondisi', 'Aktif');
        $this->db->order_by("nama_kapal", "ASC");
    
        if($filter_text != ''){
          $this->db->where('lokasi_in', $filter_text);
        }
    
        $this->db->limit($rowperpage, $rowno); 
        $query = $this->db->get();
     
        return $query->result_array();
    }

    public function getrecordCountkegiatan($filter_text = '') 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('kedatangan');
        $this->db->join('kapal', 'kapal.id_kapal = kedatangan.id_kapal');
        $this->db->join('keberangkatan', 'keberangkatan.id_out = kedatangan.id_out');
        $this->db->where('kondisi', 'Aktif');
     
        if($filter_text != ''){
          $this->db->where('kegiatan', $filter_text);
        }
    
        $query = $this->db->get();
        $result = $query->result_array();
     
        return $result[0]['allcount'];
    }

    public function getDatainkegiatan($rowno,$rowperpage,$filter_text="") 
    {
 
        $this->db->select('*');
        $this->db->from('kedatangan');
        $this->db->join('kapal', 'kapal.id_kapal = kedatangan.id_kapal');
        $this->db->join('keberangkatan', 'keberangkatan.id_out = kedatangan.id_out');
        $this->db->where('kondisi', 'Aktif');
        $this->db->order_by("nama_kapal", "ASC");
    
        if($filter_text != ''){
          $this->db->where('kegiatan', $filter_text);
        }
    
        $this->db->limit($rowperpage, $rowno); 
        $query = $this->db->get();
     
        return $query->result_array();
    }

    function countallhasil()
    {   
        return $this->db->query("SELECT * FROM hasil_tangkap JOIN kapal ON hasil_tangkap.id_kapal = kapal.id_kapal JOIN keberangkatan ON hasil_tangkap.id_out = keberangkatan.id_out JOIN kedatangan ON keberangkatan.id_out = kedatangan.id_out")->num_rows();
    }

    function gethasiltangkap($limit, $start) 
    {         
        $this->db->select('*');
        $this->db->from('hasil_tangkap');
        $this->db->join('kapal', 'kapal.id_kapal = hasil_tangkap.id_kapal');
        $this->db->join('keberangkatan', 'keberangkatan.id_out = hasil_tangkap.id_out');
        $this->db->join('kedatangan', 'kedatangan.id_out = keberangkatan.id_out');
        $this->db->order_by("nama_kapal", "ASC");
        $this->db->limit($limit, $start);
        
        return $this->db->get();
    }

    public function getrecordCounthasil($key = '') 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('hasil_tangkap');
        $this->db->join('kapal', 'kapal.id_kapal = hasil_tangkap.id_kapal');
        $this->db->join('keberangkatan', 'keberangkatan.id_out = hasil_tangkap.id_out');
        $this->db->join('kedatangan', 'keberangkatan.id_out = kedatangan.id_out');
     
        if($key != ''){
          $this->db->like('nama_kapal', $key);
        //$this->db->or_like('content', $search);
        }
    
        $query = $this->db->get();
        $result = $query->result_array();
     
        return $result[0]['allcount'];
    }

    public function getDataSearchhasil($rowno,$rowperpage,$key="") 
    { 
        $this->db->select('*');
        $this->db->from('hasil_tangkap');
        $this->db->join('kapal', 'kapal.id_kapal = hasil_tangkap.id_kapal');
        $this->db->join('keberangkatan', 'keberangkatan.id_out = hasil_tangkap.id_out');
        $this->db->join('kedatangan', 'keberangkatan.id_out = kedatangan.id_out');
        $this->db->order_by("nama_kapal", "ASC");
    
        if($key != ''){
          $this->db->like('nama_kapal', $key);
        //   $this->db->or_like('content', $key);
        }
    
        $this->db->limit($rowperpage, $rowno); 
        $query = $this->db->get();
     
        return $query->result_array();
    }

    public function getrecordCountjenisikan($filter_text = '') 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('hasil_tangkap');
        $this->db->join('kapal', 'kapal.id_kapal = hasil_tangkap.id_kapal');
        $this->db->join('keberangkatan', 'keberangkatan.id_out = hasil_tangkap.id_out');
        $this->db->join('kedatangan', 'kedatangan.id_out = keberangkatan.id_out');
     
        if($filter_text != ''){
          $this->db->where('jenis_ikan', $filter_text);
        }
    
        $query = $this->db->get();
        $result = $query->result_array();
     
        return $result[0]['allcount'];
    }

    public function getDatajenisikan($rowno,$rowperpage,$filter_text="") 
    { 
        $this->db->select('*');
        $this->db->from('hasil_tangkap');
        $this->db->join('kapal', 'kapal.id_kapal = hasil_tangkap.id_kapal');
        $this->db->join('keberangkatan', 'keberangkatan.id_out = hasil_tangkap.id_out');
        $this->db->join('kedatangan', 'kedatangan.id_out = keberangkatan.id_out');
        $this->db->order_by("nama_kapal", "ASC");
    
        if($filter_text != ''){
          $this->db->where('jenis_ikan', $filter_text);
        }
    
        $this->db->limit($rowperpage, $rowno); 
        $query = $this->db->get();
     
        return $query->result_array();
    }

    public function getrecordCountkondisiikan($filter_text = '') 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('hasil_tangkap');
        $this->db->join('kapal', 'kapal.id_kapal = hasil_tangkap.id_kapal');
        $this->db->join('keberangkatan', 'keberangkatan.id_out = hasil_tangkap.id_out');
        $this->db->join('kedatangan', 'kedatangan.id_out = keberangkatan.id_out');
     
        if($filter_text != ''){
          $this->db->where('kondisi_ikan', $filter_text);
        }
    
        $query = $this->db->get();
        $result = $query->result_array();
     
        return $result[0]['allcount'];
    }

    public function getDatakondisiikan($rowno,$rowperpage,$filter_text="") 
    { 
        $this->db->select('*');
        $this->db->from('hasil_tangkap');
        $this->db->join('kapal', 'kapal.id_kapal = hasil_tangkap.id_kapal');
        $this->db->join('keberangkatan', 'keberangkatan.id_out = hasil_tangkap.id_out');
        $this->db->join('kedatangan', 'kedatangan.id_out = keberangkatan.id_out');
        $this->db->order_by("nama_kapal", "ASC");
    
        if($filter_text != ''){
          $this->db->where('kondisi_ikan', $filter_text);
        }
    
        $this->db->limit($rowperpage, $rowno); 
        $query = $this->db->get();
     
        return $query->result_array();
    }

}