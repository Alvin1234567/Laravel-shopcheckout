/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : laravel_shopcheckout

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-11-14 21:38:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2017_11_12_224152_create_products_table', '1');
INSERT INTO `migrations` VALUES ('2017_11_13_003043_create_transactions_table', '1');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `currency` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `special_offer` tinyint(1) NOT NULL,
  `special_offer_formula` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `special_offer_description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `hiden` tinyint(1) NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'Apple', 'This is an apple', '0.70', 'AUD', '0', '{\"buy\":2,\"pay\":\"1\"}', 'buy one, get one free on Apples', '2017-11-13 09:14:17', '0', '2017-11-13 09:14:17');
INSERT INTO `products` VALUES ('2', 'Orange', 'This is a Orange', '0.35', 'AUD', '0', '{\"buy\":3,\"pay\":\"2\"}', '3 for the price of 2 on Oranges', '2017-11-13 09:15:17', '0', '2017-11-13 09:15:17');
INSERT INTO `products` VALUES ('3', 'Banan', 'This is a testing product', '1.00', 'AUD', '0', '{\"buy\":2,\"pay\":\"1\"}', 'Testing', '2017-11-13 09:14:17', '1', '2017-11-13 09:14:17');

-- ----------------------------
-- Table structure for `transactions`
-- ----------------------------
DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `special` tinyint(1) NOT NULL,
  `paid_time` datetime NOT NULL,
  `status` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `total_amount` decimal(8,2) NOT NULL,
  `reconciled_id` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of transactions
-- ----------------------------
INSERT INTO `transactions` VALUES ('2', '1', '1', '12', '0', '1', '0000-00-00 00:00:00', '', '0.00', '0', '2017-11-13 05:36:07', '2017-11-13 05:36:07');
INSERT INTO `transactions` VALUES ('3', '1', '2', '12', '0', '0', '0000-00-00 00:00:00', '', '0.00', '0', '2017-11-13 06:50:36', '2017-11-13 06:50:36');
INSERT INTO `transactions` VALUES ('4', '3', '1', '23', '0', '0', '0000-00-00 00:00:00', '', '0.00', '0', '2017-11-13 06:50:53', '2017-11-13 06:50:53');
INSERT INTO `transactions` VALUES ('5', '3', '1', '100', '0', '1', '0000-00-00 00:00:00', '', '0.00', '0', '2017-11-13 07:04:30', '2017-11-13 07:04:30');
INSERT INTO `transactions` VALUES ('6', '1', '1', '90', '0', '0', '0000-00-00 00:00:00', '', '0.00', '0', '2017-11-13 07:28:48', '2017-11-13 07:28:48');
INSERT INTO `transactions` VALUES ('7', '1', '1', '123', '0', '0', '0000-00-00 00:00:00', '', '0.00', '0', '2017-11-13 07:29:07', '2017-11-13 07:29:07');
INSERT INTO `transactions` VALUES ('8', '1', '2', '0', '0', '0', '0000-00-00 00:00:00', '', '0.00', '0', '2017-11-13 09:42:30', '2017-11-13 09:42:30');
INSERT INTO `transactions` VALUES ('9', '3', '2', '9', '0', '0', '0000-00-00 00:00:00', '', '0.00', '0', '2017-11-13 09:50:02', '2017-11-13 09:50:02');
INSERT INTO `transactions` VALUES ('10', '1', '2', '90', '0', '0', '0000-00-00 00:00:00', '', '0.00', '0', '2017-11-13 09:52:09', '2017-11-13 09:52:09');
INSERT INTO `transactions` VALUES ('11', '1', '1', '1', '0', '0', '0000-00-00 00:00:00', '', '0.00', '0', '2017-11-13 09:54:13', '2017-11-13 09:54:13');
INSERT INTO `transactions` VALUES ('12', '1', '1', '8', '0', '0', '0000-00-00 00:00:00', '', '0.00', '0', '2017-11-13 09:55:16', '2017-11-13 09:55:16');
INSERT INTO `transactions` VALUES ('13', '3', '2', '1111', '0', '0', '0000-00-00 00:00:00', '', '0.00', '0', '2017-11-13 09:56:15', '2017-11-13 09:56:15');
INSERT INTO `transactions` VALUES ('14', '2', '2', '11', '0', '0', '0000-00-00 00:00:00', '', '0.00', '0', '2017-11-13 10:05:04', '2017-11-13 10:05:04');
INSERT INTO `transactions` VALUES ('15', '2', '2', '3', '0', '1', '0000-00-00 00:00:00', '', '0.00', '0', '2017-11-13 10:05:50', '2017-11-13 10:05:50');
INSERT INTO `transactions` VALUES ('16', '2', '1', '12', '0', '1', '0000-00-00 00:00:00', '', '0.00', '0', '2017-11-13 23:22:53', '2017-11-13 23:22:53');
INSERT INTO `transactions` VALUES ('17', '2', '3', '123', '0', '1', '0000-00-00 00:00:00', '', '0.00', '0', '2017-11-13 23:52:36', '2017-11-13 23:52:36');
INSERT INTO `transactions` VALUES ('18', '2', '3', '12', '0', '1', '0000-00-00 00:00:00', '', '0.00', '0', '2017-11-13 23:54:16', '2017-11-13 23:54:16');
INSERT INTO `transactions` VALUES ('19', '2', '3', '344', '0', '1', '0000-00-00 00:00:00', '', '0.00', '0', '2017-11-13 23:54:43', '2017-11-13 23:54:43');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Alvin', '', '', null, null, null);
INSERT INTO `users` VALUES ('2', 'TestUser', 'test@example.com', '', null, null, null);
INSERT INTO `users` VALUES ('3', 'admin', 'admin@example.com', '', null, null, null);
