<?php 

	//PHP-MySQL 是 PHP 操作 MySQL 資料庫最原始的 Extension ，PHP-MySQLi 的 i 代表 Improvement ，提更了相對進階的功能，就 Extension 而言，本身也增加了安全性。

	$db['db_host'] = 'localhost';
	$db['db_user'] = 'enyilio';
	$db['db_password'] = '6666';
	$db['db_name'] = 'CMS-Practice';

	foreach ($db as $key => $value) {
		define(strtoupper($key), $value);
	}

	$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

	if($connection){

		echo "OK";

	}

 ?>