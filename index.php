<?php	
	include  './login.php';
	//include  '../components/footer.php';
?>


<!DOCTYPE html>
<html lang="pt">
<head>
<title>Escola Website - Login</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel='stylesheet' type='text/css' media='screen' href='./src/css/main.css'>
<meta charset="UTF-8">
</head>

<html>
<body>
<header class= "row">
	
	<div  class= "col-md-6 offset-md-3 text-center bg-light border border-secondary mt-5 col-sm-12"> <!-- offset-md-3 desloca 3 colunas para a direita  -->
         
          <h2>Aplicação Escola</h2>
        </div>

</header>


<main class= "row col-md-6 offset-md-3 text-center mt-5 mb-5">
		<section class ="row">
         <form action="login.php"  method="post">
				 <label for="name">Utilizador:</label>
				 <input type="text" name="username"   class="input" value=""/>  
				 <br>				 
				 <label for="password">Password:  </label>
				 <input type="password"  name="password"  class="input" value=""/>
				 <br>
				 <input type="submit" class="btn btn-success" value="Iniciar sessao" class="button" />	
				 			
		</form>	
		</section>
		
				
		<?php 
			if($emptyUsernameOrPassword) 
				echo '<p>Username ou password vazio</p>'
		?>
			
</main>

	<section class ="row col-md-6 offset-md-3 mt-5 text center">
					<a href= "registo.php" >  Novo utilizador </a>
		</section>

</body>
</html>