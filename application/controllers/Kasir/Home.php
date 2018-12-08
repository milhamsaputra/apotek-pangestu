<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class Home extends CI_Controller {
	public function index()
	{
        $this->mymodel->cek_log();
        $user['user'] = "Kasir";
        $data=$this->mymodel->tampil('qw_obat');
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Kasir/Dasbor',array('data'=>$data));
		$this->load->view('library/Menu-Footer');
	}
}
