/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : myci

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-06-12 17:49:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for lucky_money
-- ----------------------------
DROP TABLE IF EXISTS `lucky_money`;
CREATE TABLE `lucky_money` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total_amount` float NOT NULL,
  `quantity` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for lucky_money_package
-- ----------------------------
DROP TABLE IF EXISTS `lucky_money_package`;
CREATE TABLE `lucky_money_package` (
  `lucky_money_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `lucky_money_fk` (`lucky_money_id`),
  CONSTRAINT `lucky_money_fk` FOREIGN KEY (`lucky_money_id`) REFERENCES `lucky_money` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;
