SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `Poster_DB`;
CREATE DATABASE `Poster_DB`;
USE `Poster_DB`;

DROP TABLE IF EXISTS `DP_Users`;
CREATE TABLE `DP_Users` (
  `UserID` tinyint NOT NULL AUTO_INCREMENT,
  `UserName` varchar(64) NOT NULL,
  `UserPassword` varchar(128) NOT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `DP_Users` (`UserID`, `UserName`, `UserPassword`) VALUES
(1,	'Alan Palker',	'$2y$09$bF3at5RhTApQY0bm1ZNuROs9/Yb0vFSOj8KoHLExBx9W1qNXgbSfW'),
(2,	'Adam',	'$2y$09$XET2rN1nTbJEhPzmNdTF6uGz8J2kWjMKHuHMfY8JJFi9iPJnMuzSi'),
(3,	'Bob',	'$2y$09$Z.uD9bKfo0diMJrGpj6...h6ymspJkjryGWWndKUjIWA7qhZXUeJO'),
(4,	'Lendrick Kumar',	'$2y$09$VIfQn/d/pFtIFHK7VeLiRuavqbt8PAR8YNEcdQELtO8O4oBFFCZky'),
(5,	'Bijoy',	'$2y$09$WaOC4w.zbkO3V8AxgJYPyeEtcugTjpjDAaSyKWT73CReyaXo6YtOu'),
(6,	'Kevin',	'$2y$09$sD0WtYQduUexkQBW6sbHxuRxyxBhFa0mgSkM5MfkZSWP5Dam6AMfW'),
(7,	'Ninja',	'$2y$09$d6a3RAL.dqXw1Zbk1LTq6OfEbzFYlZjZl5urrZ.U46sq6vtTikOUS'),
(8,	'Paul',	'$2y$09$TUdsbnRBVLzZbKVpyz7bYuMax92meKY4HPTQY3OpU4QbaW7nXv01K'),
(9,	'Bhomas Tangalter',	'$2y$09$5Yb3VO7q5fcm/FMVRNdkR.88Q1g3U3u55mCPDMNQh8JUPt6vtEGbG'),
(10,	'Ben Tennyson',	'$2y$09$CxTplzJl/WySDgEHBaBcxOJe/MTCHtVRhRQmRuIqZRYDJdM5JThH6'),
(11,	'Willem Dafoe',	'$2y$09$ZMUvVM1Vpci0fs5iFCr5R.XIVYflus/YAHHHh7PGZP4PfhWTRk/vW'),
(12,	'Cactus Jack',	'$2y$09$ktpQmbnnyB6PcXXg4LkoHOQ2heseMfqRtqV7e4NL/56FJWu2xWbf2'),
(13,	'Sony Moore',	'$2y$09$77fKCJnj8c2K4o7uilSARO./2QdAR5ItuGgl5lorA483uFjFpnuB6');