<?php

include "../core/functions.php";

if(checkRequestMethod("POST") && checkMethodInput("name")){
    echo "done";
}else{
    echo "Server error!"
}