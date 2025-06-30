<?php

if ($q == 'login/submit') {
    $school_name = $_POST['school_name'];
    $user_name = $_POST['user_name'];
    $password  = $_POST['password'];

    $sql = "SELECT username FROM users WHERE school = '$school_name' AND username = '$user_name' AND pass = '$password';";
    $result = query($sql);

    if (empty($result)) {
        echo "Access denied";
    } else {
        $_SESSION['username'] = $user_name;
        echo "Login!";
        $show = false;
    }
}

if ($show == true){
    $page = "../src/modules/login/view/login_form.php";
    include "../src/modules/core/views/layout.php";
}