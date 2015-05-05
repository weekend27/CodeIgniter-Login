/*
Navicat MySQL Data Transfer

Source Server         : weekend27
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : login

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-05-05 18:46:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for members
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` text,
  `pass` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of members
-- ----------------------------
INSERT INTO `members` VALUES ('0', 'weekend27@163.com', 'HWJ041');
