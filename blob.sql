CREATE TABLE IF NOT EXISTS `Files`(
	
	`ID` INT(11) NOT NULL AUTO_INCREMENT,
	`NOME` VARCHAR(30) NOT NULL,
	`DADO` LONGBLOB NOT NULL,
	PRIMARY KEY (`ID`)
	
)ENGINE=MyISAM DEFAULT CHARSET=latin1; 