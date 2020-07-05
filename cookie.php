<?php
include 'conexao.php';
$select = $mysqli->query("SELECT cd_usuario,nm_email,nm_usuario, nm_senha FROM tb_usuario ");
			while ($login = $select->fetch_object()) {
						$_SESSION['logado'] = '1';
					setcookie('email', $email);
					setcookie('nome', $login->nm_usuario);
					setcookie('cod', $login->cd_usuario);
					$prof = $mysqli->query('SELECT nm_nick FROM tb_perfil WHERE cd_usuario = ' . $login->cd_usuario);
					$nick = $prof->fetch_object();
					setcookie('nick', $nick->nm_nick);
					header('location:index.php');
			}
?>