<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class Home extends CI_Controller {

	public function Index()
	{
        $this->mymodel->cek_log();
        $user['user'] = "Gudang";
        $data=$this->mymodel->tampil('qw_obat');
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Gudang/Dasbor',array('data' => $data));
		$this->load->view('library/Menu-Footer');
	}
}
