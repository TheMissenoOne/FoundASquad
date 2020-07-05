<?php
	include 'conexao.php';
	$select = "UPDATE tb_aluno SET nm_email = '".$_POST['novo']."' 
			WHERE cd_aluno = ".$_POST['btnCod'];
	mysqli_query($mysqli,$select) or die ("");
	setcookie('nome_usuario',$_POST['novo']);
	header("location:index.php");
?>