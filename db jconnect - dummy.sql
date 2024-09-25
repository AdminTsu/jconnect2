/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50525
 Source Host           : localhost:3306
 Source Schema         : jconnect

 Target Server Type    : MySQL
 Target Server Version : 50525
 File Encoding         : 65001

 Date: 03/07/2023 10:43:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_mas_acclog
-- ----------------------------
DROP TABLE IF EXISTS `t_mas_acclog`;
CREATE TABLE `t_mas_acclog`  (
  `LOG_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `LOG_USERSS` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `LOG_TIMESS` datetime NULL DEFAULT NULL,
  `LOG_IPADDR` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`LOG_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 650 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mas_acclog
-- ----------------------------
INSERT INTO `t_mas_acclog` VALUES (11, '1342', '2022-03-09 04:18:33', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (12, 'admin', '2022-03-09 04:22:21', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (13, 'admin', '2022-03-09 10:28:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (14, 'admin', '2022-03-09 11:03:35', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (15, 'admin', '2022-03-09 11:11:29', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (16, 'admin', '2022-03-09 11:20:10', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (17, 'admin', '2022-03-09 11:23:04', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (18, 'admin', '2022-03-09 11:26:50', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (19, 'admin', '2022-03-09 11:29:02', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (20, 'admin', '2022-03-09 11:30:04', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (21, 'admin', '2022-03-09 11:32:43', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (22, 'admin', '2022-03-09 11:36:16', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (23, 'admin', '2022-03-09 11:38:58', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (24, 'admin', '2022-03-09 12:00:18', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (25, 'admin', '2022-03-09 12:03:01', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (26, 'admin', '2022-03-09 13:55:01', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (27, 'admin', '2022-03-09 15:39:08', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (28, 'admin', '2022-03-10 09:04:19', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (29, 'superadmin', '2022-03-10 13:40:26', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (30, 'admin', '2022-03-10 13:53:01', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (31, 'superadmin', '2022-03-10 14:29:50', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (32, 'superadmin', '2022-03-11 08:59:47', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (33, 'superadmin', '2022-03-11 09:38:35', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (34, 'superadmin', '2022-03-11 13:40:49', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (35, 'superadmin', '2022-03-15 14:27:32', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (36, 'superadmin', '2022-03-15 15:20:14', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (37, 'superadmin', '2022-03-16 14:28:52', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (38, 'superadmin', '2022-03-17 09:20:39', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (39, 'superadmin', '2022-03-17 14:02:19', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (40, 'superadmin', '2022-03-17 14:37:37', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (41, 'superadmin', '2022-03-17 14:41:07', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (42, 'superadmin', '2022-03-17 14:52:08', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (43, 'superadmin', '2022-03-18 09:02:17', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (44, 'superadmin', '2022-03-21 09:13:06', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (45, 'superadmin', '2022-03-21 15:16:07', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (46, 'superadmin', '2022-03-22 09:12:25', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (47, 'superadmin', '2022-03-22 16:17:10', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (48, 'kiki', '2022-03-22 16:21:29', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (49, 'kiki', '2022-03-22 16:35:02', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (50, 'kiki', '2022-03-22 16:35:48', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (51, 'client', '2022-03-23 09:17:02', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (52, 'superadmin', '2022-03-23 09:28:43', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (53, 'client', '2022-03-23 09:35:37', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (54, 'client', '2022-03-23 15:02:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (55, 'superadmin', '2022-03-23 16:37:45', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (56, 'kiki', '2022-03-23 16:39:19', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (57, 'superadmin', '2022-03-23 16:45:38', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (58, 'superadmin', '2022-03-24 09:11:35', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (59, 'superadmin', '2022-03-24 14:23:42', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (60, 'superadmin', '2022-03-25 10:20:46', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (61, 'superadmin', '2022-03-25 13:23:57', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (62, 'superadmin', '2022-03-28 09:29:56', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (63, 'client', '2022-03-28 16:08:12', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (64, 'superadmin', '2022-03-28 16:28:46', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (65, 'citraindah', '2022-03-28 16:31:19', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (66, 'superadmin', '2022-03-28 16:55:29', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (67, 'citraindah', '2022-03-28 17:02:20', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (68, 'citraindah', '2022-03-29 08:57:17', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (69, 'superadmin', '2022-03-29 09:22:24', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (70, 'test', '2022-03-29 09:53:32', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (71, 'superadmin', '2022-03-29 16:31:17', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (72, 'superadmin', '2022-03-30 09:05:30', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (73, 'superadmin', '2022-03-30 13:43:16', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (74, 'superadmin', '2022-03-30 16:16:00', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (75, 'superadmin', '2022-03-31 09:12:05', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (76, 'superadmin', '2022-04-01 09:49:08', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (77, 'superadmin', '2022-04-01 14:35:40', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (78, 'superadmin', '2022-04-04 08:56:05', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (79, 'superadmin', '2022-04-04 14:22:09', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (80, 'superadmin', '2022-04-05 09:36:35', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (81, 'superadmin', '2022-04-06 08:55:43', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (82, 'superadmin', '2022-04-06 12:46:43', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (83, 'superadmin', '2022-04-06 12:47:35', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (84, 'superadmin', '2022-04-06 13:50:17', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (85, 'superadmin', '2022-04-07 09:14:18', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (86, 'superadmin', '2022-04-08 14:31:26', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (87, 'superadmin', '2022-04-11 09:10:08', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (88, 'superadmin', '2022-04-12 09:01:29', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (89, 'superadmin', '2022-04-12 15:18:30', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (90, 'superadmin', '2022-04-13 15:48:44', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (91, 'superadmin', '2022-04-14 09:07:28', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (92, 'superadmin', '2022-04-19 16:26:14', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (93, 'superadmin', '2022-04-26 09:57:44', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (94, 'superadmin', '2022-04-26 16:37:23', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (95, 'superadmin', '2022-04-28 15:49:00', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (96, 'superadmin', '2022-05-09 15:45:34', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (97, 'superadmin', '2022-05-11 08:56:57', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (98, 'superadmin', '2022-05-13 08:59:44', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (99, 'superadmin', '2022-05-17 08:49:24', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (100, 'superadmin', '2022-05-17 13:59:44', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (101, 'superadmin', '2022-05-18 08:59:56', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (102, 'superadmin', '2022-05-24 09:23:28', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (103, 'superadmin', '2022-05-24 09:36:43', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (104, 'superadmin', '2022-05-24 14:38:58', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (105, 'superadmin', '2022-05-25 13:08:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (106, 'superadmin', '2022-05-25 13:29:53', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (107, 'superadmin', '2022-05-25 13:42:20', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (108, 'superadmin', '2022-05-25 13:44:53', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (109, 'kiki', '2022-05-25 15:37:47', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (110, 'superadmin', '2022-05-26 13:45:56', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (111, 'kiki', '2022-05-27 10:52:38', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (112, 'kiki', '2022-05-27 14:14:34', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (113, 'kiki', '2022-05-30 11:07:28', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (114, 'kiki', '2022-05-30 12:26:02', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (115, 'kiki', '2022-05-30 14:52:13', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (116, 'kiki', '2022-05-30 16:20:47', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (117, 'kiki', '2022-05-30 16:28:53', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (118, 'kiki', '2022-05-31 08:57:32', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (119, 'kiki', '2022-05-31 09:42:06', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (120, 'kiki', '2022-05-31 10:04:58', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (121, NULL, '2022-06-02 11:13:15', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (122, 'kiki', '2022-06-02 11:55:42', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (123, 'kiki', '2022-06-02 13:29:56', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (124, 'kiki', '2022-06-02 13:34:26', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (125, 'rekanan', '2022-06-02 13:58:04', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (126, 'citraindah', '2022-06-02 14:45:11', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (127, 'citraindah', '2022-06-03 09:07:02', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (128, 'citraindah', '2022-06-03 13:28:40', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (129, 'kiki', '2022-06-03 15:49:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (130, 'kiki', '2022-06-06 09:03:33', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (131, 'kiki', '2022-06-07 09:02:33', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (132, 'kiki', '2022-06-08 09:11:00', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (133, 'kiki', '2022-06-09 09:25:06', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (134, 'kiki', '2022-06-09 17:34:15', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (135, 'kiki', '2022-06-10 08:59:16', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (136, 'kiki', '2022-06-10 09:46:13', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (137, 'kiki', '2022-06-10 12:58:51', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (138, 'kiki', '2022-06-10 20:59:33', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (139, 'kiki', '2022-06-13 09:15:03', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (140, 'kiki', '2022-06-14 11:20:20', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (141, 'kiki', '2022-06-14 12:01:05', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (142, 'kiki', '2022-06-14 15:03:11', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (143, 'kiki', '2022-06-15 09:06:59', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (144, 'kiki', '2022-06-15 11:13:23', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (145, 'kiki', '2022-06-15 11:13:47', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (146, 'citraindah', '2022-06-15 16:41:43', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (147, 'citraindah', '2022-06-16 09:13:34', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (148, 'citraindah', '2022-06-17 13:46:21', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (149, 'superadmin', '2022-06-17 13:47:31', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (150, 'kiki', '2022-06-17 14:06:03', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (151, 'kiki', '2022-06-20 08:22:09', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (152, 'kiki', '2022-06-20 13:09:17', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (153, 'kiki', '2022-06-21 09:08:16', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (154, 'kiki', '2022-06-22 08:52:27', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (155, 'citraindah', '2022-06-22 15:18:23', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (156, 'sumberberkah', '2022-06-22 16:12:53', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (157, 'sumberberkah', '2022-06-23 09:02:37', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (158, 'kiki', '2022-06-23 09:43:08', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (159, 'sumberberkah', '2022-06-23 09:54:38', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (160, 'sumberberkah', '2022-06-23 10:34:09', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (161, 'superadmin', '2022-06-23 11:42:58', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (162, 'superadmin', '2022-06-23 15:12:02', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (163, 'superadmin', '2022-06-24 09:06:23', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (164, 'kiki', '2022-06-24 09:59:41', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (165, 'sumberberkah', '2022-06-24 10:23:56', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (166, 'superadmin', '2022-06-24 10:45:10', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (167, 'superadmin', '2022-06-24 14:44:25', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (168, 'kiki', '2022-06-27 09:08:27', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (169, 'kiki', '2022-06-27 09:50:04', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (170, 'superadmin', '2022-07-01 16:00:50', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (171, 'kiki', '2022-07-06 14:57:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (172, 'kiki', '2022-07-07 10:40:57', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (173, 'kiki', '2022-07-13 13:11:43', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (174, 'kiki', '2022-07-13 13:13:47', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (175, 'kiki', '2022-07-14 15:37:10', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (176, 'kiki', '2022-07-15 09:36:56', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (177, 'citraindah', '2022-07-15 10:06:52', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (178, 'kiki', '2022-07-19 13:15:47', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (179, 'citraindah', '2022-07-19 16:39:47', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (180, 'citraindah', '2022-07-20 14:04:05', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (181, 'citraindah', '2022-07-20 14:04:59', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (182, 'citraindah', '2022-07-20 14:07:46', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (183, 'gilbert', '2022-07-20 15:41:07', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (184, 'superadmin', '2022-07-22 08:55:15', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (185, 'superadmin', '2022-07-22 11:05:00', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (186, 'superadmin', '2022-07-22 13:49:16', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (187, 'kiki', '2022-07-22 15:03:44', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (188, 'kiki', '2022-07-25 10:06:29', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (189, 'kiki', '2022-07-25 10:13:51', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (190, 'superadmin', '2022-07-25 10:31:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (191, 'superadmin', '2022-07-25 11:09:18', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (192, 'superadmin', '2022-07-25 11:12:19', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (193, 'superadmin', '2022-07-25 11:14:32', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (194, 'superadmin', '2022-07-25 11:35:16', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (195, 'superadmin', '2022-07-26 16:07:25', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (196, 'superadmin', '2022-07-26 16:07:25', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (197, 'kiki', '2022-07-26 20:57:07', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (198, 'kiki', '2022-07-26 21:00:28', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (199, 'kiki', '2022-07-27 09:25:02', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (200, 'superadmin', '2022-07-27 10:29:12', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (201, 'superadmin', '2022-07-27 13:53:13', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (202, 'superadmin', '2022-07-28 09:26:32', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (203, 'superadmin', '2022-07-28 14:37:06', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (204, 'kiki', '2022-07-29 09:36:19', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (205, 'kiki', '2022-07-29 15:14:33', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (206, 'kiki', '2022-08-03 12:54:02', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (207, 'rekanan', '2022-08-04 09:39:18', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (208, 'superadmin', '2022-08-04 10:38:23', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (209, 'kiki', '2022-08-05 10:58:01', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (210, 'superadmin', '2022-08-05 13:46:37', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (211, 'superadmin', '2022-08-05 17:05:12', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (212, 'kiki', '2022-08-08 14:32:08', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (213, 'kiki', '2022-08-08 16:03:00', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (214, 'superadmin', '2022-08-09 11:05:05', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (215, 'sumberberkah', '2022-08-12 14:29:31', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (216, 'sumberberkah', '2022-08-15 15:12:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (217, 'sumberberkah', '2022-08-16 13:45:37', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (218, 'sumberberkah', '2022-08-16 16:32:06', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (219, 'superadmin', '2022-08-16 16:35:15', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (220, 'superadmin', '2022-08-18 09:12:33', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (221, 'superadmin', '2022-08-18 16:00:19', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (222, 'kiki', '2022-08-19 10:11:19', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (223, 'kiki', '2022-08-24 16:26:45', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (224, 'kemas', '2022-08-25 11:42:45', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (225, 'kiki', '2022-08-26 09:16:47', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (226, 'kemas', '2022-08-26 09:40:21', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (227, 'kiki', '2022-08-26 11:04:55', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (228, 'kemas', '2022-08-29 15:09:14', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (229, 'kemas', '2022-08-29 15:11:00', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (230, 'superadmin', '2022-08-31 19:04:20', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (231, 'superadmin', '2022-09-02 09:25:43', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (232, 'kemas', '2022-09-02 10:32:40', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (233, 'superadmin', '2022-09-04 21:25:22', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (234, 'salsa', '2022-09-08 16:03:51', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (235, 'salsa', '2022-09-08 17:32:15', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (236, 'salsa', '2022-09-09 09:26:33', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (237, 'sdm', '2022-09-09 13:20:48', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (238, 'sdm', '2022-09-09 15:58:15', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (239, 'superadmin', '2022-09-12 11:19:12', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (240, 'superadmin', '2022-09-12 13:40:22', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (241, 'sdm', '2022-09-13 11:16:17', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (242, 'sdm', '2022-09-13 16:34:18', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (243, 'kiki', '2022-09-13 17:49:50', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (244, 'kiki', '2022-09-14 09:20:27', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (245, 'kiki', '2022-09-14 11:04:43', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (246, 'kiki', '2022-09-14 16:01:29', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (247, 'sdm', '2022-09-15 19:01:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (248, 'kiki', '2022-09-16 15:19:27', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (249, 'kiki', '2022-09-16 18:14:20', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (250, 'kiki', '2022-09-19 16:58:07', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (251, 'sdm', '2022-09-19 19:02:31', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (252, 'sdm', '2022-09-20 09:39:55', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (253, 'rara', '2022-09-20 17:24:10', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (254, 'rara', '2022-09-20 17:26:55', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (255, 'rara', '2022-09-20 17:34:14', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (256, 'wingsgroup', '2022-09-21 09:04:43', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (257, 'wingsgroup', '2022-09-21 17:04:58', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (258, 'wingsgroup', '2022-09-21 17:05:54', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (259, 'wingsgroup', '2022-09-21 17:28:58', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (260, 'wingsgroup', '2022-09-21 18:08:02', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (261, 'sdm', '2022-09-21 18:59:46', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (262, 'sdm', '2022-09-22 09:41:18', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (263, 'sdm', '2022-09-22 10:37:21', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (264, 'sdm', '2022-09-22 10:53:57', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (265, 'sdm', '2022-09-22 13:27:38', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (266, 'sdm', '2022-09-22 13:30:13', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (267, 'sdm', '2022-09-22 14:00:55', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (268, 'sdm', '2022-09-22 14:39:55', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (269, 'sdm', '2022-09-22 14:57:39', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (270, 'sdm', '2022-09-22 15:27:56', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (271, 'sdm', '2022-09-22 16:43:02', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (272, 'sdm', '2022-09-23 08:43:22', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (273, 'sdm', '2022-09-23 13:26:43', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (274, 'sdm', '2022-09-23 15:22:13', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (275, 'sdm', '2022-09-23 16:44:09', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (276, 'sdm', '2022-09-23 17:27:16', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (277, 'sdm', '2022-09-24 14:10:04', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (278, 'sdm', '2022-09-24 16:05:34', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (279, 'rara', '2022-09-25 13:15:49', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (280, 'rara', '2022-09-25 14:09:24', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (281, 'rara', '2022-09-26 08:43:42', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (282, 'wingsgroup', '2022-09-26 14:42:09', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (283, 'wingsgroup', '2022-09-26 14:47:10', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (284, 'superadmin', '2022-09-26 16:25:48', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (285, 'wingsgroup', '2022-09-26 17:05:06', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (286, 'wingsgroup', '2022-09-27 08:38:51', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (287, 'wingsgroup', '2022-09-27 08:50:47', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (288, 'wingsgroup', '2022-09-27 10:47:25', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (289, 'wingsgroup', '2022-09-27 11:14:52', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (290, 'wingsgroup', '2022-09-27 13:33:29', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (291, 'wingsgroup', '2022-09-27 14:43:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (292, 'wingsgroup', '2022-09-27 15:48:03', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (293, 'wingsgroup', '2022-09-27 16:40:08', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (294, 'wingsgroup', '2022-09-27 17:47:34', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (295, 'wingsgroup', '2022-09-27 18:35:04', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (296, 'wingsgroup', '2022-09-28 08:34:46', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (297, 'wingsgroup', '2022-09-28 08:36:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (298, 'wingsgroup', '2022-09-28 08:56:10', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (299, 'wingsgroup', '2022-09-28 10:18:28', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (300, 'wingsgroup', '2022-09-28 10:56:22', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (301, 'wingsgroup', '2022-09-28 13:04:38', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (302, 'wingsgroup', '2022-09-28 14:07:03', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (303, 'wingsgroup', '2022-09-28 14:18:34', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (304, 'wingsgroup', '2022-09-28 14:46:11', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (305, 'wingsgroup', '2022-09-28 15:19:24', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (306, 'wingsgroup', '2022-09-28 16:11:45', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (307, 'wingsgroup', '2022-09-29 11:04:07', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (308, 'wingsgroup', '2022-09-29 11:35:04', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (309, 'wingsgroup', '2022-09-29 13:03:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (310, 'wingsgroup', '2022-09-29 14:14:14', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (311, 'wingsgroup', '2022-09-29 15:21:51', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (312, 'wingsgroup', '2022-09-29 15:42:46', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (313, 'wingsgroup', '2022-09-29 15:43:44', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (314, 'wingsgroup', '2022-09-29 17:59:41', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (315, 'wingsgroup', '2022-09-29 18:34:50', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (316, 'wingsgroup', '2022-09-30 09:00:14', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (317, 'wingsgroup', '2022-09-30 09:49:42', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (318, 'wingsgroup', '2022-09-30 13:28:19', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (319, 'wingsgroup', '2022-09-30 14:00:27', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (320, 'wingsgroup', '2022-09-30 15:07:29', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (321, 'wingsgroup', '2022-09-30 15:41:28', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (322, 'wingsgroup', '2022-09-30 18:42:04', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (323, 'superadmin', '2022-10-03 11:21:25', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (324, 'superadmin', '2022-10-03 11:22:16', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (325, 'wingsgroup', '2022-10-03 11:22:33', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (326, 'charissa', '2022-10-03 11:35:17', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (327, 'superadmin', '2022-10-03 11:44:14', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (328, 'superadmin', '2022-10-03 13:10:39', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (329, 'wingsgroup', '2022-10-03 13:11:32', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (330, 'wingsgroup', '2022-10-03 14:08:59', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (331, 'wingsgroup', '2022-10-03 14:28:05', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (332, 'wingsgroup', '2022-10-03 14:59:50', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (333, 'wingsgroup', '2022-10-04 09:14:13', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (334, 'wingsgroup', '2022-10-05 09:45:23', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (335, 'wingsgroup', '2022-10-05 13:17:28', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (336, 'wingsgroup', '2022-10-05 13:54:06', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (337, 'wingsgroup', '2022-10-05 14:12:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (338, 'wingsgroup', '2022-10-05 15:07:04', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (339, 'wingsgroup', '2022-10-05 16:34:33', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (340, 'wingsgroup', '2022-10-06 10:01:50', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (341, 'wingsgroup', '2022-10-06 11:06:28', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (342, 'wingsgroup', '2022-10-06 11:17:34', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (343, 'wingsgroup', '2022-10-06 13:09:22', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (344, 'wingsgroup', '2022-10-06 13:40:44', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (345, 'wingsgroup', '2022-10-06 14:43:53', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (346, 'wingsgroup', '2022-10-06 15:25:01', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (347, 'wingsgroup', '2022-10-06 15:58:17', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (348, 'wingsgroup', '2022-10-07 09:31:19', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (349, 'wingsgroup', '2022-10-07 10:13:58', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (350, 'wingsgroup', '2022-10-07 13:34:56', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (351, 'wingsgroup', '2022-10-07 14:08:15', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (352, 'wingsgroup', '2022-10-07 14:22:40', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (353, 'wingsgroup', '2022-10-07 16:06:20', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (354, 'wingsgroup', '2022-10-07 16:34:56', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (355, 'wingsgroup', '2022-10-10 08:49:45', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (356, 'wingsgroup', '2022-10-10 11:44:47', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (357, 'wingsgroup', '2022-10-10 13:08:21', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (358, 'wingsgroup', '2022-10-10 14:33:13', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (359, 'wingsgroup', '2022-10-10 15:19:46', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (360, 'wingsgroup', '2022-10-10 16:25:13', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (361, 'wingsgroup', '2022-10-10 18:23:53', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (362, 'wingsgroup', '2022-10-11 10:40:44', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (363, 'wingsgroup', '2022-10-11 10:57:09', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (364, 'wingsgroup', '2022-10-11 11:34:31', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (365, 'wingsgroup', '2022-10-12 08:54:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (366, 'wingsgroup', '2022-10-12 10:48:33', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (367, 'wingsgroup', '2022-10-12 11:16:35', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (368, 'wingsgroup', '2022-10-12 13:29:06', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (369, 'wingsgroup', '2022-10-12 15:26:52', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (370, 'wingsgroup', '2022-10-12 16:33:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (371, 'wingsgroup', '2022-10-12 17:08:07', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (372, 'wingsgroup', '2022-10-14 09:00:03', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (373, 'wingsgroup', '2022-10-14 09:31:42', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (374, 'wingsgroup', '2022-10-14 11:06:01', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (375, 'wingsgroup', '2022-10-14 13:11:32', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (376, 'wingsgroup', '2022-10-14 13:27:33', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (377, 'wingsgroup', '2022-10-14 14:14:17', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (378, 'wingsgroup', '2022-10-14 14:45:49', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (379, 'wingsgroup', '2022-10-14 15:27:55', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (380, 'wingsgroup', '2022-10-14 16:17:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (381, 'wingsgroup', '2022-10-14 17:05:04', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (382, 'wingsgroup', '2022-10-14 17:23:10', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (383, 'wingsgroup', '2022-10-17 08:51:13', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (384, 'wingsgroup', '2022-10-17 09:35:51', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (385, 'wingsgroup', '2022-10-17 10:06:04', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (386, 'wingsgroup', '2022-10-17 11:21:01', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (387, 'wingsgroup', '2022-10-17 12:00:28', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (388, 'wingsgroup', '2022-10-17 13:22:24', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (389, 'wingsgroup', '2022-10-17 13:45:50', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (390, 'wingsgroup', '2022-10-17 14:20:23', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (391, 'wingsgroup', '2022-10-17 14:42:37', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (392, 'wingsgroup', '2022-10-17 15:16:43', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (393, 'wingsgroup', '2022-10-17 16:18:46', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (394, 'wingsgroup', '2022-10-18 09:09:43', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (395, 'wingsgroup', '2022-10-18 11:04:43', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (396, 'wingsgroup', '2022-10-18 11:37:32', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (397, 'wingsgroup', '2022-10-18 13:11:48', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (398, 'wingsgroup', '2022-10-18 13:59:23', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (399, 'wingsgroup', '2022-10-18 14:43:00', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (400, 'wingsgroup', '2022-10-18 15:31:01', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (401, 'wingsgroup', '2022-10-18 17:04:06', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (402, 'wingsgroup', '2022-10-19 08:54:37', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (403, 'wingsgroup', '2022-10-19 09:29:22', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (404, 'wingsgroup', '2022-10-19 10:04:27', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (405, 'wingsgroup', '2022-10-19 11:03:46', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (406, 'wingsgroup', '2022-10-19 11:06:43', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (407, 'wingsgroup', '2022-10-19 14:07:15', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (408, 'wingsgroup', '2022-10-19 15:57:10', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (409, 'wingsgroup', '2022-10-19 16:29:45', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (410, 'wingsgroup', '2022-10-19 16:58:27', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (411, 'wingsgroup', '2022-10-19 17:23:46', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (412, 'wingsgroup', '2022-10-20 09:11:26', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (413, 'wingsgroup', '2022-10-20 09:37:01', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (414, 'wingsgroup', '2022-10-20 09:53:58', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (415, 'wingsgroup', '2022-10-20 10:27:55', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (416, 'wingsgroup', '2022-10-20 11:01:31', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (417, 'wingsgroup', '2022-10-20 13:04:13', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (418, 'wingsgroup', '2022-10-20 13:57:51', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (419, 'wingsgroup', '2022-10-20 14:45:03', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (420, 'wingsgroup', '2022-10-20 16:28:44', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (421, 'wingsgroup', '2022-10-21 09:17:06', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (422, 'wingsgroup', '2022-10-21 09:54:49', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (423, 'wingsgroup', '2022-10-21 10:31:06', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (424, 'wingsgroup', '2022-10-21 13:33:21', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (425, 'wingsgroup', '2022-10-21 13:48:50', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (426, 'wingsgroup', '2022-10-24 09:18:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (427, 'wingsgroup', '2022-10-25 09:15:21', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (428, 'wingsgroup', '2022-10-26 14:01:03', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (429, 'wingsgroup', '2022-10-26 14:26:42', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (430, 'wingsgroup', '2022-10-26 14:47:55', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (431, 'wingsgroup', '2022-10-26 15:17:09', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (432, 'wingsgroup', '2022-10-26 16:33:33', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (433, 'wingsgroup', '2022-10-26 16:50:05', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (434, 'wingsgroup', '2022-10-27 09:30:49', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (435, 'wingsgroup', '2022-10-27 11:27:53', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (436, 'wingsgroup', '2022-10-27 13:42:21', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (437, 'wingsgroup', '2022-10-27 14:42:58', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (438, 'wingsgroup', '2022-10-27 15:49:29', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (439, 'wingsgroup', '2022-10-28 09:20:15', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (440, 'wingsgroup', '2022-10-28 15:25:50', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (441, 'wingsgroup', '2022-10-31 11:38:26', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (442, 'wingsgroup', '2022-10-31 13:18:59', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (443, 'wingsgroup', '2022-10-31 13:40:15', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (444, 'wingsgroup', '2022-10-31 14:30:48', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (445, 'wingsgroup', '2022-10-31 14:58:57', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (446, 'wingsgroup', '2022-11-01 09:01:14', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (447, 'wingsgroup', '2022-11-01 09:45:43', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (448, 'wingsgroup', '2022-11-01 15:40:42', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (449, 'wingsgroup', '2022-11-01 16:47:07', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (450, 'wingsgroup', '2022-11-01 17:12:01', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (451, 'wingsgroup', '2022-11-02 08:56:35', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (452, 'wingsgroup', '2022-11-02 13:12:48', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (453, 'wingsgroup', '2022-11-02 14:20:42', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (454, 'wingsgroup', '2022-11-02 15:17:29', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (455, 'wingsgroup', '2022-11-02 16:55:16', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (456, 'wingsgroup', '2022-11-03 08:52:03', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (457, 'wingsgroup', '2022-11-03 09:36:01', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (458, 'wingsgroup', '2022-11-03 10:40:11', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (459, 'wingsgroup', '2022-11-03 13:29:45', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (460, 'wingsgroup', '2022-11-03 14:33:29', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (461, 'wingsgroup', '2022-11-03 15:28:57', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (462, 'wingsgroup', '2022-11-03 17:12:25', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (463, 'wingsgroup', '2022-11-04 08:41:11', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (464, 'wingsgroup', '2022-11-04 09:01:20', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (465, 'wingsgroup', '2022-11-04 09:01:20', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (466, 'wingsgroup', '2022-11-04 09:51:03', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (467, 'wingsgroup', '2022-11-04 11:12:00', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (468, 'wingsgroup', '2022-11-04 13:35:52', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (469, 'wingsgroup', '2022-11-04 13:48:02', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (470, 'wingsgroup', '2022-11-04 15:30:50', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (471, 'wingsgroup', '2022-11-04 15:54:28', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (472, 'wingsgroup', '2022-11-07 09:05:46', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (473, 'wingsgroup', '2022-11-07 09:37:25', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (474, 'wingsgroup', '2022-11-07 10:40:22', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (475, 'wingsgroup', '2022-11-07 11:25:17', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (476, 'wingsgroup', '2022-11-07 13:14:07', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (477, 'wingsgroup', '2022-11-07 15:31:39', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (478, 'wingsgroup', '2022-11-08 08:44:31', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (479, 'wingsgroup', '2022-11-08 09:18:35', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (480, 'wingsgroup', '2022-11-08 10:36:40', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (481, 'wingsgroup', '2022-11-08 11:17:21', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (482, 'wingsgroup', '2022-11-08 13:12:18', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (483, 'wingsgroup', '2022-11-09 13:52:14', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (484, 'wingsgroup', '2022-11-09 14:36:48', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (485, 'wingsgroup', '2022-11-09 15:04:06', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (486, 'wingsgroup', '2022-11-09 15:35:35', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (487, 'wingsgroup', '2022-11-10 08:56:10', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (488, 'wingsgroup', '2022-11-10 09:25:38', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (489, 'wingsgroup', '2022-11-10 10:04:55', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (490, 'wingsgroup', '2022-11-10 11:07:05', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (491, 'wingsgroup', '2022-11-10 13:07:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (492, 'wingsgroup', '2022-11-10 13:58:50', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (493, 'wingsgroup', '2022-11-10 14:28:31', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (494, 'wingsgroup', '2022-11-10 15:47:49', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (495, 'kiki', '2022-11-11 08:51:02', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (496, 'kiki', '2022-11-11 09:25:32', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (497, 'wingsgroup', '2022-11-17 17:05:53', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (498, 'wingsgroup', '2022-11-17 18:41:15', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (499, 'wingsgroup', '2022-11-17 18:57:16', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (500, 'wingsgroup', '2022-11-17 19:59:26', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (501, 'wingsgroup', '2022-11-21 10:44:49', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (502, 'wingsgroup', '2022-11-21 14:47:40', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (503, 'charissa', '2022-11-21 14:54:22', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (504, 'rara', '2022-11-21 14:55:39', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (505, 'rara', '2022-11-21 15:57:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (506, 'rara', '2022-11-22 19:53:04', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (507, 'wingsgroup', '2022-11-22 20:02:56', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (508, 'wingsgroup', '2022-11-23 09:25:30', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (509, 'wingsgroup', '2022-11-23 15:04:00', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (510, 'wingsgroup', '2022-11-23 15:56:33', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (511, 'wingsgroup', '2022-11-23 16:37:04', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (512, 'wingsgroup', '2022-11-23 17:44:25', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (513, 'wingsgroup', '2022-11-24 09:49:38', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (514, 'wingsgroup', '2022-11-24 11:06:24', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (515, 'wingsgroup', '2022-11-24 11:49:21', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (516, 'wingsgroup', '2022-11-24 12:05:51', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (517, 'wingsgroup', '2022-11-24 13:56:31', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (518, 'wingsgroup', '2022-11-24 14:38:01', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (519, 'wingsgroup', '2022-11-24 16:23:14', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (520, 'wingsgroup', '2022-11-24 17:15:17', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (521, 'wingsgroup', '2022-11-24 17:35:20', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (522, 'wingsgroup', '2022-11-25 08:49:15', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (523, 'wingsgroup', '2022-11-25 09:52:33', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (524, 'wingsgroup', '2022-11-25 10:32:02', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (525, 'wingsgroup', '2022-11-25 13:34:27', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (526, 'wingsgroup', '2022-11-25 15:50:28', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (527, 'wingsgroup', '2022-11-25 16:49:46', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (528, 'wingsgroup', '2022-11-25 17:49:37', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (529, 'wingsgroup', '2022-11-25 18:14:12', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (530, 'wingsgroup', '2022-11-28 09:00:44', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (531, 'rara', '2022-11-28 09:33:25', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (532, 'rara', '2022-11-28 10:33:14', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (533, 'rara', '2022-11-28 11:19:50', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (534, 'rara', '2022-11-28 13:03:20', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (535, 'rara', '2022-11-28 15:49:59', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (536, 'rara', '2022-11-28 16:19:37', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (537, 'rara', '2022-11-28 17:04:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (538, 'wingsgroup', '2022-11-30 18:11:56', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (539, 'wingsgroup', '2022-12-01 13:45:34', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (540, 'wingsgroup', '2022-12-01 13:45:34', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (541, 'wingsgroup', '2022-12-01 14:08:31', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (542, 'wingsgroup', '2022-12-02 10:00:21', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (543, 'superadmin', '2022-12-05 15:28:22', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (544, 'wingsgroup', '2022-12-06 17:20:51', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (545, 'superadmin', '2022-12-09 13:47:03', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (546, 'superadmin', '2022-12-09 13:49:00', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (547, 'superadmin', '2022-12-09 14:16:08', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (548, 'superadmin', '2022-12-09 14:40:03', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (549, 'wingsgroup', '2022-12-22 17:21:08', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (550, 'wingsgroup', '2023-01-04 18:02:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (551, 'wingsgroup', '2023-01-04 18:02:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (552, 'wingsgroup', '2023-01-06 16:07:33', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (553, 'wingsgroup', '2023-01-10 11:00:46', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (554, 'wingsgroup', '2023-01-10 16:48:01', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (555, 'wingsgroup', '2023-01-25 16:03:22', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (556, 'wingsgroup', '2023-01-25 16:42:45', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (557, 'superadmin', '2023-03-02 15:41:09', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (558, 'superadmin', '2023-03-15 11:50:26', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (559, 'superadmin', '2023-03-15 17:12:44', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (560, 'superadmin', '2023-03-17 11:06:21', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (561, 'sdm', '2023-03-17 11:09:54', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (562, 'sdm', '2023-03-20 13:53:55', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (563, 'sdm', '2023-03-20 14:14:57', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (564, 'wingsgroup', '2023-03-20 14:18:33', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (565, 'wingsgroup', '2023-03-21 14:11:58', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (566, 'wingsgroup', '2023-03-21 14:28:15', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (567, 'wingsgroup', '2023-03-21 16:27:50', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (568, 'wingsgroup', '2023-03-21 17:24:28', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (569, 'wingsgroup', '2023-03-23 08:38:47', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (570, 'wingsgroup', '2023-03-23 09:18:05', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (571, 'wingsgroup', '2023-03-23 10:10:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (572, 'wingsgroup', '2023-03-23 11:03:59', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (573, 'wingsgroup', '2023-03-23 14:51:53', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (574, 'wingsgroup', '2023-03-23 15:45:07', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (575, 'wingsgroup', '2023-03-23 16:21:18', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (576, 'wingsgroup', '2023-03-24 08:31:33', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (577, 'wingsgroup', '2023-03-24 08:48:45', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (578, 'wingsgroup', '2023-03-24 09:16:04', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (579, 'wingsgroup', '2023-03-24 10:09:46', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (580, 'wingsgroup', '2023-03-24 11:04:40', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (581, 'wingsgroup', '2023-03-24 12:58:25', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (582, 'wingsgroup', '2023-03-24 13:32:56', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (583, 'wingsgroup', '2023-03-24 14:31:49', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (584, 'wingsgroup', '2023-03-24 15:40:58', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (585, 'wingsgroup', '2023-03-24 16:02:59', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (586, 'wingsgroup', '2023-03-24 16:38:40', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (587, 'wingsgroup', '2023-03-27 08:33:15', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (588, 'wingsgroup', '2023-03-27 15:00:18', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (589, 'wingsgroup', '2023-03-27 18:02:14', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (590, 'wingsgroup', '2023-03-28 08:39:07', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (591, 'wingsgroup', '2023-03-28 12:28:06', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (592, 'wingsgroup', '2023-03-28 12:53:56', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (593, 'wingsgroup', '2023-03-28 13:13:34', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (594, 'wingsgroup', '2023-03-28 15:02:47', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (595, 'rara', '2023-03-28 15:12:25', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (596, 'rara', '2023-03-28 15:41:40', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (597, 'rara', '2023-03-28 16:38:00', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (598, 'rara', '2023-03-29 08:56:06', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (599, 'rara', '2023-03-29 09:54:03', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (600, 'rara', '2023-03-29 10:27:13', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (601, 'rara', '2023-03-29 11:40:28', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (602, 'rara', '2023-03-29 11:59:59', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (603, 'rara', '2023-03-29 13:30:48', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (604, 'rara', '2023-03-29 15:46:28', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (605, 'rara', '2023-03-30 09:51:17', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (606, 'rara', '2023-03-30 11:27:21', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (607, 'rara', '2023-03-31 10:59:16', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (608, 'rara', '2023-04-06 09:48:46', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (609, 'rara', '2023-04-06 11:05:18', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (610, 'rara', '2023-04-06 13:49:26', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (611, 'rara', '2023-04-06 14:36:10', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (612, 'rara', '2023-04-06 15:45:07', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (613, 'rara', '2023-04-06 16:39:01', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (614, 'rara', '2023-04-10 08:57:46', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (615, 'rara', '2023-04-10 09:19:56', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (616, 'rara', '2023-04-10 09:54:11', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (617, 'rara', '2023-04-10 13:27:56', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (618, 'rara', '2023-04-13 10:43:17', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (619, 'rara', '2023-04-13 13:12:46', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (620, 'rara', '2023-04-13 14:32:54', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (621, 'rara', '2023-04-13 16:21:45', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (622, 'rara', '2023-04-13 16:43:40', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (623, 'rara', '2023-04-14 08:40:55', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (624, 'rara', '2023-04-14 09:07:09', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (625, 'rara', '2023-04-17 08:48:28', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (626, 'rara', '2023-04-17 09:41:12', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (627, 'rara', '2023-04-17 10:07:08', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (628, 'rara', '2023-04-17 10:39:14', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (629, 'rara', '2023-04-17 12:58:06', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (630, 'rara', '2023-04-18 08:42:52', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (631, 'rara', '2023-04-18 09:39:49', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (632, 'rara', '2023-04-18 11:19:04', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (633, 'rara', '2023-04-18 12:55:14', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (634, 'rara', '2023-04-19 08:42:39', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (635, 'rara', '2023-04-19 10:07:26', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (636, 'rara', '2023-04-19 11:39:49', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (637, 'rara', '2023-04-19 13:20:54', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (638, 'rara', '2023-04-19 14:45:36', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (639, 'rara', '2023-04-19 15:08:27', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (640, 'rara', '2023-04-19 15:44:48', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (641, 'rara', '2023-04-19 16:14:14', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (642, 'rara', '2023-04-20 10:43:12', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (643, 'rara', '2023-04-20 12:56:27', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (644, 'rara', '2023-04-20 14:52:06', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (645, 'rara', '2023-04-20 15:45:04', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (646, 'rara', '2023-04-27 09:50:04', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (647, 'rara', '2023-05-19 10:53:51', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (648, 'rara', '2023-05-19 14:06:33', '127.0.0.1');
INSERT INTO `t_mas_acclog` VALUES (649, 'rara', '2023-06-09 09:53:43', '127.0.0.1');

-- ----------------------------
-- Table structure for t_mas_cityss
-- ----------------------------
DROP TABLE IF EXISTS `t_mas_cityss`;
CREATE TABLE `t_mas_cityss`  (
  `CTY_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `CTY_CONTRY` tinyint(4) NULL DEFAULT NULL,
  `CTY_PROVNC` int(11) NULL DEFAULT NULL,
  `CTY_INTIAL` char(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CTY_NAMESS` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CTY_USRCRT` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CTY_DATCRT` datetime NULL DEFAULT NULL,
  `CTY_USRUPD` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CTY_DATUPD` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`CTY_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mas_cityss
-- ----------------------------
INSERT INTO `t_mas_cityss` VALUES (1, 1, 1, 'BKS', 'BEKASI', NULL, '2022-03-17 11:31:45', NULL, NULL);
INSERT INTO `t_mas_cityss` VALUES (2, 2, 2, 'SAP', 'SAPPORO', NULL, '2022-03-17 11:48:10', NULL, NULL);
INSERT INTO `t_mas_cityss` VALUES (3, 1, 1, 'BDG', 'BANDUNG', NULL, '2022-05-11 10:54:48', NULL, NULL);
INSERT INTO `t_mas_cityss` VALUES (4, 1, 4, 'JKT', 'JAKARTA', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_cityss` VALUES (5, 1, 7, 'TNG', 'TANGERANG', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_cityss` VALUES (6, 1, 1, 'BGR', 'BOGOR', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_cityss` VALUES (7, 1, 6, 'DPK', 'DEPOK', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for t_mas_cityss_jp
-- ----------------------------
DROP TABLE IF EXISTS `t_mas_cityss_jp`;
CREATE TABLE `t_mas_cityss_jp`  (
  `CTY_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `CTY_CONTRY` tinyint(4) NULL DEFAULT NULL,
  `CTY_PROVNC` int(11) NULL DEFAULT NULL,
  `CTY_INTIAL` char(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CTY_NAMESS` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `CTY_USRCRT` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CTY_DATCRT` datetime NULL DEFAULT NULL,
  `CTY_USRUPD` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CTY_DATUPD` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`CTY_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mas_cityss_jp
-- ----------------------------
INSERT INTO `t_mas_cityss_jp` VALUES (1, 1, 1, 'BKS', '西ジャワ', NULL, '2022-03-17 11:31:45', NULL, NULL);
INSERT INTO `t_mas_cityss_jp` VALUES (2, 2, 2, 'SAP', '札幌', NULL, '2022-03-17 11:48:10', NULL, NULL);
INSERT INTO `t_mas_cityss_jp` VALUES (3, 1, 1, 'BDG', 'バンドン', NULL, '2022-05-11 10:54:48', NULL, NULL);
INSERT INTO `t_mas_cityss_jp` VALUES (4, 1, 4, 'JKT', 'ジャカルタ', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_cityss_jp` VALUES (5, 1, 7, 'TNG', 'タンゲラーン', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_cityss_jp` VALUES (6, 1, 1, 'BGR', 'ボゴール', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_cityss_jp` VALUES (7, 1, 6, 'DPK', 'デポック', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for t_mas_client
-- ----------------------------
DROP TABLE IF EXISTS `t_mas_client`;
CREATE TABLE `t_mas_client`  (
  `CLI_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `CLI_LOGNID` int(11) NULL DEFAULT NULL,
  `CLI_NOMORS` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_NAMESS` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_CONTRY` tinyint(4) NULL DEFAULT NULL,
  `CLI_PROVNC` int(11) NULL DEFAULT NULL,
  `CLI_CITYSS` int(11) NULL DEFAULT NULL,
  `CLI_ADDRES` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_ASPECS` int(11) NULL DEFAULT NULL,
  `CLI_BDLAIN` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_DESCRE` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `CLI_PHONES` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_VACNCY` tinyint(4) NULL DEFAULT NULL,
  `CLI_FAXNUM` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_CONTAC` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_MOBILE` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_DTLREQ` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `CLI_WEBSIT` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_LOGOSS` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_ACTIVE` tinyint(4) NULL DEFAULT NULL,
  `CLI_USRCRT` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_DATCRT` datetime NULL DEFAULT NULL,
  `CLI_USRUPD` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_DATUPD` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`CLI_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2674 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mas_client
-- ----------------------------
INSERT INTO `t_mas_client` VALUES (1, 2, 'CLI22-0001', 'PT. KEMAS INDAH MAJU', 1, 8, 16, 'Jl. Rawaterate II No.16\r\nKawasan Industri Pulo Gadung\r\nJakarta Timur, Jakarta 13930\r\nIndonesia', 99, NULL, 'PT KEMAS is a fully integrated Global Beauty Packaging manufacturer with factories located in Indonesia, Taiwan and China, with sales office around the world. Since 1980, Kemas has built itself a reputation for delivering high quality components and service to its customers around the world.', '0214608847', NULL, '0214608846', 'RENY', '0812888000345', NULL, 'kemaspkg.com', 'logo-pt-kemas-indah-maju.png', 1, NULL, '2022-09-04 21:37:47', 'kemas', '2022-09-05 16:13:01');
INSERT INTO `t_mas_client` VALUES (5, 18, 'CLI22-0004', 'PT SINAR SOSRO', 1, 10, 23, 'Gedung Graha Sosro Jl Raya Sultan Agung KM 28, Kel Medan Satria, Bekasi, Jawa Barat 17132', 10, NULL, 'PT Sinar Sosro is the first ready-to-drink bottled tea company in Indonesia and the world.\n\nPT Sinar Sosro is officially registered in July 17, 1974 by Soegiharto Sosrodjojo, located on Jalan Raya Sultan Agung KM. 28, Medan Satria, Bekasi.\n\nIn 1940, Sosrodjojo family started their business in Slawi, Central Java. They produced and sold brewed tea, named Teh Cap Botol.\n\nIn 1960, Soegiharto Sosrodjojo and his relatives moved to Jakarta to establish Sosrodjojo family business and introduced to society in Jakarta.\n\nIn 1965, their effort to introduce Teh Cap Botol was done through “Cicip Rasa” (tasting) strategy, such as visited markets. After then, they brewed tea on the spot. This way however wasn’t very successful. The tea would no longer brewer in the market, yet put in big pans to be brought to the market using pickup car. Again, this way wasn’t successful since most of the tea spilled on the way from the office to the market.', '021888855552', NULL, '021888855553', 'JOJO SAPUTRA', '08551176776', NULL, 'https://sinarsosro.id', 'logo-sinar-sosro.jpg', 1, NULL, '2022-09-06 14:05:09', 'sosro', '2022-09-06 14:12:04');
INSERT INTO `t_mas_client` VALUES (6, 20, 'CLI22-0005', 'PT. ALEXINDO', 1, 10, 23, 'Jl. Raya Bekasi Km. 28.7, Jawa Barat 17124 Indonesia', 10, NULL, 'PT Alexindo is a Major Manufacturer in Indonesia for Aluminium Extrusion Products.\n\nThe company is fully integrated with advanced and self supporting facilities, including Remelting, Dies workshop, Extrusion, Anodizing, Flourocarbon and Powder Coating.\n\nThe total installed production capacity is 27.000 ton’s per annum. The manufacturing plant is equipped with machineries capable of producing 6 series Aluminium Alloy products to meet the Industrial needs as well as residential and high rise buildings.', '0218843460', NULL, '021 8842301', 'INDRI', '0899555666325', NULL, 'https://pt-alexindo.com/', 'logo-alexindo.jpg', 1, NULL, '2022-09-06 14:53:47', 'alexindo', '2022-09-06 15:01:07');
INSERT INTO `t_mas_client` VALUES (7, 22, 'CLI22-0006', 'PT. SUNRISE BUMI TEXTIL', 1, 10, 23, 'Jl. Raya Bekasi Km. 28, BEKASI, West Java 17133, Indonesia', 10, NULL, 'PT. Sunrise Bumi Textiles (Indonesia) is a leading quality yarn manufacturer. About 35 per cent of the company’s products are value-added such as siro spun yarn, lycra core spun yarn, slub yarn, rayon / cotton blended yarn, sewing thread, bamboo 100 per cent, bamboo / cotton, modal / cotton yarn, etc. Sunrise caters to the highly-quality conscious market with exports of about 67 per cent spread across 30 countries in six continents. These include the US, Japan, Korea, Turkey, Italy, Brazil, Argentina, Australia, Belgium, Canada, Egypt, Germany, Greece, Hong Kong as well as in the domestic market in Indonesia. The company has integrated management systems encompassing ISO 9001:2000,ISO 14001:2004, OHSMS Certified by PSB and OEKO-Tex certifications', '021555666398', NULL, '021555666399', 'DONI', '0899555666222', NULL, 'adityabirla.com', 'logo-pt-sunrise-bumi-textiles.jpg', 1, NULL, '2022-09-06 15:53:37', 'sunrise', '2022-09-06 16:03:56');
INSERT INTO `t_mas_client` VALUES (8, 26, 'CLI22-0007', 'PT. SURYA DERMATO MEDICA LABS', 1, 4, 1, 'JL. PASEBAN RAYA NO.21 RT.2/RW.2 PASEBAN, SENEN, KOTA JAKARTA PUSAT DKI JAKARTA 10440', 10, '', 'PT. SURYA DERMATO MEDICA LABORATORIES (PT. SDM) EXECUTIVE LEADERSHIP TEAM IS THE COMPANY’S SENIOR-MOST LEADERSHIP AND DECISION-MAKING MANAGEMENT BODY. IT BRINGS A GOOD SYNERGY TO FOCUS ON MAJOR FINANCIAL, STRATEGIC AND OPERATIONAL DECISIONS FOR THE COMPANY MASTERPLAN.\r\n\r\nPT. SDM HAS 3 DIVISION IN THE HEALTHCARE BUSINESS : ETHICAL PRODUCTS, NON-PRESCRIPTION AND AESTHETIC DERMATOLOGY PRODUCTS. EACH OF THESE BUSINESSES IS LED BY AN EXECUTIVE WITH CLEAR ACCOUNTABILITY FOR RESULTS – FROM PRODUCT DEVELOPMENT FOLLOWING PROOF OF CONCEPT TO PROVIDING ACCESS TO CUSTOMERS AND THROUGH TO THE END OF THE PRODUCT’S LIFE CYCLE. THE BUSINESSES ARE PROVIDED WITH THE RESOURCES TO PURSUE ATTRACTIVE GROWTH OPPORTUNITIES AND TO DELIVER BENEFITS TO ALL WHO RELY ON US AROUND THE WORLD.', '0213162414', NULL, '0213162415', 'ROSI', '0812888666444', NULL, 'https://sdm-labs.com/', 'logo-sdm2.png', 1, NULL, '2022-09-07 08:48:55', 'sdm', '2022-09-09 13:27:17');
INSERT INTO `t_mas_client` VALUES (99, 370, 'CLI22-0014', 'PT. KEMAS INDAH MAJU', 1, 1, 1, 'JL. RAWATERATE II NO.16 KAWASAN INDUSTRI PULO GADUNG JAKARTA TIMUR, JAKARTA 13930 INDONESIA', 99, 'packaging makeup', 'PT KEMAS IS A FULLY INTEGRATED GLOBAL BEAUTY PACKAGING MANUFACTURER WITH FACTORIES LOCATED IN INDONESIA, TAIWAN AND CHINA, WITH SALES OFFICE AROUND THE WORLD. SINCE 1980, KEMAS HAS BUILT ITSELF A REPUTATION FOR DELIVERING HIGH QUALITY COMPONENTS AND SERVI', '0214608847', NULL, '0214608846', 'RENY', '08128888555522', NULL, 'kemas.co.id', 'foto-sandisk.jpg', 1, NULL, '2022-08-25 10:25:00', 'kemas', '2022-08-29 16:09:13');
INSERT INTO `t_mas_client` VALUES (100, 410, 'CLI22-0015', 'PT. SAYAP EMAS UTAMA', 1, 4, 4, 'JL. TIPAR CAKUNG KAV. F 5-7, CAKUNG BARAT, CAKUNG, JAKARTA TIMUR 13910', 10, '', 'WINGS HAS BECOME ONE OF THE MOST TRUSTED NAMES IN INDONESIA. INDONESIAN FAMILIES TURN TO A WIDE RANGE OF HOUSEHOLD PRODUCTS, PERSONAL CARE, FOOD & BEVERAGE, AND EXPECT WINGS TO PROVIDE UNCOMPROMISING QUALITY PRODUCTS. OUR BRANDS HAVE BEEN PASSED DOWN FROM GENERATION TO GENERATION. WITH ITS ADVANCED MANUFACTURING TECHNOLOGIES, WORLD-CLASS FACILITIES AND STRINGENT QUALITY ASSURANCE, WINGS PRODUCTS MEET THE HIGHEST INDUSTRY STANDARDS. BY REMAINING INNOVATIVE AND DELIVERING HIGH-QUALITY PRODUCTS OVER THE COURSE OF MORE THAN 70 YEARS, WINGS HONORS ITS COMMITMENT TO IMPROVE THE DAILY LIVES OF INDONESIAN CONSUMERS AND DEMONSTRATES THE EXTENT TO WHICH THE COMPANY VALUES ITS CUSTOMERS. INNOVATION AND KEEPING UP WITH CHANGING CONSUMER TASTES HAVE ALLOWED WINGS TO REMAIN AT THE FOREFRONT OF THE CONSUMER GOODS MARKET. THE COMPANY HAS EXPANDED ITS RANGE OF PRODUCT PORTFOLIO BY JOINT VENTURES WITH LION JAPAN, GLICO JAPAN AND CALBEE JAPAN. LION WINGS PRODUCES A RANGE OF PRODUCTS UNDER VARIOUS BRANDS SUCH AS CIPTADENT, KODOMO, SYSTEMA, EMERON, SERASOFT, ZINC, MAMA LEMON AND POSH. GLICO WINGS PRODUCES A RANGE OF ICE CREAM UNDER THE BRAND HAKU, WAKU WAKU, FROST BITE AND J-CONE, WHILE CALBEE WINGS PRODUCES A RANGE OF SNACKS UNDER THE POTABEE, KRISBEE AND JAPOTA BRANDS.', '0214602696', NULL, '0214602697', 'SINTA', '0819759351486', NULL, 'wingscorp.com', 'logo---pt-sayap-mas-utama-(wings-group).jpg', 1, NULL, '2022-09-20 17:16:08', 'wingsgroup', '2022-11-23 17:46:16');
INSERT INTO `t_mas_client` VALUES (2147, 411, 'CLI22-0016', 'Sagittis Lobortis Mauris Limit', 1, 10, 23, 'Ap #507-1318 Nec, St.', 10, NULL, NULL, '(842) 259-2999', 1, '1 (496) 965-0550', 'Maldonado', '1606101410299.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2148, 412, 'CLI22-0017', 'Nunc Pulvinar Arcu LLP', 1, 10, 23, '3868 Nunc Street', 10, NULL, NULL, '(177) 152-2760', 1, '1 (473) 873-0051', 'Vasquez', '1651041455799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2149, 413, 'CLI22-0018', 'In Faucibus Orci Foundation', 1, 10, 23, 'Ap #241-3206 Accumsan Road', 10, NULL, NULL, '(452) 976-1033', 1, '1 (784) 273-0624', 'Simpson', '1638010517099.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2150, 414, 'CLI22-0019', 'Ipsum Primis Corporation', 1, 10, 23, 'Ap #363-858 At, Rd.', 10, NULL, NULL, '(153) 565-9985', 1, '1 (338) 332-0824', 'Haney', '1678082620199.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2151, 415, 'CLI22-0020', 'Netus Limited', 1, 10, 23, '663-679 Nunc Ave', 10, NULL, NULL, '(164) 330-9503', 1, '1 (563) 437-3932', 'Medina', '1629050583899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2152, 416, 'CLI22-0021', 'Tellus Lorem Eu Institute', 1, 10, 23, '743-5195 Pharetra Rd.', 10, NULL, NULL, '(323) 965-7192', 1, '1 (613) 687-1680', 'Franklin', '1628081244599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2153, 417, 'CLI22-0022', 'Nam Tempor Inc.', 1, 10, 23, 'P.O. Box 673, 9747 Nec Ave', 10, NULL, NULL, '(969) 617-2256', 1, '1 (577) 607-4522', 'Woods', '1680092344399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2154, 418, 'CLI22-0023', 'Ultrices Ltd', 1, 10, 23, '753-4548 Et, Rd.', 10, NULL, NULL, '(435) 320-7484', 1, '1 (610) 111-5539', 'Vinson', '1639041121599.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2155, 419, 'CLI22-0024', 'Gravida Non Sollicitudin Corpo', 1, 10, 23, 'P.O. Box 323, 6175 Erat. Rd.', 10, NULL, NULL, '(807) 956-1156', 1, '1 (475) 716-9933', 'Britt', '1631110102799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2156, 420, 'CLI22-0025', 'Mauris Aliquam Eu LLP', 1, 10, 23, '5034 Arcu Street', 10, NULL, NULL, '(619) 283-9070', 1, '1 (898) 252-8063', 'Beasley', '1697011049799.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2157, 421, 'CLI22-0026', 'Turpis Industries', 1, 10, 23, 'P.O. Box 775, 6628 Cursus St.', 10, NULL, NULL, '(541) 868-2210', 1, '1 (864) 996-0238', 'Black', '1694101433399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2158, 422, 'CLI22-0027', 'Nunc Associates', 1, 10, 23, 'P.O. Box 995, 984 Convallis, Rd.', 10, NULL, NULL, '(886) 544-0815', 1, '1 (360) 926-5311', 'Elliott', '1635011082699.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2159, 455, 'CLI22-0028', 'Nunc Associates', 1, 10, 23, 'P.O. Box 995, 984 Convallis, Rd.', 10, NULL, NULL, '(886) 544-0815', 1, '1 (360) 926-5311', 'Elliott', '1635011082699.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2160, 423, 'CLI22-0029', 'Ipsum Limited', 1, 10, 23, '1901 Accumsan Avenue', 10, NULL, NULL, '(649) 207-8880', 1, '1 (572) 696-1692', 'Dickson', '1625070320899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2161, 424, 'CLI22-0030', 'Integer In Magna Inc.', 1, 10, 23, '1398 Metus Rd.', 10, NULL, NULL, '(500) 426-9390', 1, '1 (735) 505-9397', 'Ross', '1636070734299.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2162, 425, 'CLI22-0031', 'Donec Sollicitudin Adipiscing ', 1, 10, 23, 'P.O. Box 900, 537 Cubilia Road', 10, NULL, NULL, '(107) 982-4504', 1, '1 (879) 879-1668', 'Chen', '1630100689799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2163, 426, 'CLI22-0032', 'Ac Turpis Egestas Associates', 1, 10, 23, 'P.O. Box 239, 9117 Fringilla Avenue', 10, NULL, NULL, '(823) 506-7173', 1, '1 (120) 769-0704', 'Kerr', '1685060649399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2164, 427, 'CLI22-0033', 'Vivamus Sit Amet Inc.', 1, 10, 23, '603-4206 Pellentesque Rd.', 10, NULL, NULL, '(726) 511-4566', 1, '1 (750) 642-7030', 'Shepard', '1621082202499.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2165, 428, 'CLI22-0034', 'Augue Eu Associates', 1, 10, 23, '557-9589 Urna. Rd.', 10, NULL, NULL, '(947) 574-5613', 1, '1 (948) 955-9166', 'Myers', '1628120327199.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2166, 429, 'CLI22-0035', 'Et Magnis PC', 1, 10, 23, 'Ap #836-4354 Felis St.', 10, NULL, NULL, '(653) 687-0310', 1, '1 (863) 151-7799', 'Stuart', '1622032341199.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2167, 430, 'CLI22-0036', 'Dui Cum Corp.', 1, 10, 23, '787-5393 Ornare Road', 10, NULL, NULL, '(526) 253-8501', 1, '1 (922) 136-6116', 'Lynn', '1654100734299.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2168, 431, 'CLI22-0037', 'Justo Eu Arcu Company', 1, 10, 23, 'Ap #901-7293 Eget Street', 10, NULL, NULL, '(341) 251-2134', 1, '1 (112) 216-7193', 'Lester', '1683022297499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2169, 432, 'CLI22-0038', 'Ac Urna Associates', 1, 10, 23, '8265 Magnis St.', 10, NULL, NULL, '(683) 447-9064', 1, '1 (793) 946-8024', 'Crane', '1687082561699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2170, 433, 'CLI22-0039', 'Pellentesque Sed Corporation', 1, 10, 23, 'P.O. Box 854, 374 Aliquet Street', 10, NULL, NULL, '(899) 129-5137', 1, '1 (828) 400-1206', 'Berry', '1620092521699.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2171, 434, 'CLI22-0040', 'Ullamcorper Magna Sed Limited', 1, 10, 23, '7332 Vitae, Av.', 10, NULL, NULL, '(751) 421-3518', 1, '1 (296) 434-4011', 'Lowe', '1637060355099.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2172, 435, 'CLI22-0041', 'Ac Urna Ut Inc.', 1, 10, 23, 'P.O. Box 797, 6542 Sed Rd.', 10, NULL, NULL, '(246) 302-9377', 1, '1 (909) 384-2953', 'Webster', '1655091839899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2173, 436, 'CLI22-0042', 'Enim Diam Vel LLP', 1, 10, 23, '8091 Habitant St.', 10, NULL, NULL, '(531) 206-7072', 1, '1 (602) 412-3597', 'Ortiz', '1666123093799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2174, 437, 'CLI22-0043', 'Metus Consulting', 1, 10, 23, 'P.O. Box 884, 6287 Diam St.', 10, NULL, NULL, '(734) 635-9104', 1, '1 (913) 419-4160', 'Bean', '1667090172599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2175, 438, 'CLI22-0044', 'Sed Nulla Ante Limited', 1, 10, 23, '814-3532 Purus Av.', 10, NULL, NULL, '(945) 301-3288', 1, '1 (423) 903-8423', 'Solomon', '1641010387599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2176, 439, 'CLI22-0045', 'Ipsum Ac Consulting', 1, 10, 23, 'P.O. Box 271, 2408 Vitae Ave', 10, NULL, NULL, '(503) 854-1563', 1, '1 (856) 596-9605', 'Hogan', '1692111930899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2177, 440, 'CLI22-0046', 'Conubia Institute', 1, 10, 23, '840-708 Lectus St.', 10, NULL, NULL, '(624) 220-1354', 1, '1 (151) 912-1715', 'Townsend', '1633070805799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2178, 441, 'CLI22-0047', 'Ut Ipsum Ac Limited', 1, 10, 23, 'Ap #317-3787 Purus. Avenue', 10, NULL, NULL, '(275) 657-2744', 1, '1 (381) 802-9906', 'Russo', '1627022129999.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2179, 442, 'CLI22-0048', 'Sed Incorporated', 1, 10, 23, '656-2344 Dui. Street', 10, NULL, NULL, '(705) 576-8981', 1, '1 (483) 978-0773', 'Huff', '1642110289599.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2180, 443, 'CLI22-0049', 'Curabitur Corporation', 1, 10, 23, '457-8665 In Ave', 10, NULL, NULL, '(240) 496-0869', 1, '1 (725) 583-0988', 'Holmes', '1667102315799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2181, 444, 'CLI22-0050', 'Morbi Vehicula Inc.', 1, 10, 23, '829-2276 Urna. Rd.', 10, NULL, NULL, '(846) 880-6251', 1, '1 (201) 957-1467', 'Coffey', '1682092392199.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2182, 445, 'CLI22-0051', 'Aliquam Arcu Aliquam LLC', 1, 10, 23, 'Ap #714-2497 Primis St.', 10, NULL, NULL, '(117) 154-6341', 1, '1 (652) 889-4526', 'Potts', '1645120963499.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2183, 446, 'CLI22-0052', 'Aliquam Associates', 1, 10, 23, '6101 Ante. Avenue', 10, NULL, NULL, '(748) 426-0384', 1, '1 (440) 607-2346', 'Robbins', '1621042628499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2184, 447, 'CLI22-0053', 'Diam Pellentesque Habitant Ass', 1, 10, 23, '6741 Tempor, St.', 10, NULL, NULL, '(257) 297-3372', 1, '1 (818) 367-2634', 'Davis', '1616102911799.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2185, 448, 'CLI22-0054', 'A Malesuada Id Inc.', 1, 10, 23, '9385 Et Avenue', 10, NULL, NULL, '(779) 232-5199', 1, '1 (356) 534-7711', 'Walton', '1682100196599.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2186, 449, 'CLI22-0055', 'Scelerisque Neque Sed Incorpor', 1, 10, 23, '237 Commodo Rd.', 10, NULL, NULL, '(186) 233-4053', 1, '1 (708) 518-5889', 'Brown', '1688072528799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2187, 450, 'CLI22-0056', 'Suspendisse Corporation', 1, 10, 23, 'P.O. Box 773, 2523 Justo Av.', 10, NULL, NULL, '(616) 295-1900', 1, '1 (335) 326-5493', 'Strong', '1682011832299.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2188, 451, 'CLI22-0057', 'Ornare Fusce Corp.', 1, 10, 23, '7912 Praesent Rd.', 10, NULL, NULL, '(723) 685-6293', 1, '1 (672) 995-6941', 'Parsons', '1667031516199.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2189, 452, 'CLI22-0058', 'Metus Associates', 1, 10, 23, '4457 Quis Road', 10, NULL, NULL, '(701) 710-2374', 1, '1 (596) 430-3967', 'Dejesus', '1691032497499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2190, 453, 'CLI22-0059', 'Lacus Quisque Imperdiet Founda', 1, 10, 23, 'P.O. Box 173, 5045 Duis Avenue', 10, NULL, NULL, '(617) 528-9233', 1, '1 (315) 254-9696', 'Hawkins', '1676040288399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2191, 454, 'CLI22-0060', 'Nec Ligula Consectetuer Inc.', 1, 10, 23, 'P.O. Box 653, 5234 A Street', 10, NULL, NULL, '(106) 673-8149', 1, '1 (518) 640-9925', 'Morales', '1677101723699.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2192, 422, 'CLI22-0061', 'Nunc Associates', 1, 10, 23, '916-3453 Cursus Road', 10, NULL, NULL, '(463) 971-8208', 1, '1 (544) 705-3234', 'Rodgers', '1614072599499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2193, 455, 'CLI22-0062', 'Nunc Associates', 1, 10, 23, '916-3453 Cursus Road', 10, NULL, NULL, '(463) 971-8208', 1, '1 (544) 705-3234', 'Rodgers', '1614072599499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2194, 456, 'CLI22-0063', 'Dictum Phasellus Limited', 1, 10, 23, 'Ap #142-6240 Sed Street', 10, NULL, NULL, '(143) 126-5318', 1, '1 (216) 670-6472', 'Morin', '1685071287799.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2195, 457, 'CLI22-0064', 'Ornare Facilisis Corp.', 1, 10, 23, 'Ap #410-7223 Vel, Avenue', 10, NULL, NULL, '(263) 332-8441', 1, '1 (773) 152-7813', 'Whitney', '1682021196799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2196, 458, 'CLI22-0065', 'Rutrum Lorem Ac Foundation', 1, 10, 23, 'Ap #938-6661 Eu, Ave', 10, NULL, NULL, '(290) 522-3021', 1, '1 (571) 325-1853', 'Fleming', '1653041322899.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2197, 459, 'CLI22-0066', 'Mauris Sagittis Placerat Found', 1, 10, 23, '8178 Sociis Ave', 10, NULL, NULL, '(156) 410-4169', 1, '1 (288) 486-9195', 'Frazier', '1665110641499.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2198, 460, 'CLI22-0067', 'Nunc Company', 1, 10, 23, 'P.O. Box 905, 8246 Nec Rd.', 10, NULL, NULL, '(264) 907-3605', 1, '1 (348) 618-1548', 'Bowen', '1682041880099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2199, 780, 'CLI22-0068', 'Nunc Company', 1, 10, 23, 'P.O. Box 905, 8246 Nec Rd.', 10, NULL, NULL, '(264) 907-3605', 1, '1 (348) 618-1548', 'Bowen', '1682041880099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2200, 461, 'CLI22-0069', 'Lorem Ipsum Dolor Ltd', 1, 10, 23, '8705 Dui St.', 10, NULL, NULL, '(404) 313-7320', 1, '1 (610) 125-2435', 'Mathis', '1635061455999.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2201, 462, 'CLI22-0070', 'Elit Sed Industries', 1, 10, 23, 'P.O. Box 280, 3519 Hendrerit Road', 10, NULL, NULL, '(650) 484-5359', 1, '1 (352) 796-4910', 'Walker', '1675062390299.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2202, 463, 'CLI22-0071', 'Sed Neque Foundation', 1, 10, 23, '9097 Donec St.', 10, NULL, NULL, '(918) 332-8744', 1, '1 (630) 663-1885', 'Goodwin', '1601093015899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2203, 464, 'CLI22-0072', 'Ridiculus Mus Foundation', 1, 10, 23, '2012 Lobortis Rd.', 10, NULL, NULL, '(553) 112-5786', 1, '1 (994) 655-3493', 'Copeland', '1607070295499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2204, 465, 'CLI22-0073', 'Posuere Limited', 1, 10, 23, '532 Sapien, Road', 10, NULL, NULL, '(262) 825-3244', 1, '1 (503) 743-9719', 'Bright', '1631070215099.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2205, 466, 'CLI22-0074', 'Adipiscing Fringilla Porttitor', 1, 10, 23, '131-2402 Pede. Avenue', 10, NULL, NULL, '(606) 739-8287', 1, '1 (562) 432-9255', 'Bowers', '1693090735599.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2206, 467, 'CLI22-0075', 'Sed Dui Fusce Corporation', 1, 10, 23, '3438 Et Road', 10, NULL, NULL, '(195) 127-2279', 1, '1 (128) 192-7874', 'Castillo', '1624081939199.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2207, 468, 'CLI22-0076', 'Sodales Purus In Incorporated', 1, 10, 23, '8188 Ipsum. Av.', 10, NULL, NULL, '(121) 787-0001', 1, '1 (795) 155-9732', 'Deleon', '1630050727899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2208, 469, 'CLI22-0077', 'Tincidunt Orci Quis PC', 1, 10, 23, 'P.O. Box 724, 5147 Malesuada Road', 10, NULL, NULL, '(750) 791-0941', 1, '1 (808) 563-1807', 'Maynard', '1690072579799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2209, 470, 'CLI22-0078', 'Eu Erat Incorporated', 1, 10, 23, 'P.O. Box 109, 1878 Purus Street', 10, NULL, NULL, '(651) 166-0232', 1, '1 (687) 143-4446', 'Sampson', '1674011135399.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2210, 471, 'CLI22-0079', 'Sit Amet Corp.', 1, 10, 23, '1299 Gravida St.', 10, NULL, NULL, '(865) 320-4588', 1, '1 (780) 490-4207', 'Coffey', '1614010957199.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2211, 472, 'CLI22-0080', 'Fermentum Arcu Vestibulum Cons', 1, 10, 23, 'P.O. Box 473, 2963 Sapien. St.', 10, NULL, NULL, '(807) 919-5019', 1, '1 (266) 436-2375', 'Tate', '1621072577399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2212, 473, 'CLI22-0081', 'Cras Pellentesque Sed Incorpor', 1, 10, 23, '2928 Arcu Street', 10, NULL, NULL, '(786) 492-0806', 1, '1 (921) 559-4703', 'Bradshaw', '1679031481499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2213, 474, 'CLI22-0082', 'At Iaculis Quis Incorporated', 1, 10, 23, 'Ap #291-9084 Convallis Rd.', 10, NULL, NULL, '(855) 617-4271', 1, '1 (682) 768-2465', 'Shaw', '1632063046399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2214, 475, 'CLI22-0083', 'Diam Nunc Industries', 1, 10, 23, '7133 Eget Rd.', 10, NULL, NULL, '(796) 609-6379', 1, '1 (564) 242-8287', 'Gordon', '1682011176799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2215, 476, 'CLI22-0084', 'Nullam Scelerisque Neque Ltd', 1, 10, 23, '401-5533 Etiam Street', 10, NULL, NULL, '(353) 662-0760', 1, '1 (101) 114-4073', 'Burks', '1640080420299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2216, 477, 'CLI22-0085', 'Mus Aenean Eget Consulting', 1, 10, 23, 'Ap #757-1585 Donec Ave', 10, NULL, NULL, '(472) 686-0690', 1, '1 (983) 670-9513', 'Pitts', '1634122048399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2217, 478, 'CLI22-0086', 'Lectus Quis LLP', 1, 10, 23, '571-2711 Viverra. Rd.', 10, NULL, NULL, '(164) 295-3141', 1, '1 (792) 241-3970', 'Mclean', '1614123042199.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2218, 479, 'CLI22-0087', 'Cursus Integer Mollis LLP', 1, 10, 23, '582-1226 Augue, Avenue', 10, NULL, NULL, '(995) 171-8002', 1, '1 (867) 475-0026', 'Gill', '1699050604899.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2219, 480, 'CLI22-0088', 'Malesuada Augue Limited', 1, 10, 23, 'Ap #570-8270 Sed, St.', 10, NULL, NULL, '(896) 979-9877', 1, '1 (355) 642-7225', 'Brennan', '1653030864999.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2220, 481, 'CLI22-0089', 'Donec Consectetuer Industries', 1, 10, 23, '158-7353 Risus Road', 10, NULL, NULL, '(774) 964-9247', 1, '1 (815) 532-0146', 'Hudson', '1665032461799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2221, 482, 'CLI22-0090', 'Nunc Laoreet Lectus Corporatio', 1, 10, 23, '1224 Montes, Rd.', 10, NULL, NULL, '(461) 851-9539', 1, '1 (467) 963-7959', 'Mccray', '1646092370999.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2222, 483, 'CLI22-0091', 'Ultrices Iaculis Odio Corporat', 1, 10, 23, '687-4732 Enim St.', 10, NULL, NULL, '(383) 256-2026', 1, '1 (402) 294-9790', 'Gutierrez', '1647052239899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2223, 484, 'CLI22-0092', 'Non Institute', 1, 10, 23, 'P.O. Box 720, 4758 Mi Rd.', 10, NULL, NULL, '(310) 985-9567', 1, '1 (304) 536-2978', 'Johnson', '1668061917099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2224, 485, 'CLI22-0093', 'Nec Incorporated', 1, 10, 23, '4907 Auctor Street', 10, NULL, NULL, '(774) 894-8191', 1, '1 (512) 457-1866', 'Dickerson', '1611123071099.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2225, 803, 'CLI22-0094', 'Nec Incorporated', 1, 10, 23, '4907 Auctor Street', 10, NULL, NULL, '(774) 894-8191', 1, '1 (512) 457-1866', 'Dickerson', '1611123071099.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2226, 486, 'CLI22-0095', 'Enim Nec Tempus PC', 1, 10, 23, '849-2247 In Avenue', 10, NULL, NULL, '(672) 931-3575', 1, '1 (396) 515-5033', 'Roy', '1632010763999.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2227, 487, 'CLI22-0096', 'Nonummy Ac Institute', 1, 10, 23, 'Ap #696-5200 Curabitur Rd.', 10, NULL, NULL, '(944) 840-0397', 1, '1 (329) 279-3983', 'Arnold', '1688080960899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2228, 488, 'CLI22-0097', 'Urna Suscipit Nonummy Incorpor', 1, 10, 23, '417-6521 Id, Avenue', 10, NULL, NULL, '(268) 547-5336', 1, '1 (230) 276-1106', 'Mcmahon', '1671120533499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2229, 489, 'CLI22-0098', 'Ante PC', 1, 10, 23, 'P.O. Box 859, 364 Fringilla Road', 10, NULL, NULL, '(309) 592-0433', 1, '1 (204) 260-8176', 'Bartlett', '1638111417099.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2230, 490, 'CLI22-0099', 'Orci Adipiscing Non Inc.', 1, 10, 23, '8484 Nam Rd.', 10, NULL, NULL, '(400) 199-5880', 1, '1 (714) 528-7236', 'Tyson', '1640011430799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2231, 491, 'CLI22-0100', 'Luctus Et LLP', 1, 10, 23, '229-9977 Ac Road', 10, NULL, NULL, '(737) 934-2503', 1, '1 (991) 467-6703', 'Castillo', '1670011615199.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2232, 492, 'CLI22-0101', 'Sapien Nunc Pulvinar Foundatio', 1, 10, 23, '828 Mauris Av.', 10, NULL, NULL, '(769) 626-6135', 1, '1 (448) 210-5493', 'Holman', '1693053060899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2233, 493, 'CLI22-0102', 'At Arcu Incorporated', 1, 10, 23, 'P.O. Box 451, 6077 Semper Rd.', 10, NULL, NULL, '(261) 138-3139', 1, '1 (923) 228-1755', 'Daniel', '1635012225999.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2234, 494, 'CLI22-0103', 'Morbi Vehicula Pellentesque Co', 1, 10, 23, '585-628 Sit St.', 10, NULL, NULL, '(586) 876-2344', 1, '1 (203) 126-2750', 'Ayers', '1690022827799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2235, 495, 'CLI22-0104', 'Consequat Incorporated', 1, 10, 23, '874-9475 Nulla. Ave', 10, NULL, NULL, '(884) 770-3316', 1, '1 (513) 748-8671', 'Watkins', '1684122815399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2236, 496, 'CLI22-0105', 'Egestas A Dui Industries', 1, 10, 23, 'P.O. Box 976, 4604 Semper. Road', 10, NULL, NULL, '(903) 893-0671', 1, '1 (593) 655-0044', 'Baird', '1698103075599.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2237, 497, 'CLI22-0106', 'At Pede LLP', 1, 10, 23, '3079 Nunc Ave', 10, NULL, NULL, '(815) 646-7563', 1, '1 (488) 249-6349', 'Stanley', '1640031351199.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2238, 498, 'CLI22-0107', 'Felis Ullamcorper Viverra LLP', 1, 10, 23, '3237 Diam. Ave', 10, NULL, NULL, '(198) 609-1839', 1, '1 (367) 214-6488', 'Pace', '1698012513599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2239, 499, 'CLI22-0108', 'Vel Faucibus Id Associates', 1, 10, 23, 'P.O. Box 585, 9599 Odio. St.', 10, NULL, NULL, '(531) 284-4183', 1, '1 (954) 843-4742', 'Leonard', '1641121521599.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2240, 500, 'CLI22-0109', 'Quam Institute', 1, 10, 23, 'P.O. Box 263, 3543 Nisi. Ave', 10, NULL, NULL, '(256) 755-0264', 1, '1 (882) 211-1061', 'Byrd', '1607082639999.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2241, 757, 'CLI22-0110', 'Quam Institute', 1, 10, 23, 'P.O. Box 263, 3543 Nisi. Ave', 10, NULL, NULL, '(256) 755-0264', 1, '1 (882) 211-1061', 'Byrd', '1607082639999.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2242, 501, 'CLI22-0111', 'Elit Corp.', 1, 10, 23, 'Ap #902-5513 Ut Rd.', 10, NULL, NULL, '(216) 798-1878', 1, '1 (790) 711-9394', 'Vasquez', '1698032474899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2243, 502, 'CLI22-0112', 'Imperdiet Ornare LLC', 1, 10, 23, 'P.O. Box 531, 8178 Pretium Rd.', 10, NULL, NULL, '(185) 334-3616', 1, '1 (898) 952-1586', 'Wallace', '1603112369799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2244, 503, 'CLI22-0113', 'Etiam Corp.', 1, 10, 23, '6487 Phasellus Avenue', 10, NULL, NULL, '(737) 776-4081', 1, '1 (194) 817-0154', 'Melendez', '1634102548999.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2245, 504, 'CLI22-0114', 'Non Arcu Consulting', 1, 10, 23, 'P.O. Box 565, 755 Ornare. Av.', 10, NULL, NULL, '(560) 195-7584', 1, '1 (532) 118-7465', 'Wolf', '1620082572599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2246, 505, 'CLI22-0115', 'Id Enim LLP', 1, 10, 23, 'Ap #767-2273 Nunc Road', 10, NULL, NULL, '(171) 528-7221', 1, '1 (507) 582-0606', 'Workman', '1657082799199.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2247, 506, 'CLI22-0116', 'Faucibus Orci Luctus Industrie', 1, 10, 23, 'Ap #270-7198 Nam St.', 10, NULL, NULL, '(247) 876-7366', 1, '1 (104) 222-3458', 'Clayton', '1684082576899.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2248, 507, 'CLI22-0117', 'At Pretium Aliquet Associates', 1, 10, 23, '924 Commodo Av.', 10, NULL, NULL, '(928) 563-8622', 1, '1 (651) 784-5575', 'Schultz', '1682010174099.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2249, 508, 'CLI22-0118', 'Consectetuer Adipiscing Elit L', 1, 10, 23, '8899 Aliquam Street', 10, NULL, NULL, '(322) 426-9033', 1, '1 (732) 382-2815', 'Ingram', '1621102050899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2250, 509, 'CLI22-0119', 'Eu Consulting', 1, 10, 23, 'Ap #439-477 Integer Rd.', 10, NULL, NULL, '(247) 417-4455', 1, '1 (363) 497-0840', 'Waller', '1616023013999.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2251, 510, 'CLI22-0120', 'Mauris Foundation', 1, 10, 23, 'P.O. Box 729, 2467 Tortor. Rd.', 10, NULL, NULL, '(696) 379-0572', 1, '1 (407) 454-6193', 'Pratt', '1628112386499.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2252, 511, 'CLI22-0121', 'Iaculis Consulting', 1, 10, 23, '4658 Purus. St.', 10, NULL, NULL, '(663) 143-2600', 1, '1 (384) 250-0724', 'Wagner', '1687022926799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2253, 512, 'CLI22-0122', 'Lectus Corporation', 1, 10, 23, 'Ap #770-9246 Vestibulum Avenue', 10, NULL, NULL, '(863) 904-6669', 1, '1 (825) 301-7769', 'Hampton', '1643021630299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2254, 513, 'CLI22-0123', 'Aliquam Nisl Company', 1, 10, 23, 'P.O. Box 564, 3523 Purus Avenue', 10, NULL, NULL, '(733) 949-3924', 1, '1 (264) 224-1389', 'Wong', '1694041322199.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2255, 514, 'CLI22-0124', 'Sodales Ltd', 1, 10, 23, '197 Dictum Street', 10, NULL, NULL, '(108) 462-8663', 1, '1 (152) 489-2176', 'Ratliff', '1677032798699.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2256, 515, 'CLI22-0125', 'Scelerisque Incorporated', 1, 10, 23, 'P.O. Box 379, 6853 Ipsum Rd.', 10, NULL, NULL, '(570) 696-7938', 1, '1 (401) 698-4562', 'Mathews', '1670010509499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2257, 516, 'CLI22-0126', 'Facilisis Suspendisse Commodo ', 1, 10, 23, '5971 Condimentum. St.', 10, NULL, NULL, '(102) 184-2575', 1, '1 (311) 243-0059', 'Solomon', '1625080372399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2258, 517, 'CLI22-0127', 'Quis Ltd', 1, 10, 23, 'Ap #477-9874 Morbi Rd.', 10, NULL, NULL, '(976) 128-5789', 1, '1 (359) 978-6196', 'Head', '1694101237299.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2259, 518, 'CLI22-0128', 'Mollis Dui In Inc.', 1, 10, 23, 'Ap #563-9145 Mi Av.', 10, NULL, NULL, '(529) 967-8439', 1, '1 (937) 118-5056', 'Zimmerman', '1664021957399.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2260, 519, 'CLI22-0129', 'Mauris Aliquam Eu LLC', 1, 10, 23, '422-4430 Tortor. Ave', 10, NULL, NULL, '(313) 487-6272', 1, '1 (968) 316-7110', 'Pratt', '1685052332099.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2261, 520, 'CLI22-0130', 'Urna Justo Associates', 1, 10, 23, 'Ap #936-642 Tellus. St.', 10, NULL, NULL, '(206) 625-3304', 1, '1 (170) 356-2257', 'Valenzuela', '1699101794899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2262, 521, 'CLI22-0131', 'Varius Associates', 1, 10, 23, '563-3569 Eros. Ave', 10, NULL, NULL, '(157) 224-6353', 1, '1 (138) 403-5336', 'Gillespie', '1665030555299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2263, 522, 'CLI22-0132', 'Leo In Institute', 1, 10, 23, '3465 Ante Ave', 10, NULL, NULL, '(567) 555-0854', 1, '1 (237) 840-0511', 'Singleton', '1664052189599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2264, 523, 'CLI22-0133', 'Phasellus Libero Company', 1, 10, 23, '6686 Sem Rd.', 10, NULL, NULL, '(589) 945-8123', 1, '1 (557) 522-3564', 'Cunningham', '1627110888899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2265, 524, 'CLI22-0134', 'Augue LLP', 1, 10, 23, '841-3333 Mi Rd.', 10, NULL, NULL, '(475) 280-8662', 1, '1 (148) 161-2639', 'Watson', '1643021724999.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2266, 525, 'CLI22-0135', 'Et LLP', 1, 10, 23, 'Ap #226-4080 Semper Street', 10, NULL, NULL, '(704) 950-5675', 1, '1 (233) 231-6345', 'Wheeler', '1644122731899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2267, 526, 'CLI22-0136', 'Ac Orci Ut PC', 1, 10, 23, 'Ap #740-9056 Cras Av.', 10, NULL, NULL, '(737) 532-2884', 1, '1 (891) 142-6642', 'Bridges', '1654091871899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2268, 527, 'CLI22-0137', 'Ipsum Leo Elementum Institute', 1, 10, 23, 'P.O. Box 798, 4744 Imperdiet Avenue', 10, NULL, NULL, '(743) 624-0856', 1, '1 (650) 555-0188', 'Mann', '1633101234299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2269, 528, 'CLI22-0138', 'Sed Molestie Company', 1, 10, 23, 'P.O. Box 889, 9584 Interdum. Road', 10, NULL, NULL, '(609) 974-7458', 1, '1 (374) 549-3704', 'Cruz', '1638032947099.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2270, 529, 'CLI22-0139', 'Id Blandit At PC', 1, 10, 23, 'P.O. Box 459, 3040 Tortor St.', 10, NULL, NULL, '(867) 828-6021', 1, '1 (491) 351-8820', 'Navarro', '1683010417199.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2271, 530, 'CLI22-0140', 'Erat Nonummy Corp.', 1, 10, 23, '6336 Risus. St.', 10, NULL, NULL, '(285) 909-0287', 1, '1 (324) 239-1091', 'Juarez', '1684012199299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2272, 531, 'CLI22-0141', 'Fringilla Associates', 1, 10, 23, '871-3335 Sed St.', 10, NULL, NULL, '(756) 370-0251', 1, '1 (578) 756-5520', 'Schmidt', '1654121851699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2273, 532, 'CLI22-0142', 'Fermentum Industries', 1, 10, 23, '681-7245 Conubia St.', 10, NULL, NULL, '(122) 975-0948', 1, '1 (161) 924-3083', 'Weaver', '1664102007899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2274, 533, 'CLI22-0143', 'A Consulting', 1, 10, 23, 'P.O. Box 183, 1912 Laoreet Rd.', 10, NULL, NULL, '(756) 332-0254', 1, '1 (428) 445-8950', 'Jones', '1696041045999.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2275, 534, 'CLI22-0144', 'Ullamcorper Inc.', 1, 10, 23, 'Ap #322-5117 Lorem Ave', 10, NULL, NULL, '(803) 886-9473', 1, '1 (185) 130-8445', 'Gonzalez', '1611091117299.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2276, 535, 'CLI22-0145', 'Integer Urna Company', 1, 10, 23, 'Ap #348-5991 Sed St.', 10, NULL, NULL, '(460) 630-8910', 1, '1 (352) 243-1666', 'Gibson', '1692110745599.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2277, 536, 'CLI22-0146', 'Dui Associates', 1, 10, 23, 'Ap #670-3524 Morbi Rd.', 10, NULL, NULL, '(120) 799-2462', 1, '1 (937) 731-2938', 'Sampson', '1649060301799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2278, 537, 'CLI22-0147', 'A Scelerisque Sed Company', 1, 10, 23, 'Ap #786-5382 Nunc Road', 10, NULL, NULL, '(724) 907-8794', 1, '1 (698) 431-8945', 'Hayden', '1618092303899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2279, 538, 'CLI22-0148', 'Eu Eros Nam Inc.', 1, 10, 23, '9742 Dis St.', 10, NULL, NULL, '(105) 692-5060', 1, '1 (968) 419-3929', 'Jennings', '1636112524799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2280, 539, 'CLI22-0149', 'Pede LLP', 1, 10, 23, 'P.O. Box 948, 9456 Odio, St.', 10, NULL, NULL, '(814) 721-2207', 1, '1 (997) 842-6894', 'Mills', '1654112473499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2281, 722, 'CLI22-0150', 'Pede LLP', 1, 10, 23, 'P.O. Box 948, 9456 Odio, St.', 10, NULL, NULL, '(814) 721-2207', 1, '1 (997) 842-6894', 'Mills', '1654112473499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2282, 540, 'CLI22-0151', 'Non Cursus Non LLC', 1, 10, 23, '3281 Mauris Road', 10, NULL, NULL, '(325) 625-7663', 1, '1 (477) 698-1868', 'Leach', '1689032013999.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2283, 541, 'CLI22-0152', 'Nonummy Incorporated', 1, 10, 23, '456-1439 Bibendum. Ave', 10, NULL, NULL, '(258) 287-3029', 1, '1 (176) 328-6668', 'Bartlett', '1605040804599.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2284, 542, 'CLI22-0153', 'Eu Elit Institute', 1, 10, 23, '964-6149 Et Rd.', 10, NULL, NULL, '(447) 182-5452', 1, '1 (837) 818-5952', 'Lambert', '1679041989999.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2285, 543, 'CLI22-0154', 'Semper Industries', 1, 10, 23, 'P.O. Box 229, 7001 Ullamcorper, Ave', 10, NULL, NULL, '(966) 825-7027', 1, '1 (349) 683-6202', 'Castaneda', '1669011525399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2286, 544, 'CLI22-0155', 'Dui Suspendisse Ac Institute', 1, 10, 23, 'P.O. Box 194, 2819 Mi St.', 10, NULL, NULL, '(119) 940-1056', 1, '1 (652) 486-5453', 'Beasley', '1625050681799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2287, 545, 'CLI22-0156', 'Penatibus Company', 1, 10, 23, '496-6430 Tincidunt Ave', 10, NULL, NULL, '(460) 246-8479', 1, '1 (637) 328-8974', 'Ayala', '1601050973399.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2288, 546, 'CLI22-0157', 'Molestie Sodales Limited', 1, 10, 23, 'P.O. Box 876, 4573 Est Ave', 10, NULL, NULL, '(351) 600-1744', 1, '1 (903) 311-6358', 'Hood', '1629071518299.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2289, 547, 'CLI22-0158', 'Ante Lectus Ltd', 1, 10, 23, 'Ap #640-912 Nec Road', 10, NULL, NULL, '(678) 831-8648', 1, '1 (714) 727-4129', 'England', '1643092789999.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2290, 548, 'CLI22-0159', 'Mauris Sit Incorporated', 1, 10, 23, 'P.O. Box 918, 9216 Aliquam Rd.', 10, NULL, NULL, '(377) 826-8660', 1, '1 (740) 928-4142', 'Higgins', '1655030237299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2291, 549, 'CLI22-0160', 'Sed Facilisis Vitae Inc.', 1, 10, 23, 'Ap #446-4819 Ut Road', 10, NULL, NULL, '(120) 980-2590', 1, '1 (665) 130-6974', 'Hess', '1666042148299.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2292, 550, 'CLI22-0161', 'Lorem Ipsum Dolor Company', 1, 10, 23, '4387 Ultrices Road', 10, NULL, NULL, '(311) 729-6329', 1, '1 (816) 648-0385', 'Hebert', '1601010678099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2293, 551, 'CLI22-0162', 'Dolor Foundation', 1, 10, 23, '417-9449 Maecenas Rd.', 10, NULL, NULL, '(907) 900-2350', 1, '1 (774) 927-9323', 'Hess', '1643040445299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2294, 552, 'CLI22-0163', 'Vulputate Eu Odio Associates', 1, 10, 23, 'Ap #342-1132 Sagittis Road', 10, NULL, NULL, '(823) 293-7791', 1, '1 (834) 990-8684', 'May', '1628072932399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2295, 553, 'CLI22-0164', 'Congue In Scelerisque Associat', 1, 10, 23, 'Ap #389-7997 Etiam Rd.', 10, NULL, NULL, '(622) 998-6985', 1, '1 (822) 381-0544', 'Cooper', '1623012022199.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2296, 554, 'CLI22-0165', 'Libero Consulting', 1, 10, 23, 'P.O. Box 995, 1169 Nisl. St.', 10, NULL, NULL, '(935) 850-7354', 1, '1 (952) 281-2209', 'Stokes', '1690090428699.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2297, 555, 'CLI22-0166', 'Magna Ut Tincidunt Corporation', 1, 10, 23, 'P.O. Box 899, 3008 Risus. Rd.', 10, NULL, NULL, '(993) 466-2643', 1, '1 (331) 978-5128', 'Camacho', '1662050905399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2298, 556, 'CLI22-0167', 'Lacus Cras Interdum Institute', 1, 10, 23, 'Ap #283-3102 Congue. Rd.', 10, NULL, NULL, '(633) 833-9703', 1, '1 (186) 597-2604', 'Burton', '1642111497599.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2299, 557, 'CLI22-0168', 'Cum LLP', 1, 10, 23, 'P.O. Box 867, 1906 Magna. Avenue', 10, NULL, NULL, '(185) 541-4224', 1, '1 (113) 281-5009', 'Vinson', '1694110451799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2300, 558, 'CLI22-0169', 'Nonummy Ac LLC', 1, 10, 23, 'Ap #295-1586 Morbi St.', 10, NULL, NULL, '(158) 558-8654', 1, '1 (117) 217-2283', 'Bradley', '1671021828299.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2301, 559, 'CLI22-0170', 'Eget Varius Institute', 1, 10, 23, 'P.O. Box 988, 3104 Aliquam Av.', 10, NULL, NULL, '(268) 170-7906', 1, '1 (116) 700-3305', 'Hogan', '1695060286299.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2302, 560, 'CLI22-0171', 'Libero Proin Mi Institute', 1, 10, 23, '529-6772 Magna. Rd.', 10, NULL, NULL, '(257) 854-9594', 1, '1 (919) 718-6304', 'Pittman', '1641010529899.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2303, 561, 'CLI22-0172', 'Risus Company', 1, 10, 23, 'P.O. Box 602, 1756 Porta Ave', 10, NULL, NULL, '(557) 367-4382', 1, '1 (202) 925-7393', 'Hebert', '1642040616299.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2304, 562, 'CLI22-0173', 'Amet Risus Donec Incorporated', 1, 10, 23, 'P.O. Box 341, 527 Tortor St.', 10, NULL, NULL, '(370) 490-4028', 1, '1 (523) 499-9659', 'Burton', '1674040693699.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2305, 563, 'CLI22-0174', 'Odio LLP', 1, 10, 23, 'P.O. Box 588, 3310 Turpis Rd.', 10, NULL, NULL, '(536) 912-4422', 1, '1 (549) 483-0019', 'Pittman', '1603082027099.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2306, 564, 'CLI22-0175', 'Enim Mi Consulting', 1, 10, 23, 'Ap #556-1712 In, St.', 10, NULL, NULL, '(161) 299-3949', 1, '1 (596) 824-5073', 'Knox', '1602102058799.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2307, 565, 'CLI22-0176', 'Ipsum LLC', 1, 10, 23, '3594 Molestie Rd.', 10, NULL, NULL, '(964) 269-9705', 1, '1 (875) 501-8355', 'Greene', '1660062867699.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2308, 566, 'CLI22-0177', 'Vitae Purus Gravida Company', 1, 10, 23, '4210 Nec Ave', 10, NULL, NULL, '(400) 354-4016', 1, '1 (314) 964-6000', 'Weaver', '1676030910699.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2309, 567, 'CLI22-0178', 'Ut Quam Institute', 1, 10, 23, 'P.O. Box 423, 1331 Enim. St.', 10, NULL, NULL, '(888) 123-7526', 1, '1 (750) 562-2531', 'Morgan', '1609030623899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2310, 568, 'CLI22-0179', 'Dignissim Lacus PC', 1, 10, 23, 'Ap #219-6525 Ultricies Ave', 10, NULL, NULL, '(769) 742-0792', 1, '1 (172) 864-5416', 'Combs', '1604102808299.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2311, 569, 'CLI22-0180', 'Sed Congue Elit Institute', 1, 10, 23, '6434 Aliquam Rd.', 10, NULL, NULL, '(124) 885-1912', 1, '1 (911) 851-3280', 'Ballard', '1616092277799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2312, 570, 'CLI22-0181', 'Leo Vivamus Nibh Corporation', 1, 10, 23, 'Ap #860-483 Praesent Av.', 10, NULL, NULL, '(344) 348-9957', 1, '1 (696) 725-8069', 'Payne', '1651100891599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2313, 571, 'CLI22-0182', 'Metus Facilisis Lorem Incorpor', 1, 10, 23, '8189 Nunc Avenue', 10, NULL, NULL, '(206) 372-2928', 1, '1 (286) 504-8164', 'Conrad', '1662120339799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2314, 572, 'CLI22-0183', 'Id PC', 1, 10, 23, '445-6191 Sollicitudin Street', 10, NULL, NULL, '(601) 913-6698', 1, '1 (242) 787-5590', 'Pugh', '1627061999899.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2315, 573, 'CLI22-0184', 'Pede Malesuada Vel Associates', 1, 10, 23, '992-7236 Nulla Rd.', 10, NULL, NULL, '(876) 279-0228', 1, '1 (810) 971-9247', 'Brock', '1684090392999.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2316, 574, 'CLI22-0185', 'Urna Consulting', 1, 10, 23, 'P.O. Box 657, 9149 Vitae Avenue', 10, NULL, NULL, '(854) 893-8276', 1, '1 (114) 743-6579', 'Patton', '1679021943999.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2317, 575, 'CLI22-0186', 'Nam Tempor Diam Incorporated', 1, 10, 23, '257 Porta Ave', 10, NULL, NULL, '(255) 300-9279', 1, '1 (628) 401-5749', 'Rodriguez', '1635112177099.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2318, 576, 'CLI22-0187', 'Mi Duis Risus Inc.', 1, 10, 23, '3964 Penatibus St.', 10, NULL, NULL, '(287) 459-1971', 1, '1 (479) 316-2150', 'Hansen', '1620022956199.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2319, 577, 'CLI22-0188', 'Dolor Sit Amet LLC', 1, 10, 23, 'Ap #537-641 Orci Rd.', 10, NULL, NULL, '(465) 869-8840', 1, '1 (727) 546-2374', 'Marsh', '1609122647999.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2320, 578, 'CLI22-0189', 'Sodales At Velit Incorporated', 1, 10, 23, 'P.O. Box 694, 7788 Pretium Avenue', 10, NULL, NULL, '(305) 499-9621', 1, '1 (681) 463-4321', 'Hyde', '1648111206499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2321, 579, 'CLI22-0190', 'Massa Vestibulum Incorporated', 1, 10, 23, '7570 Nec Ave', 10, NULL, NULL, '(593) 336-9656', 1, '1 (520) 839-1491', 'Hensley', '1660061986799.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2322, 580, 'CLI22-0191', 'Sem Ut Incorporated', 1, 10, 23, 'P.O. Box 171, 1243 In Road', 10, NULL, NULL, '(282) 202-1940', 1, '1 (751) 301-7442', 'Harmon', '1681020843999.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2323, 581, 'CLI22-0192', 'Tempor Bibendum Donec LLP', 1, 10, 23, '476-3214 Sed Rd.', 10, NULL, NULL, '(383) 697-8882', 1, '1 (660) 938-9961', 'Meyers', '1656061848899.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2324, 582, 'CLI22-0193', 'Tincidunt Pede Ltd', 1, 10, 23, '496-4169 Integer Rd.', 10, NULL, NULL, '(577) 578-8871', 1, '1 (528) 988-0956', 'Harrington', '1637072128099.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2325, 583, 'CLI22-0194', 'Rhoncus PC', 1, 10, 23, '2668 Ultrices. Ave', 10, NULL, NULL, '(781) 980-8780', 1, '1 (698) 480-0989', 'Peterson', '1667112730799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2326, 584, 'CLI22-0195', 'A Institute', 1, 10, 23, '7417 Dui. Rd.', 10, NULL, NULL, '(877) 352-5088', 1, '1 (440) 620-3304', 'English', '1667120303199.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2327, 585, 'CLI22-0196', 'Ipsum Suspendisse Sagittis Inc', 1, 10, 23, '5757 Conubia Rd.', 10, NULL, NULL, '(627) 747-1605', 1, '1 (893) 441-5395', 'Olson', '1629050847699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2328, 586, 'CLI22-0197', 'Nulla Vulputate Dui LLC', 1, 10, 23, '843-2147 A, Road', 10, NULL, NULL, '(257) 755-4181', 1, '1 (680) 137-6494', 'Morin', '1611010359299.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2329, 587, 'CLI22-0198', 'Ullamcorper Velit Ltd', 1, 10, 23, '6503 Metus. St.', 10, NULL, NULL, '(993) 570-4222', 1, '1 (243) 250-4308', 'Bradley', '1661040681599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2330, 588, 'CLI22-0199', 'Odio A Purus LLC', 1, 10, 23, '6284 Ut Street', 10, NULL, NULL, '(320) 948-5309', 1, '1 (329) 107-9560', 'Walter', '1634090109899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2331, 589, 'CLI22-0200', 'Ac Tellus Suspendisse Industri', 1, 10, 23, '516-5616 In Rd.', 10, NULL, NULL, '(545) 593-8275', 1, '1 (285) 370-8317', 'Velasquez', '1676081280299.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2332, 590, 'CLI22-0201', 'Nec Mauris Blandit Ltd', 1, 10, 23, 'Ap #991-7757 Phasellus St.', 10, NULL, NULL, '(319) 657-8244', 1, '1 (181) 518-6565', 'Tillman', '1605050314499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2333, 591, 'CLI22-0202', 'Lorem Vehicula LLP', 1, 10, 23, '790-1720 Nec St.', 10, NULL, NULL, '(977) 499-5795', 1, '1 (327) 210-9258', 'Roth', '1617092041199.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2334, 592, 'CLI22-0203', 'Mauris Corporation', 1, 10, 23, 'Ap #610-9701 Faucibus Avenue', 10, NULL, NULL, '(205) 470-7164', 1, '1 (847) 103-9629', 'Chang', '1645021757499.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2335, 593, 'CLI22-0204', 'Consectetuer Limited', 1, 10, 23, '7120 Ornare. Av.', 10, NULL, NULL, '(215) 799-4718', 1, '1 (336) 698-7884', 'Shelton', '1687091883599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2336, 594, 'CLI22-0205', 'Duis Ac Arcu Associates', 1, 10, 23, 'P.O. Box 153, 6965 Morbi Avenue', 10, NULL, NULL, '(845) 997-5870', 1, '1 (507) 799-9063', 'Willis', '1633061641599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2337, 595, 'CLI22-0206', 'Sed Est Nunc Foundation', 1, 10, 23, 'P.O. Box 787, 3263 Nonummy. Rd.', 10, NULL, NULL, '(566) 141-3036', 1, '1 (844) 530-9171', 'Burks', '1616110137399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2338, 596, 'CLI22-0207', 'Mauris Morbi Corp.', 1, 10, 23, 'P.O. Box 838, 2400 Ante, Rd.', 10, NULL, NULL, '(602) 827-1526', 1, '1 (217) 481-9600', 'Conley', '1660123024699.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2339, 597, 'CLI22-0208', 'Leo LLC', 1, 10, 23, '170-9571 Lectus, Road', 10, NULL, NULL, '(356) 205-8795', 1, '1 (555) 577-1417', 'Newton', '1608020558899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2340, 719, 'CLI22-0209', 'Leo LLC', 1, 10, 23, '170-9571 Lectus, Road', 10, NULL, NULL, '(356) 205-8795', 1, '1 (555) 577-1417', 'Newton', '1608020558899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2341, 598, 'CLI22-0210', 'Id Ante Dictum PC', 1, 10, 23, '157-7127 Nisi Av.', 10, NULL, NULL, '(781) 618-7979', 1, '1 (589) 363-2456', 'Franks', '1665061022899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2342, 599, 'CLI22-0211', 'Aliquam Gravida Mauris Industr', 1, 10, 23, 'Ap #291-2266 Aenean St.', 10, NULL, NULL, '(833) 827-6191', 1, '1 (922) 994-4867', 'Tucker', '1647051459899.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2343, 600, 'CLI22-0212', 'Ac Institute', 1, 10, 23, '202-400 Fusce St.', 10, NULL, NULL, '(937) 722-1564', 1, '1 (118) 675-4646', 'Brooks', '1640011443599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2344, 601, 'CLI22-0213', 'A Purus Duis Foundation', 1, 10, 23, 'P.O. Box 930, 4928 Auctor. Rd.', 10, NULL, NULL, '(148) 673-2411', 1, '1 (212) 339-8385', 'Wolfe', '1631050244699.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2345, 602, 'CLI22-0214', 'Purus Mauris A Industries', 1, 10, 23, 'Ap #417-647 Leo St.', 10, NULL, NULL, '(979) 237-7459', 1, '1 (652) 952-7128', 'Olsen', '1671102282499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2346, 603, 'CLI22-0215', 'Curae; Donec Limited', 1, 10, 23, '505-9061 Dui Rd.', 10, NULL, NULL, '(824) 221-6549', 1, '1 (818) 437-2294', 'Lee', '1632121655299.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2347, 604, 'CLI22-0216', 'Scelerisque Neque Nullam Corpo', 1, 10, 23, 'Ap #173-5083 Suspendisse Road', 10, NULL, NULL, '(503) 133-2145', 1, '1 (845) 385-0833', 'Wilkins', '1601081788399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2348, 605, 'CLI22-0217', 'Ornare Lectus Foundation', 1, 10, 23, '3651 Phasellus Road', 10, NULL, NULL, '(284) 389-0052', 1, '1 (516) 137-8030', 'Conner', '1604072657499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2349, 606, 'CLI22-0218', 'Eget Metus In PC', 1, 10, 23, '5370 Risus. Rd.', 10, NULL, NULL, '(467) 151-7605', 1, '1 (652) 663-8840', 'Lee', '1654122637699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2350, 607, 'CLI22-0219', 'Risus Limited', 1, 10, 23, '352-4987 Nibh Rd.', 10, NULL, NULL, '(339) 524-8195', 1, '1 (464) 580-1010', 'Humphrey', '1646032270099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2351, 872, 'CLI22-0220', 'Risus Limited', 1, 10, 23, '352-4987 Nibh Rd.', 10, NULL, NULL, '(339) 524-8195', 1, '1 (464) 580-1010', 'Humphrey', '1646032270099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2352, 608, 'CLI22-0221', 'Convallis Erat Institute', 1, 10, 23, 'P.O. Box 350, 8567 Ante Rd.', 10, NULL, NULL, '(691) 605-6253', 1, '1 (902) 687-0858', 'Bird', '1677021241499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2353, 609, 'CLI22-0222', 'Molestie Consulting', 1, 10, 23, '260-5753 Pretium St.', 10, NULL, NULL, '(835) 835-3550', 1, '1 (765) 811-0398', 'Parks', '1665032788899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2354, 610, 'CLI22-0223', 'Lectus Pede Ultrices Incorpora', 1, 10, 23, 'P.O. Box 517, 667 Ac Ave', 10, NULL, NULL, '(876) 214-1716', 1, '1 (564) 318-3500', 'Murray', '1622021713199.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2355, 611, 'CLI22-0224', 'Sit Amet Inc.', 1, 10, 23, '1410 Nunc Rd.', 10, NULL, NULL, '(318) 818-0919', 1, '1 (172) 480-2303', 'Patel', '1691042680299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2356, 612, 'CLI22-0225', 'Nisi Magna Sed Foundation', 1, 10, 23, '2263 Mauris Av.', 10, NULL, NULL, '(850) 401-5423', 1, '1 (664) 343-3605', 'Robbins', '1688011405499.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2357, 613, 'CLI22-0226', 'Lacus Limited', 1, 10, 23, '5659 Luctus St.', 10, NULL, NULL, '(340) 944-1193', 1, '1 (264) 198-4791', 'Wilson', '1684080696399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2358, 614, 'CLI22-0227', 'Velit Cras Ltd', 1, 10, 23, 'Ap #585-9329 Auctor Avenue', 10, NULL, NULL, '(811) 293-5900', 1, '1 (404) 317-5232', 'Wallace', '1627061143499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2359, 615, 'CLI22-0228', 'Nulla Associates', 1, 10, 23, '615-8690 Pede. Avenue', 10, NULL, NULL, '(383) 369-9694', 1, '1 (254) 167-1583', 'Cummings', '1649050578699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2360, 616, 'CLI22-0229', 'Duis Cursus Diam Incorporated', 1, 10, 23, '3242 Justo St.', 10, NULL, NULL, '(974) 439-4151', 1, '1 (185) 282-4837', 'Doyle', '1698011213599.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2361, 617, 'CLI22-0230', 'Ut Nec Inc.', 1, 10, 23, '336-8483 Lorem, Avenue', 10, NULL, NULL, '(589) 682-3883', 1, '1 (546) 157-5610', 'Callahan', '1684052465299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2362, 618, 'CLI22-0231', 'Diam Duis LLP', 1, 10, 23, 'Ap #732-4183 Fringilla Rd.', 10, NULL, NULL, '(697) 645-0616', 1, '1 (590) 472-8591', 'Fox', '1693031899599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2363, 619, 'CLI22-0232', 'Id Libero Inc.', 1, 10, 23, 'P.O. Box 324, 8130 Non, Rd.', 10, NULL, NULL, '(697) 813-4867', 1, '1 (524) 263-2942', 'Castillo', '1695072360599.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2364, 620, 'CLI22-0233', 'In Associates', 1, 10, 23, 'Ap #772-4150 Mauris Avenue', 10, NULL, NULL, '(146) 181-5458', 1, '1 (763) 972-6510', 'Oneill', '1698072212599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2365, 887, 'CLI22-0234', 'In Associates', 1, 10, 23, 'Ap #772-4150 Mauris Avenue', 10, NULL, NULL, '(146) 181-5458', 1, '1 (763) 972-6510', 'Oneill', '1698072212599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2366, 621, 'CLI22-0235', 'Semper Company', 1, 10, 23, 'Ap #386-7406 Cursus. St.', 10, NULL, NULL, '(848) 245-9791', 1, '1 (424) 233-9720', 'Avila', '1636120525999.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2367, 622, 'CLI22-0236', 'Sed Inc.', 1, 10, 23, 'Ap #789-8978 Volutpat Street', 10, NULL, NULL, '(638) 979-0598', 1, '1 (883) 459-3899', 'Vincent', '1670100806699.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2368, 623, 'CLI22-0237', 'Et Ultrices Ltd', 1, 10, 23, 'P.O. Box 480, 2769 Inceptos Road', 10, NULL, NULL, '(579) 296-7238', 1, '1 (699) 582-6885', 'Burt', '1654010502199.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2369, 624, 'CLI22-0238', 'Sed Libero Incorporated', 1, 10, 23, 'Ap #153-2666 Sagittis St.', 10, NULL, NULL, '(854) 573-3241', 1, '1 (197) 981-9996', 'Gentry', '1694071984999.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2370, 625, 'CLI22-0239', 'Non Dui Inc.', 1, 10, 23, '644-1687 Pharetra Rd.', 10, NULL, NULL, '(610) 357-7193', 1, '1 (846) 488-8762', 'Robbins', '1682062391899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2371, 626, 'CLI22-0240', 'Velit In Aliquet Limited', 1, 10, 23, '265 Volutpat. Road', 10, NULL, NULL, '(354) 970-2748', 1, '1 (687) 295-9476', 'Henderson', '1688030918799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2372, 627, 'CLI22-0241', 'Tincidunt Tempus Risus LLP', 1, 10, 23, '1912 Risus. Road', 10, NULL, NULL, '(438) 214-5267', 1, '1 (188) 595-3508', 'Aguirre', '1647011064399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2373, 628, 'CLI22-0242', 'Parturient Montes Incorporated', 1, 10, 23, '5758 In Ave', 10, NULL, NULL, '(341) 408-9496', 1, '1 (250) 355-5254', 'Flynn', '1677021938099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2374, 629, 'CLI22-0243', 'Augue Corporation', 1, 10, 23, '5775 Nunc Av.', 10, NULL, NULL, '(730) 536-6892', 1, '1 (563) 536-5322', 'Blackwell', '1676032880999.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2375, 820, 'CLI22-0244', 'Augue Corporation', 1, 10, 23, '5775 Nunc Av.', 10, NULL, NULL, '(730) 536-6892', 1, '1 (563) 536-5322', 'Blackwell', '1676032880999.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2376, 630, 'CLI22-0245', 'Non Bibendum Incorporated', 1, 10, 23, 'Ap #811-2715 Porttitor St.', 10, NULL, NULL, '(463) 736-0509', 1, '1 (102) 210-5978', 'Simon', '1655071961099.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2377, 631, 'CLI22-0246', 'Nonummy Industries', 1, 10, 23, '2804 Odio. St.', 10, NULL, NULL, '(392) 440-1909', 1, '1 (988) 295-2945', 'Pierce', '1656030442499.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2378, 632, 'CLI22-0247', 'Vivamus Industries', 1, 10, 23, '999-8478 Erat Road', 10, NULL, NULL, '(319) 795-6064', 1, '1 (119) 674-7164', 'Wolfe', '1634080187899.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2379, 633, 'CLI22-0248', 'Id Ante Corp.', 1, 10, 23, '929-3350 Tristique Street', 10, NULL, NULL, '(756) 618-0220', 1, '1 (626) 817-0972', 'Romero', '1688011994799.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2380, 634, 'CLI22-0249', 'Dis Parturient Montes Institut', 1, 10, 23, 'P.O. Box 272, 1146 Dui Rd.', 10, NULL, NULL, '(165) 274-0198', 1, '1 (346) 142-4255', 'Bonner', '1624070393199.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2381, 635, 'CLI22-0250', 'Turpis Incorporated', 1, 10, 23, 'Ap #764-4988 Tellus. Rd.', 10, NULL, NULL, '(208) 446-6017', 1, '1 (332) 481-9341', 'Farley', '1653121206399.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2382, 636, 'CLI22-0251', 'Aptent Corp.', 1, 10, 23, '549-3954 Magna Avenue', 10, NULL, NULL, '(388) 591-5517', 1, '1 (684) 202-3614', 'Hood', '1670111952099.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2383, 637, 'CLI22-0252', 'Amet Risus Donec Ltd', 1, 10, 23, 'Ap #626-5849 Posuere Road', 10, NULL, NULL, '(342) 486-0467', 1, '1 (709) 387-9788', 'Avila', '1623081246899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2384, 638, 'CLI22-0253', 'Dolor Sit Consulting', 1, 10, 23, '9499 Quis, St.', 10, NULL, NULL, '(613) 751-5740', 1, '1 (139) 442-7842', 'Ruiz', '1636080219099.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2385, 639, 'CLI22-0254', 'Sit Amet Diam PC', 1, 10, 23, 'Ap #210-5153 Enim, Street', 10, NULL, NULL, '(332) 219-0122', 1, '1 (430) 422-3938', 'Clarke', '1630042393399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2386, 640, 'CLI22-0255', 'Lacus Associates', 1, 10, 23, 'Ap #183-1940 Ornare, Road', 10, NULL, NULL, '(699) 373-3081', 1, '1 (252) 931-0961', 'Lawson', '1638071853099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2387, 641, 'CLI22-0256', 'Libero Morbi Accumsan LLC', 1, 10, 23, '5099 Mi. Ave', 10, NULL, NULL, '(843) 443-0830', 1, '1 (531) 508-7211', 'Nicholson', '1619081410599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2388, 642, 'CLI22-0257', 'Mauris Limited', 1, 10, 23, 'P.O. Box 516, 8462 Ac Road', 10, NULL, NULL, '(767) 824-5321', 1, '1 (420) 564-1506', 'Jacobson', '1601102055999.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2389, 643, 'CLI22-0258', 'Adipiscing Elit Curabitur Comp', 1, 10, 23, '528-5224 Aliquet, St.', 10, NULL, NULL, '(864) 460-8727', 1, '1 (420) 705-7913', 'Suarez', '1633102411399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2390, 644, 'CLI22-0259', 'Urna Nullam Lobortis Consultin', 1, 10, 23, 'P.O. Box 452, 3257 Phasellus Street', 10, NULL, NULL, '(669) 104-9823', 1, '1 (954) 176-5140', 'Knox', '1656102071899.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2391, 645, 'CLI22-0260', 'Lacinia Orci Consectetuer Ltd', 1, 10, 23, 'Ap #668-3996 A Av.', 10, NULL, NULL, '(789) 370-5720', 1, '1 (262) 968-1346', 'Shields', '1689110504699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2392, 646, 'CLI22-0261', 'Nec Imperdiet Corporation', 1, 10, 23, 'Ap #482-3540 Eu Av.', 10, NULL, NULL, '(866) 248-0043', 1, '1 (714) 817-5758', 'Floyd', '1662071670399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2393, 647, 'CLI22-0262', 'Suspendisse LLP', 1, 10, 23, '894 Blandit Rd.', 10, NULL, NULL, '(560) 869-1329', 1, '1 (280) 436-0079', 'Bush', '1645091534599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2394, 648, 'CLI22-0263', 'Eu Eros Nam Incorporated', 1, 10, 23, 'Ap #920-328 Sem, Street', 10, NULL, NULL, '(964) 418-1657', 1, '1 (882) 784-3757', 'Montgomery', '1605081225699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2395, 649, 'CLI22-0264', 'Ornare Fusce Consulting', 1, 10, 23, 'Ap #160-898 Libero. St.', 10, NULL, NULL, '(283) 243-8782', 1, '1 (129) 588-5939', 'Mitchell', '1670052410499.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2396, 650, 'CLI22-0265', 'Tristique Senectus Et LLP', 1, 10, 23, '6436 Amet Av.', 10, NULL, NULL, '(905) 292-0061', 1, '1 (188) 602-0656', 'Finley', '1619070865799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2397, 651, 'CLI22-0266', 'Ipsum Dolor Sit Foundation', 1, 10, 23, '756-3892 Ut Av.', 10, NULL, NULL, '(546) 260-7719', 1, '1 (475) 533-4658', 'Gilmore', '1686071807799.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2398, 652, 'CLI22-0267', 'Elit Pharetra Ut Industries', 1, 10, 23, '9763 Tempus Rd.', 10, NULL, NULL, '(772) 194-9414', 1, '1 (362) 949-6894', 'Young', '1606051906399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2399, 653, 'CLI22-0268', 'Diam Proin Company', 1, 10, 23, '8669 Et, Rd.', 10, NULL, NULL, '(418) 866-2990', 1, '1 (470) 938-7981', 'Lester', '1613081662499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2400, 654, 'CLI22-0269', 'Mauris Industries', 1, 10, 23, '1098 Pulvinar Av.', 10, NULL, NULL, '(884) 120-4407', 1, '1 (970) 568-3033', 'Lowery', '1698010714999.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2401, 655, 'CLI22-0270', 'Primis Institute', 1, 10, 23, '1278 Nunc Street', 10, NULL, NULL, '(240) 673-2269', 1, '1 (943) 346-6552', 'Emerson', '1654102789899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2402, 656, 'CLI22-0271', 'Ipsum LLP', 1, 10, 23, '261-9544 Urna. Road', 10, NULL, NULL, '(248) 693-7891', 1, '1 (103) 278-1513', 'Hatfield', '1698011095699.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2403, 657, 'CLI22-0272', 'Ut LLC', 1, 10, 23, '368-9858 Eu St.', 10, NULL, NULL, '(118) 786-0101', 1, '1 (293) 303-7230', 'Peck', '1683060541399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2404, 658, 'CLI22-0273', 'Suspendisse LLC', 1, 10, 23, '9800 Aliquam Road', 10, NULL, NULL, '(214) 680-5241', 1, '1 (966) 387-1740', 'Fuller', '1665032305199.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2405, 659, 'CLI22-0274', 'Sed Orci LLP', 1, 10, 23, '1613 Erat St.', 10, NULL, NULL, '(508) 935-9523', 1, '1 (124) 228-0269', 'Hurst', '1632062456199.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2406, 660, 'CLI22-0275', 'Magna Phasellus Dolor Institut', 1, 10, 23, '2392 Dolor. Rd.', 10, NULL, NULL, '(687) 683-9203', 1, '1 (341) 983-9784', 'Cox', '1622091329499.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2407, 661, 'CLI22-0276', 'Sem Consulting', 1, 10, 23, '3579 Aliquet Ave', 10, NULL, NULL, '(599) 892-2714', 1, '1 (110) 632-6251', 'Lara', '1607031732299.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2408, 662, 'CLI22-0277', 'Etiam Gravida Molestie Associa', 1, 10, 23, 'P.O. Box 720, 493 Blandit St.', 10, NULL, NULL, '(241) 129-4478', 1, '1 (988) 885-7687', 'Olson', '1605120661399.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2409, 663, 'CLI22-0278', 'Egestas Nunc Sed PC', 1, 10, 23, 'Ap #636-6322 Felis, Av.', 10, NULL, NULL, '(885) 818-1583', 1, '1 (929) 669-5837', 'Watts', '1628012896399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2410, 664, 'CLI22-0279', 'Accumsan LLC', 1, 10, 23, '2870 A, Avenue', 10, NULL, NULL, '(852) 334-8095', 1, '1 (578) 614-3980', 'Travis', '1637082480899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2411, 665, 'CLI22-0280', 'Aliquam Gravida Mauris LLP', 1, 10, 23, '931-956 Diam. Rd.', 10, NULL, NULL, '(157) 860-7469', 1, '1 (565) 791-0321', 'Schmidt', '1652100982599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2412, 666, 'CLI22-0281', 'Aenean Egestas Hendrerit Ltd', 1, 10, 23, 'Ap #461-8593 Lorem St.', 10, NULL, NULL, '(935) 662-0817', 1, '1 (173) 315-4845', 'Porter', '1621091481899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2413, 667, 'CLI22-0282', 'Et Lacinia Corporation', 1, 10, 23, 'Ap #281-9045 Nibh. Ave', 10, NULL, NULL, '(142) 748-1038', 1, '1 (611) 145-5579', 'Nelson', '1666030483799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2414, 668, 'CLI22-0283', 'Elit Inc.', 1, 10, 23, '462 Turpis Road', 10, NULL, NULL, '(893) 752-1740', 1, '1 (650) 336-7245', 'Green', '1624112820799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2415, 669, 'CLI22-0284', 'Diam Duis Associates', 1, 10, 23, 'Ap #626-3404 Non, Rd.', 10, NULL, NULL, '(281) 857-3018', 1, '1 (832) 423-7317', 'Forbes', '1659090762299.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2416, 670, 'CLI22-0285', 'Magnis Dis Inc.', 1, 10, 23, 'P.O. Box 135, 7212 Commodo St.', 10, NULL, NULL, '(528) 675-9883', 1, '1 (520) 137-3218', 'Cross', '1614010104399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2417, 671, 'CLI22-0286', 'Vehicula Aliquet Libero Instit', 1, 10, 23, '6686 Ipsum Road', 10, NULL, NULL, '(892) 332-4457', 1, '1 (659) 569-7087', 'Hanson', '1643121450199.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2418, 672, 'CLI22-0287', 'Varius Ultrices Corp.', 1, 10, 23, 'Ap #201-2823 Mauris. Rd.', 10, NULL, NULL, '(213) 732-1909', 1, '1 (235) 190-7111', 'Kinney', '1609082089499.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2419, 673, 'CLI22-0288', 'Purus Duis Elementum Limited', 1, 10, 23, 'Ap #396-2874 Lorem, Rd.', 10, NULL, NULL, '(637) 257-3286', 1, '1 (813) 252-1291', 'Cabrera', '1615102293299.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2420, 674, 'CLI22-0289', 'Magna Nam Ligula Industries', 1, 10, 23, '7064 Mauris Rd.', 10, NULL, NULL, '(992) 832-3905', 1, '1 (858) 840-1598', 'Terrell', '1606010848199.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2421, 675, 'CLI22-0290', 'Phasellus In Ltd', 1, 10, 23, 'P.O. Box 400, 9303 Risus. Street', 10, NULL, NULL, '(814) 494-4643', 1, '1 (232) 202-2480', 'Keith', '1601102311099.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2422, 676, 'CLI22-0291', 'Mattis Consulting', 1, 10, 23, 'P.O. Box 985, 4818 Suspendisse St.', 10, NULL, NULL, '(447) 828-7426', 1, '1 (402) 100-5378', 'Aguilar', '1623062884899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2423, 677, 'CLI22-0292', 'Viverra LLC', 1, 10, 23, 'Ap #843-8560 Ultrices. Av.', 10, NULL, NULL, '(559) 851-1023', 1, '1 (242) 315-5523', 'Williams', '1692101417599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2424, 678, 'CLI22-0293', 'Ac Company', 1, 10, 23, 'Ap #342-5590 Montes, Ave', 10, NULL, NULL, '(744) 177-8416', 1, '1 (404) 827-6696', 'Stafford', '1623061282599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2425, 679, 'CLI22-0294', 'Integer Company', 1, 10, 23, '5588 Fusce Ave', 10, NULL, NULL, '(777) 705-8975', 1, '1 (805) 751-5841', 'Good', '1634020657799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2426, 680, 'CLI22-0295', 'Fusce Feugiat Lorem LLC', 1, 10, 23, 'P.O. Box 870, 852 Auctor. Road', 10, NULL, NULL, '(898) 538-5868', 1, '1 (250) 207-0542', 'Rice', '1690082612499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2427, 681, 'CLI22-0296', 'Mauris Ltd', 1, 10, 23, '5015 Posuere Road', 10, NULL, NULL, '(367) 340-5495', 1, '1 (914) 529-3388', 'Savage', '1678051390399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2428, 682, 'CLI22-0297', 'Vel Inc.', 1, 10, 23, 'P.O. Box 266, 8512 Quam. Ave', 10, NULL, NULL, '(156) 527-7992', 1, '1 (904) 549-2415', 'England', '1696070171299.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2429, 683, 'CLI22-0298', 'A Foundation', 1, 10, 23, '2699 Lacus. Road', 10, NULL, NULL, '(280) 784-6889', 1, '1 (733) 212-2432', 'Wong', '1685082711499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2430, 684, 'CLI22-0299', 'Semper Rutrum Industries', 1, 10, 23, 'Ap #513-2661 Dis Av.', 10, NULL, NULL, '(212) 317-3755', 1, '1 (393) 201-6669', 'Pena', '1624041373099.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2431, 685, 'CLI22-0300', 'Nascetur Inc.', 1, 10, 23, '7345 Sodales. Rd.', 10, NULL, NULL, '(944) 751-2800', 1, '1 (494) 533-8524', 'Ballard', '1636062907799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2432, 686, 'CLI22-0301', 'Nibh Foundation', 1, 10, 23, 'Ap #742-3621 Non Street', 10, NULL, NULL, '(993) 197-6865', 1, '1 (792) 145-6711', 'Clay', '1613121826199.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2433, 687, 'CLI22-0302', 'Maecenas Company', 1, 10, 23, '2722 Vehicula Ave', 10, NULL, NULL, '(656) 681-8920', 1, '1 (555) 484-9619', 'Wooten', '1657041678599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2434, 688, 'CLI22-0303', 'Turpis LLP', 1, 10, 23, 'Ap #837-5029 Nulla Ave', 10, NULL, NULL, '(674) 847-8211', 1, '1 (708) 761-3715', 'Baxter', '1602091603199.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2435, 689, 'CLI22-0304', 'Vel Pede Blandit Company', 1, 10, 23, 'P.O. Box 398, 7100 Semper Av.', 10, NULL, NULL, '(562) 462-2058', 1, '1 (215) 852-9954', 'Collier', '1630121724199.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2436, 690, 'CLI22-0305', 'Sit Associates', 1, 10, 23, 'Ap #658-7979 Nullam St.', 10, NULL, NULL, '(989) 753-5642', 1, '1 (880) 667-0128', 'Baird', '1689061151599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2437, 691, 'CLI22-0306', 'Sed Turpis Incorporated', 1, 10, 23, 'P.O. Box 720, 9580 Est Road', 10, NULL, NULL, '(748) 787-7773', 1, '1 (459) 335-1268', 'York', '1673121398299.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2438, 692, 'CLI22-0307', 'Ultricies PC', 1, 10, 23, 'Ap #938-9364 Urna. St.', 10, NULL, NULL, '(474) 122-0875', 1, '1 (626) 379-9592', 'Edwards', '1696020356299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2439, 693, 'CLI22-0308', 'Mauris Suspendisse Inc.', 1, 10, 23, 'Ap #548-7717 Donec St.', 10, NULL, NULL, '(751) 418-2130', 1, '1 (413) 197-3133', 'Kennedy', '1615030443299.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2440, 694, 'CLI22-0309', 'Aenean Sed Pede Company', 1, 10, 23, '580-4945 Ac Rd.', 10, NULL, NULL, '(688) 175-0682', 1, '1 (332) 309-1229', 'Duran', '1660090264999.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2441, 695, 'CLI22-0310', 'Purus LLC', 1, 10, 23, '495-3073 Eget St.', 10, NULL, NULL, '(367) 737-3961', 1, '1 (151) 960-2575', 'Robinson', '1682021861499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2442, 696, 'CLI22-0311', 'Erat Vivamus Consulting', 1, 10, 23, '3957 Porttitor Rd.', 10, NULL, NULL, '(553) 216-1491', 1, '1 (959) 703-2008', 'Estes', '1602041982099.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2443, 697, 'CLI22-0312', 'Magna Duis Dignissim Inc.', 1, 10, 23, 'Ap #490-4060 Eu St.', 10, NULL, NULL, '(804) 799-3800', 1, '1 (985) 990-1412', 'Bolton', '1690060231999.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2444, 698, 'CLI22-0313', 'Viverra Ltd', 1, 10, 23, 'Ap #748-9704 Dolor Av.', 10, NULL, NULL, '(808) 191-7492', 1, '1 (854) 405-4628', 'Chandler', '1662030901599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2445, 699, 'CLI22-0314', 'Aptent Institute', 1, 10, 23, 'Ap #543-4800 Morbi Rd.', 10, NULL, NULL, '(222) 439-3614', 1, '1 (677) 968-6275', 'Rush', '1678112477999.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2446, 700, 'CLI22-0315', 'Eros Incorporated', 1, 10, 23, 'P.O. Box 836, 1003 Adipiscing Rd.', 10, NULL, NULL, '(248) 315-3675', 1, '1 (492) 929-2688', 'Stanley', '1642020177399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2447, 701, 'CLI22-0316', 'Iaculis Quis Company', 1, 10, 23, 'P.O. Box 713, 6367 Vel Rd.', 10, NULL, NULL, '(694) 985-8083', 1, '1 (249) 857-7582', 'Navarro', '1683051116899.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2448, 702, 'CLI22-0317', 'Mauris Incorporated', 1, 10, 23, 'P.O. Box 640, 8453 Justo St.', 10, NULL, NULL, '(939) 746-3786', 1, '1 (410) 471-5795', 'Ross', '1667100319699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2449, 891, 'CLI22-0318', 'Mauris Incorporated', 1, 10, 23, 'P.O. Box 640, 8453 Justo St.', 10, NULL, NULL, '(939) 746-3786', 1, '1 (410) 471-5795', 'Ross', '1667100319699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2450, 703, 'CLI22-0319', 'Tellus Suspendisse Sed Incorpo', 1, 10, 23, 'P.O. Box 159, 8392 Nisi. Street', 10, NULL, NULL, '(399) 143-1708', 1, '1 (104) 471-1296', 'Clark', '1692022231399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2451, 704, 'CLI22-0320', 'Posuere Enim Nisl Corporation', 1, 10, 23, 'Ap #412-8217 Risus. Street', 10, NULL, NULL, '(891) 892-6418', 1, '1 (908) 374-6139', 'Benton', '1636050490199.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2452, 705, 'CLI22-0321', 'Sem Nulla Institute', 1, 10, 23, 'Ap #818-9756 Lorem St.', 10, NULL, NULL, '(941) 508-9729', 1, '1 (872) 795-9981', 'Everett', '1620060449799.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2453, 706, 'CLI22-0322', 'Mauris Id Sapien LLP', 1, 10, 23, 'Ap #220-4692 Porttitor Ave', 10, NULL, NULL, '(145) 748-9435', 1, '1 (366) 991-5150', 'Nelson', '1657122187399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2454, 707, 'CLI22-0323', 'Nisi A Odio Inc.', 1, 10, 23, '9023 Tellus Av.', 10, NULL, NULL, '(704) 159-6486', 1, '1 (365) 838-5273', 'Leon', '1698080838499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2455, 708, 'CLI22-0324', 'Faucibus Lectus Corporation', 1, 10, 23, 'P.O. Box 733, 3847 Ac, Rd.', 10, NULL, NULL, '(517) 321-0933', 1, '1 (541) 428-2771', 'Joseph', '1681012902599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2456, 709, 'CLI22-0325', 'Interdum Inc.', 1, 10, 23, '367-3814 Eget, Ave', 10, NULL, NULL, '(947) 525-5463', 1, '1 (496) 862-4557', 'Parrish', '1620042024299.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2457, 710, 'CLI22-0326', 'Enim Consulting', 1, 10, 23, 'P.O. Box 951, 935 Vel, St.', 10, NULL, NULL, '(598) 760-0592', 1, '1 (661) 545-1186', 'Lowe', '1613022385899.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2458, 711, 'CLI22-0327', 'Facilisis Vitae Orci Incorpora', 1, 10, 23, '8585 Fringilla Avenue', 10, NULL, NULL, '(345) 390-2089', 1, '1 (616) 904-5210', 'Eaton', '1610010333399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2459, 712, 'CLI22-0328', 'Id Ante Dictum Foundation', 1, 10, 23, '951-5323 Amet Road', 10, NULL, NULL, '(382) 120-4251', 1, '1 (987) 383-9620', 'Knight', '1610012386299.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2460, 713, 'CLI22-0329', 'Faucibus Orci Corporation', 1, 10, 23, '339-3618 Vestibulum Rd.', 10, NULL, NULL, '(316) 289-1804', 1, '1 (315) 781-8918', 'Booker', '1634033006499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2461, 714, 'CLI22-0330', 'Porttitor Eros Nec LLP', 1, 10, 23, 'P.O. Box 780, 6616 Tincidunt, St.', 10, NULL, NULL, '(669) 778-2956', 1, '1 (424) 612-1208', 'Herman', '1612031773899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2462, 715, 'CLI22-0331', 'Maecenas Iaculis Institute', 1, 10, 23, 'P.O. Box 472, 7255 Faucibus Av.', 10, NULL, NULL, '(218) 563-1632', 1, '1 (637) 440-6628', 'Rhodes', '1680030453699.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2463, 716, 'CLI22-0332', 'Rutrum Magna PC', 1, 10, 23, 'Ap #814-8319 Consequat Ave', 10, NULL, NULL, '(229) 700-3244', 1, '1 (153) 434-3494', 'Juarez', '1607111240299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2464, 717, 'CLI22-0333', 'Quisque Varius Nam Industries', 1, 10, 23, '748 Libero. Av.', 10, NULL, NULL, '(407) 217-4048', 1, '1 (610) 939-8238', 'Winters', '1640072821299.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2465, 718, 'CLI22-0334', 'Nullam Scelerisque Neque Indus', 1, 10, 23, 'P.O. Box 708, 4565 Phasellus Avenue', 10, NULL, NULL, '(610) 875-8092', 1, '1 (100) 164-4316', 'Porter', '1679112613199.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2466, 597, 'CLI22-0335', 'Leo LLC', 1, 10, 23, 'Ap #756-5008 Suspendisse Street', 10, NULL, NULL, '(186) 447-7595', 1, '1 (176) 984-3969', 'Pugh', '1684012155599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2467, 719, 'CLI22-0336', 'Leo LLC', 1, 10, 23, 'Ap #756-5008 Suspendisse Street', 10, NULL, NULL, '(186) 447-7595', 1, '1 (176) 984-3969', 'Pugh', '1684012155599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2468, 720, 'CLI22-0337', 'Amet Foundation', 1, 10, 23, '9457 Sit St.', 10, NULL, NULL, '(288) 123-0617', 1, '1 (932) 274-5515', 'Lancaster', '1689051614899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2469, 721, 'CLI22-0338', 'Tempus Non Corp.', 1, 10, 23, 'P.O. Box 231, 9778 At St.', 10, NULL, NULL, '(606) 992-1464', 1, '1 (721) 444-1187', 'Franco', '1686012167399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2470, 539, 'CLI22-0339', 'Pede LLP', 1, 10, 23, '7910 Fames Rd.', 10, NULL, NULL, '(804) 527-4946', 1, '1 (264) 396-9495', 'Burch', '1645091262599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2471, 722, 'CLI22-0340', 'Pede LLP', 1, 10, 23, '7910 Fames Rd.', 10, NULL, NULL, '(804) 527-4946', 1, '1 (264) 396-9495', 'Burch', '1645091262599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2472, 723, 'CLI22-0341', 'Lectus Cum Associates', 1, 10, 23, '6950 Ante Av.', 10, NULL, NULL, '(585) 118-1466', 1, '1 (195) 322-0159', 'Maxwell', '1619032086699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2473, 724, 'CLI22-0342', 'Dapibus Associates', 1, 10, 23, 'Ap #891-6547 Malesuada St.', 10, NULL, NULL, '(107) 121-4720', 1, '1 (170) 644-8859', 'Freeman', '1648070359199.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2474, 725, 'CLI22-0343', 'Dolor Ltd', 1, 10, 23, 'P.O. Box 307, 2153 Velit St.', 10, NULL, NULL, '(503) 225-8359', 1, '1 (432) 477-9349', 'Knox', '1626102586299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2475, 726, 'CLI22-0344', 'Orci Luctus Corporation', 1, 10, 23, 'Ap #357-8209 Malesuada Avenue', 10, NULL, NULL, '(294) 535-7100', 1, '1 (274) 226-8482', 'Combs', '1678092980299.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2476, 727, 'CLI22-0345', 'At Ltd', 1, 10, 23, '7278 Sapien St.', 10, NULL, NULL, '(725) 656-8996', 1, '1 (770) 142-6114', 'Allen', '1655062258899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2477, 728, 'CLI22-0346', 'Sit Amet LLP', 1, 10, 23, 'P.O. Box 969, 9120 In St.', 10, NULL, NULL, '(293) 666-6825', 1, '1 (341) 377-5223', 'Colon', '1663101070799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2478, 729, 'CLI22-0347', 'Odio Phasellus At Industries', 1, 10, 23, '265-1785 Orci, Rd.', 10, NULL, NULL, '(931) 218-2725', 1, '1 (871) 273-8147', 'Lyons', '1643042507999.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2479, 730, 'CLI22-0348', 'Dapibus Quam PC', 1, 10, 23, '4575 Gravida. Road', 10, NULL, NULL, '(399) 860-9127', 1, '1 (510) 526-0732', 'Carrillo', '1614100197999.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2480, 731, 'CLI22-0349', 'Phasellus Corp.', 1, 10, 23, 'P.O. Box 454, 7832 Dictum Rd.', 10, NULL, NULL, '(704) 456-7948', 1, '1 (479) 864-9858', 'Rush', '1644052458799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2481, 732, 'CLI22-0350', 'Vulputate Posuere Vulputate Li', 1, 10, 23, '178-2026 Odio Street', 10, NULL, NULL, '(985) 427-6698', 1, '1 (272) 895-1491', 'Benjamin', '1629112070999.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2482, 733, 'CLI22-0351', 'Sed Auctor Odio Company', 1, 10, 23, '4598 Vel Road', 10, NULL, NULL, '(216) 213-3710', 1, '1 (700) 718-3735', 'Jensen', '1690041381899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2483, 734, 'CLI22-0352', 'Tincidunt Aliquam Corporation', 1, 10, 23, 'Ap #104-1658 Adipiscing Rd.', 10, NULL, NULL, '(358) 189-1290', 1, '1 (250) 130-9723', 'Marquez', '1698062876799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2484, 735, 'CLI22-0353', 'Metus Sit Ltd', 1, 10, 23, '540-352 Purus Rd.', 10, NULL, NULL, '(214) 772-0455', 1, '1 (142) 238-7177', 'Clemons', '1602051869199.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2485, 736, 'CLI22-0354', 'At Incorporated', 1, 10, 23, 'Ap #350-7023 Adipiscing Ave', 10, NULL, NULL, '(214) 591-2275', 1, '1 (980) 896-8879', 'Bush', '1614020398799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2486, 737, 'CLI22-0355', 'Sem Ut Cursus LLC', 1, 10, 23, '8654 Malesuada Rd.', 10, NULL, NULL, '(797) 129-1559', 1, '1 (706) 483-2793', 'Merritt', '1621022796099.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2487, 738, 'CLI22-0356', 'Lobortis Risus In Inc.', 1, 10, 23, '187-4760 Non Av.', 10, NULL, NULL, '(662) 643-8981', 1, '1 (483) 129-8100', 'Barnett', '1667093030599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2488, 739, 'CLI22-0357', 'Elit Pellentesque LLP', 1, 10, 23, 'P.O. Box 833, 2148 Enim Av.', 10, NULL, NULL, '(483) 226-6066', 1, '1 (296) 225-8597', 'Whitley', '1682122256499.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2489, 740, 'CLI22-0358', 'Semper Tellus Foundation', 1, 10, 23, '2494 At, Ave', 10, NULL, NULL, '(705) 255-3172', 1, '1 (822) 842-1797', 'Decker', '1629102177699.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2490, 741, 'CLI22-0359', 'Mattis Associates', 1, 10, 23, 'Ap #504-8330 Venenatis St.', 10, NULL, NULL, '(189) 691-1714', 1, '1 (430) 167-7481', 'Berry', '1602061596699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2491, 742, 'CLI22-0360', 'Dis Parturient Associates', 1, 10, 23, '1854 Proin Avenue', 10, NULL, NULL, '(501) 433-1047', 1, '1 (847) 810-2552', 'Keller', '1664042313099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2492, 743, 'CLI22-0361', 'Sagittis Augue Ltd', 1, 10, 23, 'P.O. Box 953, 6048 Consequat St.', 10, NULL, NULL, '(560) 463-1146', 1, '1 (647) 256-2901', 'Warner', '1611012533099.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2493, 744, 'CLI22-0362', 'Erat Vitae PC', 1, 10, 23, 'Ap #545-1370 Sem. Rd.', 10, NULL, NULL, '(487) 920-0477', 1, '1 (412) 172-5437', 'Padilla', '1682060992899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2494, 745, 'CLI22-0363', 'Sed Malesuada Corp.', 1, 10, 23, '1331 Cras Av.', 10, NULL, NULL, '(923) 392-6227', 1, '1 (908) 189-0930', 'Warner', '1647021407899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2495, 746, 'CLI22-0364', 'Duis Ltd', 1, 10, 23, 'Ap #380-6591 Nibh Rd.', 10, NULL, NULL, '(763) 250-3657', 1, '1 (284) 850-7082', 'Thornton', '1602100656499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2496, 747, 'CLI22-0365', 'Mauris LLC', 1, 10, 23, '8371 Id Ave', 10, NULL, NULL, '(994) 625-1010', 1, '1 (423) 226-9300', 'Roth', '1655120945999.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2497, 748, 'CLI22-0366', 'Mattis Foundation', 1, 10, 23, 'P.O. Box 482, 430 Amet, St.', 10, NULL, NULL, '(468) 774-9431', 1, '1 (613) 278-1687', 'Barr', '1688032642899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2498, 749, 'CLI22-0367', 'In Institute', 1, 10, 23, 'Ap #130-6358 Vivamus Rd.', 10, NULL, NULL, '(576) 749-0747', 1, '1 (263) 968-4680', 'Boyd', '1692111561599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2499, 750, 'CLI22-0368', 'Metus Aenean Corp.', 1, 10, 23, '7051 Odio Ave', 10, NULL, NULL, '(404) 435-2830', 1, '1 (412) 932-9135', 'Charles', '1650042080699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2500, 751, 'CLI22-0369', 'Aliquet Company', 1, 10, 23, 'Ap #920-6017 Interdum Street', 10, NULL, NULL, '(804) 580-2491', 1, '1 (541) 233-1964', 'Knox', '1651012280999.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2501, 752, 'CLI22-0370', 'Risus Varius Consulting', 1, 10, 23, 'P.O. Box 813, 6186 Pellentesque St.', 10, NULL, NULL, '(498) 545-2617', 1, '1 (823) 313-2304', 'Gross', '1651051728799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2502, 753, 'CLI22-0371', 'Gravida Sit Amet LLC', 1, 10, 23, '469-792 Odio. Road', 10, NULL, NULL, '(819) 261-0606', 1, '1 (437) 375-1348', 'Watts', '1687020435799.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2503, 754, 'CLI22-0372', 'Auctor Mauris LLP', 1, 10, 23, 'P.O. Box 731, 8937 Sed, Rd.', 10, NULL, NULL, '(204) 603-0659', 1, '1 (216) 504-0886', 'Dickerson', '1617071123099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2504, 755, 'CLI22-0373', 'Vitae Aliquet Nec Associates', 1, 10, 23, 'P.O. Box 943, 3740 Diam St.', 10, NULL, NULL, '(526) 211-4671', 1, '1 (368) 521-1203', 'Durham', '1614071519599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2505, 756, 'CLI22-0374', 'Erat Semper Rutrum Inc.', 1, 10, 23, 'P.O. Box 286, 7538 Lacinia. Av.', 10, NULL, NULL, '(501) 779-1564', 1, '1 (746) 552-1805', 'Hester', '1677100748499.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2506, 500, 'CLI22-0375', 'Quam Institute', 1, 10, 23, 'Ap #231-8380 Erat Rd.', 10, NULL, NULL, '(895) 139-8444', 1, '1 (790) 200-6447', 'Bates', '1678122458499.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2507, 757, 'CLI22-0376', 'Quam Institute', 1, 10, 23, 'Ap #231-8380 Erat Rd.', 10, NULL, NULL, '(895) 139-8444', 1, '1 (790) 200-6447', 'Bates', '1678122458499.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2508, 758, 'CLI22-0377', 'Quis Accumsan Consulting', 1, 10, 23, '212-8345 Molestie Road', 10, NULL, NULL, '(395) 429-4100', 1, '1 (945) 942-9317', 'Moody', '1696071698299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2509, 759, 'CLI22-0378', 'Mus Proin Consulting', 1, 10, 23, '4432 Praesent Road', 10, NULL, NULL, '(284) 822-7316', 1, '1 (872) 813-8820', 'Michael', '1679023094899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2510, 760, 'CLI22-0379', 'Lectus Incorporated', 1, 10, 23, '9095 Sit Street', 10, NULL, NULL, '(383) 361-3500', 1, '1 (181) 287-0035', 'Hansen', '1623082265499.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2511, 761, 'CLI22-0380', 'Fringilla Est Mauris Company', 1, 10, 23, 'Ap #165-7431 Ut Rd.', 10, NULL, NULL, '(162) 709-0970', 1, '1 (662) 748-9059', 'Barron', '1622082858799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2512, 762, 'CLI22-0381', 'Urna Foundation', 1, 10, 23, '311-3154 Pellentesque St.', 10, NULL, NULL, '(856) 576-6915', 1, '1 (779) 972-9758', 'Butler', '1648051359599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2513, 763, 'CLI22-0382', 'Vitae Purus Gravida PC', 1, 10, 23, '1860 Lacus Avenue', 10, NULL, NULL, '(513) 753-6740', 1, '1 (665) 677-6848', 'Case', '1621072856199.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2514, 764, 'CLI22-0383', 'Cubilia Curae; Donec Incorpora', 1, 10, 23, '4178 Nullam Street', 10, NULL, NULL, '(375) 300-0020', 1, '1 (636) 475-4904', 'Baird', '1609102402399.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2515, 765, 'CLI22-0384', 'Magna Cras Convallis Associate', 1, 10, 23, '806-5495 Porttitor St.', 10, NULL, NULL, '(920) 579-4938', 1, '1 (796) 966-8481', 'Gallegos', '1623070243199.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2516, 766, 'CLI22-0385', 'Ut Pharetra Consulting', 1, 10, 23, 'Ap #921-3271 Vestibulum St.', 10, NULL, NULL, '(384) 426-6653', 1, '1 (116) 354-0465', 'Osborne', '1604101040699.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2517, 767, 'CLI22-0386', 'At Auctor Ullamcorper Incorpor', 1, 10, 23, '668-5233 Sed Rd.', 10, NULL, NULL, '(389) 704-5613', 1, '1 (179) 301-3024', 'Franklin', '1644080372099.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2518, 768, 'CLI22-0387', 'Dictum Cursus Inc.', 1, 10, 23, '6396 Nunc Rd.', 10, NULL, NULL, '(183) 291-5311', 1, '1 (267) 345-6377', 'Madden', '1627022762999.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2519, 769, 'CLI22-0388', 'Nulla Tempor Ltd', 1, 10, 23, 'P.O. Box 521, 8174 Nec Rd.', 10, NULL, NULL, '(336) 198-6214', 1, '1 (829) 869-1346', 'Clarke', '1657042608799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2520, 770, 'CLI22-0389', 'Aliquet Diam Industries', 1, 10, 23, '443-6473 At, Ave', 10, NULL, NULL, '(628) 592-0865', 1, '1 (823) 881-1819', 'Stokes', '1629021051899.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2521, 771, 'CLI22-0390', 'Pharetra Associates', 1, 10, 23, 'P.O. Box 789, 7401 Non Rd.', 10, NULL, NULL, '(253) 615-6053', 1, '1 (872) 925-3949', 'Knapp', '1617070436199.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2522, 772, 'CLI22-0391', 'In Felis Nulla PC', 1, 10, 23, 'Ap #408-5546 Velit. Rd.', 10, NULL, NULL, '(811) 346-5068', 1, '1 (291) 276-8644', 'Bailey', '1609062100999.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2523, 773, 'CLI22-0392', 'Nunc Inc.', 1, 10, 23, 'Ap #961-451 Velit. Av.', 10, NULL, NULL, '(829) 341-5555', 1, '1 (503) 345-0872', 'Mclean', '1684061540999.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2524, 774, 'CLI22-0393', 'Quam Limited', 1, 10, 23, 'Ap #851-468 Hendrerit Avenue', 10, NULL, NULL, '(653) 704-6241', 1, '1 (385) 260-8054', 'Kelley', '1608102000099.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2525, 775, 'CLI22-0394', 'Nam Porttitor Ltd', 1, 10, 23, 'P.O. Box 399, 6557 Ac Road', 10, NULL, NULL, '(107) 937-7678', 1, '1 (194) 536-5749', 'Miles', '1675031165899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2526, 776, 'CLI22-0395', 'Phasellus Dolor LLP', 1, 10, 23, 'P.O. Box 997, 5388 Nulla. Rd.', 10, NULL, NULL, '(204) 869-1835', 1, '1 (117) 530-1936', 'Fuller', '1608070344899.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2527, 777, 'CLI22-0396', 'Hymenaeos Limited', 1, 10, 23, '209-3662 Euismod Road', 10, NULL, NULL, '(196) 791-9616', 1, '1 (534) 255-0224', 'Little', '1642072362999.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2528, 778, 'CLI22-0397', 'Curabitur Ut Company', 1, 10, 23, '8917 Nullam Ave', 10, NULL, NULL, '(875) 441-3202', 1, '1 (289) 738-2607', 'Hampton', '1651121472699.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2529, 779, 'CLI22-0398', 'Maecenas Corporation', 1, 10, 23, 'Ap #586-2024 Non St.', 10, NULL, NULL, '(373) 273-3812', 1, '1 (987) 841-3506', 'Witt', '1655091658399.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2530, 460, 'CLI22-0399', 'Nunc Company', 1, 10, 23, '1540 A, Avenue', 10, NULL, NULL, '(473) 440-1648', 1, '1 (615) 678-9603', 'Byrd', '1616080707799.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2531, 780, 'CLI22-0400', 'Nunc Company', 1, 10, 23, '1540 A, Avenue', 10, NULL, NULL, '(473) 440-1648', 1, '1 (615) 678-9603', 'Byrd', '1616080707799.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2532, 781, 'CLI22-0401', 'Natoque Penatibus Et Foundatio', 1, 10, 23, '308-4906 Egestas Av.', 10, NULL, NULL, '(847) 790-1270', 1, '1 (124) 908-7566', 'Conway', '1653031253099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2533, 782, 'CLI22-0402', 'Tempor Bibendum Donec Institut', 1, 10, 23, 'Ap #603-9385 Sed Ave', 10, NULL, NULL, '(340) 116-2803', 1, '1 (111) 525-3541', 'Cash', '1698072232099.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2534, 783, 'CLI22-0403', 'Amet Limited', 1, 10, 23, '3591 Nec, Avenue', 10, NULL, NULL, '(612) 672-9478', 1, '1 (875) 962-0909', 'Hill', '1695040925899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2535, 784, 'CLI22-0404', 'Netus Et Malesuada Incorporate', 1, 10, 23, '185-1118 Sed, Avenue', 10, NULL, NULL, '(768) 788-9990', 1, '1 (919) 571-8479', 'Rios', '1684111219999.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2536, 785, 'CLI22-0405', 'Ante Blandit Viverra Incorpora', 1, 10, 23, 'P.O. Box 532, 2097 Ut Rd.', 10, NULL, NULL, '(649) 935-3401', 1, '1 (623) 996-4522', 'Bradley', '1607050557799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2537, 786, 'CLI22-0406', 'Sit Amet PC', 1, 10, 23, '6020 Nisl Rd.', 10, NULL, NULL, '(873) 422-0209', 1, '1 (426) 828-1860', 'Todd', '1612032227599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2538, 787, 'CLI22-0407', 'Cum Sociis Natoque Foundation', 1, 10, 23, '801-9901 Cum Avenue', 10, NULL, NULL, '(394) 783-9710', 1, '1 (560) 270-7426', 'Mcgowan', '1692111629099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2539, 788, 'CLI22-0408', 'Dui Augue Associates', 1, 10, 23, 'P.O. Box 648, 3110 Metus Road', 10, NULL, NULL, '(472) 104-3359', 1, '1 (252) 155-5059', 'Clarke', '1601031493299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2540, 789, 'CLI22-0409', 'Ornare Limited', 1, 10, 23, 'P.O. Box 348, 2133 Justo Avenue', 10, NULL, NULL, '(959) 693-1536', 1, '1 (307) 170-3738', 'Gray', '1610112754699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2541, 790, 'CLI22-0410', 'Ullamcorper Industries', 1, 10, 23, '3236 Sit Ave', 10, NULL, NULL, '(254) 343-1897', 1, '1 (139) 323-9129', 'Mathews', '1666061968099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2542, 791, 'CLI22-0411', 'Amet Ornare Lectus Limited', 1, 10, 23, '8885 Penatibus Street', 10, NULL, NULL, '(114) 438-3107', 1, '1 (585) 395-1386', 'Aguirre', '1676041193999.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2543, 792, 'CLI22-0412', 'Erat Volutpat Nulla Corporatio', 1, 10, 23, 'P.O. Box 908, 8004 Nunc. Av.', 10, NULL, NULL, '(600) 152-6302', 1, '1 (381) 518-0564', 'Bernard', '1613092456499.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2544, 801, 'CLI22-0413', 'Erat Volutpat Nulla Corporatio', 1, 10, 23, 'P.O. Box 908, 8004 Nunc. Av.', 10, NULL, NULL, '(600) 152-6302', 1, '1 (381) 518-0564', 'Bernard', '1613092456499.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2545, 793, 'CLI22-0414', 'Sed Auctor LLP', 1, 10, 23, 'Ap #653-7047 Vel, Av.', 10, NULL, NULL, '(673) 444-2529', 1, '1 (492) 862-4351', 'Dalton', '1601101164299.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2546, 794, 'CLI22-0415', 'Mattis Semper Dui Incorporated', 1, 10, 23, 'P.O. Box 714, 138 Faucibus Rd.', 10, NULL, NULL, '(698) 227-9765', 1, '1 (650) 201-7119', 'Ellison', '1639101748699.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2547, 795, 'CLI22-0416', 'Eu Neque Associates', 1, 10, 23, 'P.O. Box 719, 1423 In Av.', 10, NULL, NULL, '(725) 163-3234', 1, '1 (108) 169-0892', 'Lang', '1699032642199.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2548, 796, 'CLI22-0417', 'Vel Turpis Corp.', 1, 10, 23, 'Ap #417-931 Neque. St.', 10, NULL, NULL, '(711) 283-0360', 1, '1 (611) 901-7387', 'Madden', '1615080418399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2549, 797, 'CLI22-0418', 'Ut Ltd', 1, 10, 23, '735-6904 Ultrices. Rd.', 10, NULL, NULL, '(809) 632-8695', 1, '1 (513) 791-4923', 'Callahan', '1643031185799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2550, 798, 'CLI22-0419', 'Feugiat Company', 1, 10, 23, 'Ap #818-1142 Est Avenue', 10, NULL, NULL, '(284) 884-0810', 1, '1 (403) 339-7022', 'Mullins', '1670032817899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2551, 799, 'CLI22-0420', 'Erat Vivamus Nisi Foundation', 1, 10, 23, '9552 Praesent Avenue', 10, NULL, NULL, '(904) 639-0725', 1, '1 (392) 297-0786', 'Irwin', '1675082170499.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2552, 800, 'CLI22-0421', 'Lacus Ut Nec Institute', 1, 10, 23, '700-3250 Magna. Rd.', 10, NULL, NULL, '(292) 128-1360', 1, '1 (105) 776-6827', 'Glenn', '1677122100299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2553, 792, 'CLI22-0422', 'Erat Volutpat Nulla Corporatio', 1, 10, 23, 'Ap #375-7016 Urna Street', 10, NULL, NULL, '(789) 346-5859', 1, '1 (156) 840-3325', 'Payne', '1669010120799.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2554, 801, 'CLI22-0423', 'Erat Volutpat Nulla Corporatio', 1, 10, 23, 'Ap #375-7016 Urna Street', 10, NULL, NULL, '(789) 346-5859', 1, '1 (156) 840-3325', 'Payne', '1669010120799.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2555, 802, 'CLI22-0424', 'Lobortis LLC', 1, 10, 23, '3312 Facilisis. St.', 10, NULL, NULL, '(566) 972-4797', 1, '1 (603) 205-9036', 'England', '1637102288699.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2556, 485, 'CLI22-0425', 'Nec Incorporated', 1, 10, 23, '409-3008 Erat. Avenue', 10, NULL, NULL, '(341) 267-0229', 1, '1 (539) 732-2904', 'Campos', '1658021146799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2557, 803, 'CLI22-0426', 'Nec Incorporated', 1, 10, 23, '409-3008 Erat. Avenue', 10, NULL, NULL, '(341) 267-0229', 1, '1 (539) 732-2904', 'Campos', '1658021146799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2558, 804, 'CLI22-0427', 'Turpis Consulting', 1, 10, 23, 'Ap #216-3720 Duis Av.', 10, NULL, NULL, '(236) 157-5165', 1, '1 (634) 165-9572', 'Best', '1623052673299.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2559, 805, 'CLI22-0428', 'Nisi Sem Semper Consulting', 1, 10, 23, '782-7134 Eu Rd.', 10, NULL, NULL, '(214) 301-4442', 1, '1 (546) 128-4046', 'Kane', '1698121572099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2560, 806, 'CLI22-0429', 'Lectus Cum Sociis Industries', 1, 10, 23, 'P.O. Box 823, 1337 Scelerisque Ave', 10, NULL, NULL, '(584) 937-6767', 1, '1 (393) 718-2061', 'Beasley', '1632032228199.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2561, 807, 'CLI22-0430', 'Enim Condimentum Incorporated', 1, 10, 23, 'Ap #445-2327 Donec Street', 10, NULL, NULL, '(310) 949-8907', 1, '1 (943) 893-8494', 'Banks', '1678040170599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2562, 808, 'CLI22-0431', 'In Industries', 1, 10, 23, '481-3210 Quis, Rd.', 10, NULL, NULL, '(373) 981-0951', 1, '1 (640) 826-0095', 'Vaughn', '1650122557799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2563, 809, 'CLI22-0432', 'Rutrum Eu Ultrices Corporation', 1, 10, 23, 'P.O. Box 264, 5551 Ante Avenue', 10, NULL, NULL, '(811) 840-0858', 1, '1 (307) 790-6379', 'Witt', '1674051739299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2564, 810, 'CLI22-0433', 'Ultrices Iaculis Odio Inc.', 1, 10, 23, 'P.O. Box 884, 9899 Donec St.', 10, NULL, NULL, '(834) 923-5878', 1, '1 (878) 920-2443', 'Marshall', '1601021680399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2565, 811, 'CLI22-0434', 'Ullamcorper Eu PC', 1, 10, 23, '7906 Nulla St.', 10, NULL, NULL, '(107) 259-3129', 1, '1 (750) 349-8314', 'Lewis', '1675070675799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2566, 812, 'CLI22-0435', 'Orci Donec Nibh Corp.', 1, 10, 23, 'P.O. Box 754, 3839 Lobortis, Rd.', 10, NULL, NULL, '(162) 435-3372', 1, '1 (960) 711-0702', 'Hampton', '1640111517299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2567, 813, 'CLI22-0436', 'Ante Vivamus Non Corporation', 1, 10, 23, '731-1570 Vulputate, Street', 10, NULL, NULL, '(225) 459-7890', 1, '1 (768) 220-9042', 'Elliott', '1698071835099.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2568, 814, 'CLI22-0437', 'Rutrum Eu Ultrices Associates', 1, 10, 23, 'Ap #645-6000 Etiam Rd.', 10, NULL, NULL, '(298) 570-7714', 1, '1 (479) 318-4239', 'Rice', '1694012475299.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2569, 815, 'CLI22-0438', 'Arcu Consulting', 1, 10, 23, '4569 Dolor, Av.', 10, NULL, NULL, '(588) 536-7505', 1, '1 (185) 693-6862', 'Castro', '1642122322499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2570, 816, 'CLI22-0439', 'A Industries', 1, 10, 23, 'Ap #328-1227 Eu Ave', 10, NULL, NULL, '(894) 836-9134', 1, '1 (922) 256-9973', 'Duncan', '1602082041599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2571, 817, 'CLI22-0440', 'Sed Auctor Inc.', 1, 10, 23, '3433 Est, Avenue', 10, NULL, NULL, '(209) 931-0349', 1, '1 (186) 752-7381', 'Dejesus', '1694122502199.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2572, 818, 'CLI22-0441', 'Feugiat Corp.', 1, 10, 23, '1408 Eget St.', 10, NULL, NULL, '(512) 278-5759', 1, '1 (952) 917-8509', 'Hopkins', '1691121396299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2573, 819, 'CLI22-0442', 'Ultrices Posuere Cubilia Insti', 1, 10, 23, '161-457 Vulputate St.', 10, NULL, NULL, '(626) 271-4512', 1, '1 (473) 144-9532', 'Flores', '1632100781899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2574, 629, 'CLI22-0443', 'Augue Corporation', 1, 10, 23, 'Ap #324-9225 Vestibulum, Avenue', 10, NULL, NULL, '(293) 418-3374', 1, '1 (202) 901-6956', 'Pratt', '1643040847299.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2575, 820, 'CLI22-0444', 'Augue Corporation', 1, 10, 23, 'Ap #324-9225 Vestibulum, Avenue', 10, NULL, NULL, '(293) 418-3374', 1, '1 (202) 901-6956', 'Pratt', '1643040847299.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2576, 821, 'CLI22-0445', 'Cras Dolor Dolor Industries', 1, 10, 23, '885-598 Ante Road', 10, NULL, NULL, '(482) 691-4805', 1, '1 (623) 267-7044', 'Barrett', '1605112987799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2577, 822, 'CLI22-0446', 'Faucibus Orci Inc.', 1, 10, 23, '1188 Molestie Road', 10, NULL, NULL, '(335) 515-8424', 1, '1 (772) 796-6416', 'Rose', '1679021004399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2578, 823, 'CLI22-0447', 'Ligula Inc.', 1, 10, 23, '163-1199 Nec, St.', 10, NULL, NULL, '(648) 441-9493', 1, '1 (339) 312-9430', 'Ramirez', '1621032720599.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2579, 824, 'CLI22-0448', 'Metus In Incorporated', 1, 10, 23, '3488 Mi Road', 10, NULL, NULL, '(689) 999-5682', 1, '1 (343) 833-9160', 'Melton', '1689051046499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2580, 825, 'CLI22-0449', 'Aliquam PC', 1, 10, 23, '619-766 Lacus. Road', 10, NULL, NULL, '(779) 280-5560', 1, '1 (839) 456-4752', 'Strickland', '1624071378499.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2581, 826, 'CLI22-0450', 'Cras Eu Tellus Consulting', 1, 10, 23, '3710 Mauris Avenue', 10, NULL, NULL, '(426) 763-5072', 1, '1 (332) 995-8757', 'Park', '1646112454199.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2582, 827, 'CLI22-0451', 'Malesuada Malesuada Corp.', 1, 10, 23, 'P.O. Box 728, 7674 Sed Avenue', 10, NULL, NULL, '(244) 927-6022', 1, '1 (976) 525-9830', 'Santos', '1629070322999.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2583, 828, 'CLI22-0452', 'Eros Non Foundation', 1, 10, 23, 'Ap #599-8696 Donec Ave', 10, NULL, NULL, '(412) 800-0489', 1, '1 (979) 533-3537', 'Green', '1617090126999.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2584, 829, 'CLI22-0453', 'A Corporation', 1, 10, 23, '4579 Malesuada St.', 10, NULL, NULL, '(840) 101-7144', 1, '1 (545) 431-2221', 'Townsend', '1605070542599.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2585, 830, 'CLI22-0454', 'Ipsum Dolor Institute', 1, 10, 23, '866-9480 Tellus, Road', 10, NULL, NULL, '(663) 698-1339', 1, '1 (408) 594-7319', 'Briggs', '1688081312199.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2586, 831, 'CLI22-0455', 'Tincidunt Nibh Consulting', 1, 10, 23, '7132 Phasellus Street', 10, NULL, NULL, '(618) 383-1614', 1, '1 (115) 578-5991', 'Nolan', '1677081136399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2587, 832, 'CLI22-0456', 'Sed Molestie LLP', 1, 10, 23, 'Ap #751-1665 Vitae St.', 10, NULL, NULL, '(690) 167-5284', 1, '1 (793) 692-6349', 'Stone', '1696090555199.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2588, 833, 'CLI22-0457', 'Rutrum Justo Praesent LLP', 1, 10, 23, '591-7957 Id Road', 10, NULL, NULL, '(128) 942-4336', 1, '1 (462) 274-8288', 'Miller', '1664030638299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2589, 834, 'CLI22-0458', 'Et Netus Industries', 1, 10, 23, '231-8950 Adipiscing, Rd.', 10, NULL, NULL, '(172) 293-6274', 1, '1 (927) 138-4626', 'Chaney', '1654062654699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2590, 835, 'CLI22-0459', 'Phasellus PC', 1, 10, 23, 'Ap #933-4534 Dolor Road', 10, NULL, NULL, '(525) 428-3003', 1, '1 (377) 407-4273', 'Freeman', '1668062520399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2591, 836, 'CLI22-0460', 'Venenatis Limited', 1, 10, 23, 'P.O. Box 398, 9529 Tortor. Road', 10, NULL, NULL, '(470) 156-4431', 1, '1 (237) 825-2866', 'Alston', '1642052194099.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2592, 837, 'CLI22-0461', 'Nulla Integer Foundation', 1, 10, 23, 'P.O. Box 972, 2413 Litora Street', 10, NULL, NULL, '(971) 881-3053', 1, '1 (118) 351-8629', 'Robles', '1638112982899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2593, 838, 'CLI22-0462', 'A PC', 1, 10, 23, '1893 Eleifend Avenue', 10, NULL, NULL, '(305) 862-3182', 1, '1 (368) 964-9030', 'Walls', '1631072719199.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2594, 839, 'CLI22-0463', 'Mauris Associates', 1, 10, 23, '914-6062 Sed Avenue', 10, NULL, NULL, '(465) 189-2534', 1, '1 (555) 570-9161', 'Peters', '1664110206699.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2595, 840, 'CLI22-0464', 'Quisque Inc.', 1, 10, 23, '975-1207 Iaculis Rd.', 10, NULL, NULL, '(801) 975-5130', 1, '1 (737) 856-8289', 'Simmons', '1639080171699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2596, 841, 'CLI22-0465', 'Eu LLP', 1, 10, 23, 'Ap #775-7241 Nunc Road', 10, NULL, NULL, '(604) 158-4676', 1, '1 (234) 594-9592', 'Harrington', '1622081786999.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2597, 842, 'CLI22-0466', 'Montes Nascetur Ridiculus Limi', 1, 10, 23, 'P.O. Box 942, 9708 Mi Rd.', 10, NULL, NULL, '(954) 519-6399', 1, '1 (181) 659-1363', 'Armstrong', '1644060658099.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2598, 843, 'CLI22-0467', 'Mi Enim LLC', 1, 10, 23, 'Ap #457-8627 Imperdiet St.', 10, NULL, NULL, '(238) 975-8094', 1, '1 (344) 231-3202', 'Ingram', '1613112297299.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2599, 844, 'CLI22-0468', 'Nec Institute', 1, 10, 23, '393-5840 Pede. Rd.', 10, NULL, NULL, '(485) 822-7650', 1, '1 (419) 697-0023', 'Thornton', '1671051072099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2600, 845, 'CLI22-0469', 'Ultrices Mauris Corp.', 1, 10, 23, '9558 Tellus Road', 10, NULL, NULL, '(719) 984-0621', 1, '1 (394) 584-3436', 'Mcmillan', '1690042578699.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2601, 846, 'CLI22-0470', 'Adipiscing Company', 1, 10, 23, '5707 In Avenue', 10, NULL, NULL, '(562) 352-0633', 1, '1 (402) 290-6144', 'Ratliff', '1681120305899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2602, 847, 'CLI22-0471', 'Est Inc.', 1, 10, 23, '403 Egestas. Avenue', 10, NULL, NULL, '(937) 496-3018', 1, '1 (439) 588-9516', 'Odom', '1681062107399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2603, 848, 'CLI22-0472', 'Ligula Aliquam Corporation', 1, 10, 23, 'P.O. Box 769, 325 Ut St.', 10, NULL, NULL, '(988) 272-5853', 1, '1 (938) 351-4420', 'Osborne', '1651092610799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2604, 849, 'CLI22-0473', 'Risus Donec Corp.', 1, 10, 23, 'P.O. Box 198, 9053 Malesuada Rd.', 10, NULL, NULL, '(290) 752-5595', 1, '1 (580) 257-1011', 'Francis', '1666060794699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2605, 850, 'CLI22-0474', 'Vitae Corp.', 1, 10, 23, '6110 Pede, Road', 10, NULL, NULL, '(307) 494-6519', 1, '1 (254) 351-2199', 'Baxter', '1678121672099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2606, 851, 'CLI22-0475', 'Donec Luctus Aliquet Incorpora', 1, 10, 23, 'P.O. Box 410, 2854 Ante Road', 10, NULL, NULL, '(852) 195-3527', 1, '1 (784) 617-2343', 'Keith', '1609050898799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2607, 852, 'CLI22-0476', 'Mauris Rhoncus Foundation', 1, 10, 23, '7014 Sed Ave', 10, NULL, NULL, '(261) 588-6528', 1, '1 (127) 321-3233', 'Gutierrez', '1679043021199.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2608, 853, 'CLI22-0477', 'Vitae Orci Foundation', 1, 10, 23, '541-9155 Eu, St.', 10, NULL, NULL, '(899) 745-4433', 1, '1 (103) 200-3444', 'Roth', '1634032965999.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2609, 854, 'CLI22-0478', 'Malesuada Augue Corporation', 1, 10, 23, 'P.O. Box 972, 3609 Lorem Rd.', 10, NULL, NULL, '(590) 370-8435', 1, '1 (403) 760-1244', 'Warren', '1624020375299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2610, 855, 'CLI22-0479', 'Auctor Associates', 1, 10, 23, '446 Ac Rd.', 10, NULL, NULL, '(262) 825-2214', 1, '1 (424) 373-0951', 'Lewis', '1663083084299.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2611, 856, 'CLI22-0480', 'Neque Morbi Quis Inc.', 1, 10, 23, '9900 Venenatis Rd.', 10, NULL, NULL, '(128) 873-6648', 1, '1 (979) 515-2565', 'Kelly', '1654091218599.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2612, 857, 'CLI22-0481', 'Vehicula Aliquet Libero Indust', 1, 10, 23, 'Ap #848-9798 Vitae, Ave', 10, NULL, NULL, '(169) 314-8439', 1, '1 (204) 561-4834', 'Reese', '1644080135599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2613, 858, 'CLI22-0482', 'Fringilla Corp.', 1, 10, 23, '4743 Pellentesque Avenue', 10, NULL, NULL, '(118) 867-9322', 1, '1 (923) 921-4329', 'Carroll', '1679022991899.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2614, 859, 'CLI22-0483', 'Lacus Industries', 1, 10, 23, 'Ap #938-250 Dignissim Rd.', 10, NULL, NULL, '(215) 744-9499', 1, '1 (531) 917-9925', 'Gillespie', '1674051368599.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2615, 860, 'CLI22-0484', 'Nascetur Associates', 1, 10, 23, '738-395 Consequat Road', 10, NULL, NULL, '(517) 734-2029', 1, '1 (868) 513-5940', 'Leon', '1656072561199.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2616, 861, 'CLI22-0485', 'Ut Pellentesque Foundation', 1, 10, 23, 'Ap #967-7499 Arcu. Avenue', 10, NULL, NULL, '(629) 844-0515', 1, '1 (703) 632-6874', 'Rowland', '1694090655599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2617, 862, 'CLI22-0486', 'Magnis Dis Industries', 1, 10, 23, 'Ap #644-280 Urna St.', 10, NULL, NULL, '(801) 822-5433', 1, '1 (150) 107-9764', 'Rollins', '1643053041399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2618, 863, 'CLI22-0487', 'Sodales Limited', 1, 10, 23, '6931 Etiam Avenue', 10, NULL, NULL, '(623) 753-1089', 1, '1 (546) 805-7225', 'Zamora', '1683081144399.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2619, 864, 'CLI22-0488', 'Leo Incorporated', 1, 10, 23, '4557 Integer Avenue', 10, NULL, NULL, '(366) 195-9691', 1, '1 (148) 556-0163', 'Nieves', '1625060623499.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2620, 865, 'CLI22-0489', 'Ridiculus Mus Donec Company', 1, 10, 23, 'P.O. Box 217, 5885 Sociis Avenue', 10, NULL, NULL, '(483) 937-5458', 1, '1 (103) 437-8743', 'Fry', '1665022715399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2621, 866, 'CLI22-0490', 'Non Corp.', 1, 10, 23, '1959 At, Avenue', 10, NULL, NULL, '(417) 268-2187', 1, '1 (309) 301-8220', 'Cameron', '1663012741899.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2622, 867, 'CLI22-0491', 'Bibendum Incorporated', 1, 10, 23, 'P.O. Box 103, 4921 Lorem Rd.', 10, NULL, NULL, '(771) 451-2256', 1, '1 (536) 104-2389', 'Mcneil', '1616102514799.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2623, 868, 'CLI22-0492', 'Magna Nec Associates', 1, 10, 23, '929-5428 Arcu St.', 10, NULL, NULL, '(254) 291-7032', 1, '1 (911) 394-3390', 'Fuller', '1678121729999.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2624, 869, 'CLI22-0493', 'Et Magnis Dis LLP', 1, 10, 23, 'P.O. Box 963, 9873 Eu Avenue', 10, NULL, NULL, '(600) 279-6767', 1, '1 (281) 971-2316', 'Shields', '1670052720399.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2625, 870, 'CLI22-0494', 'Vitae Odio Foundation', 1, 10, 23, '6785 Et Rd.', 10, NULL, NULL, '(399) 979-7303', 1, '1 (627) 687-0683', 'Ratliff', '1645030801799.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2626, 871, 'CLI22-0495', 'Sit Amet Corporation', 1, 10, 23, '646 Ornare, Ave', 10, NULL, NULL, '(697) 413-1147', 1, '1 (593) 660-8933', 'Pierce', '1682021412799.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2627, 607, 'CLI22-0496', 'Risus Limited', 1, 10, 23, 'P.O. Box 511, 9220 Dui St.', 10, NULL, NULL, '(256) 838-1602', 1, '1 (828) 891-3782', 'Clay', '1634061737299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2628, 872, 'CLI22-0497', 'Risus Limited', 1, 10, 23, 'P.O. Box 511, 9220 Dui St.', 10, NULL, NULL, '(256) 838-1602', 1, '1 (828) 891-3782', 'Clay', '1634061737299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2629, 873, 'CLI22-0498', 'Sit Amet Diam Inc.', 1, 10, 23, '8405 Magnis St.', 10, NULL, NULL, '(629) 781-6065', 1, '1 (928) 555-9458', 'Snider', '1659072680599.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2630, 874, 'CLI22-0499', 'Parturient Inc.', 1, 10, 23, '4341 Orci Rd.', 10, NULL, NULL, '(816) 313-5442', 1, '1 (165) 639-2801', 'Daugherty', '1622050526699.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2631, 875, 'CLI22-0500', 'Proin Vel Corporation', 1, 10, 23, '9488 Accumsan St.', 10, NULL, NULL, '(777) 146-8146', 1, '1 (838) 808-4282', 'Mcneil', '1643041282399.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2632, 876, 'CLI22-0501', 'Mauris LLP', 1, 10, 23, '714-6136 Libero Ave', 10, NULL, NULL, '(291) 936-0999', 1, '1 (900) 795-7930', 'Terrell', '1630011434399.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2633, 877, 'CLI22-0502', 'Magnis Dis Corp.', 1, 10, 23, 'Ap #456-4140 Tristique Road', 10, NULL, NULL, '(265) 788-6290', 1, '1 (904) 431-4356', 'Barker', '1652102306499.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2634, 878, 'CLI22-0503', 'Enim Condimentum Eget Institut', 1, 10, 23, 'P.O. Box 768, 2512 Nunc St.', 10, NULL, NULL, '(677) 799-5138', 1, '1 (787) 981-8141', 'Byrd', '1672112929699.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2635, 879, 'CLI22-0504', 'Sit Amet Consectetuer Limited', 1, 10, 23, '3275 Montes, Rd.', 10, NULL, NULL, '(812) 483-3538', 1, '1 (844) 538-3579', 'Baker', '1673030156099.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2636, 880, 'CLI22-0505', 'Tincidunt Orci Quis Company', 1, 10, 23, 'P.O. Box 232, 677 At Rd.', 10, NULL, NULL, '(937) 862-1778', 1, '1 (782) 205-3164', 'Gardner', '1629082690099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2637, 881, 'CLI22-0506', 'Fringilla Porttitor Limited', 1, 10, 23, '298-4447 Dapibus St.', 10, NULL, NULL, '(471) 277-2385', 1, '1 (517) 835-0224', 'Justice', '1618080819299.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2638, 882, 'CLI22-0507', 'Leo In Corp.', 1, 10, 23, '918-9412 Pede. Street', 10, NULL, NULL, '(777) 433-4049', 1, '1 (532) 314-6769', 'Riley', '1655010714099.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2639, 883, 'CLI22-0508', 'Sociis PC', 1, 10, 23, 'P.O. Box 191, 5475 Duis Ave', 10, NULL, NULL, '(895) 925-6670', 1, '1 (494) 836-3784', 'Mcmahon', '1614111102399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2640, 884, 'CLI22-0509', 'Ornare Incorporated', 1, 10, 23, 'P.O. Box 871, 7045 Sed St.', 10, NULL, NULL, '(876) 272-0680', 1, '1 (123) 806-6930', 'Blankenship', '1628042887499.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2641, 885, 'CLI22-0510', 'Eget Varius Consulting', 1, 10, 23, 'Ap #318-3385 Ultrices St.', 10, NULL, NULL, '(390) 214-6058', 1, '1 (295) 943-7906', 'Bates', '1674063035799.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2642, 886, 'CLI22-0511', 'Enim Gravida Industries', 1, 10, 23, '6934 Faucibus Rd.', 10, NULL, NULL, '(572) 720-9061', 1, '1 (976) 333-9975', 'Rosa', '1609010531899.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2643, 620, 'CLI22-0512', 'In Associates', 1, 10, 23, 'P.O. Box 627, 4421 Sem Avenue', 10, NULL, NULL, '(150) 725-6254', 1, '1 (446) 852-5390', 'Pierce', '1612100892399.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2644, 887, 'CLI22-0513', 'In Associates', 1, 10, 23, 'P.O. Box 627, 4421 Sem Avenue', 10, NULL, NULL, '(150) 725-6254', 1, '1 (446) 852-5390', 'Pierce', '1612100892399.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2645, 888, 'CLI22-0514', 'Molestie Sed Id Limited', 1, 10, 23, '2476 Eu Street', 10, NULL, NULL, '(567) 190-5388', 1, '1 (190) 827-7271', 'Cooper', '1676092037299.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2646, 889, 'CLI22-0515', 'A Feugiat Incorporated', 1, 10, 23, 'Ap #572-5510 Vestibulum Ave', 10, NULL, NULL, '(868) 268-5865', 1, '1 (915) 473-3153', 'Waters', '1643121460399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2647, 890, 'CLI22-0516', 'Netus Et Malesuada Company', 1, 10, 23, 'P.O. Box 998, 9217 Pellentesque Road', 10, NULL, NULL, '(996) 281-1262', 1, '1 (201) 930-7811', 'Conrad', '1647081065899.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2648, 702, 'CLI22-0517', 'Mauris Incorporated', 1, 10, 23, '355-5185 In Rd.', 10, NULL, NULL, '(933) 281-0136', 1, '1 (948) 440-9816', 'Gamble', '1667100727099.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2649, 891, 'CLI22-0518', 'Mauris Incorporated', 1, 10, 23, '355-5185 In Rd.', 10, NULL, NULL, '(933) 281-0136', 1, '1 (948) 440-9816', 'Gamble', '1667100727099.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2650, 892, 'CLI22-0519', 'Nisi Inc.', 1, 10, 23, '4460 Sagittis. Av.', 10, NULL, NULL, '(741) 703-4679', 1, '1 (110) 932-0425', 'Larsen', '1651061063099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2651, 893, 'CLI22-0520', 'Eros Nec Institute', 1, 10, 23, '220-163 Maecenas St.', 10, NULL, NULL, '(190) 911-6963', 1, '1 (439) 850-5841', 'Boyd', '1619120825599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2652, 894, 'CLI22-0521', 'Scelerisque Sed PC', 1, 10, 23, '6683 Pulvinar Rd.', 10, NULL, NULL, '(661) 877-4287', 1, '1 (845) 370-4347', 'Wise', '1614012716199.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2653, 895, 'CLI22-0522', 'Lorem Auctor Inc.', 1, 10, 23, 'Ap #127-5744 Malesuada. Road', 10, NULL, NULL, '(998) 993-2095', 1, '1 (197) 189-0922', 'Porter', '1605111120099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2654, 896, 'CLI22-0523', 'Nec Mollis Industries', 1, 10, 23, 'Ap #416-5857 Bibendum St.', 10, NULL, NULL, '(958) 634-1660', 1, '1 (538) 852-5035', 'Byrd', '1600091233399.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2655, 897, 'CLI22-0524', 'Eget Varius Ultrices Consultin', 1, 10, 23, 'Ap #958-5584 Tempus St.', 10, NULL, NULL, '(949) 411-6300', 1, '1 (513) 622-9897', 'Hines', '1663122027999.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2656, 898, 'CLI22-0525', 'Quam Dignissim Pharetra Corp.', 1, 10, 23, '1721 Eu Road', 10, NULL, NULL, '(174) 369-5503', 1, '1 (156) 949-5268', 'Burns', '1602030732399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2657, 899, 'CLI22-0526', 'Eget Lacus Consulting', 1, 10, 23, 'Ap #799-4696 Mi. St.', 10, NULL, NULL, '(752) 959-6937', 1, '1 (992) 746-7051', 'Chavez', '1664050120199.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2658, 640, 'CLI22-0527', 'Lacus Associates', 1, 10, 23, '815-2087 Ligula. Ave', 10, NULL, NULL, '(423) 535-5593', 1, '1 (239) 392-6569', 'Campos', '1620082164199.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2659, 844, 'CLI22-0528', 'Nec Institute', 1, 10, 23, 'Ap #203-3798 Quam. St.', 10, NULL, NULL, '(278) 419-9965', 1, '1 (529) 715-4405', 'Pugh', '1661102859699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2660, 901, 'CLI22-0529', 'Lacus Associates', 1, 10, 23, 'Ap #183-1940 Ornare, Road', 10, NULL, NULL, '(699) 373-3081', 1, '1 (252) 931-0961', 'Lawson', '1638071853099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2661, 903, 'CLI22-0530', 'Nec Institute', 1, 10, 23, '393-5840 Pede. Rd.', 10, NULL, NULL, '(485) 822-7650', 1, '1 (419) 697-0023', 'Thornton', '1671051072099.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2662, 900, 'CLI22-0531', 'Proin Dolor Industries', 1, 10, 23, 'P.O. Box 237, 8273 Aenean St.', 10, NULL, NULL, '(908) 461-4624', 1, '1 (290) 360-9468', 'Macias', '1622061410699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2663, 901, 'CLI22-0532', 'Lacus Associates', 1, 10, 23, '815-2087 Ligula. Ave', 10, NULL, NULL, '(423) 535-5593', 1, '1 (239) 392-6569', 'Campos', '1620082164199.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2664, 902, 'CLI22-0533', 'Diam PC', 1, 10, 23, '946-9949 Torquent St.', 10, NULL, NULL, '(606) 326-6282', 1, '1 (399) 509-0556', 'Livingston', '1612061515799.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2665, 903, 'CLI22-0534', 'Nec Institute', 1, 10, 23, 'Ap #203-3798 Quam. St.', 10, NULL, NULL, '(278) 419-9965', 1, '1 (529) 715-4405', 'Pugh', '1661102859699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2666, 904, 'CLI22-0535', 'Turpis Non Enim LLC', 1, 10, 23, '6158 Pharetra Rd.', 10, NULL, NULL, '(216) 765-0165', 1, '1 (494) 693-5590', 'Pace', '1609120475499.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2667, 905, 'CLI22-0536', 'Volutpat Nulla Facilisis Found', 1, 10, 23, '204-2787 Eget, Av.', 10, NULL, NULL, '(588) 329-5638', 1, '1 (406) 855-7781', 'Stevens', '1670090776099.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2668, 906, 'CLI22-0537', 'Nulla Cras Industries', 1, 10, 23, '1659 Dictum Av.', 10, NULL, NULL, '(837) 361-0040', 1, '1 (633) 151-5797', 'Buck', '1639050369699.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2669, 907, 'CLI22-0538', 'Iaculis Lacus Ltd', 1, 10, 23, '995-2440 Dolor Av.', 10, NULL, NULL, '(335) 937-1190', 1, '1 (702) 572-9596', 'Holden', '1619121071399.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2670, 908, 'CLI22-0539', 'Diam Foundation', 1, 10, 23, 'P.O. Box 711, 2502 Vel St.', 10, NULL, NULL, '(734) 949-8213', 1, '1 (212) 418-0126', 'Flores', '1624080426599.0', NULL, NULL, 'image3.psd', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2671, 909, 'CLI22-0540', 'Lacus Pede Foundation', 1, 10, 23, '314-5897 Phasellus Rd.', 10, NULL, NULL, '(342) 854-3795', 1, '1 (592) 725-0987', 'Griffith', '1645092107999.0', NULL, NULL, 'image1.jpg', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2672, 910, 'CLI22-0541', 'Erat Vel Pede Inc.', 1, 10, 23, 'Ap #907-5798 Tellus St.', 10, NULL, NULL, '(140) 109-2899', 1, '1 (210) 156-4679', 'Nelson', '1636021233599.0', NULL, NULL, 'image2.png', 1, 'sa', '2022-10-03 11:20:07', NULL, NULL);
INSERT INTO `t_mas_client` VALUES (2673, 911, 'CLI22-0016', 'PT. XSIS MITRA UTAMA', 1, 1, 1, 'Jakarta Raya', NULL, NULL, 'EQUINE TECHNOLOGIES GROUP, as a holding group of information techology solution companies, was established and projected to be the leading edge technology provider and solution partner. The strategic solutions it contain, were designed and set up uniquely with high quality of service to drive solid solution planning, implementation, and support, that strongly promote customers’ productivity, speed, efficiency, and security.', '021999663325', NULL, NULL, 'RISKA', '0829333666999', NULL, NULL, NULL, 1, NULL, '2022-11-22 14:37:19', NULL, NULL);

-- ----------------------------
-- Table structure for t_mas_common
-- ----------------------------
DROP TABLE IF EXISTS `t_mas_common`;
CREATE TABLE `t_mas_common`  (
  `COM_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `COM_HEADCD` int(11) NULL DEFAULT NULL,
  `COM_TYPECD` int(11) NULL DEFAULT NULL,
  `COM_DESCRE` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`COM_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 76 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mas_common
-- ----------------------------
INSERT INTO `t_mas_common` VALUES (1, 1, 0, 'RELIGION');
INSERT INTO `t_mas_common` VALUES (2, 1, 1, 'ISLAM');
INSERT INTO `t_mas_common` VALUES (3, 1, 2, 'BUDHA');
INSERT INTO `t_mas_common` VALUES (4, 1, 3, 'KRISTEN');
INSERT INTO `t_mas_common` VALUES (5, 1, 4, 'KATOLIK');
INSERT INTO `t_mas_common` VALUES (6, 1, 5, 'HINDU');
INSERT INTO `t_mas_common` VALUES (9, 2, 0, 'SEX');
INSERT INTO `t_mas_common` VALUES (10, 2, 1, 'PRIA');
INSERT INTO `t_mas_common` VALUES (11, 2, 2, 'WANITA');
INSERT INTO `t_mas_common` VALUES (12, 3, 1, 'Prof.');
INSERT INTO `t_mas_common` VALUES (13, 3, 2, 'S3');
INSERT INTO `t_mas_common` VALUES (14, 3, 3, 'S2');
INSERT INTO `t_mas_common` VALUES (15, 3, 4, 'S1');
INSERT INTO `t_mas_common` VALUES (16, 3, 5, 'D3');
INSERT INTO `t_mas_common` VALUES (17, 3, 6, 'D2');
INSERT INTO `t_mas_common` VALUES (18, 3, 7, 'D1');
INSERT INTO `t_mas_common` VALUES (19, 3, 8, 'SLTA');
INSERT INTO `t_mas_common` VALUES (20, 3, 9, 'SLTP');
INSERT INTO `t_mas_common` VALUES (21, 3, 10, 'SD');
INSERT INTO `t_mas_common` VALUES (22, 3, 11, 'SMF');
INSERT INTO `t_mas_common` VALUES (27, 4, 0, 'LEVEL USER');
INSERT INTO `t_mas_common` VALUES (28, 4, 99, 'SUPER USER');
INSERT INTO `t_mas_common` VALUES (29, 4, 1, 'ADMIN');
INSERT INTO `t_mas_common` VALUES (30, 4, 2, 'USER');
INSERT INTO `t_mas_common` VALUES (31, 16, 1, 'YES');
INSERT INTO `t_mas_common` VALUES (32, 16, 0, 'NO');
INSERT INTO `t_mas_common` VALUES (33, 6, 0, 'ACTIVE STATUS');
INSERT INTO `t_mas_common` VALUES (34, 6, 1, 'AKTIF');
INSERT INTO `t_mas_common` VALUES (35, 6, 2, 'NON AKTIF');
INSERT INTO `t_mas_common` VALUES (36, 7, 0, 'COUNTRY');
INSERT INTO `t_mas_common` VALUES (37, 7, 1, 'INDONESIA');
INSERT INTO `t_mas_common` VALUES (38, 7, 2, 'JAPAN');
INSERT INTO `t_mas_common` VALUES (39, 8, 0, 'BRANCH');
INSERT INTO `t_mas_common` VALUES (40, 8, 1, 'JAPAN');
INSERT INTO `t_mas_common` VALUES (41, 8, 2, 'INDONESIA');
INSERT INTO `t_mas_common` VALUES (42, 9, 0, 'SPG CATEGORY');
INSERT INTO `t_mas_common` VALUES (43, 9, 1, 'SILVER');
INSERT INTO `t_mas_common` VALUES (44, 9, 2, 'GOLD');
INSERT INTO `t_mas_common` VALUES (45, 9, 3, 'PLATINUM');
INSERT INTO `t_mas_common` VALUES (46, 9, 4, 'TITANIUM');
INSERT INTO `t_mas_common` VALUES (47, 10, 0, 'SAMPLE PRODUCT CATEGORY');
INSERT INTO `t_mas_common` VALUES (48, 10, 1, 'PROMO MATERIAL');
INSERT INTO `t_mas_common` VALUES (49, 10, 2, 'PROMO PRODUCT');
INSERT INTO `t_mas_common` VALUES (50, 11, 0, 'INCTV STATUS');
INSERT INTO `t_mas_common` VALUES (51, 11, 1, 'PENDING');
INSERT INTO `t_mas_common` VALUES (52, 11, 2, 'APPROVED PM');
INSERT INTO `t_mas_common` VALUES (53, 11, 3, 'APPROVED HOS');
INSERT INTO `t_mas_common` VALUES (54, 11, 4, 'FINANCE TRANSFERED');
INSERT INTO `t_mas_common` VALUES (55, 12, 0, 'IT EXPANSES');
INSERT INTO `t_mas_common` VALUES (56, 12, 1, 'INTERNET');
INSERT INTO `t_mas_common` VALUES (57, 12, 2, 'HARDWARE');
INSERT INTO `t_mas_common` VALUES (58, 12, 3, 'SERVICE');
INSERT INTO `t_mas_common` VALUES (59, 13, 0, 'ISP');
INSERT INTO `t_mas_common` VALUES (60, 13, 1, 'OXYGEN');
INSERT INTO `t_mas_common` VALUES (61, 13, 2, 'MY REPUBLIC');
INSERT INTO `t_mas_common` VALUES (62, 13, 3, 'BIZNET METRONET');
INSERT INTO `t_mas_common` VALUES (63, 14, 0, 'STATUS PERNIKAHAAN');
INSERT INTO `t_mas_common` VALUES (64, 14, 1, 'SINGLE');
INSERT INTO `t_mas_common` VALUES (65, 14, 2, 'MENIKAH');
INSERT INTO `t_mas_common` VALUES (66, 14, 3, 'CERAI');
INSERT INTO `t_mas_common` VALUES (67, 15, 0, 'JENIS KELUARGA');
INSERT INTO `t_mas_common` VALUES (68, 15, 1, 'PASANGAN');
INSERT INTO `t_mas_common` VALUES (69, 15, 2, 'ANAK');
INSERT INTO `t_mas_common` VALUES (70, 5, 0, 'BIDANG');
INSERT INTO `t_mas_common` VALUES (71, 5, 1, 'INDUSTRY');
INSERT INTO `t_mas_common` VALUES (72, 5, 2, 'EDUCATION');
INSERT INTO `t_mas_common` VALUES (73, 5, 3, 'TECHNOLOGY');
INSERT INTO `t_mas_common` VALUES (74, 5, 4, 'CUTI DIREJECT');
INSERT INTO `t_mas_common` VALUES (75, 4, 3, 'REKANAN');

-- ----------------------------
-- Table structure for t_mas_contry
-- ----------------------------
DROP TABLE IF EXISTS `t_mas_contry`;
CREATE TABLE `t_mas_contry`  (
  `CON_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `CON_INTIAL` char(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CON_NAMESS` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CON_USRCRT` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CON_DATCRT` datetime NULL DEFAULT NULL,
  `CON_USRUPD` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CON_DATUPD` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`CON_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for t_mas_menuss
-- ----------------------------
DROP TABLE IF EXISTS `t_mas_menuss`;
CREATE TABLE `t_mas_menuss`  (
  `MNU_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `MNU_NOMORS` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MNU_DESCRE` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MNU_CHILDS` tinyint(4) NULL DEFAULT NULL,
  `MNU_HVCHLD` tinyint(4) NULL DEFAULT NULL,
  `MNU_ROUTES` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MNU_ICONED` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MNU_REFERS` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MNU_USRCRT` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MNU_DATCRT` datetime NULL DEFAULT NULL,
  `MNU_USRUPD` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MNU_DATUPD` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`MNU_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 99 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mas_menuss
-- ----------------------------
INSERT INTO `t_mas_menuss` VALUES (1, '03000000', 'Perusahaan', 0, 1, '#', 'building', '', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (2, '01020000', 'Menu', 1, 0, 'master/menu', '', '01000000', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (3, '01060000', 'Bidang Pekerjaan', 1, 0, 'master/bidangkerja', '', '01000000', 'superadmin', '2022-03-15 16:13:28', NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (11, '02000000', 'Pekerja', 0, 1, '#', 'users', '', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (12, '01030000', 'Otorisasi', 1, 0, 'master/otorisasi', '', '01000000', NULL, NULL, 'superadmin', '2022-03-10 15:23:40');
INSERT INTO `t_mas_menuss` VALUES (14, '05000000', 'Laporan', 0, 1, '#', 'line-chart', '', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (15, '01040000', 'Provinsi', 1, 0, 'master/province', '', '01000000', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (18, '03020000', 'Pekerjaan', 1, 0, 'job/job', '', '03000000', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (22, '06000000', 'Head Menu3', 0, 1, '#', 'map', '', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (23, '01050000', 'Kota', 1, 0, 'master/city', '', '01000000', NULL, NULL, 'superadmin', '2022-03-15 16:14:00');
INSERT INTO `t_mas_menuss` VALUES (24, '07000000', 'Head Menu4', 0, 1, '#', 'medkit', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (29, '01000000', 'Master', 0, 1, '#', 'database', '', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (30, '01010000', 'User', 1, 0, 'master/user', 'child', '01000000', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (42, '09000000', 'Head Menu5', 0, 1, '#', 'archive', '', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (55, '10000000', 'Head Menu6', 0, 1, '#', 'globe', '', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (58, '12000000', 'Head Menu7', 0, 1, '#', 'cogs', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (64, '13000000', 'Head Menu8', 0, 1, '#', 'desktop', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (90, '14000000', 'Head Menu9', 0, 1, '#', 'folder-open', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (91, '03030000', 'Daftar Pelamar', 1, 0, 'rekanan/pelamar', 'cart-arrow-down', '03000000', 'superadmin', '2022-03-15 16:13:28', NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (92, '15000000', 'Head Menu 10', 0, 1, '#', 'cart-arrow-down', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (93, '16000000', 'Head Menu 11', 0, 1, '#', 'file-text', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (94, '02010000', 'List Pekerja', 1, 0, 'pekerja/pekerja', NULL, '02000000', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (95, '02020000', 'Lamaran Kerja', 1, 0, 'pekerja/lamaran', NULL, '02000000', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (96, '04000000', 'Rekrut', 0, 1, '#', 'briefcase', '', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (97, '03010000', 'Rekanan', 1, 0, 'rekanan/client', NULL, '03000000', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_menuss` VALUES (98, '04010000', 'Perekrutan', 1, 0, 'perekrutan/perekrutan', NULL, '04000000', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for t_mas_number
-- ----------------------------
DROP TABLE IF EXISTS `t_mas_number`;
CREATE TABLE `t_mas_number`  (
  `NUM_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `NUM_SYSCLS` char(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NUM_DATESS` char(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NUM_SEQNCE` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NUM_UCREAT` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NUM_DCREAT` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`NUM_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 56 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mas_number
-- ----------------------------
INSERT INTO `t_mas_number` VALUES (50, 'CLI', '2022', '16', NULL, '2022-11-22 14:37:19');
INSERT INTO `t_mas_number` VALUES (51, 'JOB', '2022', '10', NULL, '2022-09-30 10:24:01');
INSERT INTO `t_mas_number` VALUES (52, 'REK', '2022', '13', NULL, '2022-11-03 10:48:37');
INSERT INTO `t_mas_number` VALUES (53, 'PKR', '2022', '36', NULL, '2022-09-13 08:47:36');
INSERT INTO `t_mas_number` VALUES (54, 'REC', '2022', '2', NULL, '2022-11-01 10:05:16');
INSERT INTO `t_mas_number` VALUES (55, 'PKR', '2023', '10', NULL, '2023-06-05 11:28:50');

-- ----------------------------
-- Table structure for t_mas_pekrja
-- ----------------------------
DROP TABLE IF EXISTS `t_mas_pekrja`;
CREATE TABLE `t_mas_pekrja`  (
  `PKR_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `PKR_LOGNID` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_NOMPKR` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_NAMESS` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_ADDRES` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_ADDRDO` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_TMPLHR` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_TGLLHR` date NULL DEFAULT NULL,
  `PKR_NOMKTP` int(16) NULL DEFAULT NULL,
  `PKR_NONPWP` int(17) NULL DEFAULT NULL,
  `PKR_NOMTLP` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_NOMRHP` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_JNSKLM` tinyint(1) NULL DEFAULT NULL,
  `PKR_CONTRY` tinyint(2) NULL DEFAULT NULL,
  `PKR_PROVNC` tinyint(2) NULL DEFAULT NULL,
  `PKR_CITYSS` tinyint(2) NULL DEFAULT NULL,
  `PKR_ACTIVE` tinyint(1) NULL DEFAULT NULL,
  `PKR_RELIGN` tinyint(1) NULL DEFAULT NULL,
  `PKR_EDUCID` tinyint(1) NULL DEFAULT NULL,
  `PKR_MARRID` tinyint(1) NULL DEFAULT NULL,
  `PKR_FOTOSS` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_STATUS` tinyint(1) NULL DEFAULT NULL,
  `PKR_EXPRNC` tinyint(1) NULL DEFAULT NULL,
  `PKR_EXPNPT` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `PKR_EXPBDG` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_EXPPOS` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_SRTKT1` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_SRTKT2` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_LVLBHS` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_VISAFL` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_SSWFIL` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_MAGANG` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_MNTBDG` int(11) NULL DEFAULT NULL,
  `PKR_BDLAIN` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_EXPSAL` int(11) NULL DEFAULT NULL,
  `PKR_FILECV` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_USRCRT` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_DATCRT` datetime NULL DEFAULT NULL,
  `PKR_USRUPD` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PKR_DATUPD` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`PKR_IDENTS`, `PKR_EXPNPT`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mas_pekrja
-- ----------------------------
INSERT INTO `t_mas_pekrja` VALUES (10, '10', 'PKR22-0001', 'KIKI SHIPPUDEN', 'JL. AJA DULU BLOK C NO.1', 'JL. KEDONDONG RAYA BLOK R NO. 98', 'BOGOR', '2012-06-01', 2147483647, 2147483647, '02188552563', '089955623562', 2, 1, 4, 1, 1, 1, 4, 1, 'pic9.jpg', 0, 1, 'PT. JAYA ABADI', 'GARMEN', NULL, 'logo3.png', 'favicon.jpg', 'jconnect-pamflet-all.pdf', 'gratis1.jpg', 'jconnect-pamflet-kandidat.pdf', 'jconnect-pamflet-perusahaan.pdf', 99, 'GARMEN ATAU PAKAIAN', 4000000, 'contoh-file-untuk-cv.pdf', 'import', '2022-03-18 09:28:04', 'kiki', '2022-09-14 17:44:17');
INSERT INTO `t_mas_pekrja` VALUES (16, '408', 'PKR22-0035', 'SALSABILA', 'JL. SEMANGKA RAYA NO 21', 'JL. SEMANGKA RAYA NO 21', 'JAKARTA', '2000-09-20', 2147483647, 2147483647, '021555666888', '0899666333125', 2, 1, 0, 0, 1, 1, 4, 1, 'excel.png', NULL, 1, 'PT. CAHYA CEMERLANG INDAH', 'EXPEDISI', NULL, NULL, NULL, 'jconnect-pamflet-all.pdf', 'logo-daftar.png', 'jconnect-pamflet-kandidat.pdf', 'jconnect-pamflet-perusahaan.pdf', 99, 'TRANSLATOR BAHASA JEPANG', 8000000, 'contoh-file-untuk-cv.docx', NULL, NULL, 'salsa', '2022-09-09 10:57:17');
INSERT INTO `t_mas_pekrja` VALUES (18, '409', 'PKR22-0036', 'RARA AJA', 'JL. RAMAI-RAMAI ASIK NO.98 BANDUNG RAYA', 'JL. RAMAI-RAMAI ASIK NO.98 BANDUNG RAYA', 'BANDUNG', '1992-05-20', 2147483647, 2147483647, '021486351426', '081953542954', 2, 1, 1, 3, 0, 3, 8, 1, 'pic19.jpg', NULL, 1, 'PT. BARABARA', 'MANUFAKTUR', NULL, NULL, NULL, 'contoh-sertifikat-bahasa-jepang.pdf', 'gratis1.jpg', 'contoh-sertifikat-ssw.pdf', 'contoh-sertifikat-otit.pdf', 5, '', 3500000, 'contoh-file-untuk-cv.docx', NULL, NULL, 'rara', '2022-11-28 15:52:17');
INSERT INTO `t_mas_pekrja` VALUES (19, '919', 'PKR23-0007', 'REYZA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 1, NULL, '', NULL, NULL, NULL, NULL, 'logo-ajc.jpeg', 'kanban-ajc.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_pekrja` VALUES (20, '920', 'PKR23-0008', 'REYZA ALIF UTAMA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 3, NULL, '', NULL, NULL, NULL, NULL, 'ajc-qrcode.png', 'whatsapp-image-2023-05-09-at-18.15.20.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_pekrja` VALUES (21, '921', 'PKR23-0009', 'REYZA ALIF UTAMA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 3, NULL, '', NULL, NULL, NULL, NULL, 'whatsapp-image-2023-05-09-at-18.15.20.jpeg', 'whatsapp-image-2023-05-04-at-18.52.41.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_pekrja` VALUES (22, '922', 'PKR23-0010', 'REYZA ALIF UTAMA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 3, NULL, '', NULL, NULL, NULL, NULL, 'whatsapp-image-2023-05-09-at-18.15.20.jpeg', 'whatsapp-image-2023-05-04-at-18.52.41.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for t_mas_pekrja_exprnc
-- ----------------------------
DROP TABLE IF EXISTS `t_mas_pekrja_exprnc`;
CREATE TABLE `t_mas_pekrja_exprnc`  (
  `EXP_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `EXP_IDNPKR` int(11) NOT NULL,
  `EXP_PTNAME` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `EXP_BIDANG` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `EXP_POSISI` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `EXP_EXPRNC` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `EXP_JBDESK` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`EXP_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mas_pekrja_exprnc
-- ----------------------------
INSERT INTO `t_mas_pekrja_exprnc` VALUES (2, 18, 'pt. barabara', 'manufaktur', 'MEDICAL REPRESENTATIVE', '1-2 Tahun', 'fdfasfagggsgsdgdgdgdggsgsg\nsgsdgsggsdgsdgsgsg\ndgdsgsgdsgsdgsgdsgsdg\ndsgdsgsgdsgsdgsgsgsgsgsg');
INSERT INTO `t_mas_pekrja_exprnc` VALUES (3, 18, 'tes', 'tes1', 'tes2', '1-2 Tahun', 'tes3');

-- ----------------------------
-- Table structure for t_mas_posisi
-- ----------------------------
DROP TABLE IF EXISTS `t_mas_posisi`;
CREATE TABLE `t_mas_posisi`  (
  `POS_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `POS_DESCRE` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `POS_CDATAS` int(11) NULL DEFAULT NULL,
  `POS_UNTORG` int(11) NULL DEFAULT NULL,
  `POS_ACTIVE` tinyint(4) NULL DEFAULT NULL,
  `POS_USRINP` int(50) NULL DEFAULT NULL,
  `POS_DATINP` datetime NULL DEFAULT NULL,
  `POS_USRUPD` int(50) NULL DEFAULT NULL,
  `POS_DATUPD` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`POS_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 58 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mas_posisi
-- ----------------------------
INSERT INTO `t_mas_posisi` VALUES (1, 'DIREKTUR UTAMA', 0, 1, 1, 0, '2017-03-08 02:06:26', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (2, 'CHEIF OF OPERATION', 1, 1, 1, 0, '2017-03-08 02:06:26', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (3, 'HRD MANAGER', 2, 2, 1, 0, '2017-03-08 02:08:47', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (4, 'ADMINISTRASI', 3, 2, 1, 0, '2017-03-08 02:08:47', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (5, 'RECEPTIONIS', 3, 2, 1, 0, '2017-03-08 02:08:47', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (6, 'SECURITY', 3, 2, 1, 0, '2017-03-08 02:08:47', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (7, 'DRIVER', 3, 2, 1, 0, '2017-03-08 02:08:47', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (8, 'OFFICE BOY/GIRL', 3, 2, 1, 0, '2017-03-08 02:08:47', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (9, 'HEAD OF INTERNAL COMPLIANCE', 1, 3, 1, 0, '2017-03-08 02:10:30', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (10, 'AUDIT MANAGER', 9, 3, 1, 0, '2017-03-08 02:11:07', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (11, 'AUDIT SUPERVISOR', 9, 3, 1, 0, '2017-03-08 02:11:07', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (12, 'BUSINESS DEVELOPMENT MANAGER', 1, 5, 1, 0, '2017-03-08 02:13:04', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (13, 'BUSINESS DEVELOPMENT STAFF', 12, 5, 1, 0, '2017-03-08 02:13:04', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (14, 'REGISTRASI MANAGER', 1, 6, 1, 0, '2017-03-08 02:13:52', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (15, 'IT SUPERVISOR', 2, 7, 1, 0, '2017-03-08 02:15:25', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (16, 'PROGRAMMER', 15, 7, 1, 0, '2017-03-08 02:16:00', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (17, 'TECHNICAL SUPPORT', 15, 7, 1, 0, '2017-03-08 02:16:00', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (18, 'ADMINISTRASI', 15, 7, 1, 0, '2017-03-08 02:16:00', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (19, 'WEB DEVELOPER AND MAINTENANCE MANAGER', 2, 24, 1, 0, '2017-03-08 02:19:15', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (20, 'MARKETING SUPPORT MANAGER', 2, 10, 1, 0, '2017-03-08 02:20:33', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (21, 'BUSINESS ANALYST STAFF', 51, 10, 1, 0, '2017-03-08 02:20:46', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (22, 'SALES FORCE EFFECTIVESS STAFF', 51, 10, 1, 0, '2017-03-08 02:20:46', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (23, 'HEAD OF SALES', 2, 13, 1, 0, '2017-03-08 09:33:46', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (24, 'SALES MANAGER', 23, 13, 1, 0, '2017-03-08 09:37:56', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (25, 'DISTRICT MANAGER', 24, 13, 1, 0, '2017-03-08 09:37:56', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (26, 'AREA SALES AND PROMOTION MANAGER', 23, 13, 1, 0, '2017-03-08 09:37:56', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (27, 'AREA SALES AND PROMOTION SUPERVISOR', 26, 13, 1, 0, '2017-03-08 09:37:56', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (28, 'AREA SALES AND PROMOTION REGIONAL', 27, 13, 1, 0, '2017-03-08 09:37:56', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (29, 'BEAUTY ADVISOR', 28, 13, 1, 0, '2017-03-08 09:37:56', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (30, 'BEAUTY CONSULTANT', 28, 13, 1, 0, '2017-03-08 09:37:56', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (31, 'SALES PROMOTION', 28, 13, 1, 0, '2017-03-08 09:37:56', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (32, 'ADMINISTRASI', 23, 13, 1, 0, '2017-03-08 09:37:56', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (33, 'PRODUCT MANAGER', 2, 14, 1, 0, '2017-03-08 09:38:50', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (34, 'BRAND MANAGER', 2, 14, 1, 0, '2017-03-08 09:38:50', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (35, 'GENERAL SALES MANAGER', 2, 15, 1, 0, '2017-03-08 10:44:43', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (36, 'SALES MANAGER', 35, 15, 1, 0, '2017-03-08 10:50:47', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (37, 'DISTRICT MANAGER', 36, 15, 1, 0, '2017-03-08 10:50:47', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (38, 'AREA MANAGER', 37, 15, 1, 0, '2017-03-08 10:50:47', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (39, 'SUPERVISOR', 38, 15, 1, 0, '2017-03-08 10:50:47', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (40, 'MEDICAL REPRESENTATIVE', 39, 15, 1, 0, '2017-03-08 10:50:47', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (41, 'ADMINISTRASI', 35, 15, 1, 0, '2017-03-08 10:50:47', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (42, 'PRODUCT MANAGER', 2, 16, 1, 0, '2017-03-08 10:56:12', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (43, 'ADMINISTRASI', 42, 16, 1, 0, '2017-03-08 10:56:12', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (44, 'BUDGET REQUEST', 2, 11, 1, 0, '2017-03-08 11:14:52', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (45, 'FINANCE COORDINATOR', 2, 11, 1, 0, '2017-03-08 11:14:52', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (46, 'CASHIER', 2, 11, 1, 0, '2017-03-08 11:14:52', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (47, 'BUDGET CONTROL', 2, 11, 1, 0, '2017-03-08 11:14:52', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (48, 'DATABASE ADMINITRATOR', 15, 7, 1, 0, '2017-03-08 11:14:52', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (51, 'BUSINESS ANALYST SUPERVISOR', 20, 10, 1, 0, '2018-03-26 16:30:47', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (52, 'SALES PROMOTION GIRL MOBILE', 28, 13, 1, NULL, '2019-07-30 17:05:23', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (53, 'SEKRETARIS', 2, 1, 1, 0, '2019-08-07 10:47:08', NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (54, 'FINANCE COORDINATOR', 2, 11, 1, NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (55, 'FINANCE STAFF', 54, 11, 1, NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (56, 'KEY ACCOUNT MANAGER', 23, 13, 1, NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_posisi` VALUES (57, 'PRODUCT EXECUTIVE', 33, 14, 1, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for t_mas_priacc
-- ----------------------------
DROP TABLE IF EXISTS `t_mas_priacc`;
CREATE TABLE `t_mas_priacc`  (
  `PRV_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `PRV_POSIDN` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PRV_MNUNOM` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PRV_RIGHTS` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PRV_USRCRT` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PRV_DATCRT` datetime NULL DEFAULT NULL,
  `PRV_USRUPD` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PRV_DATUPD` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`PRV_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 118 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mas_priacc
-- ----------------------------
INSERT INTO `t_mas_priacc` VALUES (1, 'superadmin', '01000000', 'AEDV', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (2, 'superadmin', '01020000', 'AEDV', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (3, 'superadmin', '02000000', 'AEDV', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (4, 'superadmin', '01010000', 'AEDV', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (5, 'superadmin', '01030000', 'AEDV', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (6, 'superadmin', '01040000', 'AEDV', NULL, '2022-03-11 13:59:55', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (7, 'superadmin', '01050000', 'AEDV', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (8, 'superadmin', '01060000', 'AEDV', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (13, 'superadmin', '01070000', 'AEDV', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (14, 'superadmin', '03000000', 'AEDV', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (16, 'kiki', '02000000', 'AEDV', 'superadmin', '2022-03-22 16:20:16', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (18, 'superadmin', '04000000', 'AEDV', 'superadmin', NULL, NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (25, 'superadmin', '02010000', 'AEDV', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (26, 'superadmin', '02020000', 'AEDV', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (27, 'superadmin', '03010000', 'AEDV', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (28, 'superadmin', '03020000', 'AEDV', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (29, 'kiki', '02010000', 'AEDV', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (30, 'kiki', '02020000', 'AEDV', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (31, 'superadmin', '03030000', 'AEDV', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (35, 'superadmin', '04010000', 'AEDV', NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (47, 'kemas', '03000000', 'AEDV', 'new_client', '2022-08-25 10:25:03', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (48, 'kemas', '03020000', 'AEDV', 'new_client', '2022-08-25 10:25:03', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (49, 'kemas', '03030000', 'AEDV', 'new_client', '2022-08-25 10:25:03', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (50, 'kemas', '04000000', 'AEDV', 'new_client', '2022-08-25 10:25:03', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (51, 'kemas', '04010000', 'AEDV', 'new_client', '2022-08-25 10:25:03', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (52, 'kemas', '05000000', 'AEDV', 'new_client', '2022-08-25 10:25:03', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (53, 'kemas', '03000000', 'AEDV', 'new_register_client', '2022-09-05 09:16:21', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (54, 'kemas', '03020000', 'AEDV', 'new_register_client', '2022-09-05 09:16:21', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (55, 'kemas', '03030000', 'AEDV', 'new_register_client', '2022-09-05 09:16:21', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (56, 'kemas', '04000000', 'AEDV', 'new_register_client', '2022-09-05 09:16:21', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (57, 'kemas', '04010000', 'AEDV', 'new_register_client', '2022-09-05 09:16:21', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (58, 'kemas', '05000000', 'AEDV', 'new_register_client', '2022-09-05 09:16:21', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (59, 'kemas', '05010000', 'AEDV', 'new_register_client', '2022-09-05 09:16:21', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (60, 'kemas', '03010000', 'AEDV', 'new_register_client', '2022-09-05 09:19:46', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (61, 'sosro', '03000000', 'AEDV', 'new_register_client', '2022-09-06 14:08:49', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (62, 'sosro', '03020000', 'AEDV', 'new_register_client', '2022-09-06 14:08:49', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (63, 'sosro', '03030000', 'AEDV', 'new_register_client', '2022-09-06 14:08:49', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (64, 'sosro', '04000000', 'AEDV', 'new_register_client', '2022-09-06 14:08:49', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (65, 'sosro', '04010000', 'AEDV', 'new_register_client', '2022-09-06 14:08:49', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (66, 'sosro', '05000000', 'AEDV', 'new_register_client', '2022-09-06 14:08:49', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (67, 'sosro', '05010000', 'AEDV', 'new_register_client', '2022-09-06 14:08:49', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (78, 'alexindo', '03000000', 'AEDV', 'new_register_client', '2022-09-06 14:57:18', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (79, 'alexindo', '03020000', 'AEDV', 'new_register_client', '2022-09-06 14:57:18', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (80, 'alexindo', '03030000', 'AEDV', 'new_register_client', '2022-09-06 14:57:18', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (81, 'alexindo', '04000000', 'AEDV', 'new_register_client', '2022-09-06 14:57:18', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (82, 'alexindo', '04010000', 'AEDV', 'new_register_client', '2022-09-06 14:57:18', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (83, 'alexindo', '05000000', 'AEDV', 'new_register_client', '2022-09-06 14:57:18', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (84, 'alexindo', '05010000', 'AEDV', 'new_register_client', '2022-09-06 14:57:18', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (85, 'sunrise', '03000000', 'AEDV', 'new_register_client', '2022-09-06 15:58:10', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (86, 'sunrise', '03020000', 'AEDV', 'new_register_client', '2022-09-06 15:58:10', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (87, 'sunrise', '03030000', 'AEDV', 'new_register_client', '2022-09-06 15:58:10', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (88, 'sunrise', '04000000', 'AEDV', 'new_register_client', '2022-09-06 15:58:10', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (89, 'sunrise', '04010000', 'AEDV', 'new_register_client', '2022-09-06 15:58:10', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (90, 'sunrise', '05000000', 'AEDV', 'new_register_client', '2022-09-06 15:58:10', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (91, 'sunrise', '05010000', 'AEDV', 'new_register_client', '2022-09-06 15:58:10', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (92, 'sdm', '03000000', 'AEDV', 'new_register_client', '2022-09-07 08:48:58', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (93, 'sdm', '03020000', 'AEDV', 'new_register_client', '2022-09-07 08:48:58', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (94, 'sdm', '03030000', 'AEDV', 'new_register_client', '2022-09-07 08:48:58', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (95, 'sdm', '04000000', 'AEDV', 'new_register_client', '2022-09-07 08:48:58', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (96, 'sdm', '04010000', 'AEDV', 'new_register_client', '2022-09-07 08:48:58', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (97, 'sdm', '05000000', 'AEDV', 'new_register_client', '2022-09-07 08:48:58', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (98, 'sdm', '05010000', 'AEDV', 'new_register_client', '2022-09-07 08:48:58', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (99, 'wingsgroup', '03000000', 'AEDV', 'new_register_client', '2022-09-20 17:16:18', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (100, 'wingsgroup', '03020000', 'AEDV', 'new_register_client', '2022-09-20 17:16:18', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (101, 'wingsgroup', '03030000', 'AEDV', 'new_register_client', '2022-09-20 17:16:18', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (102, 'wingsgroup', '04000000', 'AEDV', 'new_register_client', '2022-09-20 17:16:18', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (103, 'wingsgroup', '04010000', 'AEDV', 'new_register_client', '2022-09-20 17:16:18', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (104, 'wingsgroup', '05000000', 'AEDV', 'new_register_client', '2022-09-20 17:16:18', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (105, 'wingsgroup', '05010000', 'AEDV', 'new_register_client', '2022-09-20 17:16:18', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (106, '', '03000000', 'AEDV', 'new_kandidat', '2022-09-20 17:23:20', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (107, '', '03020000', 'AEDV', 'new_kandidat', '2022-09-20 17:23:20', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (108, '', '03030000', 'AEDV', 'new_kandidat', '2022-09-20 17:23:20', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (109, '', '04000000', 'AEDV', 'new_kandidat', '2022-09-20 17:23:20', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (110, '', '04010000', 'AEDV', 'new_kandidat', '2022-09-20 17:23:20', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (111, 'xsis', '03000000', 'AEDV', 'new_register_client', '2022-11-22 14:37:35', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (112, 'xsis', '03020000', 'AEDV', 'new_register_client', '2022-11-22 14:37:35', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (113, 'xsis', '03030000', 'AEDV', 'new_register_client', '2022-11-22 14:37:35', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (114, 'xsis', '04000000', 'AEDV', 'new_register_client', '2022-11-22 14:37:35', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (115, 'xsis', '04010000', 'AEDV', 'new_register_client', '2022-11-22 14:37:35', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (116, 'xsis', '05000000', 'AEDV', 'new_register_client', '2022-11-22 14:37:35', NULL, NULL);
INSERT INTO `t_mas_priacc` VALUES (117, 'xsis', '05010000', 'AEDV', 'new_register_client', '2022-11-22 14:37:35', NULL, NULL);

-- ----------------------------
-- Table structure for t_mas_privlg
-- ----------------------------
DROP TABLE IF EXISTS `t_mas_privlg`;
CREATE TABLE `t_mas_privlg`  (
  `PRV_POSIDN` int(11) NULL DEFAULT NULL,
  `PRV_MNUNOM` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PRV_RIGHTS` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mas_privlg
-- ----------------------------
INSERT INTO `t_mas_privlg` VALUES (28, '01000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '01010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '01020000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '01030000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '01040000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '01050000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '02000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '02010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '03000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '03010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '03020000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '04000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '04010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '04020000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '04030000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '05000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '05010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '05020000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '05030000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (15, '04000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (15, '04020000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '06000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '06010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (9, '06000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (9, '06010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '07000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '07010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (12, '07000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (12, '07010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (18, '04000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (18, '04030000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '01060000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '01070000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '01080000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '08000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '08010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '02020000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '02030000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '04040000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (30, '07000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (30, '07010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '02040000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '04050000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '01070000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (23, '04000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (23, '04030000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (10, '04000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (10, '04030000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '01080000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '01050000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '02050000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '03030000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (7, '04000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (7, '04030000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (7, '04050000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '03040000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '03050000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '02060000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '01000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '01010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '01020000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '01030000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '01040000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '01050000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '02000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '02010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '03000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '03010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '03020000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '04000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '04010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '04020000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '04030000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '05000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '05010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '05020000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '05030000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '06000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '06010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '07000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '07010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '01060000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '01070000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '01080000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '08000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '08010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '02020000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '02030000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '04040000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '02040000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '04050000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '01070000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '01080000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '01050000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '02050000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '03030000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '03040000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '03050000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '02060000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '02070000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (37, '02000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (37, '02050000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (37, '02060000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (37, '02070000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (37, '03000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (37, '03010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (37, '03020000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (37, '03030000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (37, '03040000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (37, '03050000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (37, '02040000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '09000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '09010000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '09020000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (7, '04020000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (36, '04000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (36, '04030000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '02080000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (8, '04000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (8, '04030000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (12, '07020000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (13, '07020000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '10000000', 'AEDV');
INSERT INTO `t_mas_privlg` VALUES (28, '10100000', 'AEDV');

-- ----------------------------
-- Table structure for t_mas_provnc
-- ----------------------------
DROP TABLE IF EXISTS `t_mas_provnc`;
CREATE TABLE `t_mas_provnc`  (
  `PRV_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `PRV_INTIAL` char(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PRV_NAMESS` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PRV_CONTRY` tinyint(4) NULL DEFAULT NULL,
  `PRV_USRCRT` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PRV_DATCRT` datetime NULL DEFAULT NULL,
  `PRV_USRUPD` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PRV_DATUPD` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`PRV_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mas_provnc
-- ----------------------------
INSERT INTO `t_mas_provnc` VALUES (1, 'JABAR', 'JAWA BARAT', 1, NULL, '2022-03-15 16:59:39', NULL, NULL);
INSERT INTO `t_mas_provnc` VALUES (2, 'HOKKAI', 'HOKKAIDO', 2, NULL, '2022-03-17 09:49:30', NULL, NULL);
INSERT INTO `t_mas_provnc` VALUES (3, 'JATENG', 'JAWA TENGAH', 1, NULL, '2022-05-11 10:23:20', NULL, NULL);
INSERT INTO `t_mas_provnc` VALUES (4, 'JKT', 'DKI JAKARTA', 1, NULL, '2022-05-11 10:32:31', NULL, NULL);
INSERT INTO `t_mas_provnc` VALUES (5, 'JATIM', 'JAWA TIMUR', 1, NULL, '2022-05-11 10:40:28', NULL, NULL);
INSERT INTO `t_mas_provnc` VALUES (6, 'DPK', 'DEPOK', 1, NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_provnc` VALUES (7, 'TNG', 'TANGERANG', 1, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for t_mas_provnc_jp
-- ----------------------------
DROP TABLE IF EXISTS `t_mas_provnc_jp`;
CREATE TABLE `t_mas_provnc_jp`  (
  `PRV_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `PRV_INTIAL` char(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PRV_NAMESS` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `PRV_CONTRY` tinyint(4) NULL DEFAULT NULL,
  `PRV_USRCRT` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PRV_DATCRT` datetime NULL DEFAULT NULL,
  `PRV_USRUPD` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PRV_DATUPD` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`PRV_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mas_provnc_jp
-- ----------------------------
INSERT INTO `t_mas_provnc_jp` VALUES (1, 'JABAR', 'ウェストジャワ', 1, NULL, '2022-03-15 16:59:39', NULL, NULL);
INSERT INTO `t_mas_provnc_jp` VALUES (2, 'HOKKAI', 'ほっかいどう', 2, NULL, '2022-03-17 09:49:30', NULL, NULL);
INSERT INTO `t_mas_provnc_jp` VALUES (3, 'JATENG', '中部ジャワ', 1, NULL, '2022-05-11 10:23:20', NULL, NULL);
INSERT INTO `t_mas_provnc_jp` VALUES (4, 'JKT', 'ジャカルタ', 1, NULL, '2022-05-11 10:32:31', NULL, NULL);
INSERT INTO `t_mas_provnc_jp` VALUES (5, 'JATIM', 'イースト・ジャワ', 1, NULL, '2022-05-11 10:40:28', NULL, NULL);
INSERT INTO `t_mas_provnc_jp` VALUES (6, 'DPK', 'デポック', 1, NULL, NULL, NULL, NULL);
INSERT INTO `t_mas_provnc_jp` VALUES (7, 'TNG', 'タングゲラング', 1, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for t_mas_spsliz
-- ----------------------------
DROP TABLE IF EXISTS `t_mas_spsliz`;
CREATE TABLE `t_mas_spsliz`  (
  `SPS_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `SPS_NAMESS` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SPS_USRCRT` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SPS_DATCRT` datetime NULL DEFAULT NULL,
  `SPS_USRUPD` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SPS_DATUPD` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`SPS_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 100 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mas_spsliz
-- ----------------------------
INSERT INTO `t_mas_spsliz` VALUES (1, 'KEUANGAN/AKUNTANSI', NULL, NULL, 'superadmin', '2022-03-22 14:10:12');
INSERT INTO `t_mas_spsliz` VALUES (2, 'SUMBER DAYA MANUSIA/PERSONALIA', NULL, NULL, 'superadmin', NULL);
INSERT INTO `t_mas_spsliz` VALUES (3, 'PENJUALAN/PEMASARAN', NULL, NULL, 'superadmin', NULL);
INSERT INTO `t_mas_spsliz` VALUES (4, 'SENI/MEDIA/KOMUNIKASI', NULL, NULL, 'superadmin', NULL);
INSERT INTO `t_mas_spsliz` VALUES (5, 'PELAYANAN', NULL, NULL, 'superadmin', NULL);
INSERT INTO `t_mas_spsliz` VALUES (6, 'HOTEL/RESTORAN', NULL, NULL, 'superadmin', NULL);
INSERT INTO `t_mas_spsliz` VALUES (7, 'PENDIDIKAN/PELATIHAN', NULL, NULL, 'superadmin', NULL);
INSERT INTO `t_mas_spsliz` VALUES (8, 'KOMPUTER/TEKNOLOGI INFORMASI', NULL, NULL, 'superadmin', NULL);
INSERT INTO `t_mas_spsliz` VALUES (9, 'TEKNIK', NULL, NULL, 'superadmin', NULL);
INSERT INTO `t_mas_spsliz` VALUES (10, 'MANUFAKTUR', NULL, NULL, 'superadmin', NULL);
INSERT INTO `t_mas_spsliz` VALUES (11, 'BANGUNAN/KONSTRUKSI', NULL, NULL, 'superadmin', NULL);
INSERT INTO `t_mas_spsliz` VALUES (12, 'SAINS', NULL, NULL, 'superadmin', NULL);
INSERT INTO `t_mas_spsliz` VALUES (13, 'LAYANAN KESEHATAN', NULL, NULL, 'superadmin', NULL);
INSERT INTO `t_mas_spsliz` VALUES (14, 'PERIKANAN', 'superadmin', '2022-05-11 11:05:36', NULL, NULL);
INSERT INTO `t_mas_spsliz` VALUES (99, 'BIDANG LAINNYA', NULL, NULL, 'superadmin', NULL);

-- ----------------------------
-- Table structure for t_mas_userss
-- ----------------------------
DROP TABLE IF EXISTS `t_mas_userss`;
CREATE TABLE `t_mas_userss`  (
  `USR_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `USR_LOGINS` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_PASSWD` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_EMAILS` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_NAMESS` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_ACTIVE` tinyint(1) NULL DEFAULT NULL,
  `USR_LEVELS` tinyint(1) NULL DEFAULT NULL,
  `USR_MENUID` tinyint(1) NULL DEFAULT NULL,
  `USR_TYPESS` tinyint(1) NULL DEFAULT NULL,
  `USR_COMNAM` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_HNPONE` int(18) NULL DEFAULT NULL,
  `USR_JOBLOC` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_JOBDES` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `USR_USRCRT` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_DATCRT` datetime NULL DEFAULT NULL,
  `USR_USRUPD` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_DATUPD` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`USR_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 923 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mas_userss
-- ----------------------------
INSERT INTO `t_mas_userss` VALUES (1, 'superadmin', 'ac497cfaba23c4184cb03b97e8c51e0a', 'kozekgilbert@gmail.com', 'SUPER ADMIN', 1, 99, 99, 0, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (2, 'kemas', '49403920cca228c7d3959449ac09f3c1', 'kozekgilbert@gmail.com', 'RENY', 1, 3, 3, 3, NULL, NULL, NULL, NULL, 'new_register_client', '2022-09-04 21:37:47', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (10, 'kiki', '656ead03af397857bdcd84292e6a3bbd', 'kozekgilbert@gmail.com', 'KIKI FUJIWA1', 1, 2, 2, 2, NULL, NULL, NULL, NULL, 'import', '2022-03-18 09:28:04', 'kiki', '2022-06-22 14:37:59');
INSERT INTO `t_mas_userss` VALUES (18, 'sosro', '92f3819d912a5583a0f7232ee20112f7', 'kozekgilbert@gmail.com', 'JOJO SAPUTRA', 1, 3, 3, 3, NULL, NULL, NULL, NULL, 'new_register_client', '2022-09-06 14:05:09', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (20, 'alexindo', '6d00aa76ee6eb813f0bd65072aef70a1', 'kozekgilbert@gmail.com', 'INDRI', 1, 3, 3, 3, NULL, NULL, NULL, NULL, 'new_register_client', '2022-09-06 14:53:47', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (22, 'sunrise', '06aab2f26e0ea21de779ed3aa74be465', 'kozekgilbert@gmail.com', 'DONI', 1, 3, 3, 3, NULL, NULL, NULL, NULL, 'new_register_client', '2022-09-06 15:53:37', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (26, 'sdm', '3c197e18974f655184cde224c285b8aa', 'kozekgilbert@gmail.com', 'ROSI', 1, 3, 3, 3, NULL, NULL, NULL, NULL, 'new_register_client', '2022-09-07 08:48:55', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (370, 'kemas', '49403920cca228c7d3959449ac09f3c1', 'kozekgilbert@gmail.com', 'RENY', 1, 3, 3, 3, NULL, NULL, NULL, NULL, 'new_register_client', '2022-08-25 10:25:00', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (408, 'salsa', '3a191a1d36c60bc6fd4c38815c7614de', 'kozekgilbert@gmail.com', 'SALSABILA', 1, 2, 2, 2, NULL, NULL, NULL, NULL, 'new_register', '2022-09-08 17:30:29', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (409, 'rara', '5ab83fa52e5d0f5abc44d2eed4479ff0', 'kozekgilbert@gmail.com', 'RARA AJA', 1, 2, 2, 2, NULL, NULL, NULL, NULL, 'new_register', '2022-09-13 08:47:36', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (410, 'wingsgroup', 'b6abdc0ecbdc3af19aebbb0fc6a93947', 'kozekgilbert@gmail.com', 'SINTA', 1, 3, 3, 3, NULL, NULL, NULL, NULL, 'new_register_client', '2022-09-20 17:16:08', 'wingsgroup', '2022-11-28 09:16:06');
INSERT INTO `t_mas_userss` VALUES (411, 'charissa', 'caaec1b1fce6df11a1b43b2faa1c73d9', 'kozekgilbert@gmail.com', 'CharissaMaldonado', 1, 3, 3, 3, 'Sagittis Lobortis Mauris Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (412, 'savannah', '771b9a59889b261f38dc9f67eeb4d1d0', 'kozekgilbert@gmail.com', 'SavannahVasquez', 1, 3, 3, 3, 'Nunc Pulvinar Arcu LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (413, 'forrest', '0dc29b2b7c18730c39a7ab7d0756b869', 'kozekgilbert@gmail.com', 'ForrestSimpson', 1, 3, 3, 3, 'In Faucibus Orci Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (414, 'petra', '3e39e6920fceb1669584dec1eff55175', 'kozekgilbert@gmail.com', 'PetraHaney', 1, 3, 3, 3, 'Ipsum Primis Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (415, 'nathan', '9db74df32b6cc2ac52be584bf279972b', 'kozekgilbert@gmail.com', 'NathanMedina', 1, 3, 3, 3, 'Netus Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (416, 'dexter', '0ae114390fe487548da31030116b6e0c', 'kozekgilbert@gmail.com', 'DexterFranklin', 1, 3, 3, 3, 'Tellus Lorem Eu Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (417, 'nell', 'b7474b54355daf3836df34fe2935500e', 'kozekgilbert@gmail.com', 'NellWoods', 1, 3, 3, 3, 'Nam Tempor Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (418, 'myles', '79a8297099345d05f37ce47600942b53', 'kozekgilbert@gmail.com', 'MylesVinson', 1, 3, 3, 3, 'Ultrices Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (419, 'tatum', '7b0745b78ef2628b69b1b684b9a15362', 'kozekgilbert@gmail.com', 'TatumBritt', 1, 3, 3, 3, 'Gravida Non Sollicitudin Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (420, 'herrod', '7c6246a8919080e9af24c2bc41473793', 'kozekgilbert@gmail.com', 'HerrodBeasley', 1, 3, 3, 3, 'Mauris Aliquam Eu LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (421, 'leslie', '76bc931e8299993bc2a0cee6d1d201b2', 'kozekgilbert@gmail.com', 'LeslieBlack', 1, 3, 3, 3, 'Turpis Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (422, 'fallon', 'a089cb4cca7fdd4ff476ddd3fef9e605', 'kozekgilbert@gmail.com', 'FallonElliott', 1, 3, 3, 3, 'Nunc Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (423, 'sylvester', '97fada5d0f9b4f9f7826eed5a7790ff1', 'kozekgilbert@gmail.com', 'SylvesterDickson', 1, 3, 3, 3, 'Ipsum Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (424, 'suki', '95555ba7d2eefaf70654e5c48408faff', 'kozekgilbert@gmail.com', 'SukiRoss', 1, 3, 3, 3, 'Integer In Magna Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (425, 'fleur', '7aa986f563f58d4aa8665bb4e392890a', 'kozekgilbert@gmail.com', 'FleurChen', 1, 3, 3, 3, 'Donec Sollicitudin Adipiscing LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (426, 'rahim', '14bd364f6dc24199dad1b55373ba69da', 'kozekgilbert@gmail.com', 'RahimKerr', 1, 3, 3, 3, 'Ac Turpis Egestas Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (427, 'azalia', '1ce01ce8ec20b0d42e17b027750702f4', 'kozekgilbert@gmail.com', 'AzaliaShepard', 1, 3, 3, 3, 'Vivamus Sit Amet Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (428, 'dai', '2a0d288aec1cfe61dadec1dc2fb30125', 'kozekgilbert@gmail.com', 'DaiMyers', 1, 3, 3, 3, 'Augue Eu Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (429, 'ferris', '13815f4e5488b6f0d177f7eb7cd228d9', 'kozekgilbert@gmail.com', 'FerrisStuart', 1, 3, 3, 3, 'Et Magnis PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (430, 'kevyn', 'aa46d395885558bb16203b2eb1469cf0', 'kozekgilbert@gmail.com', 'KevynLynn', 1, 3, 3, 3, 'Dui Cum Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (431, 'zorita', 'e84bc45f047f0da17a1a723d02632e04', 'kozekgilbert@gmail.com', 'ZoritaLester', 1, 3, 3, 3, 'Justo Eu Arcu Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (432, 'nathaniel', 'f677eda58b7f83d76100cf9a944a2a90', 'kozekgilbert@gmail.com', 'NathanielCrane', 1, 3, 3, 3, 'Ac Urna Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (433, 'zoe', '95dc8a0f2f321612a5fe6a8890cbe7f4', 'kozekgilbert@gmail.com', 'ZoeBerry', 1, 3, 3, 3, 'Pellentesque Sed Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (434, 'jeanette', '358afc825daa01afdd966b49467d6dfb', 'kozekgilbert@gmail.com', 'JeanetteLowe', 1, 3, 3, 3, 'Ullamcorper Magna Sed Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (435, 'alika', 'fe08224ec9f9e2769de06e454c8e8d29', 'kozekgilbert@gmail.com', 'AlikaWebster', 1, 3, 3, 3, 'Ac Urna Ut Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (436, 'jena', '814d1538c7f4164758200ab9a77b97eb', 'kozekgilbert@gmail.com', 'JenaOrtiz', 1, 3, 3, 3, 'Enim Diam Vel LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (437, 'melissa', '89cb42c1fe0ee96951e44b5e36370e4d', 'kozekgilbert@gmail.com', 'MelissaBean', 1, 3, 3, 3, 'Metus Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (438, 'camille', '4b7752d4311e0d46c8d1e1ff619cc860', 'kozekgilbert@gmail.com', 'CamilleSolomon', 1, 3, 3, 3, 'Sed Nulla Ante Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (439, 'malcolm', 'd99f048567ee3c1f30aab5222a9646d2', 'kozekgilbert@gmail.com', 'MalcolmHogan', 1, 3, 3, 3, 'Ipsum Ac Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (440, 'brittany', '1a0e00613e4cd22014854c296d8c7e4e', 'kozekgilbert@gmail.com', 'BrittanyTownsend', 1, 3, 3, 3, 'Conubia Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (441, 'geraldine', '3d31408699ac5728df286459a41f1e89', 'kozekgilbert@gmail.com', 'GeraldineRusso', 1, 3, 3, 3, 'Ut Ipsum Ac Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (442, 'yardley', '63ca05a363fcae1515c972ff6f20f595', 'kozekgilbert@gmail.com', 'YardleyHuff', 1, 3, 3, 3, 'Sed Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (443, 'athena', 'c90a7fbf37fd6c7a213ed9cfdcb330ee', 'kozekgilbert@gmail.com', 'AthenaHolmes', 1, 3, 3, 3, 'Curabitur Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (444, 'jorden', '5c2c227ae530d66916bcae105e581093', 'kozekgilbert@gmail.com', 'JordenCoffey', 1, 3, 3, 3, 'Morbi Vehicula Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (445, 'nerea', 'b7c91762c944dcf3092287851309e981', 'kozekgilbert@gmail.com', 'NereaPotts', 1, 3, 3, 3, 'Aliquam Arcu Aliquam LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (446, 'ainsley', '1cb7770b5d88ceb55853f86597f6a9a2', 'kozekgilbert@gmail.com', 'AinsleyRobbins', 1, 3, 3, 3, 'Aliquam Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (447, 'dakota', '668ea54dc237cb7146bf523bb7022df0', 'kozekgilbert@gmail.com', 'DakotaDavis', 1, 3, 3, 3, 'Diam Pellentesque Habitant Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (448, 'elaine', '1d833688e09b404182c6a5c8dfef319b', 'kozekgilbert@gmail.com', 'ElaineWalton', 1, 3, 3, 3, 'A Malesuada Id Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (449, 'ali', '984d8144fa08bfc637d2825463e184fa', 'kozekgilbert@gmail.com', 'AliBrown', 1, 3, 3, 3, 'Scelerisque Neque Sed Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (450, 'solomon', 'b7bb49f1867c0ee929f8ec74334c86a0', 'kozekgilbert@gmail.com', 'SolomonStrong', 1, 3, 3, 3, 'Suspendisse Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (451, 'tallulah', 'aa31d4892055684632896bad6486b13f', 'kozekgilbert@gmail.com', 'TallulahParsons', 1, 3, 3, 3, 'Ornare Fusce Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (452, 'britanni', '826cbcbd00a6c2fc04ec49833aef137d', 'kozekgilbert@gmail.com', 'BritanniDejesus', 1, 3, 3, 3, 'Metus Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (453, 'elaine', '1d833688e09b404182c6a5c8dfef319b', 'kozekgilbert@gmail.com', 'ElaineHawkins', 1, 3, 3, 3, 'Lacus Quisque Imperdiet Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (454, 'jennifer', 'a3504ce3a21476e10c02b725dfba6381', 'kozekgilbert@gmail.com', 'JenniferMorales', 1, 3, 3, 3, 'Nec Ligula Consectetuer Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (455, 'dana', '45b1c901aa5d4747f1d123a73f9b4482', 'kozekgilbert@gmail.com', 'DanaRodgers', 1, 3, 3, 3, 'Nunc Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (456, 'jamal', '7592628bce37dd14e0b36ea66d5ba847', 'kozekgilbert@gmail.com', 'JamalMorin', 1, 3, 3, 3, 'Dictum Phasellus Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (457, 'aaron', 'b9ea8bc466008ae3abd2e7165f7ec6bc', 'kozekgilbert@gmail.com', 'AaronWhitney', 1, 3, 3, 3, 'Ornare Facilisis Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (458, 'sasha', '5df7731bf4fbc21e7d3967a7a159d8f5', 'kozekgilbert@gmail.com', 'SashaFleming', 1, 3, 3, 3, 'Rutrum Lorem Ac Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (459, 'randall', 'daa7ebeb66d048fed30a7d80361891f0', 'kozekgilbert@gmail.com', 'RandallFrazier', 1, 3, 3, 3, 'Mauris Sagittis Placerat Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (460, 'sacha', '3385d2aa2f8a0300d299fe8d888e4ecc', 'kozekgilbert@gmail.com', 'SachaBowen', 1, 3, 3, 3, 'Nunc Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (461, 'sydnee', '9c0f914da2562dcb0ab168cb4156f386', 'kozekgilbert@gmail.com', 'SydneeMathis', 1, 3, 3, 3, 'Lorem Ipsum Dolor Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (462, 'illiana', 'c5014e9540f22d19b737658e51b5e1fa', 'kozekgilbert@gmail.com', 'IllianaWalker', 1, 3, 3, 3, 'Elit Sed Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (463, 'aiko', '75650ea96c0f9733f3e12380682107d4', 'kozekgilbert@gmail.com', 'AikoGoodwin', 1, 3, 3, 3, 'Sed Neque Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (464, 'xantha', 'c51230973f795ece444439c37d3044bf', 'kozekgilbert@gmail.com', 'XanthaCopeland', 1, 3, 3, 3, 'Ridiculus Mus Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (465, 'riley', '87732aa7403df7b56c54221e0b4c9aed', 'kozekgilbert@gmail.com', 'RileyBright', 1, 3, 3, 3, 'Posuere Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (466, 'colette', '2eada13591b9874ee8e42c7f842bfd58', 'kozekgilbert@gmail.com', 'ColetteBowers', 1, 3, 3, 3, 'Adipiscing Fringilla Porttitor LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (467, 'robin', '8dd1635ff2b8c931952663d4922956e7', 'kozekgilbert@gmail.com', 'RobinCastillo', 1, 3, 3, 3, 'Sed Dui Fusce Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (468, 'amal', 'd62d41cf17704ddd6cb22c9688130f73', 'kozekgilbert@gmail.com', 'AmalDeleon', 1, 3, 3, 3, 'Sodales Purus In Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (469, 'hashim', '7c626eb6a66c42a85e8062bea10f9b05', 'kozekgilbert@gmail.com', 'HashimMaynard', 1, 3, 3, 3, 'Tincidunt Orci Quis PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (470, 'william', '8a31fc89653c9f20d371bec97430d477', 'kozekgilbert@gmail.com', 'WilliamSampson', 1, 3, 3, 3, 'Eu Erat Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (471, 'hermione', 'dcd3ba551f9b98f995e7e7c13780636d', 'kozekgilbert@gmail.com', 'HermioneCoffey', 1, 3, 3, 3, 'Sit Amet Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (472, 'jamal', '7592628bce37dd14e0b36ea66d5ba847', 'kozekgilbert@gmail.com', 'JamalTate', 1, 3, 3, 3, 'Fermentum Arcu Vestibulum Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (473, 'dane', '17351a7c5a4e0c2f9b8c3975e131a5ea', 'kozekgilbert@gmail.com', 'DaneBradshaw', 1, 3, 3, 3, 'Cras Pellentesque Sed Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (474, 'boris', 'a5bc7ae3f908d835582c250f206e86ca', 'kozekgilbert@gmail.com', 'BorisShaw', 1, 3, 3, 3, 'At Iaculis Quis Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (475, 'ginger', 'c177bb62142364a3a74fab69164e7ea4', 'kozekgilbert@gmail.com', 'GingerGordon', 1, 3, 3, 3, 'Diam Nunc Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (476, 'lee', 'f39c8f313f3449a39d36c761d028efc7', 'kozekgilbert@gmail.com', 'LeeBurks', 1, 3, 3, 3, 'Nullam Scelerisque Neque Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (477, 'maile', 'da7510b97206f83e0d6077e5d97935e4', 'kozekgilbert@gmail.com', 'MailePitts', 1, 3, 3, 3, 'Mus Aenean Eget Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (478, 'colt', '8bf29c5540030c7c3760413a21977e2f', 'kozekgilbert@gmail.com', 'ColtMclean', 1, 3, 3, 3, 'Lectus Quis LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (479, 'oliver', '553fcb594976460e66e32da18a2b6f88', 'kozekgilbert@gmail.com', 'OliverGill', 1, 3, 3, 3, 'Cursus Integer Mollis LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (480, 'nelle', 'e131385dbcbc09c2e20f71e7aa50c1a2', 'kozekgilbert@gmail.com', 'NelleBrennan', 1, 3, 3, 3, 'Malesuada Augue Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (481, 'robert', 'a82762f30c1a27faa4f256b24fcaff24', 'kozekgilbert@gmail.com', 'RobertHudson', 1, 3, 3, 3, 'Donec Consectetuer Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (482, 'eagan', '85326093b46fb4d15affbf7f72bb8f95', 'kozekgilbert@gmail.com', 'EaganMccray', 1, 3, 3, 3, 'Nunc Laoreet Lectus Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (483, 'lavinia', '761a37cd211242c9b9a18692cff237c9', 'kozekgilbert@gmail.com', 'LaviniaGutierrez', 1, 3, 3, 3, 'Ultrices Iaculis Odio Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (484, 'warren', '91cd058c84a3b24f971b075eb0aa768b', 'kozekgilbert@gmail.com', 'WarrenJohnson', 1, 3, 3, 3, 'Non Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (485, 'edan', '3b4ead3b65478c46520169a2daf4cbd8', 'kozekgilbert@gmail.com', 'EdanDickerson', 1, 3, 3, 3, 'Nec Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (486, 'kristen', '2082d9787cd9659f6f633a1528b5e2ae', 'kozekgilbert@gmail.com', 'KristenRoy', 1, 3, 3, 3, 'Enim Nec Tempus PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (487, 'bruno', 'b304f234940a679b3ab3c699f80db849', 'kozekgilbert@gmail.com', 'BrunoArnold', 1, 3, 3, 3, 'Nonummy Ac Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (488, 'arsenio', '3507d245d218c0275a150b12a770e508', 'kozekgilbert@gmail.com', 'ArsenioMcmahon', 1, 3, 3, 3, 'Urna Suscipit Nonummy Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (489, 'lacy', '5076ded8822e5363ea64556c6b89ed69', 'kozekgilbert@gmail.com', 'LacyBartlett', 1, 3, 3, 3, 'Ante PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (490, 'adrienne', 'adbde2d57b0b1226ea3932b5816ead4e', 'kozekgilbert@gmail.com', 'AdrienneTyson', 1, 3, 3, 3, 'Orci Adipiscing Non Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (491, 'chaney', '14b031a21101327bdc947d6952e2e643', 'kozekgilbert@gmail.com', 'ChaneyCastillo', 1, 3, 3, 3, 'Luctus Et LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (492, 'orlando', '9ddd79f1c8391d68448628bc50ee3034', 'kozekgilbert@gmail.com', 'OrlandoHolman', 1, 3, 3, 3, 'Sapien Nunc Pulvinar Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (493, 'aiko', '75650ea96c0f9733f3e12380682107d4', 'kozekgilbert@gmail.com', 'AikoDaniel', 1, 3, 3, 3, 'At Arcu Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (494, 'quynn', '69dbb9280319f2f9e96f253e82f5b1d5', 'kozekgilbert@gmail.com', 'QuynnAyers', 1, 3, 3, 3, 'Morbi Vehicula Pellentesque Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (495, 'pearl', '519b661cd50ce3196a9b566c0aea8f02', 'kozekgilbert@gmail.com', 'PearlWatkins', 1, 3, 3, 3, 'Consequat Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (496, 'micah', '7462c1c03f69e50336e29cb2ae8fbf1f', 'kozekgilbert@gmail.com', 'MicahBaird', 1, 3, 3, 3, 'Egestas A Dui Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (497, 'ayanna', 'f263c369b5f7d525c83e691c73a57618', 'kozekgilbert@gmail.com', 'AyannaStanley', 1, 3, 3, 3, 'At Pede LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (498, 'carly', '72364cd511b837f3a021cc02a6df0c47', 'kozekgilbert@gmail.com', 'CarlyPace', 1, 3, 3, 3, 'Felis Ullamcorper Viverra LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (499, 'haley', 'ea1f561f66865449781748a4f95fa030', 'kozekgilbert@gmail.com', 'HaleyLeonard', 1, 3, 3, 3, 'Vel Faucibus Id Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (500, 'cadman', '41b83b02b89f3ec4c987418bf879dcf5', 'kozekgilbert@gmail.com', 'CadmanByrd', 1, 3, 3, 3, 'Quam Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (501, 'winter', '27c8267388843545ec6d9a812aada0ef', 'kozekgilbert@gmail.com', 'WinterVasquez', 1, 3, 3, 3, 'Elit Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (502, 'amity', 'd0129af8c7b5b0f9708cf9c0296f05ec', 'kozekgilbert@gmail.com', 'AmityWallace', 1, 3, 3, 3, 'Imperdiet Ornare LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (503, 'lee', 'f39c8f313f3449a39d36c761d028efc7', 'kozekgilbert@gmail.com', 'LeeMelendez', 1, 3, 3, 3, 'Etiam Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (504, 'grace', '8ff861bcfd87bd85e9b207ea74cb6596', 'kozekgilbert@gmail.com', 'GraceWolf', 1, 3, 3, 3, 'Non Arcu Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (505, 'blair', '8c0801db6fb25fc03ebab839cd44a162', 'kozekgilbert@gmail.com', 'BlairWorkman', 1, 3, 3, 3, 'Id Enim LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (506, 'burton', '0a728bd56ab412e79b6c9717c5d486b4', 'kozekgilbert@gmail.com', 'BurtonClayton', 1, 3, 3, 3, 'Faucibus Orci Luctus Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (507, 'mannix', '28cc16ae8940987d7292e4c0dd6fa089', 'kozekgilbert@gmail.com', 'MannixSchultz', 1, 3, 3, 3, 'At Pretium Aliquet Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (508, 'ahmed', '32aa2fd87338e241978c48ab319641bc', 'kozekgilbert@gmail.com', 'AhmedIngram', 1, 3, 3, 3, 'Consectetuer Adipiscing Elit Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (509, 'jolie', 'c8b40db7dfe826cf43df5723241f954a', 'kozekgilbert@gmail.com', 'JolieWaller', 1, 3, 3, 3, 'Eu Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (510, 'stewart', 'daf5dc70a0b3799d525ba1959e88f17e', 'kozekgilbert@gmail.com', 'StewartPratt', 1, 3, 3, 3, 'Mauris Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (511, 'dominic', '0d04c00b49a13bafa964a2dc081284c7', 'kozekgilbert@gmail.com', 'DominicWagner', 1, 3, 3, 3, 'Iaculis Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (512, 'lewis', 'd3694aadbe93408019eb07638a63f30d', 'kozekgilbert@gmail.com', 'LewisHampton', 1, 3, 3, 3, 'Lectus Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (513, 'calvin', 'f60daa5d0464cd45ad540bb8cee0be84', 'kozekgilbert@gmail.com', 'CalvinWong', 1, 3, 3, 3, 'Aliquam Nisl Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (514, 'yoshio', '814d744d5d1ec0d2bdfb2c3165de6852', 'kozekgilbert@gmail.com', 'YoshioRatliff', 1, 3, 3, 3, 'Sodales Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (515, 'camille', '4b7752d4311e0d46c8d1e1ff619cc860', 'kozekgilbert@gmail.com', 'CamilleMathews', 1, 3, 3, 3, 'Scelerisque Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (516, 'marsden', '0864e0091c56e322a07a4d36ac2b1778', 'kozekgilbert@gmail.com', 'MarsdenSolomon', 1, 3, 3, 3, 'Facilisis Suspendisse Commodo LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (517, 'macey', 'eb9c33ff77b727394b85797b8b040e47', 'kozekgilbert@gmail.com', 'MaceyHead', 1, 3, 3, 3, 'Quis Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (518, 'kylee', '9a8dbff37262477f08b5d7f26d3e0b7a', 'kozekgilbert@gmail.com', 'KyleeZimmerman', 1, 3, 3, 3, 'Mollis Dui In Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (519, 'harriet', '50d32eff82b51b965043ad1a0f6f257d', 'kozekgilbert@gmail.com', 'HarrietPratt', 1, 3, 3, 3, 'Mauris Aliquam Eu LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (520, 'demetria', '5ba3c3fc2eb27a9221a592b361cf3aee', 'kozekgilbert@gmail.com', 'DemetriaValenzuela', 1, 3, 3, 3, 'Urna Justo Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (521, 'rashad', 'a4033a492ad75c93f088eb9b66741c16', 'kozekgilbert@gmail.com', 'RashadGillespie', 1, 3, 3, 3, 'Varius Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (522, 'chaney', '14b031a21101327bdc947d6952e2e643', 'kozekgilbert@gmail.com', 'ChaneySingleton', 1, 3, 3, 3, 'Leo In Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (523, 'leslie', '76bc931e8299993bc2a0cee6d1d201b2', 'kozekgilbert@gmail.com', 'LeslieCunningham', 1, 3, 3, 3, 'Phasellus Libero Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (524, 'kellie', '29b65e361948569f56f952bfd38eee89', 'kozekgilbert@gmail.com', 'KellieWatson', 1, 3, 3, 3, 'Augue LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (525, 'blair', '8c0801db6fb25fc03ebab839cd44a162', 'kozekgilbert@gmail.com', 'BlairWheeler', 1, 3, 3, 3, 'Et LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (526, 'faith', '31d014987cc17fdf0c4b39be4bcdbce4', 'kozekgilbert@gmail.com', 'FaithBridges', 1, 3, 3, 3, 'Ac Orci Ut PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (527, 'nissim', 'dadb285fb06852686effa98b461255fa', 'kozekgilbert@gmail.com', 'NissimMann', 1, 3, 3, 3, 'Ipsum Leo Elementum Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (528, 'philip', '7a648ff16e11a54bd706a64ddfef0c55', 'kozekgilbert@gmail.com', 'PhilipCruz', 1, 3, 3, 3, 'Sed Molestie Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (529, 'emery', '675a832a4914275d7294b8f395e3975e', 'kozekgilbert@gmail.com', 'EmeryNavarro', 1, 3, 3, 3, 'Id Blandit At PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (530, 'oren', '4d688909f80dc8d1e3b463af98005232', 'kozekgilbert@gmail.com', 'OrenJuarez', 1, 3, 3, 3, 'Erat Nonummy Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (531, 'linda', '7d95d1d22485f5ac341d06bbfea91e9e', 'kozekgilbert@gmail.com', 'LindaSchmidt', 1, 3, 3, 3, 'Fringilla Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (532, 'yuri', '0517dd1e00b72285d3b203221fbdbc49', 'kozekgilbert@gmail.com', 'YuriWeaver', 1, 3, 3, 3, 'Fermentum Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (533, 'ariana', '7d1985b5f431fed327c188510e94b251', 'kozekgilbert@gmail.com', 'ArianaJones', 1, 3, 3, 3, 'A Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (534, 'calista', '1985720aab8d8c88d11b455b1e5a278e', 'kozekgilbert@gmail.com', 'CalistaGonzalez', 1, 3, 3, 3, 'Ullamcorper Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (535, 'lunea', 'd9f24722633f0796ea1d26f537b614a4', 'kozekgilbert@gmail.com', 'LuneaGibson', 1, 3, 3, 3, 'Integer Urna Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (536, 'fleur', '7aa986f563f58d4aa8665bb4e392890a', 'kozekgilbert@gmail.com', 'FleurSampson', 1, 3, 3, 3, 'Dui Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (537, 'katelyn', '0f677f02bf14ada4051ccdb1831d8916', 'kozekgilbert@gmail.com', 'KatelynHayden', 1, 3, 3, 3, 'A Scelerisque Sed Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (538, 'shana', '6911dfe91341f2e6231692d8bf3918ae', 'kozekgilbert@gmail.com', 'ShanaJennings', 1, 3, 3, 3, 'Eu Eros Nam Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (539, 'abdul', '428a78b4fee47253898d7918c0a09160', 'kozekgilbert@gmail.com', 'AbdulMills', 1, 3, 3, 3, 'Pede LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (540, 'mollie', 'e37e14e2ca5f925b40408bb351ca2245', 'kozekgilbert@gmail.com', 'MollieLeach', 1, 3, 3, 3, 'Non Cursus Non LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (541, 'lester', 'c1c6dcc6a8c51af98a15045a2cad502d', 'kozekgilbert@gmail.com', 'LesterBartlett', 1, 3, 3, 3, 'Nonummy Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (542, 'guinevere', 'cb28639400a009702949fde11ae5c400', 'kozekgilbert@gmail.com', 'GuinevereLambert', 1, 3, 3, 3, 'Eu Elit Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (543, 'maxine', '9a6410281c8c7d3e7d331640a4725130', 'kozekgilbert@gmail.com', 'MaxineCastaneda', 1, 3, 3, 3, 'Semper Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (544, 'farrah', '7519a4276a28a091c72b721c128aaeb7', 'kozekgilbert@gmail.com', 'FarrahBeasley', 1, 3, 3, 3, 'Dui Suspendisse Ac Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (545, 'tana', '86ace974b8169695a903491107383c37', 'kozekgilbert@gmail.com', 'TanaAyala', 1, 3, 3, 3, 'Penatibus Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (546, 'donovan', '262514f2ce87f8bc8f4beb9fd899d3fe', 'kozekgilbert@gmail.com', 'DonovanHood', 1, 3, 3, 3, 'Molestie Sodales Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (547, 'melodie', 'a9909a1f3e99ac06909d96f470c3ab84', 'kozekgilbert@gmail.com', 'MelodieEngland', 1, 3, 3, 3, 'Ante Lectus Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (548, 'ezekiel', 'cc021229a62e87ace37a27643993b065', 'kozekgilbert@gmail.com', 'EzekielHiggins', 1, 3, 3, 3, 'Mauris Sit Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (549, 'janna', '86c1ff47d18e1c1c4856df08ac2535b0', 'kozekgilbert@gmail.com', 'JannaHess', 1, 3, 3, 3, 'Sed Facilisis Vitae Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (550, 'rhona', 'f50a17a23fdd76de670df25ccad7acec', 'kozekgilbert@gmail.com', 'RhonaHebert', 1, 3, 3, 3, 'Lorem Ipsum Dolor Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (551, 'elvis', 'b3128063ef51bd7d61ceee104346526b', 'kozekgilbert@gmail.com', 'ElvisHess', 1, 3, 3, 3, 'Dolor Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (552, 'rudyard', 'e13e44aa07e6a95325763a3f3ebcc7ba', 'kozekgilbert@gmail.com', 'RudyardMay', 1, 3, 3, 3, 'Vulputate Eu Odio Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (553, 'cora', '6b0015e2422a4259deddadc50398910e', 'kozekgilbert@gmail.com', 'CoraCooper', 1, 3, 3, 3, 'Congue In Scelerisque Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (554, 'curran', '54621b5c1c8e8a6bb3fd032c9ebbd99e', 'kozekgilbert@gmail.com', 'CurranStokes', 1, 3, 3, 3, 'Libero Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (555, 'maisie', '8b1a5b392d7c634a3bf7e2bb5a093393', 'kozekgilbert@gmail.com', 'MaisieCamacho', 1, 3, 3, 3, 'Magna Ut Tincidunt Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (556, 'barbara', '2c5d4675cd1989e7e00c69c0923c9ed7', 'kozekgilbert@gmail.com', 'BarbaraBurton', 1, 3, 3, 3, 'Lacus Cras Interdum Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (557, 'kirby', '1caa76eecff5ea4659403bacbfff2b53', 'kozekgilbert@gmail.com', 'KirbyVinson', 1, 3, 3, 3, 'Cum LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (558, 'zeph', '2091a4cb2ccd142ce388aa7804ca3701', 'kozekgilbert@gmail.com', 'ZephBradley', 1, 3, 3, 3, 'Nonummy Ac LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (559, 'keane', '2885bef9b3a5698233dd4b3c2a056c8b', 'kozekgilbert@gmail.com', 'KeaneHogan', 1, 3, 3, 3, 'Eget Varius Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (560, 'ryder', '85d1a3ed7c961c2b1ea944a4b1d754ad', 'kozekgilbert@gmail.com', 'RyderPittman', 1, 3, 3, 3, 'Libero Proin Mi Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (561, 'lev', '89f85f1789cfcdf518d402f39b390d04', 'kozekgilbert@gmail.com', 'LevHebert', 1, 3, 3, 3, 'Risus Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (562, 'igor', 'c2d53eab1c3c169cc789ba7581fc7cfa', 'kozekgilbert@gmail.com', 'IgorBurton', 1, 3, 3, 3, 'Amet Risus Donec Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (563, 'amity', 'd0129af8c7b5b0f9708cf9c0296f05ec', 'kozekgilbert@gmail.com', 'AmityPittman', 1, 3, 3, 3, 'Odio LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (564, 'emery', '675a832a4914275d7294b8f395e3975e', 'kozekgilbert@gmail.com', 'EmeryKnox', 1, 3, 3, 3, 'Enim Mi Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (565, 'uriel', 'a4a34ae958023b456394fee15e3b1e3c', 'kozekgilbert@gmail.com', 'UrielGreene', 1, 3, 3, 3, 'Ipsum LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (566, 'august', 'f49344dc5bef55077468520efc1e0205', 'kozekgilbert@gmail.com', 'AugustWeaver', 1, 3, 3, 3, 'Vitae Purus Gravida Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (567, 'dominique', 'ca8a98af5e722203d3e120c55e003037', 'kozekgilbert@gmail.com', 'DominiqueMorgan', 1, 3, 3, 3, 'Ut Quam Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (568, 'akeem', '620930b8071569b7c5cdfbfb10ea2642', 'kozekgilbert@gmail.com', 'AkeemCombs', 1, 3, 3, 3, 'Dignissim Lacus PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (569, 'unity', '90fe32d8ba4135db6265c70aa48892fb', 'kozekgilbert@gmail.com', 'UnityBallard', 1, 3, 3, 3, 'Sed Congue Elit Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (570, 'ocean', '907953d01e6ddd989a22bebe1e2e5378', 'kozekgilbert@gmail.com', 'OceanPayne', 1, 3, 3, 3, 'Leo Vivamus Nibh Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (571, 'matthew', '95b0a48189f94305c855275113f94c6a', 'kozekgilbert@gmail.com', 'MatthewConrad', 1, 3, 3, 3, 'Metus Facilisis Lorem Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (572, 'drew', 'f4f0d1165fbf5ddc5fbf4c214af9f2b2', 'kozekgilbert@gmail.com', 'DrewPugh', 1, 3, 3, 3, 'Id PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (573, 'morgan', 'f77b4f63b45ad9efd77e2b59367d361f', 'kozekgilbert@gmail.com', 'MorganBrock', 1, 3, 3, 3, 'Pede Malesuada Vel Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (574, 'colleen', '0baf467f99001fc3adfce1f153f0a5fa', 'kozekgilbert@gmail.com', 'ColleenPatton', 1, 3, 3, 3, 'Urna Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (575, 'uta', '033987e7f45f3884e24c7970a4e5e4f8', 'kozekgilbert@gmail.com', 'UtaRodriguez', 1, 3, 3, 3, 'Nam Tempor Diam Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (576, 'barclay', '4ba9385bedfb64f860b2be00c8045249', 'kozekgilbert@gmail.com', 'BarclayHansen', 1, 3, 3, 3, 'Mi Duis Risus Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (577, 'marvin', '8e00b25798d92ec58c1b0a09dbd55570', 'kozekgilbert@gmail.com', 'MarvinMarsh', 1, 3, 3, 3, 'Dolor Sit Amet LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (578, 'indira', 'f1d363fb1c0cd57030ae2dcf0f8c4175', 'kozekgilbert@gmail.com', 'IndiraHyde', 1, 3, 3, 3, 'Sodales At Velit Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (579, 'kylie', '479dd151ee91cec400f7514ee23daca1', 'kozekgilbert@gmail.com', 'KylieHensley', 1, 3, 3, 3, 'Massa Vestibulum Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (580, 'bernard', 'dadddea0cd93c4d2921c3b07320ddb78', 'kozekgilbert@gmail.com', 'BernardHarmon', 1, 3, 3, 3, 'Sem Ut Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (581, 'curran', '54621b5c1c8e8a6bb3fd032c9ebbd99e', 'kozekgilbert@gmail.com', 'CurranMeyers', 1, 3, 3, 3, 'Tempor Bibendum Donec LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (582, 'hammett', 'eb43c3f65b3fab63c5da593d27af8271', 'kozekgilbert@gmail.com', 'HammettHarrington', 1, 3, 3, 3, 'Tincidunt Pede Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (583, 'jorden', '5c2c227ae530d66916bcae105e581093', 'kozekgilbert@gmail.com', 'JordenPeterson', 1, 3, 3, 3, 'Rhoncus PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (584, 'cheyenne', 'cb41b25d061349a059f10942828e587b', 'kozekgilbert@gmail.com', 'CheyenneEnglish', 1, 3, 3, 3, 'A Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (585, 'keane', '2885bef9b3a5698233dd4b3c2a056c8b', 'kozekgilbert@gmail.com', 'KeaneOlson', 1, 3, 3, 3, 'Ipsum Suspendisse Sagittis Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (586, 'demetria', '5ba3c3fc2eb27a9221a592b361cf3aee', 'kozekgilbert@gmail.com', 'DemetriaMorin', 1, 3, 3, 3, 'Nulla Vulputate Dui LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (587, 'leo', '657b298b04e033810343842f993c9817', 'kozekgilbert@gmail.com', 'LeoBradley', 1, 3, 3, 3, 'Ullamcorper Velit Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (588, 'maggie', '77a39b8abc3537a3fdd89f45b60d4dc8', 'kozekgilbert@gmail.com', 'MaggieWalter', 1, 3, 3, 3, 'Odio A Purus LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (589, 'grant', 'ac62cbaf51e1f71f709c588ceaa1f6e7', 'kozekgilbert@gmail.com', 'GrantVelasquez', 1, 3, 3, 3, 'Ac Tellus Suspendisse Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (590, 'dorothy', '0e24aeccaa5f9d5f2b7da076ddcfb742', 'kozekgilbert@gmail.com', 'DorothyTillman', 1, 3, 3, 3, 'Nec Mauris Blandit Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (591, 'kalia', '1aa2fdd8f9be05850cfc41b552a03829', 'kozekgilbert@gmail.com', 'KaliaRoth', 1, 3, 3, 3, 'Lorem Vehicula LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (592, 'anthony', '72f99c7aa7eb9860ca506a67d0845688', 'kozekgilbert@gmail.com', 'AnthonyChang', 1, 3, 3, 3, 'Mauris Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (593, 'kirestin', '2352dbf6620856d9ec71705ed8c73aa9', 'kozekgilbert@gmail.com', 'KirestinShelton', 1, 3, 3, 3, 'Consectetuer Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (594, 'kaye', '22ac164bbc0019851c200702bf1503b1', 'kozekgilbert@gmail.com', 'KayeWillis', 1, 3, 3, 3, 'Duis Ac Arcu Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (595, 'dexter', '0ae114390fe487548da31030116b6e0c', 'kozekgilbert@gmail.com', 'DexterBurks', 1, 3, 3, 3, 'Sed Est Nunc Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (596, 'colby', '3e98648b61196e531ae378add983c44a', 'kozekgilbert@gmail.com', 'ColbyConley', 1, 3, 3, 3, 'Mauris Morbi Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (597, 'yoko', '6a3fe1ddf8a8bc35736a1228117a8156', 'kozekgilbert@gmail.com', 'YokoNewton', 1, 3, 3, 3, 'Leo LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (598, 'alice', '7abdccbea8473767e91378e37850d296', 'kozekgilbert@gmail.com', 'AliceFranks', 1, 3, 3, 3, 'Id Ante Dictum PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (599, 'arden', '57fbd7127aaef2c45af62f4976bf3356', 'kozekgilbert@gmail.com', 'ArdenTucker', 1, 3, 3, 3, 'Aliquam Gravida Mauris Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (600, 'andrew', '47fab60bdcd2ffce91447d19fe9ce7f1', 'kozekgilbert@gmail.com', 'AndrewBrooks', 1, 3, 3, 3, 'Ac Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (601, 'astra', '0b6b94e8f4cf7b2858a71d7782331e23', 'kozekgilbert@gmail.com', 'AstraWolfe', 1, 3, 3, 3, 'A Purus Duis Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (602, 'jana', '6a97b6bab97302add091538b802763e3', 'kozekgilbert@gmail.com', 'JanaOlsen', 1, 3, 3, 3, 'Purus Mauris A Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (603, 'orson', '2ab35186bca11c0d7eb0c82f15ecde61', 'kozekgilbert@gmail.com', 'OrsonLee', 1, 3, 3, 3, 'Curae; Donec Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (604, 'aladdin', '5f6beda971b572d5d86c9a2a33b7ceb3', 'kozekgilbert@gmail.com', 'AladdinWilkins', 1, 3, 3, 3, 'Scelerisque Neque Nullam Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (605, 'jin', 'a90a8761632bae26b5517acb73f2ccca', 'kozekgilbert@gmail.com', 'JinConner', 1, 3, 3, 3, 'Ornare Lectus Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (606, 'bertha', 'bf235738ee8a1b2bdbb2087bb048ceab', 'kozekgilbert@gmail.com', 'BerthaLee', 1, 3, 3, 3, 'Eget Metus In PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (607, 'adena', 'ee9b25e9790a68e523af6cc0ed2ff1cd', 'kozekgilbert@gmail.com', 'AdenaHumphrey', 1, 3, 3, 3, 'Risus Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (608, 'ray', '6f9735193f33688a5ea05103eda8fd8c', 'kozekgilbert@gmail.com', 'RayBird', 1, 3, 3, 3, 'Convallis Erat Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (609, 'madeline', 'e67b7d7fd1cbc7d502e50999329f17cc', 'kozekgilbert@gmail.com', 'MadelineParks', 1, 3, 3, 3, 'Molestie Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (610, 'wayne', 'de99942168336a6c3e1d789a1ca4c14a', 'kozekgilbert@gmail.com', 'WayneMurray', 1, 3, 3, 3, 'Lectus Pede Ultrices Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (611, 'benedict', '563f094c2ea4a07b5eba6fabba556675', 'kozekgilbert@gmail.com', 'BenedictPatel', 1, 3, 3, 3, 'Sit Amet Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (612, 'sylvia', 'd7bf862a7731a9bd5fed111ccb9a4ccc', 'kozekgilbert@gmail.com', 'SylviaRobbins', 1, 3, 3, 3, 'Nisi Magna Sed Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (613, 'otto', 'c9a239ae7dda0da45897a6bce15913bb', 'kozekgilbert@gmail.com', 'OttoWilson', 1, 3, 3, 3, 'Lacus Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (614, 'davis', 'cbcabfb0d537e84f882f2a36847ab73a', 'kozekgilbert@gmail.com', 'DavisWallace', 1, 3, 3, 3, 'Velit Cras Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (615, 'wyoming', '15d9924063a664ae2ca82b89b4d50b07', 'kozekgilbert@gmail.com', 'WyomingCummings', 1, 3, 3, 3, 'Nulla Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (616, 'drake', 'f315c9d829e7400aa7aace329c8a2b05', 'kozekgilbert@gmail.com', 'DrakeDoyle', 1, 3, 3, 3, 'Duis Cursus Diam Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (617, 'ishmael', 'dafd562c900e816e87af0fed5bcd2da6', 'kozekgilbert@gmail.com', 'IshmaelCallahan', 1, 3, 3, 3, 'Ut Nec Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (618, 'stella', '2fd4930aafab6e2793e5dd45ba80bfec', 'kozekgilbert@gmail.com', 'StellaFox', 1, 3, 3, 3, 'Diam Duis LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (619, 'tobias', 'e031e326d39c60a71cbe77b41e720fa3', 'kozekgilbert@gmail.com', 'TobiasCastillo', 1, 3, 3, 3, 'Id Libero Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (620, 'lester', 'c1c6dcc6a8c51af98a15045a2cad502d', 'kozekgilbert@gmail.com', 'LesterOneill', 1, 3, 3, 3, 'In Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (621, 'brent', '7ddad59fd2151817a3a506c593f1ceff', 'kozekgilbert@gmail.com', 'BrentAvila', 1, 3, 3, 3, 'Semper Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (622, 'devin', '210655067935d53e0e3c5bc7a10e988a', 'kozekgilbert@gmail.com', 'DevinVincent', 1, 3, 3, 3, 'Sed Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (623, 'cassady', 'a04fa814bd81b52ce86c800e38d92e39', 'kozekgilbert@gmail.com', 'CassadyBurt', 1, 3, 3, 3, 'Et Ultrices Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (624, 'ryder', '85d1a3ed7c961c2b1ea944a4b1d754ad', 'kozekgilbert@gmail.com', 'RyderGentry', 1, 3, 3, 3, 'Sed Libero Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (625, 'caleb', 'c7bbf09d0c646508b1d42fff102e457e', 'kozekgilbert@gmail.com', 'CalebRobbins', 1, 3, 3, 3, 'Non Dui Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (626, 'josiah', '85c1f23192805f8c690e4c89260c2975', 'kozekgilbert@gmail.com', 'JosiahHenderson', 1, 3, 3, 3, 'Velit In Aliquet Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (627, 'maile', 'da7510b97206f83e0d6077e5d97935e4', 'kozekgilbert@gmail.com', 'MaileAguirre', 1, 3, 3, 3, 'Tincidunt Tempus Risus LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (628, 'amaya', 'bf3e1696f17753922d047253d9d39f32', 'kozekgilbert@gmail.com', 'AmayaFlynn', 1, 3, 3, 3, 'Parturient Montes Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (629, 'channing', '9fccb535d0fda907bed9cbfb1bedff22', 'kozekgilbert@gmail.com', 'ChanningBlackwell', 1, 3, 3, 3, 'Augue Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (630, 'chantale', '498e164224e0b1fd4b1cf93e6738db76', 'kozekgilbert@gmail.com', 'ChantaleSimon', 1, 3, 3, 3, 'Non Bibendum Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (631, 'naomi', '28bb9dae81f23e3e3ef399883fed3a23', 'kozekgilbert@gmail.com', 'NaomiPierce', 1, 3, 3, 3, 'Nonummy Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (632, 'tashya', '907ce97215628ba4339d12e8ba05d8f0', 'kozekgilbert@gmail.com', 'TaShyaWolfe', 1, 3, 3, 3, 'Vivamus Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (633, 'alisa', '3ba0dc39c0ef945745d9654b4f3471c9', 'kozekgilbert@gmail.com', 'AlisaRomero', 1, 3, 3, 3, 'Id Ante Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (634, 'martena', 'c43eaaedac90c24b69ab680ff4b85456', 'kozekgilbert@gmail.com', 'MartenaBonner', 1, 3, 3, 3, 'Dis Parturient Montes Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (635, 'bradley', '5307a4f03b188a813a6d4afe12041e92', 'kozekgilbert@gmail.com', 'BradleyFarley', 1, 3, 3, 3, 'Turpis Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (636, 'chase', '9535dd735c4751f4fbdcd95ce0530c94', 'kozekgilbert@gmail.com', 'ChaseHood', 1, 3, 3, 3, 'Aptent Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (637, 'michelle', '06ee2d4b9ce7961f4718f66da1851ed4', 'kozekgilbert@gmail.com', 'MichelleAvila', 1, 3, 3, 3, 'Amet Risus Donec Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (638, 'matthew', '95b0a48189f94305c855275113f94c6a', 'kozekgilbert@gmail.com', 'MatthewRuiz', 1, 3, 3, 3, 'Dolor Sit Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (639, 'maggie', '77a39b8abc3537a3fdd89f45b60d4dc8', 'kozekgilbert@gmail.com', 'MaggieClarke', 1, 3, 3, 3, 'Sit Amet Diam PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (640, 'serena', 'fb4f32b4d2b9fd9b5ef0c80e57dbc5e2', 'kozekgilbert@gmail.com', 'SerenaLawson', 1, 3, 3, 3, 'Lacus Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (641, 'victoria', 'c3601ad2286a4293868ec2a4bc606ba3', 'kozekgilbert@gmail.com', 'VictoriaNicholson', 1, 3, 3, 3, 'Libero Morbi Accumsan LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (642, 'ralph', 'e2282829f546bbcb216693e2a5659a79', 'kozekgilbert@gmail.com', 'RalphJacobson', 1, 3, 3, 3, 'Mauris Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (643, 'hermione', 'dcd3ba551f9b98f995e7e7c13780636d', 'kozekgilbert@gmail.com', 'HermioneSuarez', 1, 3, 3, 3, 'Adipiscing Elit Curabitur Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (644, 'talon', '9242a2d99b589517e00e07ee77f16afb', 'kozekgilbert@gmail.com', 'TalonKnox', 1, 3, 3, 3, 'Urna Nullam Lobortis Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (645, 'cassandra', '4882d4fcf1677126136709ec089c313e', 'kozekgilbert@gmail.com', 'CassandraShields', 1, 3, 3, 3, 'Lacinia Orci Consectetuer Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (646, 'montana', 'a7995046f2219863899e63d6035db2da', 'kozekgilbert@gmail.com', 'MontanaFloyd', 1, 3, 3, 3, 'Nec Imperdiet Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (647, 'dean', 'aabf11b3599bbdf37f8f6020e467fd2d', 'kozekgilbert@gmail.com', 'DeanBush', 1, 3, 3, 3, 'Suspendisse LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (648, 'kennan', '942c6ba67ec3fd17b254230497d3e14d', 'kozekgilbert@gmail.com', 'KennanMontgomery', 1, 3, 3, 3, 'Eu Eros Nam Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (649, 'lewis', 'd3694aadbe93408019eb07638a63f30d', 'kozekgilbert@gmail.com', 'LewisMitchell', 1, 3, 3, 3, 'Ornare Fusce Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (650, 'blaze', 'ff5ccb0c030189a4ada2bfe972c5e037', 'kozekgilbert@gmail.com', 'BlazeFinley', 1, 3, 3, 3, 'Tristique Senectus Et LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (651, 'thane', '98d2335b483807302dd6823620e69865', 'kozekgilbert@gmail.com', 'ThaneGilmore', 1, 3, 3, 3, 'Ipsum Dolor Sit Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (652, 'gabriel', '8833f1325fb6341757b30f6de91487a5', 'kozekgilbert@gmail.com', 'GabrielYoung', 1, 3, 3, 3, 'Elit Pharetra Ut Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (653, 'zachery', '0d7b90e85a0b0fe9fcfaf408009f3f19', 'kozekgilbert@gmail.com', 'ZacheryLester', 1, 3, 3, 3, 'Diam Proin Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (654, 'cameron', 'e3e12e69bd6c0430ca3933be03e68601', 'kozekgilbert@gmail.com', 'CameronLowery', 1, 3, 3, 3, 'Mauris Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (655, 'priscilla', '2aaef15c5710b6f26d338a0e62ad76be', 'kozekgilbert@gmail.com', 'PriscillaEmerson', 1, 3, 3, 3, 'Primis Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (656, 'lucius', 'e5902e07638b234e9a9c49f8cf4ae763', 'kozekgilbert@gmail.com', 'LuciusHatfield', 1, 3, 3, 3, 'Ipsum LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (657, 'henry', '9f876785ec5425a0511339bed7230c2a', 'kozekgilbert@gmail.com', 'HenryPeck', 1, 3, 3, 3, 'Ut LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (658, 'zachery', '0d7b90e85a0b0fe9fcfaf408009f3f19', 'kozekgilbert@gmail.com', 'ZacheryFuller', 1, 3, 3, 3, 'Suspendisse LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (659, 'mara', 'f3f54b076867988993b8895bccc94805', 'kozekgilbert@gmail.com', 'MaraHurst', 1, 3, 3, 3, 'Sed Orci LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (660, 'kitra', '0e26377405b944430349be9549ec41e8', 'kozekgilbert@gmail.com', 'KitraCox', 1, 3, 3, 3, 'Magna Phasellus Dolor Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (661, 'chaney', '14b031a21101327bdc947d6952e2e643', 'kozekgilbert@gmail.com', 'ChaneyLara', 1, 3, 3, 3, 'Sem Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (662, 'dustin', '63e30cd76dd8fc1d3125fa49c18988f9', 'kozekgilbert@gmail.com', 'DustinOlson', 1, 3, 3, 3, 'Etiam Gravida Molestie Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (663, 'xantha', 'c51230973f795ece444439c37d3044bf', 'kozekgilbert@gmail.com', 'XanthaWatts', 1, 3, 3, 3, 'Egestas Nunc Sed PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (664, 'ivana', '89c2bdabc6857e82f180e757b69a8d4b', 'kozekgilbert@gmail.com', 'IvanaTravis', 1, 3, 3, 3, 'Accumsan LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (665, 'hayfa', '3471068ac9bb821d6d7092bb5a3e580e', 'kozekgilbert@gmail.com', 'HayfaSchmidt', 1, 3, 3, 3, 'Aliquam Gravida Mauris LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (666, 'flynn', '5711326aeba736c6f2c5fec0a887809e', 'kozekgilbert@gmail.com', 'FlynnPorter', 1, 3, 3, 3, 'Aenean Egestas Hendrerit Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (667, 'yolanda', '2c8f2a128f9bfe500af6ecb259631d3e', 'kozekgilbert@gmail.com', 'YolandaNelson', 1, 3, 3, 3, 'Et Lacinia Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (668, 'kyle', 'e29e16c4c4df5c332f87583939463079', 'kozekgilbert@gmail.com', 'KyleGreen', 1, 3, 3, 3, 'Elit Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (669, 'cathleen', '3d3234b8cc0ffc13e4ea2e106277221c', 'kozekgilbert@gmail.com', 'CathleenForbes', 1, 3, 3, 3, 'Diam Duis Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (670, 'wynter', 'faa57655f1c7a8e1fc15393aa05dc78f', 'kozekgilbert@gmail.com', 'WynterCross', 1, 3, 3, 3, 'Magnis Dis Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (671, 'cain', 'c11eb5b12aa4e9189492598cd03210cb', 'kozekgilbert@gmail.com', 'CainHanson', 1, 3, 3, 3, 'Vehicula Aliquet Libero Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (672, 'sandra', '3fc5586bed4fb9f745500c0605197924', 'kozekgilbert@gmail.com', 'SandraKinney', 1, 3, 3, 3, 'Varius Ultrices Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (673, 'charde', 'c2d00c1fa56b93459a0e6ab2de92b750', 'kozekgilbert@gmail.com', 'ChardeCabrera', 1, 3, 3, 3, 'Purus Duis Elementum Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (674, 'geraldine', '3d31408699ac5728df286459a41f1e89', 'kozekgilbert@gmail.com', 'GeraldineTerrell', 1, 3, 3, 3, 'Magna Nam Ligula Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (675, 'xenos', '1a82b7c6d9921cadc6eaab5745b3e81b', 'kozekgilbert@gmail.com', 'XenosKeith', 1, 3, 3, 3, 'Phasellus In Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (676, 'finn', 'ea2f39384005a0114bc1be84183075bf', 'kozekgilbert@gmail.com', 'FinnAguilar', 1, 3, 3, 3, 'Mattis Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (677, 'kamal', '7f58341b9dceb1f1edca80dae10b92bc', 'kozekgilbert@gmail.com', 'KamalWilliams', 1, 3, 3, 3, 'Viverra LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (678, 'nigel', '2408e1c2ccb6c36b48e5960797943286', 'kozekgilbert@gmail.com', 'NigelStafford', 1, 3, 3, 3, 'Ac Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (679, 'nita', 'a406308a7dd4ef2cea182c4ef105b3be', 'kozekgilbert@gmail.com', 'NitaGood', 1, 3, 3, 3, 'Integer Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (680, 'jacob', '2d0e88a0c91399493596004c796ca5b4', 'kozekgilbert@gmail.com', 'JacobRice', 1, 3, 3, 3, 'Fusce Feugiat Lorem LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (681, 'veronica', 'f64df3032bb2c5695bee5c873b70ff7f', 'kozekgilbert@gmail.com', 'VeronicaSavage', 1, 3, 3, 3, 'Mauris Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (682, 'shad', 'd3cfa27a0b292037254df4008e91d675', 'kozekgilbert@gmail.com', 'ShadEngland', 1, 3, 3, 3, 'Vel Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (683, 'bell', '95959e6fa51147a533521895a47e2338', 'kozekgilbert@gmail.com', 'BellWong', 1, 3, 3, 3, 'A Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (684, 'myles', '79a8297099345d05f37ce47600942b53', 'kozekgilbert@gmail.com', 'MylesPena', 1, 3, 3, 3, 'Semper Rutrum Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (685, 'jameson', '58185db7252e44f15a2bd6b732e95694', 'kozekgilbert@gmail.com', 'JamesonBallard', 1, 3, 3, 3, 'Nascetur Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (686, 'fulton', '161a18c193d74f7b8ae64476aca01580', 'kozekgilbert@gmail.com', 'FultonClay', 1, 3, 3, 3, 'Nibh Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (687, 'tarik', '01f5b83e50d50b6c11d7a10caca738c9', 'kozekgilbert@gmail.com', 'TarikWooten', 1, 3, 3, 3, 'Maecenas Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (688, 'erich', '3f725023643ceb80756a67801a3fea41', 'kozekgilbert@gmail.com', 'ErichBaxter', 1, 3, 3, 3, 'Turpis LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (689, 'lani', '12e3729e0a12194e5f323f37283c2ba9', 'kozekgilbert@gmail.com', 'LaniCollier', 1, 3, 3, 3, 'Vel Pede Blandit Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (690, 'chelsea', 'b71c8cc56260d94d4d04ca12819ca825', 'kozekgilbert@gmail.com', 'ChelseaBaird', 1, 3, 3, 3, 'Sit Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (691, 'marshall', 'cb05798be0b97cec8942fe36f352a423', 'kozekgilbert@gmail.com', 'MarshallYork', 1, 3, 3, 3, 'Sed Turpis Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (692, 'ariana', '7d1985b5f431fed327c188510e94b251', 'kozekgilbert@gmail.com', 'ArianaEdwards', 1, 3, 3, 3, 'Ultricies PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (693, 'beck', '6f2e6dcc64b025d013fa1bcc48e3f182', 'kozekgilbert@gmail.com', 'BeckKennedy', 1, 3, 3, 3, 'Mauris Suspendisse Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (694, 'ella', 'efadcf6a697bcc011b573984dcdd3740', 'kozekgilbert@gmail.com', 'EllaDuran', 1, 3, 3, 3, 'Aenean Sed Pede Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (695, 'alice', '7abdccbea8473767e91378e37850d296', 'kozekgilbert@gmail.com', 'AliceRobinson', 1, 3, 3, 3, 'Purus LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (696, 'yardley', '63ca05a363fcae1515c972ff6f20f595', 'kozekgilbert@gmail.com', 'YardleyEstes', 1, 3, 3, 3, 'Erat Vivamus Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (697, 'elliott', '0f4bfa84d87acc8969b7e7f9484e0c8d', 'kozekgilbert@gmail.com', 'ElliottBolton', 1, 3, 3, 3, 'Magna Duis Dignissim Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (698, 'giacomo', '18be77dddfc492a77028fc0fb3575459', 'kozekgilbert@gmail.com', 'GiacomoChandler', 1, 3, 3, 3, 'Viverra Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (699, 'shad', 'd3cfa27a0b292037254df4008e91d675', 'kozekgilbert@gmail.com', 'ShadRush', 1, 3, 3, 3, 'Aptent Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (700, 'walter', 'fd1618b5184243f6941c5c496aff6b42', 'kozekgilbert@gmail.com', 'WalterStanley', 1, 3, 3, 3, 'Eros Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (701, 'justine', 'f6f3e757ac491a3511a5198a39c5ce29', 'kozekgilbert@gmail.com', 'JustineNavarro', 1, 3, 3, 3, 'Iaculis Quis Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (702, 'lacota', '313ec1913e684559723111eb06da39f5', 'kozekgilbert@gmail.com', 'LacotaRoss', 1, 3, 3, 3, 'Mauris Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (703, 'macon', '8de9bfc1248592a69ca3d6797ec8eec1', 'kozekgilbert@gmail.com', 'MaconClark', 1, 3, 3, 3, 'Tellus Suspendisse Sed Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (704, 'amena', '3750ebe34b5cd33c941770cdeddca214', 'kozekgilbert@gmail.com', 'AmenaBenton', 1, 3, 3, 3, 'Posuere Enim Nisl Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (705, 'bert', '43b97d3f99f7c438b72e46efedd40bae', 'kozekgilbert@gmail.com', 'BertEverett', 1, 3, 3, 3, 'Sem Nulla Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (706, 'tyler', '80d4055104dd5b7cce8556ee5bf707f2', 'kozekgilbert@gmail.com', 'TylerNelson', 1, 3, 3, 3, 'Mauris Id Sapien LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (707, 'fredericka', '5805bf12f94c70447937f9c84d95a911', 'kozekgilbert@gmail.com', 'FrederickaLeon', 1, 3, 3, 3, 'Nisi A Odio Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (708, 'hayley', '30214466da8c8fb2df411e2d585f12f0', 'kozekgilbert@gmail.com', 'HayleyJoseph', 1, 3, 3, 3, 'Faucibus Lectus Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (709, 'halla', '9b99e5bfb09e6f6c7c116ddcbc7b29e3', 'kozekgilbert@gmail.com', 'HallaParrish', 1, 3, 3, 3, 'Interdum Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (710, 'sonya', '4bfe2e6ef0242f550ba86156fe3902d3', 'kozekgilbert@gmail.com', 'SonyaLowe', 1, 3, 3, 3, 'Enim Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (711, 'faith', '31d014987cc17fdf0c4b39be4bcdbce4', 'kozekgilbert@gmail.com', 'FaithEaton', 1, 3, 3, 3, 'Facilisis Vitae Orci Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (712, 'jaime', '26eab66329fae7cf234013a4d49eef35', 'kozekgilbert@gmail.com', 'JaimeKnight', 1, 3, 3, 3, 'Id Ante Dictum Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (713, 'sloane', '4dd1a2fa494fa3b250a8474f6d07e979', 'kozekgilbert@gmail.com', 'SloaneBooker', 1, 3, 3, 3, 'Faucibus Orci Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (714, 'salvador', 'f7105c9bed76e8d130e292992682fecf', 'kozekgilbert@gmail.com', 'SalvadorHerman', 1, 3, 3, 3, 'Porttitor Eros Nec LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (715, 'genevieve', '980d0c20d740c2e3e1bfc302d5d2cf62', 'kozekgilbert@gmail.com', 'GenevieveRhodes', 1, 3, 3, 3, 'Maecenas Iaculis Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (716, 'laith', '9fccfc1c0e3a72d581d3a84e3fc4ac93', 'kozekgilbert@gmail.com', 'LaithJuarez', 1, 3, 3, 3, 'Rutrum Magna PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (717, 'risa', '82a72d7fd5960f166ae12e80c01a097a', 'kozekgilbert@gmail.com', 'RisaWinters', 1, 3, 3, 3, 'Quisque Varius Nam Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (718, 'cadman', '41b83b02b89f3ec4c987418bf879dcf5', 'kozekgilbert@gmail.com', 'CadmanPorter', 1, 3, 3, 3, 'Nullam Scelerisque Neque Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (719, 'kai', 'd4d35b923fc64129384dc0b94c25b526', 'kozekgilbert@gmail.com', 'KaiPugh', 1, 3, 3, 3, 'Leo LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (720, 'dai', '2a0d288aec1cfe61dadec1dc2fb30125', 'kozekgilbert@gmail.com', 'DaiLancaster', 1, 3, 3, 3, 'Amet Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (721, 'edan', '3b4ead3b65478c46520169a2daf4cbd8', 'kozekgilbert@gmail.com', 'EdanFranco', 1, 3, 3, 3, 'Tempus Non Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (722, 'nelle', 'e131385dbcbc09c2e20f71e7aa50c1a2', 'kozekgilbert@gmail.com', 'NelleBurch', 1, 3, 3, 3, 'Pede LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (723, 'mason', '00d275da256f4bb382d0845d1ae9ad24', 'kozekgilbert@gmail.com', 'MasonMaxwell', 1, 3, 3, 3, 'Lectus Cum Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (724, 'keane', '2885bef9b3a5698233dd4b3c2a056c8b', 'kozekgilbert@gmail.com', 'KeaneFreeman', 1, 3, 3, 3, 'Dapibus Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (725, 'allistair', '38df452fb5e6dcabf47c9466f5376a8c', 'kozekgilbert@gmail.com', 'AllistairKnox', 1, 3, 3, 3, 'Dolor Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (726, 'mariam', '2ddbede25e4b8f2b667c2dda5cf208a7', 'kozekgilbert@gmail.com', 'MariamCombs', 1, 3, 3, 3, 'Orci Luctus Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (727, 'maia', '49d52b00ca3403bf7673141a7eff319f', 'kozekgilbert@gmail.com', 'MaiaAllen', 1, 3, 3, 3, 'At Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (728, 'hayden', '1bd7aa1581a493eec089a79d1f367f9f', 'kozekgilbert@gmail.com', 'HaydenColon', 1, 3, 3, 3, 'Sit Amet LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (729, 'ashton', '5fd6d89bfd638bf912bd178b55e7bf21', 'kozekgilbert@gmail.com', 'AshtonLyons', 1, 3, 3, 3, 'Odio Phasellus At Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (730, 'alec', '6fa27849c368a7b0bae78d4b9be6db06', 'kozekgilbert@gmail.com', 'AlecCarrillo', 1, 3, 3, 3, 'Dapibus Quam PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (731, 'inga', '6577db491dd17cfd17303b1820f35220', 'kozekgilbert@gmail.com', 'IngaRush', 1, 3, 3, 3, 'Phasellus Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (732, 'phelan', 'a32be6990bf1bc2ddd8e65a672b10342', 'kozekgilbert@gmail.com', 'PhelanBenjamin', 1, 3, 3, 3, 'Vulputate Posuere Vulputate Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (733, 'julian', '6a18116dc7e7b609684a4340b6ac2ea6', 'kozekgilbert@gmail.com', 'JulianJensen', 1, 3, 3, 3, 'Sed Auctor Odio Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (734, 'wang', '3afd5b9c856a8bad90c17b32e735e60b', 'kozekgilbert@gmail.com', 'WangMarquez', 1, 3, 3, 3, 'Tincidunt Aliquam Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (735, 'amery', '8f755c7d0357bcd54b312955b2067d63', 'kozekgilbert@gmail.com', 'AmeryClemons', 1, 3, 3, 3, 'Metus Sit Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (736, 'beverly', '486aa85922c824b26b2f29a8e712f930', 'kozekgilbert@gmail.com', 'BeverlyBush', 1, 3, 3, 3, 'At Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (737, 'bertha', 'bf235738ee8a1b2bdbb2087bb048ceab', 'kozekgilbert@gmail.com', 'BerthaMerritt', 1, 3, 3, 3, 'Sem Ut Cursus LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (738, 'kimberley', '1983501dba0e92802fa1fc9a5ea0fce6', 'kozekgilbert@gmail.com', 'KimberleyBarnett', 1, 3, 3, 3, 'Lobortis Risus In Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (739, 'kyra', '5b7fde0bb33ea5cf99221939f44791be', 'kozekgilbert@gmail.com', 'KyraWhitley', 1, 3, 3, 3, 'Elit Pellentesque LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (740, 'reagan', 'c8d1da7cdfe3a8d63dea7257ffad90a0', 'kozekgilbert@gmail.com', 'ReaganDecker', 1, 3, 3, 3, 'Semper Tellus Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (741, 'michael', '56cf01f6edfe9598b5e23407fe290990', 'kozekgilbert@gmail.com', 'MichaelBerry', 1, 3, 3, 3, 'Mattis Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (742, 'ezekiel', 'cc021229a62e87ace37a27643993b065', 'kozekgilbert@gmail.com', 'EzekielKeller', 1, 3, 3, 3, 'Dis Parturient Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (743, 'desirae', '0e67a3532706fbaf59f5b18fa2b4fb6b', 'kozekgilbert@gmail.com', 'DesiraeWarner', 1, 3, 3, 3, 'Sagittis Augue Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (744, 'haviva', '7f37bad9412db25f870b3531aa88a0fe', 'kozekgilbert@gmail.com', 'HavivaPadilla', 1, 3, 3, 3, 'Erat Vitae PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (745, 'uriah', '8a8613a618692c316d65c26b71c77a23', 'kozekgilbert@gmail.com', 'UriahWarner', 1, 3, 3, 3, 'Sed Malesuada Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (746, 'willa', 'c77cfaa4babc00482a2500ed2ced9e12', 'kozekgilbert@gmail.com', 'WillaThornton', 1, 3, 3, 3, 'Duis Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (747, 'wilma', 'dbcceeb073fa55610361de03342c20a7', 'kozekgilbert@gmail.com', 'WilmaRoth', 1, 3, 3, 3, 'Mauris LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (748, 'bianca', '75431b2a50feb897afcc8234bc4d5a22', 'kozekgilbert@gmail.com', 'BiancaBarr', 1, 3, 3, 3, 'Mattis Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (749, 'ora', '3cf18b3a4e2234008d78134656cf7ad9', 'kozekgilbert@gmail.com', 'OraBoyd', 1, 3, 3, 3, 'In Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (750, 'shellie', '0c8a2e2b7abf6181853434eacbc8b25e', 'kozekgilbert@gmail.com', 'ShellieCharles', 1, 3, 3, 3, 'Metus Aenean Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (751, 'zephr', 'ce255c89bb89feedbded559047151e4f', 'kozekgilbert@gmail.com', 'ZephrKnox', 1, 3, 3, 3, 'Aliquet Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (752, 'aladdin', '5f6beda971b572d5d86c9a2a33b7ceb3', 'kozekgilbert@gmail.com', 'AladdinGross', 1, 3, 3, 3, 'Risus Varius Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (753, 'jacob', '2d0e88a0c91399493596004c796ca5b4', 'kozekgilbert@gmail.com', 'JacobWatts', 1, 3, 3, 3, 'Gravida Sit Amet LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (754, 'tatiana', '89afd5b5e901d81c257ec2c0706ae8e8', 'kozekgilbert@gmail.com', 'TatianaDickerson', 1, 3, 3, 3, 'Auctor Mauris LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (755, 'kenyon', 'b0cc2022ef895e48bfc21a1908b6498d', 'kozekgilbert@gmail.com', 'KenyonDurham', 1, 3, 3, 3, 'Vitae Aliquet Nec Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (756, 'neve', 'ce03c6212fd48da31d480b64ba26bd95', 'kozekgilbert@gmail.com', 'NeveHester', 1, 3, 3, 3, 'Erat Semper Rutrum Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (757, 'carson', 'ae6c10911d8b192ad42076971866414f', 'kozekgilbert@gmail.com', 'CarsonBates', 1, 3, 3, 3, 'Quam Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (758, 'wang', '3afd5b9c856a8bad90c17b32e735e60b', 'kozekgilbert@gmail.com', 'WangMoody', 1, 3, 3, 3, 'Quis Accumsan Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (759, 'aspen', '618f349781b4aa584055c29bffb1b00c', 'kozekgilbert@gmail.com', 'AspenMichael', 1, 3, 3, 3, 'Mus Proin Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (760, 'philip', '7a648ff16e11a54bd706a64ddfef0c55', 'kozekgilbert@gmail.com', 'PhilipHansen', 1, 3, 3, 3, 'Lectus Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (761, 'amery', '8f755c7d0357bcd54b312955b2067d63', 'kozekgilbert@gmail.com', 'AmeryBarron', 1, 3, 3, 3, 'Fringilla Est Mauris Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (762, 'ciara', 'e0582c9550d98066f0a56c2d68e2985e', 'kozekgilbert@gmail.com', 'CiaraButler', 1, 3, 3, 3, 'Urna Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (763, 'alden', 'e03a946d0348e42a7db6357d9eb71329', 'kozekgilbert@gmail.com', 'AldenCase', 1, 3, 3, 3, 'Vitae Purus Gravida PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (764, 'oleg', '3979f0b2d9a1c375552b6ea71057367a', 'kozekgilbert@gmail.com', 'OlegBaird', 1, 3, 3, 3, 'Cubilia Curae; Donec Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (765, 'brady', '401482b3994206501c5d200dd650bf3b', 'kozekgilbert@gmail.com', 'BradyGallegos', 1, 3, 3, 3, 'Magna Cras Convallis Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (766, 'autumn', 'a75ed71fb515e6ba0939e236c9d5408c', 'kozekgilbert@gmail.com', 'AutumnOsborne', 1, 3, 3, 3, 'Ut Pharetra Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (767, 'zeus', '35ff46383514b2cacde92333f7134e06', 'kozekgilbert@gmail.com', 'ZeusFranklin', 1, 3, 3, 3, 'At Auctor Ullamcorper Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (768, 'ariana', '7d1985b5f431fed327c188510e94b251', 'kozekgilbert@gmail.com', 'ArianaMadden', 1, 3, 3, 3, 'Dictum Cursus Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (769, 'lionel', 'a9503c3f1633dc41946d91ceb6f2b1f9', 'kozekgilbert@gmail.com', 'LionelClarke', 1, 3, 3, 3, 'Nulla Tempor Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (770, 'noel', '7480d0e3df5b83e3685b97cd19088c52', 'kozekgilbert@gmail.com', 'NoelStokes', 1, 3, 3, 3, 'Aliquet Diam Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (771, 'christine', '0a97035b30741432de8dc62cf713328c', 'kozekgilbert@gmail.com', 'ChristineKnapp', 1, 3, 3, 3, 'Pharetra Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (772, 'jena', '814d1538c7f4164758200ab9a77b97eb', 'kozekgilbert@gmail.com', 'JenaBailey', 1, 3, 3, 3, 'In Felis Nulla PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (773, 'kelsey', '7444f013baf30cc8a3158ad1bfe5acd7', 'kozekgilbert@gmail.com', 'KelseyMclean', 1, 3, 3, 3, 'Nunc Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (774, 'willa', 'c77cfaa4babc00482a2500ed2ced9e12', 'kozekgilbert@gmail.com', 'WillaKelley', 1, 3, 3, 3, 'Quam Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (775, 'tate', '04d16a7b32b5d07ea66760be3eb73739', 'kozekgilbert@gmail.com', 'TateMiles', 1, 3, 3, 3, 'Nam Porttitor Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (776, 'latifah', '0ac2d5074b75008eadb87103013989c1', 'kozekgilbert@gmail.com', 'LatifahFuller', 1, 3, 3, 3, 'Phasellus Dolor LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (777, 'zahir', 'f98c1616249c310326c6ea0a32a63c03', 'kozekgilbert@gmail.com', 'ZahirLittle', 1, 3, 3, 3, 'Hymenaeos Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (778, 'cruz', '427116a4b66325eb412532d62b52b590', 'kozekgilbert@gmail.com', 'CruzHampton', 1, 3, 3, 3, 'Curabitur Ut Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (779, 'emily', '29e1448ae02b6fd112fcf3618e1be9f5', 'kozekgilbert@gmail.com', 'EmilyWitt', 1, 3, 3, 3, 'Maecenas Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (780, 'vincent', '52fee26031644aacd7c23ade329939f0', 'kozekgilbert@gmail.com', 'VincentByrd', 1, 3, 3, 3, 'Nunc Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (781, 'sage', '72a57331bb658aaaa6541d0988edb7d2', 'kozekgilbert@gmail.com', 'SageConway', 1, 3, 3, 3, 'Natoque Penatibus Et Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (782, 'lucian', '0098de6bda1c380b3c42c30fffaac572', 'kozekgilbert@gmail.com', 'LucianCash', 1, 3, 3, 3, 'Tempor Bibendum Donec Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (783, 'thor', '3d5aec7ae189a9ba64624ac7e64a375a', 'kozekgilbert@gmail.com', 'ThorHill', 1, 3, 3, 3, 'Amet Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (784, 'kylee', '9a8dbff37262477f08b5d7f26d3e0b7a', 'kozekgilbert@gmail.com', 'KyleeRios', 1, 3, 3, 3, 'Netus Et Malesuada Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (785, 'kim', '98467a817e2ff8c8377c1bf085da7138', 'kozekgilbert@gmail.com', 'KimBradley', 1, 3, 3, 3, 'Ante Blandit Viverra Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (786, 'christian', '7a519571b67279d9e76688779719cbcb', 'kozekgilbert@gmail.com', 'ChristianTodd', 1, 3, 3, 3, 'Sit Amet PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (787, 'todd', 'd49bb2818ae325506717a39a402ee671', 'kozekgilbert@gmail.com', 'ToddMcgowan', 1, 3, 3, 3, 'Cum Sociis Natoque Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (788, 'athena', 'c90a7fbf37fd6c7a213ed9cfdcb330ee', 'kozekgilbert@gmail.com', 'AthenaClarke', 1, 3, 3, 3, 'Dui Augue Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (789, 'orlando', '9ddd79f1c8391d68448628bc50ee3034', 'kozekgilbert@gmail.com', 'OrlandoGray', 1, 3, 3, 3, 'Ornare Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (790, 'jonas', '4606f680f2405ac8d26aacf297884184', 'kozekgilbert@gmail.com', 'JonasMathews', 1, 3, 3, 3, 'Ullamcorper Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (791, 'leroy', '0283b7da92a789c52bbe0add046e3c86', 'kozekgilbert@gmail.com', 'LeroyAguirre', 1, 3, 3, 3, 'Amet Ornare Lectus Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (792, 'jade', 'e4245c55cca03ed92731c4e29fca20cc', 'kozekgilbert@gmail.com', 'JadeBernard', 1, 3, 3, 3, 'Erat Volutpat Nulla Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (793, 'wang', '3afd5b9c856a8bad90c17b32e735e60b', 'kozekgilbert@gmail.com', 'WangDalton', 1, 3, 3, 3, 'Sed Auctor LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (794, 'walker', '2ff5d777b3b696a39baf4bbf1e7ca41a', 'kozekgilbert@gmail.com', 'WalkerEllison', 1, 3, 3, 3, 'Mattis Semper Dui Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (795, 'alfreda', '70130e44aec764c049190da6c2d7b592', 'kozekgilbert@gmail.com', 'AlfredaLang', 1, 3, 3, 3, 'Eu Neque Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (796, 'zahir', 'f98c1616249c310326c6ea0a32a63c03', 'kozekgilbert@gmail.com', 'ZahirMadden', 1, 3, 3, 3, 'Vel Turpis Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (797, 'giacomo', '18be77dddfc492a77028fc0fb3575459', 'kozekgilbert@gmail.com', 'GiacomoCallahan', 1, 3, 3, 3, 'Ut Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (798, 'desiree', 'c4d4cad85818c4443c246e8890faa84c', 'kozekgilbert@gmail.com', 'DesireeMullins', 1, 3, 3, 3, 'Feugiat Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (799, 'stephen', '5615c86287c45c7e3a570df465376e3b', 'kozekgilbert@gmail.com', 'StephenIrwin', 1, 3, 3, 3, 'Erat Vivamus Nisi Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (800, 'erica', '0c720a14cbd1d0d40b51dd3b55305dac', 'kozekgilbert@gmail.com', 'EricaGlenn', 1, 3, 3, 3, 'Lacus Ut Nec Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (801, 'daniel', 'b5ea8985533defbf1d08d5ed2ac8fe9b', 'kozekgilbert@gmail.com', 'DanielPayne', 1, 3, 3, 3, 'Erat Volutpat Nulla Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (802, 'bradley', '5307a4f03b188a813a6d4afe12041e92', 'kozekgilbert@gmail.com', 'BradleyEngland', 1, 3, 3, 3, 'Lobortis LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (803, 'bradley', '5307a4f03b188a813a6d4afe12041e92', 'kozekgilbert@gmail.com', 'BradleyCampos', 1, 3, 3, 3, 'Nec Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (804, 'hadassah', '00f2ccd9621cf270bf8c30773f355c8d', 'kozekgilbert@gmail.com', 'HadassahBest', 1, 3, 3, 3, 'Turpis Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (805, 'blossom', '762683efd1ddfdb0ffc9d47d7fb0cde6', 'kozekgilbert@gmail.com', 'BlossomKane', 1, 3, 3, 3, 'Nisi Sem Semper Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (806, 'logan', 'f6c146785be837fd3ca526be257f211f', 'kozekgilbert@gmail.com', 'LoganBeasley', 1, 3, 3, 3, 'Lectus Cum Sociis Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (807, 'ebony', 'cf21f3b8dc6bcd8613c608723a6981bf', 'kozekgilbert@gmail.com', 'EbonyBanks', 1, 3, 3, 3, 'Enim Condimentum Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (808, 'darius', 'b5413026b62a2c0a7664c4c975d336eb', 'kozekgilbert@gmail.com', 'DariusVaughn', 1, 3, 3, 3, 'In Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (809, 'brian', '929064f2a141f812f1c2efb3ff8194ca', 'kozekgilbert@gmail.com', 'BrianWitt', 1, 3, 3, 3, 'Rutrum Eu Ultrices Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (810, 'adara', 'ff61ceb24abacb6f7c5a4bb6e90b78b0', 'kozekgilbert@gmail.com', 'AdaraMarshall', 1, 3, 3, 3, 'Ultrices Iaculis Odio Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (811, 'ashely', '2576d033866d59d7af22f04fa66d29b2', 'kozekgilbert@gmail.com', 'AshelyLewis', 1, 3, 3, 3, 'Ullamcorper Eu PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (812, 'jameson', '58185db7252e44f15a2bd6b732e95694', 'kozekgilbert@gmail.com', 'JamesonHampton', 1, 3, 3, 3, 'Orci Donec Nibh Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (813, 'allen', '432a44ddc0aa72ed8c200f53b6268af4', 'kozekgilbert@gmail.com', 'AllenElliott', 1, 3, 3, 3, 'Ante Vivamus Non Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (814, 'callum', '431808aeeae851c8bd456e6c6461d48b', 'kozekgilbert@gmail.com', 'CallumRice', 1, 3, 3, 3, 'Rutrum Eu Ultrices Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (815, 'inga', '6577db491dd17cfd17303b1820f35220', 'kozekgilbert@gmail.com', 'IngaCastro', 1, 3, 3, 3, 'Arcu Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (816, 'audra', '046b1b4477093395823e3583ec0926d1', 'kozekgilbert@gmail.com', 'AudraDuncan', 1, 3, 3, 3, 'A Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (817, 'keelie', '8e02af34ef9c9feecbf6a4af37df9b16', 'kozekgilbert@gmail.com', 'KeelieDejesus', 1, 3, 3, 3, 'Sed Auctor Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (818, 'emma', '1f050242921954f2c734eec74ce2ecb6', 'kozekgilbert@gmail.com', 'EmmaHopkins', 1, 3, 3, 3, 'Feugiat Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (819, 'adara', 'ff61ceb24abacb6f7c5a4bb6e90b78b0', 'kozekgilbert@gmail.com', 'AdaraFlores', 1, 3, 3, 3, 'Ultrices Posuere Cubilia Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (820, 'travis', '4546945ddcff675c00b91e685ad7262f', 'kozekgilbert@gmail.com', 'TravisPratt', 1, 3, 3, 3, 'Augue Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (821, 'ryan', 'bd410624ee16dc9e3e23bc68700c43ab', 'kozekgilbert@gmail.com', 'RyanBarrett', 1, 3, 3, 3, 'Cras Dolor Dolor Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (822, 'kaitlin', '7845621100978d4455e112c6170ff66d', 'kozekgilbert@gmail.com', 'KaitlinRose', 1, 3, 3, 3, 'Faucibus Orci Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (823, 'melissa', '89cb42c1fe0ee96951e44b5e36370e4d', 'kozekgilbert@gmail.com', 'MelissaRamirez', 1, 3, 3, 3, 'Ligula Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (824, 'uriel', 'a4a34ae958023b456394fee15e3b1e3c', 'kozekgilbert@gmail.com', 'UrielMelton', 1, 3, 3, 3, 'Metus In Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (825, 'martin', '34f74c049edea51851c6924f4a386762', 'kozekgilbert@gmail.com', 'MartinStrickland', 1, 3, 3, 3, 'Aliquam PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (826, 'jada', 'c1fce5fb924b683c7c95683203730764', 'kozekgilbert@gmail.com', 'JadaPark', 1, 3, 3, 3, 'Cras Eu Tellus Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (827, 'reese', 'c4fa4b41c7feab7b59eb6f95b2fef063', 'kozekgilbert@gmail.com', 'ReeseSantos', 1, 3, 3, 3, 'Malesuada Malesuada Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (828, 'nathan', '9db74df32b6cc2ac52be584bf279972b', 'kozekgilbert@gmail.com', 'NathanGreen', 1, 3, 3, 3, 'Eros Non Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (829, 'rosalyn', '39d254e133a8c276f7e1ec29122fbcd5', 'kozekgilbert@gmail.com', 'RosalynTownsend', 1, 3, 3, 3, 'A Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (830, 'carissa', 'd4f2971a9a17c8015f7ae7fbf0d96731', 'kozekgilbert@gmail.com', 'CarissaBriggs', 1, 3, 3, 3, 'Ipsum Dolor Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (831, 'louis', 'e8a648d12f20bd03c38f27d425f20664', 'kozekgilbert@gmail.com', 'LouisNolan', 1, 3, 3, 3, 'Tincidunt Nibh Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (832, 'peter', 'e3e7f312a36e128c29a42352bb4ff8d7', 'kozekgilbert@gmail.com', 'PeterStone', 1, 3, 3, 3, 'Sed Molestie LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (833, 'medge', '298651e845a5ce521d88b0c359ca8f3b', 'kozekgilbert@gmail.com', 'MedgeMiller', 1, 3, 3, 3, 'Rutrum Justo Praesent LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (834, 'gannon', '481d1af3972a0ed0e96ed2a585a974dc', 'kozekgilbert@gmail.com', 'GannonChaney', 1, 3, 3, 3, 'Et Netus Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (835, 'hiram', '749ef95d0054b073d1438f2d8afa291e', 'kozekgilbert@gmail.com', 'HiramFreeman', 1, 3, 3, 3, 'Phasellus PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (836, 'roanna', 'f0e56bcf9621d01326392924af46ef42', 'kozekgilbert@gmail.com', 'RoannaAlston', 1, 3, 3, 3, 'Venenatis Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (837, 'tiger', 'c80cc0537e6c13e09a296dd19594aea0', 'kozekgilbert@gmail.com', 'TigerRobles', 1, 3, 3, 3, 'Nulla Integer Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (838, 'andrew', '47fab60bdcd2ffce91447d19fe9ce7f1', 'kozekgilbert@gmail.com', 'AndrewWalls', 1, 3, 3, 3, 'A PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (839, 'kermit', '7cf35828cc0b743df26db57f9ccaf81f', 'kozekgilbert@gmail.com', 'KermitPeters', 1, 3, 3, 3, 'Mauris Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (840, 'britanni', '826cbcbd00a6c2fc04ec49833aef137d', 'kozekgilbert@gmail.com', 'BritanniSimmons', 1, 3, 3, 3, 'Quisque Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (841, 'candice', '918e3d944813f3a822ef9cd51002cde4', 'kozekgilbert@gmail.com', 'CandiceHarrington', 1, 3, 3, 3, 'Eu LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (842, 'steven', 'a36574edb703c814e3ad78273983d3e2', 'kozekgilbert@gmail.com', 'StevenArmstrong', 1, 3, 3, 3, 'Montes Nascetur Ridiculus Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (843, 'marcia', '3c6045d8fba20dcba9d3c82c6d843884', 'kozekgilbert@gmail.com', 'MarciaIngram', 1, 3, 3, 3, 'Mi Enim LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (844, 'adrienne', 'adbde2d57b0b1226ea3932b5816ead4e', 'kozekgilbert@gmail.com', 'AdrienneThornton', 1, 3, 3, 3, 'Nec Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (845, 'dolan', '167ad18854658a28a1c250096552d3b4', 'kozekgilbert@gmail.com', 'DolanMcmillan', 1, 3, 3, 3, 'Ultrices Mauris Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (846, 'melinda', 'cf220e8e8e93ee215603cc2778dc7140', 'kozekgilbert@gmail.com', 'MelindaRatliff', 1, 3, 3, 3, 'Adipiscing Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (847, 'giselle', '7f4a066071fd3c153f52ea07a71005e9', 'kozekgilbert@gmail.com', 'GiselleOdom', 1, 3, 3, 3, 'Est Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (848, 'charles', '0d42ea2b999f0fcbcdb68cc0cfaf0708', 'kozekgilbert@gmail.com', 'CharlesOsborne', 1, 3, 3, 3, 'Ligula Aliquam Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (849, 'colorado', 'e7cdda34d7c48e0de14f562e332f2f2a', 'kozekgilbert@gmail.com', 'ColoradoFrancis', 1, 3, 3, 3, 'Risus Donec Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (850, 'tashya', '907ce97215628ba4339d12e8ba05d8f0', 'kozekgilbert@gmail.com', 'TaShyaBaxter', 1, 3, 3, 3, 'Vitae Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (851, 'xaviera', 'bc0a4408a8e86046ff59c3ef0742df09', 'kozekgilbert@gmail.com', 'XavieraKeith', 1, 3, 3, 3, 'Donec Luctus Aliquet Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (852, 'garth', '8f1582da5fd04f985213a5551237e0cd', 'kozekgilbert@gmail.com', 'GarthGutierrez', 1, 3, 3, 3, 'Mauris Rhoncus Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (853, 'kimberley', '1983501dba0e92802fa1fc9a5ea0fce6', 'kozekgilbert@gmail.com', 'KimberleyRoth', 1, 3, 3, 3, 'Vitae Orci Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (854, 'amos', 'f7f6f8dc79daea2e0bdfdb757b78424b', 'kozekgilbert@gmail.com', 'AmosWarren', 1, 3, 3, 3, 'Malesuada Augue Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (855, 'mariko', '653423db896cfaaa68c71ab15c8ec4cd', 'kozekgilbert@gmail.com', 'MarikoLewis', 1, 3, 3, 3, 'Auctor Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (856, 'alea', 'a8041868114b28577078cdf5de282fcf', 'kozekgilbert@gmail.com', 'AleaKelly', 1, 3, 3, 3, 'Neque Morbi Quis Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (857, 'veda', 'f8d2543da1a0982ed30c53928c32c933', 'kozekgilbert@gmail.com', 'VedaReese', 1, 3, 3, 3, 'Vehicula Aliquet Libero Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (858, 'bianca', '75431b2a50feb897afcc8234bc4d5a22', 'kozekgilbert@gmail.com', 'BiancaCarroll', 1, 3, 3, 3, 'Fringilla Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (859, 'sylvester', '97fada5d0f9b4f9f7826eed5a7790ff1', 'kozekgilbert@gmail.com', 'SylvesterGillespie', 1, 3, 3, 3, 'Lacus Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (860, 'claire', '4ebe6b84b5451c6b3956ef4bd3146151', 'kozekgilbert@gmail.com', 'ClaireLeon', 1, 3, 3, 3, 'Nascetur Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (861, 'shelby', '11f5173fea849f21381ba15b927b548e', 'kozekgilbert@gmail.com', 'ShelbyRowland', 1, 3, 3, 3, 'Ut Pellentesque Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (862, 'nasim', '436db2a09acb85ef30ea4fc6d25431c1', 'kozekgilbert@gmail.com', 'NasimRollins', 1, 3, 3, 3, 'Magnis Dis Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (863, 'halee', '6f24a497629be0d12dbf0d90d5329fef', 'kozekgilbert@gmail.com', 'HaleeZamora', 1, 3, 3, 3, 'Sodales Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (864, 'yuri', '0517dd1e00b72285d3b203221fbdbc49', 'kozekgilbert@gmail.com', 'YuriNieves', 1, 3, 3, 3, 'Leo Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (865, 'leigh', '7de3a3a67bca3a033af85e5ec0c6773a', 'kozekgilbert@gmail.com', 'LeighFry', 1, 3, 3, 3, 'Ridiculus Mus Donec Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (866, 'gail', '2c2f8a946feb8c3bba6cedd8b2b65a92', 'kozekgilbert@gmail.com', 'GailCameron', 1, 3, 3, 3, 'Non Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (867, 'magee', '42f7c0bce0d23410a0ae140909d583c8', 'kozekgilbert@gmail.com', 'MageeMcneil', 1, 3, 3, 3, 'Bibendum Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (868, 'davis', 'cbcabfb0d537e84f882f2a36847ab73a', 'kozekgilbert@gmail.com', 'DavisFuller', 1, 3, 3, 3, 'Magna Nec Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (869, 'sage', '72a57331bb658aaaa6541d0988edb7d2', 'kozekgilbert@gmail.com', 'SageShields', 1, 3, 3, 3, 'Et Magnis Dis LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (870, 'fiona', '3308b3a95bb633da5c0c578a607dfaff', 'kozekgilbert@gmail.com', 'FionaRatliff', 1, 3, 3, 3, 'Vitae Odio Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (871, 'bertha', 'bf235738ee8a1b2bdbb2087bb048ceab', 'kozekgilbert@gmail.com', 'BerthaPierce', 1, 3, 3, 3, 'Sit Amet Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (872, 'hamish', '521b3f90cef3ea35678b539139ff64ac', 'kozekgilbert@gmail.com', 'HamishClay', 1, 3, 3, 3, 'Risus Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (873, 'karen', '5a4629189a54ce51bd2018227e923bbc', 'kozekgilbert@gmail.com', 'KarenSnider', 1, 3, 3, 3, 'Sit Amet Diam Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (874, 'armando', 'a88d56d75eb71f7e187e73aed94626f6', 'kozekgilbert@gmail.com', 'ArmandoDaugherty', 1, 3, 3, 3, 'Parturient Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (875, 'myra', '83cdb45a388045615f191c1f9e91d3ee', 'kozekgilbert@gmail.com', 'MyraMcneil', 1, 3, 3, 3, 'Proin Vel Corporation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (876, 'basia', 'bf09dbc9f207c7197778a85f01a56c3b', 'kozekgilbert@gmail.com', 'BasiaTerrell', 1, 3, 3, 3, 'Mauris LLP', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (877, 'devin', '210655067935d53e0e3c5bc7a10e988a', 'kozekgilbert@gmail.com', 'DevinBarker', 1, 3, 3, 3, 'Magnis Dis Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (878, 'tamara', 'b4bd15e18040aeed3fea89609b0b1944', 'kozekgilbert@gmail.com', 'TamaraByrd', 1, 3, 3, 3, 'Enim Condimentum Eget Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (879, 'asher', '8c5c34399e5f3f21c15d3e2725f3c04d', 'kozekgilbert@gmail.com', 'AsherBaker', 1, 3, 3, 3, 'Sit Amet Consectetuer Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (880, 'carlos', '9ad48828b0955513f7cf0f7f6510c8f8', 'kozekgilbert@gmail.com', 'CarlosGardner', 1, 3, 3, 3, 'Tincidunt Orci Quis Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (881, 'lance', 'eadd617020b7609888d086c1f380e744', 'kozekgilbert@gmail.com', 'LanceJustice', 1, 3, 3, 3, 'Fringilla Porttitor Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (882, 'rhoda', '2f3896c3674b27a52e26a9da55793ce2', 'kozekgilbert@gmail.com', 'RhodaRiley', 1, 3, 3, 3, 'Leo In Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (883, 'melodie', 'a9909a1f3e99ac06909d96f470c3ab84', 'kozekgilbert@gmail.com', 'MelodieMcmahon', 1, 3, 3, 3, 'Sociis PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (884, 'iona', 'be1cb2d22697e598a19eef9ced9da4c1', 'kozekgilbert@gmail.com', 'IonaBlankenship', 1, 3, 3, 3, 'Ornare Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (885, 'yoshio', '814d744d5d1ec0d2bdfb2c3165de6852', 'kozekgilbert@gmail.com', 'YoshioBates', 1, 3, 3, 3, 'Eget Varius Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (886, 'norman', '5f3cd85febeeefd6c03b6042c19c24bf', 'kozekgilbert@gmail.com', 'NormanRosa', 1, 3, 3, 3, 'Enim Gravida Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (887, 'rigel', 'b3fb0926e1a473ff5debca25b8781361', 'kozekgilbert@gmail.com', 'RigelPierce', 1, 3, 3, 3, 'In Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (888, 'steel', '9b3ee0cb4d7be5f294e8eb38f234ae9f', 'kozekgilbert@gmail.com', 'SteelCooper', 1, 3, 3, 3, 'Molestie Sed Id Limited', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (889, 'myra', '83cdb45a388045615f191c1f9e91d3ee', 'kozekgilbert@gmail.com', 'MyraWaters', 1, 3, 3, 3, 'A Feugiat Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (890, 'cain', 'c11eb5b12aa4e9189492598cd03210cb', 'kozekgilbert@gmail.com', 'CainConrad', 1, 3, 3, 3, 'Netus Et Malesuada Company', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (891, 'otto', 'c9a239ae7dda0da45897a6bce15913bb', 'kozekgilbert@gmail.com', 'OttoGamble', 1, 3, 3, 3, 'Mauris Incorporated', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (892, 'bruno', 'b304f234940a679b3ab3c699f80db849', 'kozekgilbert@gmail.com', 'BrunoLarsen', 1, 3, 3, 3, 'Nisi Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (893, 'emmanuel', '3f5c62798e34136d650f7343cdc2b08c', 'kozekgilbert@gmail.com', 'EmmanuelBoyd', 1, 3, 3, 3, 'Eros Nec Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (894, 'halee', '6f24a497629be0d12dbf0d90d5329fef', 'kozekgilbert@gmail.com', 'HaleeWise', 1, 3, 3, 3, 'Scelerisque Sed PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (895, 'macey', 'eb9c33ff77b727394b85797b8b040e47', 'kozekgilbert@gmail.com', 'MaceyPorter', 1, 3, 3, 3, 'Lorem Auctor Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (896, 'christine', '0a97035b30741432de8dc62cf713328c', 'kozekgilbert@gmail.com', 'ChristineByrd', 1, 3, 3, 3, 'Nec Mollis Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (897, 'sopoline', 'a39a7120a3999f548c87d7b2aeb91850', 'kozekgilbert@gmail.com', 'SopolineHines', 1, 3, 3, 3, 'Eget Varius Ultrices Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (898, 'jin', 'a90a8761632bae26b5517acb73f2ccca', 'kozekgilbert@gmail.com', 'JinBurns', 1, 3, 3, 3, 'Quam Dignissim Pharetra Corp.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (899, 'stewart', 'daf5dc70a0b3799d525ba1959e88f17e', 'kozekgilbert@gmail.com', 'StewartChavez', 1, 3, 3, 3, 'Eget Lacus Consulting', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (900, 'kenneth', '8d86149d97362c08c7448f32d5cb15e6', 'kozekgilbert@gmail.com', 'KennethMacias', 1, 3, 3, 3, 'Proin Dolor Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (901, 'rogan', '15a0dee1fc49997bce7fa2afef82a1fe', 'kozekgilbert@gmail.com', 'RoganCampos', 1, 3, 3, 3, 'Lacus Associates', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (902, 'nell', 'b7474b54355daf3836df34fe2935500e', 'kozekgilbert@gmail.com', 'NellLivingston', 1, 3, 3, 3, 'Diam PC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (903, 'flynn', '5711326aeba736c6f2c5fec0a887809e', 'kozekgilbert@gmail.com', 'FlynnPugh', 1, 3, 3, 3, 'Nec Institute', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (904, 'ainsley', '1cb7770b5d88ceb55853f86597f6a9a2', 'kozekgilbert@gmail.com', 'AinsleyPace', 1, 3, 3, 3, 'Turpis Non Enim LLC', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (905, 'inez', 'fc71522322bcbddb21d8edb165446732', 'kozekgilbert@gmail.com', 'InezStevens', 1, 3, 3, 3, 'Volutpat Nulla Facilisis Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (906, 'walter', 'fd1618b5184243f6941c5c496aff6b42', 'kozekgilbert@gmail.com', 'WalterBuck', 1, 3, 3, 3, 'Nulla Cras Industries', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (907, 'astra', '0b6b94e8f4cf7b2858a71d7782331e23', 'kozekgilbert@gmail.com', 'AstraHolden', 1, 3, 3, 3, 'Iaculis Lacus Ltd', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (908, 'cassidy', 'a713b1461d206a21077a340ba7886f36', 'kozekgilbert@gmail.com', 'CassidyFlores', 1, 3, 3, 3, 'Diam Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (909, 'april', '3f8c1d9e97bbd72e92bceba6de0bec65', 'kozekgilbert@gmail.com', 'AprilGriffith', 1, 3, 3, 3, 'Lacus Pede Foundation', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (910, 'flynn', '5711326aeba736c6f2c5fec0a887809e', 'kozekgilbert@gmail.com', 'FlynnNelson', 1, 3, 3, 3, 'Erat Vel Pede Inc.', 2147483647, NULL, NULL, 'new_register_client', '2022-10-03 09:30:06', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (911, 'xsis', 'b061048af44e2a17d5262d714681c727', 'kozekgilbert@gmail.com', 'RISKA', 1, 3, 3, 3, NULL, NULL, NULL, NULL, 'new_register_client', '2022-11-22 14:37:19', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (917, 'rahmat007', '581b8803b542d21c40a130379d295a46', 'kozekgilbert@gmail.com', '', 0, 2, 2, 2, NULL, NULL, NULL, NULL, 'new_register', '2023-01-24 16:05:33', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (918, 'rahmat07', 'acabf8f24cfff20adea1fdbb7a64614d', 'kozekgilbert@gmail.com', 'RAHMAT TAWAKAL', 0, 2, 2, 2, NULL, NULL, NULL, NULL, 'new_register', '2023-01-24 16:07:28', NULL, NULL);
INSERT INTO `t_mas_userss` VALUES (922, 'reyza', '758f41ec2afef16eebe84deb8351f874', 'fauzidwi28@gmail.com', 'REYZA ALIF UTAMA', 0, 2, 2, 2, NULL, NULL, NULL, NULL, 'new_register', '2023-06-05 11:28:50', NULL, NULL);

-- ----------------------------
-- Table structure for t_trn_applyj
-- ----------------------------
DROP TABLE IF EXISTS `t_trn_applyj`;
CREATE TABLE `t_trn_applyj`  (
  `APP_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `APP_IDJOBS` int(11) NULL DEFAULT NULL,
  `APP_IDPKRJ` int(11) NULL DEFAULT NULL,
  `APP_CVIEWS` tinyint(4) NULL DEFAULT 0,
  `APP_STATUS` tinyint(2) NULL DEFAULT NULL,
  `APP_REASON` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `APP_USRCRT` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `APP_DATCRT` datetime NULL DEFAULT NULL,
  `APP_USRUPD` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `APP_DATUPD` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`APP_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_trn_applyj
-- ----------------------------
INSERT INTO `t_trn_applyj` VALUES (1, 6, 10, 5, 4, 'saya seorang yang teliti, bekerja keras, mau belajar hal baru, disiplin, percaya diri, bertanggung jawab, suka belajar dari kesalahan', 'kiki', '2022-01-27 17:02:45', 'wingsgroup', '2022-10-12 09:49:00');
INSERT INTO `t_trn_applyj` VALUES (2, 1, 18, 0, 1, 'saya mau melamar kerja disini', 'rara', '2022-11-28 17:22:25', NULL, NULL);

-- ----------------------------
-- Table structure for t_trn_joblis
-- ----------------------------
DROP TABLE IF EXISTS `t_trn_joblis`;
CREATE TABLE `t_trn_joblis`  (
  `JOB_IDENTS` int(11) NOT NULL DEFAULT 0,
  `JOB_NOMJOB` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_TITLES` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_COMPNY` int(11) NULL DEFAULT NULL,
  `JOB_LCTION` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_ASPECS` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_DSCRIP` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_RESPON` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_RQSKIL` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_FSILTY` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_SALMIN` int(11) NULL DEFAULT NULL,
  `JOB_SALMAX` int(11) NULL DEFAULT NULL,
  `JOB_EMILCT` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_DRTION` tinyint(2) NULL DEFAULT NULL,
  `JOB_EXPDAT` date NULL DEFAULT NULL,
  `JOB_EXPREQ` tinyint(4) NULL DEFAULT NULL,
  `JOB_VACNCY` tinyint(4) NULL DEFAULT NULL,
  `JOB_STATUS` tinyint(2) NULL DEFAULT NULL,
  `JOB_CVIEWS` tinyint(3) NULL DEFAULT NULL,
  `JOB_USRCRT` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_DATCRT` datetime NULL DEFAULT NULL,
  `JOB_USRUPD` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_DATUPD` datetime NULL DEFAULT NULL,
  `CLI_IDENTS` int(11) NOT NULL DEFAULT 0,
  `CLI_LOGNID` int(11) NULL DEFAULT NULL,
  `CLI_NOMORS` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_NAMESS` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_CONTRY` tinyint(4) NULL DEFAULT NULL,
  `CLI_PROVNC` int(11) NULL DEFAULT NULL,
  `CLI_CITYSS` int(11) NULL DEFAULT NULL,
  `CLI_ADDRES` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_ASPECS` int(11) NULL DEFAULT NULL,
  `CLI_DESCRE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_PHONES` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_VACNCY` tinyint(4) NULL DEFAULT NULL,
  `CLI_FAXNUM` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_CONTAC` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_MOBILE` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_LOGOSS` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_ACTIVE` tinyint(4) NULL DEFAULT NULL,
  `CLI_USRCRT` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_DATCRT` datetime NULL DEFAULT NULL,
  `CLI_USRUPD` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CLI_DATUPD` datetime NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_trn_joblis
-- ----------------------------
INSERT INTO `t_trn_joblis` VALUES (6, 'JOB22-0003', 'Frontend Developer', 4, 'BEKASI', 'KOMPUTER/TEKNOLOGI INFORMASI', 'We’re on a mission to hire the very best and are committed to creating exceptional employee experiences where everyone is respected and has access to equal opportunity. We realize that new ideas can come from everywhere in the organization, and we know th', '<ul class=\'bullets\'><li>You get the agility of a startup and the work/life balance of an established business.</li><li>You will be working on an emerging project defining and implementing the future of content management.</li><li>As we grow, we need to en', '<ul class=\'bullets\'><li>JavaScript</li><li>HTML CSS</li><li>Node.js</li><li>Angular,</li><li>React,</li><li>Git</li></ul>', '<ul class=\'bullets\'><li>Work in an agile team environment, Innovate and identify opportunities.</li><li>Develop efficient solutions that scale for millions of users</li></ul>', 1000000, 3000000, 'contact@genesicit.com', 1, '2021-06-21', NULL, NULL, 1, NULL, '3', '0000-00-00 00:00:00', '2021-06-14 18:48:42', '2021-06-14 21:17:48', 4, 15, 'CLI22-0004', 'PT. CITRA INDAH', 1, 1, 1, 'jl. raya bekasi 22', 2, NULL, '021999886896', NULL, '021679878999', 'IBU SRI HARTATI', '0822341542435', 'ico_pdf.png', 1, 'superadmin', '2022-03-28 17:01:38', 'superadmin', '2022-04-11 12:08:26');
INSERT INTO `t_trn_joblis` VALUES (8, 'JOB22-0003', 'Software Eng - Python/Django/React', 4, 'BEKASI', 'KOMPUTER/TEKNOLOGI INFORMASI', 'Our genetic screens provide actionable information, empowering women and their families to make critical and timely healthcare decisions, whether they\'re thinking about starting a family or evaluating risk for cancer.', '<ul class=\'bullets\'><li>The software you write, above all else, ensures accurate results for patients but also enables us to accomplish this goal at scale.</li><li>Because this task is not a pure software problem our team is inherently interdisciplinary.<', '<ul class=\'bullets\'><li>2+ years of software engineering in industry or academia under your belt as demonstrated by prior experience, GitHub account or personal web page.</li><li>Proficient with a high level language and web framework. We use a Python/Dja', '<ul class=\'bullets\'><li>Working in a collaborative environment with folks from different professional backgrounds.</li></ul>', 1000000, 3000000, 'triontech@gmail.com', 1, '2021-06-17', NULL, NULL, 1, NULL, '5', '0000-00-00 00:00:00', '2021-06-14 19:28:07', '0000-00-00 00:00:00', 4, 15, 'CLI22-0004', 'PT. CITRA INDAH', 1, 1, 1, 'jl. raya bekasi 22', 2, NULL, '021999886896', NULL, '021679878999', 'IBU SRI HARTATI', '0822341542435', 'ico_pdf.png', 1, 'superadmin', '2022-03-28 17:01:38', 'superadmin', '2022-04-11 12:08:26');
INSERT INTO `t_trn_joblis` VALUES (10, 'JOB22-0003', 'Part Time Web Designer', 1, 'BEKASI', 'KOMPUTER/TEKNOLOGI INFORMASI', 'We are looking for a talented Part-Time Web Designer to build, manage, and evolve the design of HastagWeb\'s website. As  HastagWeb’s Web Designer, you will report directly to the Chief Marketing Officer and work closely with our Graphic Designer and other', '<ul class=\'bullets\'><li>Work within the Elementor page builder for WordPress to design and execute for the HashtagWeb\'s website.</li><li>Create landing pages for events and new initiatives, and manage updates to content as needed.</li><li>Support and coll', '<ul class=\'bullets\'><li>Minimum of 3+ years industry experience in a similar role (Experience in a Tech/SaaS environment preferred)</li><li>Understanding of web publishing requirements.</li><li>Strong foundation in UI/UX design principles.</li><li>Strong ', '<ul class=\'bullets\'><li>$85/hr or based on experience.</li><li>An exciting and positive work environment where you are encouraged to develop and thrive</li></ul>', 1000000, 3000000, 'vacancy@hashtagw.com', 2, '2021-06-18', NULL, NULL, 1, NULL, '7', '0000-00-00 00:00:00', '2021-06-14 20:24:53', '0000-00-00 00:00:00', 1, 265, 'CLI22-0001', 'PT. SUMBER BERKAH', 1, 1, 1, 'jl. sumber berkah raya no.16 rt.10 rw.10', 9, NULL, '021888777654', NULL, '021888777655', 'ANDI CANDRA', '0818111122222', 'ico_word.png', 1, 'superadmin', '2022-03-22 14:49:23', 'superadmin', '2022-04-11 12:09:07');
INSERT INTO `t_trn_joblis` VALUES (12, 'JOB22-0003', 'Software Developer', 1, 'BEKASI', 'KOMPUTER/TEKNOLOGI INFORMASI', 'The software developer codes, tests, debugs, documents, and maintains programs utilizing programming languages and an understanding of how data is related across multiple databases, tables, and platforms. This position communicates and collaborates with o', '<ul class=\'bullets\'><li>Makes basic modifications to application programs from detailed specifications.</li><li>Tackles specific tasks, smaller pieces, or routine task which may be associated with a larger-scale IT solution delivery projects.</li><li>Modi', '<ul class=\'bullets\'><li>1 Year or IT, programming, software development, help desk or related experience.</li><li>Basic level technical/professional level knowledge and skills.</li><li>Able to communicate to others when working on application programming.', '<ul class=\'bullets\'><li>Employee resource groups</li><li>Parental Leave</li><li>Internal Resources</li><li>And much more</li></ul>', 1000000, 3000000, 'contact@marcelltech.com', 1, '2021-06-30', NULL, NULL, 1, NULL, '9', '0000-00-00 00:00:00', '2021-06-14 21:42:02', '0000-00-00 00:00:00', 1, 265, 'CLI22-0001', 'PT. SUMBER BERKAH', 1, 1, 1, 'jl. sumber berkah raya no.16 rt.10 rw.10', 9, NULL, '021888777654', NULL, '021888777655', 'ANDI CANDRA', '0818111122222', 'ico_word.png', 1, 'superadmin', '2022-03-22 14:49:23', 'superadmin', '2022-04-11 12:09:07');
INSERT INTO `t_trn_joblis` VALUES (1, 'JOB22-0003', 'Programmer Analyst- C#, VB.NET, SQL', 5, 'Seattle', 'KOMPUTER/TEKNOLOGI INFORMASI', 'Driven by technology-enabled growth and success in business for our clients, we employ unsurpassed methodologies to establish and conquer new realms of global markets. We follow industry’s best business practices and models to deliver deadline-driven, cus', '<ul class=\'bullets\'><li>Programming, debugging, and documenting complex software applications.</li><li>Developing and implementing web-based solutions.</li><li>Providing technical and strategic advice to Manager, Applications Development and other Broadri', '<ul class=\'bullets\'><li>4+ years of experience programming with C#, JavaScript, CSS, and SQL</li><li>B.S. in Computer Science / related field required</li></ul>', '<ul class=\'bullets\'><li>We provide our own working environment with desktop setups.</li></ul>', 1000000, 3000000, 'computerbytes@gmail.com', 1, '2021-06-16', NULL, NULL, 1, NULL, '1', '0000-00-00 00:00:00', '2021-06-11 00:26:26', '2021-06-14 21:16:10', 5, 161, 'CLI22-0005', 'TESTING USER', 1, 1, 1, 'jl. coba dulu aja', 2, NULL, '021789837292', NULL, '021889283749', 'RIO SUHERLAN', '0899479187899', 'excel.png', 1, 'superadmin', '2022-03-29 09:47:00', 'superadmin', '2022-04-11 12:07:53');
INSERT INTO `t_trn_joblis` VALUES (3, 'JOB22-0003', 'Database Administrator', 5, 'Houston', 'KOMPUTER/TEKNOLOGI INFORMASI', 'As part of a team whose mission is to serve state government and to support safe and healthy communities throughout Oregon, you’ll close each day with a sense of purpose inherent to public service. When you become a DOJ team member, you join an agency tha', '<ul class=\'bullets\'><li>Design, implement and maintain database systems to support application and business needs.</li><li>Ensure databases are properly backed up, patched, and upgraded.</li><li>Produce documentation detailing the structure and constructi', '<ul class=\'bullets\'><li>Four (4) years of information systems experience that demonstrate knowledge and experience in, OR the ability to master, .NET development and programming languages and SQL Server database management (SQL Server Management Studio).<', '<ul class=\'bullets\'><li>Salary Range $4,701 - $7,109 per month with additional bonuses.</li><li>Holidays and leave hours.</li></ul>', 1000000, 3000000, 'computerbytes@gmail.com', 1, '2021-06-30', NULL, NULL, 1, NULL, '1', '0000-00-00 00:00:00', '2021-06-02 00:33:41', '2021-06-14 21:02:05', 5, 161, 'CLI22-0005', 'TESTING USER', 1, 1, 1, 'jl. coba dulu aja', 2, NULL, '021789837292', NULL, '021889283749', 'RIO SUHERLAN', '0899479187899', 'excel.png', 1, 'superadmin', '2022-03-29 09:47:00', 'superadmin', '2022-04-11 12:07:53');
INSERT INTO `t_trn_joblis` VALUES (5, 'JOB22-0003', 'iOS Developer', 4, 'Chicago', 'KOMPUTER/TEKNOLOGI INFORMASI', 'We are looking for an experienced iOS developer to join our team. We\'re a mobile design and development firm based in Denver, focused on developing and designing. we usually develop natively but also use Xamarin in occasions it is a fit. On the services s', '<ul class=\'bullets\'><li>Throughout the process, you will work collaboratively with our world-class team of engineers, partner with designers, and coordinate with other teams at Apple including the iOS, macOS, and watchOS teams.</li><li>This position requi', '<ul class=\'bullets\'><li>Having at least 4- 5 years of experience in Objective C and Cocoa Touch platform.</li><li>Having at least 1-2 years of experience in Swift language.</li><li>Experience in Enterprise iOS Applications.</li><li>Must have knowledge and', '<ul class=\'bullets\'><li>Participating in architecture and code reviews</li><li>Building internal tools as needed to help ship high quality software</li><li>Various leaves granted with reasons</li><li>REMOTE and Direct Hire opportunity</li></ul>', 1000000, 3000000, 'contact@intouch.com', 1, '2021-06-29', NULL, NULL, 1, NULL, '3', '0000-00-00 00:00:00', '2021-06-14 16:50:11', '2021-06-14 20:39:03', 4, 15, 'CLI22-0004', 'PT. CITRA INDAH', 1, 1, 1, 'jl. raya bekasi 22', 2, NULL, '021999886896', NULL, '021679878999', 'IBU SRI HARTATI', '0822341542435', 'ico_pdf.png', 1, 'superadmin', '2022-03-28 17:01:38', 'superadmin', '2022-04-11 12:08:26');
INSERT INTO `t_trn_joblis` VALUES (7, 'JOB22-0003', 'Flutter Developer', 4, 'San Diego', 'KOMPUTER/TEKNOLOGI INFORMASI', 'We are looking to hire a Flutter developer to work remotely and be responsible for creating a hybrid applications for both iOS and Android using Google’s Flutter development framework. ', '<ul class=\'bullets\'><li>An individual should have deep experience in managing full-scale production application.</li><li>Must be able to work in business hours.</li><li>Your first interview will be a video call via Zoom or Google Meetings.</li></ul>', '<ul class=\'bullets\'><li>At least 1/2 years of experience in Flutter development.</li><li>Must have built at least 2 Android and/ or iOS applications using Flutter.</li><li>Proven experience in both mobile development and API integration.</li><li>Have expe', '<ul class=\'bullets\'><li>There are numerous plus points which will be explained during your interviews.</li><li>Being a renowned company for the last decade, working with us will help your CV to build even more stronger.</li></ul>', 1000000, 3000000, 'contact@incodebrig.com', 1, '2021-06-29', NULL, NULL, 1, NULL, '4', '0000-00-00 00:00:00', '2021-06-14 19:04:06', '2021-06-14 19:10:32', 4, 15, 'CLI22-0004', 'PT. CITRA INDAH', 1, 1, 1, 'jl. raya bekasi 22', 2, NULL, '021999886896', NULL, '021679878999', 'IBU SRI HARTATI', '0822341542435', 'ico_pdf.png', 1, 'superadmin', '2022-03-28 17:01:38', 'superadmin', '2022-04-11 12:08:26');
INSERT INTO `t_trn_joblis` VALUES (9, 'JOB22-0003', 'Junior Software Engineer', 1, 'Atlanta', 'KOMPUTER/TEKNOLOGI INFORMASI', 'As a Junior Software Engineer on the InScribe team, you will build and enhance the user interface of the InScribe web application. You will play an active role in designing and developing APIs that front-end components leverage, and develop a solid unders', '<ul class=\'bullets\'><li>Reading and writing code, with a focus on writing maintainable code that is easy to understand.</li><li>Collaborating with peers and product teams to define and implement new features.</li><li>Collaboratively define, scope, priorit', '<ul class=\'bullets\'><li>Experience with Go.</li><li>Experience with relational databases.</li><li>Experience with OOP and API design.</li><li>Familiarity with Git.</li><li>High degree of empathy.</li><li>1+ years experience with software development.</li>', '<ul class=\'bullets\'><li>Have a meaningful impact on the company’s future, and share in the rewards accordingly.</li><li>Work quickly and without red tape.</li><li>Work on a product that impacts millions of students.</li><li>Work in a fun, fast-paced, star', 1000000, 3000000, 'cryptical@gmail.com', 1, '2021-06-27', NULL, NULL, 1, NULL, '6', '0000-00-00 00:00:00', '2021-06-14 19:37:30', '0000-00-00 00:00:00', 1, 265, 'CLI22-0001', 'PT. SUMBER BERKAH', 1, 1, 1, 'jl. sumber berkah raya no.16 rt.10 rw.10', 9, NULL, '021888777654', NULL, '021888777655', 'ANDI CANDRA', '0818111122222', 'ico_word.png', 1, 'superadmin', '2022-03-22 14:49:23', 'superadmin', '2022-04-11 12:09:07');
INSERT INTO `t_trn_joblis` VALUES (11, 'JOB22-0003', 'Application Developer', 1, 'Atlanta', 'KOMPUTER/TEKNOLOGI INFORMASI', 'This recruitment is for multiple levels. Based on your qualifications and/or experience you will be assessed and may qualify at the Entry, Journey, or Senior/Specialist level for our Application Development team. If selected, you may be offered at any lev', '<ul class=\'bullets\'><li>In these Application Developer roles, you will have increasing responsibility based on your level of expertise.</li><li>Your technical knowledge and skill will support the Unemployment Tax and Benefits (UTAB) system and related int', '<ul class=\'bullets\'><li>Bachelor\'s Degree in Computer Science or closely related field.</li><li>OR Four (4) years of IT experience with:Service-oriented design and development using C#, VB.Net and SQL.</li><li>Demonstrated testing skills that may include ', '<ul class=\'bullets\'><li>Benefits (insurance, retirement, and related benefits)</li><li>Vacation, Leave, and Holidays</li><li>Special Programs (additional benefits)</li></ul>', 1000000, 3000000, 'astroapps@gmail.com', 1, '2021-06-19', NULL, NULL, 1, NULL, '8', '0000-00-00 00:00:00', '2021-06-14 20:32:05', '0000-00-00 00:00:00', 1, 265, 'CLI22-0001', 'PT. SUMBER BERKAH', 1, 1, 1, 'jl. sumber berkah raya no.16 rt.10 rw.10', 9, NULL, '021888777654', NULL, '021888777655', 'ANDI CANDRA', '0818111122222', 'ico_word.png', 1, 'superadmin', '2022-03-22 14:49:23', 'superadmin', '2022-04-11 12:09:07');
INSERT INTO `t_trn_joblis` VALUES (13, 'JOB22-0003', 'Testing', 1, 'Atlanta', 'SUMBER DAYA MANUSIA/PERSONALIA', 'testing testing', '<ul class=\'bullets\'><li>testing testing</li></ul>', '<ul class=\'bullets\'><li>testing</li></ul>', '<ul class=\'bullets\'><li>testing</li></ul>', 1000000, 3000000, 'barkahtesting@gmail.com', 1, '2022-04-30', NULL, NULL, 1, NULL, '10', '0000-00-00 00:00:00', '2022-03-25 08:21:01', '0000-00-00 00:00:00', 1, 265, 'CLI22-0001', 'PT. SUMBER BERKAH', 1, 1, 1, 'jl. sumber berkah raya no.16 rt.10 rw.10', 9, NULL, '021888777654', NULL, '021888777655', 'ANDI CANDRA', '0818111122222', 'ico_word.png', 1, 'superadmin', '2022-03-22 14:49:23', 'superadmin', '2022-04-11 12:09:07');
INSERT INTO `t_trn_joblis` VALUES (2, 'JOB22-0003', 'SQL Database Administrator', 5, 'BEKASI', 'KOMPUTER/TEKNOLOGI INFORMASI', 'Purpose: The SQL Server Database Administrator role is responsible for providing operational database services to the organization.', '<ul class=\'bullets\'><li>Owning, tracking, and resolving database related incidents and requests.</li><li>Assisting developers in optimizing SQL code and stored procedures to ensure optimal SQL Server performance. Develop SSIS Packages and SSRS Reports.</l', '<ul class=\'bullets\'><li>Associate degree plus 3 years of experience providing end-user technical support preferred; 3+ years working with Microsoft SQL Server.</li><li>Experience or training in Performance Tuning, Query Optimization, using Performance Mon', '<ul class=\'bullets\'><li>Saturdays and Sundays Off.</li><li>We provide working environment including full desktop.</li></ul>', 1000000, 3000000, 'computerbytes@gmail.com', 1, '2021-07-15', NULL, NULL, 1, NULL, '1', '0000-00-00 00:00:00', '2021-05-27 04:29:10', '2021-06-14 21:08:27', 5, 161, 'CLI22-0005', 'TESTING USER', 1, 1, 1, 'jl. coba dulu aja', 2, NULL, '021789837292', NULL, '021889283749', 'RIO SUHERLAN', '0899479187899', 'excel.png', 1, 'superadmin', '2022-03-29 09:47:00', 'superadmin', '2022-04-11 12:07:53');
INSERT INTO `t_trn_joblis` VALUES (4, 'JOB22-0003', 'Sr. Laravel Developer', 4, 'BEKASI', 'KOMPUTER/TEKNOLOGI INFORMASI', 'Looking for those who are extremely passionate about joining as a senior laravel developer.', '<ul class=\'bullets\'><li>Must have an ability to work in as a team</li><li>Must have an ability to achieve a deadline</li><li>Must have an ability to work independently from project start to end</li></ul>', '<ul class=\'bullets\'><li>Sound knowledge of Object-Oriented PHP</li><li>Sound knowledge of Laravel 5.x to 7.x</li><li>Hands-on skill on Laravel concepts (Repository/Seeders/Queues etc)</li><li>Must have an ability to write clean, understandable and testabl', '<ul class=\'bullets\'><li>Flexible work hours.</li><li>We like to party every time a new product/feature is released, typically happens once in two weeks.</li></ul>', 1000000, 3000000, 'bluelightit@gmail.com', 1, '2021-06-21', NULL, NULL, 1, NULL, '2', '0000-00-00 00:00:00', '2021-06-14 00:37:43', '2021-06-14 20:51:23', 4, 15, 'CLI22-0004', 'PT. CITRA INDAH', 1, 1, 1, 'jl. raya bekasi 22', 2, NULL, '021999886896', NULL, '021679878999', 'IBU SRI HARTATI', '0822341542435', 'ico_pdf.png', 1, 'superadmin', '2022-03-28 17:01:38', 'superadmin', '2022-04-11 12:08:26');
INSERT INTO `t_trn_joblis` VALUES (14, 'JOB22-0003', 'SOFTWARE DEVELOPMENT', 1, 'BEKASI', 'KOMPUTER/TEKNOLOGI INFORMASI', 'This recruitment is for multiple levels. Based on your qualifications and/or experience you will be assessed and may qualify at the Entry, Journey, or Senior/Specialist level for our Application Development team. If selected, you may be offered at any lev', '<ul class=\'bullets\'><li>testing testing</li></ul>', 'System Software Development,\r\nMobile Applicationin iOS/Android/Tizen or other platform,\r\nResearch and code , libraries, APIs and frameworks,\r\nStrong knowledge on software development life cycle, dan\r\nStrong problem solving and debugging skills', 'testing', 1000000, 10000000, 'testing@gmail.com', 1, '2022-04-30', NULL, NULL, 1, NULL, 'superadmin', '2022-03-28 10:47:39', 'superadmin', '2022-04-13 17:09:15', 1, 265, 'CLI22-0001', 'PT. SUMBER BERKAH', 1, 1, 1, 'jl. sumber berkah raya no.16 rt.10 rw.10', 9, NULL, '021888777654', NULL, '021888777655', 'ANDI CANDRA', '0818111122222', 'ico_word.png', 1, 'superadmin', '2022-03-22 14:49:23', 'superadmin', '2022-04-11 12:09:07');
INSERT INTO `t_trn_joblis` VALUES (17, 'JOB22-0006', 'ADMIN SALES', 5, 'BEKASI', 'SUMBER DAYA MANUSIA/PERSONALIA', 'melakukan penawaran produk ke customer', '<ul class=\'bullets\'><li>testing testing</li></ul>', '<ul class=\'bullets\'><li>1 Year or IT, programming, software development, help desk or related experience.</li><li>Basic level technical/professional level knowledge and skills.</li><li>Able to communicate to others when working on application programming.', 'bpjs', 2500000, 3500000, 'testing@gmail.com', 1, '2022-04-15', 2, 2, 1, NULL, 'test', '2022-03-29 10:12:59', NULL, NULL, 5, 161, 'CLI22-0005', 'TESTING USER', 1, 1, 1, 'jl. coba dulu aja', 2, NULL, '021789837292', NULL, '021889283749', 'RIO SUHERLAN', '0899479187899', 'excel.png', 1, 'superadmin', '2022-03-29 09:47:00', 'superadmin', '2022-04-11 12:07:53');

-- ----------------------------
-- Table structure for t_trn_jobpos
-- ----------------------------
DROP TABLE IF EXISTS `t_trn_jobpos`;
CREATE TABLE `t_trn_jobpos`  (
  `JOB_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `JOB_NOMJOB` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_TITLES` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_COMPNY` int(11) NULL DEFAULT NULL,
  `JOB_LCTION` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_ASPECS` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_DSCRIP` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `JOB_RESPON` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_RQSKIL` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_FSILTY` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_SALMIN` int(11) NULL DEFAULT NULL,
  `JOB_SALMAX` int(11) NULL DEFAULT NULL,
  `JOB_EMILCT` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_DRTION` tinyint(2) NULL DEFAULT NULL,
  `JOB_EXPDAT` date NULL DEFAULT NULL,
  `JOB_EXPREQ` tinyint(4) NULL DEFAULT NULL,
  `JOB_PSTION` tinyint(2) NULL DEFAULT NULL,
  `JOB_VACNCY` tinyint(4) NULL DEFAULT NULL,
  `JOB_STATUS` tinyint(2) NULL DEFAULT NULL,
  `JOB_CVIEWS` tinyint(3) NULL DEFAULT NULL,
  `JOB_USRCRT` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_DATCRT` datetime NULL DEFAULT NULL,
  `JOB_USRUPD` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `JOB_DATUPD` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`JOB_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_trn_jobpos
-- ----------------------------
INSERT INTO `t_trn_jobpos` VALUES (1, 'JOB22-0001', 'STAFF HR/GA FINANCE', 100, NULL, NULL, 'mengerjakan semua pekerjaan yang berhubungan dengan HR. GA dan Finnance', NULL, '?Kualifikasi :\r\n  - Laki-laki atau Wanita\r\n  - Memiliki pengalaman bekerja di bidang HR/GA Finance selama 2 tahun.\r\n  - Dapat berkomunikasi dengan baik dengan atasan maupun rekan kerja.\r\n  - Pekerja keras dan menyukai tantangan.\r\n  - Mengerti bahasa Jepan', '?Mendapatkan BPJS', 4500000, 5000000, 'kemas-hr@kemas.co.id', 1, '2022-10-31', NULL, 3, 1, 1, NULL, 'kemas', '2022-09-05 09:41:31', 'wingsgroup', '2023-01-04 18:08:26');
INSERT INTO `t_trn_jobpos` VALUES (2, 'JOB22-0002', 'ADMIN SALES', 5, 'Bekasi', 'MANUFAKTUR', '- melakukan perhitungan insentif penjualan produk\r\n- melakukan input target penjualan produk\r\n- membuat laporan penjualan\r\n- membuat rekap retur', NULL, '- biasa menggunakan MS. Word dan Excel\r\n- bisa packing barang\r\n- dapat mengoperasikan komputer dengan baik', 'bpjs kesehatan dan ketenagakerjaan', 4000000, 4500000, 'hr.recruitment@sosro.com', 1, '2022-10-31', NULL, 3, 1, 1, NULL, 'sosro', '2022-09-06 14:24:36', NULL, NULL);
INSERT INTO `t_trn_jobpos` VALUES (3, 'JOB22-0003', 'MARKETING STEEL', 6, 'Bekasi', 'MANUFAKTUR', '- male or female\r\n- bachelor\'s degree from reputable university\r\n- have minimum 2 year experience in teh same field\r\n- have good business networking\r\n- target oriented and can work as a team', NULL, '- target oriented and can work as a team\r\n- have minimum 2 year experience in teh same field', 'bpjs kesehatan dan ketenagakerjaan', 5000000, 6000000, 'hrd_d@alexindo.com', 1, '2022-10-31', NULL, 3, 1, 1, NULL, 'alexindo', '2022-09-06 15:07:25', NULL, NULL);
INSERT INTO `t_trn_jobpos` VALUES (4, 'JOB22-0004', 'OPERATOR PRODUKSI', 7, 'Bekasi', 'MANUFAKTUR', '- menjalankan mesin produksi\r\n- melaporkan hasil pekerjaan\r\n- selalu mengutamakan keselamatan', NULL, '- tidak perlu keahlian khusus\r\n- mau bekerja keras\r\n- teliti', 'bpje kesehatan dan ketenagakerjaan', 4000000, 4200000, 'hr.recruitment@sunrise.com', 1, '2022-10-31', NULL, 3, 1, 1, NULL, 'sunrise', '2022-09-06 16:08:59', NULL, NULL);
INSERT INTO `t_trn_jobpos` VALUES (5, 'JOB22-0005', 'MEDICAL REPRESENTATIVE', 8, 'Jakarta Pusat', 'MANUFAKTUR', '- Diutamakan wanita (Usia Max 25 Tahun)\r\n- belum menikah\r\n- memiliki SIM C dan motor\r\n- Berpengalaman lebih diutamakan\r\n- Berpenampilan menarik dan komunikatif\r\n- Penempatan area Jakarta Barat', NULL, '- Mampu bekerja secara individu maupun tim\r\n- Motivasi kerja tinggi', '- BPJS Kesehatan\r\n- BPJS Ketenagakerjaan\r\n- Uang makan dan transport harian', 4500000, 5500000, 'hrd.rekrut@sdm-mkt.com', 1, '2022-10-31', NULL, 3, 1, 1, NULL, 'sdm', '2022-09-07 09:37:05', 'sdm', '2022-09-23 16:50:14');
INSERT INTO `t_trn_jobpos` VALUES (6, 'JOB22-0006', 'MARKETING SUPPORT STAFF', 100, 'Bekasi', 'MANUFAKTUR', '- S1 anny major (prefer administration background)\r\n- Minimum 1 year experience and familiar with Microsoft Office\r\n- Have a good communication skill, time management, multitasking, pay attention to detail, teamwork\r\n- Highly organized and flexible ability to multitask and meet changing deadline\r\nmake daily, weekly, and monthly sales activity reports\r\n- Communicate directly with clients and encourage trusting relationships\r\n- Good knowledge of market research techniques and databases\r\n- Can work under pressure', NULL, '- Computer skill dan paham SAP\r\n- Presentation skill\r\n- Negotiation skill\r\n- Leadership skill', '- Flexibility\r\n- Friendly culture\r\n- Opportunity to advance\r\n- BPJS Kesehatan dan Ketenagakerjaan', 4500000, 5000000, 'sayapemasutama@wings.com', 1, '2022-10-31', NULL, 3, 1, 1, NULL, 'wingsgroup', '2022-09-23 13:46:59', 'wingsgroup', '2022-09-23 13:46:59');
INSERT INTO `t_trn_jobpos` VALUES (7, 'JOB22-0009', 'OPERATOR PRODUKSI', 100, 'Bekasi', 'MANUFAKTUR', '• Tidak menggunakan kacamata\r\n• Tidak buta warna\r\n• Bersedia bekerja shift\r\n• Bersedia ditempatkan di Cikarang', NULL, '• Memiliki pengalaman 2 tahun di industri manufaktur\r\n• Lulusan SMK Teknik', 'bpjs kesehatan dan ketenagakerjaan', 3500000, 4500000, 'sayapemasutama@wings.com', 1, '2022-10-14', NULL, 3, 5, 1, NULL, 'wingsgroup', '2022-09-30 10:18:27', NULL, NULL);
INSERT INTO `t_trn_jobpos` VALUES (8, 'JOB22-0010', 'STAFF HR/GA FINANCE', 100, 'Bekasi', 'MANUFAKTUR', 'mengerjakan semua pekerjaan yang berhubungan dengan HR. GA dan Finnance', NULL, '?Kualifikasi :\r\n  - Laki-laki atau Wanita\r\n  - Memiliki pengalaman bekerja di bidang HR/GA Finance selama 2 tahun.\r\n  - Dapat berkomunikasi dengan baik dengan atasan maupun rekan kerja.\r\n  - Pekerja keras dan menyukai tantangan.\r\n  - Mengerti bahasa Jepan', '?Mendapatkan BPJS', 4500000, 5000000, 'sayapemasutama@wings.com', 1, '2022-10-31', NULL, 3, 1, 1, NULL, 'wingsgroup', '2022-09-05 09:41:31', '410', '2022-11-24 14:38:45');
INSERT INTO `t_trn_jobpos` VALUES (9, 'JOB22-0011', 'ADMIN SALES', 100, 'Bekasi', 'MANUFAKTUR', '- melakukan perhitungan insentif penjualan produk\r\n- melakukan input target penjualan produk\r\n- membuat laporan penjualan\r\n- membuat rekap retur', NULL, '- biasa menggunakan MS. Word dan Excel\r\n- bisa packing barang\r\n- dapat mengoperasikan komputer dengan baik', 'bpjs kesehatan dan ketenagakerjaan', 4000000, 4500000, 'sayapemasutama@wings.com', 1, '2022-10-31', NULL, 3, 1, 1, NULL, 'wingsgroup', '2022-09-06 14:24:36', NULL, NULL);
INSERT INTO `t_trn_jobpos` VALUES (10, 'JOB22-0012', 'MEDICAL REPRESENTATIVE', 100, 'Bekasi', 'MANUFAKTUR', '- Diutamakan wanita (Usia Max 25 Tahun)\r\n- belum menikah\r\n- memiliki SIM C dan motor\r\n- Berpengalaman lebih diutamakan\r\n- Berpenampilan menarik dan komunikatif\r\n- Penempatan area Jakarta Barat', NULL, '- Mampu bekerja secara individu maupun tim\r\n- Motivasi kerja tinggi', '- BPJS Kesehatan\r\n- BPJS Ketenagakerjaan\r\n- Uang makan dan transport harian', 4500000, 5500000, 'sayapemasutama@wings.com', 1, '2022-10-31', NULL, 3, 1, 1, NULL, 'wingsgroup', '2022-09-07 09:37:05', 'wingsgroup', '2022-09-23 16:50:14');
INSERT INTO `t_trn_jobpos` VALUES (11, 'JOB22-0013', 'MARKETING STEEL', 100, 'Bekasi', 'MANUFAKTUR', '- male or female\r\n- bachelor\'s degree from reputable university\r\n- have minimum 2 year experience in teh same field\r\n- have good business networking\r\n- target oriented and can work as a team', NULL, '- target oriented and can work as a team\r\n- have minimum 2 year experience in teh same field', 'bpjs kesehatan dan ketenagakerjaan', 5000000, 6000000, 'sayapemasutama@wings.com', 1, '2022-10-31', NULL, 3, 1, 1, NULL, 'wingsgroup', '2022-09-06 15:07:25', NULL, NULL);
INSERT INTO `t_trn_jobpos` VALUES (12, 'JOB22-0014', 'STAFF HR/GA FINANCE', 100, 'Bekasi', 'MANUFAKTUR', 'mengerjakan semua pekerjaan yang berhubungan dengan HR. GA dan Finnance', NULL, '# Kualifikasi :\r\n  - Laki-laki atau Wanita\r\n  - Memiliki pengalaman bekerja di bidang HR/GA Finance selama 2 tahun.\r\n  - Dapat berkomunikasi dengan baik dengan atasan maupun rekan kerja.\r\n  - Pekerja keras dan menyukai tantangan.\r\n  - Mengerti bahasa Jepa', '# Mendapatkan BPJS\r\n- BPJS Kesehatan\r\n- BPJS Ketenagakerjaan', 4500000, 5000000, 'sayapemasutama@wings.com', 1, '2022-10-31', NULL, 3, 1, 1, NULL, 'wingsgroup', '2022-10-03 11:24:18', 'wingsgroup', '2022-10-03 11:24:18');
INSERT INTO `t_trn_jobpos` VALUES (13, 'JOB22-0015', 'STAFF HR/GA FINANCE', 100, 'Jakarta Pusat', 'MANUFAKTUR', 'mengerjakan semua pekerjaan yang berhubungan dengan HR. GA dan Finnance', NULL, 'Kualifikasi :\r\n  - Laki-laki atau Wanita\r\n  - Memiliki pengalaman bekerja di bidang HR/GA Finance selama 2 tahun.\r\n  - Dapat berkomunikasi dengan baik dengan atasan maupun rekan kerja.\r\n  - Pekerja keras dan menyukai tantangan.\r\n  - Mengerti bahasa Jepan', '- Mendapatkan BPJS', 4500000, 5000000, 'sayapemasutama@wings.com', 1, '2022-10-31', NULL, 3, 1, 1, NULL, 'wingsgroup', '2022-11-03 11:24:18', 'wingsgroup', '2022-11-10 15:01:16');

-- ----------------------------
-- Table structure for t_trn_rcruit
-- ----------------------------
DROP TABLE IF EXISTS `t_trn_rcruit`;
CREATE TABLE `t_trn_rcruit`  (
  `REC_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `REC_NOMORS` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `REC_JOBPOS` int(11) NULL DEFAULT NULL,
  `REC_TGLREC` date NULL DEFAULT NULL,
  `REC_COMPNY` int(11) NULL DEFAULT NULL,
  `REC_USRCRT` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `REC_DATCRT` datetime NULL DEFAULT NULL,
  `REC_USRUPD` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `REC_DATUPD` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`REC_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_trn_rcruit
-- ----------------------------
INSERT INTO `t_trn_rcruit` VALUES (1, 'REK22-0008', 1, '2022-09-01', 100, 'kemas', '2022-08-26 09:59:31', 'wingsgroup', '2022-11-02 11:19:52');
INSERT INTO `t_trn_rcruit` VALUES (14, 'REK22-0009', 7, '2022-12-12', 100, 'wingsgroup', '2022-11-02 11:31:45', 'wingsgroup', '2022-11-04 15:38:03');

-- ----------------------------
-- Table structure for t_trn_rcruit_detail
-- ----------------------------
DROP TABLE IF EXISTS `t_trn_rcruit_detail`;
CREATE TABLE `t_trn_rcruit_detail`  (
  `REC_IDENTS` int(11) NOT NULL AUTO_INCREMENT,
  `REC_FIDENT` int(11) NULL DEFAULT NULL,
  `REC_PKRJID` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`REC_IDENTS`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 64 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_trn_rcruit_detail
-- ----------------------------
INSERT INTO `t_trn_rcruit_detail` VALUES (49, 1, 10);
INSERT INTO `t_trn_rcruit_detail` VALUES (62, 14, 10);
INSERT INTO `t_trn_rcruit_detail` VALUES (63, 14, 10);

SET FOREIGN_KEY_CHECKS = 1;
