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
                            session_start('login');
                            if (isset($_SESSION['logado']) ) {
                            	if($_SESSION['logado'] == '1'){
                            		echo'

                            		<li class="nav-item">
                            	        <a class="nav-link" href="views.php">Views</a>
                            	    </li>
                            		<li class="nav-item">
                            	        <a class="nav-link" href="busca.php">Buscar Esquadrão</a>
                            	    </li>
                            	    <li class="nav-item">
                            	        <a class="nav-link" href="sair.php">Sair</a>
                            	    </li>';
                            	}else{
                            		echo'
                            		<li class="nav-item">
                            	        <a class="nav-link" href="login.html">Login</a>
                            	    </li>
                            	    <li class="nav-item">
                            	        <a class="nav-link" href="cadastro.html">Cadastro</a>
                            	    </li>';
                            		}
                            }else{
                            	echo'
                            		<li class="nav-item">
                            	        <a class="nav-link" href="login.html">Login</a>
                            	    </li>
                            	    <li class="nav-item">
                            	        <a class="nav-link" href="cadastro.html">Cadastro</a>
                            	    </li>';
                            }
                            ?>
                    </ul>
                </div>
            </nav>

	<div class="container-fluid">
		<?php 
				include 'conexao.php';
				echo "EQUIPES<br>";
				$equipes = $mysqli->query("SELECT * FROM vw_equipes WHERE equipe = (SELECT equipe FROM vw_equipes WHERE nick =  '".$_COOKIE['nick']."')");
				while($result = $equipes->fetch_object()){
				echo $result->nome_usuario." ".$result->nick." | ";
				}

				echo "<br><br>JOGOS ATUAIS<br>";
					$jogos = $mysqli->query("SELECT * FROM vw_jogos_atuais");
				while($result = $jogos->fetch_object()){
					echo $result->nm_fabricante." ".$result->nm_jogo." ".$result->nm_plataforma." | ";
				}

				echo "<br><br>ULTIMA FUNÇÃO<br>";
					$funcao = $mysqli->query("SELECT * FROM vw_usuario_funcao_jogo");
				while($result = $funcao->fetch_object()){
					echo $result->usuario." ".$result->nm_funcao." | ";
				}

				echo "<br><br>FUNÇÃO POR EQUIPE<br>";
					$funcao_equipe = $mysqli->query("SELECT * FROM vw_equipe_perfi_funcao WHERE Codigo_da_Equipe = (SELECT equipe FROM vw_equipes WHERE nick =  '".$_COOKIE['nick']."')");
				while($result = $funcao_equipe->fetch_object()){
					echo $result->Quantidade_de_Integrantes_da_Equipe." ".$result->Nome_da_Funcao." ".$result->Avaliacao_do_Jogador." ".$result->Nick_do_Usuario." | ";
				}
		?>
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