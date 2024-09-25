<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-09-22 04:12:11 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-09-22 04:12:11 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 04:12:11 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 04:12:12 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 05:00:37 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-09-22 05:00:37 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 05:00:37 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 05:00:38 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 05:00:47 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-09-22 05:00:47 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 05:00:47 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 05:00:48 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 05:01:02 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-09-22 05:01:02 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 05:01:02 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 05:01:03 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 05:11:47 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-09-22 05:11:47 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 05:11:47 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 05:12:20 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-09-22 05:12:20 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 05:12:20 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 05:13:10 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-09-22 05:13:10 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 05:13:10 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 06:08:48 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-09-22 06:08:48 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 06:08:48 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 06:13:18 --> 404 Page Not Found: Resources/img
ERROR - 2021-09-22 06:13:18 --> 404 Page Not Found: Resources/img
ERROR - 2021-09-22 06:18:41 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-09-22 06:18:41 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 06:18:41 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 06:32:34 --> 404 Page Not Found: Spk/index
ERROR - 2021-09-22 06:34:55 --> Severity: Error --> Maximum execution time of 120 seconds exceeded D:\xampp\htdocs\sdmsys\system\database\drivers\mysqli\mysqli_driver.php 305
ERROR - 2021-09-22 06:34:55 --> Severity: Error --> Maximum execution time of 120 seconds exceeded D:\xampp\htdocs\sdmsys\system\libraries\Session\drivers\Session_files_driver.php 168
ERROR - 2021-09-22 06:35:00 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-09-22 06:35:00 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 06:35:00 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 06:37:21 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-09-22 06:37:21 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 06:37:21 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 06:47:15 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-09-22 06:47:15 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 06:47:15 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 07:49:57 --> 404 Page Not Found: spg/Nosj/getPindahStokSPG
ERROR - 2021-09-22 09:10:39 --> Query error: Unknown column 'a.PDH_CABANG' in 'field list' - Invalid query: SELECT *
FROM (SELECT a.PDH_IDENTS, a.PDH_NUMBER, a.PDH_TRANSD, a.PDH_SPGIDN, a.PDH_CABANG, a.PDH_CUSTOM, b.SPG_NAMESS SPG, c.nama CABANG, e.nama CUSTOMER
FROM `T_SPG_PDHSTK` `a`
INNER JOIN `T_OTC_SPGDAT` `b` ON `a`.`PDH_SPGIDN` = `b`.`SPG_IDENTS`
INNER JOIN `MKT`.`icabang_o` `c` ON `a`.`PDH_CABANG` = `c`.`icabangid_o`
INNER JOIN `MKT`.`icust_o` `e` ON `a`.`PDH_CABANG` = `e`.`icabangid_o` AND `a`.`PDH_CUSTOM` = `e`.`icustid_o`) a
ORDER BY `a`.`PDH_IDENTS`, `a`.`PDH_CABANG`
 LIMIT 22
ERROR - 2021-09-22 09:33:24 --> Severity: Error --> Call to undefined method M_sales::getProdukStok() D:\xampp\htdocs\sdmsys\application\controllers\spg\Pindah_stok.php 362
ERROR - 2021-09-22 09:35:50 --> Query error: Unknown column 'a.PDH_PRODCT' in 'on clause' - Invalid query: SELECT iprodid, nama, hna, satuan
FROM `T_SAL_STKSPG` `a`
INNER JOIN `MKT`.`iproduk` `b` ON `a`.`PDH_PRODCT` = `b`.`iprodid`
WHERE IFNULL(otc_sal_seq ,'') <> '' AND `divprodid` = 'OTC'
ORDER BY `otc_sal_seq`
ERROR - 2021-09-22 09:42:28 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-09-22 09:42:28 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 09:42:28 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 09:42:28 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 09:42:57 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 09:42:57 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 09:42:57 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 09:50:31 --> Severity: Notice --> Undefined variable: optALOKAS D:\xampp\htdocs\sdmsys\application\controllers\spg\Pindah_stok.php 343
ERROR - 2021-09-22 09:50:31 --> Severity: Warning --> array_search() expects parameter 2 to be array, null given D:\xampp\htdocs\sdmsys\application\helpers\ginput_helper.php 1183
ERROR - 2021-09-22 09:50:31 --> Severity: Warning --> array_search() expects parameter 2 to be array, null given D:\xampp\htdocs\sdmsys\application\helpers\ginput_helper.php 1183
ERROR - 2021-09-22 09:50:31 --> Severity: Warning --> array_search() expects parameter 2 to be array, null given D:\xampp\htdocs\sdmsys\application\helpers\ginput_helper.php 1183
ERROR - 2021-09-22 09:50:31 --> Severity: Warning --> array_search() expects parameter 2 to be array, null given D:\xampp\htdocs\sdmsys\application\helpers\ginput_helper.php 1183
ERROR - 2021-09-22 14:55:21 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-09-22 14:55:21 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 14:55:21 --> 404 Page Not Found: Resources/css
ERROR - 2021-09-22 14:55:21 --> 404 Page Not Found: Resources/css
