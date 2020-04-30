<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('paket_model');
		$this->load->model('wisatawan_model');
		$this->load->model('transaksi_model');
	}

	public function index($page = 'home', $id = 0)
	{
		if(!file_exists(APPPATH.'views/page/'.$page.'.php')){
			show_404();
		}

		if(!$this->session->userdata('login_admin')){
			redirect('welcome/login');
		}

		$data = array(
			'admin' => $this->user_model->detail_user(),
			'dt_paket' => $this->paket_model->get_paket(),
			'dt_wisatawan' => $this->wisatawan_model->get_wisatawan(),
			'dt_transaksi' => $this->transaksi_model->get_transaksi(),
			 );

		$this->load->view('template/header', $data);
		$this->load->view('page/'.$page);
		$this->load->view('template/footer');
	}

	function login()
	{
		$this->load->view('login');
	}

	function aksilogin()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$user_id = $this->user_model->login($username, $password);

		if($user_id){
			
			$user_data = array(
				'user_id' => $user_id->id_admin,
				'admin_level' => $user_id->level,
				'login_admin' => true
			);

			$this->session->set_userdata($user_data);

			redirect('');
		} else {
			
			$this->session->set_flashdata('login_failed', 'Login is invalid');

			redirect('welcome/login');
		}
	}

	function logout(){
		
		$this->session->unset_userdata('login_admin');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('admin_level');

		$this->session->set_flashdata('user_loggedout', 'You are now logged out');

		redirect('welcome/login');
	}
}
