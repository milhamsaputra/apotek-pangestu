<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class Laporan extends CI_Controller {
	public function PrintFakturTransaksi($id_transaksi)
	{
        $user['user'] = "Kasir";
        $data['data1']=$this->mymodel->tampil("tb_transaksi_jual WHERE id_transaksi = '$id_transaksi'");
        $data['data2']=$this->mymodel->tampil("tb_cart_transaksi WHERE id_transaksi = '$id_transaksi'");
		$this->load->view('Laporan/Print/FakturPenjualanApotik',$data);
	}
}
