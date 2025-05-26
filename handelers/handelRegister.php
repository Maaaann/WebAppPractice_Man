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
        $errors[]= "Sorry Maximum Value mus be smaller than 20 chars";
    }
    
    if(empty($errors)){
        echo "DONE!";
    }else{
        $_SESSION['errors'] = $errors;
        header("location:../register.php");
        die;
    }


}else{
    echo "Server error!";
}