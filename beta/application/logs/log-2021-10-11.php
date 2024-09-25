<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-10-11 04:52:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SAL_STATUS = 1 THEN 'APPROVED'
				SAL_STATUS = 2 THEN 'UNAPPROVED'
				SAL_ST' at line 4 - Invalid query: SELECT *
FROM (SELECT a.SAL_IDENTS, a.SAL_NUMBER, a.SAL_TRANSD, a.SAL_SPGIDN, a.SAL_CABANG, a.SAL_AREASS, a.SAL_CUSTOM, b.SPG_NAMESS SPG, c.nama CABANG, d.nama AREA, e.nama CUSTOMER, f.nama ALOKASI, SAL_STATUS, CASE WHEN 
				SAL_STATUS = 0 THEN 'PENDING'
				SAL_STATUS = 1 THEN 'APPROVED'
				SAL_STATUS = 2 THEN 'UNAPPROVED'
				SAL_STATUS = 3 THEN 'DELETE'
			END STATUS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGDAT` `b` ON `a`.`SAL_SPGIDN` = `b`.`SPG_IDENTS`
INNER JOIN `MKT`.`icabang_o` `c` ON `a`.`SAL_CABANG` = `c`.`icabangid_o`
INNER JOIN `MKT`.`iarea_o` `d` ON `a`.`SAL_CABANG` = `d`.`icabangid_o` AND `a`.`SAL_AREASS` = `d`.`areaid_o`
INNER JOIN `MKT`.`icust_o` `e` ON `a`.`SAL_CABANG` = `e`.`icabangid_o` AND `a`.`SAL_AREASS` = `e`.`areaid_o` AND `a`.`SAL_CUSTOM` = `e`.`icustid_o`
INNER JOIN `MKT`.`grp_sls` `f` ON `a`.`SAL_ALOIDN` = `f`.`grpid`) a
ORDER BY `a`.`SAL_IDENTS`, `a`.`SAL_CABANG`
 LIMIT 22
ERROR - 2021-10-11 04:53:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SAL_STATUS = 1 THEN 'APPROVED'
				SAL_STATUS = 2 THEN 'UNAPPROVED'
				ELSE '' at line 4 - Invalid query: SELECT *
FROM (SELECT a.SAL_IDENTS, a.SAL_NUMBER, a.SAL_TRANSD, a.SAL_SPGIDN, a.SAL_CABANG, a.SAL_AREASS, a.SAL_CUSTOM, b.SPG_NAMESS SPG, c.nama CABANG, d.nama AREA, e.nama CUSTOMER, f.nama ALOKASI, SAL_STATUS, CASE WHEN 
				SAL_STATUS = 0 THEN 'PENDING'
				SAL_STATUS = 1 THEN 'APPROVED'
				SAL_STATUS = 2 THEN 'UNAPPROVED'
				ELSE 'DELETE'
			END STATUS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGDAT` `b` ON `a`.`SAL_SPGIDN` = `b`.`SPG_IDENTS`
INNER JOIN `MKT`.`icabang_o` `c` ON `a`.`SAL_CABANG` = `c`.`icabangid_o`
INNER JOIN `MKT`.`iarea_o` `d` ON `a`.`SAL_CABANG` = `d`.`icabangid_o` AND `a`.`SAL_AREASS` = `d`.`areaid_o`
INNER JOIN `MKT`.`icust_o` `e` ON `a`.`SAL_CABANG` = `e`.`icabangid_o` AND `a`.`SAL_AREASS` = `e`.`areaid_o` AND `a`.`SAL_CUSTOM` = `e`.`icustid_o`
INNER JOIN `MKT`.`grp_sls` `f` ON `a`.`SAL_ALOIDN` = `f`.`grpid`) a
ORDER BY `a`.`SAL_IDENTS`, `a`.`SAL_CABANG`
 LIMIT 22
