<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-08-30 04:14:17 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-08-30 04:14:18 --> 404 Page Not Found: Resources/css
ERROR - 2021-08-30 04:14:18 --> 404 Page Not Found: Resources/css
ERROR - 2021-08-30 06:16:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
								group by icabangid,iprodid
								UNION ALL 
								SELECT icaban' at line 8 - Invalid query: SELECT 'OTC' divprodid,GRP_NAMESS, produk, value,targetvalue, sales, target,ifnull(ROUND(( (sales)/(target) * 100 ),2),0)ach
					FROM (
							SELECT d.GRP_NAMESS, d.GRP_SEQUNC, b.nama produk, sum(value) value, sum(targetvalue) targetvalue, SUM(sales) sales, SUM(a.target) target FROM 
							(
								SELECT icabangid, `iprodid`,sum(value) value,0 targetvalue, sum(`qty`) `sales`, 0 target 
								FROM `MKT`.`otc_etl` `a` 
								WHERE `tgljual` BETWEEN '2021-08-01' AND '2021-08-30' 
								AND `a`.`divprodid` = 'OTC'  AND a.icabangid = '0000000003' AND areaid in()
								group by icabangid,iprodid
								UNION ALL 
								SELECT icabangid_o, `iprodid`,0 ,cast(sum(hna * target) as signed) targetvalue, 0 `sales`, CAST(SUM(target)AS UNSIGNED) AS target FROM MKT.tgt_md0 a LEFT JOIN  MKT.tgt_md1 b ON a.targetid=b.targetid  LEFT JOIN (select distinct icabangid_o,md from MKT.imd0 where md='') c on a.md = c.md
								WHERE `a`.`periode` BETWEEN '2021-08' AND '2021-08' 
								AND `a`.`divprodid` = 'OTC' AND a.md = '' 	group by icabangid_o,iprodid
						) a 
						LEFT JOIN MKT.iproduk b ON a.iprodid = b.iprodid 
						LEFT JOIN T_OTC_GRPPRD_DETAIL c ON a.iprodid = c.GRP_IDPROD 
						LEFT JOIN T_OTC_GRPPRD d ON c.GRP_FKIDEN = d.GRP_IDENTS 
						GROUP BY `d`.`GRP_NAMESS`, `b`.`nama`
					) a 
					ORDER BY `GRP_SEQUNC`, `GRP_NAMESS`
ERROR - 2021-08-30 06:16:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
								group by icabangid,iprodid
								UNION ALL 
								SELECT icaban' at line 8 - Invalid query: SELECT 'OTC' divprodid,GRP_NAMESS, produk, value,targetvalue, sales, target,ifnull(ROUND(( (sales)/(target) * 100 ),2),0)ach
					FROM (
							SELECT d.GRP_NAMESS, d.GRP_SEQUNC, b.nama produk, sum(value) value, sum(targetvalue) targetvalue, SUM(sales) sales, SUM(a.target) target FROM 
							(
								SELECT icabangid, `iprodid`,sum(value) value,0 targetvalue, sum(`qty`) `sales`, 0 target 
								FROM `MKT`.`otc_etl` `a` 
								WHERE `tgljual` BETWEEN '2021-08-01' AND '2021-08-30' 
								AND `a`.`divprodid` = 'OTC'  AND a.icabangid = '0000000003' AND areaid in()
								group by icabangid,iprodid
								UNION ALL 
								SELECT icabangid_o, `iprodid`,0 ,cast(sum(hna * target) as signed) targetvalue, 0 `sales`, CAST(SUM(target)AS UNSIGNED) AS target FROM MKT.tgt_md0 a LEFT JOIN  MKT.tgt_md1 b ON a.targetid=b.targetid  LEFT JOIN (select distinct icabangid_o,md from MKT.imd0 where md='') c on a.md = c.md
								WHERE `a`.`periode` BETWEEN '2021-08' AND '2021-08' 
								AND `a`.`divprodid` = 'OTC' AND a.md = '' 	group by icabangid_o,iprodid
						) a 
						LEFT JOIN MKT.iproduk b ON a.iprodid = b.iprodid 
						LEFT JOIN T_OTC_GRPPRD_DETAIL c ON a.iprodid = c.GRP_IDPROD 
						LEFT JOIN T_OTC_GRPPRD d ON c.GRP_FKIDEN = d.GRP_IDENTS 
						GROUP BY `d`.`GRP_NAMESS`, `b`.`nama`
					) a 
					ORDER BY `GRP_SEQUNC`, `GRP_NAMESS`
