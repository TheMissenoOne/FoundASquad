CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_deleteUsuario`(IN cod INT)
BEGIN
	DELETE FROM tb_usuario WHERE cd_usuario = cod;
END