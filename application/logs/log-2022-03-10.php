<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-03-10 08:48:49 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\lpk\application\views\v_login.php 138
ERROR - 2022-03-10 08:48:49 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-10 08:48:49 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-10 09:04:23 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-10 09:04:24 --> 404 Page Not Found: Resources/img
ERROR - 2022-03-10 09:04:24 --> 404 Page Not Found: Resources/img
ERROR - 2022-03-10 09:08:04 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-10 09:10:58 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-10 09:30:40 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-10 09:30:49 --> Query error: Table 'lpkt.t_mas_users' doesn't exist - Invalid query: SHOW COLUMNS FROM `T_MAS_USERS`
ERROR - 2022-03-10 09:31:24 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-10 10:13:07 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-10 10:56:41 --> Severity: Error --> Call to undefined method User::listBrands() D:\xampp\htdocs\lpk\application\controllers\master\User.php 28
ERROR - 2022-03-10 10:57:10 --> Query error: Unknown column 'a.BRN_PMNAME' in 'on clause' - Invalid query: SELECT *
FROM (SELECT *, b.EMP_NAMESS PMNAME
FROM `T_MAS_BRANDS` `a`
LEFT JOIN `T_HRD_EMPLOY` `b` ON `a`.`BRN_PMNAME` = `b`.`EMP_NOMORS`) a
ORDER BY `BRN_IDENTS`
 LIMIT 20
ERROR - 2022-03-10 10:58:40 --> Severity: Notice --> Undefined property: Nosj::$m_busdev D:\xampp\htdocs\lpk\application\controllers\master\Nosj.php 10
ERROR - 2022-03-10 10:58:40 --> Severity: Error --> Call to a member function getBrandsList() on a non-object D:\xampp\htdocs\lpk\application\controllers\master\Nosj.php 10
ERROR - 2022-03-10 11:00:02 --> Severity: Error --> Call to undefined method M_master::getBrandsList() D:\xampp\htdocs\lpk\application\controllers\master\Nosj.php 10
ERROR - 2022-03-10 11:00:30 --> Query error: Unknown column 'a.USR_LEVELS' in 'on clause' - Invalid query: SELECT *
FROM (SELECT *, b.COM_DESCRE LOGINS
FROM `T_MAS_BRANDS` `a`
LEFT JOIN `T_MAS_COMMON` `b` ON `a`.`USR_LEVELS` = `b`.`COM_TYPECD` AND `b`.`COM_HEADCD` = 4) a
ORDER BY `USR_IDENTS`
 LIMIT 20
ERROR - 2022-03-10 11:22:48 --> Query error: Duplicate column name 'COM_IDENTS' - Invalid query: SELECT *
FROM (SELECT *, b.COM_DESCRE LEVELS, b.COM_DESCRE STATUS
FROM `T_MAS_USERSS` `a`
LEFT JOIN `T_MAS_COMMON` `b` ON `a`.`USR_LEVELS` = `b`.`COM_TYPECD` AND `b`.`COM_HEADCD` = 4
LEFT JOIN `T_MAS_COMMON` `c` ON `a`.`USR_ACTIVE` = `c`.`COM_TYPECD` AND `c`.`COM_HEADCD` = 6) a
ORDER BY `USR_IDENTS`
 LIMIT 20
ERROR - 2022-03-10 11:29:25 --> 404 Page Not Found: Bdv/brands
ERROR - 2022-03-10 11:29:37 --> 404 Page Not Found: Bdv/brands
ERROR - 2022-03-10 11:30:15 --> Query error: Unknown column 'a.BRN_PMNAME' in 'on clause' - Invalid query: SELECT *
FROM (SELECT *, b.EMP_NAMESS PMNAME
FROM `T_MAS_BRANDS` `a`
LEFT JOIN `T_HRD_EMPLOY` `b` ON `a`.`BRN_PMNAME` = `b`.`EMP_NOMORS`) a
ORDER BY `BRN_IDENTS`
 LIMIT 20
ERROR - 2022-03-10 11:33:24 --> Query error: Unknown column 'a.BRN_PMNAME' in 'on clause' - Invalid query: SELECT *
FROM (SELECT *, b.EMP_NAMESS PMNAME
FROM `T_MAS_BRANDS` `a`
LEFT JOIN `T_HRD_EMPLOY` `b` ON `a`.`BRN_PMNAME` = `b`.`EMP_NOMORS`) a
ORDER BY `BRN_IDENTS`
 LIMIT 20
