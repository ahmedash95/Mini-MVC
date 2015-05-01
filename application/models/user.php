<?php

class User extends MainModel {
    
    private $id;
    private $username;
    private $password;
    private $permission;
    private $email;
    
    public function login ($username,$password) {
        
        $this->username = $this->escape($username);
        $this->password = $this->escape($password);
        
        if(empty($this->loginRequired($this->username,$this->password))) {
            
            $data = array(
              'username' => $this->username,
              'password' => hashed($this->password)
            );
            
            $user = $this->basicSelect($data);
            
            if($user) {
                return true;
            }else {
                return false;
            }
        }
    }
    
    public function loginRequired ($username,$password) {
        
        if(empty($username) || empty($password)) {
            $error = "Username or Password can't be blank";
        }
        
        return isset($error) ? $error : null;
    }
    
    public function insert_user ($username,$password,$email,$permission='user') {
        
        $data = array(
            'username'      =>$this->escape($username),
            'password'      =>$this->escape(hashed($password)),
            'email'        =>$this->escape($email),
            'permission'    =>$permission
        );
        
        $this->insert($data);
    }
    
    public function updateUser ($username,$password,$email,$permission,$id) {
        
        $data = array(
            'username'      =>$this->escape($username),
            'password'      =>$this->escape(hashed($password)),
            'email'         =>$this->escape($email),
            'permission'    =>$this->escape($permission)
        );
        
        $where = array(
            'id' => $id
        );
        
        $this->basicUpdate($data,$where);
    }
    
    public function deleteUser ($id) {
        
        $id = (int) $id;
        $this->prepare("DELETE FROM user WHERE id=:id");
        $this->bindParam(":id",$id);
        $this->execute();
        
    }
    
}
