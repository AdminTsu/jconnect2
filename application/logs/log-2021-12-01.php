<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-12-01 02:37:22 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 02:47:54 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-12-01 03:24:47 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 2140
ERROR - 2021-12-01 03:24:47 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 2140
ERROR - 2021-12-01 03:24:47 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 2308
ERROR - 2021-12-01 03:24:47 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 2308
ERROR - 2021-12-01 03:24:47 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 2446
ERROR - 2021-12-01 03:24:47 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 2446
ERROR - 2021-12-01 03:24:47 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 2524
ERROR - 2021-12-01 03:24:47 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 2524
ERROR - 2021-12-01 03:24:57 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 04:47:10 --> Query error: Unknown column 'PRD_BDVIDN' in 'where clause' - Invalid query: DELETE FROM `T_BDV_PROJEC_DETAIL`
WHERE `PRD_BDVIDN` = '14'
AND `BDV_FIELDS` = 'RND_RNDSTR'
AND `BDV_USRDIV` = 'RND'
ERROR - 2021-12-01 04:50:30 --> Query error: Unknown column 'BDV_BDVIDN' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `T_BDV_PRDPRG`
WHERE `BDV_BDVIDN` = '14'
ERROR - 2021-12-01 04:51:56 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 04:53:25 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 04:54:42 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 04:59:53 --> Query error: Unknown column 'b.BDV_IDENTS' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.BDV_IDENTS, b.BDV_BDVIDN, b.BDV_PRGDAT, b.BDV_DESCRE, b.BDV_USRDIV, b.BDV_FIELDS
FROM `T_BDV_PROJEC` `a`
INNER JOIN `T_BDV_PROJEC_DETAIL` `b` ON `a`.`BDV_IDENTS` = `b`.`BDV_BDVIDN`
WHERE `a`.`BDV_IDENTS` = '14') a
ORDER BY `b`.`BDV_IDENTS`
 LIMIT 50
ERROR - 2021-12-01 05:01:22 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 05:02:03 --> Query error: Unknown column 'a.BDV_USRDIV' in 'field list' - Invalid query: SELECT *
FROM (SELECT b.BDV_IDENTS, b.BDV_BDVIDN, b.BDV_PRGDAT, b.BDV_DESCRE, b.BDV_FIELDS, CASE 
				WHEN a.BDV_USRDIV = 'RND' THEN 'RnD'
				WHEN a.BDV_USRDIV = 'PAC' THEN 'Packaging'
				WHEN a.BDV_USRDIV = 'DOS' THEN 'Dossier Regristrasi'
				WHEN a.BDV_USRDIV = 'PRC' THEN 'Purchasing'
				WHEN a.BDV_USRDIV = 'PRD' THEN 'Produksi'
				WHEN a.BDV_USRDIV = 'MKT' THEN 'Marketing'
			END BDV_USRDIV
FROM `T_BDV_PROJEC` `a`
INNER JOIN `T_BDV_PROJEC_DETAIL` `b` ON `a`.`BDV_IDENTS` = `b`.`BDV_BDVIDN`
WHERE `a`.`BDV_IDENTS` = '14') a
ORDER BY `b`.`BDV_IDENTS`
 LIMIT 50
ERROR - 2021-12-01 05:02:46 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 05:02:54 --> Query error: Unknown column 'b.BDV_IDENTS' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.BDV_IDENTS, b.BDV_BDVIDN, b.BDV_PRGDAT, b.BDV_DESCRE, b.BDV_FIELDS, CASE 
				WHEN b.BDV_USRDIV = 'RND' THEN 'RnD'
				WHEN b.BDV_USRDIV = 'PAC' THEN 'Packaging'
				WHEN b.BDV_USRDIV = 'DOS' THEN 'Dossier Regristrasi'
				WHEN b.BDV_USRDIV = 'PRC' THEN 'Purchasing'
				WHEN b.BDV_USRDIV = 'PRD' THEN 'Produksi'
				WHEN b.BDV_USRDIV = 'MKT' THEN 'Marketing'
			END BDV_USRDIV
FROM `T_BDV_PROJEC` `a`
INNER JOIN `T_BDV_PROJEC_DETAIL` `b` ON `a`.`BDV_IDENTS` = `b`.`BDV_BDVIDN`
WHERE `a`.`BDV_IDENTS` = '14') a
ORDER BY `b`.`BDV_IDENTS`
 LIMIT 50
ERROR - 2021-12-01 05:07:53 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 05:08:42 --> Query error: Unknown column 'b.BDV_BDVIDN' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.BDV_BDVIDN, b.BDV_PRGDAT, b.BDV_DESCRE, b.BDV_FIELDS, CASE 
				WHEN b.BDV_USRDIV = 'RND' THEN 'RnD'
				WHEN b.BDV_USRDIV = 'PAC' THEN 'Packaging'
				WHEN b.BDV_USRDIV = 'DOS' THEN 'Dossier Regristrasi'
				WHEN b.BDV_USRDIV = 'PRC' THEN 'Purchasing'
				WHEN b.BDV_USRDIV = 'PRD' THEN 'Produksi'
				WHEN b.BDV_USRDIV = 'MKT' THEN 'Marketing'
			END BDV_USRDIV
