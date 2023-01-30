<?php
session_start();

if (!$_SESSION['username']) {
    header('Location: index.php');
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trading Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <?php include 'style.php'; include 'functions.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3a5db8322b.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.0/chart.min.js" integrity="sha512-qKyIokLnyh6oSnWsc5h21uwMAQtljqMZZT17CIMXuCQNIfFSFF4tJdMOaJHL9fQdJUANid6OB6DRR0zdHrbWAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

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
    
    <div style="width: 900px">
        <canvas id="line-chart"></canvas>
    </div>

    <script type="module" src="https://cdn.jsdelivr.net/npm/chart.js"></script>



    <script type="module">
        
    </script>



</body>
</html>