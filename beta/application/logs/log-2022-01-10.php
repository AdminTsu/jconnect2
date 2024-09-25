<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-01-10 02:43:56 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 D:\xampp\htdocs\sdmsys\system\database\drivers\mysqli\mysqli_driver.php 202
ERROR - 2022-01-10 02:43:56 --> Unable to connect to the database
ERROR - 2022-01-10 02:44:55 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2022-01-10 02:44:55 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-10 02:44:55 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-10 04:54:28 --> Severity: Error --> Maximum execution time of 120 seconds exceeded D:\xampp\htdocs\sdmsys\system\database\drivers\mysqli\mysqli_driver.php 305
ERROR - 2022-01-10 04:54:28 --> Severity: Error --> Maximum execution time of 120 seconds exceeded D:\xampp\htdocs\sdmsys\system\libraries\Session\drivers\Session_files_driver.php 168
ERROR - 2022-01-10 04:54:28 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2022-01-10 04:54:29 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-10 04:54:29 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-10 04:56:50 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2022-01-10 04:56:50 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-10 04:56:50 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-10 04:58:30 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2022-01-10 04:58:30 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-10 04:58:30 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-10 04:58:30 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-10 04:58:50 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2022-01-10 04:58:50 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-10 04:58:50 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-10 04:58:50 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-10 07:39:03 --> Query error: Unknown column 'STK_AWALLL' in 'field list' - Invalid query: SELECT *
FROM (SELECT SAL_IDENTS, SAL_SALIDN, SAL_PRODCT, SAL_NMPROD, SAL_PRICES, SAL_QUANTY, SAL_VALUES, STK_AWALLL, STK_AKHIRR, SAL_SELLIN, SAL_RETURS
FROM `T_OTC_SPGSAL_DETAIL`
WHERE `SAL_SALIDN` = '157') a
ORDER BY `SAL_IDENTS`
 LIMIT 50
