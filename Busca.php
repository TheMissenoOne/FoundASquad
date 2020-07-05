<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">

			<meta http-equiv="X-UA-Compatible" content="IE=edge">

			<meta name="viewport" content="width=device-width, initial-scale=1">

			<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet"> 

			<title>FoundASquad - Início</title>	

			<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

			<link rel="stylesheet" type="text/css" href="css/estilo.css">	
					
		</head >
	<body>

		<div class="logo">	
		
		</div>

		<header>

			

			<nav class="navbar navbar-expand-lg navbar-dark topo">
		
				<a class="navbar-brand" href="index.php">
					<img src="images/logoV7.png" width="75">
					FoundASquad
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPrincipal" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
			  	</button>
				  	<div class="collapse navbar-collapse " id="navbarPrincipal">
						<ul class="navbar-nav text-md-center nav-justified w-100">
					  
					  <?php
					  $jogo = $_POST['buscar'];
					  if ($jogo == "overwatch") {
								session_start('login');
								if (isset($_SESSION['logado']) ) {
									if($_SESSION['logado'] == '1'){
										echo'                    
						      <li class="nav-item">
						      <a class="nav-link" href="sair.php"><h5>Sair</h5></a>
						      </li>';
									}else{
										echo'<li class="nav-item"><a class="nav-link" href="login.html"><h5>Login</h5></a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="cadastro.html"><h5>Cadastro</h5></a>
							      </li>';
										}
								}else{
									echo'<a class="nav-link" href="login.html"><h5>Login</h5></a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="cadastro.html"><h5>Cadastro</h5></a>
							      </li>';
								}
							}
					   ?>

						</ul>
			</div>
	</nav>
		

	<div class="container-fluid">
				<div class='row titulo'>
                    <div class='col-md-3'></div>
                    <div class='col-md-6'>
                        <a href='#''>
                            <img src='images/logoOW.png' style='width: 100%''>
                        </a>                        
                    </div>
                    <div class='col-md-3'></div>
                </div>

				<div class="text-center titulo" >
					<h2>Escolha sua função</h2>
				</div>

				<div class="row">

				<div class="col-md-3"></div>

				<div class="col-md-6">

				<form action="formar.php" method="post">
					<select class="form-control form-control-lg form-ow " name="funcao">
						<?php 
							include 'conexao.php';
							$funcs = $mysqli->query('SELECT * FROM tb_funcao');
							while ($opt = $funcs->fetch_object()) {
								echo "<option value='".$opt->cd_funcao."'><h1>".$opt->nm_funcao."</h1></option>";
							}
						?>
					</select>
					<input class='btn btn-dark  mt-4 btn-ow' style="width: 100%; margin-top: 10px;" type="submit" value="FoundASquad">

				</form>

				</div>

				<div class="col-md-3"></div>

				</div>
				
			
				
			
			
			
		

	</div>




	<footer class="rodape text-md-center">
		<ul class="navbar-nav text-md-center nav-justified w-100">
			<li class="nav-item">
				<a class="nav-link" href="#">FoundASquad - 2018</a>
			</li>
		</ul>

	</footer>
	
	
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>