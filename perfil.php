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
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><img src="images/icon-inicio.png" width="32" class="navbar-icon">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sair.php"><img src="images/icon-sair.png" width="32" class="navbar-icon">Sair</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <content>
            <div class="container-fluid">
                <div class="text-center titulo" >
                <h1>Seu Perfil</h1>
                </div>
                <br><br>
                <form name="atualizar" action="atualizar.php" method="post">
                <?php
                include 'conexao.php';
                $dados = $mysqli->query('SELECT * FROM tb_usuario WHERE cd_usuario="'.$_COOKIE['cod'].'"');
                while ($dds = $dados->fetch_object()) {   
                echo '
                 
                <div class="row">
                    
                    <div class="col-md-1"></div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="nm_usuario">Nome de Usuário:</label>
                            <input type="text" class="form-control" id="nm_usuario"  placeholder="'.$dds->nm_usuario.'" name="usuario" >
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="email_usuario">Email:</label>
                            <input type="text" class="form-control" id="email_usuario"  placeholder="'.$dds->nm_email.'" name="email_usuario" >
                        </div>
                    </div>


                    <div class="col-md-1"></div>

                </div>

                <div class="row">
                    
                    <div class="col-md-1"></div>

                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="nm_completo">Nome Completo:</label>
                            <input type="text" class="form-control" id="nm_completo"  placeholder="'.$dds->nm_completo.'" name="nm_completo" >
                        </div>
                    </div>                    

                    <div class="col-md-1"></div>

                </div>

                <div class="row">
                    
                    <div class="col-md-1"></div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="senhaA">Senha Antiga:</label>
                            <input type="password" class="form-control" id="senhaA"  placeholder="Senha Antiga" name="senhaA" >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="senha">Nova Senha:</label>
                            <input type="password" class="form-control" id="senha"  placeholder="Senha" name="senha" >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="senhaC">Confirmar Nova Senha:</label>
                            <input type="password" class="form-control" id="senhaC"  placeholder="Senha Confirmação" name="senhaC" >
                        </div>
                    </div>
                    

                    <div class="col-md-1"></div>

                </div>


                <div class="row">
                    
                    <div class="col-md-2"></div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <button type="submit" class="btn  btn-dark" style="width: 100%; margin-top: 25px; min-height:60px;">Atualizar Dados</button>
                        </div>
                        </form>
                    </div>

                    <div class="col-md-4">
                        
                            <form action="deletar.php">
                                <button type="submit" class="btn  btn-dark" style="width: 100%; margin-top: 25px; min-height:60px;">Deletar Conta</button>
                            </form>
                       
                    </div>
                    <div class="col-md-2"></div>

                </div>



                 ';
                }
                 
                ?>
                
                
                <br><br>
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