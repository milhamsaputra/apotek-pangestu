<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class Kategori extends CI_Controller {

	public function index()
	{  
        $this->mymodel->cek_log();
        $user['user'] = "Gudang";
        $data = $this->mymodel->tampil('tb_kategori_obat');
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Gudang/KategoriObat', array('data'=>$data));
		$this->load->view('library/Menu-Footer');   
	}
    public function remove_kategori($kategori)
    {
        $cek = $this->mymodel->hapus('tb_kategori_obat',"id_kategori = '$kategori'");    
        if($cek>=1){
            echo "Hapus Sukses!";
            redirect('Gudang/Kategori');
        }else{
            echo "Hapus Gagal!";
            redirect('Gudang/Kategori');
        }
    }
    public function add_kategori()
    {
        $nama=$_POST['kategori'];
        $data=array(
        'nama_kategori'=>$nama
        );
        $res=$this->mymodel->tambah('tb_kategori_obat',$data); 
        if($cek>=1){
            echo "Hapus Sukses!";
            redirect('Gudang/Kategori');
        }else{
            echo "Hapus Gagal!";
            redirect('Gudang/Kategori');
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */