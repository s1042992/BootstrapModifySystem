<?php
session_start();
$q = isset($_GET["q"]) ? intval($_GET["q"]) : '';
$p = isset($_GET["project_select"]) ? intval($_GET["project_select"]) : ''; 
if(empty($q)) {
    echo '請選擇一個項目';
    exit;
}
 
include("mysql_connect.inc.php");//連接資料庫

$name=$_SESSION["user_name"];

$sql="SELECT * FROM `personal` WHERE `user_name` ='$name' AND `project_name`='$p'";

$num=0;
$result=mysqli_query($db,$sql);
 

while ($row = mysql_fetch_array($result))  
{
	echo $row["version_name"];
    echo '<option value='.$num.'>'.$row["version_name"].'</option>';
	$num+=1;
} 
 
 



 
mysqli_close($db);
?>