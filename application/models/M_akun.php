<?php 

class M_akun extends CI_Model{
	//crud kontak
	function tampil_data(){
		return $this->db->get('admin');
    }
    

    function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}
	
	
	 function register($username,$password)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>$password,
		);
		$this->db->insert('admin',$data_user);
	}



	
}