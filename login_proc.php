<?php
	session_start();
	$ID='funju';
	$PWD='ayaka';
	if(!empty($_POST['id']) && !empty($_POST['pwd'])){
		if($_POST['id']==$ID && $_POST['pwd']==$PWD){
			$_SESSION['is_login']=true;
			$_SESSION['nickname']='Hogeon PAPA';
			header('Location: ./session.php');
			exit;
		}
	}
	echo 'Denied!';
?>