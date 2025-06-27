<?php

session_start();
include "../src/modules/core/model/database.php";
query("SELECT 1;");

$q = $_GET['q'] ?? null;

$show = true;

if ($q == 'login/submit') {
    $school_name = $_POST['school_name'];
    $user_name = $_POST['user_name'];
    $password  = $_POST['password'];
    
    if ($password == "123") {
        echo "Login!";
       
        $show = false;

    } else {
    
        echo "Access denied";

       
    }

}


if ($show == true){
    include "../src/modules/login/view/login_form.php";
}

