<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecturers extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
		$this->load->model('Course_model');
		$this->load->model('User_model');
	}

	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		$role = $this->session->userdata('role');

        $data['slug_url'] = 'courses';

		$data['title_page'] = "List Dosen";

		
		$data['list_users'] = $this->User_model->get_user_by_role('dosen');

		$this->load->view('layout/header');
		$this->load->view('dashboard/user/index' , $data);
		$this->load->view('layout/footer');
	}

	public function create(){
		
        $data['slug_url'] = 'lecturers';

		$data['list_dosen'] = $this->User_model->get_user_by_role('dosen');

		$this->load->view('layout/header');
		$this->load->view('dashboard/user/create_dosen', $data);
		$this->load->view('layout/footer');

		

	}

	
}
