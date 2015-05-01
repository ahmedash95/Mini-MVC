<?php

class Main extends MainController{
    
    public function __construct () {
        
        parent::__construct();
        switch($_SESSION['permission']) {
            
            case 'admin':
                $link = '<a href="'.URL.'manageusers">Manage Users</a>';
                break;
            
            case 'moderator':
                $link = '<a href="'.URL.'displayusers">Display Users</a>';
                break;
            default:
                $link = null;
        }
        
        $data = array(
            'link' => $link  
        );
        
        
        
        $this->view('main',$data);
    }
    
}