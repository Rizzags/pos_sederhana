<?php 
class M_kategori extends CI_Model{

	function lihat_data(){
		return $this->db->get('kategori');
	}

	function simpan($data){
		$this->db->insert('kategori',$data);
	}

}