<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('library/header');
		$this->load->view('Home');
		$this->load->view('library/footer');
	}
}
