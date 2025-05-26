<?php

function required($input){
    if(empty($input)){
        return false;
    }
    return true;
}


function minimumVal($input,$length){
    if(strlen($input) < $length){
        return false;
    }
    return true;
}


function maximumVal($input,$length){
    if(strlen($input) > $length){
        return false;
    }
    return true;
}