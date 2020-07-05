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
        </header>
        <content>
            <div class="container-fluid">
                <?php
                    // error_reporting(0);
                    // ini_set("display_errors", 0);
                    if (isset($_SESSION['logado']) ) {
                        if($_SESSION['logado'] == '1' ){

                            echo '<div class="text-center titulo" >
                    <h1>Jogos</h1>
                </div>
                <br><br>

                <div class="row">
                    
                    <div class="col-md-1"></div>

                    <div class="col-md-4">
                        <a href="#">
                        <img src="images/logoLOL.png" style="width: 100%">
                        
                        </a>
                        
                    </div>                  
                    <div class="col-md-2"></div>
                    <div class="col-md-4 text-md-center">
                        <a href="overwatch.php">
                        <img src="images/logoOW.png" style="width: 100%;margin-top: 12.5%;">
                        </a>
                        
                    </div>
                    <div class="col-md-1"></div>

                </div>
                <br><br>';
            }else{
                            echo '
                        <div class="container-fluid">
                    
                    <div class="text-center titulo" >
                        <h1>FoundASquad</h1>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10 card-deck card-deck-fas">
                                <div class="card">
                                    <div class="card-body" style="background-color: rgb(19,19,19);">
                                        <h3 class="card-title">PROBLEMA</h3>
                                            <p class="card-text">Com o crescente fluxo de jogadores nos jogos online, e a grande variação de características dos jogadores as equipes formadas nos jogos tem se tornado cada vez menos equilibradas,    fazendo com que os jogadores tenham uma queda no seu desempenho. Outro fator é a grande quantidade de jogadores que tendem a não beneficiar a equipe, jogando de forma individualista e trazendo problemas para a equipe.</p>
                    
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-1"></div>
                    
                    </div>
                    <br>
                    
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5 card-deck card-deck-fas">
                                <div class="card">
                                    <div class="card-body" style="background-color: rgb(19,19,19);">
                                        <h3 class="card-title">MÁXIMO DE APROVEITAMENTO</h3>
                                        <p class="card-text">Com o FoundASquad você poderá encontrar equipes que possibilitam com que você realize sua função da melhor forma possível promovendo assim uma maior interação entre os jogadores e consequentemente aumentando seu desenpenho durante as partidas</p>
                                            
                                    </div>
                                </div>
                                
                        </div>
                    
                        <div class="col-md-5 card-deck card-deck-fas">
                                <div class="card">
                                    <div class="card-body" style="background-color: rgb(19,19,19);">
                                        
                                        <h3 class="card-title">SEM TROLLS ESTRAGANDO SEU JOGO</h3>
                                        <p class="card-text">FoundASquad é um sistema que permite a interação de jogadores segundo suas funções e características, tornando seu jogo menos sacrificante e te ajudando a conseguir o melhor de si</p>
                                            
                                    </div>
                                </div>
                                
                        </div>
                    
                        
                        <div class="col-md-1"></div>
                    
                    </div>
                    <br>
                    <div class="row">
                        
                        <div class="col-md-1"></div>
                        <div class="col-md-10 card-deck card-deck-fas">
                                <div class="card">
                                    <div class="card-body" style="background-color: rgb(19,19,19);">
                    
                                        <h3 class="card-title">COMO FUNCIONA?</h3>
                                        <p class="card-text">O sistema terá um motor de busca de jogadores que usará as informações cedidas pelos jogos, fazendo um cruzamento com a avaliação de outros jogadores e então unindo jogadores com características complementares, gerando uma equipe coesa e eficiênte. </p>
                    
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>      
                    </div>
                    </div>';
                        }

                        }else{
                    		echo '
                    	<div class="container-fluid">
                    
                    <div class="text-center titulo" >
                    	<h1>FoundASquad</h1>
                    </div>
                    
                    <div class="row">
                    	<div class="col-md-1"></div>
                    	<div class="col-md-10 card-deck card-deck-fas">
                    			<div class="card">
                    				<div class="card-body" style="background-color: rgb(19,19,19);">
                    					<h3 class="card-title">PROBLEMA</h3>
                    						<p class="card-text">Com o crescente fluxo de jogadores nos jogos online, e a grande variação de características dos jogadores as equipes formadas nos jogos tem se tornado cada vez menos equilibradas,	fazendo com que os jogadores tenham uma queda no seu desempenho. Outro fator é a grande quantidade de jogadores que tendem a não beneficiar a equipe, jogando de forma individualista e trazendo problemas para a equipe.</p>
                    
                    				</div>
                    			</div>
                    	</div>
                    	<div class="col-md-1"></div>
                    
                    </div>
                    <br>
                    
                    <div class="row">
                    	<div class="col-md-1"></div>
                    	<div class="col-md-5 card-deck card-deck-fas">
                    			<div class="card">
                    				<div class="card-body" style="background-color: rgb(19,19,19);">
                    					<h3 class="card-title">MÁXIMO DE APROVEITAMENTO</h3>
                    					<p class="card-text">Com o FoundASquad você poderá encontrar equipes que possibilitam com que você realize sua função da melhor forma possível promovendo assim uma maior interação entre os jogadores e consequentemente aumentando seu desenpenho durante as partidas</p>
                    						
                    				</div>
                    			</div>
                    			
                    	</div>
                    
                    	<div class="col-md-5 card-deck card-deck-fas">
                    			<div class="card">
                    				<div class="card-body" style="background-color: rgb(19,19,19);">
                    					
                    					<h3 class="card-title">SEM TROLLS ESTRAGANDO SEU JOGO</h3>
                    					<p class="card-text">FoundASquad é um sistema que permite a interação de jogadores segundo suas funções e características, tornando seu jogo menos sacrificante e te ajudando a conseguir o melhor de si</p>
                    						
                    				</div>
                    			</div>
                    			
                    	</div>
                    
                    	
                    	<div class="col-md-1"></div>
                    
                    </div>
                    <br>
                    <div class="row">
                    	
                    	<div class="col-md-1"></div>
                    	<div class="col-md-10 card-deck card-deck-fas">
                    			<div class="card">
                    				<div class="card-body" style="background-color: rgb(19,19,19);">
                    
                    					<h3 class="card-title">COMO FUNCIONA?</h3>
                    					<p class="card-text">O sistema terá um motor de busca de jogadores que usará as informações cedidas pelos jogos, fazendo um cruzamento com a avaliação de outros jogadores e então unindo jogadores	com características complementares, gerando uma equipe coesa e eficiênte. </p>
                    
                    				</div>
                    			</div>
                    	</div>
                    	<div class="col-md-1"></div>
                    </div>		
                    </div>
                    </div>';
                    	}
                    
                    		?>
            </div>
            </div>
            </div>
        </content>
        <footer class="rodape text-md-center">
            <ul class="navbar-nav text-md-center nav-justified w-100">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">FoundASquad - 2018</a>
                </li>
            </ul>
        </footer>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>