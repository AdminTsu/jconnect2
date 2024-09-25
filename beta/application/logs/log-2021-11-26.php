<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-26 03:36:07 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-11-26 03:36:07 --> 404 Page Not Found: Resources/css
ERROR - 2021-11-26 03:36:07 --> 404 Page Not Found: Resources/css
ERROR - 2021-11-26 04:43:52 --> Severity: Parsing Error --> syntax error, unexpected ',' D:\xampp\htdocs\sdmsys\application\models\M_sales.php 651
ERROR - 2021-11-26 04:46:25 --> Severity: Parsing Error --> syntax error, unexpected '$this' (T_VARIABLE) D:\xampp\htdocs\sdmsys\application\models\M_sales.php 1900
ERROR - 2021-11-26 04:46:53 --> Severity: Parsing Error --> syntax error, unexpected '$this' (T_VARIABLE) D:\xampp\htdocs\sdmsys\application\models\M_sales.php 1900
ERROR - 2021-11-26 04:48:16 --> Query error: Unknown column 'a.id_cabang' in 'where clause' - Invalid query: SELECT c.SPG_NAMESS SPG, d.nama CABANG, e.nama AREA, f.nama CUSTOMER, b.SAL_NMPROD PRODUK, CAST(b.SAL_PRICES AS SIGNED) HARGA, CAST(b.SAL_SELLIN AS SIGNED) SELLIN, CAST(b.SAL_QUANTY AS SIGNED) QTY, CAST(b.SAL_RETURS AS SIGNED) RETUR, ((g.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) STK_AWALLL, a.SAL_TRANSD TGL_PENJUALAN, MONTHNAME(a.SAL_TRANSD) BULAN, YEAR(a.SAL_TRANSD) TAHUN, (b.SAL_PRICES*b.SAL_QUANTY) NILAI, g.STK_QNTITY STK_AKHIRR
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `T_OTC_SPGDAT` `c` ON `a`.`SAL_SPGIDN` = `c`.`SPG_IDENTS`
INNER JOIN `MKT`.`icabang_o` `d` ON `a`.`SAL_CABANG` = `d`.`icabangid_o`
INNER JOIN `MKT`.`iarea_o` `e` ON `a`.`SAL_CABANG` = `e`.`icabangid_o` AND `a`.`SAL_AREASS` = `e`.`areaid_o`
INNER JOIN `MKT`.`iproduk` `f` ON `a`.`SAL_PRODCT` = `f`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `g` ON `b`.`SAL_PRODCT` = `g`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `g`.`STK_CUSTOM`
WHERE `a`.`SAL_TRANSD` BETWEEN '2021-10-01' AND '2021-11-26'
AND `a`.`id_cabang` = '0000000005'
ERROR - 2021-11-26 04:49:03 --> Query error: Unknown column 'a.SAL_PRODCT' in 'on clause' - Invalid query: SELECT c.SPG_NAMESS SPG, d.nama CABANG, e.nama AREA, f.nama CUSTOMER, b.SAL_NMPROD PRODUK, CAST(b.SAL_PRICES AS SIGNED) HARGA, CAST(b.SAL_SELLIN AS SIGNED) SELLIN, CAST(b.SAL_QUANTY AS SIGNED) QTY, CAST(b.SAL_RETURS AS SIGNED) RETUR, ((g.STK_QNTITY + b.SAL_QUANTY) - b.SAL_SELLIN) STK_AWALLL, a.SAL_TRANSD TGL_PENJUALAN, MONTHNAME(a.SAL_TRANSD) BULAN, YEAR(a.SAL_TRANSD) TAHUN, (b.SAL_PRICES*b.SAL_QUANTY) NILAI, g.STK_QNTITY STK_AKHIRR
FROM `T_OTC_SPGSAL` `a`
INNER JOIN `T_OTC_SPGSAL_DETAIL` `b` ON `a`.`SAL_IDENTS` = `b`.`SAL_SALIDN`
INNER JOIN `T_OTC_SPGDAT` `c` ON `a`.`SAL_SPGIDN` = `c`.`SPG_IDENTS`
INNER JOIN `MKT`.`icabang_o` `d` ON `a`.`SAL_CABANG` = `d`.`icabangid_o`
INNER JOIN `MKT`.`iarea_o` `e` ON `a`.`SAL_CABANG` = `e`.`icabangid_o` AND `a`.`SAL_AREASS` = `e`.`areaid_o`
INNER JOIN `MKT`.`iproduk` `f` ON `a`.`SAL_PRODCT` = `f`.`iprodid`
RIGHT JOIN `T_SAL_STKSPG` `g` ON `b`.`SAL_PRODCT` = `g`.`STK_PRODID` AND `a`.`SAL_CUSTOM` = `g`.`STK_CUSTOM`
WHERE `a`.`SAL_TRANSD` BETWEEN '2021-10-01' AND '2021-11-26'
AND `a`.`SAL_AREASS` = '0000000005'
ERROR - 2021-11-26 04:51:55 --> Severity: Notice --> Undefined property: stdClass::$tgl_penjualan D:\xampp\htdocs\sdmsys\application\libraries\Libexcel.php 103
ERROR - 2021-11-26 04:51:55 --> Severity: Notice --> Undefined property: stdClass::$RETURS D:\xampp\htdocs\sdmsys\application\libraries\Libexcel.php 103
ERROR - 2021-11-26 04:51:55 --> Severity: Notice --> Undefined property: stdClass::$tgl_penjualan D:\xampp\htdocs\sdmsys\application\libraries\Libexcel.php 103
ERROR - 2021-11-26 04:51:55 --> Severity: Notice --> Undefined property: stdClass::$RETURS D:\xampp\htdocs\sdmsys\application\libraries\Libexcel.php 103
ERROR - 2021-11-26 04:53:12 --> Severity: Notice --> Undefined property: stdClass::$RETURS D:\xampp\htdocs\sdmsys\application\libraries\Libexcel.php 103
ERROR - 2021-11-26 04:53:12 --> Severity: Notice --> Undefined property: stdClass::$RETURS D:\xampp\htdocs\sdmsys\application\libraries\Libexcel.php 103
ERROR - 2021-11-26 09:26:50 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-11-26 09:26:50 --> 404 Page Not Found: Resources/css
ERROR - 2021-11-26 09:26:50 --> 404 Page Not Found: Resources/css
ERROR - 2021-11-26 09:26:50 --> 404 Page Not Found: Resources/css
