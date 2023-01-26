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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3a5db8322b.js" crossorigin="anonymous"></script>
    <script src="script.js" rel="script"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="font-style:italic; padding-bottom: 15px">Trade Diary</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" style="padding-top:40px" href="dashboard.php">Dashboard</a>
            </li>
            <a class="nav-link" href="addtrade.php" style="width:200px; padding-top:40px">Inserir nova operação</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php" style="margin-left: 850px; font-weight:bold;padding-top:40px">Logout</a>
            </li>
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
    <div class="container" style="margin-top: 40px;">
        <h3>Dashboard</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Ativo</th>
                <th scope="col">Data</th>
                <th scope="col">Ponta</th>
                <th scope="col">Resultado</th>
                <th scope="col">Pontos</th>
                <th scope="col">Resultado R$</th>
                <th scope="col">Padrão</th>
                <th scope="col">Comentário</th>
                </tr>
            </thead>

            <tr>
                <?php
                include 'connect.php';
                $sql = "SELECT * FROM `operacoes`";
                $busca = mysqli_query($connect,$sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id = $array['id'];
                    $ativo = $array['ativo'];
                    $data = $array['data_trade'];
                    $ponta = $array['ponta'];
                    $resultado = $array['resultado'];
                    $pontos = $array['pontos'];
                    $resultadoValor = $array['resultado_valor'];
                    $padrao = $array['padrao'];
                    $comentario = $array['comentario'];
                ?>

                <tr>
                <td><?php echo $ativo ?></td>
                <td><?php echo $data ?></td>
                <td><?php echo $ponta ?></td>
                <td><?php echo $resultado ?></td>
                <td><?php echo $pontos ?></td>
                <td><?php echo $resultadoValor ?></td>
                <td><?php echo $padrao ?></td>
                <td><?php echo $comentario ?></td>
                <td>
                    <a class="btn btn-warning btn-sm" id="editButton" style='color:#fff;' href="edittrade.php?id=<?php echo $id ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>

                    <a class="btn btn-danger btn-sm" id="editButton" style='color:#fff;' href="deletetrade.php?id=<?php echo $id ?>" role="button"><i class="fa-solid fa-trash"></i>&nbsp;Excluir</a>
            
                </td>
                </tr>

                <?php } ?>
            </tr>
        </table>
    </div>
</body>
</html>