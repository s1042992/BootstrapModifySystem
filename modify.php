<?php session_start(); ?>
<!DOCTYPE HTML>
<!--
	Telemetry by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>Booth</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		 <link rel="stylesheet" href="http://codemirror.net/lib/codemirror.css">
		<link rel="shortcut icon" href="images/booth-32.ico" type="image/x-icon" />
		<link rel="stylesheet" href=" https://codemirror.net/3/theme/lesser-dark.css">
		
		
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<div class="logo">
						<a href="index.php">Booth</a><span> By NCYU stud.</span>
					</div>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<?php
								if(isset($_SESSION["user_name"])==null)
								{
									echo '<li><a href="login.html">登入</a></li>';
									
								
								}
							
								if(isset($_SESSION["user_name"])!=null)
								{
									echo '<li><a href="logout.php">登出</a></li>';
									echo '<li><a href="member.php" class="icon fa-user" >';
									echo $_SESSION["user_name"];
									echo '</a></li>';
								}
							?>
							<li>
								<a href="intro.php" class="icon fa-angle-down">介紹</a>
								<ul>
									<li><a href="staff.php">成員介紹</a></li>
									<li>
										<a href="intro.php">專題介紹</a>
										<ul>
											<li><a href="frontend.php">修改介紹</a></li>
											<li><a href="backend.php">轉換介紹</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="#" class="icon fa-angle-down">教學</a>
								<ul>
									<li><a href="generic.php">LESS變數</a></li>
									<li><a href="generic2.php">Bootstrap混合</a></li>
								</ul>
							</li>
							
						</ul>
					</nav>

			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">

					<header>
						<h1>Modify</h1>
						<p>Make your own design</p>
					</header>
					<a href="#" class="image main"><img src="images/brightwrite.jpg" style="-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;" alt="" /></a>
					<?php 
								include("mysql_connect.inc.php");//連接資料庫
								$p = @$_POST["project_select"];
								
								if($p!="")
								{
									$_SESSION["project_name"]=$p;
									$pname=$_SESSION["project_name"];
									echo $pname;
								}
								$name=$_SESSION["user_name"];
								$sql="SELECT * FROM `less_list` WHERE `person_name`='$name' AND `project_name`='$_SESSION[project_name]'";
								$result=mysqli_query($db,$sql);
								$num=1;
								$row = mysqli_fetch_assoc($result);
								if($row)
									echo $name;
						?>
						<div class="select-wrapper">
							<select name="version_select" id="version_select" onchange="showLess()" >
								<option value="">- Category -</option>
								<?php 
								$result=mysqli_query($db,$sql);
								 while($row = mysqli_fetch_assoc($result)):;
								
									echo'<option value="';
									echo $row['version_name'];
									echo'">';
									echo $row['version_name'];
									echo'</option>';
								
								endwhile;?>
								</select>
								</br>
							
						</div>
						
								
					<div class="12u$">
						<div class="select-wrapper">
							<select name="less" id="category" onchange="showLess()">
								<option value="">- Category -</option>
								<option value="1">Carousel</option>
								<option value="2">Alerts</option>
								<option value="3">Navbar</option>
								<option value="4">Dropdowns</option>
								<option value="5">Tables</option>
							</select>
						</div>
						</br>
						<div id="txtHint"></div>
						
						 
						
						
						
					</div>
					</br>
					</br>
					<input type="button" value="獲取CSS" onclick="getUrl()">
					
					</br>
					</br>
					<form method="post" action="add_version.php">
						<div class="6u 12u$(xsmall)">
							<input type="text" name="version_name" id="version_name" value="" placeholder="Template Name" />
						</div>
						</br>
						<div class="6u 12u$(xsmall)">
							<input type="submit" value="新增樣板" class="special" />
						</div>
					</form>
					<script> 
					
						function HightLight()
						{
							var editableCodeMirror = CodeMirror.fromTextArea(document.getElementById('LessText'), {
								
								theme: "default",
								mode: "text/x-less",
								matchBrackets: true,
								lineNumbers: true
							});
						}
						HightLight();
						function showLess() //AJAX部分
						{
							var str = document.getElementById("category").value;
							var str_v = document.getElementById("version_select").value;
							if (str==""||str_v=="")
							{
								document.getElementById("txtHint").innerHTML="";
								return;
							} 
							if (window.XMLHttpRequest)
							{
								// IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
								xmlhttp=new XMLHttpRequest();
							}
							else
							{
								// IE6, IE5 浏览器执行代码
								xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
							}
							xmlhttp.onreadystatechange=function()
							{
								if (xmlhttp.readyState==4 && xmlhttp.status==200)
								{
									
									document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
									HightLight();
									
								}
							}
							var params = 'q=' +str+'&v='+str_v;
							xmlhttp.addEventListener("change",HightLight);
							xmlhttp.open("POST","getless_mysql.php",true);
							
							xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
							xmlhttp.send(params);
						
						}
						function getUrl()
						{
							var UserName = "<?php echo $name; ?>";
							var ProjectName = "<?php echo $_SESSION['project_name']; ?>";
							var VersionName = document.getElementById("version_select").value;
							location.href="http://120.113.173.173/boot/nodejs/src/"+UserName+"/"+ProjectName+"/"+VersionName+"/custom-bootstrap.css";
						}

					</script>
								
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="split style1">
						<div class="contact">
							<h2>Contact</h2>
							<ul class="contact-icons">
								<li class="icon fa-home"><a href="#">1234 Fictional Street #5432<br>Nashville, TN 00000-0000</a></li>
								<li class="icon fa-phone"><a href="#">(000) 000-0000</a></li>
								<li class="icon fa-envelope-o"><a href="#">info@untitled.tld</a></li>
							</ul>
							<ul class="icons-bordered">
								<li><a class="icon fa-facebook" href="#">
									<span class="label">Facebook</span>
								</a></li>
								<li><a class="icon fa-twitter" href="#">
									<span class="label">Twitter</span>
								</a></li>
								<li><a class="icon fa-instagram" href="#">
									<span class="label">Instagram</span>
								</a></li>
								<li><a class="icon fa-github" href="#">
									<span class="label">GitHub</span>
								</a></li>
								<li><a class="icon fa-linkedin" href="#">
									<span class="label">LinkedIn</span>
								</a></li>
							</ul>
						</div>
						
					</div>
					<div class="copyright">
						<p>&copy; Untitled. All rights reserved.</p>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
		
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.selectorr.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="http://codemirror.net/lib/codemirror.js"></script>
		<script src="http://codemirror.net/addon/edit/matchbrackets.js"></script>
		<script src="http://codemirror.net/addon/edit/continuecomment.js"></script>
		<script src="https://codemirror.net/3/mode/less/less.js"></script>
			
	</body>
</html>