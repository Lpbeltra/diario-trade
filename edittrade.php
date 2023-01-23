<?php
include 'connect.php';
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style.css'/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
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
                <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown link
                </a>
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
    <div class='container' id='container' style='margin-top: 20px;'>
        <h4>Inserir nova operação</h4>
        <form style="margin-top: 35px" action="updatetrade.php" method="post">
        <?php
            $sql = "SELECT * FROM `operacoes` WHERE id = $id";
            $search = mysqli_query($connect,$sql);

            while ($array = mysqli_fetch_array($search)) {
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

            <input tybe="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Ativo</label>
                <select class="form-select" name ="ativo" id="inputGroupSelect01" value="<?php echo $ativo ?>" >
                    <option value="WDO">Mini - dolar</option>
                    <option value="WIN">Mini - indice</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Data</span>
                <input type="datetime-local" name="data" value="<?php echo $data ?>" class="form-control" aria-label="date" aria-describedby="addon-wrapping">
                </div>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Ponta</label>
                <select class="form-select" name="ponta" value="<?php echo $ponta ?>" id="inputGroupSelect01">
                    <option value="Compradora">Compradora</option>
                    <option value="Vendedora">Vendedora</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Resultado</label>
                <select class="form-select" name="resultado" value="<?php echo $resultado ?>" id="inputGroupSelect01">
                    <option value="Gain">Gain</option>
                    <option value="loss">Loss</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Pontos</label>
                <input type="number" name="pontos" value="<?php echo $pontos ?>" class="form-control" placeholder="Se loss, insira negativo..." aria-label="Number" aria-describedby="addon-wrapping">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Resultado</span>
                <input type="number" name="resultadoValor" value="<?php echo $resultadoValor ?>" step="0.01" min="0.01" placeholder="Se loss, insira negativo..." class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">$</span>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Padrão</label>
                <select class="form-select" name="padrao" value="<?php echo $padrao ?>" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="Regressão às médias">Regressão às médias</option>
                    <option value="Realinhamento de médias">Realinhamento de médias</option>
                    <option value="Bandeiras e flâmulas">Bandeiras e flâmulas</option>
                    <option value="Correção até retração">Correção até retração</option>
                    <option value="Rompimento">Rompimento</option>
                    <option value="Pullbacks">Pullbacks</option>
                    <option value="Power breakout">Power breakout</option>
                    <option value="Rejeiçao em Sup/Res">Rejeiçao em Sup/Res</option>
                    <option value="Desrespeitando padrão operacional">Desrespeitando padrão operacional</option>
                    <option value="Outro">Outro</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" >Comentário</span>
                <textarea class="form-control" name="comentario" aria-label="With textarea"><?php echo $comentario ?></textarea>
            </div>

            <div style="text-align:right">
                <button class="btn btn-primary" type="submit" style="margin-top: 10px">Enviar alterações</button>
            </div>

        <?php } ?>

        </form>
    </div>

    <script src='script.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

