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
    <title>Painel</title>
    <?php include 'style.php'; include 'functions.php';?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3a5db8322b.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.0/chart.min.js" integrity="sha512-qKyIokLnyh6oSnWsc5h21uwMAQtljqMZZT17CIMXuCQNIfFSFF4tJdMOaJHL9fQdJUANid6OB6DRR0zdHrbWAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body id="body">
    <header></header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid" style="height: 25px">
            <div style="text-align:center" class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" style="padding-left:0px; padding-right:0px; width:120px; padding-top:12px" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addtrade.php" style="padding-left:0px; padding-right:0px; width:160px; padding-top:12px">Inserir nova operação</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active" href="operationspanel.php" style=" width:160px; padding-top:12px">Painel de operações</a>
                </li>
                <li class="nav-item" style="margin-left: 750px">
                    <a class="nav-link" href="logout.php" style=" width:160px; padding-top:12px; font-weight: bold">Logout</a>
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
                <tr style="text-align:center">
                <th scope="col">Ativo</th>
                <th scope="col">Data</th>
                <th scope="col">Ponta</th>
                <th scope="col">Resultado</th>
                <th scope="col">Pontos</th>
                <th scope="col">Resultado R$</th>
                <th scope="col">Padrão</th>
                <!-- <th scope="col">Comentário</th> -->
                </tr>
            </thead>

            <tr>
                <?php
                include 'connect.php';
                $ownerId = $_SESSION['id'];
                $sql = "SELECT * FROM `operacoes` WHERE `owner_id` = $ownerId";
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
                    /* $comentario = $array['comentario']; */
                ?>

                <tr style="text-align:center">
                <td><?php echo $ativo ?></td>
                <td><?php echo $data ?></td>
                <td><?php echo $ponta ?></td>
                <td><?php echo $resultado ?></td>
                <td><?php echo $pontos ?></td>
                <td><?php echo $resultadoValor ?></td>
                <td><?php echo $padrao ?></td>
                <!-- <td><?php echo $comentario ?></td> -->
                <td>
                    <a class="btn btn-warning btn-sm" id="editButton" style='color:#fff;' href="edittrade.php?id=<?php echo $id ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
                    <a class="btn btn-danger btn-sm" id="deleteButton" style='color:#fff;' onclick="verifyDelete(<?php echo $id?>)"   role="button"><i class="fa-solid fa-trash"></i>&nbsp;Excluir</a>
                </td>
                </tr>
                <?php } ?>
            </tr>
        </table>
    </div>
    <script>
        function verifyDelete(opid) {
        Swal.fire({
        title: 'Tem certeza?!',
        text: "Essa ação é irreversivel",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, delete'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location = 'deletetrade.php?id='+opid;
        } else {
            return false
        }
        })
    }
    </script>
</body>
</html>