<?php
include 'connect.php';
session_start();

$owner_id = $_SESSION['id'];
$ativo = $_POST['ativo'];
$data = $_POST['data'];
$ponta = $_POST['ponta'];
$resultado = $_POST['resultado'];
$pontos = $_POST['pontos'];
$resultadoValor = $_POST['resultadoValor'];
$padrao = $_POST['padrao'];
$comentario = $_POST['comentario'];
$sql = "INSERT INTO `operacoes`(`owner_id`, `ativo`, `data_trade`, `ponta`, `resultado`, `pontos`, `resultado_valor`, `padrao`, `comentario`) VALUES ('$owner_id','$ativo', '$data','$ponta','$resultado', '$pontos', '$resultadoValor','$padrao','$comentario')";
$inserir = mysqli_query($connect,$sql);
?>

<link rel='stylesheet' href='style.css'/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<header>
    <div class="container" style="width: 500px; padding-top: 50px">
        <h4 style="text-align: center"> Operação adicionada com sucesso!</h4>
        <div style="padding-top: 20px; text-align: center">
            <a href="index.php?pagina=inserirop" role="button" class="btn btn-primary">Inserir nova operação</a>
            <a href="index.php?pagina=dash" role="button" class="btn btn-primary">ir para o Dashboard</a>
        </div>
    </div>
    </header>