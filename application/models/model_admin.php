<?php 
class Model_admin extends CI_model
{
	public function get_data($table)
	{
		return $this->db->get($table);
	}
	public function update_data($table,$data,$where){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
							
?>