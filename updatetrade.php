<?php
session_start();

if (!$_SESSION['username']) {
    header('Location: index.php');
} 
include 'style.php'; 
include 'functions.php';
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

<body id="body">
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
    <div class="container" style="width: 400px">
        <center>
            <h3>Atualizado com sucesso</h3>
            <div style="margin-top: 10px">
                <a href="operationspanel.php" class="btn btn-sm btn-warning" Style="color:#fff">Voltar</a>
            </div>
        </center>
    </div>
</body>