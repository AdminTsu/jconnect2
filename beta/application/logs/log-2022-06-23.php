<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-06-23 09:03:12 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 928
ERROR - 2022-06-23 09:19:05 --> Query error: Unknown column 'b.APP_STATUS' in 'where clause' - Invalid query: SELECT a.APP_IDENTS IDENTS, a.APP_IDPKRJ IDPKRJ, c.PKR_NAMESS PEKRJA, CONCAT(PKR_TMPLHR, '/', PKR_TGLLHR) TMPTGLLHR, CASE WHEN c.PKR_JNSKLM = 1 THEN 'LAKI-LAKI' ELSE 'PEREMPUAN' END JNSKLM, PKR_FOTOSS FOTOSS, PKR_EXPRNC EXPRNC, PKR_EXPNPT EXPNPT, PKR_EXPBDG EXPBDG, c.PKR_NOMRHP NOMRHP, a.APP_STATUS, PKR_FILECV FILECV, APP_CVIEWS CVIEWS, b.JOB_IDENTS IDJOBS
FROM `T_TRN_APPLYJ` `a`
INNER JOIN `T_TRN_JOBPOS` `b` ON `a`.`APP_IDJOBS` = `b`.`JOB_IDENTS`
INNER JOIN `T_MAS_PEKRJA` `c` ON `a`.`APP_IDPKRJ` = `c`.`PKR_IDENTS`
INNER JOIN `T_MAS_CLIENT` `d` ON `b`.`JOB_COMPNY` = `d`.`CLI_IDENTS`
INNER JOIN `T_MAS_USERSS` `e` ON `c`.`PKR_LOGNID` = `e`.`USR_IDENTS`
WHERE `a`.`APP_IDPKRJ` = '265'
AND `b`.`APP_STATUS` = 1
ORDER BY `a`.`APP_IDPKRJ`
ERROR - 2022-06-23 09:25:29 --> Severity: Error --> Call to undefined method M_job::getKandidatInfo() D:\xampp\htdocs\ji-worker\application\views\v_form_apply.php 11
ERROR - 2022-06-23 09:25:58 --> Severity: Error --> Call to undefined method M_job::getKandidatInfo() D:\xampp\htdocs\ji-worker\application\views\v_form_apply.php 11
ERROR - 2022-06-23 09:25:59 --> Severity: Error --> Call to undefined method M_job::getKandidatInfo() D:\xampp\htdocs\ji-worker\application\views\v_form_apply.php 11
ERROR - 2022-06-23 09:25:59 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:26:00 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:30:46 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:30:46 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:30:46 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:33:36 --> Severity: Parsing Error --> syntax error, unexpected end of file D:\xampp\htdocs\ji-worker\application\views\v_jobs_detail.php 181
ERROR - 2022-06-23 09:33:37 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:34:05 --> Severity: Parsing Error --> syntax error, unexpected end of file D:\xampp\htdocs\ji-worker\application\views\v_jobs_detail.php 181
ERROR - 2022-06-23 09:34:06 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:35:20 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:35:20 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:35:20 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:37:07 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:37:07 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:37:07 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:37:56 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:37:56 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:37:57 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:38:06 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:38:06 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:38:07 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:39:26 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:39:30 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:39:41 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:40:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:40:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:40:16 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:40:34 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:40:35 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:40:35 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:40:37 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-06-23 09:40:38 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 09:40:38 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 09:40:39 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 09:40:54 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 09:40:54 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 09:40:54 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 09:43:20 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:43:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:43:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:43:35 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:43:36 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:43:36 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:43:54 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:43:54 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:43:54 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:44:02 --> Severity: Error --> Call to undefined method M_job::getKandidatInfo() D:\xampp\htdocs\ji-worker\application\views\v_form_apply.php 11
ERROR - 2022-06-23 09:44:10 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:47:37 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:47:37 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:47:37 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:48:12 --> Severity: Notice --> Undefined property: Find_jobs::$datesave D:\xampp\htdocs\ji-worker\application\controllers\Find_jobs.php 175
ERROR - 2022-06-23 09:51:20 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:51:20 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:51:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 09:53:46 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-06-23 09:53:46 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 09:53:46 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 09:53:48 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 10:02:43 --> Query error: Unknown column 'a.JOB_COMPNY' in 'where clause' - Invalid query: SELECT a.APP_IDENTS IDENTS, a.APP_IDPKRJ IDPKRJ, c.PKR_NAMESS PEKRJA, CONCAT(PKR_TMPLHR, '/', PKR_TGLLHR) TMPTGLLHR, CASE WHEN c.PKR_JNSKLM = 1 THEN 'LAKI-LAKI' ELSE 'PEREMPUAN' END JNSKLM, PKR_FOTOSS FOTOSS, PKR_EXPRNC EXPRNC, PKR_EXPNPT EXPNPT, PKR_EXPBDG EXPBDG, c.PKR_NOMRHP NOMRHP, a.APP_STATUS, PKR_FILECV FILECV, APP_CVIEWS CVIEWS, b.JOB_IDENTS IDJOBS
FROM `T_TRN_APPLYJ` `a`
INNER JOIN `T_TRN_JOBPOS` `b` ON `a`.`APP_IDJOBS` = `b`.`JOB_IDENTS`
INNER JOIN `T_MAS_PEKRJA` `c` ON `a`.`APP_IDPKRJ` = `c`.`PKR_IDENTS`
INNER JOIN `T_MAS_CLIENT` `d` ON `b`.`JOB_COMPNY` = `d`.`CLI_IDENTS`
INNER JOIN `T_MAS_USERSS` `e` ON `c`.`PKR_LOGNID` = `e`.`USR_IDENTS`
WHERE `a`.`JOB_COMPNY` = '265'
AND `a`.`APP_STATUS` = 1
ORDER BY `a`.`APP_IDPKRJ`
ERROR - 2022-06-23 10:05:42 --> Query error: Unknown column 'b.CLI_LOGNID' in 'on clause' - Invalid query: SELECT a.APP_IDENTS IDENTS, a.APP_IDPKRJ IDPKRJ, c.PKR_NAMESS PEKRJA, CONCAT(PKR_TMPLHR, '/', PKR_TGLLHR) TMPTGLLHR, CASE WHEN c.PKR_JNSKLM = 1 THEN 'LAKI-LAKI' ELSE 'PEREMPUAN' END JNSKLM, PKR_FOTOSS FOTOSS, PKR_EXPRNC EXPRNC, PKR_EXPNPT EXPNPT, PKR_EXPBDG EXPBDG, c.PKR_NOMRHP NOMRHP, a.APP_STATUS, PKR_FILECV FILECV, APP_CVIEWS CVIEWS, b.JOB_IDENTS IDJOBS
FROM `T_TRN_APPLYJ` `a`
INNER JOIN `T_TRN_JOBPOS` `b` ON `a`.`APP_IDJOBS` = `b`.`JOB_IDENTS`
INNER JOIN `T_MAS_PEKRJA` `c` ON `a`.`APP_IDPKRJ` = `c`.`PKR_IDENTS`
INNER JOIN `T_MAS_CLIENT` `d` ON `b`.`CLI_LOGNID` = `d`.`CLI_IDENTS`
INNER JOIN `T_MAS_USERSS` `e` ON `c`.`PKR_LOGNID` = `e`.`USR_IDENTS`
WHERE `d`.`CLI_LOGNID` = '265'
AND `a`.`APP_STATUS` = 1
ORDER BY `a`.`APP_IDPKRJ`
ERROR - 2022-06-23 10:09:16 --> Severity: Notice --> Undefined index: JOB_STATUS D:\xampp\htdocs\ji-worker\application\controllers\rekanan\Pelamar.php 190
ERROR - 2022-06-23 10:09:16 --> Severity: Notice --> Undefined index: JOB_STATUS D:\xampp\htdocs\ji-worker\application\controllers\rekanan\Pelamar.php 190
ERROR - 2022-06-23 10:09:16 --> Severity: Notice --> Undefined index: JOB_STATUS D:\xampp\htdocs\ji-worker\application\controllers\rekanan\Pelamar.php 260
ERROR - 2022-06-23 10:09:16 --> Severity: Notice --> Undefined index: JOB_STATUS D:\xampp\htdocs\ji-worker\application\controllers\rekanan\Pelamar.php 260
ERROR - 2022-06-23 10:15:37 --> Severity: Notice --> Undefined index: JOB_STATUS D:\xampp\htdocs\ji-worker\application\controllers\rekanan\Pelamar.php 260
ERROR - 2022-06-23 10:15:37 --> Severity: Notice --> Undefined index: JOB_STATUS D:\xampp\htdocs\ji-worker\application\controllers\rekanan\Pelamar.php 260
ERROR - 2022-06-23 10:22:17 --> Severity: Notice --> Undefined variable: idpkrj D:\xampp\htdocs\ji-worker\application\views\v_form_apply.php 104
ERROR - 2022-06-23 10:22:17 --> Severity: Notice --> Undefined variable: fotoss D:\xampp\htdocs\ji-worker\application\views\v_form_apply.php 104
ERROR - 2022-06-23 10:22:17 --> Severity: Notice --> Undefined variable: namapk D:\xampp\htdocs\ji-worker\application\views\v_form_apply.php 107
ERROR - 2022-06-23 10:22:17 --> Severity: Notice --> Undefined variable: expsal D:\xampp\htdocs\ji-worker\application\views\v_form_apply.php 109
ERROR - 2022-06-23 10:22:17 --> Severity: Notice --> Undefined variable: nomrhp D:\xampp\htdocs\ji-worker\application\views\v_form_apply.php 111
ERROR - 2022-06-23 10:22:33 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 928
ERROR - 2022-06-23 10:22:54 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 928
ERROR - 2022-06-23 10:33:56 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-06-23 10:33:57 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 10:33:57 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 10:33:57 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 10:37:30 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 928
ERROR - 2022-06-23 10:37:44 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 928
ERROR - 2022-06-23 10:38:44 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 930
ERROR - 2022-06-23 10:39:01 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 930
ERROR - 2022-06-23 10:39:42 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 930
ERROR - 2022-06-23 10:42:51 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 930
ERROR - 2022-06-23 10:44:49 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 931
ERROR - 2022-06-23 10:46:01 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 934
ERROR - 2022-06-23 10:46:15 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 934
ERROR - 2022-06-23 11:17:13 --> Severity: Notice --> Undefined variable: logoss D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 39
ERROR - 2022-06-23 11:17:13 --> Severity: Notice --> Undefined variable: idents D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 108
ERROR - 2022-06-23 11:17:13 --> Severity: Notice --> Undefined variable: mmbrno D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 561
ERROR - 2022-06-23 11:17:13 --> Severity: Notice --> Undefined variable: addres D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 562
ERROR - 2022-06-23 11:17:13 --> Severity: Notice --> Undefined variable: provnc D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 563
ERROR - 2022-06-23 11:17:13 --> Severity: Notice --> Undefined variable: cityss D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 563
ERROR - 2022-06-23 11:17:13 --> Severity: Notice --> Undefined variable: contry D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 563
ERROR - 2022-06-23 11:17:13 --> Severity: Notice --> Undefined variable: faxnom D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 564
ERROR - 2022-06-23 11:17:13 --> Severity: Notice --> Undefined variable: picnya D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 565
ERROR - 2022-06-23 11:17:13 --> Severity: Notice --> Undefined variable: nomrhp D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 566
ERROR - 2022-06-23 11:17:13 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 904
ERROR - 2022-06-23 11:22:53 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 904
ERROR - 2022-06-23 11:23:32 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 904
ERROR - 2022-06-23 11:24:31 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 904
ERROR - 2022-06-23 11:24:43 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 904
ERROR - 2022-06-23 11:24:56 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect_client.php 904
ERROR - 2022-06-23 11:33:04 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-06-23 11:33:04 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 11:33:04 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 11:34:20 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-06-23 11:34:20 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 11:34:20 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 11:34:26 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-06-23 11:40:27 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-06-23 11:40:28 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 11:40:28 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 11:41:24 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-06-23 11:41:24 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 11:41:24 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 11:42:42 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-06-23 11:42:42 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 11:42:42 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 13:19:05 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 139
ERROR - 2022-06-23 13:19:05 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 13:19:05 --> 404 Page Not Found: Resources/css
ERROR - 2022-06-23 14:04:31 --> 404 Page Not Found: Dashboard/single-blog.html
ERROR - 2022-06-23 14:36:31 --> 404 Page Not Found: Dashboard/site.webmanifest
ERROR - 2022-06-23 14:36:32 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 14:36:32 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 14:36:32 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 16:26:29 --> 404 Page Not Found: Myjconnect_j/index
ERROR - 2022-06-23 16:27:21 --> Severity: Error --> Call to undefined method Dashboard_j::Main_dashboard() D:\xampp\htdocs\ji-worker\application\controllers\Dashboard_J.php 21
ERROR - 2022-06-23 16:28:45 --> 404 Page Not Found: Sitewebmanifest/index
ERROR - 2022-06-23 16:28:45 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 16:28:51 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 16:37:24 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 16:37:25 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 16:37:25 --> 404 Page Not Found: Resources/assets
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: visafl D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 72
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: lvlbhs D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 72
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: magang D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 72
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: sswfil D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 72
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: filecv D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 72
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: mntbid D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 289
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: fotoss D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 337
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: namess D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 346
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: expnpt D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 349
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: nomrhp D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 352
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: emails D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 353
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: level_exp D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 363
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: ket_exp D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 363
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 363
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: nompkr D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 365
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: tmplhr D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 366
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: tgllhr_conv D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 366
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: nomktp D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 367
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: nonpwp D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 368
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: jnsklm D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 369
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: relgin D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 370
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: eductn D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 371
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: marred D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 372
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: addres D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 373
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: addrdo D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 374
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: nomtlp D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 375
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: nomrhp D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 376
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: expnpt D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 385
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: exprnc D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 386
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 387
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: bdlain D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 388
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: visafl D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 391
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: visafl D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 395
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: visafl D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 395
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: lvlbhs D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 399
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: lvlbhs D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 399
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: sswfil D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 403
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: sswfil D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 403
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: magang D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 407
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: magang D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 407
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: mntbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 417
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: bdlain D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 418
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: expsal D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 419
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: filecv D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 422
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: filecv D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 422
ERROR - 2022-06-23 16:42:25 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 1695
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: visafl D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 72
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: lvlbhs D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 72
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: magang D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 72
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: sswfil D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 72
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: filecv D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 72
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: mntbid D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 289
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: fotoss D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 337
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: namess D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 346
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: expnpt D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 349
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: nomrhp D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 352
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: emails D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 353
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: level_exp D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 363
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: ket_exp D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 363
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 363
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: nompkr D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 365
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: tmplhr D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 366
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: tgllhr_conv D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 366
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: nomktp D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 367
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: nonpwp D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 368
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: jnsklm D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 369
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: relgin D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 370
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: eductn D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 371
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: marred D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 372
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: addres D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 373
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: addrdo D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 374
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: nomtlp D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 375
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: nomrhp D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 376
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: expnpt D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 385
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: exprnc D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 386
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 387
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: bdlain D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 388
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: visafl D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 391
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: visafl D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 395
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: visafl D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 395
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: lvlbhs D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 399
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: lvlbhs D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 399
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: sswfil D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 403
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: sswfil D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 403
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: magang D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 407
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: magang D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 407
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: mntbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 417
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: bdlain D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 418
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: expsal D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 419
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: filecv D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 422
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: filecv D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 422
ERROR - 2022-06-23 17:47:46 --> Severity: Notice --> Undefined variable: expbdg D:\xampp\htdocs\ji-worker\application\views\v_myjconnect.php 1695
