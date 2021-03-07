<?php 

class Pegawai extends CI_Controller{

	function __construct(){
		parent::__construct();		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('M_pegawai');
                $this->load->helper('url');
	}

	function index(){
		$data['pegawai'] = $this->M_pegawai->tampil_data()->result();
		$this->load->view('admin/v_pegawai',$data);
    }
    
    function tambah(){
		$this->load->view('admin/v_tambah_pegawai');
    }
    
    function tambah_aksi(){
		$nama_pegawai = $this->input->post('nama_pegawai');
        
 
		$data = array(
			'nama_pegawai' => $nama_pegawai
			);
		$this->M_pegawai->input_data($data,'pegawai');
		redirect('pegawai/index');
    }
    
    function edit($id_pegawai){
	$where = array('id_pegawai' => $id_pegawai);
	$data['pegawai'] = $this->M_pegawai->edit_data($where,'pegawai')->result();
	$this->load->view('admin/v_edit_pegawai',$data);
    }

    function update(){
	$id_pegawai = $this->input->post('id_pegawai');
	$nama_pegawai = $this->input->post('nama_pegawai');

	$data = array(
		'nama_pegawai' => $nama_pegawai
	);

	$where = array(
		'id_pegawai' => $id_pegawai
	);

	$this->M_pegawai->update_data($where,$data,'pegawai');
	redirect('pegawai/index');
}

    function hapus($id_pegawai){
		$where = array('id_pegawai' => $id_pegawai);
		$this->M_pegawai->hapus_data($where,'pegawai');
		redirect('pegawai/index');
	}

	function cetak(){
	$data['pegawai'] = $this->M_pegawai->tampil_data()->result();
  $this->load->view('admin/v_tampil_pegawai',$data);
	}
}