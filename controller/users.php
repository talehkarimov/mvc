<?php

class Users extends Controller {
    public function index() {
        $usersModel = $this->model('users_model');
        $users = $usersModel->getUsers();
        $this->view('users', [
            'users' => $users
        ]);
    }

    
}