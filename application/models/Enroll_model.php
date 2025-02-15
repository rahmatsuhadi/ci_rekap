<?php

class Enroll_model extends CI_Model {
    public $enrollment_id;
    public $user_id;
    public $course_id;

    

    private $table = 'enrollments';

       
    public function enroll($data) {
        return $this->db->insert($this->table, $data);        
    }
    
    public function get_by_course_id($id) 
    {
        $this->db->where('course_id', $id);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }


    public function get_by_id($id) 
    {
        $this->db->where('enrollment_id', $id);
        $this->db->join('courses', $this->table.'.course_id = courses.course_id', 'inner');
        $query = $this->db->get($this->table);
        return $query->row_array();
    }

    // Menghapus pendaftaran mahasiswa dari mata kuliah
    public function withdraw($id) {
        $this->db->where('enrollment_id', $id);
        
        return $this->db->delete($this->table);
    }

    public function get_students_by_course($id){


            $this->db->from($this->table);
            $this->db->select('enrollments.enrollment_id,
                   enrollments.user_id,
                   users.name,
                   users.identity,
                   users.status,
                   MAX(CASE WHEN grades.assessment_id IS NOT NULL THEN grades.grade_id END) AS grade_id');
$this->db->join('users', 'users.user_id = ' . $this->table . '.user_id', 'inner');
$this->db->join('grades', 'grades.enrollment_id = enrollments.enrollment_id', 'left');
$this->db->join('assessments', 'assessments.assessment_id = grades.assessment_id', 'left'); // including assessment if available
$this->db->group_by('enrollments.enrollment_id, enrollments.user_id, users.identity, users.status');



            $this->db->where($this->table . '.course_id', $id);
            
        // Menjalankan query dan mengembalikan hasilnya
        $query = $this->db->get();
        // return;
        // return $query->result();
        return $query->result_array();
    }

    public function count_students_by_course($id){
        // Menghitung jumlah siswa berdasarkan course_id
        $this->db->from($this->table);
        $this->db->join('users', 'users.user_id = ' . $this->table . '.user_id', 'inner');
        
        // Menambahkan kondisi where untuk course_id
        $this->db->where($this->table . '.course_id', $id);
        
        // Menghitung jumlah hasil query
        $count = $this->db->count_all_results();
        
        return $count;
    }

    public function count_students_not_graded($id){
       return $this->count_students_by_course($id) - $this->count_students_graded($id);

    }
    public function count_students_graded($id) {
        $this->db->select('enrollments.enrollment_id, 
                           MAX(CASE WHEN grades.assessment_id IS NOT NULL THEN grades.grade_id END) AS grade_id');
        
        $this->db->from('enrollments');
        $this->db->join('grades', 'grades.enrollment_id = enrollments.enrollment_id', 'left'); // LEFT JOIN grades
        $this->db->where('enrollments.course_id', $id);  
        $this->db->group_by('enrollments.enrollment_id'); // Group by enrollment_id only
    
        // Count the number of rows where grade_id is not NULL
        $this->db->having('grade_id IS NOT NULL');
    
        // Count results
        $count = $this->db->count_all_results();
        
        // Return the count
        return $count;
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