<?php
class MyModel extends CI_Model {

	// function getData() {
	// 	$query = $this->db->get('admin');
	// 	return $query->result_array();
	// }

	public function GetPesanan($where=""){
    $data = $this->db->query('SELECT * FROM pesanan '.$where);
    return $data -> result_array();
  }

	public function GetMenu($where=""){
    $data = $this->db->query('SELECT * FROM menu '.$where);
    return $data -> result_array();
  }
    
    public function GetFeedback($where=""){
    $data = $this->db->query('SELECT * FROM feedback '.$where);
    return $data -> result_array();
  }

	function addData($data) {
		$this->db->insert('admin', $data);
	}

	function authentication($username, $password) {
		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->from('admin');
		$query = $this->db->get();

    if ($query->num_rows() == 1) {
			return true;
		}
		else {
			return false;
		}
	}

	public function insertData($tabelName, $data){
    $res = $this->db->insert($tabelName, $data);
    return $res;
  }

	public function updateData($tabelName, $data, $where){
    $res = $this->db->update($tabelName, $data, $where);
    return $res;
	}

	public function deleteData($tabelName, $where){
    $res = $this->db->delete($tabelName, $where);
    return $res;
  }

	function delete_item($item) {
		$this->db->where_in('kode_barang', $item);
		$this->db->delete('admin');
	}
}

?>
