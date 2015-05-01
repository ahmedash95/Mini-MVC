<?php

class Login extends MainController{
    
    public function __construct () {
        
        if(isset($_SESSION['username'])) {
            header ("location: ".URL."main");
        }
        $this->user = $this->model('user');
        
        $data = array();
        
        if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $error = $this->user->loginRequired ($username,$password);
            
            if(empty($error)) {
                
                if($this->user->login($username,$password)) {
                    
                    $data = array(
                      'username' => $username
                    );
                    
                    $user = $this->user->basicSelect($data);
                                       
                    $_SESSION['username'] = $username;
                    //$user['username']; 
                    $_SESSION['permission'] = $user['permission'];
                    
                    header("location: ".URL."main");
                    
                }else {
                    $error = "please enter a valid username and password";
                }
            }
            
            $data = array(
              'error' => $error
            );
        }

        $this->view('login',$data);
        
        
    }
    
}
