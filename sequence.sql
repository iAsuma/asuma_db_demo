/*
Asuma Required SQL , Execute SQL Before Use PublicModel 

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-12-28 14:21:51
*/
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS  `sequence`;
CREATE TABLE `sequence` (
    `name` varchar(50) NOT NULL,
    `current_value` int(11) NOT NULL,
    `increment` int(11) NOT NULL DEFAULT '1',
    PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* FUNCTIONS */;
DROP FUNCTION IF EXISTS `currval`;
DELIMITER $$
CREATE FUNCTION `currval`(
	seq_name VARCHAR(50)
) RETURNS int(11)
DETERMINISTIC
BEGIN  
    DECLARE value INTEGER;  
    SET value = 0;
    SELECT current_value INTO value FROM sequence WHERE name = seq_name;
    RETURN value;
END
$$
DELIMITER;

DROP FUNCTION IF EXISTS `nextval`;
DELIMITER $$
CREATE FUNCTION `nextval`(
	seq_name VARCHAR(50)
) RETURNS int(11)
DETERMINISTIC
BEGIN  
    UPDATE sequence SET current_value = current_value + increment WHERE name = seq_name;
    RETURN currval(seq_name);
END
$$
DELIMITER;

DROP FUNCTION IF EXISTS `setval`;
DELIMITER $$
CREATE FUNCTION `setval`(
    seq_name VARCHAR(50),
    value INTEGER 
) RETURNS int(11)
    DETERMINISTIC
BEGIN  
    UPDATE sequence SET current_value = value WHERE name = seq_name;  
    RETURN currval(seq_name);
END
$$
DELIMITER;