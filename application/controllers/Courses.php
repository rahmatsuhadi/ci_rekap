<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
		$this->load->model('Course_model');
	}

	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		// $data['courses'] = $this->Course_model->get_all();
		$data['courses'] = $this->Course_model->get_with_instructor($user_id);
		


		$this->load->view('layout/header');
		$this->load->view('dashboard/main' , $data);
		$this->load->view('layout/footer');
	}

	
}
