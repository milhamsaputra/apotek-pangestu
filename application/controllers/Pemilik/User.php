<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class User extends CI_Controller {

	public function Index()
	{  
        $this->mymodel->cek_log();
        $user['user'] = "Pemilik";
        $data = $this->mymodel->tampil('tb_user');
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Pemilik/DataUser',array('data' => $data));
		$this->load->view('library/Menu-Footer');   
	}
    public function Tambah()
    {
        $user['user'] = "Pemilik";
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Pemilik/TambahUser');
		$this->load->view('library/Menu-Footer');
    }
    public function Edit($id)
    {
        $user['user'] = "Pemilik";
        $data=$this->mymodel->tampil("tb_user WHERE id_user='$id'");
        if(empty($data)){
            redirect('Pemilik/User');
        }
		$this->load->view('library/requirements');
		$this->load->view('library/Menu-Header',$user);
        $this->load->view('library/Menu-Header2');
		$this->load->view('Pemilik/EditUser',array('data' => $data));
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
            redirect('Pemilik/User');
        }else{
            echo "Hapus Gagal!";
            redirect('Pemilik/User');
        }
    }
    public function Set_Add()
    {
        $nama = $_POST['Nama'];
        $user = $_POST['User']; 
        $pass = sha1($_POST['Pass']);
        $akses = $_POST['Akses'];
        $stat="Aktif";
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
            redirect('Pemilik/User/Tambah');
        }else{
            echo "<script>alert('Gagal Ditambahkan!');</script>";
            redirect('Pemilik/User/Tambah');
        }

    }
    public function Set_Update($id)
    {
        $nama = $_POST['Nama']; 
        $user = $_POST['User']; 
        $akses = $_POST['Akses'];
        $status = $_POST['Stat'];
        $attribut = array(
            'nama'=>$nama,
            'username'=>$user,
            'akses'=>$akses,
            'status'=>$status
        );
        $sql = $this->mymodel->ubah('tb_user',$attribut,"id_user = '$id'");
        if($sql>=1){
            $pesannya="User Berhasil diubah!";
            $this->session->set_flashdata('Pesan',$pesannya);
            $this->session->set_flashdata('Pad','padding5');
            $this->session->set_flashdata('Color','ribbed-green');            
            redirect('Pemilik/User');
        }else{
            redirect('Pemilik/user');
        }
    }
}