ERROR - 2022-03-10 11:49:06 --> Severity: Error --> Call to undefined method M_master::getComboBrands() D:\xampp\htdocs\lpk\application\controllers\master\User.php 124
ERROR - 2022-03-10 11:54:07 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\lpk\application\models\Crud.php 931
ERROR - 2022-03-10 11:54:07 --> Severity: Warning --> array_search() expects parameter 2 to be array, null given D:\xampp\htdocs\lpk\application\helpers\ginput_helper.php 1183
ERROR - 2022-03-10 11:56:16 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\lpk\application\models\Crud.php 931
ERROR - 2022-03-10 11:56:16 --> Severity: Warning --> array_search() expects parameter 2 to be array, null given D:\xampp\htdocs\lpk\application\helpers\ginput_helper.php 1183
ERROR - 2022-03-10 13:39:57 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\lpk\application\views\v_login.php 138
ERROR - 2022-03-10 13:39:57 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-10 13:39:57 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-10 13:39:57 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-10 13:42:27 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = ''
ERROR - 2022-03-10 13:43:26 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = ''
ERROR - 2022-03-10 13:43:52 --> Severity: Notice --> Undefined property: Home::$usrlevel D:\xampp\htdocs\lpk\application\controllers\Home.php 190
ERROR - 2022-03-10 13:43:52 --> Query error: Table 'lpkt.mas_appmnu' doesn't exist - Invalid query: SELECT DISTINCT a.MNU_APPLIC + a.MNU_NOMORS  as id, MNU_DESCRE text, MNU_PARENT parentid, MNU_ROUTES nilai, MNU_ICONED iconed
FROM `MAS_APPMNU` `a`
INNER JOIN `MAS_USRMNU` `b` ON `a`.`MNU_NOMORS` = `b`.`MNU_MENUCD` AND `a`.`MNU_APPLIC` = `b`.`MNU_APPLIC`
WHERE `MNU_FKUSER` = 'superadmin'
AND `MNU_APPNEW` = 1
AND `MNU_REFERS` <>0
AND `a`.`MNU_APPLIC` = '1098703010'
AND `MNU_PARENT` = '109870301001000000'
AND `a`.`MNU_NOMORS` != '01010000'
ERROR - 2022-03-10 13:45:38 --> Severity: Notice --> Undefined property: Home::$usrlevel D:\xampp\htdocs\lpk\application\controllers\Home.php 190
ERROR - 2022-03-10 13:45:38 --> Query error: Table 'lpkt.mas_appmnu' doesn't exist - Invalid query: SELECT DISTINCT a.MNU_APPLIC + a.MNU_NOMORS  as id, MNU_DESCRE text, MNU_PARENT parentid, MNU_ROUTES nilai, MNU_ICONED iconed
FROM `MAS_APPMNU` `a`
INNER JOIN `MAS_USRMNU` `b` ON `a`.`MNU_NOMORS` = `b`.`MNU_MENUCD` AND `a`.`MNU_APPLIC` = `b`.`MNU_APPLIC`
WHERE `MNU_FKUSER` = 'superadmin'
AND `MNU_APPNEW` = 1
AND `MNU_REFERS` <>0
AND `a`.`MNU_APPLIC` = '1098703010'
AND `MNU_PARENT` = '109870301001000000'
AND `a`.`MNU_NOMORS` != '01010000'
ERROR - 2022-03-10 13:46:53 --> Query error: Unknown column 'B.ORG_ALIASS' in 'field list' - Invalid query: SELECT A.*, B.ORG_IDENTS, B.ORG_DESCRE, B.ORG_ALIASS
FROM `T_MAS_POSISI` `A`
LEFT JOIN `T_MAS_UNTORG` `B` ON `A`.`POS_UNTORG` = `B`.`ORG_IDENTS`
WHERE `POS_IDENTS` = ''
ERROR - 2022-03-10 13:50:47 --> Severity: Notice --> Undefined variable: isAdmin D:\xampp\htdocs\lpk\application\models\M_master.php 22
ERROR - 2022-03-10 13:50:47 --> Severity: Notice --> Undefined variable: isAdmin D:\xampp\htdocs\lpk\application\models\M_master.php 26
ERROR - 2022-03-10 13:50:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `COM_TYPECD` < `IS` `NULL`) a
ORDER BY `USR_IDENTS`
 LIMIT 20' at line 7 - Invalid query: SELECT *
