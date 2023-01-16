

<?php
include './database/db.php' ;
include 'menu.php';
include './validarLogin.php';

if ($_POST){ // Se existir um post, entra!


	$username = $_POST['username'];
	$password = md5($_POST['password']);


	$data = [
		'username' => $username,
		'passw' => $password,
	];
	try {
		$sql = "INSERT INTO users (username, passw, user_type) VALUES (:username, :passw,  2)";
		$stmt = $db->prepare($sql);
		print_r($stml);
		$user = $stmt->execute($data);

	} catch (Exception $e) {
		print_r($e);
	}



	if ($user) {
		print_r($user);
		echo "Novo registo adicionado com sucesso!";
	 } else {
		echo "Falhou ao criar!";
	 }
	

    //header("Location: menu.php \n"); // Não existe o utilizador, redirect  para a p�gina de inicio de sess�o.
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
<title>Escola Website - Login</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<meta charset="UTF-8">
</head>

<main>
	
	<div class= "col-md-6 offset-md-3 text-center bg-light  border-secondary mt-5 col-sm-12">
			<h5 class= " text-secondary mt-5"> Inserir novo utilizador </h5>
			<form action="inseredados.php"  method="post">
					
					<div class="form-group row ">
						<label for="username" class="col-sm-2 col-form-label mt-3">Username</label>
						<div class="col-sm-10">
							<input type="text" class="form-control mt-3"  name="username">
						</div>
					</div>				
					<div class="form-group row">
						<label for="password" class="col-sm-2 col-form-label mt-3">Password</label>
						<div class="col-sm-10">
							<input type="text" class="form-control mt-3" name="password" >
						</div>
					</div>
					<button type="submit" class="btn btn-primary mt-3 mb-3">Enviar</button>
			</form>
	</div>

</main>

</body>
</html>



