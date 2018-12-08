<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class Username extends CI_Controller {

	public function Index()
	{  
        $user['user'] = "Kasir";
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('LogUser/GantiUsername');
		$this->load->view('library/Menu-Footer');
	}
    public function Set_Update()
    {
        $id = $_SESSION['kode_user'];
        $pass1 = sha1($_POST['pass1']); 
        $user = $_POST['user']; 
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
                'username'=>$user
            );
            $sql = $this->mymodel->ubah('tb_user',$attribut2,"id_user = '$id'");
            if($sql>=1){
                $pesannya="Username berhasil diubah!";
                $this->session->set_flashdata('Pesan',$pesannya);
                $this->session->set_flashdata('Pad','padding5');
                $this->session->set_flashdata('Color','ribbed-green');
                $_SESSION['username'] = $user; 
                redirect('Kasir/Username');
            }else{
                redirect('Kasir/Username');
            }
        }else{
             $pesannya="Password Salah!";
                $this->session->set_flashdata('Pesan',$pesannya);
                $this->session->set_flashdata('Pad','padding5');
                $this->session->set_flashdata('Color','ribbed-orange'); 
                $this->session->set_flashdata('error','error-state');            
                $this->session->set_flashdata('User',$user);            
                redirect('Kasir/Username');
        }
    }
}
