<?php

class Course_model extends CI_Model {
    public $user_id;
    public $identity;
    public $password;
    public $role;
    public $name;
    public $email;
    public $status;


    private $table = 'courses';


       
    public function create($data) {

        return $this->db->insert($this->table, $data);
    }

    public function get_by_id($id) 
    {
        $this->db->where('course_id', $id);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }


    public function get_with_instructor($instructor_id)
    {
        $this->db->select('courses.*, users.name as instructor,');
        $this->db->from('courses');
        $this->db->join('users', 'users.user_id = courses.instructor_id', 'inner');
        $this->db->where('users.user_id', $instructor_id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // Mengembalikan hasil query dalam bentuk array
            return $query->result_array();
        } else {
            // Jika tidak ada data, kembalikan array kosong atau bisa sesuaikan dengan kebutuhan
            return [];
        }
    }

    public function get_with_student($student_id)
    {
        $this->db->select('courses.*, students.name as student_name, enrollments.enrollment_id, instructors.name as instructor');
        $this->db->from('enrollments');
        $this->db->join('courses', 'courses.course_id = enrollments.course_id');
        $this->db->join('users as instructors', 'instructors.user_id = courses.instructor_id');
        $this->db->join('users as students', 'students.user_id = enrollments.user_id');
        $this->db->where('enrollments.user_id', $student_id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // Mengembalikan hasil query dalam bentuk array
            return $query->result_array();
        } else {
            // Jika tidak ada data, kembalikan array kosong atau bisa sesuaikan dengan kebutuhan
            return [];
        }
    }

    public function get_all() 
    {
        
        $this->db->select('courses.*, users.name as instructor,');
        $this->db->from('courses');
        $this->db->join('users', 'users.user_id = courses.instructor_id', 'inner');
        // $this->db->where('users.user_id', $instructor_id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_all_mahasiswa_in_course(){
    }

}

?>