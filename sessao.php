	<?php
		
		include('/basedados/index.php');
		error_reporting(0); // N�o mostra  avisos.
		session_start();
		echo "<p>Bem vindo {$_SESSION['username']}!</p>";
		
		
	?>
	<a href=/Logout.php">Logout</a>
