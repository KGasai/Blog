<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/head.php');
		if ($this->session->userdata('role') == 'admin') {
			$this->load->view('templates/navbar_admin');
		} else {
			$this->load->view('templates/navbar');
		}

		$this->load->view('view_index');
		$this->load->view('templates/footer');
	}

	public function login(){
		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view('form_login');
		$this->load->view('templates/footer');
	}

	public function selectAdmin(){
		if(isset(($_POST))){
			$login = $_POST['login'];
			$password = $_POST['password'];

			if($login == 'admin' && $password == 'admin'){
				$this->session->set_userdata('role','admin');
				redirect('Main/index');
			}else{
				$this->session->set_userdata('error_auth','Неверный логин или пароль');
				redirect('Main/login');
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('main/index');
	}
}
