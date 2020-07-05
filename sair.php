<?php
	session_start('login');
	$_SESSION['logado'] = '0';
	setcookie('email',null,time()-50);
	setcookie('nome',null,time()-50);
	session_destroy('login');
	header("location:index.php");
?>