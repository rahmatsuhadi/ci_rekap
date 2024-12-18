
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assessment extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
		$this->load->model('Assessment_model');
		$this->load->model('Course_model');
        
		$this->load->model('User_model');

	}

	public function delete($course_id, $assessment_id) {
        

        if ($this->input->server('REQUEST_METHOD') == 'GET') {
                
            $result = $this->Assessment_model->delete_assessment($assessment_id);

            if ($result) {
                $this->session->set_flashdata('message', 'Penilaian berhasil didelete');
            } else {
                $this->session->set_flashdata('message', 'Gagal menghapus Penilaian');
            }

            return redirect('/dashboard/courses/'.$course_id.'/assessment');
            

        }
    }

        public function store($course_id) {

            $data = array(
				'weight' => $this->input->post('weight'),
				'assessment_name' => $this->input->post('assessment_name'),
				'course_id' => $this->input->post('course_id')
			);

            
            
            if ($this->input->server('REQUEST_METHOD') == 'POST') {
                
                $result = $this->Assessment_model->store_assessment($data);

                if ($result) {
                    $this->session->set_flashdata('message', 'Penilaian berhasil ditambahkan');
                } else {
                    $this->session->set_flashdata('message', 'Gagal menambahkan Penilaian');
                }

                return redirect('/dashboard/courses/'.$course_id.'/assessment');
                

            }
        }

    public function detail($id){
		$data['id'] =$id;
		$data['course'] = $this->Course_model->get_by_id($id);
		$data['list_dosen'] = $this->User_model->get_user_by_role('dosen');



		if (empty($data['course'])) {
            show_404();
        }

		$data['list_component'] = $this->Assessment_model->get_assessment_component_by_course_id($id);

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$assessment_id = $this->input->post('assessment_id');

			$data = array(
				'weight' => $this->input->post('weight'),
				'assessment_name' => $this->input->post('assessment_name')
			);

			$result = $this->Assessment_model->update_assessment($assessment_id, $data);

			if ($result) {
				$this->session->set_flashdata('message', 'Penilaian berhasil diupdate');
			} else {
				$this->session->set_flashdata('message', 'Gagal menupdate Penililaian');
			}

            
			return redirect('/dashboard/courses/'. $id.'/assessment');
		}

			


		$this->load->view('layout/header');
		$this->load->view('dashboard/course/assesment', $data);
		$this->load->view('layout/footer');

	}

    
}
