<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-04-06 08:54:51 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-04-06 08:54:52 --> 404 Page Not Found: Resources/css
ERROR - 2022-04-06 08:54:53 --> 404 Page Not Found: Resources/css
ERROR - 2022-04-06 08:54:57 --> 404 Page Not Found: Resources/css
ERROR - 2022-04-06 08:56:25 --> Severity: error --> Exception: Unable to locate the model you have specified: M_sales D:\xampp\htdocs\ji-worker\system\core\Loader.php 344
ERROR - 2022-04-06 08:58:19 --> Query error: Duplicate column name 'REC_IDENTS' - Invalid query: SELECT *
FROM (SELECT a.*, b.*, c.PKR_NAMESS, c.PKR_JNSKLM, c.PKR_EXPRNC, c.PKR_EXPNPT, c.PKR_EXPBDG
FROM `T_TRN_RCRUIT` `a`
INNER JOIN `T_TRN_RCRUIT_DETAIL` `b` ON `a`.`REC_IDENTS` = `b`.`REC_FIDENT`
INNER JOIN `T_MAS_PEKRJA` `c` ON `b`.`REC_PKRJID` = `c`.`PKR_IDENTS`
WHERE `a`.`REC_IDENTS` = '0') a
ORDER BY `c`.`PKR_NAMESS`
 LIMIT 13
ERROR - 2022-04-06 09:02:57 --> Query error: Unknown column 'c.PKR_NAMESS' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.*, c.PKR_NAMESS, c.PKR_JNSKLM, c.PKR_EXPRNC, c.PKR_EXPNPT, c.PKR_EXPBDG
FROM `T_TRN_RCRUIT` `a`
INNER JOIN `T_TRN_RCRUIT_DETAIL` `b` ON `a`.`REC_IDENTS` = `b`.`REC_FIDENT`
INNER JOIN `T_MAS_PEKRJA` `c` ON `b`.`REC_PKRJID` = `c`.`PKR_IDENTS`
WHERE `a`.`REC_IDENTS` = '0') a
ORDER BY `c`.`PKR_NAMESS`
 LIMIT 13
ERROR - 2022-04-06 09:05:15 --> Query error: Unknown column 'a.REC_FIDENT' in 'on clause' - Invalid query: SELECT *
FROM (SELECT b.*, c.PKR_NAMESS, c.PKR_JNSKLM, c.PKR_EXPRNC, c.PKR_EXPNPT, c.PKR_EXPBDG
FROM `T_TRN_RCRUIT` `a`
INNER JOIN `T_TRN_RCRUIT_DETAIL` `b` ON `a`.`REC_FIDENT` = `b`.`REC_IDENTS`
LEFT JOIN `T_MAS_PEKRJA` `c` ON `a`.`REC_PKRJID` = `c`.`PKR_IDENTS`
WHERE `a`.`REC_IDENTS` = '0') a
ORDER BY `c`.`PKR_NAMESS`
 LIMIT 13
ERROR - 2022-04-06 09:06:01 --> Query error: Unknown column 'c.PKR_NAMESS' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.*, c.PKR_NAMESS, c.PKR_JNSKLM, c.PKR_EXPRNC, c.PKR_EXPNPT, c.PKR_EXPBDG
FROM `T_TRN_RCRUIT_DETAIL` `a`
INNER JOIN `T_TRN_RCRUIT` `b` ON `a`.`REC_FIDENT` = `b`.`REC_IDENTS`
LEFT JOIN `T_MAS_PEKRJA` `c` ON `a`.`REC_PKRJID` = `c`.`PKR_IDENTS`
WHERE `a`.`REC_IDENTS` = '0') a
ORDER BY `c`.`PKR_NAMESS`
 LIMIT 13
ERROR - 2022-04-06 09:08:41 --> Query error: Unknown column 'b.REC_FIDENT' in 'field list' - Invalid query: SELECT *
FROM (SELECT b.*, b.REC_FIDENT, c.PKR_NAMESS, c.PKR_JNSKLM, c.PKR_EXPRNC, c.PKR_EXPNPT, c.PKR_EXPBDG
FROM `T_TRN_RCRUIT_DETAIL` `a`
INNER JOIN `T_TRN_RCRUIT` `b` ON `a`.`REC_FIDENT` = `b`.`REC_IDENTS`
LEFT JOIN `T_MAS_PEKRJA` `c` ON `a`.`REC_PKRJID` = `c`.`PKR_IDENTS`
WHERE `a`.`REC_IDENTS` = '0') a
ORDER BY `b`.`REC_FIDENT`
 LIMIT 13
