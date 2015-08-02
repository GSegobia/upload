/*
MySQL Data Transfer
Source Host: localhost
Source Database: mydb
Target Host: localhost
Target Database: mydb
Date: 2011/6/3 13:59:12
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for users
-- ----------------------------
CREATE TABLE `cadastroclientes` (
  `id` int(11) UNSIGNED NOT NULL auto_increment,
  `nome` tinytext default NULL,
  `cpf` varchar(20) default NULL,
  `processo` varchar(35) default NULL,
  `telefone` tinytext default NULL,
  `email` varchar(200) default NULL,
  `status` tinytext default NULL,
  `observacoes` tinytext default NULL,
  `data` date ON UPDATE CURRENT_TIMESTAMP,
  `dataaniversario` date ,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
