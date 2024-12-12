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
		$this->load->model('User_model');
		$this->load->model('Enroll_model');
		$this->load->model('Assessment_model');

	}

	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		$role = $this->session->userdata('role');

		if($role=="admin"){
			$data['courses'] = $this->Course_model->get_all($user_id);
			$data['list_dosen'] = $this->User_model->get_user_by_role('dosen');
		}
		else if($role=="dosen"){
			$data['courses'] = $this->Course_model->get_with_instructor($user_id);
		}
		else{
			$data['courses'] = [];
		}

		// $data['courses'] = $this->Course_model->get_all();
		


		$this->load->view('layout/header');
		$this->load->view('dashboard/main' , $data);
		$this->load->view('layout/footer');
	}

	public function detail($id){
		
		$data['id'] =$id;
		$data['course'] = $this->Course_model->get_by_id($id);
		$data['list_students_course'] = $this->Enroll_model->get_students_by_course($id);



		$this->load->view('layout/header');
		$this->load->view('dashboard/course/rekap' , $data);
		$this->load->view('layout/footer');
	}

	public function create(){
		
		$data['list_dosen'] = $this->User_model->get_user_by_role('dosen');

		$this->load->view('layout/header');
		$this->load->view('dashboard/course/create', $data);
		$this->load->view('layout/footer');

	}

	public function assessment($id){
		$data['id'] =$id;
		$data['course'] = $this->Course_model->get_by_id($id);
		$data['list_dosen'] = $this->User_model->get_user_by_role('dosen');

		$data['list_component'] = $this->Assessment_model->get_assessment_component_by_course_id($id);


		$this->load->view('layout/header');
		$this->load->view('dashboard/course/assesment', $data);
		$this->load->view('layout/footer');

	}

	
}
