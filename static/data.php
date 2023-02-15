<?php
include 'connect.php';
$sqlWdo = "SELECT SUM(pontos) AS pontosDol FROM `operacoes` WHERE `owner_id` = 16 AND `ativo` = 'WDO'";
$sqlWin = "SELECT SUM(pontos) AS pontosWin FROM `operacoes` WHERE `owner_id` = 16 AND `ativo` = 'WIN'";
$sqlMoney = "SELECT SUM(resultado_valor) AS moneyResult FROM `operacoes` WHERE `owner_id` = 16";
$queryWdo = mysqli_query($connect,$sqlWdo);
$queryWin = mysqli_query($connect,$sqlWin);
$queryMoney = mysqli_query($connect,$sqlMoney);
$resultWdo = mysqli_fetch_array($queryWdo);
$resultWin = mysqli_fetch_array($queryWin);
$resultMoney = mysqli_fetch_array($queryMoney);
?>
<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong> Dashboard </strong> Analítico </h1>
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
                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                            <span class="text-muted">Since last week</span>
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
                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
                            <span class="text-muted">Since last week</span>
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
                        <h1 class="mt-1 mb-3"><?php echo $resultMoney['moneyResult'] ?></h1>
                        <div class="mb-0">
                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
                            <span class="text-muted">Since last week</span>
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
                        <h1 class="mt-1 mb-3">64</h1>
                        <div class="mb-0">
                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
                            <span class="text-muted">Since last week</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>