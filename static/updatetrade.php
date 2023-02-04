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

<body id="body">
    <div class="container" style="width: 400px">
        <center>
            <h3>Atualizado com sucesso</h3>
            <div style="margin-top: 10px">
                <a href="panel.php" class="btn btn-sm btn-warning" Style="color:#fff">Voltar</a>
            </div>
        </center>
    </div>
</body>