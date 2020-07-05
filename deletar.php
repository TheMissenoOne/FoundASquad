<?php
	include 'conexao.php';
	if (!$mysqli->query("DROP PROCEDURE IF EXISTS sp_deleteUsuario") || !$mysqli->query("CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_deleteUsuario`(IN cod INT)
BEGIN
	DELETE FROM tb_usuario WHERE cd_usuario = cod;
END")) {
            echo "Erro 001: (" . $mysqli->errno . ") " . $mysqli->error;
        }
		
	if (!$mysqli->query("DROP PROCEDURE IF EXISTS sp_deletePerfil") || !$mysqli->query("CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_deletePerfil`(IN cod INT)
BEGIN
	DELETE FROM tb_perfil WHERE cd_perfil = cod;
END")) {
            echo "Erro 001: (" . $mysqli->errno . ") " . $mysqli->error;
        }
		
	$select = $mysqli->query("SELECT cd_perfil from tb_perfil WHERE nm_nick = '".$_COOKIE['nick']."'");
	$codPerfil = $select->fetch_object();
	$mysqli->query("CALL sp_deletePerfil(".$codPerfil->cd_perfil.")");
	$mysqli->query("CALL sp_deleteUsuario(".$_COOKIE['$cod'].")");
?>