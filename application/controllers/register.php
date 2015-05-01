<?php

class Register extends MainController{
    
    public function __construct () {
        
        if(isset($_SESSION['username'])) {
            header ("location: ".URL."main");
        }
        
        $this->user = $this->model('user');
        
        if(isset($_POST['submit'])) {
            
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email    = $_POST['email'];
            
            if(empty($username) || empty($password) || empty($email)) {
                echo "Please insert a vaild data";
            }else{
                $this->user->insert_user($username,$password,$email);
            }
            
        }
        
        $this->view('register');
        
    }
}
