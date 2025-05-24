<?php

include "../core/functions.php";

if(checkRequestMethod("POST") && checkMethodInput("name")){
    foreach($_POST as $key => $value){
        $$key = filterInput($value);
    }
    

}else{
    echo "Server error!";
}