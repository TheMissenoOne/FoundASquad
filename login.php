<?php
include 'conexao.php';
session_start('login');
$_SESSION['logado'] = '0';
$email              = $_POST['email'];
$senha              = $_POST['senha'];

    if ($email != "" && $senha != "") {
        
        if (!$mysqli->query("DROP PROCEDURE IF EXISTS sp_Login") || !$mysqli->query("CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Login`(in email varchar(100),
in senha varchar(20))
BEGIN
    if exists(SELECT nm_email, nm_senha FROM tb_usuario where nm_email = email and nm_senha = senha) then
        select true as aviso;
        else 
        select false as informacao;
    end if;
END;")) {
            echo "Erro 001: (" . $mysqli->errno . ") " . $mysqli->error;
        }
        
        if (!($qr = $mysqli->prepare("CALL sp_Login('$email','$senha')"))) {
            echo "Erro 002: (" . $mysqli->errno . ") " . $mysqli->error;
        }
        
        if (!$qr->execute()) {
            echo "Erro 002: (" . $qr->errno . ") " . $qr->error;
        }
        
        do {
            
            $id_out = NULL;
            if (!$qr->bind_result($id_out)) {
                echo "Erro 003: (" . $qr->errno . ") " . $qr->error;
            }
            
            while ($qr->fetch()) {
                if($id_out==0){										
					include 'cookie.php';	
					}else{
					echo "<script>confirm('Usuario e/ou senha incorretos!',window.location.href='login.html')</script>";
				}
			}
        } while ($qr->more_results() && $qr->next_result());
        
    } else {
        echo "<script>confirm('Preencha todos os campos!',window.location.href='login.html')</script>";
    }
?>