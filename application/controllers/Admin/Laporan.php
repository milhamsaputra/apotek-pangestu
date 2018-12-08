<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class Laporan extends CI_Controller {
	public function penjualanHariIni()
    {
        $user['user'] = "Admin";
        $hariIni=date('Y-m-d');
        $data['data1'] = $this->mymodel->tampil("tb_transaksi_jual WHERE tanggal ='$hariIni'");
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Laporan/PenjualanHariIni',$data);
		$this->load->view('library/Menu-Footer');
    }
    public function LaporanPenjualanApotik()
    {
        $user['user'] = "Admin";
        $this->load->view('library/requirements');
        $this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
        $this->load->view('Laporan/PenjualanAntarTanggal');
        $this->load->view('library/Menu-Footer');
    }
    public function LaporanPenjualanApotik2()
    {
        $tanggal1=$_POST['tanggal1'];
        $tanggal2=$_POST['tanggal2'];
        if((empty($tanggal1))or(empty($tanggal2))){
            redirect('Admin/Laporan/LaporanPenjualanApotik');
        }
        $data['data1']=$this->mymodel->tampil("tb_transaksi_jual WHERE tanggal BETWEEN '".$tanggal1."' and '".$tanggal2."' ");
        $user['user'] = "Admin";
        $this->load->view('library/requirements');
        $this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
        $this->load->view('Laporan/PenjualanAntarTanggal2',$data);
        $this->load->view('library/Menu-Footer');
    }
    public function PrintFakturTransaksi($id_transaksi)
	{
        $user['user'] = "Admin";
        $data['data1']=$this->mymodel->tampil("tb_transaksi_jual WHERE id_transaksi = '$id_transaksi'");
        $data['data2']=$this->mymodel->tampil("tb_cart_transaksi WHERE id_transaksi = '$id_transaksi'");
		$this->load->view('Laporan/Print/FakturPenjualanApotik',$data);
	}
    public function PrintPersediaanObat(){
        $user['user'] = "Admin;";
        $data['data1']=$this->mymodel->tampil("tb_obat");
        $this->load->view('Laporan/Print/persediaanObat',$data);
    }
    public function PrintDataSupplier(){
        $user['user'] = "Admin;";
        $data['data1']=$this->mymodel->tampil("tb_supplier");
        $this->load->view('Laporan/Print/DataSupplier',$data);
    }
}
