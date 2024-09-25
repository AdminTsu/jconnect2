<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-09-28 04:59:50 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-09-28 04:59:51 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-28 04:59:51 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-28 04:59:51 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-28 05:03:10 --> Severity: error --> Exception: Unable to locate the model you have specified: M_spk D:\xampp\htdocs\sdmsys\system\core\Loader.php 344
ERROR - 2021-09-28 05:09:40 --> Severity: Parsing Error --> syntax error, unexpected ',' D:\xampp\htdocs\sdmsys\application\controllers\spg\Pindah_stok.php 664
ERROR - 2021-09-28 05:43:27 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\sdmsys\application\controllers\spg\Pindah_stok.php 1006
ERROR - 2021-09-28 05:46:52 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\sdmsys\application\controllers\spg\Pindah_stok.php 1011
ERROR - 2021-09-28 05:47:03 --> Severity: error --> Exception: Unable to locate the model you have specified: M_spk D:\xampp\htdocs\sdmsys\system\core\Loader.php 344
ERROR - 2021-09-28 05:48:30 --> Severity: error --> Exception: Unable to locate the model you have specified: M_spk D:\xampp\htdocs\sdmsys\system\core\Loader.php 344
ERROR - 2021-09-28 05:48:45 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\sdmsys\application\controllers\spg\Pindah_stok.php 1012
ERROR - 2021-09-28 06:05:45 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\sdmsys\application\controllers\spg\Pindah_stok.php 1050
ERROR - 2021-09-28 08:13:54 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-09-28 08:13:54 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-28 08:13:54 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-28 08:13:55 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-28 08:15:07 --> Severity: error --> Exception: Unable to locate the model you have specified: M_spk D:\xampp\htdocs\sdmsys\system\core\Loader.php 344
ERROR - 2021-09-28 08:16:02 --> Query error: Unknown column 'STK_AWALLL' in 'field list' - Invalid query: SELECT STK_AWALLL stok
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
WHERE `b`.`SAL_SALIDN` IS NULL
ERROR - 2021-09-28 08:17:43 --> Query error: Unknown column 'b.SAL_SALIDN' in 'where clause' - Invalid query: SELECT STK_AWALLL stok
FROM `T_SPG_PDHSTK` `a`
INNER JOIN `T_SPG_PDHSTK_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`PDH_PRODID` = `d`.`STK_PRODID` AND `a`.`PDH_SPGIDN` = `d`.`STK_SPGIDN`
WHERE `b`.`SAL_SALIDN` IS NULL
ERROR - 2021-09-28 08:18:02 --> Query error: Unknown column 'b.PDH_SALIDN' in 'where clause' - Invalid query: SELECT STK_AWALLL stok
FROM `T_SPG_PDHSTK` `a`
INNER JOIN `T_SPG_PDHSTK_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`PDH_PRODID` = `d`.`STK_PRODID` AND `a`.`PDH_SPGIDN` = `d`.`STK_SPGIDN`
WHERE `b`.`PDH_SALIDN` IS NULL
ERROR - 2021-09-28 08:19:04 --> Query error: Unknown column 'a.SAL_IDENTS' in 'on clause' - Invalid query: SELECT STK_AWALLL stok
FROM `T_SPG_PDHSTK` `a`
INNER JOIN `T_SPG_PDHSTK_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`PDH_PRODID` = `d`.`STK_PRODID` AND `a`.`PDH_SPGIDN` = `d`.`STK_SPGIDN`
WHERE `b`.`PDH_PDHIDN` IS NULL
ERROR - 2021-09-28 08:19:39 --> Query error: Unknown column 'b.PDH_PRODCT' in 'on clause' - Invalid query: SELECT STK_AWALLL stok
FROM `T_SPG_PDHSTK` `a`
INNER JOIN `T_SPG_PDHSTK_DETAIL` `b` ON `a`.`PDH_IDENTS` = `b`.`PDH_PDHIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`PDH_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`PDH_PRODID` = `d`.`STK_PRODID` AND `a`.`PDH_SPGIDN` = `d`.`STK_SPGIDN`
WHERE `b`.`PDH_PDHIDN` IS NULL
ERROR - 2021-09-28 08:20:14 --> Severity: Notice --> Undefined property: stdClass::$ttlqty D:\xampp\htdocs\sdmsys\application\controllers\spg\Pindah_stok.php 646
ERROR - 2021-09-28 08:20:14 --> Severity: Notice --> Undefined property: stdClass::$ttlval D:\xampp\htdocs\sdmsys\application\controllers\spg\Pindah_stok.php 647
ERROR - 2021-09-28 08:28:51 --> Query error: Unknown column 'SAL_VALUES' in 'field list' - Invalid query: SELECT STK_AWALLL stok, SUM(PDH_JMLQTY) ttlqty, SUM(SAL_VALUES) ttlval
FROM `T_SPG_PDHSTK` `a`
INNER JOIN `T_SPG_PDHSTK_DETAIL` `b` ON `a`.`PDH_IDENTS` = `b`.`PDH_PDHIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`PDH_PRODID` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`PDH_PRODID` = `d`.`STK_PRODID` AND `a`.`PDH_SPGIDN` = `d`.`STK_SPGIDN`
WHERE `b`.`PDH_PDHIDN` IS NULL
ERROR - 2021-09-28 08:29:44 --> Query error: Unknown column 'SAL_QUANTY' in 'field list' - Invalid query: SELECT SUM(SAL_QUANTY) ttlqty, SUM(PDH_VALUES) ttlval
FROM `T_SPG_PDHSTK` `a`
INNER JOIN `T_SPG_PDHSTK_DETAIL` `b` ON `a`.`PDH_IDENTS` = `b`.`PDH_PDHIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`PDH_PRODID` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`PDH_PRODID` = `d`.`STK_PRODID` AND `a`.`PDH_SPGIDN` = `d`.`STK_SPGIDN`
WHERE `b`.`PDH_PDHIDN` IS NULL
ERROR - 2021-09-28 08:30:30 --> Query error: Unknown column 'PDH_QUANTY' in 'field list' - Invalid query: SELECT SUM(PDH_QUANTY) ttlqty, SUM(PDH_VALUES) ttlval
FROM `T_SPG_PDHSTK` `a`
INNER JOIN `T_SPG_PDHSTK_DETAIL` `b` ON `a`.`PDH_IDENTS` = `b`.`PDH_PDHIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`PDH_PRODID` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`PDH_PRODID` = `d`.`STK_PRODID` AND `a`.`PDH_SPGIDN` = `d`.`STK_SPGIDN`
WHERE `b`.`PDH_PDHIDN` IS NULL
ERROR - 2021-09-28 08:33:57 --> 404 Page Not Found: spg/Sales/getStokSPG
ERROR - 2021-09-28 09:58:22 --> Severity: Warning --> Missing argument 1 for Nosj::getDetail_Project() D:\xampp\htdocs\sdmsys\application\controllers\busdev\Nosj.php 39
ERROR - 2021-09-28 09:58:22 --> Severity: Notice --> Undefined variable: id_project D:\xampp\htdocs\sdmsys\application\controllers\busdev\Nosj.php 40
