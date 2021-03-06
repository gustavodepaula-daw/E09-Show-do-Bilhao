<?php
	ob_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Dá Bilhão?</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<link rel="stylesheet" href="css/main.css">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<?php include 'menu.inc'; ?>
	<?php
		session_start();
		if (!isset($_SESSION["username"])) {
			header("Location: not-loged.php");
			exit;				
		}
	?>
	<main>
		<div class="container">
			<?php
				$cookie = explode("+", $_COOKIE[$_SESSION["username"]]);
				echo '
					<p class="flow-text">Olá <b>'. ($_SESSION["username"]).'</b>, seu último jogo foi no dia <b>'.$cookie[0].'</b>, onde você fez <b>'.$cookie[1].'</b>  pontos</p>

				';
			?>
			<p class="flow-text">Você está logado</p>
			<a href="logout.php" class="btn">Logout</a>
		</div>
	</main>


	<?php include 'rodape.inc';	?>

	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script>
		$(document).ready(function() {
    		$('select').material_select();
		});
	</script>
</body>
</html>