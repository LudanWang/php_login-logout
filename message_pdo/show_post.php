

<?php  
	$title = $_POST['title'];
	$content = $_POST['content'];
	$publish = $_POST['publish'];
?>

<p>標題:<?php echo $title; ?></p>
<p>內容:<?php echo $content; ?></p>
<p>發布狀況:<?php echo $publish; ?></p>

<p>
	<a href="logout.php">登出</a>
</p>