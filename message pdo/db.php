<?php
    $dsn = "mysql:host=mariadb;dbname=message;port=3306;charset=utf8";
    $username = "root";
    $password = "root";
    try {
       // 建立MySQL伺服器連接和開啟資料庫 
       $link = new PDO($dsn, $username, $password);
       echo $link->errorCode();
       print_r($link->errorCode());
       // 指定PDO錯誤模式和錯誤處理
       $link->setAttribute(PDO::ATTR_ERRMODE, 
                    PDO::ERRMODE_EXCEPTION);
       //echo "成功建立MySQL伺服器連接和開啟message資料庫<br>"; 
    } catch (PDOException $e) {
       echo "連接失敗: " . $e->getMessage();
    }
    // $link = null;
	/*
    $host = 'mariadb';
	$user = 'root';
   	$pass = 'root';
	$name = 'message';
	$link = mysqli_connect("$host", "$user", "$pass",$name);
    mysqli_query("set name utf8");
    if(!$link){
    	echo 'error to open db'.mysqli_connect_error();
    }
    else{
        //echo "AC to open db";
    }*/
?>