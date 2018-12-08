<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class Obat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
    }
	public function Index()	
	{

    $config['base_url'] = base_url().'Admin/Obat/index'; 
    $config['total_rows'] = $this->mymodel->hitungrows('qw_obat');
    $config['per_page'] = 10;
    $config["uri_segment"] = 4;
    $config['full_tag_open'] = '<p>';
    $config['full_tag_close'] = '</p>';
    $config['last_link'] = 'Last <i class="icon-last-2"></i>;';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li> ';
    $config['first_link'] = '<i class="icon-first-2"></i> First;';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li> ';
    $config['next_link'] = '<i class="icon-next"></i>';
    $config['next_tag_open'] = '<li class="next">';
    $config['next_tag_close'] = '</li> ';
    $config['prev_link'] = '<i class="icon-previous"></i>';
    $config['prev_tag_open'] = '<li class="prev">';
    $config['prev_tag_close'] = '</li> ';
    $config['cur_tag_open'] = '<li class="active"><a>';
    $config['cur_tag_close'] = '</a></li> ';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li> ';
    $this->pagination->initialize($config);
    $page = ($this->uri->segment(3)) ? $this->uri->segment(4) : 0;
    $data['data_get'] = $this->mymodel->ambil('qw_obat', $config["per_page"], $page);
    $data["pagt"] = $this->pagination->create_links();
    $data["nomor"] = $page;
    if($data["nomor"]==""){
        $data["nomor"]="0";
    }

        $this->mymodel->cek_log();
        $user['user'] = "Admin";
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Admin/DataProduk',$data);
		$this->load->view('library/Menu-Footer');   
	}
    public function details($id){
        if(empty($id)){
            redirect('Admin/Obat');
        }
        $user['user'] = "Admin";
        $data=$this->mymodel->tampil("qw_obat WHERE kode_obat='$id'");
        $this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Admin/DetailObat',array('data' => $data));
		$this->load->view('library/Menu-Footer'); 
    }
}
    