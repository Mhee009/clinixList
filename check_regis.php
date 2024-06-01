<?php

include 'config.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$password = $_POST['password'];
$submit = $_POST['submit'];

setcookie("name", $name, time() + (86400 * 30), "/"); // 86400 = 1 day

if(!isset($submit)){
  header("location: register_form.php");
}

if(empty($name)){
  header("location: register_form.php?error=1");
  exit;
}


if(empty($surname)){
  header("location: register_form.php?error=2");
  exit;
}


if(empty($password)){
  header("location: register_form.php?error=3");
  exit;
  
}




?>
