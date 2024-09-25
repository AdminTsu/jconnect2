<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-10-17 09:36:48 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 09:36:48 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 09:36:48 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 09:36:48 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:04:07 --> Severity: Parsing Error --> syntax error, unexpected '(' D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 273
ERROR - 2022-10-17 10:06:15 --> Severity: Notice --> Undefined variable: filter D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 256
ERROR - 2022-10-17 10:06:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 9 - Invalid query: SELECT PKR_IDENTS, PKR_NAMESS
FROM `T_MAS_PEKRJA` `a`
INNER JOIN `T_TRN_APPLYJ` `b` ON `a`.`PKR_IDENTS` = `b`.`APP_IDPKRJ`
WHERE a.PKR_IDENTS NOT IN (
	      SELECT REC_PKRJID
	      FROM T_TRN_RCRUIT a
	      INNER JOIN T_TRN_RCRUIT_DETAIL b ON a.REC_IDENTS = b.REC_FIDENT
	      WHERE REC_JOBPOS = 
	    )
ERROR - 2022-10-17 10:07:10 --> Severity: Notice --> Undefined variable: filter D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 256
ERROR - 2022-10-17 10:07:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 9 - Invalid query: SELECT PKR_IDENTS, PKR_NAMESS
FROM `T_MAS_PEKRJA` `a`
INNER JOIN `T_TRN_APPLYJ` `b` ON `a`.`PKR_IDENTS` = `b`.`APP_IDPKRJ`
WHERE a.PKR_IDENTS NOT IN (
	      SELECT REC_PKRJID
	      FROM T_TRN_RCRUIT a
	      INNER JOIN T_TRN_RCRUIT_DETAIL b ON a.REC_IDENTS = b.REC_FIDENT
	      WHERE REC_JOBPOS = 
	    )
ERROR - 2022-10-17 10:07:49 --> Severity: Notice --> Undefined variable: filter D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 256
ERROR - 2022-10-17 10:07:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 9 - Invalid query: SELECT PKR_IDENTS, PKR_NAMESS
FROM `T_MAS_PEKRJA` `a`
INNER JOIN `T_TRN_APPLYJ` `b` ON `a`.`PKR_IDENTS` = `b`.`APP_IDPKRJ`
WHERE a.PKR_IDENTS NOT IN (
	      SELECT REC_PKRJID
	      FROM T_TRN_RCRUIT a
	      INNER JOIN T_TRN_RCRUIT_DETAIL b ON a.REC_IDENTS = b.REC_FIDENT
	      WHERE REC_JOBPOS = 
	    )
ERROR - 2022-10-17 10:08:42 --> Severity: Notice --> Undefined variable: filter D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 256
ERROR - 2022-10-17 10:08:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 9 - Invalid query: SELECT PKR_IDENTS, PKR_NAMESS
FROM `T_MAS_PEKRJA` `a`
INNER JOIN `T_TRN_APPLYJ` `b` ON `a`.`PKR_IDENTS` = `b`.`APP_IDPKRJ`
WHERE a.PKR_IDENTS NOT IN (
	      SELECT REC_PKRJID
	      FROM T_TRN_RCRUIT a
	      INNER JOIN T_TRN_RCRUIT_DETAIL b ON a.REC_IDENTS = b.REC_FIDENT
	      WHERE REC_JOBPOS = 
	    )
ERROR - 2022-10-17 10:14:41 --> Severity: Warning --> Missing argument 1 for M_Jconnect::getPekerja_autotag(), called in D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php on line 7 and defined D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 251
ERROR - 2022-10-17 10:14:41 --> Severity: Notice --> Undefined variable: jobsid D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 256
ERROR - 2022-10-17 10:14:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 9 - Invalid query: SELECT PKR_IDENTS, PKR_NAMESS
FROM `T_MAS_PEKRJA` `a`
INNER JOIN `T_TRN_APPLYJ` `b` ON `a`.`PKR_IDENTS` = `b`.`APP_IDPKRJ`
WHERE a.PKR_IDENTS NOT IN (
	      SELECT REC_PKRJID
	      FROM T_TRN_RCRUIT a
	      INNER JOIN T_TRN_RCRUIT_DETAIL b ON a.REC_IDENTS = b.REC_FIDENT
	      WHERE REC_JOBPOS = 
	    )
