<?php session_start(); ?>
<!DOCTYPE HTML>
<!--
	Telemetry by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link rel="icon" href="images/booth.ico" type="image/x-icon" />

		<link rel="shortcut icon" href="images/booth-32.ico" type="image/x-icon" />
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header" class="alt">

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

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<span class="icon fa-laptop"></span>
					<h1>還不知道如何更加方便地修改你的CSS嗎...?</h1>
					<ul class="actions">
						<li><a href="./select_project.php" class="button wide scrolly">Get Started</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner">
					<div class="split style1 centered reversed">
						<section>
							<span class="image fit portrait"><img src="images/home4.jpg" alt="" /></span>
						</section>
						<section>
							<h2>我們有以下幾點特色...</h2>
							<div class="features">
								<article class="icon fa-diamond">
									<h3>使用LESS修改</h3>
									<p>基於Bootstrap的CSS框架，我們讓使用者利用LESS語言修改，再將使用者的LESS轉成CSS並壓縮，比起直接修改CSS更加方便。</p>
								</article>
								<article class="icon fa-tablet">
									<h3>行動端編輯</h3>
									<p>在這個人手一機的時代，編程不再需要編輯器或電腦，只要有一台手機，連上我們的網站，人人都能編程。</p>
								</article>
								<article class="icon fa-cloud">
									<h3>雲端儲存</h3>
									<p>使用者的程式碼都將儲存在雲端，隨時方便編輯或提供使用者匯入自己的網頁使用。</p>
								</article>
								<article class="icon fa-pencil">
									<h3>直覺操作</h3>
									<p>我們網站有著清晰、直覺化的介面，就算是初來乍到的使用者也能夠透過我們設計的流程，輕鬆使用我們的網站。</p>
								</article>
							</div>
						</section>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<div class="stats">
						<article>
							<h3><span>18.7</span>億</h3>
							<p>世界上使用Bootstrap框架的網頁數量</p>
						</article>
						<article>
							<h3><span>40</span>天</h3>
							<p>平均一個網站開發所耗費的時間</p>
						</article>
						<article>
							<h3><span>75</span>%</h3>
							<p>曾經想修改原生Bootstrap的設計師比例</p>
						</article>
						<article>
							<h3><span>52</span>%</h3>
							<p>行動上網用戶佔所有網際網路流量</p>
						</article>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
					<ul class="tabs">
						<li>
							<h3>簡介</h3>
							<div class="split reversed">
								<div class="content">
									<h2>網站概述</h2>
									<p>Booth這個網站具備著清晰易了解的設計，從創立專案與新增版本，一直到修改Less和取得CSS的Url，透過此網站直覺化的流程可以使初次使用的用戶，也能夠快速地上手。</p>
									<ul class="actions">
										<li><a href="#" class="button">Learn More</a></li>
									</ul>
								</div>
								<div class="image"><img src="images/design.jpg" style="-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;"alt="" /></div>
							</div>
						</li>
						<li>
							<h3>前端</h3>
							<div class="split reversed">
								<div class="content">
									<h2>前端概述</h2>
									<p>只要註冊完帳號，使用者便能在此選擇不同的專案、版本，並且可以根據不同的項目分別進行編輯與設計。使用者可以透過Booth內的編輯器，直接在網頁上進行編輯、上傳、儲存，並取得專屬於自己的CSS Url。</p>
									<ul class="actions">
										<li><a href="#" class="button">Learn More</a></li>
									</ul>
								</div>
								<div class="image"><img src="images/frontend.jpg" style="-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;"alt="" /></div>
							</div>
						</li>
						<li>
							<h3>後端</h3>
							<div class="split reversed">
								<div class="content">
									<h2>後端概述</h2>
									<p>後端將使用者在資料庫的資料進行處理，將欲處理之程式碼映射至原程式碼，透過自動化處理將所有LESS程式碼轉換成CSS並壓縮，並在相應之資料位置產生固定的Url以供使用者Import。</p>
									<ul class="actions">
										<li><a href="#" class="button">Learn More</a></li>
									</ul>
								</div>
								<div class="image"><img src="images/backend.jpg" style="-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;"alt="" /></div>
							</div>
						</li>
					</ul>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="quotes">
				<article class="icon fa-quote-left">
					<span class="image"><img src="images/pic03.jpg" alt="" data-position="center" /></span>
					<h2>"身為一個設計師，絕對必要的條件就是「熱情」。擁有「將自己的感動，傳遞給其他人」的心情是很重要的"</h2>
					<div class="author">
						<span class="name">-Fumi Sasada</span>
						<span class="title">笹田史仁</span>
					</div>
				</article>
				<article class="icon fa-quote-left">
					<span class="image"><img src="images/pic04.jpg" alt="" data-position="left" /></span>
					<h2>"我相信設計也是一種語言。但設計和所有語言一樣，本身沒有價值，唯有說了值得訴說的事情，才算發揮功用。"</h2>
					<div class="author">
						<span class="name">-Mark Porter</span>
						<span class="title">馬克•波特</span>
					</div>
				</article>
			</section>

		<!-- Five -->
			

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
								<li><a class="icon fa-facebook" href="https://www.facebook.com/NCYU_Booth-340730920070762/">
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
						<form action="https://formspree.io/uuu0919twtw@yahoo.com.tw" method="post">
							<h2>Email Us</h2>
							<div class="field half first">
								<input name="name" id="name" placeholder="Name" type="text" />
							</div>
							<div class="field half">
								<input name="_replyto" id="email" placeholder="Email" type="email" />
							</div>
							<div class="field">
								<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
							</div>
							<ul class="actions">
								<li><input value="Send Message" class="button" type="submit" /></li>
							</ul>
						</form>
					</div>
					<div class="copyright">
						<p>本專題為科技部大專生計畫之補助對象</p>
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