ERROR - 2021-08-30 06:47:41 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-08-30 06:47:41 --> 404 Page Not Found: Resources/css
ERROR - 2021-08-30 06:47:41 --> 404 Page Not Found: Resources/css
ERROR - 2021-08-30 06:47:44 --> 404 Page Not Found: Resources/img
ERROR - 2021-08-30 06:47:44 --> 404 Page Not Found: Resources/img
ERROR - 2021-08-30 10:04:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 D:\xampp\htdocs\sdmsys\system\database\drivers\mysqli\mysqli_driver.php 202
ERROR - 2021-08-30 10:04:20 --> Unable to connect to the database
ERROR - 2021-08-30 10:20:01 --> Severity: Notice --> Undefined variable: urutanDetail D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 439
ERROR - 2021-08-30 10:20:01 --> Severity: Notice --> Undefined variable: dbutton D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 491
ERROR - 2021-08-30 10:20:01 --> Severity: Notice --> Undefined variable: dbutton D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 527
ERROR - 2021-08-30 10:20:01 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 615
ERROR - 2021-08-30 10:20:01 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 616
ERROR - 2021-08-30 10:20:01 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 621
ERROR - 2021-08-30 10:20:01 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 622
ERROR - 2021-08-30 10:20:01 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 634
ERROR - 2021-08-30 10:20:01 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 635
ERROR - 2021-08-30 10:20:30 --> Severity: Notice --> Undefined variable: dbutton D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 491
ERROR - 2021-08-30 10:20:30 --> Severity: Notice --> Undefined variable: dbutton D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 527
ERROR - 2021-08-30 10:20:30 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 615
ERROR - 2021-08-30 10:20:30 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 616
ERROR - 2021-08-30 10:20:30 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 621
ERROR - 2021-08-30 10:20:30 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 622
ERROR - 2021-08-30 10:20:30 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 634
ERROR - 2021-08-30 10:20:30 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 635
ERROR - 2021-08-30 10:20:58 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 615
ERROR - 2021-08-30 10:20:58 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 616
ERROR - 2021-08-30 10:20:58 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 621
ERROR - 2021-08-30 10:20:58 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 622
ERROR - 2021-08-30 10:20:58 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 634
ERROR - 2021-08-30 10:20:58 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 635
ERROR - 2021-08-30 10:22:07 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 615
ERROR - 2021-08-30 10:22:07 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 616
ERROR - 2021-08-30 10:22:07 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 621
ERROR - 2021-08-30 10:22:07 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 622
ERROR - 2021-08-30 10:22:07 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 634
ERROR - 2021-08-30 10:22:07 --> Severity: Notice --> Undefined variable: gridjqxname D:\xampp\htdocs\sdmsys\application\controllers\busdev\Project.php 635
ERROR - 2021-08-30 14:40:27 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-08-30 14:40:28 --> 404 Page Not Found: Resources/css
ERROR - 2021-08-30 14:40:28 --> 404 Page Not Found: Resources/css
ERROR - 2021-08-30 14:41:09 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-08-30 14:41:09 --> 404 Page Not Found: Resources/css
ERROR - 2021-08-30 14:41:09 --> 404 Page Not Found: Resources/css
ERROR - 2021-08-30 14:44:37 --> Severity: Notice --> Undefined variable: messg D:\xampp\htdocs\sdmsys\application\views\v_login.php 135
ERROR - 2021-08-30 14:44:37 --> 404 Page Not Found: Resources/css
ERROR - 2021-08-30 14:44:37 --> 404 Page Not Found: Resources/css
