<?php
session_start();
include 'connect.php';

$id = $_SESSION['id'];
$sql = "SELECT * FROM `operacoes`";
$consulta = mysqli_query($connect,$sql);

$ativodb = '';
$pontadb = '';
$pontosdb = '';
$datadb = '';

while ($result = mysqli_fetch_array($consulta)) {
  $ativodb = $ativodb . '"' . $result['ativo'] . '",';
  $pontadb = $pontadb . '"' . $result['ponta'] . '",';
  $pontosdb = $pontosdb . '"' . $result['pontos'] . '",';
  $datadb = $datadb . '"' . $result['data_trade'] . '",';

  $ativo = trim($ativodb);
  $ponta = trim($pontadb);
  $pontos = trim($pontosdb);
  $data = trim($datadb);

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js" integrity="sha512-v3ygConQmvH0QehvQa6gSvTE2VdBZ6wkLOlmK7Mcy2mZ0ZF9saNbbk19QeaoTHdWIEiTlWmrwAL4hS8ElnGFbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.js" integrity="sha512-Cv3WnEz5uGwmTnA48999hgbYV1ImGjsDWyYQakowKw+skDXEYYSU+rlm9tTflyXc8DbbKamcLFF80Cf89f+vOQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

<canvas id='myChart'>

</canvas>



<script type="text/javascript">
    const ctx = document.getElementById('myChart');
    const gLinha = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [<?php echo $data?>],
      datasets: [{
        label: 'pontos',
        data: [<?php echo $pontos ?>],
        backgroungColor: 'transparent',
        borderColor: 'rgba(255,99,132)',
        borderWidth: 3
      }]
    },
    options: { 
        scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoSkip: true, maxTicketsLimit: 20}]}},
        tooltips: {mode: 'index'},
        legend: {display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}
    },
}})

</script>
</body>
</html>