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
    <div class='container' id='container' style='margin-top: 20px;'>
        <h4>Inserir nova operação</h4>
        <form style="margin-top: 35px" action="inserttrade.php" method="post">
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Ativo</label>
                <select class="form-select" name ="ativo" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="WDO">Mini - dolar</option>
                    <option value="WIN">Mini - indice</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Data</span>
                <input type="datetime-local" name="data" class="form-control" aria-label="date" aria-describedby="addon-wrapping">
                </div>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Ponta</label>
                <select class="form-select" name="ponta" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="compradora">Compradora</option>
                    <option value="vendedora">Vendedora</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Resultado</label>
                <select class="form-select" name="resultado" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="Gain">Gain</option>
                    <option value="loss">Loss</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Pontos</label>
                <input type="number" name="pontos" class="form-control" placeholder="Se loss, insira negativo..." aria-label="Number" aria-describedby="addon-wrapping">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Resultado</span>
                <input type="number" name="resultadoValor" step="0.01" min="0.01" placeholder="Se loss, insira negativo..." class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">$</span>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Padrão</label>
                <select class="form-select" name="padrao" id="inputGroupSelect01">
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
                <textarea class="form-control" name="comentario" placeholder="Um breve comentário sobre a operação..." aria-label="With textarea"></textarea>
            </div>

            <div style="text-align:right">
                <button class="btn btn-primary" type="submit" style="margin-top: 10px">Inserir operação</button>
            </div>

        </form>
    </div>

    <script src='script.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

