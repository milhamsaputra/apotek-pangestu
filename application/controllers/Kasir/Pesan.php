<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class Pesan extends CI_Controller {
	public function index()
	{       
        
        $user['user'] = "Kasir";
        $data['data1']=$this->mymodel->tampil('tb_pesan WHERE pengirim =\'Pengunjung\' ORDER BY `tb_pesan`.`id_pesan` DESC');
        $data['data2']=$this->mymodel->tampil('tb_pesan WHERE pengirim =\'User\' ORDER BY `tb_pesan`.`id_pesan` DESC');
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Pesan/Pesan',$data);
		$this->load->view('library/Menu-Footer');
	}
    
    public function chat()
    {
        $nama=$_SESSION['akses'];
        $user="User";
        $email=$_SESSION['akses'];
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
            echo "Berhasil dikirim!";
            redirect('Kasir/Pesan');
        }else{
            echo "Gagal dikirim!";
        }
    }
}
