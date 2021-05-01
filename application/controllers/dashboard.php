<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$data['user'] = $this->db->get_where('tbl_login',['username' =>
        $this->session->userdata('username')])->row_array();
		$olaten = $this->db->query("SELECT * FROM tbl_olaten");
		$data['olaten'] = $olaten->num_rows();
		$dapur_bujalu = $this->db->query("SELECT * FROM tbl_dapur_bujalu");
		$data['dapur_bujalu'] = $dapur_bujalu->num_rows();
		$this->model_login->keamanan();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/v_dashboard',$data);
		$this->load->view('templates_admin/footer');

	}
}
