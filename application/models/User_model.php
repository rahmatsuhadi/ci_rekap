<?php

class User_model extends CI_Model {
    public $user_id;
    public $identity;
    public $password;
    public $role;
    public $name;
    public $email;
    public $status;


    private $table = 'users';


       
    public function create($data) {
       
        if (isset($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        }

        return $this->db->insert($this->table, $data);
    }

    public function get_by_id($id) {
        $this->db->where('user_id', $id);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }

    public function get_all() {
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function change_status($user_id, $status) {
        $this->db->where('user_id', $user_id);
        return $this->db->update($this->table, ['status' => $status]);
    }

    public function login($identity, $password) {
        return $this->verify_user($identity, $password);
    }

    public function verify_user($identity, $password) {

        $this->db->where('identity', $identity);
        $query = $this->db->get($this->table);


        
        if ($query->num_rows() == 1) {
            $user = $query->row_array();
           
            if (password_verify($password, $user['password'])) {
                return $user; 
            }
            return false;
        }
        return false; 
    }



}

?>