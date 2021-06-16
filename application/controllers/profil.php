<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
		public function profil_admin()
    {
        $data['user'] = $this->db->get_where('tbl_login',['username' =>
        $this->session->userdata('username')])->row_array();
        $data['profil'] = $this->model_admin->get_data('tbl_login')->result();
        $data['title']="Profil Admin";
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/v_profil_admin',$data);
        $this->load->view('templates_admin/footer');
    }
	}

