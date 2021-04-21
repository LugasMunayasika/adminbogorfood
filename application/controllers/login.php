<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('v_login');

	}
	public function ceklogin()
	{
		$username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->load->model('model_login');
        $this->model_login->ambillogin($username,$password);

	}
	public function logout()
    {
        $this->session->set_userdata('username',FALSE);
        $this->session->sess_destroy();   
        redirect('login');
    }
}