FROM `T_BDV_PROJEC` `a`
INNER JOIN `T_BDV_PROJEC_DETAIL` `b` ON `a`.`BDV_IDENTS` = `b`.`BDV_BDVIDN`
WHERE `a`.`BDV_IDENTS` = '14') a
ORDER BY `b`.`BDV_BDVIDN`
 LIMIT 50
ERROR - 2021-12-01 05:09:23 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 05:09:29 --> Query error: Unknown column 'b.BDV_IDENTS' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.BDV_IDENTS, b.BDV_BDVIDN, b.BDV_PRGDAT, b.BDV_DESCRE, b.BDV_FIELDS, CASE 
				WHEN b.BDV_USRDIV = 'RND' THEN 'RnD'
				WHEN b.BDV_USRDIV = 'PAC' THEN 'Packaging'
				WHEN b.BDV_USRDIV = 'DOS' THEN 'Dossier Regristrasi'
				WHEN b.BDV_USRDIV = 'PRC' THEN 'Purchasing'
				WHEN b.BDV_USRDIV = 'PRD' THEN 'Produksi'
				WHEN b.BDV_USRDIV = 'MKT' THEN 'Marketing'
			END BDV_USRDIV
FROM `T_BDV_PROJEC` `a`
INNER JOIN `T_BDV_PROJEC_DETAIL` `b` ON `a`.`BDV_IDENTS` = `b`.`BDV_BDVIDN`
WHERE `a`.`BDV_IDENTS` = '14') a
ORDER BY `b`.`BDV_IDENTS`
 LIMIT 50
ERROR - 2021-12-01 05:10:17 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 05:10:26 --> Query error: Duplicate column name 'BDV_USRDIV' - Invalid query: SELECT *
FROM (SELECT b.*, CASE 
				WHEN b.BDV_USRDIV = 'RND' THEN 'RnD'
				WHEN b.BDV_USRDIV = 'PAC' THEN 'Packaging'
				WHEN b.BDV_USRDIV = 'DOS' THEN 'Dossier Regristrasi'
				WHEN b.BDV_USRDIV = 'PRC' THEN 'Purchasing'
				WHEN b.BDV_USRDIV = 'PRD' THEN 'Produksi'
				WHEN b.BDV_USRDIV = 'MKT' THEN 'Marketing'
			END BDV_USRDIV
FROM `T_BDV_PROJEC` `a`
INNER JOIN `T_BDV_PROJEC_DETAIL` `b` ON `a`.`BDV_IDENTS` = `b`.`BDV_BDVIDN`
WHERE `a`.`BDV_IDENTS` = '14') a
ORDER BY `WHEN`
 LIMIT 50
ERROR - 2021-12-01 05:12:53 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 05:15:22 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 05:17:40 --> Query error: Duplicate column name 'BDV_USRDIV' - Invalid query: SELECT *
FROM (SELECT b.*, CASE 
				WHEN b.BDV_USRDIV = 'RND' THEN 'RnD'
				WHEN b.BDV_USRDIV = 'PAC' THEN 'Packaging'
				WHEN b.BDV_USRDIV = 'DOS' THEN 'Dossier Regristrasi'
				WHEN b.BDV_USRDIV = 'PRC' THEN 'Purchasing'
				WHEN b.BDV_USRDIV = 'PRD' THEN 'Produksi'
				WHEN b.BDV_USRDIV = 'MKT' THEN 'Marketing'
			END BDV_USRDIV
FROM `T_BDV_PROJEC` `a`
INNER JOIN `T_BDV_PROJEC_DETAIL` `b` ON `a`.`BDV_IDENTS` = `b`.`BDV_BDVIDN`
WHERE `a`.`BDV_IDENTS` = '14') a
ORDER BY `WHEN`
 LIMIT 50
ERROR - 2021-12-01 05:18:10 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 05:18:15 --> Query error: Unknown column 'WHEN' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.*, CASE 
				WHEN b.BDV_USRDIV = 'RND' THEN 'RnD'
				WHEN b.BDV_USRDIV = 'PAC' THEN 'Packaging'
				WHEN b.BDV_USRDIV = 'DOS' THEN 'Dossier Regristrasi'
				WHEN b.BDV_USRDIV = 'PRC' THEN 'Purchasing'
				WHEN b.BDV_USRDIV = 'PRD' THEN 'Produksi'
				WHEN b.BDV_USRDIV = 'MKT' THEN 'Marketing'
			END USRDIV
FROM `T_BDV_PROJEC` `a`
INNER JOIN `T_BDV_PROJEC_DETAIL` `b` ON `a`.`BDV_IDENTS` = `b`.`BDV_BDVIDN`
WHERE `a`.`BDV_IDENTS` = '14') a
ORDER BY `WHEN`
 LIMIT 50
