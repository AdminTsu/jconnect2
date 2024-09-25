<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-10-05 04:05:57 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-05 04:06:22 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-05 04:06:59 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-05 04:20:42 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-05 04:20:42 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-05 04:20:42 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-05 04:20:42 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-05 04:47:03 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-10-05 04:47:03 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-05 04:47:03 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-05 04:47:04 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-05 04:47:29 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-05 04:47:29 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-05 04:47:29 --> 404 Page Not Found: Resources/css
ERROR - 2021-10-05 04:54:39 --> Query error: Unknown column 'f.nama' in 'field list' - Invalid query: SELECT a.SAL_IDENTS, a.SAL_NUMBER, a.SAL_TRANSD, a.SAL_SPGIDN, a.SAL_CABANG, a.SAL_AREASS, a.SAL_CUSTOM, b.SPG_NAMESS SPG, c.nama CABANG, d.nama AREA, e.nama CUSTOMER, f.nama ALOKASI, SAL_STATUS, SAL_ALOIDN
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGDAT` `b` ON `a`.`SAL_SPGIDN` = `b`.`SPG_IDENTS`
INNER JOIN `MKT`.`icabang_o` `c` ON `a`.`SAL_CABANG` = `c`.`icabangid_o`
INNER JOIN `MKT`.`iarea_o` `d` ON `a`.`SAL_CABANG` = `d`.`icabangid_o` AND `a`.`SAL_AREASS` = `d`.`areaid_o`
LEFT JOIN `MKT`.`icust_o` `e` ON `a`.`SAL_CABANG` = `e`.`icabangid_o` AND `a`.`SAL_AREASS` = `e`.`areaid_o` AND `a`.`SAL_CUSTOM` = `e`.`icustid_o`
WHERE `a`.`SAL_IDENTS` = '137'
ERROR - 2021-10-05 05:28:10 --> Severity: Notice --> Undefined property: stdClass::$STK_AWALLL D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 712
ERROR - 2021-10-05 05:28:10 --> Severity: Notice --> Undefined property: stdClass::$STK_AKHIRR D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 713
ERROR - 2021-10-05 05:28:10 --> Severity: Notice --> Undefined property: stdClass::$STK_AWALLL D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 712
ERROR - 2021-10-05 05:28:10 --> Severity: Notice --> Undefined property: stdClass::$STK_AKHIRR D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 713
ERROR - 2021-10-05 05:28:39 --> Severity: Notice --> Undefined property: stdClass::$STK_AWALLL D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 712
ERROR - 2021-10-05 05:28:39 --> Severity: Notice --> Undefined property: stdClass::$STK_AKHIRR D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 713
ERROR - 2021-10-05 05:28:39 --> Severity: Notice --> Undefined property: stdClass::$STK_AWALLL D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 712
ERROR - 2021-10-05 05:28:39 --> Severity: Notice --> Undefined property: stdClass::$STK_AKHIRR D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 713
ERROR - 2021-10-05 05:29:23 --> Severity: Notice --> Undefined property: stdClass::$STK_AWALLL D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 712
ERROR - 2021-10-05 05:29:23 --> Severity: Notice --> Undefined property: stdClass::$STK_AKHIRR D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 713
ERROR - 2021-10-05 05:29:23 --> Severity: Notice --> Undefined property: stdClass::$STK_AWALLL D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 712
ERROR - 2021-10-05 05:29:23 --> Severity: Notice --> Undefined property: stdClass::$STK_AKHIRR D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 713
ERROR - 2021-10-05 05:32:38 --> Severity: Notice --> Undefined property: stdClass::$STK_AKHIRR D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 713
ERROR - 2021-10-05 05:32:38 --> Severity: Notice --> Undefined property: stdClass::$STK_AKHIRR D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 713
ERROR - 2021-10-05 05:39:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'STK_AKHIRR
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`' at line 1 - Invalid query: SELECT b.SAL_IDENTS IDENTS, b.SAL_SALIDN, b.SAL_PRODCT, b.SAL_NMPROD, b.SAL_PRICES, FORMAT(b.SAL_QUANTY, 2) SAL_QUANTY, FORMAT(b.SAL_VALUES, 2) SAL_VALUES, d.STK_QNTITY STK_AWALLL, (b.SAL_QUANTY + (d.STK_QNTITY*d.STK_QNTITY) STK_AKHIRR
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
INNER JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_SPGIDN` = `d`.`STK_SPGIDN`
WHERE `b`.`SAL_SALIDN` = '137'
AND `b`.`SAL_PRODCT` = '0000000330'
