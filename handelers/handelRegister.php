<?php

include "../core/functions.php";

if(checkRequestMethod("POST") && checkMethodInput("name")){
    $name = filterInput($_POST['name']);
    $email = filterInput($_POST['email']);
    $password = filterInput($_POST['password']);


}else{
    echo "Server error!";
}