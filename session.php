<?php
	session_start();
	if(!$_SESSION['is_login']){
		header('Location: ./login.html');
	}
?>
<html>
<body>
	Hello
	<?php echo $_SESSION['nickname'];?>
	<a href='./logout_proc.php'>Logout</a>
</body>
</html>