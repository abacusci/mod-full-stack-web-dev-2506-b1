<?php

$full_name = $_POST['full_name'];
$gender = $_POST['gender'];
$birth_date = $_POST['birth_date'];

query("INSERT INTO students (full_name, gender, birth_date) 
  VALUES ('$full_name', '$gender', '$birth_date');");

header("Location: ?q=students/main");
