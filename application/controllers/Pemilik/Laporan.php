<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class Laporan extends CI_Controller {
	public function penjualanHariIni()
    {
        $user['user'] = "Pemilik";
        $hariIni=date('Y-m-d');
        $data['data1'] = $this->mymodel->tampil("tb_transaksi_jual WHERE tanggal ='$hariIni'");
        //$data['data2'] = $this->db->query("SELECT sum(total_harga) as pendapatan FROM tb_transaksi_jual WHERE tanggal ='$hariIni'");
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Laporan/penjualanHariIni',$data);
		$this->load->view('library/Menu-Footer');
    }
    public function PrintFakturTransaksi($id_transaksi)
	{
        $user['user'] = "Pemilik";
        $data['data1']=$this->mymodel->tampil("tb_transaksi_jual WHERE id_transaksi = '$id_transaksi'");
        $data['data2']=$this->mymodel->tampil("tb_cart_transaksi WHERE id_transaksi = '$id_transaksi'");
		$this->load->view('Laporan/Print/FakturPenjualanApotik',$data);
	}
    public function PrintPersediaanObat(){
        $user['user'] = "Pemilik";
        $data['data1']=$this->mymodel->tampil("tb_obat");
        $this->load->view('Laporan/Print/persediaanObat',$data);
    }
    public function PrintDataSupplier(){
        $user['user'] = "Pemilik";
        $data['data1']=$this->mymodel->tampil("tb_supplier");
        $this->load->view('Laporan/Print/DataSupplier',$data);
    }
    public function LaporanTukarObat(){
        $user['user'] = "Pemilik";
        $data['data1'] = $this->mymodel->tampil("qw_penukaran_stok");
        $this->load->view('library/requirements');
        $this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
        $this->load->view('Laporan/RiwayatPenukaranObat',$data);
        $this->load->view('library/Menu-Footer');
    }
}
