/*
Asuma TEST sql

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-12-28 14:21:51
*/
SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for business_tbl
-- ----------------------------
DROP TABLE IF EXISTS `business_tbl`;
CREATE TABLE `business_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_time` varchar(20) DEFAULT NULL,
  `qq` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sequence
-- ----------------------------
INSERT INTO `sequence` VALUES ('business_tbl', '3', '1');

-- ----------------------------
-- Records of business_tbl
-- ----------------------------
INSERT INTO `sequence` VALUES ('business_tbl', '3', '1');
INSERT INTO `business_tbl` VALUES ('1', '阿斯玛', '1', '1514442036', '251025241');
INSERT INTO `business_tbl` VALUES ('2', '测试2', '0', '1514442036', '111111111');
INSERT INTO `business_tbl` VALUES ('3', '测试3', '1', '1514442036', '222222222');