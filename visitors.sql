-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `visitors`;
CREATE TABLE `visitors` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `total_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `visitors` (`id`, `total_count`) VALUES
(1,	0);

-- 2018-03-02 20:18:08
