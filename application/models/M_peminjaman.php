<?php 

class M_peminjaman extends CI_Model{
	//crud kontak
	public function lihat_data()
	{
        return $this->db->join('pegawai', 'pegawai.id_pegawai = peminjaman.id_pegawai', 'left')
        ->get('peminjaman')->result();
    }
    
     function get_pegawai()
	{
        return $this->db->get('pegawai')->result();
    }
    
    function input_data($data,$table){
		$this->db->insert($table,$data);
    }
    
    function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
    }

    function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

     function get_product_keyword($keyword){
			$this->db->join('pegawai', 'pegawai.id_pegawai = peminjaman.id_pegawai', 'left');
			$this->db->like('berkas_dipinjam',$keyword);
      $this->db->or_like('nama_peminjam',$keyword);
      $this->db->or_like('tgl_pinjam',$keyword);
      $this->db->or_like('tgl_kembali',$keyword);
			return $this->db->get('peminjaman')->result();
		}
	

	//cari & pagging
	function get($batas=NULL,$offset=NULL,$cari=NULL)
  {
      if ($batas != NULL) {
        $this->db->limit($batas,$offset);
      }
      
    return $this->db->join('pegawai', 'pegawai.id_pegawai = peminjaman.id_pegawai', 'left')
        ->get('peminjaman')->result();
  }
  
     function jumlah_row($search)
  {
    $this->db->or_like($search);
    $query = $this->db->get('peminjaman');

    return $query->num_rows();
  }

   function get_by_id($kondisi)
  {
      $this->db->from('peminjaman');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function get_detail($id_peminjaman = NULL){
		
		$query = $this->db->get_where('peminjaman', array('id_peminjaman' => $id_peminjaman))->row();
		return $query;
 
	}
	
}