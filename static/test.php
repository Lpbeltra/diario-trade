<?php
session_start();
include 'connect.php';

$id = $_SESSION['id'];
$sql = "SELECT SUM(pontos) AS pontos FROM `operacoes` WHERE `owner_id` = 16";
$consulta = mysqli_query($connect,$sql);
$result = mysqli_fetch_array($consulta);
echo $result['pontos'];

?>
