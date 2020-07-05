<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">

            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet"> 

            <title>FoundASquad - Jogos</title>  

            <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

            <link rel="stylesheet" type="text/css" href="css/estilo.css">   
                    
        </head >
    <body>

        <div class="logo">  
        
        </div>

        

            

            
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
                        
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="sair.php">Sair</a>
                                    </li>                                
                    </ul>
                </div>
            </nav>


            <div class="container-fluid">
            <h2 class="titulo text-center">Sua Equipe</h2>

<?php 
      
    //$_COOKIE['cod']
    include 'conexao.php';
    include 'api.php';
    $funcao = $_POST['funcao'];
    // $mysqli->query("UPDATE tb_perfil SET ic_buscando = 1");
    $mysqli->query("UPDATE tb_perfil SET cd_funcao = ".$funcao." WHERE cd_usuario='".$_COOKIE['cod']."'");
    $perfil = $mysqli->query("SELECT p.cd_perfil, u.cd_usuario,u.nm_usuario FROM tb_perfil as p JOIN tb_usuario as u WHERE u.cd_usuario = p.cd_usuario AND u.cd_usuario = '".$_COOKIE['cod']."'");
   while ($obj = $perfil->fetch_object()){
        
            $max_equipes = $mysqli->query("SELECT MAX(cd_equipe) as cd_equipe FROM item_perfil_equipe WHERE cd_perfil='".$obj->cd_perfil."'");
            /*$obj4 = $max_equipes->fetch_object();            

            $linhas = 0;
            while ($linhas == 0) {
            $verifica = $mysqli->query("SELECT cd_equipe FROM  item_perfil_equipe WHERE cd_perfil = '".$obj->cd_perfil."' and cd_equipe > '".$obj4->cont_equipes."'");
            $linhas = $verifica->num_rows;                       
                
            }*/
            while ($obj2 = $max_equipes->fetch_object()){                
               // echo "<h1>".$obj->cd_equipe."</h1>";
                $jogadores_equipe = $mysqli->query("SELECT p.cd_perfil,pe.cd_equipe ,p.nm_nick,f.nm_funcao  FROM tb_perfil as p JOIN item_perfil_equipe as pe JOIN tb_funcao as f WHERE p.cd_perfil = pe.cd_perfil AND f.cd_funcao = p.cd_funcao AND cd_equipe='".$obj2->cd_equipe."'");
                

                while ($obj3 = $jogadores_equipe->fetch_object()){ 
                    $user =  getProfile($obj3->nm_nick,1);
                    ini_set('display_errors', 0);
                    error_reporting(0);
                    echo "
                    <div class='row titulo'>
                        <div class='col-md-3'></div>
                        <div class='col-md-6 card-deck card-deck-fas'>
                            <div class='card text-md-center'>                                                 
                                <div class='card-body' style='background-color: rgb(19,19,19);'>";
                                    echo "<img src= '".$user->portrait."' style='float:left' width=75; >";
                                    if($obj->cd_perfil == $obj3->cd_perfil){                                        
                                        echo "<h4 style='color: #F8A624;margin-top:20px'>".$obj3->nm_nick." - ".$obj3->nm_funcao."</h4>";
                                    }
                                    else{
                                        if($user->portrait == null){
                                            echo "<img src='images/logoV7.png' style='float:left' width=75; >";
                                        }
                                        echo "<h4 style='margin-top:20px'>".$obj3->nm_nick." - ".$obj3->nm_funcao."</h4>" ;
                                        
                                    }

                                    echo "

                                </div>
                            </div> 
                                            
                        </div> 
                        <div class='col-md-3'></div>
                    </div>";
                    
                }
            }
            
   }

    /*$num = $mysqli->query("SELECT COUNT(cd_equipe) FROM tb_equipe");
    $num = $num->fetch_object();
    $select = $mysqli->query("SELECT cd_usuario FROM item_usuario_jogo ORDER BY qt_pontuacao"); $mysqli->query("INSERT INTO tb_equipe VALUES ($num,5)");
    $reps=0;
    while ($obj = $select->fetch_object()) {
       if ($reps<5) {
            $mysqli->query("UPDATE item_usuario_jogo SET cd_equipe = 1");
       }
       $reps++;
    }*/
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