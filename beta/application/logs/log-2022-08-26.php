<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-08-26 09:20:23 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_findjobs.php 326
ERROR - 2022-08-26 09:20:23 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_findjobs.php 326
ERROR - 2022-08-26 09:22:00 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_findjobs.php 326
ERROR - 2022-08-26 09:22:00 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_findjobs.php 326
ERROR - 2022-08-26 09:25:51 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_findjobs.php 328
ERROR - 2022-08-26 09:25:51 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_findjobs.php 328
ERROR - 2022-08-26 09:25:51 --> Severity: Notice --> Undefined variable: idents D:\xampp\htdocs\jconnect\application\views\v_list_job.php 16
ERROR - 2022-08-26 09:26:55 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_findjobs.php 328
ERROR - 2022-08-26 09:26:55 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_findjobs.php 328
ERROR - 2022-08-26 09:29:25 --> Severity: Notice --> Undefined property: Find_jobs::$datesave D:\xampp\htdocs\jconnect\application\controllers\Find_jobs.php 208
ERROR - 2022-08-26 09:32:37 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 288
ERROR - 2022-08-26 09:32:37 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 288
ERROR - 2022-08-26 09:35:40 --> 404 Page Not Found: Sitewebmanifest/index
ERROR - 2022-08-26 09:35:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 09:35:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 09:35:40 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 09:35:58 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\jconnect\application\views\v_login.php 138
ERROR - 2022-08-26 09:35:58 --> 404 Page Not Found: Resources/css
ERROR - 2022-08-26 09:35:58 --> 404 Page Not Found: Resources/css
ERROR - 2022-08-26 09:35:59 --> 404 Page Not Found: Resources/css
ERROR - 2022-08-26 09:37:17 --> 404 Page Not Found: Resources/css
ERROR - 2022-08-26 09:37:17 --> 404 Page Not Found: Resources/css
ERROR - 2022-08-26 09:37:18 --> 404 Page Not Found: Resources/css
ERROR - 2022-08-26 09:37:47 --> 404 Page Not Found: Resources/css
ERROR - 2022-08-26 09:37:47 --> 404 Page Not Found: Resources/css
ERROR - 2022-08-26 09:37:47 --> 404 Page Not Found: Resources/css
ERROR - 2022-08-26 09:38:44 --> 404 Page Not Found: Resources/css
ERROR - 2022-08-26 09:38:44 --> 404 Page Not Found: Resources/css
ERROR - 2022-08-26 09:38:45 --> 404 Page Not Found: Resources/css
ERROR - 2022-08-26 09:40:01 --> 404 Page Not Found: Resources/css
ERROR - 2022-08-26 09:46:36 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 288
ERROR - 2022-08-26 09:46:36 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 288
ERROR - 2022-08-26 10:36:23 --> Query error: Operand should contain 1 column(s) - Invalid query: SELECT DISTINCT id, name
FROM (SELECT PKR_IDENTS as id, PKR_NAMESS as name
FROM `T_MAS_PEKRJA` `a`
LEFT JOIN `T_TRN_APPLYJ` `b` ON `a`.`PKR_IDENTS` = `b`.`APP_IDPKRJ`
WHERE a.PKR_IDENTS NOT IN(SELECT REC_JOBPOS, REC_PKRJID
FROM `T_TRN_RCRUIT` `a`
INNER JOIN `T_TRN_RCRUIT_DETAIL` `b` ON `a`.`REC_IDENTS` = `b`.`REC_FIDENT`
WHERE `PKR_ACTIVE` = 1
AND `APP_IDJOBS` = '1'
AND `REC_JOBPOS` = '1')) a
WHERE UPPER(name) like '%kiki%'
 LIMIT 20
ERROR - 2022-08-26 10:40:20 --> Query error: Operand should contain 1 column(s) - Invalid query: SELECT DISTINCT id, name
FROM (SELECT PKR_IDENTS as id, PKR_NAMESS as name
FROM `T_MAS_PEKRJA` `a`
INNER JOIN `T_TRN_APPLYJ` `b` ON `a`.`PKR_IDENTS` = `b`.`APP_IDPKRJ`
WHERE a.PKR_IDENTS NOT IN (SELECT REC_JOBPOS, REC_PKRJID
FROM `T_TRN_RCRUIT` `a`
INNER JOIN `T_TRN_RCRUIT_DETAIL` `b` ON `a`.`REC_IDENTS` = `b`.`REC_FIDENT`
WHERE `PKR_ACTIVE` = 1
AND `APP_IDJOBS` = '1')) a
WHERE UPPER(name) like '%fuji%'
 LIMIT 20
