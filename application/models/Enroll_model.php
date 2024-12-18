<?php

class Enroll_model extends CI_Model {
    public $enrollment_id;
    public $user_id;
    public $course_id;

    

    private $table = 'enrollments';

       
    public function enroll($data) {
        return $this->db->insert($this->table, $data);        
    }

    public function get_by_id($id) 
    {
        $this->db->where('course_id', $id);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }

    // Menghapus pendaftaran mahasiswa dari mata kuliah
    public function withdraw($id) {
        $this->db->where('enrollment_id', $id);
        
        return $this->db->delete($this->table);
    }

    public function get_students_by_course($id){
        // $this->db->select('users.user_id, users.name, users.identity, users.status,  assessments.assessment_name, grades.grade');
        $this->db->from($this->table);
        $this->db->join('users', 'users.user_id = ' . $this->table . '.user_id', 'inner');

        // $this->db->join('assessments', 'assessments.course_id = ' . $this->table . '.course_id', 'inner');
        // $this->db->join('grades', 'grades.enrollment_id = ' . $this->table . '.enrollment_id', 'left');
        $this->db->where($this->table . '.course_id', $id);
        
        // Menjalankan query dan mengembalikan hasilnya
        $query = $this->db->get();
        // return $query->result();
        return $query->result_array();
    }

    public function get_student_by_by_enroll_id($id){

        $this->db->from($this->table);
        $this->db->join('courses', 'courses.course_id = '. $this->table . '.course_id', 'inner');       
        $this->db->join('users', 'users.user_id = '. $this->table . '.user_id', 'inner');

        $this->db->where($this->table . '.enrollment_id',$id);

        $query = $this->db->get();

        return $query->row_array();
    }

}


// SELECT * FROM enrollments INNER JOIN courses ON courses.course_id 
// = enrollments.course_id INNER JOIN users ON users.user_id = enrollments.user_id WHERE enrollments.enrollment_id = '$id' ";