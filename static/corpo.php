

<?php
	include 'connect.php';

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

			default:
				include 'index.php';
				break;
		}
	}
?>



