<?php

class Model_login extends CI_model
{
	public function ambillogin($username,$password)
	{

		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('tbl_login');

		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$sess = array ('username' => $row->username,
							   'password' => $row->password
				);
			}
			$this->session->set_userdata($sess);
			redirect('dashboard');
		 }
		 else{
		 	$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>Maaf email dan password salah! Mohon di isi dengan benar!</strong>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times</span>
  			</button>
			</div>');
		 	redirect('login');
		}
	}

	public function keamanan(){
		$username=$this->session->userdata('username');
		if(empty($username)){
			$this->session->sess_destroy();
			redirect('login');
		}
	}
	
}