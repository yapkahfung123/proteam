<?php

class Form{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function insertData($data)
    {
        $this->db->query('INSERT INTO form (name, company, email, phone, description, service) VALUES (:name, :company, :email, :phone, :description, :service)');

        //Bind value
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':company', $data['company']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':service', $data['service']);


        //execute

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}