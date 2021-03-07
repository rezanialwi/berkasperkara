<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->model('Pinjam_model');
	}

	public function index()
	{
			$data['peminjaman'] = $this->Pinjam_model->all();
			$this->load->view('admin/v_pinjam', $data);
	}

	public function data_pinjam()
	{
			$data = $this->Pinjam_model->all();
			echo json_encode($data);
	}
	
	public function create()
	{
			$data['nama_peminjam'] = $this->input->post('nama_peminjam');
			$data['berkas_dipinjam'] = $this->input->post('berkas_dipinjam');
			$data['tgl_pinjam'] = $this->input->post('tgl_pinjam');
			$data['tgl_kembali'] = $this->input->post('tgl_kembali');
			$data['id_pegawai'] = $this->input->post('id_pegawai');
			$insert = $this->Pinjam_model->create($data);
			echo $insert;
	}

	public function edit($id_peminjaman)
	{
		
			$data = $this->Pinjam_model->find($id_peminjaman);
			echo json_encode($data);
	}

	public function update()
	{
			$id_peminjaman = $this->input->post('id_peminjaman');
			$data['nama_peminjam'] = $this->input->post('nama_peminjam');
			$data['berkas_dipinjam'] = $this->input->post('berkas_dipinjam');
			$data['tgl_pinjam'] = $this->input->post('tgl_pinjam');
			$data['tgl_kembali'] = $this->input->post('tgl_kembali');
			$data['id_pegawai'] = $this->input->post('id_pegawai');
			$update = $this->Pinjam_model->update($data, $id_peminjaman);
			echo $update;
	}

	public function delete($id_peminjaman)
	{
			$delete = $this->Pinjam_model->delete($id_peminjaman);
			echo $delete;
	}

}
