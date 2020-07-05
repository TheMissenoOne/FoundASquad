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
<?php

$aux=true;
echo "<h1 class='display-3 ml-5'>Resultados</h1><br><hr>";
if (isset($_POST['src']) && $_POST['src']!==null  && $_POST['src']!=="") {
	
include'conexao.php';
$valor=$_POST['src'];
$select = $mysqli->query("SELECT tb_workshop.cd_professor, tb_workshop.nm_workshop as nome , tb_workshop.ds_workshop as 'desc' , tb_workshop.dt_workshop  as data, tb_workshop.hr_workshop as hora, tb_professor.cd_professor, tb_professor.nm_professor as nomeProf FROM tb_workshop JOIN tb_professor ON tb_professor.cd_professor = tb_workshop.cd_professor;");

while ($obj = $select->fetch_object()) {
		if(stristr ( $obj->nome , $valor)!=false){
			$aux=false;
			echo "
					<div class='card-body ml-5 '>
					<h3 class='card-title'>".$obj->nome."</h3>
						<div class='card-text m-2'>
							".$obj->desc."<br>Professor: ".$obj->nomeProf."
							<hr>Data:".$obj->data." <br> Hora:".$obj->hora."
							<div>
							</div>
						</div>
					<form action='cadastroWork' method='post'>
						<input class='btn btn-primary btn-lg' type='submit' Value='Inscrever-se em ".$obj->nome."'>
					</form>	
					</div> ";
		}else if(stristr ( $obj->desc , $valor)!=false){
			$aux=false;
			echo "
					<div class='card-body ml-5'>
					<h3 class='card-title'>".$obj->nome."</h3>
						<div class='card-text m-2'>
							".$obj->desc."<br>Professor: ".$obj->nomeProf."
							<hr>Data:".$obj->data." <br> Hora:".$obj->hora."
							<div>
							</div>
						</div>
					<form action='cadastroWork' method='post'>
						<input class='btn btn-primary btn-lg' type='submit' Value='Inscrever-se em ".$obj->nome."'>
					</form>	
					</div> ";
		}else if(stristr ( $obj->nomeProf , $valor)!=false){
			$aux=false;
			echo "
					<div class='card-body ml-5'>
					<h3 class='card-title'>".$obj->nome."</h3>
						<div class='card-text m-2'>
							".$obj->desc."<br>Professor: ".$obj->nomeProf."
							<hr>Data:".$obj->data." <br> Hora:".$obj->hora."
							<div>
							</div>
						</div>
					<form action='cadastroWork' method='post'>
						<input class='btn btn-primary btn-lg' type='submit' Value='Inscrever-se em ".$obj->nome."'>
					</form>	
					</div> ";
		}
 	}
}
 if ($aux) {
 	echo "<h5 class='ml-5'>Nenhum resultado disponivel<h5>";
 }
function contains($needle, $haystack)
{
    return strpos($haystack, $needle) !== false;
}

?>
</div>
</body>
	<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js' integrity='sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4' crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js' integrity='sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1' crossorigin='anonymous'></script>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<script type='text/javascript' src='Bootstrap/js/bootstrap.js'></script>
	<script type='text/javascript' src='Bootstrap/js/bootstrap.min.js'></script>
</html>