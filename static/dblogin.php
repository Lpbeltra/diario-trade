<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3a5db8322b.js" crossorigin="anonymous"></script>

<?php
session_start();
include 'connect.php';
include 'password.php';
$usermail = $_POST['email'];
$undecrypted = $_POST['password'];
$password = sha1($undecrypted);

if(!$usermail || !$undecrypted)
{

    $_SESSION['id'] = "dataempty";
    header('Location: pages-sign-in.php');
    exit;
    /* ?> 
    <div class="container" style="text-align:center; width: 280px; margin-top: 200px; border: 2px solid #f3f3f3; border-radius: 15px; -webkit-box-shadow: 10px 10px 9px 0px rgba(199,189,199,1); -moz-box-shadow: 10px 10px 9px 0px rgba(199,189,199,1); box-shadow: 10px 10px 9px 0px rgba(199,189,199,1);">
        <h4>Digite seu login e senha!</h4> 
        <a href="index.php">Voltar</a>
        </div>
    <?php
	exit; */
}

$sql = "SELECT `sobrenome`, `nomeusuario`, `mail`, `passwd`, `id` FROM `usuarios` WHERE `mail` = '$usermail'";
$search = mysqli_query($connect,$sql) or die("Erro no banco de dados!");
$total = mysqli_num_rows($search);
$dados = mysqli_fetch_array($search);

if($total)
{
    $passdb = $dados["passwd"];
    //$username = $dados["userlogin"];
    $id = $dados["id"];
    $nomeusuario = $dados["nomeusuario"];
    $snomeusuario = $dados["sobrenome"];

	if($password == $passdb) {
		$_SESSION['username'] = $usuario;
		$_SESSION['id'] = $id;
        $_SESSION['nome'] = $nomeusuario;
        $_SESSION['snome'] = $snomeusuario;
		header('Location: index.php?pagina');
	} 
    
} else {
    $_SESSION['id'] = "notfound";
    header('Location: pages-sign-in.php');
}
?>