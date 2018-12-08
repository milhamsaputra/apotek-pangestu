<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class TransaksiJual extends CI_Controller {

	public function index()
	{  

        $this->mymodel->cek_log();
        $user['user'] = "Admin";
        $data = $this->mymodel->tampil('tb_kategori_obat');
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Admin/TransaksiPenjualan', array('data'=>$data));
		$this->load->view('library/Menu-Footer');   
	}
	public function set_cart()
	{
        $id_transaksi=$_POST['id_transaksi'];
        $pembeli=$_POST['nama'];
        $kontak=$_POST['kontak'];
        $total=$_POST['attharga_t'];
        $tgl=date('Y-m-d');
        $time=date("H:i:s");
        $attribut=array(
            'id_transaksi'=>$id_transaksi,
            'nama_pembeli'=>$pembeli,
            'kontak'=>$kontak,
            'total_harga'=>$total,
            'tanggal'=>$tgl,
            'jam'=>$time
        );
		$queri = $_POST['sqy'];
		$this->db->query($queri);
        $cek = $this->mymodel->tambah('tb_transaksi_jual',$attribut);
        if($cek>=1){
            $red="Admin/Laporan/PrintFakturTransaksi/".$id_transaksi;
            redirect($red);
        }else{
            echo "Transaksi gagal!";
        }
        
	}
}