ERROR - 2022-04-06 09:30:30 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:30:30 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:30:38 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-04-06 09:30:38 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:35:07 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:35:08 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:35:08 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:36:07 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:36:08 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:36:08 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:37:37 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:37:38 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:37:38 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:40:33 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:40:33 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:40:33 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:41:27 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:41:27 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:41:27 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:41:56 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:41:57 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:41:57 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:42:35 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:42:35 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:42:35 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:42:52 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:42:53 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:42:53 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:43:51 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:43:51 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:43:51 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:48:20 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:48:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:48:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:49:33 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:49:34 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:49:34 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:58:12 --> 404 Page Not Found: Dashboard/site.webmanifest
ERROR - 2022-04-06 09:58:12 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:58:12 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:58:12 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:59:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:59:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 09:59:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:14:53 --> Severity: Parsing Error --> syntax error, unexpected ''" onblur="this.placeholder = ' (T_CONSTANT_ENCAPSED_STRING) D:\xampp\htdocs\ji-worker\application\controllers\ProfileWeb.php 156
ERROR - 2022-04-06 10:15:43 --> Severity: Notice --> Undefined variable: Super Admin D:\xampp\htdocs\ji-worker\application\controllers\ProfileWeb.php 162
ERROR - 2022-04-06 10:15:43 --> Severity: Notice --> Undefined variable: Super Admin D:\xampp\htdocs\ji-worker\application\controllers\ProfileWeb.php 168
ERROR - 2022-04-06 10:15:43 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:15:44 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:15:44 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:16:16 --> Severity: Notice --> Undefined variable: Super Admin D:\xampp\htdocs\ji-worker\application\controllers\ProfileWeb.php 168
ERROR - 2022-04-06 10:16:16 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:16:17 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:16:17 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:16:59 --> Severity: Notice --> Undefined variable: Super Admin D:\xampp\htdocs\ji-worker\application\controllers\ProfileWeb.php 165
ERROR - 2022-04-06 10:17:01 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:17:02 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:17:02 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:17:46 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:17:46 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:17:46 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:19:02 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:19:02 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:19:02 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:20:43 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:20:43 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:20:43 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:22:07 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:22:08 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:22:08 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:22:24 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:22:24 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:22:24 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:22:41 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:22:41 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:22:41 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:23:44 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:23:45 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:23:45 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:40:46 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:40:46 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:40:54 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-04-06 10:40:54 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:41:39 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:41:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:41:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:42:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:42:22 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:42:22 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:42:46 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:42:47 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:42:47 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:43:02 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:43:03 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:43:03 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:43:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:43:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:43:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:43:41 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:43:42 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:43:42 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:43:56 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:43:57 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:43:57 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:47:58 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:47:58 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:47:59 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:48:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:48:16 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:48:16 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:49:46 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:49:46 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:49:47 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:52:48 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:52:48 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:52:48 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:54:47 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:54:48 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:54:48 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:55:07 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:55:07 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:55:07 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:55:50 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:55:50 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:55:51 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:56:02 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:56:02 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:56:03 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:56:19 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:56:20 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:56:20 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:56:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:56:41 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:56:41 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:57:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:57:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 10:57:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:03:59 --> Severity: Notice --> Undefined variable: formname D:\xampp\htdocs\ji-worker\application\controllers\ProfileWeb.php 38
ERROR - 2022-04-06 11:03:59 --> Severity: Notice --> Undefined variable: userid D:\xampp\htdocs\ji-worker\application\controllers\ProfileWeb.php 48
ERROR - 2022-04-06 11:03:59 --> Severity: Notice --> Undefined variable: level D:\xampp\htdocs\ji-worker\application\controllers\ProfileWeb.php 64
ERROR - 2022-04-06 11:03:59 --> Severity: Notice --> Undefined variable: formname D:\xampp\htdocs\ji-worker\application\controllers\ProfileWeb.php 80
ERROR - 2022-04-06 11:03:59 --> Severity: Notice --> Undefined variable: formname D:\xampp\htdocs\ji-worker\application\controllers\ProfileWeb.php 97
ERROR - 2022-04-06 11:04:00 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:04:01 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:04:01 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:04:39 --> Severity: Notice --> Undefined variable: userid D:\xampp\htdocs\ji-worker\application\controllers\ProfileWeb.php 49
ERROR - 2022-04-06 11:04:39 --> Severity: Notice --> Undefined variable: level D:\xampp\htdocs\ji-worker\application\controllers\ProfileWeb.php 65
ERROR - 2022-04-06 11:04:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:04:41 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:04:41 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:06:19 --> Severity: Parsing Error --> syntax error, unexpected '' readonly>' (T_CONSTANT_ENCAPSED_STRING) D:\xampp\htdocs\ji-worker\application\controllers\ProfileWeb.php 65
ERROR - 2022-04-06 11:06:55 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:06:56 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:06:56 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:08:23 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:08:24 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:08:24 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:08:46 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:08:47 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:08:47 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:09:16 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:09:17 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:09:17 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:09:34 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:09:34 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:09:34 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:10:02 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:10:02 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:10:03 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:11:14 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:11:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:11:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:11:39 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:11:39 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:11:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:12:04 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:12:05 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:12:05 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:13:30 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:13:31 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:13:31 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:14:02 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:14:03 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:14:03 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:21:19 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:21:20 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:21:20 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:25:42 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:25:42 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:25:42 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:26:27 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:26:29 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:26:29 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:27:27 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:27:28 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:27:28 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:28:01 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:28:02 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:28:02 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:32:17 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:32:18 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:32:18 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:33:19 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:33:20 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:33:20 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:33:32 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:33:33 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:33:33 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:35:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:35:41 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:35:41 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:35:52 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:35:53 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:35:53 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:36:16 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:36:17 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:36:17 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:40:08 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:40:09 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:40:09 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:40:39 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:40:39 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:40:39 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:41:06 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:41:06 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:41:06 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:41:43 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:41:43 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:41:43 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:43:46 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:43:47 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:43:47 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:44:00 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:44:00 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:44:00 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:50:56 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:50:56 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:50:56 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:51:13 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:51:13 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:51:13 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:52:18 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:52:18 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:52:18 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:52:29 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:52:30 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:52:30 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:53:25 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:53:25 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:53:25 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:54:17 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:54:17 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:54:17 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:54:33 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:54:33 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:54:33 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:55:57 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:55:57 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:55:57 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:56:39 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:56:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:56:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:58:59 --> Severity: Parsing Error --> syntax error, unexpected ''" onblur="this.placeholder = ' (T_CONSTANT_ENCAPSED_STRING) D:\xampp\htdocs\ji-worker\application\controllers\ProfileWeb.php 65
ERROR - 2022-04-06 11:59:29 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:59:29 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 11:59:29 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 12:00:06 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 12:00:06 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 12:00:06 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 12:26:35 --> 404 Page Not Found: Resources/img
ERROR - 2022-04-06 12:26:35 --> 404 Page Not Found: Resources/img
ERROR - 2022-04-06 12:45:18 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-04-06 12:45:18 --> 404 Page Not Found: Resources/css
ERROR - 2022-04-06 12:45:18 --> 404 Page Not Found: Resources/css
ERROR - 2022-04-06 12:47:05 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-04-06 12:47:05 --> 404 Page Not Found: Resources/css
ERROR - 2022-04-06 12:47:05 --> 404 Page Not Found: Resources/css
ERROR - 2022-04-06 12:47:59 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-04-06 12:47:59 --> 404 Page Not Found: Resources/css
ERROR - 2022-04-06 12:47:59 --> 404 Page Not Found: Resources/css
ERROR - 2022-04-06 13:08:51 --> Severity: Parsing Error --> syntax error, unexpected '"login>Login disini</a></cente' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' D:\xampp\htdocs\ji-worker\application\views\v_register.php 23
ERROR - 2022-04-06 13:09:06 --> Severity: Parsing Error --> syntax error, unexpected '"login>Login disini</a></cente' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' D:\xampp\htdocs\ji-worker\application\views\v_register.php 23
ERROR - 2022-04-06 13:09:36 --> 404 Page Not Found: Sitewebmanifest/index
ERROR - 2022-04-06 13:09:36 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:09:36 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:09:36 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:10:11 --> Severity: Parsing Error --> syntax error, unexpected 'login' (T_STRING), expecting ',' or ';' D:\xampp\htdocs\ji-worker\application\views\v_register.php 21
ERROR - 2022-04-06 13:10:11 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:10:36 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:10:36 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:10:36 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:11:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:11:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:11:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:11:35 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:11:35 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:11:35 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:13:51 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:13:51 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:13:51 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:14:13 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:14:13 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:14:13 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:14:32 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:14:32 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:14:32 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:15:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:15:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:15:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:15:43 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:15:43 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:15:43 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:16:34 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:16:34 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:16:34 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:16:48 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:16:48 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:16:48 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:18:00 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:18:00 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:18:00 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:24:05 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:24:06 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:24:06 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:25:37 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:25:38 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:25:38 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:29:20 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:29:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:29:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:29:36 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:29:36 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:29:36 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:30:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:30:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:30:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:31:04 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:31:07 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:31:07 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:32:23 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:32:23 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:32:23 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:41:37 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:41:38 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:41:38 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:45:46 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:45:47 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:45:47 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:46:43 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:46:44 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:46:44 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:50:08 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-04-06 13:50:09 --> 404 Page Not Found: Resources/css
ERROR - 2022-04-06 13:50:09 --> 404 Page Not Found: Resources/css
ERROR - 2022-04-06 13:58:32 --> 404 Page Not Found: Sitewebmanifest/index
ERROR - 2022-04-06 13:58:32 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:58:32 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 13:58:32 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:15:06 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:15:07 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:15:07 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:16:06 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:16:06 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:16:07 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:17:44 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:17:44 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:17:44 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:18:11 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:18:11 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:18:11 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:22:57 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:22:58 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:22:58 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:24:12 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:24:12 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:24:12 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:25:28 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:25:28 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:25:28 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:26:32 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:26:32 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:26:32 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:28:59 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:28:59 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:28:59 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:30:16 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:30:17 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:30:17 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:30:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:30:41 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:30:41 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:31:18 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:31:18 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:31:18 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:31:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:31:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:31:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:37:11 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:37:11 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:37:11 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:37:39 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:37:39 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:37:39 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:38:24 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:38:24 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:38:24 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:39:44 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:39:45 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:39:45 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:41:37 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:41:38 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:41:38 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:42:10 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:42:11 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:42:11 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:49:39 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:49:39 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:49:39 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:51:16 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:51:17 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:51:17 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:51:29 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:51:29 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:51:29 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:55:22 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:55:22 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:55:22 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:57:05 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:57:06 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:57:06 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:57:45 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:57:45 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:57:45 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:58:39 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:58:39 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:58:39 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:59:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:59:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 14:59:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:01:51 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:01:51 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:01:51 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:02:22 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:02:22 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:02:22 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:04:43 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:04:44 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:04:44 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:11:10 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:11:11 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:11:11 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:13:34 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:13:34 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:13:34 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:16:47 --> Severity: error --> Exception: Unable to locate the model you have specified: M_sales D:\xampp\htdocs\ji-worker\system\core\Loader.php 344
ERROR - 2022-04-06 15:33:46 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:33:46 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:33:46 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:35:25 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:35:25 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:35:25 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:43:24 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:43:24 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:43:24 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:45:41 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:45:41 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:45:41 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:57:25 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:57:26 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:57:26 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:58:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:58:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:58:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:58:30 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:58:31 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:58:31 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:59:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:59:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:59:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:59:49 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:59:49 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 15:59:49 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:02:32 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:02:33 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:02:33 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:08:42 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:08:42 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:08:42 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:21:31 --> Severity: Notice --> Undefined property: Dashboard::$m_master D:\xampp\htdocs\ji-worker\application\controllers\Dashboard.php 32
ERROR - 2022-04-06 16:21:31 --> Severity: Error --> Call to a member function getComboCity() on a non-object D:\xampp\htdocs\ji-worker\application\controllers\Dashboard.php 32
ERROR - 2022-04-06 16:22:01 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:22:01 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:22:01 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:25:35 --> Severity: Warning --> Illegal string offset 'CTY_IDENTS' D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:25:35 --> Severity: Notice --> Uninitialized string offset: 0 D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:25:35 --> Severity: Warning --> Illegal string offset 'CTY_NAMESS' D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:25:35 --> Severity: Notice --> Uninitialized string offset: 0 D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:25:35 --> Severity: Warning --> Illegal string offset 'CTY_IDENTS' D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:25:35 --> Severity: Warning --> Illegal string offset 'CTY_NAMESS' D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:25:35 --> Severity: Warning --> Illegal string offset 'CTY_IDENTS' D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:25:35 --> Severity: Warning --> Illegal string offset 'CTY_NAMESS' D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:25:36 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:25:36 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:25:36 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:25:47 --> Severity: Warning --> Illegal string offset 'CTY_IDENTS' D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:25:47 --> Severity: Notice --> Uninitialized string offset: 0 D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:25:47 --> Severity: Warning --> Illegal string offset 'CTY_NAMESS' D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:25:47 --> Severity: Notice --> Uninitialized string offset: 0 D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:25:47 --> Severity: Warning --> Illegal string offset 'CTY_IDENTS' D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:25:47 --> Severity: Warning --> Illegal string offset 'CTY_NAMESS' D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:25:47 --> Severity: Warning --> Illegal string offset 'CTY_IDENTS' D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:25:47 --> Severity: Warning --> Illegal string offset 'CTY_NAMESS' D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:26:15 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:26:15 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:26:15 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:26:15 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:26:15 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:26:15 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:26:19 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:26:19 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:26:19 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:26:19 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:26:19 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:26:19 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:26:20 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:26:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:26:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:26:24 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:26:24 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:26:24 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:26:24 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:26:24 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:26:24 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:26:33 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:26:33 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:26:33 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:26:33 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:26:33 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 31
ERROR - 2022-04-06 16:26:33 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\ji-worker\application\views\v_maindashboard.php 32
ERROR - 2022-04-06 16:27:31 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:27:31 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:27:31 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:29:18 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:29:18 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:29:18 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:31:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:31:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:31:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:40:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:40:16 --> 404 Page Not Found: Resources/assets
ERROR - 2022-04-06 16:40:16 --> 404 Page Not Found: Resources/assets
