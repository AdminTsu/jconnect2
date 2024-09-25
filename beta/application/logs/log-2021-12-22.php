<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-12-22 03:39:00 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-12-22 03:39:00 --> 404 Page Not Found: Resources/css
ERROR - 2021-12-22 03:39:00 --> 404 Page Not Found: Resources/css
ERROR - 2021-12-22 05:39:16 --> Severity: Parsing Error --> syntax error, unexpected 'echo' (T_ECHO) D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 750
ERROR - 2021-12-22 05:39:21 --> Severity: Parsing Error --> syntax error, unexpected 'echo' (T_ECHO) D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 750
ERROR - 2021-12-22 07:46:01 --> Severity: Warning --> unlink(D:\xampp\htdocs\sdmsys/assets/documents/upload/sales/157/): Permission denied D:\xampp\htdocs\sdmsys\application\controllers\spg\Sales.php 1082
ERROR - 2021-12-22 09:01:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 50' at line 9 - Invalid query: SELECT *
FROM (SELECT b.*, FORMAT(d.STK_QNTITY, 2) STK_AWALL, FORMAT(SAL_SELLIN, 2) SAL_SELLIN, FORMAT(b.SAL_QUANTY, 2) SAL_QUANTY, FORMAT(SAL_RETURS, 2) SAL_RETURS, FORMAT(d.STK_QNTITY, 2) STK_QNTITY, FORMAT(b.SAL_VALUES, 2) SAL_VALUES
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
LEFT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_SPGIDN` = `d`.`STK_SPGIDN`
WHERE `b`.`SAL_SALIDN` = '157') a
ORDER BY FORMAT(d.STK_QNTITY
 LIMIT 50
ERROR - 2021-12-22 09:03:25 --> Query error: Unknown column 'IDENTS' in 'field list' - Invalid query: SELECT *
FROM (SELECT IDENTS, SAL_SALIDN, SAL_PRODCT, SAL_NMPROD, SAL_PRICES, SAL_QUANTY, SAL_VALUES, STK_AWALLL, STK_AKHIRR, SAL_SELLIN, SAL_RETURS
FROM (SELECT b.SAL_IDENTS, `b`.`SAL_SALIDN`, `b`.`SAL_PRODCT`, `b`.`SAL_NMPROD`, `b`.`SAL_PRICES`, `b`.`SAL_QUANTY`, FORMAT(b.SAL_VALUES, 2) SAL_VALUES, ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) STK_AWALLL, `d`.`STK_QNTITY` `STK_AKHIRR`, `b`.`SAL_SELLIN`, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '157' UNION ALL SELECT '' SAL_IDENTS, '' SAL_SALIDN, `STK_PRODID` `SAL_PRODCT`, `nama` `SAL_NMPROD`, `hna` `SAL_PRICES`, '' SAL_QUANTY, '' SAL_VALUES, `STK_QNTITY` `STK_AWALLL`, '' STK_AKHIRR, '' SAL_SELLIN, '' SAL_RETURS
FROM `T_SAL_STKSPG` `a`
INNER JOIN `MKT`.`iproduk` `b` ON `a`.`STK_PRODID` = `b`.`iprodid`
INNER JOIN `T_OTC_SPGSAL` `c` ON `a`.`STK_CUSTOM` = `c`.`SAL_CUSTOM`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `d` ON `a`.`STK_PRODID` = `d`.`SAL_PRODCT`
WHERE `d`.`SAL_SALIDN` = '157')a) a
ORDER BY `IDENTS`
 LIMIT 50
ERROR - 2021-12-22 09:03:36 --> Query error: Unknown column 'IDENTS' in 'field list' - Invalid query: SELECT *
FROM (SELECT IDENTS, SAL_SALIDN, SAL_PRODCT, SAL_NMPROD, SAL_PRICES, SAL_QUANTY, SAL_VALUES, STK_AWALLL, STK_AKHIRR, SAL_SELLIN, SAL_RETURS
FROM (SELECT b.SAL_IDENTS, `b`.`SAL_SALIDN`, `b`.`SAL_PRODCT`, `b`.`SAL_NMPROD`, `b`.`SAL_PRICES`, `b`.`SAL_QUANTY`, FORMAT(b.SAL_VALUES, 2) SAL_VALUES, ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) STK_AWALLL, `d`.`STK_QNTITY` `STK_AKHIRR`, `b`.`SAL_SELLIN`, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '158' UNION ALL SELECT '' SAL_IDENTS, '' SAL_SALIDN, `STK_PRODID` `SAL_PRODCT`, `nama` `SAL_NMPROD`, `hna` `SAL_PRICES`, '' SAL_QUANTY, '' SAL_VALUES, `STK_QNTITY` `STK_AWALLL`, '' STK_AKHIRR, '' SAL_SELLIN, '' SAL_RETURS
FROM `T_SAL_STKSPG` `a`
INNER JOIN `MKT`.`iproduk` `b` ON `a`.`STK_PRODID` = `b`.`iprodid`
INNER JOIN `T_OTC_SPGSAL` `c` ON `a`.`STK_CUSTOM` = `c`.`SAL_CUSTOM`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `d` ON `a`.`STK_PRODID` = `d`.`SAL_PRODCT`
WHERE `d`.`SAL_SALIDN` = '158')a) a
ORDER BY `IDENTS`
 LIMIT 50
