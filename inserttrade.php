<?php
include 'connect.php';

$ativo = $_POST['ativo'];
$data = $_POST['data'];
$ponta = $_POST['ponta'];
$resultado = $_POST['resultado'];
$pontos = $_POST['pontos'];
$resultadoValor = $_POST['resultadoValor'];
$padrao = $_POST['padrao'];
$comentario = $_POST['comentario'];
$sql = "INSERT INTO `operacoes`(`ativo`, `data_trade`, `ponta`, `resultado`, `pontos`, `resultado_valor`, `padrao`, `comentario`) VALUES ('$ativo', '$data','$ponta','$resultado', '$pontos', '$resultadoValor','$padrao','$comentario')";
$inserir = mysqli_query($connect,$sql);
?>

<link rel='stylesheet' href='style.css'/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="addtrade.php">Inserir nova operação</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown link
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
</nav>
<div class="container" style="width: 500px; padding-top: 50px">
    <h4 style="text-align: center"> Operação adicionada com sucesso!</h4>
    <div style="padding-top: 20px; text-align: center">
        <a href="index.php" role="button" class="btn btn-primary">Inserir nova operação</a>
        <a href="dashboard.php" role="button" class="btn btn-primary">ir para o Dashboard</a>
    </div>
</div>