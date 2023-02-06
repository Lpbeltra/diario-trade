<?php
session_start();
include 'connect.php';

$id = 16;//$_SESSION['id'];
$sql = "SELECT `pontos` FROM `operacoes` WHERE `owner_id` = '16'";
$result = mysqli_query($connect,$sql);
$pontos = mysqli_fetch_array($result);

echo $pontos['pontos'];
var_dump($pontos);

?>
