<?php

class App {
    
    public $controller;
    public $params;
    
    public function __construct () {
        
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = escape(rtrim($url,'/'));
        $urls = explode('/',escape($url));
    
        
        if(!empty($urls[0])) {
            
            if(file_exists(PATH.DS.'application/controllers'.DS.$urls[0].'.php')) {
                
                require PATH.DS.'application/controllers'.DS.$urls[0].'.php';
                $this->controller = new $urls[0];
                
                if(isset($urls[1])) {
                    
                    if(method_exists($this->controller,$urls[1])) {
                        
                        if(count($urls) == 2) {
                            call_user_func(array($this->controller,$urls[1]));
                        }else{
                            call_user_func_array(array($this->controller,$urls[1]),$this->filter_params($urls));
                        }
                        
                    }else{
                        echo "the method dosn't exists <br>";
                    }
                    
                }
                
            }else {
                echo "the file dosn't exists";
            }
            
        }else{
            require PATH.DS.'application/controllers'.DS.'home.php';
            $this->controller = new home ();
        }
        
    }
    
    public function filter_params ($urls) {
        
        foreach($urls as $key=>$value) {
            if($key == 0 || $key == 1) {
                continue;
            }else{
                $this->params[] = escape($value);
            }
        }
        
        return $this->params;
        
    }
}