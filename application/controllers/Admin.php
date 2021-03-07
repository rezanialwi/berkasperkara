<?php 

class Admin extends CI_Controller{
		function __construct(){
		parent::__construct();	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}	
        $this->load->model('M_peminjaman');
        $this->load->library('pagination');
      $this->load->helper('url');
        $this->load->helper('tgl_indo');
    }
    
	function index(){
		 $cari = $this->input->get('cari');
      $page = $this->input->get('per_page');

      $search = array('berkas_dipinjam'=> $cari );

      $batas =  9; // 9 data per page
      if(!$page):
          $offset = 0;
      else:
          $offset = $page;
      endif;

      $config['page_query_string'] = TRUE;
  		$config['base_url'] 				 = base_url().'admin/?cari='.$cari;
  		$config['total_rows'] 			 = $this->M_peminjaman->jumlah_row($search);

  		$config['per_page'] 				 = $batas;
  		$config['uri_segment'] 			 = $page;

  		$config['full_tag_open'] 		= '<ul class="pagination">';
  		$config['full_tag_close'] 	= '<ul>';

  		$config['first_link'] 			= 'first';
  		$config['first_tag_open'] 	= '<li><a>';
  		$config['first_tag_close'] 	= '</a></li>';

  		$config['last_link'] 				= 'last';
  		$config['last_tag_open']	 	= '<li><a>';
  		$config['last_tag_close'] 	= '</a></li>';

  		$config['next_link'] 				= '&raquo;';
  		$config['next_tag_open'] 		= '<li><a>';
  		$config['next_tag_close'] 	= '</a></li>';

  		$config['prev_link'] 				= '&laquo;';
  		$config['prev_tag_open'] 		= '<li><a>';
  		$config['prev_tag_close'] 	= '</a></li>';

  		$config['cur_tag_open'] 		= '<li class="active"><a>';
  		$config['cur_tag_close'] 		= '</a></li>';

  		$config['num_tag_open'] 		= '<li><a>';
  		$config['num_tag_close'] 		= '</a></li>';

      $this->pagination->initialize($config);
      $data['pagination']	 = $this->pagination->create_links();
      $data['jumlah_page'] = $page;
			

      $data['peminjaman'] = $this->M_peminjaman->get($batas,$offset,$search);
  		$this->load->view('admin/v_peminjaman',$data);
    }
    
    function tambah(){
		
        $get_pegawai = $this->M_peminjaman->get_pegawai();
        $pegawai = array();
        foreach ($get_pegawai as $r) {
           $pegawai[$r->id_pegawai] = $r->nama_pegawai;
        }
        $dropdown_pegawai = form_dropdown('id_pegawai', $pegawai);

		$form_submit = form_submit('submit', 'simpan');
		$data = array(
            'dropdown_pegawai' => $dropdown_pegawai,
        );
		$this->load->view('admin/v_tambah_peminjaman', $data);
    }
    
    function tambah_aksi(){
		$nama_peminjam = $this->input->post('nama_peminjam');
        $berkas_dipinjam = $this->input->post('berkas_dipinjam');
        $tgl_pinjam = $this->input->post('tgl_pinjam');
        $tgl_kembali = $this->input->post('tgl_kembali');
        $status = $this->input->post('status');
        $tujuan = $this->input->post('tujuan');
        $id_pegawai = $this->input->post('id_pegawai');
 
		$data = array(
			'nama_peminjam' => $nama_peminjam,
            'berkas_dipinjam' => $berkas_dipinjam,
            'tgl_pinjam' => $tgl_pinjam,
            'tgl_kembali' => $tgl_kembali,
            'status' => $status,
            'tujuan' => $tujuan,
            'id_pegawai' => $id_pegawai
			);
		$this->M_peminjaman->input_data($data,'peminjaman');
		redirect('admin/index');
    }
    
    function edit($id_peminjaman){
		
        $get_pegawai = $this->M_peminjaman->get_pegawai();
        $pegawai = array();
        foreach ($get_pegawai as $r) {
           $pegawai[$r->id_pegawai] = $r->nama_pegawai;
        }
        $dropdown_pegawai = form_dropdown('id_pegawai', $pegawai);

		$form_submit = form_submit('submit', 'simpan');
		$data = array(
            'dropdown_pegawai' => $dropdown_pegawai,
        );   
	$where = array('id_peminjaman' => $id_peminjaman);
	$data['peminjaman'] = $this->M_peminjaman->edit_data($where,'peminjaman')->result();
	$this->load->view('admin/v_edit_peminjam',$data);
    }

    function update(){
	$id_peminjaman = $this->input->post('id_peminjaman');
	$nama_peminjam = $this->input->post('nama_peminjam');
        $berkas_dipinjam = $this->input->post('berkas_dipinjam');
        $tgl_pinjam = $this->input->post('tgl_pinjam');
        $tgl_kembali = $this->input->post('tgl_kembali');
        $status = $this->input->post('status');
        $tujuan = $this->input->post('tujuan');
        $id_pegawai = $this->input->post('id_pegawai');

	$data = array(
		'nama_peminjam' => $nama_peminjam,
            'berkas_dipinjam' => $berkas_dipinjam,
            'tgl_pinjam' => $tgl_pinjam,
            'tgl_kembali' => $tgl_kembali,
            'status' => $status,
            'tujuan' => $tujuan,
            'id_pegawai' => $id_pegawai
	);

	$where = array(
		'id_peminjaman' => $id_peminjaman
	);

	$this->M_peminjaman->update_data($where,$data,'peminjaman');
	redirect('admin/index');
}

    function hapus($id_peminjaman){
		$where = array('id_peminjaman' => $id_peminjaman);
		$this->M_peminjaman->hapus_data($where,'peminjaman');
		redirect('admin/index');
	}

	function cetak(){
	$data['peminjaman'] = $this->M_peminjaman->lihat_data();
  $this->load->view('admin/v_cetak_peminjaman',$data);
	}

    function dasboard(){
			$peminjaman = 'SELECT COUNT(*) AS hasil FROM peminjaman';
			$data['peminjaman'] = $this->db->query($peminjaman)->row_array();

			$admin = 'SELECT COUNT(*) AS hasil FROM admin';
			$data['admin'] = $this->db->query($admin)->row_array();

			$pegawai = 'SELECT COUNT(*) AS hasil FROM pegawai';
			$data['pegawai'] = $this->db->query($pegawai)->row_array();


	$this->load->view('admin/v_dasboard_admin', $data);
    }
    
     function cetak_id($id_peminjaman) {
     $data = array(
      'peminjaman'  => $this->M_peminjaman->lihat_data(),
    );
      $this->load->view('admin/v_cetak_peminjam_id',$data);
  }

  	function tambah_tglkembali($id_peminjaman){
		   $get_pegawai = $this->M_peminjaman->get_pegawai();
        $pegawai = array();
        foreach ($get_pegawai as $r) {
           $pegawai[$r->id_pegawai] = $r->nama_pegawai;
        }
        $dropdown_pegawai = form_dropdown('id_pegawai', $pegawai);

		$form_submit = form_submit('submit', 'simpan');
		$data = array(
            'dropdown_pegawai' => $dropdown_pegawai,
        );
		
	$where = array('id_peminjaman' => $id_peminjaman);
	$data['peminjaman'] = $this->M_peminjaman->edit_data($where,'peminjaman')->result();
	$this->load->view('admin/v_tambah_tglkembali',$data);
    }


	 function tambah_peminjaman(){
		
       
		$this->load->view('admin/v_tambah_peminjaman2');
    }
    
    function tambah_aksi_pinjam(){
		$nama_peminjam = $this->input->post('nama_peminjam');
        $berkas_dipinjam = $this->input->post('berkas_dipinjam');
        $tgl_pinjam = $this->input->post('tgl_pinjam');
        $tgl_pinjam = $this->input->post('tgl_pinjam');
        $tujuan = $this->input->post('tujuan');
      
 
		$data = array(
			'nama_peminjam' => $nama_peminjam,
            'berkas_dipinjam' => $berkas_dipinjam,
            'tgl_pinjam' => $tgl_pinjam,
            'tujuan' => $tujuan
            
			);
		$this->M_peminjaman->input_data($data,'peminjaman');
		redirect('admin/index');
	}
	
	 function search(){
		$keyword = $this->input->post('keyword');
		$data['peminjaman']=$this->M_peminjaman->get_product_keyword($keyword);
		$this->load->view('admin/v_cari_peminjaman',$data);
	}

	function laporanpdf()
  {
      $data['peminjaman'] = $this->M_peminjaman->lihat_data();
     $this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan_peminjaman_berkas.pdf";
		$this->pdf->load_view('admin/v_pdf_peminjaman', $data);
  }

  public function detail($id_peminjaman){

		$detail = $this->M_peminjaman->get_detail($id_peminjaman);
		$data['detail'] = $detail;
		$this->load->view('admin/v_detail_pinjam', $data);
 
	}

	
   function cetak_persatu($id_peminjaman){
   	$detail = $this->M_peminjaman->get_detail($id_peminjaman);
    $data['detail'] = $detail;
    $this->load->view('admin/cetak_persatu',$data);
    }
	
}