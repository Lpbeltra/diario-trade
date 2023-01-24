<?php

include 'connect.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['mail']
$passwd = $_POST['passwd1']

$sql = "INSERT INTO `users` (nomeusuario,mail,passwd) VALUES ('$nomeusuario','$mail',sha1('$passwd')";
$insert = mysqli_query($connect,$sql);



?>