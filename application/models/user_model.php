<?php 

class User_model extends CI_Model{

	function user_view_all(){
	// untuk mengambil data dan mengembalikan data
	return $this->db->get("user");

	}

	function tambah_data($data, $table){
		$this->db->insert($table, $data);
	}

	function edit_data($where, $table){
		return $this->db->get_where($table, $where);
	}

	function update_data($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

}

 ?>