ERROR - 2022-08-26 10:40:21 --> Query error: Operand should contain 1 column(s) - Invalid query: SELECT DISTINCT id, name
FROM (SELECT PKR_IDENTS as id, PKR_NAMESS as name
FROM `T_MAS_PEKRJA` `a`
INNER JOIN `T_TRN_APPLYJ` `b` ON `a`.`PKR_IDENTS` = `b`.`APP_IDPKRJ`
WHERE a.PKR_IDENTS NOT IN (SELECT REC_JOBPOS, REC_PKRJID
FROM `T_TRN_RCRUIT` `a`
INNER JOIN `T_TRN_RCRUIT_DETAIL` `b` ON `a`.`REC_IDENTS` = `b`.`REC_FIDENT`
WHERE `PKR_ACTIVE` = 1
AND `APP_IDJOBS` = '1')) a
WHERE UPPER(name) like '%fujiwa%'
 LIMIT 20
ERROR - 2022-08-26 11:04:34 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 288
ERROR - 2022-08-26 11:04:34 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 288
ERROR - 2022-08-26 11:08:36 --> 404 Page Not Found: Sitewebmanifest/index
ERROR - 2022-08-26 11:08:36 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 11:08:36 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 11:08:36 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 11:10:53 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 11:10:54 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 11:10:54 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 11:15:05 --> 404 Page Not Found: Sitewebmanifest/index
ERROR - 2022-08-26 11:15:05 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 11:15:05 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 11:15:06 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: cntrid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 543
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: cntrid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 543
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: cntrid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 543
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 567
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: prvnid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 567
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 572
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 572
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 567
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: prvnid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 567
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 572
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 572
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 567
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: prvnid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 567
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 572
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 572
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 567
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: prvnid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 567
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 572
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 572
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 567
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: prvnid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 567
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 572
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 572
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 567
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: prvnid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 567
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 572
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 572
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 567
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: prvnid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 567
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 572
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 572
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 567
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: prvnid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 567
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 572
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 572
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 596
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: cityid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 596
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 601
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 601
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 596
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: cityid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 596
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 601
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 601
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 596
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: cityid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 596
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 601
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 601
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 596
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: cityid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 596
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 601
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 601
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 596
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: cityid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 596
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 601
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 601
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 596
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: cityid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 596
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 601
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 601
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 596
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: cityid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 596
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 601
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 601
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 596
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Undefined variable: cityid D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 596
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 601
ERROR - 2022-08-26 13:34:31 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 601
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 593
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 598
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 598
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 593
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 598
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 598
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 593
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 598
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 598
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 593
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 598
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 598
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 593
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 598
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 598
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 593
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 598
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 598
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 593
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 598
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 598
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 593
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 598
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 598
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 622
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 627
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 627
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 622
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 627
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 627
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 622
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 627
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 627
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 622
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 627
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 627
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 622
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 627
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 627
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 622
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 627
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 627
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 622
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 627
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 627
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 622
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 627
ERROR - 2022-08-26 13:37:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 627
ERROR - 2022-08-26 13:39:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:39:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:39:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:39:22 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:39:22 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:39:23 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:39:23 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:40:51 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:40:51 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:40:51 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:41:21 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:41:21 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:41:22 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:41:22 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:44:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:44:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:44:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:44:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 660
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 665
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 689
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:46:14 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\views\v_myjconnect.php 694
ERROR - 2022-08-26 13:46:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:46:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:46:15 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:47:10 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:47:11 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:47:11 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:49:28 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:49:28 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:49:28 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:50:11 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:50:12 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:50:12 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:52:23 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:52:23 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:52:23 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:55:02 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:55:02 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:55:02 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:58:37 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:58:37 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 13:58:37 --> 404 Page Not Found: Resources/assets
ERROR - 2022-08-26 16:35:06 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 288
ERROR - 2022-08-26 16:35:07 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 288
ERROR - 2022-08-26 16:49:02 --> Severity: Notice --> Undefined variable: cmbLCTION D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 288
ERROR - 2022-08-26 16:49:02 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_maindashboard.php 288
