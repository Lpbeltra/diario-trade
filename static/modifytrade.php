<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		session_start();
        include 'header.php';
		include 'connect.php';
    ?>
</head>
<body>
	<div class="wrapper">
		<?php include 'menu.php'; ?>
		
		<div class="main">
            <?php 
                include 'topo.php'; 
				$id = $_GET['id'];
				$_SESSION['idop'] = $_GET['id'];
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
				}
            ?>
			<div>
			<div class='container' id='container' style='width:400px'>
				<h4>Editar operação</h4>
				<form style="margin-top: 35px" action="opupdate.php" method="post">
					<div class="input-group mb-3">
						<label class="input-group-text" for="inputGroupSelect01">Ativo</label>
						<select class="form-select" name ="ativo" id="inputGroupSelect01" value="<?php echo $ativo ?>">
							<option value="WDO">Mini - dolar</option>
							<option value="WIN">Mini - indice</option>
						</select>
					</div>

					<div class="input-group mb-3">
						<div class="input-group flex-nowrap">
						<span class="input-group-text" id="addon-wrapping">Data</span>
						<input type="datetime-local" name="data" class="form-control" aria-label="date" aria-describedby="addon-wrapping" value="<?php echo $data?>">
						</div>
					</div>

					<div class="input-group mb-3">
						<label class="input-group-text" for="inputGroupSelect01">Ponta</label>
						<select class="form-select" name="ponta" id="inputGroupSelect01" value="<?php echo $ponta?>">
							<option value="Compradora">Compradora</option>
							<option value="Vendedora">Vendedora</option>
						</select>
					</div>

					<div class="input-group mb-3">
						<label class="input-group-text" for="inputGroupSelect01">Resultado</label>
						<select class="form-select" name="resultado" id="inputGroupSelect01" value="<?php echo $resultado?>">
							<option value="Gain">Gain</option>
							<option value="loss">Loss</option>
						</select>
					</div>

					<div class="input-group mb-3">
						<label class="input-group-text" for="inputGroupSelect01">Pontos</label>
						<input type="number" name="pontos" class="form-control" placeholder="Se loss, insira negativo..." aria-label="Number" aria-describedby="addon-wrapping" value="<?php echo $pontos?>">
					</div>

					<div class="input-group mb-3">
						<span class="input-group-text">Resultado</span>
						<input type="number" name="resultadoValor" step="0.01" min="0.01" placeholder="Se loss, insira negativo..." class="form-control" aria-label="Amount (to the nearest dollar)" value="<?php echo $resultadoValor?>">
						<span class="input-group-text">$</span>
					</div>

					<div class="input-group mb-3">
						<label class="input-group-text" for="inputGroupSelect01">Padrão</label>
						<select class="form-select" name="padrao" id="inputGroupSelect01" value="<?php echo $padrao?>">
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
						<textarea class="form-control" name="comentario" placeholder="Um breve comentário sobre a operação..." aria-label="With textarea" value="<?php echo $comentario?>"></textarea>
					</div>

					<div style="text-align:right">
						<button class="btn btn-submit" type="submit" style="margin-top: 10px">Editar operação</button>
					</div>

				</form>
			</div>
			</div>

			<footer class="footer">
				<?php include 'footer.php' ?>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>