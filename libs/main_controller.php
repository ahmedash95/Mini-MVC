<?php

class MainController {
        
        public function __construct (){
                
                if(!isset($_SESSION['username'])) {
                        header("location: ".URL."login");
                }
                
        }
    
        public function model ($model_name) {
        
        if(file_exists(PATH.DS.'application/models'.DS.$model_name.'.php')) {
            
            require PATH.DS.'application/models'.DS.$model_name.'.php';
            
            $model = new $model_name;
            
            return $model;
        }
        
    }
    
    public function view ($view_name,$data = array()) {
        
        if(file_exists(PATH.DS.'application/views'.DS.$view_name.'.php')) {
            
            extract($data);
            
            require PATH.DS.'application/views'.DS.$view_name.'.php';

            return true;
        
        }else{
            return false;
        }
        
        
    }
}
