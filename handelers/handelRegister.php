<?php

include "../core/functions.php";
include "../core/validation.php";

if(checkRequestMethod("POST") && checkMethodInput("name")){
    foreach($_POST as $key => $value){
        $$key = filterInput($value);
    }
    

    // Name Validation
    if(!required($name)){
        echo"Name is required";
    }elseif(!minimumVal($name,3)){
        echo "Minimum Value for the name input is 3";
    }elseif(!maximumVal($name,20)){
        echo "Sorry Maximum Value mus be smaller than 20 chars";
    }
        



}else{
    echo "Server error!";
}