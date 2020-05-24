<?php

class AdminModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function admin_login($username){

        $this->db->query('SELECT * FROM users WHERE username = :username');

        $this->db->bind(':username', $username);

        $result = $this->db->resultSet();

        if($result == null || empty($result)){
            return false;
        }else{
            return $result;
        }
    }

    public function get_form_table(){
        $this->db->query('SELECT * FROM form WHERE status = 1 ORDER BY created_at DESC');

        $result = $this->db->resultSet();

        return $result;
    }

    public function get_name($id){
        $this->db->query('SELECT name FROM users WHERE id = :id');

        $this->db->bind(':id', $id);

        $result = $this->db->single();

        return $result;
    }
    public function change_pw($id, $password){
        $this->db->query('UPDATE users SET password = :password WHERE id = :id');

        $this->db->bind(':password', $password);
        $this->db->bind(':id', $id);

        $result = $this->db->execute();

        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function delete_form($id){
        $this->db->query('UPDATE form SET status = 0 WHERE id = :id');

        $this->db->bind(":id", $id);

        $result = $this->db->execute();

        return $result;
    }
}