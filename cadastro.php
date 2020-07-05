<?php
	include 'conexao.php';
	$nome = $_POST['completo'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	$confirma = $_POST['confirma'];
	$exst = 0;
	$select = $mysqli->query("SELECT nm_email FROM tb_usuario");
	while ($obj = $select->fetch_object()) {
		if (strcmp($obj->nm_email , $email)==0) {
			$exst = 1;
		}
	}
	if($nome !="" && $senha !=""  && $email !="" && $confirma !=""  && $usuario !="" ){
		if ($exst != 1) {
			$result = $mysqli->query('SELECT count(cd_usuario)+1 as cod FROM tb_usuario');
			$cod = 	$result->fetch_object();
			if (strcasecmp($senha, $confirma) == 0) {
				$insert = "INSERT INTO tb_usuario (cd_usuario,nm_usuario,nm_senha,nm_email,nm_completo) VALUES ";
				$insert .= "($cod->cod,'$usuario', '$senha', '$email', '$nome')";
				mysqli_query($mysqli,$insert) or die("Erro ao tentar cadastrar registro");
				mysqli_close($mysqli);
				echo "<script>confirm('Cadastro efetuado com sucesso!', window.location.href='index.php')</script>";
			}
			else {
				echo "<script>confirm('As senhas não conferem',window.location.href='cadastro.html')</script>";
			}
		}else{
			echo "<script>confirm('Email já cadastrado',window.location.href='cadastro.html')</script>";
		}
	}else{
		echo "<script>confirm('Preencha todos os campos',window.location.href='cadastro.html')</script>";
	}
	?>