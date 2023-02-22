<?php
    session_start();
    include 'connect.php';
    $id = $_GET['id'];
    $ownerId = $_SESSION['id'];
    $sql = "DELETE FROM `operacoes` WHERE `owner_id` = $ownerId AND `id` = $id";
    $delete = mysqli_query($connect,$sql);

    if (!$_SESSION['username']) {
        header('Location: pages-sign-in.php');
    }

    header('Location: index.php?pagina=painel');
?>
