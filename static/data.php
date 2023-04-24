<?php
include 'connect.php';
$id = $_SESSION['id'];
    //SQL FILTRO
if (isset($_POST['data1'])){
    $data1 = $_POST['data1'];
    $data2 = $_POST['data2'];
};

if (isset($data1)) {
    $sqlWdo = "SELECT SUM(pontos) AS pontosDol FROM `operacoes` WHERE `owner_id` = $id AND `ativo` = 'WDO' AND `data_trade` BETWEEN '$data1' AND '$data2'";
    $sqlWin = "SELECT SUM(pontos) AS pontosWin FROM `operacoes` WHERE `owner_id` = $id AND `ativo` = 'WIN' AND `data_trade` BETWEEN '$data1' AND '$data2'";
    $sqlMoney = "SELECT SUM(resultado_valor) AS moneyResult FROM `operacoes` WHERE `owner_id` = $id AND `data_trade` BETWEEN '$data1' AND '$data2'";						
} else {
    $sqlWdo = "SELECT SUM(pontos) AS pontosDol FROM `operacoes` WHERE `owner_id` = $id AND `ativo` = 'WDO'";
    $sqlWin = "SELECT SUM(pontos) AS pontosWin FROM `operacoes` WHERE `owner_id` = $id AND `ativo` = 'WIN'";
    $sqlMoney = "SELECT SUM(resultado_valor) AS moneyResult FROM `operacoes` WHERE `owner_id` = $id";				
};

$queryWdo = mysqli_query($connect,$sqlWdo);
$queryWin = mysqli_query($connect,$sqlWin);
$queryMoney = mysqli_query($connect,$sqlMoney);
$resultWdo = mysqli_fetch_array($queryWdo);
$resultWin = mysqli_fetch_array($queryWin);
$resultMoney = mysqli_fetch_array($queryMoney);
$noEntries = '';

if ($resultWdo['pontosDol'] == 0) {
    $resultWdo['pontosDol'] = '-';
};

if ($resultWin['pontosWin'] == 0) {
    $resultWin['pontosWin'] = '-';
};

if ($resultMoney['moneyResult'] == 0) {
    $resultMoneyRound = '-';
} else {
    $resultMoneyRound = round($resultMoney['moneyResult'],2);
};

if ($resultWdo['pontosDol'] == '-' and $resultWin['pontosWin'] == '-' and $resultMoney['moneyResult'] == '-') {
    $noEntries = 'Insira suas primeiras operações no menu ao lado!';
};

?>
<main class="content">
<script src="js/app.js"></script>
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong> Dashboard </strong> Analítico </h1>
        <!-- FORM DE FILTRO -->
        <form action="index.php?pagina=dash" method="post" display="block" style="margin-left: auto; width: 400px">
            <div style="width: 400px">
                <input type="date" name="data1">
                -
                <input type="date" name="data2">
                <button class="btn btn-sm btn-primary" type="submit" name="filtrar">Filtrar</button>
                <button class="btn btn-sm btn-secondary"  type="submit" name="filtrar">Reset</button>
            </div>
        </form>
		<h5 style='text-align:right; font-style:italic'><?php echo $noEntries ?></h5>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Pontos DOL/mês</h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3"><?php echo $resultWdo['pontosDol'];?></h1>
                        <div class="mb-0">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Pontos WIN/mês</h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="bar-chart"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3"><?php echo $resultWin['pontosWin']; ?></h1>
                        <div class="mb-0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">R$ acumulado/mês</h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3"><?php echo $resultMoneyRound ?></h1>
                        <div class="mb-0">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Total de operações/mês</h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="zap"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">-</h1>
                        <div class="mb-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>