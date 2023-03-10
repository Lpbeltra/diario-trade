
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
	//FUNÇÃO DELETE BUTTON
	function verifyDelete(opid) {
		Swal.fire({
		title: 'Tem certeza?',
		text: "Isso é irreversível!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
			if (result.isConfirmed) {
				window.location = 'dbdeletetrade.php?id='+opid
			} else {
				return false
			}
		})
	}
	</script>
	<div class="wrapper">
		<div class="main" >
			<div class="container" style="margin-top: 40px; height: 500px" >
				<!-- FORM DE FILTRO -->
				<form action="" method="post">
					<div style="margin-left: 680px">
						<input type="date" name="data1">
						-
						<input type="date" name="data2">
						<button class="btn btn-sm btn-primary" type="submit" name="filtrar">Filtrar</button>
						<button class="btn btn-sm btn-secondary" type="submit" name="filtrar">Reset</button>
					</div>
				</form>
				<!-- CABEÇALHOS -->
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

						if (isset($_POST['data1'])){
							$data1 = $_POST['data1'];
							$data2 = $_POST['data2'];
						};
						if (isset($data1)) {
							$sql = "SELECT * FROM `operacoes` WHERE `owner_id` = $ownerId AND `data_trade` BETWEEN '$data1' AND '$data2'";						
						} else {
							$sql = "SELECT * FROM `operacoes` WHERE `owner_id` = $ownerId";						

						};

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
						<!-- <td><?php //echo $comentario ?></td> -->
						<td>
							<a class="btn btn-warning btn-sm" id="editButton" style='color:#fff;' href="modifytrade.php?id=<?php echo $id ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
							<a class="btn btn-danger btn-sm" id="deleteButton" style='color:#fff;' onclick="verifyDelete(<?php echo $id?>)" role="button"><i class="fa-solid fa-trash"></i>&nbsp;Excluir</a>
						</td>
						<?php } ?>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<script src="js/app.js"></script>
</body>

