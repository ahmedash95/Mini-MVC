<?php

class logout {
    
    public function __construct () {
        session_destroy();
        header("location: ".URL."login");
    }
}