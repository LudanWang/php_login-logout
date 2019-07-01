<?php
	/*
	$host = 'mariadb';
	$user = 'root';
   	$pass = 'root';
	$name = 'message';
	*/
	$username = 'abc';
	$password = '1234';
	header("Content-Type: text/html; charset=utf8");
	include('db.php');
	if( !mysqli_select_db($link, $name)) {
  		die ("無法選擇資料庫");
	}
	// 設定連線編碼
	mysqli_query( $link, "SET NAMES 'utf8'");
	//$sql ="select * from `user`  ";
	$sql ="select * from `user` WHERE account = 'abc' ";
	//$sql ="select * from `user` WHERE account = '$username' and password='$password'";
	//$count = "SELECT COUNT(DISTINCT password) FROM user WHERE account = '$username' and password='$password'";
	var_dump($sql);
	$result = mysqli_query($link, $sql);
	$num = mysqli_num_rows($link, $result);
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
	{
    	print_r( $row);
	}
	mysqli_free_result ($result);
	mysqli_close($link);
?>

