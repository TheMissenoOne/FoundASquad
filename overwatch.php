<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">

			<meta http-equiv="X-UA-Compatible" content="IE=edge">

			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>FoundASquad - Jogos</title>	

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
                                        <a class="nav-link" href="perfil.php">Perfil</a>
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

					if (isset($_SESSION['logado']) ) {
                    	if($_SESSION['logado'] == '1' ){
                    		include 'api.php';
                    		if (isset($_COOKIE['nick'])) {
                    			if ($_COOKIE['nick']=="") {
                    
                    				echo "
                                        <div class='row titulo'>
                                            <div class='col-md-4'></div>
                                            <div class='col-md-4'>
                                                <a href='#''>
                                                    <img src='images/logoOW.png' style='width: 100%''>
                                                </a>                        
                                            </div>
                                            <div class='col-md-4'></div>
                                        </div>
                                          <div class='text-center titulo' >
                    						<h2>Você ainda não registrou o seu nome de usuário!</h2>
                    					  </div>";
                    
                    				echo '
                    				
                    
                    			<div class="row">
                    
                    			<div class="col-md-3"></div>
                    
                    			<div class="col-md-6">
                    			<form action="registraNick.php" method="post">
                    			  <div class="form-group">
                    			    <label for="emailDoLogin">Registre agora:</label>
                    			    <input type="text" class="form-control" id="emailDoLogin"  placeholder="Nome de usuario no jogo" name="username" required>    
                    			  </div>
                    			  <button type="submit" class="btn  btn-dark" style="width: 100%; margin-top: 10px;">Cadastrar</button>
                    			  <br><br>
                    			</form>
                    			</div
                    			<div class="col-md-3"></div>
                    
                    			</div>';
                    			}else{
                    				$user =  getProfile($_COOKIE['nick'],1);
                                    ini_set('display_errors', 0);
                                    error_reporting(0);
                    				if ($user->username!="") {
                                    echo "
                                    <div class='row titulo'>
                                        <div class='col-md-4'></div>
                                        <div class='col-md-4'>
                                            <a href='#''>
                                            <img src='images/logoOW.png' style='width: 100%''>
                                            </a>                        
                                        </div>
                                        <div class='col-md-4'></div>
                                    </div>"
                                    ;
                                    echo "
                                    <div class='row'>
                                        <div class='col-md-1'></div>
                                        <div class='col-md-5 col-md-5 card-deck card-deck-fas'>
                                                                            
                                                <div class='card text-center'>                                                 
                                                   <div class='card-body' style='background-color: rgb(19,19,19);'>
                                                        <img class='rounded-bottom' src= '".$user->portrait."' >
                                                        <h2 class='card-title'>".$user->username." </h2>
                                                   </div>
                                                </div> 
                                            
                                        </div> 

                                        <div class='col-md-5 card-deck card-deck-fas'>  
                                                                         
                                                <div class='card text-center'>                                                   
                                                    <div class='card-body' style='background-color: rgb(19,19,19);'>
                                                        <h4 class='card-title'>Herói favorito </h4>
                                                        <img class='rounded-bottom' src= '".$user->stats->top_heroes->quickplay[0]->img."' >
                                                        <p class='card-text '><h3>".$user->stats->top_heroes->quickplay[0]->hero."</h3></p>
                                                    </div>
                                                </div>
                                            
                                        </div>
                                        <div class='col-md-1'></div>
                                    </div>";

                                    echo "
                                    <div class='row'>
                                        <div class='col-md-4'></div>
                                            <div class='col-md-4 titulo'>

                                            <form name='formBusca' action='Busca.php' method='post'>

                                                <button type='submit' class='btn btn-dark  mt-4 btn-ow' style='width: 100%;' value='overwatch' name='buscar'>Buscar</button>

                                            </form>

                                            </div>
                                        <div class='col-md-4'></div>
                                    </div>
                                    ";

                    					echo "                                                                 
                                            <div class='text-center titulo' >
                                            <h2>Melhores pontuações</h2>
                                            </div>
                                        <div class='row overwatch'>
                                            <div class='col-md-1'></div>
                                            <div class='col-md-10 card-deck card-deck-fas'> ";
                                        for ($i=0; $i < count($user->stats->best->quickplay); $i++) {
                                        echo "
                                        <div class='card text-center'>
                                            <div class='card-body' style='background-color: rgb(19,19,19);'>
                                                <h4 class='card-title'>".$user->stats->best->quickplay[$i]->title." </h4>
                                                <p class='card-text'><h1>".$user->stats->best->quickplay[$i]->value."<h1></p>
                                            </div>
                                        </div>
                                        ";
                                            if ($i%3 == 0) {

                                                echo "   
                                                </div>                                             
                                                <div class='col-md-1'></div>
                                                </div>
                                                <br>
                                                <div class='row overwatch'>
                                                <div class='col-md-1'></div>
                                                <div class='col-md-10 card-deck card-deck-fas'> ";
                                            }

                                        }
                                    }else{
                                        echo "
                                        <div class='row'>
                                            <div class='col-md-1'></div>
                                            <div class='col-md-10'>
                                                <h1 class='text-center titulo'>Você está desconectado</h1>
                                            </div>
                                            <div class='col-md-1'></div>
                                        </div>
                                        ";
                                    }
                    			}
                    		}else{
                    			echo "
                                        <div class='row titulo'>
                                            <div class='col-md-4'></div>
                                            <div class='col-md-4'>
                                                <a href='#''>
                                                    <img src='images/logoOW.png' style='width: 100%''>
                                                </a>                        
                                            </div>
                                            <div class='col-md-4'></div>
                                        </div>
                                        <div class='text-center titulo' >
                    						<h3>Você ainda não registrou o seu nome de usuário!</h3>
                    					</div>";
                    			echo '
                    
                    			<div class="row">
                    
                    			<div class="col-md-3"></div>
                    
                    			<div class="col-md-6">
                    			<form action="registraNick.php" method="post">
                    			  <div class="form-group">
                    			    <label for="emailDoLogin">Registre agora:</label>
                    			    <input type="text" class="form-control form-ow" id="emailDoLogin"  placeholder="Nome de usuario no jogo" name="username" required>    
                    			  </div>
                    			  <button type="submit" class="btn btn-dark  btn-ow" style="width: 100%; margin-top: 10px;">Cadastrar</button>
                    			  <br><br>
                    			</form>
                    			</div
                    			<div class="col-md-3"></div>
                    
                    			</div>
                    
                    
                    			';
                    				}
                    		echo "</div>";
                    		}
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