SELECT  `salles`.`nom` , `etage`.`nom`
FROM `salles` LEFT JOIN `etage` ON `salles`.`id_etage` = `etage`.`id`