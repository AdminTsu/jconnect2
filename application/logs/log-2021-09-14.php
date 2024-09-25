<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-09-14 05:14:20 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-09-14 05:14:20 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-14 05:14:20 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-14 05:14:20 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-14 06:24:07 --> Query error: Unknown column 'd.STK_AWALLL' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.*, d.STK_AWALLL, d.STK_AKHIRR
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
INNER JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_SPGIDN` = `d`.`STK_SPGIDN`
WHERE `b`.`SAL_SALIDN` = '3') a
ORDER BY `d`.`STK_AWALLL`
 LIMIT 50
ERROR - 2021-09-14 06:24:46 --> Query error: Unknown column 'd.STK_AWALLL' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.*, d.STK_AWALLL, d.STK_AKHIRR
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
INNER JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_SPGIDN` = `d`.`STK_SPGIDN`
WHERE `b`.`SAL_SALIDN` = '3') a
ORDER BY `d`.`STK_AWALLL`
 LIMIT 50
ERROR - 2021-09-14 06:45:15 --> Query error: Unknown column 'd.STK_AWALLL' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.*, d.STK_AWALLL, d.STK_AKHIRR
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
INNER JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_SPGIDN` = `d`.`STK_SPGIDN`
WHERE `b`.`SAL_SALIDN` = '3') a
ORDER BY `d`.`STK_AWALLL`
 LIMIT 50
ERROR - 2021-09-14 06:45:43 --> Query error: Unknown column 'd.STK_AWALLL' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.*, d.STK_AWALLL, d.STK_AKHIRR
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
INNER JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_SPGIDN` = `d`.`STK_SPGIDN`
WHERE `b`.`SAL_SALIDN` = '3') a
ORDER BY `d`.`STK_AWALLL`
 LIMIT 50
ERROR - 2021-09-14 08:02:53 --> Query error: Unknown column 'd.STK_AWALLL' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.*, d.STK_AWALLL, d.STK_AKHIRR
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
INNER JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_SPGIDN` = `d`.`STK_SPGIDN`
WHERE `b`.`SAL_SALIDN` = '3') a
ORDER BY `d`.`STK_AWALLL`
 LIMIT 50
ERROR - 2021-09-14 08:33:03 --> Query error: Unknown column 'd.STK_AWALLL' in 'order clause' - Invalid query: SELECT *
FROM (SELECT d.STK_AWALLL, d.STK_AKHIRR, b.*
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
INNER JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_SPGIDN` = `d`.`STK_SPGIDN`
WHERE `b`.`SAL_SALIDN` = '3') a
ORDER BY `d`.`STK_AWALLL`
 LIMIT 50
