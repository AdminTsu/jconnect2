<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-05 04:44:45 --> Severity: Notice --> Undefined variable: value D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1113
ERROR - 2021-11-05 04:50:11 --> Severity: Notice --> Undefined variable: SAL_PRICES D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1110
ERROR - 2021-11-05 04:50:11 --> Severity: Notice --> Undefined variable: SAL_VALUES D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1110
ERROR - 2021-11-05 08:00:00 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-11-05 08:00:00 --> 404 Page Not Found: Resources/css
ERROR - 2021-11-05 08:00:00 --> 404 Page Not Found: Resources/css
ERROR - 2021-11-05 08:00:00 --> 404 Page Not Found: Resources/css
ERROR - 2021-11-05 08:06:07 --> Query error: The used SELECT statements have a different number of columns - Invalid query: SELECT IDENTS, SAL_SALIDN, SAL_PRODCT, SAL_NMPROD, SAL_PRICES, SAL_QUANTY, SAL_VALUES, STK_AWALLL, STK_AKHIRR, SAL_SELLIN
FROM (SELECT b.SAL_IDENTS IDENTS, `b`.`SAL_SALIDN`, `b`.`SAL_PRODCT`, `b`.`SAL_NMPROD`, `b`.`SAL_PRICES`, `b`.`SAL_QUANTY`, FORMAT(b.SAL_VALUES, 2) SAL_VALUES, ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) STK_AWALLL, `d`.`STK_QNTITY` `STK_AKHIRR`, `b`.`SAL_SELLIN`, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_SPGIDN` = `d`.`STK_SPGIDN` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `a`.`SAL_SPGIDN` =0
AND `a`.`SAL_CUSTOM` =0 UNION ALL SELECT '' IDENTS, '' SAL_SALIDN, `STK_PRODID` `SAL_PRODCT`, `nama` `SAL_NMPROD`, `hna` `SAL_PRICES`, '' SAL_QUANTY, '' SAL_VALUES, `STK_QNTITY` `STK_AWALLL`, '' STK_AKHIRR, '' SAL_SELLIN
FROM `T_SAL_STKSPG` `a`
INNER JOIN `MKT`.`iproduk` `b` ON `a`.`STK_PRODID` = `b`.`iprodid`
WHERE `a`.`STK_SPGIDN` =0
AND `a`.`STK_CUSTOM` =0
AND `a`.`STK_PRODID` = '0000000330') a
ERROR - 2021-11-05 10:06:06 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-11-05 10:06:06 --> 404 Page Not Found: Resources/css
ERROR - 2021-11-05 10:06:06 --> 404 Page Not Found: Resources/css
ERROR - 2021-11-05 10:06:06 --> 404 Page Not Found: Resources/css
ERROR - 2021-11-05 10:37:51 --> Severity: Error --> Maximum execution time of 120 seconds exceeded D:\xampp\htdocs\sdmsys\system\database\drivers\mysqli\mysqli_driver.php 305
ERROR - 2021-11-05 10:40:21 --> Severity: Error --> Maximum execution time of 120 seconds exceeded D:\xampp\htdocs\sdmsys\system\database\drivers\mysqli\mysqli_driver.php 305
ERROR - 2021-11-05 10:57:09 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 10:57:09 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 11:02:54 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 11:02:54 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 15:42:45 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 D:\xampp\htdocs\sdmsys\system\database\drivers\mysqli\mysqli_driver.php 202
ERROR - 2021-11-05 15:42:45 --> Unable to connect to the database
ERROR - 2021-11-05 16:11:04 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-11-05 16:11:04 --> 404 Page Not Found: Resources/css
ERROR - 2021-11-05 16:11:04 --> 404 Page Not Found: Resources/css
ERROR - 2021-11-05 16:11:04 --> 404 Page Not Found: Resources/css
ERROR - 2021-11-05 16:18:12 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:18:12 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:18:55 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:18:55 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:19:54 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:19:54 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:22:24 --> Severity: Warning --> file_get_contents(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/): failed to open stream: No such file or directory D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Shared\OLERead.php 85
ERROR - 2021-11-05 16:22:24 --> Severity: Warning --> fopen(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/): failed to open stream: No such file or directory D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 200
ERROR - 2021-11-05 16:22:24 --> Severity: error --> Exception: Could not open file D:\xampp\htdocs\sdmsys/assets/TARGET/2021/ for reading. D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 202
ERROR - 2021-11-05 16:23:22 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:23:22 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:28:06 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:28:06 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:28:06 --> Severity: Warning --> file_get_contents(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/): failed to open stream: No such file or directory D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Shared\OLERead.php 85
ERROR - 2021-11-05 16:28:06 --> Severity: Warning --> fopen(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/): failed to open stream: No such file or directory D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 200
ERROR - 2021-11-05 16:28:06 --> Severity: error --> Exception: Could not open file D:\xampp\htdocs\sdmsys/assets/TARGET/2021/ for reading. D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 202
ERROR - 2021-11-05 16:28:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\sdmsys\system\core\Exceptions.php:272) D:\xampp\htdocs\sdmsys\system\core\Common.php 573
ERROR - 2021-11-05 16:28:44 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:28:44 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:28:44 --> Severity: Warning --> file_get_contents(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/): failed to open stream: No such file or directory D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Shared\OLERead.php 85
ERROR - 2021-11-05 16:28:44 --> Severity: Warning --> fopen(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/): failed to open stream: No such file or directory D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 200
ERROR - 2021-11-05 16:28:44 --> Severity: error --> Exception: Could not open file D:\xampp\htdocs\sdmsys/assets/TARGET/2021/ for reading. D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 202
ERROR - 2021-11-05 16:28:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\sdmsys\system\core\Exceptions.php:272) D:\xampp\htdocs\sdmsys\system\core\Common.php 573
ERROR - 2021-11-05 16:29:40 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:29:40 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:29:40 --> Severity: Warning --> file_get_contents(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/): failed to open stream: No such file or directory D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Shared\OLERead.php 85
ERROR - 2021-11-05 16:29:40 --> Severity: Warning --> fopen(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/): failed to open stream: No such file or directory D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 200
ERROR - 2021-11-05 16:29:40 --> Severity: error --> Exception: Could not open file D:\xampp\htdocs\sdmsys/assets/TARGET/2021/ for reading. D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 202
ERROR - 2021-11-05 16:29:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\sdmsys\system\core\Exceptions.php:272) D:\xampp\htdocs\sdmsys\system\core\Common.php 573
ERROR - 2021-11-05 16:30:00 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:30:00 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:30:31 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:30:31 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:30:44 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:30:44 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:30:57 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:30:57 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:34:45 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:34:45 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:35:11 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:35:11 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:35:28 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:35:28 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:35:45 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:35:45 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:36:05 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:36:05 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:36:36 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:36:36 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:37:10 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:37:10 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:37:26 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:37:26 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:37:45 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:37:46 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:38:03 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:38:03 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:38:26 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:38:26 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:38:39 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:38:39 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:38:50 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:38:50 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:39:07 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2021-11-05 16:39:07 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
