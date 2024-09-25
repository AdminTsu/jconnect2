<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-03-28 09:32:16 --> Query error: Table 'lpkt.t_mas_jobpos' doesn't exist - Invalid query: SELECT *
FROM (SELECT a.*
FROM `T_MAS_JOBPOS` `a`
WHERE `a`.`JOB_ACTIVE` = 1) a
ORDER BY `JOB_IDENTS`
 LIMIT 20
ERROR - 2022-03-28 09:32:22 --> Severity: Notice --> Undefined variable: txtLOGINS D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 145
ERROR - 2022-03-28 09:32:22 --> Severity: Notice --> Undefined variable: txtFOTOSS D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 170
ERROR - 2022-03-28 09:35:53 --> Severity: Notice --> Undefined variable: txtFOTOSS D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 170
ERROR - 2022-03-28 10:39:25 --> Severity: Notice --> Undefined variable: ruleSTATUS D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 197
ERROR - 2022-03-28 10:45:33 --> Severity: Notice --> Undefined variable: nomor D:\xampp\htdocs\ji-worker\application\models\Crud.php 1676
ERROR - 2022-03-28 10:47:50 --> Query error: Table 'lpkt.t_mas_jobpos' doesn't exist - Invalid query: SELECT *
FROM (SELECT a.*
FROM `T_MAS_JOBPOS` `a`
WHERE `a`.`JOB_ACTIVE` = 1) a
ORDER BY `JOB_IDENTS`
 LIMIT 20
ERROR - 2022-03-28 10:52:25 --> Query error: Table 'lpkt.t_mas_jobpos' doesn't exist - Invalid query: SELECT *
FROM (SELECT a.*
FROM `T_MAS_JOBPOS` `a`
WHERE `a`.`JOB_STATUS` = 1) a
ORDER BY `JOB_IDENTS`
 LIMIT 20
