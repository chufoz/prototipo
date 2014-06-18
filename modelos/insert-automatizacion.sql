
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
USE `bd_eqgg`;

DELIMITER $$
USE `bd_eqgg`$$
CREATE
DEFINER=`root`@`localhost`
TRIGGER `bd_eqgg`.`makecards`
AFTER INSERT ON `bd_eqgg`.`jc_identificaciones`
FOR EACH ROW
BEGIN
INSERT INTO jc_credenciales (nombre_credencial,email_credencial,fk_identificaciones_credenciales) VALUES (NEW.usuario_identificacion,CONCAT(NEW.usuario_identificacion,'@junglacode.org'),NEW.pk_id_identificacion);
 END$$

DELIMITER ;


-- insert iniciales

INSERT INTO `bd_eqgg`.`jc_roles` (`pk_id_rol`, `nombre_rol`) VALUES ('1', 'root');
INSERT INTO `bd_eqgg`.`jc_perfiles` (`pk_id_perfil`, `nombre_perfil`, `fk_id_roles_perfiles`) VALUES ('1', 'root', '1');
INSERT INTO `bd_eqgg`.`jc_identificaciones` (`pk_id_identificacion`, `usuario_identificacion`, `password_identificacion`, `candado_identificacion`, `fk_id_perfiles_identificaciones`, `fecha_identificacion`) VALUES ('1', 'Root', 'frameworkRegina', '1', '1', '1986-04-27');

