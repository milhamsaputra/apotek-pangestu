<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Login extends CI_Controller {
	public function index()
	{
        if(!empty($_SESSION['akses'])){
            $akses = $_SESSION['akses'];
            $this->mymodel->switch_user($akses);
        }else{
		      $this->load->view('login');
        }	
	}
	public function set_login()
	{        
        $user = $this->input->post('user');
        $pass = sha1($this->input->post('pass'));
        $status='Aktif';
        $data=array(
            'username'=>$user, 
            'password'=>$pass,
        );
        $data2=array(
            'username'=>$user, 
            'password'=>$pass,
            'status'=>$status
        );
        $cek=$this->mymodel->m_aksi('tb_user',$data);
        $cek2=$this->mymodel->m_aksi('tb_user',$data2);
        if($cek >= 1){
            if($cek2 >= 1){
            
            $d=$this->db->query("Select * From tb_user Where username='$user' and password='$pass'")->result();
            foreach($d as $row){
                $_SESSION['kode_user'] = $row->id_user;
                $_SESSION['username'] = $row->username;
                $_SESSION['nama_user'] = $row->nama;
                $akses = $row->akses;
                $_SESSION['akses'] = $akses;
            }
                
            }else{
                $akses="Unknown";
            }
                $this->mymodel->switch_user($akses);
        }else{
            $pesannya="Username atau Password yang anda masukan salah!";
            $this->session->set_flashdata('Pesan',$pesannya);
            $this->session->set_flashdata('usern',$user);
            $this->session->set_flashdata('Pad','padding5');
            $this->session->set_flashdata('Color','ribbed-red'); 
            redirect('Login');
        }
	}
    public function set_logout()
    {
        session_destroy();
        echo "Logout Berhasil!";
        redirect('Login');
    }
}