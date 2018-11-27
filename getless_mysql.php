
<?php
session_start();
$q = $_POST["q"];
$v = $_POST["v"];

 
if(empty($q)) {
    echo '請選擇一個項目';
    exit;
}
 
include("mysql_connect.inc.php");//連接資料庫

$_SESSION["catagory"]=$q; //全域變數去存q值，以供update_less.php使用
$_SESSION["version"]=$v;  //全域變數去存q值，以供update_less.php使用
$p=$_SESSION["project_name"];
echo $_SESSION["user_name"];
echo $p;
echo $v;
echo $q;
$sql="SELECT * FROM less_list WHERE person_name ='$_SESSION[user_name]' AND project_name='$p' AND version_name='$v'";

 
$result=mysqli_query($db,$sql);
 

$row = mysqli_fetch_assoc($result); 

echo '<form method="post" action="update_less.php">';


echo '<textarea   rows="30"  id="LessText" name="LessText">';

if($q==1)
{
	echo htmlspecialchars_decode($row['less_carousel']);
	//$valueofless=htmlspecialchars_decode($row['less_carousel']);
}
	
else if($q==2)
{
	echo htmlspecialchars_decode($row['less_alerts']);
	
}
else if($q==3)
{
	echo htmlspecialchars_decode($row['less_navbar']);
	
}
else if($q==4)
{
	echo htmlspecialchars_decode($row['less_dropdowns']);
	
}
else if($q==5)
{
	echo htmlspecialchars_decode($row['less_tables']);
	
}
echo '</textarea>';
echo '<br>';
echo '<input class="special" type="submit" value="Update"/>';
echo '</form>';



mysqli_close($db);
?>

		
