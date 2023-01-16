<?php	
include  './database/db.php';
$emptyUsernameOrPassword = '';

//print_r($_POST);

if($_POST){ // Se existir um post, entra!

	$tabela = 'users';

	$username = $_POST['username'];  // Get do username
	$password = $_POST['password'];  // Get da password

	//print_r($_POST['password']);
	//echo $_POST['password'];
	if ($username && $password){ // Validar se ambos os campos têm valor.	
		$password = md5($password);
		
		$query = "SELECT * FROM $tabela WHERE username=? AND passw=?";			
		$stmt = $db->prepare($query);
        $stmt->execute([$username, $password]);
		$result = $stmt->fetch();
		
							
		//echo (count($result));
		if(count($result) > 0) // Se encontrou password porque está registado
							//if($result) // Se encontrou password porque está registado
		{
			session_start();
			$_SESSION['username'] = $username; // Cria um cookie saving the username
			$_SESSION['loggedIn'] = true; // Creates a cookie saying the user is logged in
			exit(header("Location: menu.php"));
		}
		else
		{ 
			exit(header("Location: index.php "));
		}
		}else{
				$emptyUsernameOrPassword = true; 
		}
	}
?>