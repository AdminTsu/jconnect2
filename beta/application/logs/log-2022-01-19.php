<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-01-19 02:05:40 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2022-01-19 02:05:52 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2022-01-19 02:05:52 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-19 02:05:52 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-19 02:05:56 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2022-01-19 02:05:56 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-19 02:05:56 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-19 02:05:56 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-19 02:06:50 --> Query error: Unknown column 'STK_AKHIRR' in 'field list' - Invalid query: SELECT *
FROM (SELECT SAL_IDENTS, SAL_SALIDN, SAL_PRODCT, SAL_NMPROD, SAL_PRICES, SAL_QUANTY, SAL_VALUES, STK_AWALLL, STK_AKHIRR, SAL_SELLIN, SAL_RETURS
FROM (SELECT b.SAL_IDENTS, `b`.`SAL_SALIDN`, `b`.`SAL_PRODCT`, `b`.`SAL_NMPROD`, `b`.`SAL_PRICES`, `b`.`SAL_QUANTY`, `b`.`SAL_VALUES`, CASE WHEN IFNULL(((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, `d`.`STK_QNTITY` `STK_AKHIRR`, `b`.`SAL_SELLIN`, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '158' UNION ALL SELECT '' SAL_IDENTS, '' SAL_SALIDN, `STK_PRODID` `SAL_PRODCT`, `nama` `SAL_NMPROD`, `hna` `SAL_PRICES`, CASE WHEN IFNULL(SAL_QUANTY, 0) = 0 THEN 0 ELSE SAL_QUANTY END SAL_QUANTY, CASE WHEN IFNULL(SAL_VALUES, 0) = 0 THEN 0 ELSE SAL_VALUES END SAL_VALUES, `STK_QNTITY` `STK_AWALLL`, CASE WHEN IFNULL(STK_AKHIRR, 0) = 0 THEN 0 ELSE STK_AKHIRR END STK_AKHIRR, CASE WHEN IFNULL(SAL_SELLIN, 0) = 0 THEN 0 ELSE SAL_SELLIN END SAL_SELLIN, CASE WHEN IFNULL(SAL_RETURS, 0) = 0 THEN 0 ELSE SAL_RETURS END SAL_RETURS
FROM `T_SAL_STKSPG` `a`
INNER JOIN `MKT`.`iproduk` `b` ON `a`.`STK_PRODID` = `b`.`iprodid`
INNER JOIN `T_OTC_SPGSAL` `c` ON `a`.`STK_CUSTOM` = `c`.`SAL_CUSTOM` AND `c`.`SAL_IDENTS` = 158
INNER JOIN `T_OTC_SPGSAL_DETAIL` `d` ON `a`.`STK_PRODID` = `d`.`SAL_PRODCT`
WHERE `d`.`SAL_SALIDN` = '158')a) a
ORDER BY `SAL_IDENTS`
 LIMIT 50
ERROR - 2022-01-19 02:40:45 --> Query error: Unknown column 'DISTINCT' in 'order clause' - Invalid query: SELECT *
FROM (SELECT DISTINCT SAL_IDENTS, SAL_SALIDN, SAL_PRODCT, SAL_NMPROD, SAL_PRICES, SAL_QUANTY, SAL_VALUES, STK_AWALLL, STK_AKHIRR, SAL_SELLIN, SAL_RETURS
FROM (SELECT b.SAL_IDENTS, `b`.`SAL_SALIDN`, `b`.`SAL_PRODCT`, `b`.`SAL_NMPROD`, `b`.`SAL_PRICES`, `b`.`SAL_QUANTY`, `b`.`SAL_VALUES`, CASE WHEN IFNULL(((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, `d`.`STK_QNTITY` `STK_AKHIRR`, `b`.`SAL_SELLIN`, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '159' UNION ALL SELECT '' SAL_IDENTS, '' SAL_SALIDN, `STK_PRODID` `SAL_PRODCT`, `nama` `SAL_NMPROD`, `hna` `SAL_PRICES`, CASE WHEN IFNULL(SAL_QUANTY, 0) = 0 THEN 0 ELSE SAL_QUANTY END SAL_QUANTY, CASE WHEN IFNULL(SAL_VALUES, 0) = 0 THEN 0 ELSE SAL_VALUES END SAL_VALUES, `STK_QNTITY` `STK_AWALLL`, CASE WHEN IFNULL(STK_QNTITY, 0) = 0 THEN 0 ELSE STK_QNTITY END STK_AKHIRR, CASE WHEN IFNULL(SAL_SELLIN, 0) = 0 THEN 0 ELSE SAL_SELLIN END SAL_SELLIN, CASE WHEN IFNULL(SAL_RETURS, 0) = 0 THEN 0 ELSE SAL_RETURS END SAL_RETURS
FROM `T_SAL_STKSPG` `a`
INNER JOIN `MKT`.`iproduk` `b` ON `a`.`STK_PRODID` = `b`.`iprodid`
INNER JOIN `T_OTC_SPGSAL` `c` ON `a`.`STK_CUSTOM` = `c`.`SAL_CUSTOM` AND `c`.`SAL_IDENTS` = 159
INNER JOIN `T_OTC_SPGSAL_DETAIL` `d` ON `a`.`STK_PRODID` = `d`.`SAL_PRODCT`
WHERE `d`.`SAL_SALIDN` = '159')a) a
ORDER BY `DISTINCT`
 LIMIT 50
ERROR - 2022-01-19 02:52:13 --> Query error: Unknown column 'DISTINCT' in 'order clause' - Invalid query: SELECT *
FROM (SELECT DISTINCT SAL_IDENTS, SAL_SALIDN, SAL_PRODCT, SAL_NMPROD, SAL_PRICES, SAL_QUANTY, SAL_VALUES, STK_AWALLL, STK_AKHIRR, SAL_SELLIN, SAL_RETURS
FROM (SELECT b.SAL_IDENTS, `b`.`SAL_SALIDN`, `b`.`SAL_PRODCT`, `b`.`SAL_NMPROD`, `b`.`SAL_PRICES`, `b`.`SAL_QUANTY`, `b`.`SAL_VALUES`, CASE WHEN IFNULL(((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, `d`.`STK_QNTITY` `STK_AKHIRR`, `b`.`SAL_SELLIN`, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '159' UNION ALL SELECT '' SAL_IDENTS, '' SAL_SALIDN, `STK_PRODID` `SAL_PRODCT`, `nama` `SAL_NMPROD`, `hna` `SAL_PRICES`, CASE WHEN IFNULL(SAL_QUANTY, 0) = 0 THEN 0 ELSE SAL_QUANTY END SAL_QUANTY, CASE WHEN IFNULL(SAL_VALUES, 0) = 0 THEN 0 ELSE SAL_VALUES END SAL_VALUES, CASE WHEN IFNULL(((a.STK_QNTITY + d.SAL_QUANTY) - d.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((a.STK_QNTITY + d.SAL_QUANTY) - d.SAL_SELLIN)END STK_AWALLL, CASE WHEN IFNULL(STK_QNTITY, 0) = 0 THEN 0 ELSE STK_QNTITY END STK_AKHIRR, CASE WHEN IFNULL(SAL_SELLIN, 0) = 0 THEN 0 ELSE SAL_SELLIN END SAL_SELLIN, CASE WHEN IFNULL(SAL_RETURS, 0) = 0 THEN 0 ELSE SAL_RETURS END SAL_RETURS
FROM `T_SAL_STKSPG` `a`
INNER JOIN `MKT`.`iproduk` `b` ON `a`.`STK_PRODID` = `b`.`iprodid`
INNER JOIN `T_OTC_SPGSAL` `c` ON `a`.`STK_CUSTOM` = `c`.`SAL_CUSTOM` AND `c`.`SAL_IDENTS` = 159
INNER JOIN `T_OTC_SPGSAL_DETAIL` `d` ON `a`.`STK_PRODID` = `d`.`SAL_PRODCT`
WHERE `d`.`SAL_SALIDN` = '159')a) a
ORDER BY `DISTINCT`
 LIMIT 50
ERROR - 2022-01-19 02:53:09 --> Query error: Unknown column 'DISTINCT' in 'order clause' - Invalid query: SELECT *
FROM (SELECT DISTINCT SAL_IDENTS, SAL_SALIDN, SAL_PRODCT, SAL_NMPROD, SAL_PRICES, SAL_QUANTY, SAL_VALUES, STK_AWALLL, STK_AKHIRR, SAL_SELLIN, SAL_RETURS
FROM (SELECT b.SAL_IDENTS, `b`.`SAL_SALIDN`, `b`.`SAL_PRODCT`, `b`.`SAL_NMPROD`, `b`.`SAL_PRICES`, `b`.`SAL_QUANTY`, `b`.`SAL_VALUES`, CASE WHEN IFNULL(((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, `d`.`STK_QNTITY` `STK_AKHIRR`, `b`.`SAL_SELLIN`, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '157' UNION ALL SELECT '' SAL_IDENTS, '' SAL_SALIDN, `STK_PRODID` `SAL_PRODCT`, `nama` `SAL_NMPROD`, `hna` `SAL_PRICES`, CASE WHEN IFNULL(SAL_QUANTY, 0) = 0 THEN 0 ELSE SAL_QUANTY END SAL_QUANTY, CASE WHEN IFNULL(SAL_VALUES, 0) = 0 THEN 0 ELSE SAL_VALUES END SAL_VALUES, CASE WHEN IFNULL(((a.STK_QNTITY + d.SAL_QUANTY) - d.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((a.STK_QNTITY + d.SAL_QUANTY) - d.SAL_SELLIN)END STK_AWALLL, CASE WHEN IFNULL(STK_QNTITY, 0) = 0 THEN 0 ELSE STK_QNTITY END STK_AKHIRR, CASE WHEN IFNULL(SAL_SELLIN, 0) = 0 THEN 0 ELSE SAL_SELLIN END SAL_SELLIN, CASE WHEN IFNULL(SAL_RETURS, 0) = 0 THEN 0 ELSE SAL_RETURS END SAL_RETURS
FROM `T_SAL_STKSPG` `a`
INNER JOIN `MKT`.`iproduk` `b` ON `a`.`STK_PRODID` = `b`.`iprodid`
INNER JOIN `T_OTC_SPGSAL` `c` ON `a`.`STK_CUSTOM` = `c`.`SAL_CUSTOM` AND `c`.`SAL_IDENTS` = 157
INNER JOIN `T_OTC_SPGSAL_DETAIL` `d` ON `a`.`STK_PRODID` = `d`.`SAL_PRODCT`
WHERE `d`.`SAL_SALIDN` = '157')a) a
ORDER BY `DISTINCT`
 LIMIT 50
ERROR - 2022-01-19 02:54:42 --> Query error: Unknown column 'b.SAL_IDENTS' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.SAL_IDENTS, b.SAL_SALIDN, b.SAL_PRODCT, b.SAL_NMPROD, b.SAL_PRICES, b.SAL_QUANTY, b.SAL_VALUES, CASE WHEN IFNULL(((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, d.STK_QNTITY STK_AKHIRR, b.SAL_SELLIN, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '157') a
ORDER BY `b`.`SAL_IDENTS`
 LIMIT 50
ERROR - 2022-01-19 02:55:15 --> Query error: Unknown column 'b.SAL_IDENTS' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.SAL_IDENTS, b.SAL_SALIDN, b.SAL_PRODCT, b.SAL_NMPROD, b.SAL_PRICES, b.SAL_QUANTY, b.SAL_VALUES, CASE WHEN IFNULL(((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, d.STK_QNTITY STK_AKHIRR, b.SAL_SELLIN, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '159') a
ORDER BY `b`.`SAL_IDENTS`
 LIMIT 50
ERROR - 2022-01-19 02:55:33 --> Query error: Unknown column 'b.SAL_IDENTS' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.SAL_IDENTS, b.SAL_SALIDN, b.SAL_PRODCT, b.SAL_NMPROD, b.SAL_PRICES, b.SAL_QUANTY, b.SAL_VALUES, CASE WHEN IFNULL(((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, d.STK_QNTITY STK_AKHIRR, b.SAL_SELLIN, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '158') a
ORDER BY `b`.`SAL_IDENTS`
 LIMIT 50
ERROR - 2022-01-19 02:56:21 --> Query error: Unknown column 'b.SAL_IDENTS' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.SAL_IDENTS, b.SAL_SALIDN, b.SAL_PRODCT, b.SAL_NMPROD, b.SAL_PRICES, b.SAL_QUANTY, b.SAL_VALUES, CASE WHEN IFNULL(((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, d.STK_QNTITY STK_AKHIRR, b.SAL_SELLIN, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '159') a
ORDER BY `b`.`SAL_IDENTS`
 LIMIT 50
ERROR - 2022-01-19 02:58:00 --> Query error: Unknown column 'b.SAL_IDENTS' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.SAL_IDENTS, b.SAL_SALIDN, b.SAL_PRODCT, b.SAL_NMPROD, b.SAL_PRICES, b.SAL_QUANTY, b.SAL_VALUES, CASE WHEN IFNULL(((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, d.STK_QNTITY STK_AKHIRR, b.SAL_SELLIN, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '158') a
ORDER BY `b`.`SAL_IDENTS`
 LIMIT 50
ERROR - 2022-01-19 02:58:33 --> Query error: Column 'SAL_IDENTS' in field list is ambiguous - Invalid query: SELECT *
FROM (SELECT SAL_IDENTS, b.SAL_SALIDN, b.SAL_PRODCT, b.SAL_NMPROD, b.SAL_PRICES, b.SAL_QUANTY, b.SAL_VALUES, CASE WHEN IFNULL(((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, d.STK_QNTITY STK_AKHIRR, b.SAL_SELLIN, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '159') a
ORDER BY `SAL_IDENTS`
 LIMIT 50
ERROR - 2022-01-19 02:58:58 --> Query error: Unknown column 'b.SAL_IDENTS' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.SAL_IDENTS, b.SAL_SALIDN, b.SAL_PRODCT, b.SAL_NMPROD, b.SAL_PRICES, b.SAL_QUANTY, b.SAL_VALUES, CASE WHEN IFNULL(((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, d.STK_QNTITY STK_AKHIRR, b.SAL_SELLIN, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '158') a
ORDER BY `b`.`SAL_IDENTS`
 LIMIT 50
ERROR - 2022-01-19 03:00:03 --> Query error: Unknown column 'b.SAL_IDENTS' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.SAL_IDENTS, b.SAL_SALIDN, b.SAL_PRODCT, b.SAL_NMPROD, b.SAL_PRICES, b.SAL_QUANTY, b.SAL_VALUES, CASE WHEN IFNULL(((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, d.STK_QNTITY STK_AKHIRR, b.SAL_SELLIN, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '159') a
ORDER BY `b`.`SAL_IDENTS`
 LIMIT 50
ERROR - 2022-01-19 03:00:51 --> Query error: Unknown column 'b.SAL_IDENTS' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.SAL_IDENTS, b.SAL_SALIDN, b.SAL_PRODCT, b.SAL_NMPROD, b.SAL_PRICES, b.SAL_QUANTY, b.SAL_VALUES, CASE WHEN IFNULL(((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN), 0) = 0 THEN 0 ELSE ((d.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) END STK_AWALLL, d.STK_QNTITY STK_AKHIRR, b.SAL_SELLIN, b.SAL_RETURS
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `MKT`.`iproduk` `c` ON `b`.`SAL_PRODCT` = `c`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `d` ON `b`.`SAL_PRODCT` = `d`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `d`.`STK_CUSTOM`
WHERE `b`.`SAL_SALIDN` = '158') a
ORDER BY `b`.`SAL_IDENTS`
 LIMIT 50
ERROR - 2022-01-19 03:01:39 --> Query error: Table 'sdmsys.sql1' doesn't exist - Invalid query: SELECT *
FROM (SELECT SAL_IDENTS, SAL_SALIDN, SAL_PRODCT, SAL_NMPROD, SAL_PRICES, SAL_QUANTY, SAL_VALUES, STK_AWALLL, STK_AKHIRR, SAL_SELLIN, SAL_RETURS
FROM `sql1` `a`) a
ORDER BY `SAL_IDENTS`
 LIMIT 50
ERROR - 2022-01-19 03:02:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'a) a
ORDER BY `SAL_IDENTS`
 LIMIT 50' at line 3 - Invalid query: SELECT *
FROM (SELECT SAL_IDENTS, SAL_SALIDN, SAL_PRODCT, SAL_NMPROD, SAL_PRICES, SAL_QUANTY, SAL_VALUES, STK_AWALLL, STK_AKHIRR, SAL_SELLIN, SAL_RETURS
FROM (sql1) a) a
ORDER BY `SAL_IDENTS`
 LIMIT 50
ERROR - 2022-01-19 15:53:51 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2022-01-19 15:53:52 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-19 15:53:52 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-19 15:53:52 --> 404 Page Not Found: Resources/css
