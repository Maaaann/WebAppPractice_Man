<?php

function checkRequestMethod($method){
    if($_SERVER["REQUEST_METHOD"] == $method){
        return true;
    }
    return false;
}


function checkMethodInput($input){
    if(isset($_POST[$input])){
        return true;
    }
    return false;
}