ERROR - 2021-12-01 05:18:57 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 05:19:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'THEN 'Marketing'
			END USRDIV
FROM `T_BDV_PROJEC` `a`
INNER JOIN `T_BDV_PROJEC' at line 8 - Invalid query: SELECT *
FROM (SELECT b.*, CASE 
				WHEN b.BDV_USRDIV = 'RND' THEN 'RnD'
				WHEN b.BDV_USRDIV = 'PAC' THEN 'Packaging'
				WHEN b.BDV_USRDIV = 'DOS' THEN 'Dossier Regristrasi'
				WHEN b.BDV_USRDIV = 'PRC' THEN 'Purchasing'
				WHEN b.BDV_USRDIV = 'PRD' THEN 'Produksi'
				ELSE b.BDV_USRDIV = 'MKT' THEN 'Marketing'
			END USRDIV
FROM `T_BDV_PROJEC` `a`
INNER JOIN `T_BDV_PROJEC_DETAIL` `b` ON `a`.`BDV_IDENTS` = `b`.`BDV_BDVIDN`
WHERE `a`.`BDV_IDENTS` = '14') a
ORDER BY `WHEN`
 LIMIT 50
ERROR - 2021-12-01 05:21:29 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 05:21:56 --> Query error: Unknown column 'WHEN' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.*, CASE 
				WHEN b.BDV_USRDIV = 'RND' THEN 'RnD'
				WHEN b.BDV_USRDIV = 'PAC' THEN 'Packaging'
				WHEN b.BDV_USRDIV = 'DOS' THEN 'Dossier Regristrasi'
				WHEN b.BDV_USRDIV = 'PRC' THEN 'Purchasing'
				WHEN b.BDV_USRDIV = 'PRD' THEN 'Produksi'
				WHEN b.BDV_USRDIV = 'MKT' THEN 'Marketing'
			END USRDIV
FROM `T_BDV_PROJEC` `a`
INNER JOIN `T_BDV_PROJEC_DETAIL` `b` ON `a`.`BDV_IDENTS` = `b`.`BDV_BDVIDN`
WHERE `a`.`BDV_IDENTS` = '14') a
ORDER BY `WHEN`
 LIMIT 50
ERROR - 2021-12-01 05:23:22 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 05:24:52 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 05:25:51 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 05:26:05 --> Query error: Duplicate column name 'BDV_USRDIV' - Invalid query: SELECT *
FROM (SELECT b.*, CASE 
				WHEN b.BDV_USRDIV = 'RND' THEN 'RnD'
				WHEN b.BDV_USRDIV = 'PAC' THEN 'Packaging'
				WHEN b.BDV_USRDIV = 'DOS' THEN 'Dossier Regristrasi'
				WHEN b.BDV_USRDIV = 'PRC' THEN 'Purchasing'
				WHEN b.BDV_USRDIV = 'PRD' THEN 'Produksi'
				WHEN b.BDV_USRDIV = 'MKT' THEN 'Marketing'
			END BDV_USRDIV
FROM `T_BDV_PROJEC` `a`
INNER JOIN `T_BDV_PROJEC_DETAIL` `b` ON `a`.`BDV_IDENTS` = `b`.`BDV_BDVIDN`
WHERE `a`.`BDV_IDENTS` = '14') a
ORDER BY `WHEN`
 LIMIT 50
ERROR - 2021-12-01 05:26:48 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 05:26:53 --> Query error: Unknown column 'WHEN' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.*, CASE 
				WHEN b.BDV_USRDIV = 'RND' THEN 'RnD'
				WHEN b.BDV_USRDIV = 'PAC' THEN 'Packaging'
				WHEN b.BDV_USRDIV = 'DOS' THEN 'Dossier Regristrasi'
				WHEN b.BDV_USRDIV = 'PRC' THEN 'Purchasing'
				WHEN b.BDV_USRDIV = 'PRD' THEN 'Produksi'
				WHEN b.BDV_USRDIV = 'MKT' THEN 'Marketing'
			END BDV_DIVISI
FROM `T_BDV_PROJEC` `a`
INNER JOIN `T_BDV_PROJEC_DETAIL` `b` ON `a`.`BDV_IDENTS` = `b`.`BDV_BDVIDN`
WHERE `a`.`BDV_IDENTS` = '14') a
ORDER BY `WHEN`
 LIMIT 50
ERROR - 2021-12-01 05:31:11 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 05:34:41 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '59'
ERROR - 2021-12-01 07:25:39 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-12-01 07:25:39 --> 404 Page Not Found: Resources/css
ERROR - 2021-12-01 07:25:39 --> 404 Page Not Found: Resources/css
ERROR - 2021-12-01 07:25:39 --> 404 Page Not Found: Resources/css
ERROR - 2021-12-01 07:46:25 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = '12'
