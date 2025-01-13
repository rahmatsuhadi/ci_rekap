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
		
		$data['role'] = $role;
		if($role=="admin"){
			$data['courses'] = $this->Course_model->get_all($user_id);
			$data['list_dosen'] = $this->User_model->get_user_by_role('dosen');
		}
		else if($role=="dosen"){
			$data['courses'] = $this->Course_model->get_with_instructor($user_id);
		}
		else{
			$data['courses'] = $this->Course_model->get_with_student($user_id);
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

		$data['total_students'] = $this->Enroll_model->count_students_by_course($id);

		$data['total_students_not_graded'] = $this->Enroll_model->count_students_not_graded($id);
		
		$data['total_students_graded'] = $this->Enroll_model->count_students_graded($id);
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

	public function detailStudent($id_enroll_student){

		
		$data['course'] = $this->Enroll_model->get_by_id($id_enroll_student);
		$data['id'] = $id_enroll_student;
		
		$data['enroll'] = $this->Enroll_model->get_student_by_by_enroll_id($id_enroll_student);

		
		$data['final_grade'] = @$this->Assessment_model->get_final_grade_by_enroll_id($id_enroll_student)['final_grade'] ?? 0;
		$data['assessment'] = $this->Assessment_model->get_assessment_by_enroll_id($id_enroll_student);


		$this->load->view('layout/header');
		$this->load->view('dashboard/course/detail_student', $data);
		$this->load->view('layout/footer');
	}


	
	public function rekap($id, $id_enroll_student){
		$data['id'] =$id;
		$this->load->model('Grade_model');

		$data['course'] = $this->Course_model->get_by_id($id);
		$data['enroll'] = $this->Enroll_model->get_student_by_by_enroll_id($id_enroll_student);

		if (empty($data['enroll'])) {
            show_404();
        }

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			// update data
                $grade = $this->input->post('grade');
				$grade_id = $this->input->post('grade_id');
				$assessment_id = $this->input->post('assessment_id');

				if($grade_id){
					$result = $this->Grade_model->update_grade_score($grade_id, $grade);									
				}
				else{
					$data_request = array(
						'assessment_id' =>$assessment_id,
						'enrollment_id' =>$data['enroll']['enrollment_id'],
						'grade' =>$grade
					);
					$result = $this->Grade_model->store_grade($data_request);									
				}


			if ($result) {
				$this->session->set_flashdata('message', 'Nilai berhasil diupdate');
			} else {
				$this->session->set_flashdata('message', 'Gagal menupdate Nilai');
			}

			return redirect('dashboard/courses/'.$id.'/rekap/'.$id_enroll_student);
			

		}


		$data['final_grade'] = @$this->Assessment_model->get_final_grade_by_enroll_id($id_enroll_student)['final_grade'] ?? 0;
		$data['assessment'] = $this->Assessment_model->get_assessment_by_enroll_id($id_enroll_student);




		$this->load->view('layout/header');
		$this->load->view('dashboard/course/detail', $data);
		$this->load->view('layout/footer');

	}

	
}