FROM (SELECT a.*, b.COM_DESCRE LEVELS, c.COM_DESCRE STATUS
FROM `T_MAS_USERSS` `a`
LEFT JOIN `T_MAS_COMMON` `b` ON `a`.`USR_LEVELS` = `b`.`COM_TYPECD` AND `b`.`COM_HEADCD` = 4
LEFT JOIN `T_MAS_COMMON` `c` ON `a`.`USR_ACTIVE` = `c`.`COM_TYPECD` AND `c`.`COM_HEADCD` = 6
WHERE `COM_TYPECD` <
AND `COM_TYPECD` < `IS` `NULL`) a
ORDER BY `USR_IDENTS`
 LIMIT 20
ERROR - 2022-03-10 13:51:46 --> Query error: Column 'COM_TYPECD' in where clause is ambiguous - Invalid query: SELECT *
FROM (SELECT a.*, b.COM_DESCRE LEVELS, c.COM_DESCRE STATUS
FROM `T_MAS_USERSS` `a`
LEFT JOIN `T_MAS_COMMON` `b` ON `a`.`USR_LEVELS` = `b`.`COM_TYPECD` AND `b`.`COM_HEADCD` = 4
LEFT JOIN `T_MAS_COMMON` `c` ON `a`.`USR_ACTIVE` = `c`.`COM_TYPECD` AND `c`.`COM_HEADCD` = 6
WHERE `COM_TYPECD` < 99
AND `COM_TYPECD` <= 99) a
ORDER BY `USR_IDENTS`
 LIMIT 20
ERROR - 2022-03-10 13:52:49 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\lpk\application\views\v_login.php 138
ERROR - 2022-03-10 13:52:50 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-10 13:52:50 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-10 13:52:50 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-10 14:23:42 --> Severity: Error --> Call to undefined method Menu::listUsers() D:\xampp\htdocs\lpk\application\controllers\master\Menu.php 29
ERROR - 2022-03-10 14:29:39 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\lpk\application\views\v_login.php 138
ERROR - 2022-03-10 14:29:39 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-10 14:29:39 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-10 14:29:39 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-10 16:44:54 --> 404 Page Not Found: master/Otorisasi/index
ERROR - 2022-03-10 16:45:51 --> Severity: Compile Error --> Cannot redeclare M_master::getMenu_edit() D:\xampp\htdocs\lpk\application\models\M_master.php 84
ERROR - 2022-03-10 16:53:22 --> Query error: Unknown column 'PRV_POSIDN' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.USR_LOGINS, c.MNU_DESCRE, a.PRV_RIGHTS
FROM `T_MAS_PRIACC` `a`
LEFT JOIN `T_MAS_USERSS` `b` ON `a`.`PRV_POSIDN` = `b`.`USR_LOGINS`
LEFT JOIN `T_MAS_MENUSS` `c` ON `a`.`PRV_MNUNOM` = `C`.`MNU_NOMORS`) a
ORDER BY `PRV_POSIDN`, `PRV_MNUNOM`
 LIMIT 20
ERROR - 2022-03-10 16:54:22 --> Query error: Unknown column 'PRV_POSIDN' in 'order clause' - Invalid query: SELECT *
FROM (SELECT b.USR_LOGINS, c.MNU_DESCRE, a.PRV_RIGHTS
FROM `T_MAS_PRIACC` `a`
LEFT JOIN `T_MAS_USERSS` `b` ON `a`.`PRV_POSIDN` = `b`.`USR_LOGINS`
LEFT JOIN `T_MAS_MENUSS` `c` ON `a`.`PRV_MNUNOM` = `C`.`MNU_NOMORS`) a
ORDER BY `PRV_POSIDN`, `PRV_MNUNOM`
 LIMIT 20
ERROR - 2022-03-10 20:09:26 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\lpk\application\views\v_login.php 138
ERROR - 2022-03-10 20:09:26 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-10 20:09:26 --> 404 Page Not Found: Resources/css
