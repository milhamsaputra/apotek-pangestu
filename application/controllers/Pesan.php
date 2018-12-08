<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class Pesan extends CI_Controller {

	
	public function index()
	{
		$this->load->view('library/header');
		$this->load->view('KritikSaran');
		$this->load->view('library/footer');
	}
    public function kirim_pesan()
    {
        if(!empty($_SESSION['akses'])){
            if($_SESSION['akses']=="Pemilik"){
                $nama="Owner";
            }else{
                $nama=$_SESSION['akses'];
            }
            $user="User";
            $email=$_SESSION['akses'];
        }else{
            $nama= $_POST['depan']." ".$_POST['belakang'];
            $user="Pengunjung";
        }
        $email=$_POST['email'];
        $pesan=$_POST['pesan'];
        $tanggal=date('Y-m-d');
        $waktu=date("H:i:s");
        $data=array(
            'nama'=>$nama,
            'email'=>$email,
            'pesan'=>$pesan,
            'tanggal'=>$tanggal,
            'waktu'=>$waktu,
            'pengirim'=>$user
        );
        $res = $this->mymodel->tambah('tb_pesan',$data);
        if($res>=1){
            $this->session->set_flashdata('Pesan','Pesan berhasil dikirim!');
            $this->session->set_flashdata('Pad','padding5');
            $this->session->set_flashdata('Color','ribbed-lightGreen');
           redirect('Pesan');
        }else{
            echo "Gagal dikirim!";
        }
    }
}
