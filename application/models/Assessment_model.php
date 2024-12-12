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
}