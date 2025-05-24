<?php

include "../core/functions.php";

if(checkRequestMethod("POST") && checkMethodInput("name")){
    echo "eshta";

}else{
    echo "msh eshta";
}