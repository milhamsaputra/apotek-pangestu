<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class Laporan extends CI_Controller {
    public function PrintPersediaanObat(){
        $user['user'] = "Gudang";
        $data['data1']=$this->mymodel->tampil("tb_obat");
        $this->load->view('Laporan/Print/persediaanObat',$data);
    }
    public function PrintDataSupplier(){
        $user['user'] = "Gudang";
        $data['data1']=$this->mymodel->tampil("tb_supplier");
        $this->load->view('Laporan/Print/DataSupplier',$data);
    }
    public function LaporanTukarObat(){
        $user['user'] = "Gudang";
        $data['data1'] = $this->mymodel->tampil("qw_penukaran_stok");
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Laporan/RiwayatPenukaranObat',$data);
		$this->load->view('library/Menu-Footer');
    }
}
