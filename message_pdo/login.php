
<?php 
	
    include('db.php');//連結資料庫
	$link = new PDO($dsn, $username, $password);
	
	$sql="SELECT * FROM user " ;
	$statement = $link->prepare($sql);
	
	$userId=filter_input(INPUT_POST,'name');
	$userPassword=filter_input(INPUT_POST,'password');
	if ($userId && $userPassword){
		$statement->bindValue('account',$userId,PDO::PARAM_INT);
		$statement->execute();
		$islogin = false;
		$results=$statement->fetchAll(PDO::FETCH_ASSOC);
		
			foreach($results as $result){
				if ($result["account"] == $userId && $result["password"] == $userPassword ){
					$islogin = true;break;
				}
			}
			if($islogin){
				header("refresh:0;url=messenger.php");
			}
			else{
				echo "使用者名稱或密碼錯誤";
				echo "
				<script>
				setTimeout(function(){window.location.href='login.html';},1000);
				</script>
				";//如果錯誤使用js 1秒後跳轉到登入頁面重試;
			}
		}else{
			echo "表單填寫不完整";
			echo "
			<script>
			setTimeout(function(){window.location.href='login.html';},1000);
			</script>";
		}
?>

