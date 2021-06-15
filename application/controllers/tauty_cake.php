<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tauty_Cake extends CI_Controller {
	public function index()
	{
		$data['user'] = $this->db->get_where('tbl_login',['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title']="Toko Tauty Cake";
        $data['tauty_cake'] = $this->model_tauty_cake->get_data('tbl_tauty_cake')->result();
        $data['profil'] = $this->model_admin->get_data('tbl_login')->result();
		$this->model_login->keamanan();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('Tauty_Cake/v_tauty_cake',$data);
		$this->load->view('templates_admin/footer');
	}
    public function tambahData()
	{
		$data['user'] = $this->db->get_where('tbl_login',['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title']="Toko Tauty Cake | Tambah Data";
        $data['profil'] = $this->model_admin->get_data('tbl_login')->result();
		$this->model_login->keamanan();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('Tauty_Cake/v_tambah_data_tauty_cake',$data);
		$this->load->view('templates_admin/footer');
	}
    public function tambahDataAksi()
   {
   	$this->_rules();
   	if($this->form_validation->run() == FALSE){
   		$this->tambahData();
   	}else{
   		$kode_produk		           = $this->input->post('kode_produk');
   		$nama_produk 	             = $this->input->post('nama_produk');
   		$deskripsi_produk  	       = $this->input->post('deskripsi_produk');
      $foto_produk               = $this->input->post('foto_produk');
   		$harga_produk	             = $this->input->post('harga_produk');
   		$stok_produk			    	         = $this->input->post('stok_produk');
   		$tanggal_upload    = $this->input->post('tanggal_upload');
   		
   		$data=array(
   				'kode_produk'					     => $kode_produk,
   				'nama_produk' 		    		 => $nama_produk,
   				'deskripsi_produk'	 			 => $deskripsi_produk,
   				'foto_produk' 		    		 => $foto_produk,
   				'harga_produk'	 				   => $harga_produk,
   				'stok_produk'							       => $stok_produk,
   				'tanggal_upload' 	 => $tanggal_upload
   		);
   		$this->model_tauty_cake->insert_data($data,'tbl_tauty_cake');
   		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>Data berhasil ditambahkan!</strong>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times</span>
  			</button>
			</div>');
   		redirect('tauty_cake');
   	}
   }
   public function _rules()
   {
   		$this->form_validation->set_rules('kode_produk','kode_produk', 'required' );
   		$this->form_validation->set_rules('nama_produk','nama_produk', 'required' );
   		$this->form_validation->set_rules('deskripsi_produk','deskripsi_produk', 'required' );
   		$this->form_validation->set_rules('foto_produk','foto_produk','required' );
   		$this->form_validation->set_rules('harga_produk','harga_produk','required' );
   		$this->form_validation->set_rules('stok_produk','stok_produk','required' );  		
   		$this->form_validation->set_rules('tanggal_upload','tanggal_upload','required' );
   }
   public function detail($id){
    $data['user'] = $this->db->get_where('tbl_login',['username' =>
     $this->session->userdata('username')])->row_array();
     $data['title']="Toko Tauty Cake | Detail Produk";
     $data['profil'] = $this->model_admin->get_data('tbl_login')->result();
     $this->load->model('model_tauty_cake');
     $detail = $this->model_tauty_cake->detail_data($id);
     $data['detail'] = $detail;
     $this->load->view('templates_admin/header',$data);
      $this->load->view('templates_admin/sidebar');
      $this->load->view('tauty_cake/v_detail_data_tauty_cake',$data);
      $this->load->view('templates_admin/footer');
     
    }
    public function deleteData($id)
   {
      $where = array('id_produk' => $id);
      $this->model_tauty_cake->delete_data($where,'tbl_tauty_cake');
      $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
      </div>');
      redirect('tauty_cake');
   }
   public function updateData($id)
    {
      $data['user'] = $this->db->get_where('tbl_login',['username' =>
      $this->session->userdata('username')])->row_array();
      $data['title']="Toko Tauty Cake | Edit Data";
      $data['toko_tauty_cake']=$this->db->query("SELECT * FROM tbl_tauty_cake WHERE id_produk='$id'")->result();
      $data['profil'] = $this->model_admin->get_data('tbl_login')->result();
      $where = array('id_produk'=> $id);
      $this->load->view('templates_admin/header',$data);
      $this->load->view('templates_admin/sidebar');
      $this->load->view('tauty_cake/v_edit_data_tauty_cake',$data);
      $this->load->view('templates_admin/footer');
    }

   public function updateDataAksi()
   {
    $this->_rules();
    if($this->form_validation->run() == FALSE){
      $id = $this->input->post('id_produk');
      $this->updateData($id);
    }else{
      $id                        = $this->input->post('id_produk');
      $kode_produk               = $this->input->post('kode_produk');
      $nama_produk               = $this->input->post('nama_produk');
      $deskripsi_produk          = $this->input->post('deskripsi_produk');
      $foto_produk               = $this->input->post('foto_produk');
      $harga_produk              = $this->input->post('harga_produk');
      $stok_produk                     = $this->input->post('stok_produk');
      $tanggal_upload    = $this->input->post('tanggal_upload');
      
      $data=array(
          'kode_produk'              => $kode_produk,
          'nama_produk'              => $nama_produk,
          'deskripsi_produk'         => $deskripsi_produk,
          'foto_produk'              => $foto_produk,
          'harga_produk'             => $harga_produk,
          'stok_produk'                    => $stok_produk,
          'tanggal_upload'    => $tanggal_upload
      );

      $where = array(
          'id_produk'=> $id
      );

      $this->model_tauty_cake->update_data('tbl_tauty_cake',$data,$where);
      $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil diupdate!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
      </div>');
      redirect('tauty_cake');
    }
   }

}