<?php
//建立資料庫連接--------------------------------------------//
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "book_table";
	$link = new mysqli($servername, $username, $password, $dbname);
	if ($link->connect_error)//檢查連接是否成功
	{
		die("連接資料庫失敗：" . $link->connect_error);
	}
	//----------------------------------------------------------//
    ?>



