<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-03-17 09:20:19 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\got_it\application\views\v_login.php 138
ERROR - 2022-03-17 09:20:19 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-17 09:20:19 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-17 09:49:30 --> Severity: Notice --> Undefined variable: PRV_IDENTS D:\xampp\htdocs\got_it\application\controllers\master\Province.php 237
ERROR - 2022-03-17 10:07:23 --> 404 Page Not Found: master/City/index
ERROR - 2022-03-17 10:12:30 --> 404 Page Not Found: master/Nosj/getCity_list
ERROR - 2022-03-17 10:17:17 --> Severity: Compile Error --> Cannot redeclare M_master::getProvinceList() D:\xampp\htdocs\got_it\application\models\M_master.php 134
ERROR - 2022-03-17 10:23:32 --> Severity: Parsing Error --> syntax error, unexpected '$optProvinc' (T_VARIABLE) D:\xampp\htdocs\got_it\application\controllers\master\City.php 124
ERROR - 2022-03-17 11:14:01 --> Severity: Notice --> Undefined variable: txtCONTRY D:\xampp\htdocs\got_it\application\controllers\master\City.php 126
ERROR - 2022-03-17 11:14:01 --> Severity: Notice --> Undefined variable: txtCONTRY_DESC D:\xampp\htdocs\got_it\application\controllers\master\City.php 126
ERROR - 2022-03-17 11:14:01 --> Severity: Notice --> Undefined variable: txtPROVNC D:\xampp\htdocs\got_it\application\controllers\master\City.php 134
ERROR - 2022-03-17 11:14:01 --> Severity: Notice --> Undefined variable: txtPROVNC_DESC D:\xampp\htdocs\got_it\application\controllers\master\City.php 134
ERROR - 2022-03-17 11:14:01 --> Severity: Notice --> Undefined variable: disabled_des D:\xampp\htdocs\got_it\application\controllers\master\City.php 151
ERROR - 2022-03-17 11:14:01 --> Severity: Notice --> Undefined variable: disabled_des D:\xampp\htdocs\got_it\application\controllers\master\City.php 152
ERROR - 2022-03-17 11:14:25 --> Severity: Notice --> Undefined variable: txtCONTRY_DESC D:\xampp\htdocs\got_it\application\controllers\master\City.php 126
ERROR - 2022-03-17 11:14:25 --> Severity: Notice --> Undefined variable: txtPROVNC_DESC D:\xampp\htdocs\got_it\application\controllers\master\City.php 134
ERROR - 2022-03-17 11:14:25 --> Severity: Notice --> Undefined variable: disabled_des D:\xampp\htdocs\got_it\application\controllers\master\City.php 151
ERROR - 2022-03-17 11:14:25 --> Severity: Notice --> Undefined variable: disabled_des D:\xampp\htdocs\got_it\application\controllers\master\City.php 152
ERROR - 2022-03-17 11:15:15 --> Severity: Parsing Error --> syntax error, unexpected ''txtPROVNC_DESC'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' D:\xampp\htdocs\got_it\application\controllers\master\City.php 107
ERROR - 2022-03-17 11:15:33 --> Severity: Notice --> Undefined variable: disabled_des D:\xampp\htdocs\got_it\application\controllers\master\City.php 153
ERROR - 2022-03-17 11:15:33 --> Severity: Notice --> Undefined variable: disabled_des D:\xampp\htdocs\got_it\application\controllers\master\City.php 154
ERROR - 2022-03-17 11:18:26 --> Severity: Notice --> Undefined variable: idbrn D:\xampp\htdocs\got_it\application\controllers\master\City.php 282
ERROR - 2022-03-17 11:18:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IS NULL
AND UPPER(PVN_NAMESS) like '%a%'
 LIMIT 20' at line 4 - Invalid query: SELECT PVN_IDENTS as id, PVN_NAMESS as name
FROM T_MAS_PROVNC a
WHERE `PVN_CONTRY` IS NULL
AND  IS NULL
AND UPPER(PVN_NAMESS) like '%a%'
 LIMIT 20
ERROR - 2022-03-17 11:31:45 --> Severity: Notice --> Undefined variable: PRV_IDENTS D:\xampp\htdocs\got_it\application\controllers\master\City.php 329
ERROR - 2022-03-17 13:22:15 --> 404 Page Not Found: master/Nosj/getClient_list
ERROR - 2022-03-17 13:33:10 --> Severity: Compile Error --> Cannot redeclare M_master::getCityList() D:\xampp\htdocs\got_it\application\models\M_master.php 163
ERROR - 2022-03-17 13:35:36 --> Query error: Unknown column 'CTY_IDENTS' in 'order clause' - Invalid query: SELECT *
FROM (SELECT a.*, b.COM_DESCRE CONTRY, c.PVN_NAMESS PROVNC, d.CTY_NAMESS CITY
FROM `T_MAS_CLIENT` `a`
INNER JOIN `T_MAS_COMMON` `b` ON `a`.`CLI_CONTRY` = `b`.`COM_TYPECD` AND `b`.`COM_HEADCD` = 7
INNER JOIN `T_MAS_PROVNC` `c` ON `a`.`CLI_PROVNC` = `c`.`PVN_IDENTS`
INNER JOIN `T_MAS_CITYSS` `d` ON `a`.`CLI_CITYSS` = `d`.`CTY_IDENTS`) a
ORDER BY `CTY_IDENTS`
 LIMIT 20
