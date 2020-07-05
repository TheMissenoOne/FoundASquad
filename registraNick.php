<?php 
	include 'conexao.php';
	$nick = $_POST['username'];
	if (isset($_SESSION['logado'])) {
		if ($_SESSION['logado']=='0') {
			header('location:index.php');
		}
	}else{
		header('location:index.php');
	}
	if($nick !=""){
				$mysqli->query("INSERT INTO tb_perfil (nm_nick, cd_usuario) VALUES ('$nick','".$_COOKIE['cod']."')");	
				
				setcookie('nick',$nick);
				echo "<script>confirm('Cadastro efetuado com sucesso!', window.location.href='index.php')</script>";
	}else{
		echo "<script>confirm('Preencha todos os campos',window.location.href='index.php')</script>";
	}
?>