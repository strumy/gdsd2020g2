-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'autoincremented id',
  `email` varchar(50) NOT NULL COMMENT 'unique email',
  `user_name` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `utype` varchar(20) NOT NULL DEFAULT 'STUDENT' COMMENT 'STUDENT, FACULTY, STAFF, ADMIN',
  `date_lastlogin` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date_inserted` timestamp NULL DEFAULT NULL,
  `date_updated` timestamp NULL DEFAULT NULL,
  `gender` char(1) DEFAULT 'a' COMMENT 'm=Male,f=Female,a=Any',
  `ustatus` tinyint NOT NULL DEFAULT '1' COMMENT '0=DISABLED, 1=ACTIVE, 2=DELETED',
  PRIMARY KEY (`id`),
  UNIQUE KEY `em_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `email`, `user_name`, `full_name`, `pass`, `utype`, `date_lastlogin`, `date_inserted`, `date_updated`, `gender`, `ustatus`) VALUES
(1,	'syeda@informatik.hs-fulda.de',	'tasneem',	'tasneem_student',	'$2y$10$pBWGtCfQOTy3XaZ8QW9Eiuy1ywVEFX1O8rhEyCPKWHiX/gTH7p1T2',	'STUDENT',	NULL,	'2020-12-02 19:15:49',	NULL,	'M',	1);

-- 2020-12-05 07:03:29
