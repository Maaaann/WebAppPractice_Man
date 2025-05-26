<?php

include "core/functions.php";

session_start();

redirect("login.php");
session_destroy();
die;