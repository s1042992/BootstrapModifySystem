<?php
	session_start();
	include("mysql_connect.inc.php");//連接資料庫
	$q=$_SESSION["catagory"];
	$v=$_SESSION["version"];
	$name=$_SESSION["user_name"];
	$p=$_SESSION["project_name"];
	
	$less_text=htmlspecialchars($_POST['LessText'],ENT_QUOTES);
	
	
	
	
	if($q==1)
		$sql="UPDATE less_list SET less_carousel='$less_text' WHERE project_name='$p' AND version_name ='$v' AND person_name='$name' ";
	else if($q==2)
		$sql="UPDATE less_list SET less_alerts='$less_text' WHERE project_name='$p' AND version_name ='$v' AND person_name='$name'";
	else if($q==3)
		$sql="UPDATE less_list SET less_navbar='$less_text' WHERE project_name='$p' AND version_name ='$v' AND person_name='$name'";
	else if($q==4)
		$sql="UPDATE less_list SET less_dropdowns='$less_text' WHERE project_name='$p' AND version_name ='$v' AND person_name='$name'";
	else if($q==5)
		$sql="UPDATE less_list SET less_tables='$less_text' WHERE project_name='$p' AND version_name ='$v' AND person_name='$name'";

	mysqli_query($db,$sql)or die (mysqli_error($db)); //執行sql語法
	header("location:modify.php");
?>
	