ERROR - 2022-03-28 10:54:18 --> Severity: Notice --> Undefined property: Job::$m_Job D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 131
ERROR - 2022-03-28 10:54:18 --> Severity: Error --> Call to a member function getJob_edit() on a non-object D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 131
ERROR - 2022-03-28 10:54:52 --> Query error: Table 'lpkt.t_mas_jobpos' doesn't exist - Invalid query: SELECT a.*, b.CLI_NAMESS CLIENT
FROM `T_MAS_JOBPOS` `a`
LEFT JOIN `T_MAS_CLIENT` `b` ON `a`.`JOB_COMPNY` = `b`.`CLI_IDENTS`
WHERE `JOB_IDENTS` = '14'
ERROR - 2022-03-28 10:55:07 --> Severity: Notice --> Undefined variable: txtCOMPNY D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 186
ERROR - 2022-03-28 10:55:07 --> Severity: Notice --> Undefined variable: txaDSCRIP D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 190
ERROR - 2022-03-28 10:55:07 --> Severity: Notice --> Undefined variable: txaRQSKIL D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 191
ERROR - 2022-03-28 10:55:07 --> Severity: Notice --> Undefined variable: txaFSILTY D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 193
ERROR - 2022-03-28 11:03:47 --> Severity: Notice --> Undefined variable: txtCOMPNY D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 186
ERROR - 2022-03-28 11:03:47 --> Severity: Notice --> Undefined variable: txaDSCRIP D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 190
ERROR - 2022-03-28 11:03:47 --> Severity: Notice --> Undefined variable: txaRQSKIL D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 191
ERROR - 2022-03-28 11:03:47 --> Severity: Notice --> Undefined variable: txaFSILTY D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 193
ERROR - 2022-03-28 11:05:23 --> Severity: Notice --> Undefined variable: txtCOMPNY D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 186
ERROR - 2022-03-28 11:05:23 --> Severity: Notice --> Undefined variable: txaDSCRIP D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 190
ERROR - 2022-03-28 11:05:23 --> Severity: Notice --> Undefined variable: txaRQSKIL D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 191
ERROR - 2022-03-28 11:05:23 --> Severity: Notice --> Undefined variable: txaFSILTY D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 193
ERROR - 2022-03-28 11:06:26 --> Severity: Notice --> Undefined variable: txtCOMPNY D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 186
ERROR - 2022-03-28 11:06:26 --> Severity: Notice --> Undefined variable: txaDSCRIP D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 190
ERROR - 2022-03-28 11:06:26 --> Severity: Notice --> Undefined variable: txaRQSKIL D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 191
ERROR - 2022-03-28 11:06:26 --> Severity: Notice --> Undefined variable: txaFSILTY D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 193
ERROR - 2022-03-28 11:07:41 --> Severity: Notice --> Undefined variable: hidCOMPNY D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 147
ERROR - 2022-03-28 11:07:41 --> Severity: Notice --> Undefined variable: txaRQSKIL D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 191
ERROR - 2022-03-28 11:20:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `T_TRN_JOBPOS` `a`
LEFT JOIN `T_MAS_CLIENT` `b` ON `a`.`JOB_COMPNY` = `b`.`' at line 3 - Invalid query: SELECT *
FROM (SELECT a.*, b.CLI_NAMESS CLIENT, CASE WHEN JOB_DRTION = 1 THEN 'KONTRAK' ELSE 'TETAP END JENIS'
FROM `T_TRN_JOBPOS` `a`
LEFT JOIN `T_MAS_CLIENT` `b` ON `a`.`JOB_COMPNY` = `b`.`CLI_IDENTS`
WHERE `a`.`JOB_STATUS` = 1) a
ORDER BY `JOB_IDENTS`
 LIMIT 20
ERROR - 2022-03-28 13:21:08 --> 404 Page Not Found: pekerja/Nosj/getPerekrutan_list
ERROR - 2022-03-28 13:25:08 --> Severity: error --> Exception: Unable to locate the model you have specified: M_recrut D:\xampp\htdocs\ji-worker\system\core\Loader.php 344
ERROR - 2022-03-28 13:27:48 --> 404 Page Not Found: perekrutan/Nosj/getRekrut_list
ERROR - 2022-03-28 16:07:55 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-03-28 16:07:55 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-28 16:07:55 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-28 16:07:56 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-28 16:09:44 --> Severity: Parsing Error --> syntax error, unexpected ';', expecting ')' D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 155
ERROR - 2022-03-28 16:09:54 --> Severity: Parsing Error --> syntax error, unexpected ';', expecting ')' D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 155
ERROR - 2022-03-28 16:16:54 --> Severity: Notice --> Undefined variable: userid D:\xampp\htdocs\ji-worker\application\controllers\job\Job.php 280
ERROR - 2022-03-28 16:28:33 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-03-28 16:28:33 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-28 16:28:33 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-28 16:31:05 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-03-28 16:31:05 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-28 16:31:05 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-28 16:37:53 --> Query error: Unknown column '$loginid' in 'on clause' - Invalid query: SELECT *
FROM (SELECT a.*, b.CLI_NAMESS CLIENT, CASE WHEN JOB_DRTION = 1 THEN 'KONTRAK' ELSE 'TETAP' END JENIS, CASE WHEN JOB_STATUS = 1 THEN 'AKTIF' ELSE 'CLOSE' END STATUS
FROM `T_TRN_JOBPOS` `a`
LEFT JOIN `T_MAS_CLIENT` `b` ON `a`.`JOB_COMPNY` = `b`.`CLI_IDENTS` AND `b`.`CLI_LOGNID` = `$loginid`
WHERE `a`.`JOB_STATUS` = 1) a
ORDER BY `JOB_IDENTS`
 LIMIT 20
ERROR - 2022-03-28 16:40:43 --> Query error: Unknown column '$loginid' in 'on clause' - Invalid query: SELECT *
FROM (SELECT a.*, b.CLI_NAMESS CLIENT, CASE WHEN JOB_DRTION = 1 THEN 'KONTRAK' ELSE 'TETAP' END JENIS, CASE WHEN JOB_STATUS = 1 THEN 'AKTIF' ELSE 'CLOSE' END STATUS
FROM `T_TRN_JOBPOS` `a`
LEFT JOIN `T_MAS_CLIENT` `b` ON `a`.`JOB_COMPNY` = `b`.`CLI_IDENTS` AND `b`.`CLI_LOGNID` = `$loginid`
WHERE `a`.`JOB_STATUS` = 1) a
ORDER BY `JOB_IDENTS`
 LIMIT 20
ERROR - 2022-03-28 16:55:18 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-03-28 16:55:18 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-28 16:55:18 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-28 16:55:19 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-28 17:02:09 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\ji-worker\application\views\v_login.php 138
ERROR - 2022-03-28 17:02:09 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-28 17:02:09 --> 404 Page Not Found: Resources/css
ERROR - 2022-03-28 17:02:39 --> Query error: Unknown column '$loginid' in 'on clause' - Invalid query: SELECT *
FROM (SELECT a.*, b.CLI_NAMESS CLIENT, CASE WHEN JOB_DRTION = 1 THEN 'KONTRAK' ELSE 'TETAP' END JENIS, CASE WHEN JOB_STATUS = 1 THEN 'AKTIF' ELSE 'CLOSE' END STATUS
FROM `T_TRN_JOBPOS` `a`
LEFT JOIN `T_MAS_CLIENT` `b` ON `a`.`JOB_COMPNY` = `b`.`CLI_IDENTS` AND `b`.`CLI_LOGNID` = `$loginid`
WHERE `a`.`JOB_STATUS` = 1) a
ORDER BY `JOB_IDENTS`
 LIMIT 20
ERROR - 2022-03-28 17:05:12 --> Query error: Unknown column '$loginid' in 'on clause' - Invalid query: SELECT *
FROM (SELECT a.*, b.CLI_NAMESS CLIENT, CASE WHEN JOB_DRTION = 1 THEN 'KONTRAK' ELSE 'TETAP' END JENIS, CASE WHEN JOB_STATUS = 1 THEN 'AKTIF' ELSE 'CLOSE' END STATUS
FROM `T_TRN_JOBPOS` `a`
LEFT JOIN `T_MAS_CLIENT` `b` ON `a`.`JOB_COMPNY` = `b`.`CLI_IDENTS` AND `b`.`CLI_LOGNID` = `$loginid`
WHERE `a`.`JOB_STATUS` = 1) a
ORDER BY `JOB_IDENTS`
 LIMIT 20
ERROR - 2022-03-28 17:08:51 --> Query error: Unknown column '$loginid' in 'on clause' - Invalid query: SELECT *
FROM (SELECT a.*, b.CLI_NAMESS CLIENT, CASE WHEN JOB_DRTION = 1 THEN 'KONTRAK' ELSE 'TETAP' END JENIS, CASE WHEN JOB_STATUS = 1 THEN 'AKTIF' ELSE 'CLOSE' END STATUS
FROM `T_TRN_JOBPOS` `a`
LEFT JOIN `T_MAS_CLIENT` `b` ON `a`.`JOB_COMPNY` = `b`.`CLI_IDENTS` AND `b`.`CLI_LOGNID` = `$loginid`
WHERE `a`.`JOB_STATUS` = 1) a
ORDER BY `JOB_IDENTS`
 LIMIT 20
ERROR - 2022-03-28 17:09:44 --> Query error: Unknown column '$loginid' in 'on clause' - Invalid query: SELECT *
FROM (SELECT a.*, b.CLI_NAMESS CLIENT, CASE WHEN JOB_DRTION = 1 THEN 'KONTRAK' ELSE 'TETAP' END JENIS, CASE WHEN JOB_STATUS = 1 THEN 'AKTIF' ELSE 'CLOSE' END STATUS
FROM `T_TRN_JOBPOS` `a`
LEFT JOIN `T_MAS_CLIENT` `b` ON `a`.`JOB_COMPNY` = `b`.`CLI_IDENTS` AND `b`.`CLI_LOGNID` = `$loginid`
WHERE `a`.`JOB_STATUS` = 1) a
ORDER BY `JOB_IDENTS`
 LIMIT 20
