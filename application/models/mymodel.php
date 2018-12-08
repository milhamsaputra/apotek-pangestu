<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mymodel extends CI_Model {
        
    public function __construct()
    {
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }
    public function tampil($table){
        $data = $this->db->query("SELECT * FROM ".$table." "); 
        return $data->result_array();
    }
    public function tambah($table,$data){
    	$res = $this->db->insert($table,$data);
    	return $res;
    }
    public function ubah($table,$data,$where){
    	$res=$this->db->update($table,$data,$where);
    	return $res;
    }
    public function hapus($table,$where){
    	$res=$this->db->delete($table,$where);
    	return $res;
    }
    public function m_aksi($table,$data)
    {
        $d=$this->db->get_where($table,$data);
        return $d->num_rows();
    }
    public function cek_log(){
        if(empty($_SESSION['nama_user'])){
            redirect('login');
        }
    }
    public function switch_user($akses){
        if($akses=="Admin"){
            redirect('Admin');
        }elseif($akses=="Gudang"){
            redirect('Gudang');
        }elseif($akses=="Pemilik"){
            redirect('Pemilik');
        }elseif($akses=="Kasir"){
            redirect('Kasir');
        }else{
            echo "<script>alert('Anda tidak mempunyai akses login, Cobalah login kembali beberapa saat lagi!');document.location.href='".base_url()."Login/set_logout"."'</script>";
        }
    }
    function get_photo($perPage, $uri) {
        $this->db->order_by('kode_obat','DESC');
        $query = $getData = $this->db->get('tb_obat', $perPage, $uri);
        if($getData->num_rows() > 0)
            return $query;
        else
            return null;
    }
    function get_page($table, $kunci, $perPage, $uri) {
        $this->db->order_by($kunci,'DESC');
        $query = $getData = $this->db->get($table, $perPage, $uri);
        if($getData->num_rows() > 0)
            return $query;
        else
            return null;
    }
    function link_photo($kode_obat){
        $this->db->where('kode_obat',$kode_obat);
        $query = $getData = $this->db->get('tb_obat');
        if($getData->num_rows() > 0)
            return $query;
        else
            return null;
    }
    function ambil($table,$a,$b){
        $ambil = $this->db->get($table,$a,$b);
        if($ambil->num_rows() > 0){
            foreach ($ambil->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    function hitungrows($table){
        return $this->db->count_all($table);
    }
}

?>