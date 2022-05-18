/*
 Navicat Premium Data Transfer

 Source Server         : CloudServer - Rosario
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : 179.43.127.123:3306
 Source Schema         : usdata_utn

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 18/05/2022 19:00:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  `apellido` varchar(60) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
BEGIN;
INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `fecha`) VALUES (1, 'qweqwe', 'weqweq', 'sebastian@usdatabank.com.ar', '2022-05-03 21:31:46');
INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `fecha`) VALUES (2, 'asdasd', 'adasd', 'usdatabank@icloud.com', '2022-05-03 21:32:38');
INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `fecha`) VALUES (3, 'Sebastian', 'Saavedra', 'sebastian@usdatabank.com.ar', '2022-05-18 17:09:43');
INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `fecha`) VALUES (4, 'Gabriel', 'Morilla', 'gabrielmorilla2006@gmail.com', '2022-05-18 18:34:58');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
