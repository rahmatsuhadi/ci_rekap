<?php


class Assessment_model extends CI_Model {
    public $assessment_id;

    private $table = 'assessments';


    public function get_assessment_component_by_course_id($id){
        
        $this->db->where('course_id', $id);

        // $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
        
    }

    public function store_assessment($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function delete_assessment($id)
    {
        $this->db->where('assessment_id', $id);
        return $this->db->delete($this->table);
    }

    public function update_assessment($id, $data)
    {
        $this->db->where('assessment_id', $id);
        return $this->db->update($this->table, $data);
    }

    public function get_assessment_by_enroll_id($id){

        
        $this->db->select('enrollments.user_id, 
         assessments.assessment_name,
         assessments.weight,
         assessments.assessment_id,
         grades.enrollment_id, 
         enrollments.enrollment_id AS ori, 
         grades.grade,
         grades.grade_id');

         $this->db->join('enrollments', 'enrollments.course_id = '. $this->table. '.course_id', 'inner');

         $this->db->join('grades', 'grades.assessment_id = assessments.assessment_id and grades.enrollment_id = enrollments.enrollment_id', 'left');

         $this->db->where('enrollments.enrollment_id',$id);
        
            $this->db->from($this->table);
            $query = $this->db->get();

            return $query->result_array();
        
    }
    public function get_final_grade_by_enroll_id($id){

        
        $this->db->select('
            enrollments.user_id, 
            SUM(COALESCE(grades.grade, 0.00) * (assessments.weight / 100)) AS final_grade
        ');
        $this->db->from('assessments');
        $this->db->join('enrollments', 'enrollments.course_id = assessments.course_id', 'inner');
        $this->db->join('grades', 'assessments.assessment_id = grades.assessment_id AND grades.enrollment_id = enrollments.enrollment_id', 'left');
        $this->db->where('enrollments.enrollment_id', $id);
        $this->db->group_by('enrollments.user_id');

        $query = $this->db->get();
        
        return $query->row_array();
        
    }
}