ERROR - 2022-03-17 13:52:41 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\got_it\application\views\v_login.php 138
ERROR - 2022-03-17 13:52:42 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-17 13:52:42 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-17 14:02:12 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\got_it\application\views\v_login.php 138
ERROR - 2022-03-17 14:02:12 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-17 14:02:12 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-17 14:17:54 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\got_it\application\views\v_login.php 138
ERROR - 2022-03-17 14:17:54 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-17 14:17:54 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-17 14:19:09 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\got_it\application\views\v_login.php 138
ERROR - 2022-03-17 14:19:09 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-17 14:19:09 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-17 14:39:55 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\got_it\application\views\v_login.php 138
ERROR - 2022-03-17 14:39:55 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-17 14:39:55 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-17 14:40:58 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\got_it\application\views\v_login.php 138
ERROR - 2022-03-17 14:40:58 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-17 14:40:58 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-17 14:46:43 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\got_it\application\views\v_login.php 138
ERROR - 2022-03-17 14:46:43 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-17 14:46:43 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-17 14:55:22 --> Severity: Notice --> A non well formed numeric value encountered D:\xampp\htdocs\got_it\application\libraries\Common.php 948
ERROR - 2022-03-17 14:55:22 --> Severity: Warning --> substr() expects parameter 3 to be long, string given D:\xampp\htdocs\got_it\application\libraries\Common.php 945
ERROR - 2022-03-17 14:55:22 --> Severity: Warning --> substr() expects parameter 3 to be long, string given D:\xampp\htdocs\got_it\application\libraries\Common.php 945
ERROR - 2022-03-17 14:55:22 --> Severity: Warning --> substr() expects parameter 3 to be long, string given D:\xampp\htdocs\got_it\application\libraries\Common.php 945
ERROR - 2022-03-17 14:55:22 --> Severity: Warning --> substr() expects parameter 3 to be long, string given D:\xampp\htdocs\got_it\application\libraries\Common.php 945
ERROR - 2022-03-17 14:56:20 --> Severity: Notice --> A non well formed numeric value encountered D:\xampp\htdocs\got_it\application\libraries\Common.php 948
ERROR - 2022-03-17 14:56:20 --> Severity: Warning --> substr() expects parameter 3 to be long, string given D:\xampp\htdocs\got_it\application\libraries\Common.php 945
ERROR - 2022-03-17 14:56:20 --> Severity: Warning --> substr() expects parameter 3 to be long, string given D:\xampp\htdocs\got_it\application\libraries\Common.php 945
ERROR - 2022-03-17 14:56:20 --> Severity: Warning --> substr() expects parameter 3 to be long, string given D:\xampp\htdocs\got_it\application\libraries\Common.php 945
ERROR - 2022-03-17 14:56:20 --> Severity: Warning --> substr() expects parameter 3 to be long, string given D:\xampp\htdocs\got_it\application\libraries\Common.php 945
ERROR - 2022-03-17 15:00:02 --> Severity: Notice --> A non well formed numeric value encountered D:\xampp\htdocs\got_it\application\libraries\Common.php 948
ERROR - 2022-03-17 15:00:02 --> Severity: Warning --> substr() expects parameter 3 to be long, string given D:\xampp\htdocs\got_it\application\libraries\Common.php 945
ERROR - 2022-03-17 15:00:02 --> Severity: Warning --> substr() expects parameter 3 to be long, string given D:\xampp\htdocs\got_it\application\libraries\Common.php 945
ERROR - 2022-03-17 15:00:02 --> Severity: Warning --> substr() expects parameter 3 to be long, string given D:\xampp\htdocs\got_it\application\libraries\Common.php 945
ERROR - 2022-03-17 15:00:02 --> Severity: Warning --> substr() expects parameter 3 to be long, string given D:\xampp\htdocs\got_it\application\libraries\Common.php 945
ERROR - 2022-03-17 15:35:03 --> Severity: Notice --> Undefined variable: ruleNOMKTP D:\xampp\htdocs\got_it\application\controllers\master\User.php 166
ERROR - 2022-03-17 15:35:03 --> Severity: Notice --> Undefined variable: ruleSEXESS D:\xampp\htdocs\got_it\application\controllers\master\User.php 167
ERROR - 2022-03-17 15:35:03 --> Severity: Notice --> Undefined variable: ruleRELIGN D:\xampp\htdocs\got_it\application\controllers\master\User.php 168
ERROR - 2022-03-17 15:35:03 --> Severity: Notice --> Undefined variable: ruleEDUCTN D:\xampp\htdocs\got_it\application\controllers\master\User.php 169
ERROR - 2022-03-17 15:35:03 --> Severity: Notice --> Undefined variable: ruleMARRID D:\xampp\htdocs\got_it\application\controllers\master\User.php 170
ERROR - 2022-03-17 15:36:01 --> Severity: Notice --> Undefined variable: onSuccess D:\xampp\htdocs\got_it\application\controllers\master\User.php 166
ERROR - 2022-03-17 17:01:45 --> Severity: Parsing Error --> syntax error, unexpected ';', expecting ')' D:\xampp\htdocs\got_it\application\controllers\master\User.php 212
ERROR - 2022-03-17 17:02:33 --> Severity: Parsing Error --> syntax error, unexpected ';', expecting ')' D:\xampp\htdocs\got_it\application\controllers\master\User.php 213
ERROR - 2022-03-17 17:02:35 --> Severity: Parsing Error --> syntax error, unexpected ';', expecting ')' D:\xampp\htdocs\got_it\application\controllers\master\User.php 213
