<?php
include 'connect.php';
include 'password.php';
$usuario = $_POST['username'];
$passwd = $_POST['userpasswd'];
$sql = "SELECT `mail`, `passwd` FROM `usuarios` WHERE `mail` = '$usuario'";
$search = mysqli_query($connect,$sql);
$total = mysqli_num_rows($search);

while ($array = mysqli_fetch_array($search)) {
    $userPasswd = $array['passwd'];
    $decryptedPasswd = sha1($passwd);

    if ($total > 0) {
        if($decryptedPasswd == $userPasswd){
            header('Location: dashboard.php');
        } else {
            header('Location: error.php');
        }

    } else {
        header('Location: error.php');
    }
}
?>