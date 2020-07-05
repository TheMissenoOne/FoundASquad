<?php 

include 'conexao.php';
$user = $_POST['usuario'];
$nome = $_POST['nm_completo'];
$senha = $_POST['senhaA'];
$senhaNova = $_POST['senha'];
$senhaConfirm = $_POST['senhaC'];
$email = $_POST['email_usuario'];
// $entrada = "";
$updt = "";
// if ($senhaNova == $senhaConfirm) {
        $dados = $mysqli->query('SELECT * FROM tb_usuario WHERE cd_usuario="'.$_COOKIE['cod'].'"');
        if($senhabd = $dados->fetch_object()) {

		if ($user != "" && $user !=null) {
			// $entrada.="IN nm_usuario varchar(100),";
			$updt.="nm_usuario='".$user."',";
		}

		if ($nome != "" && $nome !=null) {
			// $entrada.="IN nm_completo varchar(100),";
			$updt.="nm_completo='".$nome."',";
		}

		if ($senhaNova != "" && $senhaNova !=null) {
			if($senhaNova == $senhaConfirm){
				// $entrada.="IN nm_senha varchar(20),";
				$updt.="nm_senha ='".$senhaNova."',";
			}else{
				echo "<script>confirm('As senhas não coincidem',window.location.href='perfil.php')</script>";
			}
		}

		if ($email != "" && $email !=null) {
			// $entrada.="IN nm_emailvarchar(100),";
			$updt.="nm_email ='".$email."',";
		}
			$updt = substr($updt, 0,-1);       	
        	if ($senhabd->nm_senha == $senha) {
        		if (!$mysqli->query("DROP PROCEDURE IF EXISTS sp_atualizaUsuario") ||
			    !$mysqli->query("CREATE PROCEDURE sp_atualizaUsuario() BEGIN UPDATE tb_usuario SET $updt WHERE cd_usuario = ".$_COOKIE['cod']."; END;")) {
			    	echo "Erro 001: (" . $mysqli->errno . ") " . $mysqli->error;
				}
	        		$mysqli->query("call sp_atualizaUsuario()");
					header("location:index.php");
        	}else{
        		echo "<script>confirm('Senha incorreta',window.location.href='perfil.php')</script>";
        	}
//         }   
// }else{
// 	echo "<script>confirm('As senhas não coincidem',window.location.href='perfil.php')</script>";

}

?>