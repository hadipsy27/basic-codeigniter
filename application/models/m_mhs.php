<?php 

class M_mhs extends CI_Model{
	public function get_data(){
		// tb_mhs adalah nama tabel database
		return $this->db->get('tb_mhs')->result_array();
	}
}

 ?>
