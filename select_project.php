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
						<h1>選擇專案</h1>
						<p>Select your project</p>
					</header>
					
					<div class="12u$">
					<button class="special" id="b1" onclick="addnew()">新增新專案</button>
					<div id="add"></div>
					
					<script>
					function addnew(){
						//增加欄位供填寫
						document.getElementById('add').innerHTML +='</br><form method="post" action="add_project.php"><div class="row uniform"><div class="6u 12u$(xsmall)"><input type="text" name="project_name" id="project_name" value="" placeholder="Project Name" /></div><div class="6u 12u$(xsmall)"><input type="submit" value="新增" class="special" /></div>';
						var currentbtn = document.getElementById('b1'); //隱藏新增按鈕
						currentbtn.style.display="none";
					}
					</script>
						</br>
						<?php 
								include("mysql_connect.inc.php");//連接資料庫
								
								$name=$_SESSION["user_name"];
								$sql="SELECT * FROM `personal` WHERE `user_name`='$name'";
								$result=mysqli_query($db,$sql);
								
						?>
						<div class="select-wrapper">
						<form action="modify.php" method="post">
							<select name="project_select" id="project_select">
								<option value="">- Category -</option>
								<?php 
								 while($row1 = mysqli_fetch_array($result)):;?>
					
								<option value="<?php echo $row1['project_name'];?>"><?php echo $row1['project_name'];?></option>
								
								<?php 
								$num=$num+1;
									endwhile;?>
								</select>
								</br>
								
							<input type="submit" value="確定" class="special">
						</form>
						</div>
						<br>
						<script>
							function sendProjectname()
							{
							  location.href="modify.php?project_select="+document.project_select.value;
							}
						</script>
						
						
					</div>
					
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

	</body>
</html>