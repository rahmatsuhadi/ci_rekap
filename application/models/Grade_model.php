<?php

class Grade_model extends CI_Model {
    public $grade_id;
    public $enrollment_id;
    public $assessment_id;
    public $grade;

    

    private $table = 'grades';

    

    public function update_grade_score($id, $score) 
    {
        $this->db->where('grade_id', $id);

        return $this->db->update($this->table, ['grade' => $score]);
    }
    public function reset_grade($id) 
    {
        $this->db->where('grade_id', $id);
        return $this->db->update($this->table, ['grade' => 0]);
    }
    public function store_grade($data) 
    {
        return $this->db->insert($this->table, $data);
    }


}
