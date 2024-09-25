<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-09-16 15:19:32 --> Query error: Unknown column 'a.CTY_NAMESS' in 'field list' - Invalid query: SELECT a.*, b.*, c.COM_DESCRE JNSKLM, d.COM_DESCRE RELIGN, e.COM_DESCRE EDUCTN, f.COM_DESCRE MARRID, g.SPS_NAMESS MNTBDG, CASE WHEN a.PKR_CONTRY = 0 THEN '-' ELSE h.COM_DESCRE END CONTRY, CASE WHEN a.PKR_PROVNC = 0 THEN '-' ELSE i.PRV_NAMESS END PROVNC, CASE WHEN a.PKR_CITYSS = 0 THEN '-' ELSE a.CTY_NAMESS END CITYSS
FROM `T_MAS_PEKRJA` `a`
INNER JOIN `T_MAS_USERSS` `b` ON `a`.`PKR_LOGNID` = `b`.`USR_IDENTS`
LEFT JOIN `T_MAS_COMMON` `c` ON `a`.`PKR_JNSKLM` = `c`.`COM_TYPECD` AND `c`.`COM_HEADCD` = 2
LEFT JOIN `T_MAS_COMMON` `d` ON `a`.`PKR_RELIGN` = `d`.`COM_TYPECD` AND `d`.`COM_HEADCD` = 1
LEFT JOIN `T_MAS_COMMON` `e` ON `a`.`PKR_EDUCID` = `e`.`COM_TYPECD` AND `e`.`COM_HEADCD` = 3
LEFT JOIN `T_MAS_COMMON` `f` ON `a`.`PKR_MARRID` = `f`.`COM_TYPECD` AND `f`.`COM_HEADCD` = 14
LEFT JOIN `T_MAS_SPSLIZ` `g` ON `a`.`PKR_MNTBDG` = `g`.`SPS_IDENTS`
LEFT JOIN `T_MAS_COMMON` `h` ON `a`.`PKR_CONTRY` = `h`.`COM_TYPECD` AND `h`.`COM_HEADCD` = 7
LEFT JOIN `T_MAS_PROVNC` `i` ON `a`.`PKR_PROVNC` = `i`.`PRV_IDENTS`
LEFT JOIN `T_MAS_CITYSS` `j` ON `a`.`PKR_CITYSS` = `j`.`CTY_IDENTS`
WHERE `USR_IDENTS` = '10'
ERROR - 2022-09-16 17:53:51 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 17:53:51 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 17:55:02 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 17:55:02 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 17:55:26 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 17:55:26 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 17:55:44 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 17:55:44 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 17:56:15 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 17:56:15 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 17:56:41 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 17:56:41 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 17:58:17 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 17:58:17 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 17:58:33 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 17:58:33 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:00:12 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:00:12 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:00:31 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:00:31 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:00:59 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:00:59 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:01:22 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:01:22 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:03:00 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:03:00 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:04:32 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:04:32 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:04:50 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:04:50 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:05:21 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:05:21 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:05:37 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:05:37 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:06:00 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:06:00 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:07:37 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:07:37 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:08:17 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:08:17 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:09:15 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:09:15 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:10:01 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:10:01 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:10:30 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
ERROR - 2022-09-16 18:10:30 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 285
