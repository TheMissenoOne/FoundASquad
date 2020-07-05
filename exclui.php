<?php
	include 'conexao.php';
	$select = $mysqli->query("DELETE FROM item_aluno_workshop WHERE cd_aluno =  (SELECT cd_aluno FROM tb_aluno WHERE nm_email =  '".$_COOKIE['nome_usuario']."') AND cd_workshop = ".$_POST['codg']."  ");
			header("location:index.php");
?>