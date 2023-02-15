<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		session_start();
		include 'header.php';
		include 'connect.php';
		if (!$_SESSION['id']) {
			header('Location: pages-sign-in.php');
		} 
    ?>
</head>
<body>
	<div class="wrapper">
		<?php include 'menu.php'; ?>

		<div class="main">
            <?php 
                include 'topo.php'; 
            ?>

			<?php 
				if(isset($_GET['pagina'])) {
					switch ($_GET['pagina']) {
						case 'painel':
							include 'panel.php';
							break;

						case 'dashboard':
							include 'data.php';
							break;

						case 'inserirop':
							include 'inserttrade.php';
							break;

						case 'index.php':
							include 'data.php';
							break;

						default:
							include 'data.php';
							break;
					}
				}
 			?>

			<footer class="footer">
				<?php include 'footer.php' ?>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>