ERROR - 2021-10-11 05:56:51 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 05:56:51 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-11 05:56:51 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-11 05:56:51 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-11 06:10:08 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-11 06:10:08 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-11 06:10:08 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-11 06:14:31 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1410
ERROR - 2021-10-11 06:14:31 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1410
ERROR - 2021-10-11 06:14:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1410
ERROR - 2021-10-11 06:14:39 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1410
ERROR - 2021-10-11 06:14:39 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1410
ERROR - 2021-10-11 06:14:39 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1410
ERROR - 2021-10-11 06:14:40 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1410
ERROR - 2021-10-11 06:14:40 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1410
ERROR - 2021-10-11 06:14:43 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1410
ERROR - 2021-10-11 06:14:44 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1410
ERROR - 2021-10-11 06:14:48 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1410
ERROR - 2021-10-11 06:14:52 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1410
ERROR - 2021-10-11 06:14:52 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1410
ERROR - 2021-10-11 06:15:04 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1410
ERROR - 2021-10-11 06:15:04 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1410
ERROR - 2021-10-11 06:15:05 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1410
ERROR - 2021-10-11 06:15:05 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1410
ERROR - 2021-10-11 06:29:02 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 06:29:02 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 06:29:06 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 06:29:10 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 06:29:10 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 06:29:10 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 06:29:11 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 06:29:11 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 06:29:14 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 06:29:15 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 06:29:19 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 06:29:23 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 06:29:23 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 06:29:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 06:29:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 06:29:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 06:29:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 07:56:39 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 07:56:49 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 07:59:21 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 07:59:21 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:21 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:21 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:21 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:21 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:21 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:21 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:21 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:21 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:21 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:41 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 07:59:41 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:41 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:41 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:41 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:41 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:41 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:41 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:41 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:41 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 07:59:41 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:00:27 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:30 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:31 --> 404 Page Not Found: spg/3030123/resources
ERROR - 2021-10-11 08:00:33 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 08:00:33 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:00:33 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:00:33 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:00:33 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:00:33 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:00:33 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:00:33 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:00:33 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:00:33 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:00:34 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:14 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 08:01:14 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:14 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:14 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:14 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:14 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:14 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:14 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:14 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:14 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:15 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:19 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 08:01:19 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:19 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:19 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:19 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:19 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:19 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:19 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:19 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:19 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:01:19 --> 404 Page Not Found: 3030123/resources
ERROR - 2021-10-11 08:02:17 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 08:02:18 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:18 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:18 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:18 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:18 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:18 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:18 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:18 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:18 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:18 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:40 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 08:02:40 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:40 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:40 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:40 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:40 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:40 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:40 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:40 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:44 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 08:02:44 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:44 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:44 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:44 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:44 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:44 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:44 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:02:44 --> 404 Page Not Found: 127001/resources
ERROR - 2021-10-11 08:03:14 --> 404 Page Not Found: Login/127.0.0.1
ERROR - 2021-10-11 08:03:35 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:03:40 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:41 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:43 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:44 --> 404 Page Not Found: Sdmsys/index
ERROR - 2021-10-11 08:04:44 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:45 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:51 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 08:04:51 --> 404 Page Not Found: 3030123/sdmsys
ERROR - 2021-10-11 08:04:51 --> 404 Page Not Found: 3030123/sdmsys
ERROR - 2021-10-11 08:04:51 --> 404 Page Not Found: 3030123/sdmsys
ERROR - 2021-10-11 08:04:51 --> 404 Page Not Found: 3030123/sdmsys
ERROR - 2021-10-11 08:04:51 --> 404 Page Not Found: 3030123/sdmsys
ERROR - 2021-10-11 08:04:51 --> 404 Page Not Found: 3030123/sdmsys
ERROR - 2021-10-11 08:04:51 --> 404 Page Not Found: 3030123/sdmsys
ERROR - 2021-10-11 08:04:51 --> 404 Page Not Found: 3030123/sdmsys
ERROR - 2021-10-11 08:04:51 --> 404 Page Not Found: 3030123/sdmsys
ERROR - 2021-10-11 08:04:51 --> 404 Page Not Found: 3030123/sdmsys
ERROR - 2021-10-11 08:04:55 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:55 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:56 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:56 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:56 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:57 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:57 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:57 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:57 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:57 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:58 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:58 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:58 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:58 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:58 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:59 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:59 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:59 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:59 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:04:59 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:05:00 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:05:00 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:05:00 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:05:00 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:05:00 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:05:00 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:05:01 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:05:01 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:05:01 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:05:01 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:05:01 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:05:02 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:05:03 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:05:03 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:05:03 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:05:04 --> 404 Page Not Found: Login/30.30.1.23
ERROR - 2021-10-11 08:05:05 --> 404 Page Not Found: Login/127.0.0.1
ERROR - 2021-10-11 08:05:11 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 08:05:15 --> 404 Page Not Found: Localhost/sdmsys
ERROR - 2021-10-11 08:05:15 --> 404 Page Not Found: Localhost/sdmsys
ERROR - 2021-10-11 08:05:24 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 08:05:24 --> 404 Page Not Found: Localhost/sdmsys
ERROR - 2021-10-11 08:05:24 --> 404 Page Not Found: Localhost/sdmsys
ERROR - 2021-10-11 08:05:24 --> 404 Page Not Found: Localhost/sdmsys
ERROR - 2021-10-11 08:05:24 --> 404 Page Not Found: Localhost/sdmsys
ERROR - 2021-10-11 08:05:24 --> 404 Page Not Found: Localhost/sdmsys
ERROR - 2021-10-11 08:05:24 --> 404 Page Not Found: Localhost/sdmsys
ERROR - 2021-10-11 08:05:24 --> 404 Page Not Found: Localhost/sdmsys
ERROR - 2021-10-11 08:05:24 --> 404 Page Not Found: Localhost/sdmsys
ERROR - 2021-10-11 08:05:29 --> 404 Page Not Found: Login/localhost
ERROR - 2021-10-11 08:05:42 --> 404 Page Not Found: Login/localhost
ERROR - 2021-10-11 08:12:43 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 08:12:43 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-11 08:12:43 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-11 08:13:19 --> 404 Page Not Found: Resources/img
ERROR - 2021-10-11 08:13:19 --> 404 Page Not Found: Resources/img
ERROR - 2021-10-11 08:22:39 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 08:22:39 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-11 08:22:39 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-11 08:23:53 --> 404 Page Not Found: Resources/img
ERROR - 2021-10-11 08:23:53 --> 404 Page Not Found: Resources/img
ERROR - 2021-10-11 08:26:20 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 08:26:20 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 08:26:24 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 08:26:28 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 08:26:28 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 08:26:28 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 08:26:28 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 08:26:28 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 08:26:32 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 08:26:32 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 08:26:36 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 08:26:40 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 08:26:40 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 08:26:53 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 08:26:53 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 08:26:53 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 08:26:53 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1411
ERROR - 2021-10-11 08:35:01 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 08:35:01 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-11 08:35:01 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:38:50 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 743
ERROR - 2021-10-11 08:51:52 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1420
ERROR - 2021-10-11 08:51:52 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1420
ERROR - 2021-10-11 08:51:56 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1420
ERROR - 2021-10-11 08:52:00 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1420
ERROR - 2021-10-11 08:52:00 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1420
ERROR - 2021-10-11 08:52:00 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1420
ERROR - 2021-10-11 08:52:00 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1420
ERROR - 2021-10-11 08:52:00 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1420
ERROR - 2021-10-11 08:52:04 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1420
ERROR - 2021-10-11 08:52:04 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1420
ERROR - 2021-10-11 08:52:08 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1420
ERROR - 2021-10-11 08:52:12 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1420
ERROR - 2021-10-11 08:52:12 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1420
ERROR - 2021-10-11 08:52:25 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1420
ERROR - 2021-10-11 08:52:25 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1420
ERROR - 2021-10-11 08:52:25 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1420
ERROR - 2021-10-11 08:52:25 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1420
ERROR - 2021-10-11 08:59:56 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 08:59:56 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:00:00 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:00:04 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:00:04 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:00:04 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:00:04 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:00:04 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:00:08 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:00:08 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:00:13 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:00:17 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:00:17 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:00:29 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:00:29 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:00:29 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:00:29 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:01:57 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:01:57 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:02:01 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:02:05 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:02:05 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:02:05 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:02:06 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:02:06 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:02:09 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:02:10 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:02:14 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:02:18 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:02:18 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:02:30 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:02:30 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:02:30 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:02:30 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:04:14 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:04:14 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:04:18 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:04:22 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:04:22 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:04:22 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:04:22 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:04:22 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:04:26 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:04:26 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:04:30 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:04:34 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:04:34 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:04:47 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:04:47 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:04:47 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:04:47 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 09:07:38 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:07:38 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:07:42 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:07:46 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:07:46 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:07:46 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:07:47 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:07:47 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:07:51 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:07:51 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:07:55 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:07:59 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:07:59 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:08:11 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:08:11 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:08:11 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:08:11 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 09:10:37 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:10:37 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:10:41 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:10:45 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:10:45 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:10:45 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:10:45 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:10:46 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:10:49 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:10:50 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:10:54 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:10:58 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:10:58 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:11:10 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:11:10 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:11:10 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:11:10 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:12:48 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:12:48 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:12:52 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:12:56 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:12:56 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:12:56 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:12:56 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:12:56 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:13:00 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:13:00 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:13:04 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:13:08 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:13:09 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:13:21 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:13:21 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:13:21 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:13:21 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1428
ERROR - 2021-10-11 09:34:04 --> Severity: Notice --> Undefined variable: stkawl D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 630
ERROR - 2021-10-11 09:34:04 --> Severity: Notice --> Undefined variable: sellin D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 672
ERROR - 2021-10-11 09:35:27 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:35:27 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:35:31 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:35:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:35:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:35:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:35:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:35:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:35:39 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:35:39 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:35:44 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:35:48 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:35:48 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:36:00 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:36:00 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:36:00 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:36:00 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:37:32 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:37:32 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:37:36 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:37:40 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:37:40 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:37:40 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:37:40 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:37:40 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:37:44 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:37:44 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:37:48 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:37:52 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:37:53 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:38:05 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:38:05 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:38:05 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:38:05 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1430
ERROR - 2021-10-11 09:53:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'STK_AWALLL, d.STK_QNTITY STK_AKHIRR, b.SAL_SELLIN
FROM `T_OTC_SPGSAL` `a`
INNER ' at line 1 - Invalid query: SELECT b.SAL_IDENTS IDENTS, b.SAL_SALIDN, b.SAL_PRODCT, b.SAL_NMPROD, b.SAL_PRICES, b.SAL_QUANTY, FORMAT(b.SAL_VALUES, 2) SAL_VALUES, ((d.STK_QNTITY+b.SAL_QUANTY)-b.SAL_SELLIN_ STK_AWALLL, d.STK_QNTITY STK_AKHIRR, b.SAL_SELLIN
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_SPGIDN` = `d`.`STK_SPGIDN`
WHERE `a`.`SAL_SPGIDN` =0
AND `a`.`SAL_CUSTOM` =0
ERROR - 2021-10-11 09:55:08 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 09:55:08 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 09:55:12 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 09:55:16 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 09:55:16 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 09:55:16 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 09:55:16 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 09:55:16 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 09:55:20 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 09:55:20 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 09:55:24 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 09:55:28 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 09:55:28 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 09:55:41 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 09:55:41 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 09:55:41 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 09:55:41 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 09:57:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 09:57:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 09:57:39 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 09:57:44 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 09:57:44 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 09:57:44 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 09:57:44 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 09:57:44 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 09:57:48 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 09:57:48 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 09:57:52 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 09:57:56 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 09:57:56 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 09:58:09 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 09:58:09 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 09:58:09 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 09:58:09 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:50:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:50:58 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:50:59 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:51:03 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:51:06 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:51:07 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:51:07 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:51:07 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:51:07 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:51:11 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:51:15 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:51:16 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:51:19 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:52:08 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:52:08 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:52:12 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:52:17 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:52:17 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:52:17 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:52:17 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:52:17 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:52:21 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:52:21 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:52:25 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:52:29 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:52:29 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:52:42 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:52:42 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:52:42 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:52:42 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1432
ERROR - 2021-10-11 10:54:02 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:54:02 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:54:06 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:54:10 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:54:10 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:54:10 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:54:10 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:54:10 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:54:14 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:54:14 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:54:18 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:54:22 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:54:22 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:54:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:54:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:54:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:54:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:56:32 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:56:32 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:56:37 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:56:41 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:56:41 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:56:41 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:56:41 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:56:41 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:56:45 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:56:45 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:56:49 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:56:53 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:56:53 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:57:06 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:57:06 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:57:06 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 10:57:06 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1433
ERROR - 2021-10-11 11:07:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') STK_AWALLL, d.STK_QNTITY STK_AKHIRR, b.SAL_SELLIN
FROM `T_OTC_SPGSAL` `a`
INNE' at line 1 - Invalid query: SELECT b.SAL_IDENTS IDENTS, b.SAL_SALIDN, b.SAL_PRODCT, b.SAL_NMPROD, b.SAL_PRICES, b.SAL_QUANTY, FORMAT(b.SAL_VALUES, 2) SAL_VALUES, ((d.STK_QNTITY + b.SAL_QUANTY)-) STK_AWALLL, d.STK_QNTITY STK_AKHIRR, b.SAL_SELLIN
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_SPGIDN` = `d`.`STK_SPGIDN`
WHERE `b`.`SAL_SALIDN` = '142'
AND `b`.`SAL_PRODCT` = '0000000330'
ERROR - 2021-10-11 12:04:03 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 12:04:03 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-11 12:04:03 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-11 12:05:44 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 12:05:44 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 12:05:48 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 12:05:52 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 12:05:52 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 12:05:52 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 12:05:52 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 12:05:52 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 12:05:56 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 12:05:57 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 12:06:01 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 12:06:05 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 12:06:05 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 12:06:17 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 12:06:17 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 12:06:17 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 12:06:17 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1425
ERROR - 2021-10-11 12:10:48 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:10:48 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:10:52 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:10:57 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:10:57 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:10:57 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:10:57 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:10:57 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:01 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:01 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:05 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:09 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:09 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:22 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:22 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:22 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:22 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:42 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:42 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:42 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:43 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:43 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:43 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:47 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:47 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:47 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:47 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:47 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:47 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:51 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:51 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:51 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:51 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:51 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:51 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:55 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:55 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:55 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:55 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:55 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:55 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:59 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:59 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:59 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:59 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:59 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:11:59 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:03 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:03 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:03 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:03 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:03 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:03 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:07 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:07 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:07 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:07 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:08 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:08 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:12 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:12 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:12 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:12 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:12 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:16 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:16 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:16 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:12:16 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:13:01 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:13:01 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:13:05 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:13:10 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:13:10 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:13:10 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:13:10 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:13:10 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:13:14 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:13:14 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:13:18 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:13:22 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:13:22 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:13:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:13:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:13:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:13:35 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:18:29 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:18:29 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:18:33 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:18:37 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:18:37 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:18:37 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:18:37 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:18:37 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:18:41 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:18:41 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:18:45 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:18:49 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:18:49 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:19:02 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:19:02 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:19:02 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:19:02 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:20:58 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:20:59 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:21:03 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:21:07 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:21:07 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:21:07 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:21:07 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:21:07 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:21:11 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:21:11 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:21:15 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:21:19 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:21:19 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:21:32 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:21:32 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:21:32 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:21:32 --> Severity: Notice --> Undefined variable: qty_stk D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1426
ERROR - 2021-10-11 12:23:37 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-11 12:23:37 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-11 12:23:37 --> 404 Page Not Found: Resources/css
