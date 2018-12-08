<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class supplier extends CI_Controller {

	public function Index()	
	{
        $this->mymodel->cek_log();
        $user['user'] = "Gudang";
        $data = $this->mymodel->tampil('tb_supplier');
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Gudang/DataSupplier',array('data' => $data));
		$this->load->view('library/Menu-Footer');   
	}
    public function Delete($id)
    {
        $where="id_supplier ='$id'";
        $del = $this->mymodel->hapus('tb_supplier',$where);
        if($del>=1){
            echo "<h2>Hapus Berhasil!</h2>";
            redirect('Gudang/supplier');
        }else{
            echo "<h2>Hapus Gagal!</h2>";
            redirect('Gudang/supplier');
        }
    }
    public function Tambah()
	{
        $user['user'] = "Gudang";
        $data = $this->mymodel->tampil('tb_supplier');
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Gudang/TambahSupplier');
		$this->load->view('library/Menu-Footer');   
	}
    public function Set_Add()
    {
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $telepon=$_POST['telepon'];
        $attribut=array(
            'nama_supplier'=>$nama,
            'alamat'=>$alamat,
            'telepon'=>$telepon
        );
        $res=$this->mymodel->tambah('tb_supplier',$attribut);
        if($res>=1){
            echo "<h2>Berhasil ditambahkan!</h2>";
            redirect('Gudang/Supplier/Tambah');
        }else{
            echo "<h2>Gagal ditambahkan!</h2>";
        }
    }
    public function Edit($id)
	{
        if(empty($id)){
            redirect('Gudang/Supplier');
        }
        $user['user'] = "Gudang";
        $data=$this->mymodel->tampil("tb_supplier WHERE id_supplier='$id'");
        if(empty($data)){
            redirect('Gudang/Supplier');
        }
        $this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Gudang/EditSupplier',array('data' => $data));
		$this->load->view('library/Menu-Footer');   
	}
    public function Update($id)
    {
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $telepon=$_POST['telepon'];
        $attribut=array(
            'nama_supplier'=>$nama,
            'alamat'=>$alamat,
            'telepon'=>$telepon
        );
        $where="id_supplier ='$id'";
        $res=$this->mymodel->ubah('tb_supplier',$attribut,$where);
        if($res>=1){
            echo "<h2>Update Berhasil!</h2>";
            redirect('Gudang/Supplier');
        }else{
            echo "<h2>Update Gagal!</h2>";
        }
    }

}
