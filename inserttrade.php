<?php
include 'connect.php';
include 'style.php'; 
include 'functions.php';
session_start();

if (!$_SESSION['username']) {
    header('Location: index.php');
} 

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

<header></header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid" style="height: 25px">
            <div style="text-align:center" class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" style="padding-left:0px; padding-right:0px; width:120px; padding-top:12px" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addtrade.php" style="padding-left:0px; padding-right:0px; width:160px; padding-top:12px">Inserir nova operação</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="operationspanel.php" style=" width:160px; padding-top:12px">Painel de operações</a>
                </li>
                <li class="nav-item" style="margin-left: 750px">
                    <a class="nav-link" href="logout.php" style=" width:160px; padding-top:12px; font-weight: bold">Logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
<div class="container" style="width: 500px; padding-top: 50px">
    <h4 style="text-align: center"> Operação adicionada com sucesso!</h4>
    <div style="padding-top: 20px; text-align: center">
        <a href="addtrade.php" role="button" class="btn btn-primary">Inserir nova operação</a>
        <a href="dashboard.php" role="button" class="btn btn-primary">ir para o Dashboard</a>
    </div>
</div>