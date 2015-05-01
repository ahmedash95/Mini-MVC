<?php

class DisplayUsers extends MainController{
    
    public function __construct () {
        
        parent::__construct();
        
        $this->user = $this->model('user');
        
        $users = $this->user->basicSelect();
        
        $data = array(
            'users' => $users
        );
        
        $this->view('display_users',$data);
        
    }
}
