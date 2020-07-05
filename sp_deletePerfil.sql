CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_deletePerfil`(IN cod INT)
BEGIN
	DELETE FROM tb_perfil WHERE cd_perfil = cod;
END