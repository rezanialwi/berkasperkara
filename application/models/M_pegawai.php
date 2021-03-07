<?php 

class M_pegawai extends CI_Model{
	//crud kontak
	function tampil_data(){
		return $this->db->get('pegawai');
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

	//pagging
	function data($number,$offset){
		return $query = $this->db->get('cs',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('cs')->num_rows();
	}

	
}