<?php session_start(); ?>
<!DOCTYPE HTML>
<!--
	Telemetry by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>教學</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="assets/css/table.css" />
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
				
					<h1>LESS變數和變數值及用法指南</h1>
					<h2>超連結</h2>
					<table>
							<tbody>
							  <tr>
								<td><code>@linkColor</code></td>
								<td>#08c</td>
								<td>默認連結顏色</td>
								<td><span style="background-color: #08c;">&emsp;&emsp;</span></td>
							  </tr>
							  <tr>
								<td><code>@linkColorHover</code></td>
								<td><code>darken(@linkColor, 15%)</code></td>
								<td>默認hover時的顏色</td>
								<td><span style="background-color: #005580;">&emsp;&emsp;</span></td>
							  </tr>
							</tbody>
					</table>
				</div>
				
				<div class="inner">
					<h2>顏色</h2>
				  <table>
					<tbody>
					  <tr>
						<td><code>@black</code></td>
						<td>#000</td>
						<td><span class="swatch" style="background-color: #000;">&emsp;&emsp;</span></td>
					  </tr>
					  <tr>
						<td><code>@grayDarker</code></td>
						<td>#222</td>
						<td><span class="swatch" style="background-color: #222;">&emsp;&emsp;</span></td>
					  </tr>
					  <tr>
						<td><code>@grayDark</code></td>
						<td>#333</td>
						<td><span class="swatch" style="background-color: #333;">&emsp;&emsp;</span></td>
					  </tr>
					  <tr>
						<td><code>@gray</code></td>
						<td>#555</td>
						<td><span class="swatch" style="background-color: #555;">&emsp;&emsp;</span></td>
					  </tr>
					  <tr>
						<td><code>@grayLight</code></td>
						<td>#999</td>
						<td><span class="swatch" style="background-color: #999;">&emsp;&emsp;</span></td>
					  </tr>
					  <tr>
						<td><code>@grayLighter</code></td>
						<td>#eee</td>
						<td><span class="swatch" style="background-color: #eee;">&emsp;&emsp;</span></td>
					  </tr>
					  <tr>
						<td><code>@white</code></td>
						<td>#fff</td>
						<td><span class="swatch swatch-bordered" style="background-color: #fff;">&emsp;&emsp;</span></td>
					  </tr>
					</tbody>
				  </table>
				</div>
				
				<div class="inner">
					<h2>鮮豔色</h2>
					  <table>
						<tbody>
						  <tr>
							<td class="span2"><code>@blue</code></td>
							<td>#049cdb</td>
							<td class="swatch-col"><span class="swatch" style="background-color: #049cdb;">&emsp;&emsp;</span></td>
						  </tr>
						  <tr>
							<td><code>@green</code></td>
							<td>#46a546</td>
							<td><span class="swatch" style="background-color: #46a546;">&emsp;&emsp;</span></td>
						  </tr>
						  <tr>
							<td><code>@red</code></td>
							<td>#9d261d</td>
							<td><span class="swatch" style="background-color: #9d261d;">&emsp;&emsp;</span></td>
						  </tr>
						  <tr>
							<td><code>@yellow</code></td>
							<td>#ffc40d</td>
							<td><span class="swatch" style="background-color: #ffc40d;">&emsp;&emsp;</span></td>
						  </tr>
						  <tr>
							<td><code>@orange</code></td>
							<td>#f89406</td>
							<td><span class="swatch" style="background-color: #f89406;">&emsp;&emsp;</span></td>
						  </tr>
						  <tr>
							<td><code>@pink</code></td>
							<td>#c3325f</td>
							<td><span class="swatch" style="background-color: #c3325f;">&emsp;&emsp;</span></td>
						  </tr>
						  <tr>
							<td><code>@purple</code></td>
							<td>#7a43b6</td>
							<td><span class="swatch" style="background-color: #7a43b6;">&emsp;&emsp;</span></td>
						  </tr>
						</tbody>
					  </table>
				</div>
				
				<div class="inner">
					<h2>按鈕</h2>
					  <table class="reference">
						<tbody>
						  <tr>
							<td><code>@primaryButtonBackground</code></td>
							<td><code>@linkColor</code></td>
							<td class="swatch-col"><span class="swatch" style="background-color: #08c;">&emsp;&emsp;</span></td>
						  </tr>
						</tbody>
					  </table>
				</div>
				
				<div class="inner">
					<h2>表單</h2>
					  <table class="reference">
						<tbody>
						  <tr>
							<td><code>@placeholderText</code></td>
							<td><code>@grayLight</code></td>
							<td class="swatch-col"><span class="swatch" style="background-color: #999;">&emsp;&emsp;</span></td>
						  </tr>
						</tbody>
					  </table>

				</div>
				
				<div class="inner">
					<h2>Navbar</h2>
				  <table class="reference">
					<tbody>
					  <tr>
						<td class="span3"><code>@navbarHeight</code></td>
						<td>40px</td>
						<td class="swatch-col"></td>
					  </tr>
					  <tr>
						<td><code>@navbarBackground</code></td>
						<td><code>@grayDarker</code></td>
						<td><span class="swatch" style="background-color: #222;">&emsp;&emsp;</span></td>
					  </tr>
					  <tr>
						<td><code>@navbarBackgroundHighlight</code></td>
						<td><code>@grayDark</code></td>
						<td><span class="swatch" style="background-color: #333;">&emsp;&emsp;</span></td>
					  </tr>
					  <tr>
						<td><code>@navbarText</code></td>
						<td><code>@grayLight</code></td>
						<td><span class="swatch" style="background-color: #999;">&emsp;&emsp;</span></td>
					  </tr>
					  <tr>
						<td><code>@navbarLinkColor</code></td>
						<td><code>@grayLight</code></td>
						<td><span class="swatch" style="background-color: #999;">&emsp;&emsp;</span></td>
					  </tr>
					  <tr>
						<td><code>@navbarLinkColorHover</code></td>
						<td><code>@white</code></td>
						<td><span class="swatch swatch-bordered" style="background-color: #fff;">&emsp;&emsp;</span></td>
					  </tr>
					</tbody>
				  </table>
				</div>
				
				<div class="inner">
					<h2>表單狀態與通知</h2>
				  <table class="reference">
					<tbody>
					  <tr>
						<td class="span3"><code>@warningText</code></td>
						<td>#c09853</td>
						<td><span class="swatch" style="background-color: #c09853;">&emsp;&emsp;</span></td>
					  </tr>
					  <tr>
						<td><code>@warningBackground</code></td>
						<td>#f3edd2</td>
						<td class="swatch-col"><span class="swatch" style="background-color: #f3edd2;">&emsp;&emsp;</span></td>
					  </tr>
					  <tr>
						<td><code>@errorText</code></td>
						<td>#b94a48</td>
						<td><span class="swatch" style="background-color: #b94a48;">&emsp;&emsp;</span></td>
					  </tr>
					  <tr>
						<td><code>@errorBackground</code></td>
						<td>#f2dede</td>
						<td><span class="swatch" style="background-color: #f2dede;">&emsp;&emsp;</span></td>
					  </tr>
					  <tr>
						<td><code>@successText</code></td>
						<td>#468847</td>
						<td><span class="swatch" style="background-color: #468847;">&emsp;&emsp;</span></td>
					  </tr>
					  <tr>
						<td><code>@successBackground</code></td>
						<td>#dff0d8</td>
						<td><span class="swatch" style="background-color: #dff0d8;">&emsp;&emsp;</span></td>
					  </tr>
					  <tr>
						<td><code>@infoText</code></td>
						<td>#3a87ad</td>
						<td><span class="swatch" style="background-color: #3a87ad;">&emsp;&emsp;</span></td>
					  </tr>
					  <tr>
						<td><code>@infoBackground</code></td>
						<td>#d9edf7</td>
						<td><span class="swatch" style="background-color: #d9edf7;">&emsp;&emsp;</span></td>
					  </tr>
					</tbody>
				  </table>

				</div>
				<div class="inner">
					
				</div>
				<div class="inner">
					
				</div>
				<div class="inner">
					
				</div>
				<div class="inner">
					
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