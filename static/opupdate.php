<?php
session_start();
include 'connect.php';

if (!$_SESSION['username']) {
    header('Location: index.php');
} 

$id = $_SESSION['idop'];
$ativo = $_POST['ativo'];
$data = $_POST['data'];
$ponta = $_POST['ponta'];
$resultado = $_POST['resultado'];
$pontos = $_POST['pontos'];
$resultadoValor = $_POST['resultadoValor'];
$padrao = $_POST['padrao'];
$comentario = $_POST['comentario'];
$sql = "UPDATE `operacoes` SET `ativo`='$ativo',`data_trade`='$data',`ponta`='$ponta',`resultado`='$resultado',`pontos`='$pontos',`resultado_valor`='$resultadoValor',`padrao`='$padrao',`comentario`='$comentario' WHERE id = $id";
$update = mysqli_query($connect,$sql);

header('Location: index.php?pagina=dash');
?>