<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-01-08 03:56:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'CHC
					 AND a.icabangid not in (22)
					GROUP BY a.icabangid
					
					U' at line 13 - Invalid query: 
			SELECT b.nama cabang,SUM(mtdsales)salesMTD2018,SUM(mtdtarget)targetMTD2018,SUM(mtdach)achMTD2018,SUM(mtdlast)salesMTD2017,SUM(mtdgrw)grwMTD2018,
			SUM(ytdsales)salesYTD2018,SUM(ytdtarget)targetYTD2018,SUM(ytdach)achYTD2018,SUM(ytdlast)salesYTD2017,SUM(ytdgrw)grwYTD2018
			FROM
			(
				SELECT icabangid,SUM(sales) mtdsales,SUM(target)mtdtarget,IFNULL(ROUND(( SUM(sales)/SUM(target) * 100 ),2),0)mtdach,SUM(sales2017)mtdlast,IFNULL(ROUND(((SUM(sales)- SUM(sales2017))/SUM(sales2017))* 100,2),0) mtdgrw,0 ytdsales,0 ytdtarget,0 ytdach,0 ytdlast,
				0 ytdgrw
				FROM (
					SELECT a.icabangid,CAST(SUM(VALUE) AS SIGNED) sales,0 target,'',0 sales2017
					FROM MKT.otc_etl a

			
					WHERE LEFT(tgljual,7) = '2021-01'
					CHC
					 AND a.icabangid not in (22)
					GROUP BY a.icabangid
					
					UNION ALL 
					
					SELECT icabangid_o,0,CAST(SUM(b.hna*b.target) AS SIGNED) target ,'',0
					FROM MKT.targetcab2 a
					INNER JOIN MKT.targetcab3 b
						ON a.`targetid` = b.targetid
					WHERE a.periode = '2021-01'
					CHC
				 AND a.icabangid_o not in (22)
					GROUP BY icabangid_o
					
					UNION ALL 
					
					SELECT icabangid_o,0,CAST(SUM(b.hna*b.target) AS SIGNED) target ,'',0
					FROM MKT.target2 a
					INNER JOIN MKT.target3 b
						ON a.`targetid` = b.targetid
					WHERE a.periode = '2021-01'
					CHC
				 AND a.icabangid_o not in (22)
					GROUP BY icabangid_o
					
					UNION ALL 
					
					SELECT icabangid,0,0,'',CAST(SUM(a.qty * a.hna) AS SIGNED) sales2017 
					FROM MKT.otc_etl a
					WHERE LEFT(tgljual,7) = '2020-01'
					CHC
				 AND a.icabangid not in (22)
					
					GROUP BY `icabangid`
				) a
				GROUP BY icabangid
				
				UNION ALL 

				SELECT icabangid_o,0,0,0,0,0,SUM(sales),SUM(target),IFNULL(ROUND(( SUM(sales)/SUM(target) * 100 ),2),0) ach,SUM(sales2017),IFNULL(ROUND(((SUM(sales)- SUM(sales2017))/SUM(sales2017))* 100,2),0) grw
				FROM (
					SELECT a.icabangid icabangid_o,CAST(SUM(VALUE) AS SIGNED) sales,0 target,'',0 sales2017
					FROM MKT.otc_etl a
					WHERE tgljual BETWEEN '2021-01-01' AND '2021-01-31'
					CHC
				 AND a.icabangid not in (22)
					
					GROUP BY a.`icabangid`
					
					UNION ALL 
					
					SELECT icabangid_o,0,CAST(SUM(b.hna*b.target) AS SIGNED) target ,'',0
					FROM MKT.targetcab2 a
					INNER JOIN MKT.targetcab3 b	
						ON a.`targetid` = b.targetid
					WHERE a.periode BETWEEN '2021-01' AND '2021-01'
					CHC
				 AND a.icabangid_o not in (22)
					
					GROUP BY a.`icabangid_o`
					
					UNION ALL 
					
					SELECT icabangid_o,0,CAST(SUM(b.hna*b.target) AS SIGNED) target ,'',0
					FROM MKT.target2 a
					INNER JOIN MKT.target3 b	
						ON a.`targetid` = b.targetid
					WHERE a.periode BETWEEN '2021-01' AND '2021-01'
					CHC
				 AND a.icabangid_o not in (22)
					
					GROUP BY `icabangid_o`
						
					UNION ALL 	
					
					SELECT icabangid,0,0,'',CAST(SUM(a.qty * a.hna) AS SIGNED) sales2017 
					FROM MKT.otc_etl a
					WHERE tgljual BETWEEN '2020-01-01' AND '2020-01-31'
					CHC  
					AND a.iprodid NOT IN (3,40) AND a.icabangid not in (22)
					
					GROUP BY `icabangid`
					
				) a
				GROUP BY icabangid_o
			)a
			INNER JOIN MKT.icabang_o b
				ON a.icabangid = b.icabangid_o
			GROUP BY nama
