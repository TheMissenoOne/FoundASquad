 <!DOCTYPE html>
<html >
<head>
	<title>FoundASquad - Início</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">	
	
</head >
<body>

<header>
<div style="height: 80px;"></div>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar2" style="">
		<div class="container">
			<a href="index.php">
		  		<div class="text-center"><img src="imagens/fas_logo.png" width="80"  class="d-inline-block align-top " alt="Logo FoundASquad"></div>
</a>
	  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	    			<span class="navbar-toggler-icon"></span>
	  			</button>

			  <div class="collapse navbar-collapse " id="navbarTogglerDemo02" >
			    <ul class="navbar-nav text-md-center nav-justified w-100">
			       
			      	<?php
					session_start('login');
					if (isset($_SESSION['logado']) ) {
						if($_SESSION['logado'] == '1'){
							echo'
			      <li class="nav-item">
			        <a class="nav-link" href="busca.php"><h5>Buscar Esquadrão</h5></a>
			      </li>
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
				?>
			    </ul>		    
			  </div>
		</div>
</nav>
</header>

<main class="corpo container">

<img src="https://www.branco.com.br/content/dam/Branco/Latin%20America/Portuguese-BR/Images/Homepage/Branco_PT_ES_Product_Carousel_Nautica.jpg" width="200" height="200" class="img-fluid rounded-circle">










</center>
</main>
	



<footer class="rodape">
	<p>FoundASquad - 2017</p>
</footer>


	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>