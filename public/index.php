<?php

session_start();

include "../src/modules/core/model/database.php";

// https://localhost/?q=dashboard
// https://localhost/?q=dashboard/main
// https://localhost/?q=students/main

$q = $_GET['q'] ?? null;

$show = true;

if ($q == 'logout') {
    unset($_SESSION['username']);
    $show=true;
}

// is logged?
if (isset($_SESSION['username']))
{
    $show = false;
    
    if (empty($q)) 
    {
        $q = "dashboard";
    }

    if (stripos($q, '/') === false)
    {
        $q = $q . '/main';
    }

    $filename = "../src/modules/$q.php";

    if (file_exists($filename))
    {
        $page = $filename;
        include "../src/modules/core/views/layout.php";
    } 
    else
    {
        echo "page not found";
    }
    
} 
else 
{
    include "../src/modules/login/control/login.php";
}


