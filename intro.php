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
						<h1>專題介紹</h1>
						<p>利用Bootstrap建立友善的UI/UX框架系統</p>
					</header>
					
					<header>
						<h2>概要</h2>
						<p>開發一個 Bootstrap 的修改系統，讓開發者能夠方便的將欲處理程式碼映射到源程式碼，進而使得開發者有更自由的空間，不必受限於源代碼的框架，同時也解決了不一致性的問題、以及降低維護上的成本，幫助網頁前端工程師進行更方便的網站開發。
</p>
				
					</header>
					<header>
						<h2>專題動機</h2>
						<ul>
							<li>Bootstrap的CSS 採複用且混合的寫法</li>
							<li>市面上沒有讓人線上修改的系統</li>
							<li>Bootstrap客製化程度不高</li>
						</ul>
						
					</header>
					
					<a href="images/struct.jpg"><img src="images/struct.png" alt="專題架構" style="width:70%;"/></a>
					<header>
						<h2>主要概念</h2>
						<p>我們分為修改以及轉換兩個部分去實現我們的專題，修改部分是負責將使用者的程式碼做管理以及更新修改。而轉換的部分則是將使用者修改的預處理程式碼LESS轉換成CSS，壓縮後提供一URL提供使用者使用。</p>
						
					</header>
						<h4>修改部分包括</h4>
						<ul>
							<li>會員系統</li>
							<li>專案及模板管理</li>
							<li>編輯器視覺化</li>
							<li>Ajax及時顯現</li>

						</ul>
						<h4>轉換部分包括</h4>
						<ul>
							<li>建立會員資料目錄</li>
							<li>LESS轉CSS</li>
							<li>產出URL並回傳</li>
						</ul>
					<header>
						<h2>專題特色</h2>
						<ul>
							<li>使用預處理語言- LESS</li>
							<li>行動端編輯</li>
							<li>設有會員系統供雲端儲存</li>
						</ul>
						
						<h2>專題結論</h2>
						<ul>
							<li>在未來希望能夠加快LESS轉CSS的速度。</li>
							<li>增加更多子分類的Bootstrap元件方便使用者進行修改。</li>
							<li>希望透過此框架修改系統使得網頁前端工程師在進行網頁開發時更為方便。</li>
						</ul>
						
					</header>

					
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