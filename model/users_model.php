<?php

class Users_Model extends Model {
    public function getUsers() {
        return $this->db->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);
    }
}