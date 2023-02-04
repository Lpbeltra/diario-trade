<?php
include 'connect.php';
include 'password.php';


$nomeusuario = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$mail = $_POST['email'];
$passwd = $_POST['password'];
$status = 'Ativo';
$sql = "INSERT INTO `usuarios`(`nomeusuario`, `sobrenome`, `mail`, `passwd`, `status`) VALUES ('$nomeusuario','$sobrenome','$mail', sha1('$passwd'), '$status')";
$insert = mysqli_query($connect,$sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<div class="container" style="width: 400px">
    <center>
        <h3>Usuário cadastrado!</h3>
        <div style="margin-top: 10px">
            <a href="index.php" class="btn btn-sm btn-warning" Style="color:#fff">Ir para o dashboard</a>
            <a href="pages-sign-up.php" class="btn btn-sm btn-warning" Style="color:#fff">Voltar para tela de cadastro</a>
        </div>
    </center>
</div>