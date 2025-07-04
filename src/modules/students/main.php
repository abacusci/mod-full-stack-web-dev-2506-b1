<?php

$data  = query("SELECT * FROM students;");

include __DIR__ . "/views/students.php";
