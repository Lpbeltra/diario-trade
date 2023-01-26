<?php
session_start();

if (!$_SESSION['username']) {
    header('Location: index.php');
} 

include 'connect.php';
$id = $_POST['id'];
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
?>

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
<!--             <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown link
            </a> -->
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
<div class="container" style="width: 400px">
    <center>
        <h3>Atualizado com sucesso</h3>
        <div style="margin-top: 10px">
            <a href="dashboard.php" class="btn btn-sm btn-warning" Style="color:#fff">Voltar</a>
        </div>
    </center>
</div>