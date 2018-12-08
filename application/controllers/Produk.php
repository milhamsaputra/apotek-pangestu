<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class Produk extends CI_Controller {

    public function index()
    {
		$this->load->view('library/header');
		$this->load->view('StokObat');
		$this->load->view('library/footer');
    }
    public function Details($id)
    {
        $data=array(
            'kode_obat'=>$id
        );
        $cek = $this->mymodel->m_aksi("qw_obat",$data);
        if($cek>=1){
            $data = $this->mymodel->tampil("qw_obat WHERE kode_obat ='$id'");
            if(empty($id)){
                redirect('Produk');
            }
            $this->load->view('library/header');
            $this->load->view('Details',array('data'=>$data));
            $this->load->view('library/footer');
        }else{
            redirect('Produk');            
        }
    }
}
