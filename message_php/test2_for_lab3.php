
<?php

	header("Content-Type: text/html; charset=utf8");
	include('db.php');//連結資料庫
	if(isset($_POST["signup"]) && $_POST["signup"]=="註冊"){
		header("refresh:0;url=signup.html");
	}
	else if(isset($_POST["submit"]) && $_POST["submit"] == "登入"){
		
		$name = $_POST['name'];//post獲得使用者名稱錶單值
		$passowrd = $_POST['password'];//post獲得使用者密碼單值
		if ($name && $passowrd){//如果使用者名稱和密碼都不為空
			
			$sql = "SELECT * FROM `user` WHERE account = '$name' and password='$passowrd'" ;//檢測資料庫是否有對應的username和password的sql
			
			$result = mysqli_query($link, $sql);//執行sql
			/*while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
			{
		    	print_r($row);
			}*/
			
			$rows=mysqli_num_rows($result);//返回一個數值
			//var_dump($rows);
			if($rows){//0 false 1 true
				header("refresh:0;url=messenger.php");//如果成功跳轉至messenger.php頁面
				exit;
			}else{
				echo "使用者名稱或密碼錯誤";
				echo "
				<script>
				setTimeout(function(){window.location.href='login.html';},1000);
				</script>
				";//如果錯誤使用js 1秒後跳轉到登入頁面重試;
			}
		}
		else{//如果使用者名稱或密碼有空
			echo "表單填寫不完整";
			echo "
			<script>
			setTimeout(function(){window.location.href='login.html';},1000);
			</script>";
			//如果錯誤使用js 1秒後跳轉到登入頁面重試;
		}
		mysqli_free_result ($result);
		mysqli_close($link);//關閉資料庫
	}//檢測是否有submit操作 
	
?>

