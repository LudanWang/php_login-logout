<?php 
	//ini_set('display_errors','1');
	//@session_start();
?>

<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8"/>
		<title>留言板</title>
	</head>
	<body>
		<form method="POST" action="show_post.php">
			<h3>留言板</h3>
			<div>標題：<input type="text" name="title"></div>
			<br><br>
			<div>內文：<textarea name="content"rows="10" cols="30"></textarea> </div>
			<div>
				<lobel><input type="radio" name="publish" value="1">匿名</lobel>
				<lobel><input type="radio" name="publish" value="0">實名</lobel>
			</div>
			<br>
			<br>
			<button type="submit">送出</button>
		</form>
		<p>
			<a href="logout.php">登出</a>
		</p>

	</body>
</html>	