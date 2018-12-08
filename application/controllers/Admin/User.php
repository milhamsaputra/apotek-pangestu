<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class User extends CI_Controller {

	public function Index()
	{  
        $this->mymodel->cek_log();
        $user['user'] = "Admin";
        $data = $this->mymodel->tampil('tb_user');
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Admin/DataUser',array('data' => $data));
		$this->load->view('library/Menu-Footer');   
	}
    public function Tambah()
    {
        $user['user'] = "Admin";
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Admin/TambahUser');
		$this->load->view('library/Menu-Footer');
    }
    public function Edit($id)
    {
        $user['user'] = "Admin";
        $data=$this->mymodel->tampil("tb_user WHERE id_user='$id'");
        if(empty($data)){
            redirect('Admin/User');
        }
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Admin/EditUser',array('data' => $data));
		$this->load->view('library/Menu-Footer');
    }
    public function Set_Remove($id)
    {
        $cek = $this->mymodel->hapus('tb_user',"id_user = '$id'");    
        if($cek>=1){
            $pesannya="User ".$user." Berhasil dihapus!";
            $this->session->set_flashdata('Pesan',$pesannya);
            $this->session->set_flashdata('Pad','padding5');
            $this->session->set_flashdata('Color','ribbed-blue');            
            redirect('Admin/User');
        }else{
            echo "Hapus Gagal!";
            redirect('Admin/User');
        }
    }
    public function Set_Add()
    {
        $nama = $_POST['Nama'];
        $user = $_POST['User']; 
        $pass = sha1($_POST['Pass']);
        $akses = $_POST['Akses'];
        $stat = "Aktif";
        $data = array(
            'nama'=>$nama,
            'username'=>$user,
            'password'=>$pass,
            'akses'=>$akses,
            'status'=>$stat
        );
        $sql = $this->mymodel->tambah('tb_user', $data);
        
        if($sql>=1){
            $this->session->set_flashdata('Pesan','User Berhasil ditambahkan!');
            $this->session->set_flashdata('Pad','padding5');
            redirect('Admin/User/Tambah');
        }else{
            echo "<script>alert('Gagal Ditambahkan!');</script>";
            redirect('Admin/User/Tambah');
        }

    }
    public function Set_Update($id)
    {
        $nama = $_POST['Nama']; 
        $akses = $_POST['Akses'];
        $attribut = array(
            'nama'=>$nama,
            'akses'=>$akses
        );
        $sql = $this->mymodel->ubah('tb_user',$attribut,"id_user = '$id'");
        if($sql>=1){
            $pesannya="User Berhasil diubah!";
            $this->session->set_flashdata('Pesan',$pesannya);
            $this->session->set_flashdata('Pad','padding5');
            $this->session->set_flashdata('Color','ribbed-green');            
            redirect('Admin/User');
        }else{
            redirect('Admin/user');
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */