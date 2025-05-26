<?php
session_start();
include "../core/functions.php";
include "../core/validation.php";
$errors=[];

if(checkRequestMethod("POST") && checkMethodInput("name"))
{
    foreach($_POST as $key => $value){
        $$key = filterInput($value);
    }
    

    // Name Validation
    if(!required($name)){
        $errors[]= "Name is required";
    }elseif(!minimumVal($name,3)){
        $errors[]= "Minimum Value for the name input is 3";
    }elseif(!maximumVal($name,20)){
        $errors[]= "Sorry Maximum Value must be smaller than 20 chars";
    }
    
    // Email Validation

    if(!required($email)){
        $errors[]= "Email is required";
    }elseif(!emailVal($email)){
        $errors[]= "Enter a vaild email ";
    }


    // Password Validation

    if(!required($password)){
        $errors[]= "Password is required";
    }elseif(!minimumVal($password,6)){
        $errors[]= "Minimum  Password is 6";
    }elseif(!maximumVal($password,20)){
        $errors[]= "Sorry Maximum Value must be smaller than 20 chars";
    }


    if(empty($errors)){
        $userData = fopen("../data/Users.csv","a+");
        $data = [$name,$email,sha1($password)];
        fputcsv($userData,$data);
        $_SESSION['auth'] = [$name,$email];
        redirect("../index.php");
        die;

    }else{
        $_SESSION['errors'] = $errors;
        redirect("../register.php");
        die;
    }


}else{
    echo "Server error!";
}