ERROR - 2022-01-10 08:36:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, `d`.`' at line 3 - Invalid query: SELECT *
FROM (SELECT SAL_IDENTS, SAL_SALIDN, SAL_PRODCT, SAL_NMPROD, SAL_PRICES, SAL_QUANTY, SAL_VALUES, STK_AWALLL, STK_AKHIRR, SAL_SELLIN, SAL_RETURS
FROM (SELECT b.SAL_IDENTS, `b`.`SAL_SALIDN`, `b`.`SAL_PRODCT`, `b`.`SAL_NMPROD`, `b`.`SAL_PRICES`, `b`.`SAL_QUANTY`, `b`.`SAL_VALUES`, IFNULL(((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, `d`.`STK_QNTITY` `STK_AKHIRR`, `b`.`SAL_SELLIN`, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '152' UNION ALL SELECT '' SAL_IDENTS, '' SAL_SALIDN, `STK_PRODID` `SAL_PRODCT`, `nama` `SAL_NMPROD`, `hna` `SAL_PRICES`, '' SAL_QUANTY, '' SAL_VALUES, `STK_QNTITY` `STK_AWALLL`, '' STK_AKHIRR, '' SAL_SELLIN, '' SAL_RETURS
FROM `T_SAL_STKSPG` `a`
INNER JOIN `MKT`.`iproduk` `b` ON `a`.`STK_PRODID` = `b`.`iprodid`
INNER JOIN `T_OTC_SPGSAL` `c` ON `a`.`STK_CUSTOM` = `c`.`SAL_CUSTOM` AND `c`.`SAL_IDENTS` = 152
INNER JOIN `T_OTC_SPGSAL_DETAIL` `d` ON `a`.`STK_PRODID` = `d`.`SAL_PRODCT`
WHERE `d`.`SAL_SALIDN` = '152')a) a
ORDER BY `SAL_IDENTS`
 LIMIT 50
ERROR - 2022-01-10 08:36:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, `d`.`' at line 3 - Invalid query: SELECT *
FROM (SELECT SAL_IDENTS, SAL_SALIDN, SAL_PRODCT, SAL_NMPROD, SAL_PRICES, SAL_QUANTY, SAL_VALUES, STK_AWALLL, STK_AKHIRR, SAL_SELLIN, SAL_RETURS
FROM (SELECT b.SAL_IDENTS, `b`.`SAL_SALIDN`, `b`.`SAL_PRODCT`, `b`.`SAL_NMPROD`, `b`.`SAL_PRICES`, `b`.`SAL_QUANTY`, `b`.`SAL_VALUES`, IFNULL(((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, `d`.`STK_QNTITY` `STK_AKHIRR`, `b`.`SAL_SELLIN`, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '157' UNION ALL SELECT '' SAL_IDENTS, '' SAL_SALIDN, `STK_PRODID` `SAL_PRODCT`, `nama` `SAL_NMPROD`, `hna` `SAL_PRICES`, '' SAL_QUANTY, '' SAL_VALUES, `STK_QNTITY` `STK_AWALLL`, '' STK_AKHIRR, '' SAL_SELLIN, '' SAL_RETURS
FROM `T_SAL_STKSPG` `a`
INNER JOIN `MKT`.`iproduk` `b` ON `a`.`STK_PRODID` = `b`.`iprodid`
INNER JOIN `T_OTC_SPGSAL` `c` ON `a`.`STK_CUSTOM` = `c`.`SAL_CUSTOM` AND `c`.`SAL_IDENTS` = 157
INNER JOIN `T_OTC_SPGSAL_DETAIL` `d` ON `a`.`STK_PRODID` = `d`.`SAL_PRODCT`
WHERE `d`.`SAL_SALIDN` = '157')a) a
ORDER BY `SAL_IDENTS`
 LIMIT 50
ERROR - 2022-01-10 08:36:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, `d`.`' at line 3 - Invalid query: SELECT *
FROM (SELECT SAL_IDENTS, SAL_SALIDN, SAL_PRODCT, SAL_NMPROD, SAL_PRICES, SAL_QUANTY, SAL_VALUES, STK_AWALLL, STK_AKHIRR, SAL_SELLIN, SAL_RETURS
FROM (SELECT b.SAL_IDENTS, `b`.`SAL_SALIDN`, `b`.`SAL_PRODCT`, `b`.`SAL_NMPROD`, `b`.`SAL_PRICES`, `b`.`SAL_QUANTY`, `b`.`SAL_VALUES`, IFNULL(((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, `d`.`STK_QNTITY` `STK_AKHIRR`, `b`.`SAL_SELLIN`, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '158' UNION ALL SELECT '' SAL_IDENTS, '' SAL_SALIDN, `STK_PRODID` `SAL_PRODCT`, `nama` `SAL_NMPROD`, `hna` `SAL_PRICES`, '' SAL_QUANTY, '' SAL_VALUES, `STK_QNTITY` `STK_AWALLL`, '' STK_AKHIRR, '' SAL_SELLIN, '' SAL_RETURS
FROM `T_SAL_STKSPG` `a`
INNER JOIN `MKT`.`iproduk` `b` ON `a`.`STK_PRODID` = `b`.`iprodid`
INNER JOIN `T_OTC_SPGSAL` `c` ON `a`.`STK_CUSTOM` = `c`.`SAL_CUSTOM` AND `c`.`SAL_IDENTS` = 158
INNER JOIN `T_OTC_SPGSAL_DETAIL` `d` ON `a`.`STK_PRODID` = `d`.`SAL_PRODCT`
WHERE `d`.`SAL_SALIDN` = '158')a) a
ORDER BY `SAL_IDENTS`
 LIMIT 50
ERROR - 2022-01-10 14:11:28 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2022-01-10 14:11:28 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-10 14:11:28 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-10 14:11:28 --> 404 Page Not Found: Resources/css
