<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		$this->load->view('login');
	}

	public function action_login()
	{
		$this->load->model('User_model');

		$this->form_validation->set_rules('identity', 'Username/Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');

		if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
			$this->load->view('login');
        }


		$identity = $this->input->post('identity');
        $password = $this->input->post('password');

		$user = $this->User_model->login($identity, $password);

		if ($user) {
			$this->session->set_userdata('user_id', $user['user_id']);
			$this->session->set_userdata('identity', $user['identity']);
			$this->session->set_userdata('role', $user['role']);
			$this->session->set_userdata('name', $user['name']);
			$this->session->set_userdata('logged_in', TRUE);
			redirect('/dashboard/courses');
		} else {
			// Jika login gagal
			$this->session->set_flashdata('error', 'Invalid username or password');
			redirect('auth/login');
		}
	}
	public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        
        redirect('auth/login');
    }
}
