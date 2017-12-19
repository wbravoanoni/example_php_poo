/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-12-19 19:03:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for estudiantes
-- ----------------------------
DROP TABLE IF EXISTS `estudiantes`;
CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `promedio` double DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `id_seccion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pk_estudiantes` (`id_seccion`),
  CONSTRAINT `pk_estudiantes` FOREIGN KEY (`id_seccion`) REFERENCES `secciones` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for secciones
-- ----------------------------
DROP TABLE IF EXISTS `secciones`;
CREATE TABLE `secciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
