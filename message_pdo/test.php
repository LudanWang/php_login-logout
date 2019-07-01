<?php
	include('db.php');//連結資料庫
	$link = new PDO($dsn, $username, $password);
	
	if(!isset($_POST['submit'])){
		exit("錯誤執行");
	}//判斷是否有submit操作
	$userId=filter_input(INPUT_POST,'name');
	$userPassword=filter_input(INPUT_POST,'password');
	if ($userId && $userPassword){
		$str = "insert into `user` (`account`,`password`) values (:userId,:userPassword)";
		$select = $link->prepare($str);
		//var_dump($select);
		$select->execute(compact('userId', 'userPassword'));
		echo "註冊成功";//成功輸出註冊成功
		echo "
			<script>
			setTimeout(function(){window.location.href='login.html';},1000);
			</script>
			";
	}
	else {
		echo "註冊失敗";//成功輸出註冊成功
		echo "
			<script>
			setTimeout(function(){window.location.href='signup.html';},1000);
			</script>
			";
	}
	
	//$select->execute(array($userId,$userPassword));

?>

