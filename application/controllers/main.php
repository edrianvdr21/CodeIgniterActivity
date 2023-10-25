<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	public function index(){
		$this->load->view('login');
	}
	
	public function register(){
		$this->load->view('registration');
	}

	public function saveregistration(){
		$this->load->model('Registration_model');
		$data = array(
			'fullname' => $this->input->post('fullname'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
		$result = $this->Registration_model->insertRecord($data);
		if($result){
			$this->session->set_flashdata('message', 'Registration Success!');
			$this->load->view('registration');
		}
	}

	public function home(){
		$this->load->view('home');
	}

	public function login(){
		$this->load->model('Registration_model');
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
		$result = $this->Registration_model->validateUser($data);
		// print_r($result);
		// exit();
		if($result){
			$this->session->set_userdata('fullname', $result[0]->name);
			redirect('main/home');
		}else{
			$this->session->set_flashdata('message', 'Invalid Account!');
			$this->load->view('login');
		}
	}
}
