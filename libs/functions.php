<?php

function escape ($value) {
    
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlentities($value);
    
    return $value;
}

function hashed ($password) {
    
    $salt = "ajsdhgiasdg657653762411&^%$&^%76";
    $password = sha1($password.$salt);
    
    return $password;
}