<?php

$connection = mysqli_connect('localhost', 'root', '', 'test_db');
if($connection == false){
  echo 'Не удалось подключиться к базе данных!<br>';
  echo mysqli_connect_error();
  exit();
}

$login = $_POST['login'];
$password = $_POST['psswrd'];

$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($count) == 0 ){
  echo 'You are not registered!!!';
}
else{
  echo 'Hello, ' . $login . '!<br>Your password: ' . $password;
}
?>
