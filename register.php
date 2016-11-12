<?php
$connect = mysqli_connect('localhost','root','','webar');
//인코딩 설정
mysql_set_charset($connect, 'utf8');

var_dump($_POST);
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$gender = $_POST['gender'];

//$query = 'INSERT INTO `Members` (email, password, name, gender) VALUES (" . $email . ",". $password . "," . $name . ", " . $gender . " )';
//$query = mysqli_query($connect, $query);
$query = sprintf("INSERT INTO 'Members' (email, password, name, gender) VALUES ('%s', '%s', '%s', '%s')",$email, $password, $name, $gender);
$query = mysqli_query($connect, $query);
?>