ERROR - 2022-01-08 04:13:28 --> 404 Page Not Found: otc/Target/index
ERROR - 2022-01-08 04:14:11 --> 404 Page Not Found: otc/Reportsales/index
ERROR - 2022-01-08 12:47:34 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2022-01-08 12:47:34 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-08 12:47:34 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-08 12:47:34 --> 404 Page Not Found: Resources/css
ERROR - 2022-01-08 15:45:05 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2022-01-08 15:45:05 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2022-01-08 15:46:47 --> Severity: Warning --> sort() expects parameter 1 to be array, boolean given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 172
ERROR - 2022-01-08 15:46:47 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 175
ERROR - 2022-01-08 15:46:47 --> Severity: error --> Exception: Could not open ./Documents/TARGET/\2021/ for reading! File does not exist. D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Excel2007.php 82
ERROR - 2022-01-08 15:47:40 --> Severity: Warning --> sort() expects parameter 1 to be array, boolean given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 172
ERROR - 2022-01-08 15:47:40 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 175
ERROR - 2022-01-08 15:47:40 --> Severity: error --> Exception: Could not open D:\xampp\htdocs\sdmsys./Documents/TARGET/\2021/ for reading! File does not exist. D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Excel2007.php 82
ERROR - 2022-01-08 15:48:26 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2022-01-08 15:48:26 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2022-01-08 15:48:26 --> Severity: Warning --> file_get_contents(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/~$Bali - NTB (done).xlsx): failed to open stream: Permission denied D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Shared\OLERead.php 85
ERROR - 2022-01-08 15:48:26 --> Severity: Warning --> fopen(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/~$Bali - NTB (done).xlsx): failed to open stream: Permission denied D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 200
ERROR - 2022-01-08 15:48:26 --> Severity: error --> Exception: Could not open file D:\xampp\htdocs\sdmsys/assets/TARGET/2021/~$Bali - NTB (done).xlsx for reading. D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 202
ERROR - 2022-01-08 15:48:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\sdmsys\system\core\Exceptions.php:272) D:\xampp\htdocs\sdmsys\system\core\Common.php 573
ERROR - 2022-01-08 15:51:27 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2022-01-08 15:51:27 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2022-01-08 15:51:27 --> Severity: Warning --> file_get_contents(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/~$Bali - NTB (done).xlsx): failed to open stream: Permission denied D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Shared\OLERead.php 85
ERROR - 2022-01-08 15:51:27 --> Severity: Warning --> fopen(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/~$Bali - NTB (done).xlsx): failed to open stream: Permission denied D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 200
ERROR - 2022-01-08 15:51:27 --> Severity: error --> Exception: Could not open file D:\xampp\htdocs\sdmsys/assets/TARGET/2021/~$Bali - NTB (done).xlsx for reading. D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 202
ERROR - 2022-01-08 15:51:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\sdmsys\system\core\Exceptions.php:272) D:\xampp\htdocs\sdmsys\system\core\Common.php 573
ERROR - 2022-01-08 15:52:04 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2022-01-08 15:52:04 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 176
ERROR - 2022-01-08 15:52:04 --> Severity: Warning --> file_get_contents(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/~$Bali - NTB (done).xlsx): failed to open stream: Permission denied D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Shared\OLERead.php 85
ERROR - 2022-01-08 15:52:04 --> Severity: Warning --> fopen(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/~$Bali - NTB (done).xlsx): failed to open stream: Permission denied D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 200
ERROR - 2022-01-08 15:52:04 --> Severity: error --> Exception: Could not open file D:\xampp\htdocs\sdmsys/assets/TARGET/2021/~$Bali - NTB (done).xlsx for reading. D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 202
ERROR - 2022-01-08 15:52:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\sdmsys\system\core\Exceptions.php:272) D:\xampp\htdocs\sdmsys\system\core\Common.php 573
ERROR - 2022-01-08 15:55:50 --> Severity: Notice --> Array to string conversion D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 177
ERROR - 2022-01-08 15:57:07 --> Severity: Notice --> Array to string conversion D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 178
ERROR - 2022-01-08 15:57:07 --> Severity: Notice --> Array to string conversion D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 178
ERROR - 2022-01-08 15:57:07 --> Severity: Warning --> explode() expects parameter 2 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 177
ERROR - 2022-01-08 15:57:24 --> Severity: Notice --> Array to string conversion D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 178
ERROR - 2022-01-08 15:57:24 --> Severity: Notice --> Array to string conversion D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 178
ERROR - 2022-01-08 15:57:24 --> Severity: Warning --> explode() expects parameter 2 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 177
ERROR - 2022-01-08 15:57:36 --> Severity: Notice --> Array to string conversion D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 178
ERROR - 2022-01-08 16:00:24 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 178
ERROR - 2022-01-08 16:00:24 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 178
ERROR - 2022-01-08 16:01:34 --> Severity: Warning --> pathinfo() expects parameter 1 to be string, array given D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 179
ERROR - 2022-01-08 16:01:34 --> Severity: Warning --> file_get_contents(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/~$Bali - NTB (done).xlsx): failed to open stream: Permission denied D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Shared\OLERead.php 85
ERROR - 2022-01-08 16:01:34 --> Severity: Warning --> fopen(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/~$Bali - NTB (done).xlsx): failed to open stream: Permission denied D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 200
ERROR - 2022-01-08 16:01:34 --> Severity: error --> Exception: Could not open file D:\xampp\htdocs\sdmsys/assets/TARGET/2021/~$Bali - NTB (done).xlsx for reading. D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 202
ERROR - 2022-01-08 16:05:47 --> Severity: Notice --> Array to string conversion D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 213
ERROR - 2022-01-08 16:05:47 --> Severity: error --> Exception: Could not open D:\xampp\htdocs\sdmsys/assets/TARGET/2021/Array for reading! File does not exist. D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Excel2007.php 82
ERROR - 2022-01-08 16:06:43 --> Severity: Parsing Error --> syntax error, unexpected 'echo' (T_ECHO) D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 213
ERROR - 2022-01-08 16:07:25 --> Severity: Notice --> Array to string conversion D:\xampp\htdocs\sdmsys\application\controllers\otc\Upload_target.php 210
ERROR - 2022-01-08 16:08:29 --> Severity: Warning --> file_get_contents(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/): failed to open stream: No such file or directory D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Shared\OLERead.php 85
ERROR - 2022-01-08 16:08:29 --> Severity: Warning --> fopen(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/): failed to open stream: No such file or directory D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 200
ERROR - 2022-01-08 16:08:29 --> Severity: error --> Exception: Could not open file D:\xampp\htdocs\sdmsys/assets/TARGET/2021/ for reading. D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 202
ERROR - 2022-01-08 18:19:47 --> Severity: Warning --> file_get_contents(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/): failed to open stream: No such file or directory D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Shared\OLERead.php 85
ERROR - 2022-01-08 18:19:47 --> Severity: Warning --> fopen(D:\xampp\htdocs\sdmsys/assets/TARGET/2021/): failed to open stream: No such file or directory D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 200
ERROR - 2022-01-08 18:19:47 --> Severity: error --> Exception: Could not open file D:\xampp\htdocs\sdmsys/assets/TARGET/2021/ for reading. D:\xampp\htdocs\sdmsys\application\libraries\PHPExcel\Reader\Abstract.php 202
