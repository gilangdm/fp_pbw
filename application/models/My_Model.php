<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model {

	public function GetYummyEatery($where=""){
		$data = $this->db->query('SELECT * FROM menu '.$where);
		return $data->result_array();
	}

	public function InsertData($tableName, $data){
		$res = $this->db->insert($tableName, $data);
		return $res;
	}

	public function update($tableName, $data, $where){
		$res = $this->db->update($tableName, $data, $where);
		return $res;
	}

	public function delete($tableName, $data, $where){
		$res = $this->db->delete($tableName, $data, $where);
		return $res;
	}

    function get_makan($id){
		$this->db->where('id',$id);
		return $this->db->get('yummyeatery')->row();
	}
}
