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
		<link rel="stylesheet" href="assets/css/namecard.css" />
		<link rel="shortcut icon" href="images/booth-32.ico" type="image/x-icon" />
		
		
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
			<section id="main" class="wrapper container">
				<div class="inner">

					<header>
						<h1>專題成員</h1>
						<p>參與計畫人員介紹與分工</p>
					</header>
					
					
				<div class="movie_card" id="bright">
				  <div class="info_section">
					<div class="movie_header">
					  <p>指導教授</p>
					  <h2>李龍盛</h2>
					  
					</div>
					<div class="movie_desc">
					  <p class="text">
						負責此專案之指導，透過定期的會議給予專提生專題方向與建議，並且根據專題生遇到的問題討論解決的方法並且提供實質上的幫助。
					  </p>
					</div>
					
				  </div>
				  <div class="blur_back bright_back"></div>
				</div>

				<div class="movie_card" id="tomb">
				  <div class="info_section">
					<div class="movie_header">
					  <p>專題成員</p>
					  <h2>黃祺淵</h2>

					</div>
					<div class="movie_desc">
					  <p class="text">
						負責此專案之"修改"部分，包含專案與模板管理、會員系統、編輯器視覺化、前端設計等。曾考取經濟部工業局初級遊戲程式設計檢定、大三暑假參加日本明治大學理科計畫、代表台灣出賽亞洲跨國黑客松 。擔任學校電算中心網管，負責開發新版的RWD嘉義大學網頁。
					  </p>
					</div>
					
				  </div>
				  <div class="blur_back tomb_back"></div>
				</div>

				<div class="movie_card" id="ave">
				  <div class="info_section">
					<div class="movie_header">
					  <p>專題成員</p>
					  <h2>賴彥儒</h2>
					 

					</div>
					<div class="movie_desc">
					  <p class="text">
						醜。一言以蔽之。
					  </p>
					</div>
					
				  </div>
				  <div class="blur_back ave_back"></div>
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