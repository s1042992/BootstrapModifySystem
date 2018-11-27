<?php session_start(); ?>
<meta charset="UTF-8">
<?php
	include("mysql_connect.inc.php");//連接資料庫
	$get_account=$_POST["account"];
	$get_password=$_POST["password"];
	$sql = "SELECT * FROM user where user_name = '$get_account'";
	$result = mysqli_query($db,$sql);
	$row=mysqli_fetch_row($result);
	if($get_account != null && $get_password != null && $row[1] == $get_account && $row[2] == $get_password)
	{
		$_SESSION['user_name'] = $get_account;
		echo '登入成功!';
		header('Location: index.php');
	}
	else 
	{
		echo '登入失敗!';
	    header('Location: access_denied.html');
	}
?>