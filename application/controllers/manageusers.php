<?php

class ManageUsers extends MainController {
    
    public $user;
    
    public function __construct () {
        
        parent::__construct();
        
        $this->user = $this->model('user');

    }

    public  function  index () {

        $users = $this->user->basicSelect();

        $data = array(
            'users' => $users
        );

        $this->view('show_users',$data);
    }
    
    public function add () {

         if(isset($_POST['add'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];
            $email    = $_POST['email'];

            if(empty($username) || empty($password) || empty($email)) {
                echo "Please insert a vaild data";
            }else{
                $this->user->insertUser($username,$password,$email);
                header("location: ".URL."manageusers");
            }

        }

        $this->view('add_user');
    }

    public function edit ($id) {

        $data = array(
            'id' => $id
        );

        $user = $this->user->basicSelect($data);

        $data = array(
            'user' => $user
        );

        if(isset($_POST['edit'])) {

            $username   = $_POST['username'];
            $password   = $_POST['password'];
            $email      = $_POST['email'];
            $permission = $_POST['permission'];
            $id         = (int) $id;

            if(empty($username) || empty($password) || empty($email)) {
                echo "Please insert a vaild data";
            }else{
                if($this->user->updateUser($username,$password,$email,$permission,$id))
                    header("location: ".URL."manageusers");
            }

        }

        $this->view('edit_user',$data);

    }

    public function delete ($id) {

        $this->user->deleteUser($id);
        header("location: ".URL."manageusers");

    }
}

