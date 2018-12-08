<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class Password extends CI_Controller {

	public function Index()
	{  
        $user['user'] = "Admin";
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('LogUser/GantiPassword');
		$this->load->view('library/Menu-Footer');
	}
    public function Set_Update()
    {
        $id = $_SESSION['kode_user'];
        $pass1ori = $_POST['pass1']; 
        $pass1 = sha1($pass1ori); 
        $pass2 = sha1($_POST['pass2']); 
        /*echo "<pre>";
        print_r($_POST);
        echo $id."<br>".$pass1."<br>".$pass2."<br>";
        echo "</pre>";*/
        
        $attribut=array(
            'id_user'=>$id,
            'password'=>$pass1
        );
        $cari = $this->mymodel->m_aksi('tb_user',$attribut);
        if($cari>=1){
            $attribut2 = array(
                'password'=>$pass2
            );
            $sql = $this->mymodel->ubah('tb_user',$attribut2,"id_user = '$id'");
            if($sql>=1){
                $pesannya="Password berhasil diubah!";
                $this->session->set_flashdata('Pesan',$pesannya);
                $this->session->set_flashdata('Pad','padding5');
                $this->session->set_flashdata('Color','ribbed-green');            
                redirect('Admin/Password');
            }else{
                redirect('Admin/Password');
            }
        }else{
             $pesannya="Password Salah!";
                $this->session->set_flashdata('Pesan',$pesannya);
                $this->session->set_flashdata('Pad','padding5');
                $this->session->set_flashdata('Color','ribbed-orange'); 
                $this->session->set_flashdata('error','error-state');            
                $this->session->set_flashdata('Ori',$pass1ori);            
                redirect('Admin/Password');
        }
    }
}
