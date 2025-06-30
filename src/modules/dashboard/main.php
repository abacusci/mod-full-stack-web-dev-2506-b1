<?php

// get the total of users
$result = query("SELECT count(*) as total FROM users;");

$total_users = $result[0]['total'];

include __DIR__ . "/views/main_view.php";
