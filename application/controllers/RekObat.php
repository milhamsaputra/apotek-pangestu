<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class RekObat extends CI_Controller {

    public function index()
	{
        $data=$this->mymodel->tampil('tb_obat');
		$this->load->view('library/header');
		$this->load->view('RekomendasiObat',array('data' => $data));
		$this->load->view('library/footer');
	}
    public function Result($keyword){

        if(empty($keyword)){
            redirect('RekObat');
        }
       
        $term = $keyword; //Let's say that session is John Doe
        $searchterm = explode('%20',$term);

        $searchColumns = array("customer_firstname","customer_lastname");

        $searchFieldName = "indikasi";
        $searchCondition = "$searchFieldName LIKE '%" . implode("%' OR $searchFieldName LIKE '%", $searchterm) . "%'";
        $queri = "qw_obat WHERE $searchCondition";

        $data['querys'] = $queri;
        $data['keyword']=$keyword;
        $data['data1'] = $this->mymodel->Tampil($queri);
        $this->session->set_flashdata('text');
        $this->load->view('library/header');
        $this->load->view('ResultRekomendasiObat',$data);
        $this->load->view('library/footer');
        
    }
}