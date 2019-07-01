<?php 
	header("Content-Type: text/html; charset=utf8");
	$host = 'mariadb';
	$user = 'root';
   	$pass = 'root';
	$name = 'message';
	$link = mysqli_connect($host, $user, $pass, $name);

	if(!isset($_POST['submit'])){
		exit("錯誤執行");
	}//判斷是否有submit操作
	
	$name=$_POST['name'];//post獲取表單裡的name
	$password=$_POST['password'];//post獲取表單裡的password

	$reslut=mysqli_query($link, "INSERT INTO `user`(`account`,`password`) VALUES ('$name','$password')");//執行sql
	if (!$reslut){
		die('Error: ' . mysqli_error());//如果sql執行失敗輸出錯誤
	}else{
		echo "註冊成功";//成功輸出註冊成功
		echo "
				<script>
				setTimeout(function(){window.location.href='login.html';},1000);
				</script>
				";
	}
	mysqli_close($link);//關閉資料庫
?>
