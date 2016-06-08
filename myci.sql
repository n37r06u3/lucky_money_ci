/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : myci

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-06-08 17:36:21
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for lucky_money_quota
-- ----------------------------
DROP TABLE IF EXISTS `lucky_money_quota`;
CREATE TABLE `lucky_money_quota` (
  `lucky_money_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `is_used` tinyint(1) DEFAULT NULL COMMENT '是否领取',
  KEY `lucky_money_fk` (`lucky_money_id`),
  CONSTRAINT `lucky_money_fk` FOREIGN KEY (`lucky_money_id`) REFERENCES `lucky_money` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