ERROR - 2022-10-17 10:15:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 9 - Invalid query: SELECT PKR_IDENTS, PKR_NAMESS
FROM `T_MAS_PEKRJA` `a`
INNER JOIN `T_TRN_APPLYJ` `b` ON `a`.`PKR_IDENTS` = `b`.`APP_IDPKRJ`
WHERE a.PKR_IDENTS NOT IN (
	      SELECT REC_PKRJID
	      FROM T_TRN_RCRUIT a
	      INNER JOIN T_TRN_RCRUIT_DETAIL b ON a.REC_IDENTS = b.REC_FIDENT
	      WHERE REC_JOBPOS = 
	    )
ERROR - 2022-10-17 10:22:04 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 283
ERROR - 2022-10-17 10:22:04 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 43
ERROR - 2022-10-17 10:22:04 --> Severity: Notice --> Undefined variable: bidang_desc D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 63
ERROR - 2022-10-17 10:22:04 --> Severity: Notice --> Undefined variable: bidang_desc D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 64
ERROR - 2022-10-17 10:24:23 --> Severity: Notice --> Undefined variable: comidn D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 8
ERROR - 2022-10-17 10:24:23 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 283
ERROR - 2022-10-17 10:24:23 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 43
ERROR - 2022-10-17 10:24:23 --> Severity: Notice --> Undefined variable: bidang_desc D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 63
ERROR - 2022-10-17 10:24:23 --> Severity: Notice --> Undefined variable: bidang_desc D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 64
ERROR - 2022-10-17 10:25:28 --> Severity: Notice --> Undefined variable: idclnt D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 8
ERROR - 2022-10-17 10:25:28 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 283
ERROR - 2022-10-17 10:25:28 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 43
ERROR - 2022-10-17 10:25:28 --> Severity: Notice --> Undefined variable: bidang_desc D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 63
ERROR - 2022-10-17 10:25:28 --> Severity: Notice --> Undefined variable: bidang_desc D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 64
ERROR - 2022-10-17 10:29:55 --> Severity: Error --> Call to undefined method M_Jconnect::getJobpost_autotag() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 8
ERROR - 2022-10-17 10:30:23 --> Severity: Notice --> Undefined variable: bidang_desc D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 63
ERROR - 2022-10-17 10:30:23 --> Severity: Notice --> Undefined variable: bidang_desc D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 64
ERROR - 2022-10-17 10:36:15 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:36:15 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:36:15 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:36:15 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:40:50 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:42:58 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:42:58 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:42:58 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:42:58 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:43:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 300
ERROR - 2022-10-17 10:43:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 300
ERROR - 2022-10-17 10:43:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 300
ERROR - 2022-10-17 10:43:30 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 300
ERROR - 2022-10-17 10:43:39 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 10:43:39 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 10:43:39 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 10:43:39 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 10:43:39 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 10:43:39 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 10:44:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 300
ERROR - 2022-10-17 10:44:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 300
ERROR - 2022-10-17 10:44:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 300
ERROR - 2022-10-17 10:44:22 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 300
ERROR - 2022-10-17 10:44:23 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:44:23 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:44:23 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:44:23 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:52:53 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:52:53 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:52:53 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 10:52:53 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 11:21:13 --> Severity: Notice --> Undefined variable: idclnt D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 8
ERROR - 2022-10-17 11:21:13 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 262
ERROR - 2022-10-17 11:21:13 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 72
ERROR - 2022-10-17 11:22:17 --> Severity: Notice --> Undefined variable: idclnt D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 479
ERROR - 2022-10-17 11:22:18 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 262
ERROR - 2022-10-17 11:22:18 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 72
ERROR - 2022-10-17 11:22:43 --> Severity: Notice --> Undefined variable: idclnt D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 479
ERROR - 2022-10-17 11:22:43 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 262
ERROR - 2022-10-17 11:22:43 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 72
ERROR - 2022-10-17 11:24:13 --> Severity: Notice --> Undefined variable: idclnt D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 479
ERROR - 2022-10-17 11:24:13 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 262
ERROR - 2022-10-17 11:24:13 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 74
ERROR - 2022-10-17 11:24:32 --> Severity: Notice --> Undefined variable: idclnt D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 479
ERROR - 2022-10-17 11:24:32 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 262
ERROR - 2022-10-17 11:24:32 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 74
ERROR - 2022-10-17 11:25:43 --> Severity: Notice --> Undefined variable: idclnt D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 479
ERROR - 2022-10-17 11:25:43 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 262
ERROR - 2022-10-17 11:25:43 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 71
ERROR - 2022-10-17 11:25:58 --> Severity: Notice --> Undefined variable: idclnt D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 8
ERROR - 2022-10-17 11:25:58 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 262
ERROR - 2022-10-17 11:25:58 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 71
ERROR - 2022-10-17 11:26:15 --> Severity: Notice --> Undefined variable: idclnt D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 479
ERROR - 2022-10-17 11:26:15 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 262
ERROR - 2022-10-17 11:26:15 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 71
ERROR - 2022-10-17 11:28:25 --> Severity: Notice --> Undefined variable: idclnt D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 8
ERROR - 2022-10-17 11:28:25 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 262
ERROR - 2022-10-17 11:28:25 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 71
ERROR - 2022-10-17 11:29:47 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 11:29:47 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 11:29:47 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 11:29:47 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 13:23:03 --> Severity: Notice --> Undefined variable: idclnt D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 479
ERROR - 2022-10-17 13:23:03 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 262
ERROR - 2022-10-17 13:23:03 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 72
ERROR - 2022-10-17 13:23:38 --> Severity: Notice --> Undefined variable: idclnt D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 8
ERROR - 2022-10-17 13:23:38 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 262
ERROR - 2022-10-17 13:23:38 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 72
ERROR - 2022-10-17 13:24:40 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 262
ERROR - 2022-10-17 13:24:40 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 75
ERROR - 2022-10-17 13:26:00 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 262
ERROR - 2022-10-17 13:26:00 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 76
ERROR - 2022-10-17 13:46:06 --> Severity: Notice --> Undefined variable: idclnt D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 8
ERROR - 2022-10-17 13:46:06 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 262
ERROR - 2022-10-17 13:46:06 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 72
ERROR - 2022-10-17 13:57:36 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 13:57:36 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 13:57:36 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 13:57:36 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 14:04:24 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 14:04:24 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 14:04:24 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 14:04:24 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 14:55:58 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 14:55:58 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 14:55:58 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 14:55:58 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 15:23:06 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 15:23:06 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 15:23:06 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 15:23:06 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 290
ERROR - 2022-10-17 15:24:53 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:24:53 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:24:53 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:24:53 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:24:53 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:24:53 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:31:06 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:31:06 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:31:06 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:31:06 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:31:06 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:31:06 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:31:15 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:31:15 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:31:15 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:31:15 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:31:15 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:31:15 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:33:32 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:33:32 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:33:32 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:33:32 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:33:32 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:33:32 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:33:40 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:33:40 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:33:40 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:33:40 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:33:40 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:33:40 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:34:26 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:34:26 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:34:26 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:34:26 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:34:26 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:34:26 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:47:18 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:47:18 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:47:18 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:47:18 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:47:18 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:47:18 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:50:13 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:50:13 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:50:13 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:50:13 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:50:13 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:50:13 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:53:16 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:53:16 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:53:16 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:53:16 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:53:16 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 15:53:16 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 16:19:10 --> Severity: Warning --> Missing argument 1 for M_Jconnect::getPekerja_autotag(), called in D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php on line 336 and defined D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 267
ERROR - 2022-10-17 16:19:10 --> Severity: Notice --> Undefined variable: jobsid D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 272
ERROR - 2022-10-17 16:19:57 --> Severity: Notice --> Undefined variable: jobsid D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 336
ERROR - 2022-10-17 16:26:55 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 16:26:55 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 16:26:55 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 16:26:55 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 16:26:55 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 16:26:55 --> Severity: Notice --> Trying to get property of non-object D:\xampp\htdocs\jconnect\application\controllers\Myjconnect_Client.php 295
ERROR - 2022-10-17 16:27:16 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\jconnect\application\models\M_jconnect.php 285
ERROR - 2022-10-17 16:27:16 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\jconnect\application\views\v_perekrutan.php 365
