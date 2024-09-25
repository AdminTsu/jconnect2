<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-01-18 01:54:57 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2022-01-18 01:54:57 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-18 01:54:57 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-18 01:54:57 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-18 04:25:03 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2022-01-18 04:25:06 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2022-01-18 04:25:06 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-18 04:25:06 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-18 04:25:06 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-18 04:38:22 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 D:\xampp\htdocs\sdmsys\system\database\drivers\mysqli\mysqli_driver.php 202
ERROR - 2022-01-18 04:38:22 --> Unable to connect to the database
ERROR - 2022-01-18 05:19:01 --> Severity: Parsing Error --> syntax error, unexpected '.26' (T_DNUMBER), expecting ',' or ';' D:\xampp\htdocs\sdmsys\application\models\M_sales.php 9134
ERROR - 2022-01-18 05:19:01 --> Severity: Parsing Error --> syntax error, unexpected '.26' (T_DNUMBER), expecting ',' or ';' D:\xampp\htdocs\sdmsys\application\models\M_sales.php 9134
ERROR - 2022-01-18 05:19:03 --> Severity: Parsing Error --> syntax error, unexpected '.26' (T_DNUMBER), expecting ',' or ';' D:\xampp\htdocs\sdmsys\application\models\M_sales.php 9134
ERROR - 2022-01-18 05:32:34 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 D:\xampp\htdocs\sdmsys\system\database\drivers\mysqli\mysqli_driver.php 202
ERROR - 2022-01-18 05:32:34 --> Unable to connect to the database
ERROR - 2022-01-18 05:45:35 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2022-01-18 11:44:58 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2022-01-18 11:44:58 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-18 11:44:58 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-18 11:53:28 --> Query error: Unknown column 'STK_AKHIRR' in 'field list' - Invalid query: SELECT *
FROM (SELECT SAL_IDENTS, SAL_SALIDN, SAL_PRODCT, SAL_NMPROD, SAL_PRICES, SAL_QUANTY, SAL_VALUES, STK_AWALLL, STK_AKHIRR, SAL_SELLIN, SAL_RETURS
FROM (SELECT b.SAL_IDENTS, `b`.`SAL_SALIDN`, `b`.`SAL_PRODCT`, `b`.`SAL_NMPROD`, `b`.`SAL_PRICES`, `b`.`SAL_QUANTY`, `b`.`SAL_VALUES`, CASE WHEN IFNULL(((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, `d`.`STK_QNTITY` `STK_AKHIRR`, `b`.`SAL_SELLIN`, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '159' UNION ALL SELECT '' SAL_IDENTS, '' SAL_SALIDN, `STK_PRODID` `SAL_PRODCT`, `nama` `SAL_NMPROD`, `hna` `SAL_PRICES`, CASE WHEN IFNULL(SAL_QUANTY, 0) = 0 THEN 0 ELSE SAL_QUANTY END SAL_QUANTY, CASE WHEN IFNULL(SAL_VALUES, 0) = 0 THEN 0 ELSE SAL_VALUES END SAL_VALUES, `STK_QNTITY` `STK_AWALLL`, CASE WHEN IFNULL(STK_AKHIRR, 0) = 0 THEN 0 ELSE STK_AKHIRR END STK_AKHIRR, CASE WHEN IFNULL(SAL_SELLIN, 0) = 0 THEN 0 ELSE SAL_SELLIN END SAL_SELLIN, CASE WHEN IFNULL(SAL_RETURS, 0) = 0 THEN 0 ELSE SAL_RETURS END SAL_RETURS
FROM `T_SAL_STKSPG` `a`
INNER JOIN `MKT`.`iproduk` `b` ON `a`.`STK_PRODID` = `b`.`iprodid`
INNER JOIN `T_OTC_SPGSAL` `c` ON `a`.`STK_CUSTOM` = `c`.`SAL_CUSTOM` AND `c`.`SAL_IDENTS` = 159
INNER JOIN `T_OTC_SPGSAL_DETAIL` `d` ON `a`.`STK_PRODID` = `d`.`SAL_PRODCT`
WHERE `d`.`SAL_SALIDN` = '159')a) a
ORDER BY `SAL_IDENTS`
 LIMIT 50
