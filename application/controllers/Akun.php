<?php 

class Akun extends CI_Controller{

	function __construct(){
		parent::__construct();		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('M_akun');
         $this->load->helper('url');
	}

	function index(){
		$data['admin'] = $this->M_akun->tampil_data()->result();
		$this->load->view('admin/v_akun',$data);
	}
	
	function tambah(){
		$this->load->view('admin/v_tambah_akun');
    }
    
   

    function hapus($id){
		$where = array('id' => $id);
		$this->M_akun->hapus_data($where,'admin');
		redirect('akun/index');
	}

	 function proses()
	{
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[admin.username]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$this->M_akun->register($username,$password);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('akun');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('akun/tambah');
		}
	}


}