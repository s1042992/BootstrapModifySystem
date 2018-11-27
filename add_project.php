<?php
	session_start();
	include("mysql_connect.inc.php");//連接資料庫
	
	$user=$_SESSION["user_name"];
	$get_name=htmlspecialchars($_POST["project_name"]);
	$_SESSION["project_name"]=$get_name;
	

			
	$sql = "INSERT INTO personal(user_name,project_name) VALUES ('$user','$get_name')";
	if (mysqli_query($db, $sql)) 
	{
		echo "<br> New record created successfully";
	} 
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($db);
	}
	
	;
	
	
	
	//mysqli_query($db,$sql)or die ("無法更新".mysql_error()); //執行sql語法
	header("location:firstversion.php");
?>
	