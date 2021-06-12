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
		$rangginang_tuti = $this->db->query("SELECT * FROM tbl_rangginang_tuti");
		$data['rangginang_tuti'] = $rangginang_tuti->num_rows();
		$tobokito = $this->db->query("SELECT * FROM tbl_tobokito");
		$data['tobokito'] = $tobokito->num_rows();
		$tauty_cake = $this->db->query("SELECT * FROM tbl_tauty_cake");
		$data['tauty_cake'] = $tauty_cake->num_rows();
		$data['profil'] = $this->model_admin->get_data('tbl_login')->result();
		$data['title']="Dashboard";
		$this->model_login->keamanan();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/v_dashboard',$data);
		$this->load->view('templates_admin/footer');
	}
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

     public function updateData($user)
    {
        $data['user'] = $this->db->get_where('tbl_login',['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title']="Update Profil Admin";
        $where = array('id_login'=> $user);
        $data['profil']=$this->db->query("SELECT * FROM tbl_login WHERE id_login='$user'")->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/v_update_profil',$data);
        $this->load->view('templates_admin/footer');
       
    }

   public function updateDataAksi()
   {
    $this->_rules();
    if($this->form_validation->run() == FALSE){
        $user = $this->input->post('id_login');
        $this->updateData($user);
    }else{
        $user           = $this->input->post('id_login');
        $nama           = $this->input->post('nama');
        $username       = $this->input->post('username');
        $password       = md5($this->input->post('password'));
        $foto_admin     = $this->input->post('foto_admin');
        
        $data=array(
                'nama'          => $nama,
                'username'      => $username,
                'password'      => $password,
                'foto_admin'    => $foto_admin,
        );

        $where = array(
                'id_login'=> $user
        );

        $this->model_admin->update_data('tbl_login',$data,$where);
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Profil Admin berhasil diupdate!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times</span>
            </button>
            </div>');
        redirect('dashboard/profil_admin');
    }
   }

    public function _rules()
   {
        $this->form_validation->set_rules('nama','nama', 'required' );
        $this->form_validation->set_rules('username','username', 'required' );
        $this->form_validation->set_rules('password','password','required' );
        $this->form_validation->set_rules('foto_admin','foto_admin','required' );
   }
	}

