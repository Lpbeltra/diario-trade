<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style.css'/>
    <title>Document</title>
</head>
<body>
    <div id='insertTrade' style="display: inline-block">
        <form class="form" method="post" action="./database.php">

            <label for="ativo">Ativo</label>
            <select class="form-select d-inline" name="ativo" id="ativo" style="width: 5%; margin-right: 0,5%;">   
                <option value="DOL">DOL</option>
                <option value="WIN">WIN</option>
            </select> 

            <label for="dataTrade">Data</label> 
            <input id='dataTrade' required class='inputs' type="date" style="margin-right: 0,5%;">

            <label for="horaTrade">Hora</label> 
            <input id='horaTrade' required class='inputs' type="time" style="margin-right: 0,5%;">

            <label for="pontaTrade">Ponta</label>
            <select class="form-select d-inline" name="pontaTrade" id="pontaTrade" style="width: 8%; margin-right: 0,5%;">
                <option value="compradora">Compradora</option>
                <option value="vendedora">Vendedora</option>
            </select> 

            <label for="resultadoTrade">Resultado</label>
            <select class="form-select d-inline" name="resultadoTrade" id="resultadoTrade" style="width: 8%; margin-right: 0,5%;">
                <option value="gain">Gain</option>
                <option value="Loss">Loss</option>
            </select> 

            <label for="pontosTrade">Pontos</label> 
            <input id='pontosTrade' required class='inputs' type="number" style="width: 5%; margin-right: 0,5%;">

            <label for="valorTrade">Resultado valor</label> 
            <input type="number" step="0.00,5" name="valorTrade" min="0.00,5" style="width: 5%; margin-right: 0,5%;">

            <label for="padraoOp">Padrão</label>
            <select class="form-select d-inline" name="padraoOp" id="pontaTrade" style="width: 15%; margin-right: 0,5%;">
                <option value="Regressão às médias">Regressão às médias</option>
                <option value="Realinhamento de médias">Realinhamento de médias</option>
                <option value="Bandeiras e flâmulas">Bandeiras e flâmulas</option>
                <option value="Correção até retração">Correção até retração</option>
                <option value="Rompimento">Rompimento</option>
                <option value="Pullbacks">Pullbacks</option>
                <option value="Power breakout">Power breakout</option>
                <option value="Rejeiçao em Sup/Res">Rejeiçao em Sup/Res</option>
                <option value="Desrespeitando padrão operacional">Desrespeitando padrão operacional</option>
            </select> 

            <p></p>

            <label for="comentarioTrade"> Comentário sobre a operação: </label>
            <textarea id="comentarioTrade" placeholder="Escreva aqui..." style="width: 500px; height: 100px; margin-left: 5px; position: absolute;" rows="5" cols="100" wrap="soft"></textarea>
        </form>
    </div>

    <script src='script.js'></script>
</body>
</html>

<?php
require_once "database.php";

$instance = new Database();
$connection = $instance->connect();

$result = mysqli_query($connection, "SELECT * FROM operacoes");

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row['operacoes_id']."</td>\n";
    echo "<td>".$row['data']."</td>\n";
    echo "<td>".$row['hora']."</td>\n";
    echo "</tr>";
}
?>