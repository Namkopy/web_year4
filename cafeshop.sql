/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : cafeshop

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 07/03/2020 18:29:42
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_accountlogin
-- ----------------------------
DROP TABLE IF EXISTS `tbl_accountlogin`;
CREATE TABLE `tbl_accountlogin`  (
  `code` int(10) NOT NULL AUTO_INCREMENT,
  `staffcode` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rule` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '1',
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`code`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_accountlogin
-- ----------------------------
INSERT INTO `tbl_accountlogin` VALUES (1, '1', 'admin', 'admin', 'admin', '1', NULL);
INSERT INTO `tbl_accountlogin` VALUES (6, '2', 'sopheap', '123', 'edit', '1', NULL);
INSERT INTO `tbl_accountlogin` VALUES (7, '3', 'sokkim', '123', 'edit', '1', NULL);
INSERT INTO `tbl_accountlogin` VALUES (8, '4', 'vanny', '123', 'save', '1', NULL);
INSERT INTO `tbl_accountlogin` VALUES (9, '5', 'darava', '123', 'save', '1', NULL);
INSERT INTO `tbl_accountlogin` VALUES (10, '6', 'makara', '123', 'save', '1', NULL);

-- ----------------------------
-- Table structure for tbl_booktable
-- ----------------------------
DROP TABLE IF EXISTS `tbl_booktable`;
CREATE TABLE `tbl_booktable`  (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `fristname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lastname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date` date NULL DEFAULT NULL,
  `time` time(0) NULL DEFAULT NULL,
  `phone` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `detail` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`code`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_booktable
-- ----------------------------
INSERT INTO `tbl_booktable` VALUES (1, 'sok', 'dara', '2020-02-16', '13:10:26', '012345654', 'DOB');

-- ----------------------------
-- Table structure for tbl_cafe
-- ----------------------------
DROP TABLE IF EXISTS `tbl_cafe`;
CREATE TABLE `tbl_cafe`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `size` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `detail` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `price` int(10) NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `approveDate` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_cafe
-- ----------------------------
INSERT INTO `tbl_cafe` VALUES (1, ' Caffe Latte', 'M', 'Hot', 'Recipes for lattes vary from shop <br>to shop and country to country', 'caffee_latter.jpg', 2000, '1', '2020-03-03 06:35:27');
INSERT INTO `tbl_cafe` VALUES (2, 'Americano', 'M', 'Hot', 'A pick me up comprised of fresh brewed<br> coffee with hints of chocolate and vanilla.', 'menu-2.jpg', 9000, '1', '2020-03-03 06:35:26');
INSERT INTO `tbl_cafe` VALUES (3, 'cappuccino', 'S', 'Hot', 'A cappuccino is an espresso-based coffee<br>\r\n drink that originated in Italy', 'menu-4.jpg', 8000, '1', '2020-03-03 06:35:29');
INSERT INTO `tbl_cafe` VALUES (4, 'Vannilla latte', 'S', 'Hot', 'To be the best hangout destination <br>around, with a delectable selection <br>of food and beverages.', 'vanilla.jpg', 9500, '0', '2020-03-01 11:19:07');
INSERT INTO `tbl_cafe` VALUES (5, 'caffe mocha', 'S', 'Hot', 'A classic copycat latte recipe from Starbucks ', 'caffe-mocha.jpg', 12000, '0', '2020-03-01 11:18:48');
INSERT INTO `tbl_cafe` VALUES (6, ' Hot Chocolate', 'S', 'Hot', 'from Delish.com is the winter treat ', 'hot.jpg', 10000, '1', '2020-03-03 06:35:30');

-- ----------------------------
-- Table structure for tbl_custbooking
-- ----------------------------
DROP TABLE IF EXISTS `tbl_custbooking`;
CREATE TABLE `tbl_custbooking`  (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `fristname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lestname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `time` varbinary(100) NULL DEFAULT NULL,
  `phone` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `message` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_custbooking
-- ----------------------------
INSERT INTO `tbl_custbooking` VALUES (3, 'enghorng', 'lean', '2/12/2020', 0x31323A3030616D, '016345238', 'Booking table VIP');
INSERT INTO `tbl_custbooking` VALUES (4, 'kopy', 'nam', '2/12/2020', 0x31323A3030616D, '010345238', 'ROOM VPI');
INSERT INTO `tbl_custbooking` VALUES (5, 'ja', 'ta', '3/2/2020', 0x313A3030616D, '09845643', 'Booking Room');
INSERT INTO `tbl_custbooking` VALUES (6, 'ja', 'ta', '', '', '09845643', 'xvgbfddbdf');
INSERT INTO `tbl_custbooking` VALUES (7, 'k', 'd', '2/24/2020', 0x31323A3330616D, '019876534', 'ddd');
INSERT INTO `tbl_custbooking` VALUES (8, 'sok', 'ly', '3/2/2020', 0x313A3030616D, '01929837', 'OK ');

-- ----------------------------
-- Table structure for tbl_drink
-- ----------------------------
DROP TABLE IF EXISTS `tbl_drink`;
CREATE TABLE `tbl_drink`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `detail` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `price` int(10) NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `approveDate` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 53 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_drink
-- ----------------------------
INSERT INTO `tbl_drink` VALUES (47, '7 up', 'Bottles', '7 up Bottle', '7-up-bottle.jpg', 2500, '0', '2020-03-01 11:47:04');
INSERT INTO `tbl_drink` VALUES (48, '7 UP', 'Cans', '7 UP', '7up.jpg', 2000, '1', '2020-03-05 09:48:14');
INSERT INTO `tbl_drink` VALUES (49, 'COCA-COLA', 'Cans', 'Happy new year from Coca-cola', 'cocacola.jpg', 2000, '0', '2020-03-03 06:36:10');
INSERT INTO `tbl_drink` VALUES (50, ' Strawberry Lemonade', 'Bottles', 'Take a look at our delicious <br>Strawberry Lemonade Vodka', 'cooktle.jpg', 20000, '0', '2020-03-03 06:36:11');
INSERT INTO `tbl_drink` VALUES (51, 'Orange Juice', 'Cans', 'Orange juice is a liquid extract<br> of the orange tree fruit,', 'orange-juice.jpg', 5000, '0', '2020-03-03 06:36:11');
INSERT INTO `tbl_drink` VALUES (52, 'Bnana Shake', 'Cans', 'Banana', 'Banana_shake.jpg', 5000, '1', '2020-03-05 09:48:14');

-- ----------------------------
-- Table structure for tbl_food
-- ----------------------------
DROP TABLE IF EXISTS `tbl_food`;
CREATE TABLE `tbl_food`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `detail` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `price` int(10) NULL DEFAULT NULL,
  `approveDate` datetime(0) NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_food
-- ----------------------------
INSERT INTO `tbl_food` VALUES (1, 'Fried rice', 'rice,vegetable', 'rice.jpg', 8000, '2020-02-28 06:14:22', '1');
INSERT INTO `tbl_food` VALUES (2, 'Lok Lak Sach kor', 'Beef Lettuce Wraps', 'lok_lak.jpg', 12000, '2020-03-01 01:43:58', '1');
INSERT INTO `tbl_food` VALUES (3, 'Cambodian Noodles', '\r\nNum Banh Chok | Traditional Noodles <br>From Cambodia | TasteAtlas', 'camboian_nodel.jpg', 5000, '2020-03-01 11:47:19', '1');
INSERT INTO `tbl_food` VALUES (4, 'Amuk', 'Amok is often thought of these<br> days as the Khmer national dish', 'Amuk.jpg', 15000, '2020-03-01 11:47:20', '1');
INSERT INTO `tbl_food` VALUES (5, 'Khmer Cuisine Tours', 'Khmer Cuisine Tours', '7f.jpg', 16000, '0000-00-00 00:00:00', '0');

-- ----------------------------
-- Table structure for tbl_perordercafe
-- ----------------------------
DROP TABLE IF EXISTS `tbl_perordercafe`;
CREATE TABLE `tbl_perordercafe`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `detail` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `size` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `price` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fristname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lastname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Location` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 116 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_perordercafe
-- ----------------------------
INSERT INTO `tbl_perordercafe` VALUES (106, 'cappuccino', 'sxdv fsdxd rgbdxhbd xfnhdrjnd', 'S', 'Hot', 'menu-4.jpg', '1', '8000', 'py', 'py', 'Takéo', '09765346', '', '2020-02-29');
INSERT INTO `tbl_perordercafe` VALUES (113, 'cappuccino', 'sxdv fsdxd rgbdxhbd xfnhdrjnd', 'S', 'Hot', 'menu-4.jpg', '2', '8000', 'aaa', 'bbb', 'Kampong Cham', '0294564', 'sdfkjs@gmail.com', '2020-03-01');
INSERT INTO `tbl_perordercafe` VALUES (114, 'cappuccino', 'sxdv fsdxd rgbdxhbd xfnhdrjnd', 'S', 'Hot', 'menu-4.jpg', '2', '8000', 'aaa', 'bbb', 'Kampong Cham', '0294564', 'sdfkjs@gmail.com', '2020-03-01');
INSERT INTO `tbl_perordercafe` VALUES (115, 'cappuccino', 'sxdv fsdxd rgbdxhbd xfnhdrjnd', 'S', 'Hot', 'menu-4.jpg', '2', '8000', 'aaa', 'bbb', 'Kampong Cham', '0294564', 'sdfkjs@gmail.com', '2020-03-01');

-- ----------------------------
-- Table structure for tbl_perorderdrink
-- ----------------------------
DROP TABLE IF EXISTS `tbl_perorderdrink`;
CREATE TABLE `tbl_perorderdrink`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `detail` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `price` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fristname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lastname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Location` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 118 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_perorderdrink
-- ----------------------------
INSERT INTO `tbl_perorderdrink` VALUES (101, 'ffff', 'oramge', 'Cans', 'orange-juice.jpg', '1', '8000', 'sdfvs', 'sdfvs', 'Kampong Chhnang', '2222', '435r345', '2020-02-29');
INSERT INTO `tbl_perorderdrink` VALUES (114, 'Orange juice', 'oramge', 'Cans', 'orange-juice.jpg', '2', '8000', 'kopy', 'kopy', 'Kampong Cham', '01576879', 'dara@gmail', '2020-03-01');
INSERT INTO `tbl_perorderdrink` VALUES (115, 'sfvsdfv', 'oramge', 'Cans', 'orange-juice.jpg', '2', '8000', 'kkkkkkkkk', 'kkkkkkkkk', 'Kampong Chhnang', '444444', 'kopy@gmail.com', '2020-03-01');
INSERT INTO `tbl_perorderdrink` VALUES (116, 'Bnana Hhake', 'Banana', 'Cans', 'Banana_shake.jpg', '2', '5000', 'f', 'r', 'Kampong Cham', '01823938', 'fdfgd@gmail.com', '2020-03-01');
INSERT INTO `tbl_perorderdrink` VALUES (117, '7 UP', '7 UP', 'Cans', '7up.jpg', '1', '2000', 'da', 'da', 'Kampong Cham', '01923576', '', '2020-03-02');

-- ----------------------------
-- Table structure for tbl_perorderfood
-- ----------------------------
DROP TABLE IF EXISTS `tbl_perorderfood`;
CREATE TABLE `tbl_perorderfood`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `detail` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `price` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fristname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lastname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Location` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 108 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_perorderfood
-- ----------------------------
INSERT INTO `tbl_perorderfood` VALUES (106, 'Fried rice', 'rice,vegetable', 'rice.jpg', '1', '8000', 'dara', 'dara', 'Phnom Penh', '098456345', 'dara@gmail', '2020-02-29');
INSERT INTO `tbl_perorderfood` VALUES (107, 'Fried rice', 'rice,vegetable', 'rice.jpg', '2', '8000', 'dara', 'dara', 'Phnom Penh', '098456345', 'dara@gmail', '2020-02-29');

-- ----------------------------
-- Table structure for tbl_staff
-- ----------------------------
DROP TABLE IF EXISTS `tbl_staff`;
CREATE TABLE `tbl_staff`  (
  `code` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `gender` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `DOB` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  PRIMARY KEY (`code`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_staff
-- ----------------------------
INSERT INTO `tbl_staff` VALUES (1, 'Nam Kopy', 'Male', '03-06-1999', 'CEO', 'KT', 'py.jpg', '1');
INSERT INTO `tbl_staff` VALUES (2, 'Sim Sopheap', 'Male', '09-05-1998', 'Manager', 'KE', 'sopheap.jpg', '1');
INSERT INTO `tbl_staff` VALUES (3, 'Roth Sokkim', 'Male', '28-02-1998', 'Manager', 'KPC', 'sokkim.jpg', '1');
INSERT INTO `tbl_staff` VALUES (4, 'Chnun Vanny', 'Male', '22-08-1998', 'Manager', 'KO', 'vanny.jpg', '1');
INSERT INTO `tbl_staff` VALUES (5, 'Sok Darava', 'Male', '10-30-1998', 'Manager', 'PP', 'darova.jpg', '1');
INSERT INTO `tbl_staff` VALUES (6, 'Sokhoeun Makara', 'Male', '12-10-1998', 'Manager', 'KP', 'makara.PNG', '0');
INSERT INTO `tbl_staff` VALUES (8, 'AA', 'Male', '01-12-2020', 'Staff', 'KPS', 'cooktle.jpg', '0');

-- ----------------------------
-- Table structure for tbl_stock
-- ----------------------------
DROP TABLE IF EXISTS `tbl_stock`;
CREATE TABLE `tbl_stock`  (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `table` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `chair` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `glass` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `plastic_tube` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cafe` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`code`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_stock
-- ----------------------------
INSERT INTO `tbl_stock` VALUES (1, '100', '400', '1000', '1020', '100kg');

-- ----------------------------
-- View structure for v_login
-- ----------------------------
DROP VIEW IF EXISTS `v_login`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_login` AS SELECT tbl_staff.code,tbl_staff.`name`,tbl_accountlogin.Username,tbl_accountlogin.`Password`,tbl_accountlogin.rule, tbl_staff.image,tbl_staff.`status` 
FROM tbl_staff JOIN tbl_accountlogin on  tbl_staff.`code`=tbl_accountlogin.staffcode ;

SET FOREIGN_KEY_CHECKS = 1;
