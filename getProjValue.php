<?php
	session_start();
	if(isset($_GET["proj"]))
	{
		$projName=$_GET["proj"];
		//echo $projName;
		include("mysql_connect.inc.php");//連接資料庫
		$name=$_SESSION["user_name"];
		//echo $name;
		echo "</br>";
		$sql="SELECT * FROM `less_list` WHERE `person_name`='$name' AND `project_name`='$projName'";
		$result=mysqli_query($db,$sql);
		echo"<select name='version' id='version'>";
		echo"<option value=''>- Version -</option>";
		 while($row = mysqli_fetch_array($result)):;
			echo"<option value='";
			echo $row['version_name'];
			echo"'>";
			echo $row['version_name'];
			echo"</option>";			
		endwhile;
		echo"</select>";
		echo "</br>";
		echo "</br>";
		echo "<input type='button' value='獲取CSS' onclick='getUrl()'>";
		
		echo
		"<script>
		function getUrl()
		{
			var UserName ='";
			echo $name; 
			echo"';";
			echo"var ProjectName ='";
			echo $projName;
			echo "';";
			echo"var VersionName = document.getElementById('version').value;";
			echo"location.href='http://120.113.173.173/boot/nodejs/src/'+UserName+'/'+ProjectName+'/'+VersionName+'/custom-bootstrap.css'";
		echo
		"}
		</script>";
	}
?>