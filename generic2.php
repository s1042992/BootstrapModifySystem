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
				
					<h1>Bootstrap 混合</h1>
					<h2>基本的混合</h2>		
					<p>基本的混合從本質上來說，是包括完整或部分Code片段。寫法類似一個Css，可以隨時調用。</p>
					<code>
					.element {
					  .clearfix();
					}
					</code>
				</div>
				<br><br><br>
				<div class="inner">
					<h2>帶參數的混合</h2>
					<p>帶參數的混合與基本混合很像，不同之處為前者可接收參數，參數可以有默認值。</p>
					<code>
					.element {
					.border-radius(4px);
					}
					</code>
				</div>
				<br><br><br>
				<div class="inner">
					<h2>方便定制</h2>
					<p>基本上Bootstrap所有的混合都保存在mixins.less， 這是一個出色的工具類.less文件，我們可以在任何一個.less文件中使用其中的混合。因此，直接使用已有的混合或是自定義一個新混合皆可。</p>
				</div>
				<hr>
				<div class="inner">
					<h1>包含混合</h1>
					<h2>實用工具</h2>
					  <table class="reference">
						<thead>
						  <tr>
							<th class="span4">混合</th>
							<th>參數</th>
							<th>用法</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td><code>.clearfix()</code></td>
							<td><em class="muted">無</em></td>
							<td>	清除浮動</td>
						  </tr>
						  <tr>
							<td><code>.tab-focus()</code></td>
							<td><em class="muted">無</em></td>
							<td>添加類似Webkit獲得焦點的風格和類似Firefox的外包線</td>
						  </tr>
						  <tr>
							<td><code>.center-block()</code></td>
							<td><em class="muted">無</em></td>
							<td>使用<code>margin: auto</code>把元素自動居中</td>
						  </tr>
						  <tr>
							<td><code>.ie7-inline-block()</code></td>
							<td><em class="muted">無</em></td>
							<td>添加規則的 <code>display: inline-block</code> 以支持IE7</td>
						  </tr>
						  <tr>
							<td><code>.size()</code></td>
							<td><code>@height: 5px, @width: 5px</code></td>
							<td>快速設置行高和行寬</td>
						  </tr>
						  <tr>
							<td><code>.square()</code></td>
							<td><code>@size: 5px</code></td>
							<td>基於<code>.size()</code> 設置正方形區域</td>
						  </tr>
						  <tr>
							<td><code>.opacity()</code></td>
							<td><code>@opacity: 100</code></td>
							<td>設置透明度的百分比(比如"50" 或"75")</td>
						  </tr>
						</tbody>
					  </table>
				</div>
				
				<div class="inner">
					<h2>表單</h2>
					  <table class="reference">
						<thead>
						  <tr>
							<th class="span4">混合</th>
							<th>參數</th>
							<th>用法</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td><code>.placeholder()</code></td>
							<td><code>@color: @placeholderText</code></td>
							<td>設置輸入框中 <code>placeholder</code> 的字體顏色</td>
						  </tr>
						</tbody>
					  </table>

				</div>
				
				<div class="inner">
					<h2>排版</h2>
					  <table class="reference">
						<thead>
						  <tr>
							<th class="span4">混合</th>
							<th>	參數</th>
							<th>用法</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td><code>#font &gt; #family &gt; .serif()</code></td>
							<td><em class="muted">無</em></td>
							<td>對某個元素應用一系列serif襯線字體</td>
						  </tr>
						  <tr>
							<td><code>#font &gt; #family &gt; .sans-serif()</code></td>
							<td><em class="muted">無</em></td>
							<td>對某個元素應用一系列sans-serif字體</td>
						  </tr>
						  <tr>
							<td><code>#font &gt; #family &gt; .monospace()</code></td>
							<td><em class="muted">無</em></td>
							<td>對某個元素應用一系列monospace字體</td>
						  </tr>
						  <tr>
							<td><code>#font &gt; .shorthand()</code></td>
							<td><code>@size: @baseFontSize, @weight: normal, @lineHeight: @baseLineHeight</code></td>
							<td>方便設置字體大小，粗細和行間距</td>
						  </tr>
						  <tr>
							<td><code>#font &gt; .serif()</code></td>
							<td><code>@size: @baseFontSize, @weight: normal, @lineHeight: @baseLineHeight</code></td>
							<td>設置襯線字體族serif，字體大小，粗細和行間距</td>
						  </tr>
						  <tr>
							<td><code>#font &gt; .sans-serif()</code></td>
							<td><code>@size: @baseFontSize, @weight: normal, @lineHeight: @baseLineHeight</code></td>
							<td>設置sans-serif字體族，字體大小，粗細和行間距</td>
						  </tr>
						  <tr>
							<td><code>#font &gt; .monospace()</code></td>
							<td><code>@size: @baseFontSize, @weight: normal, @lineHeight: @baseLineHeight</code></td>
							<td>設置monospace字體族，字體大小，粗細和行間距</td>
						  </tr>
						</tbody>
					  </table>


				</div>
				<div class="inner">
					<h2>柵格系統</h2>
					  <table class="reference">
						<thead>
						  <tr>
							<th class="span4">混合</th>
							<th>參數</th>
							<th>用法</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td><code>.container-fixed()</code></td>
							<td><em class="muted">無</em></td>
							<td>創建一個水平居中的容器，用以容納內容</td>
						  </tr>
						  <tr>
							<td><code>#grid &gt; .core()</code></td>
							<td><code>@gridColumnWidth, @gridGutterWidth</code></td>
							<td>使用 <em>n</em> 列和 <em>x</em> 像素間距寬度，生成一個像素柵格系統(容器，行，列)</td>
						  </tr>
						  <tr>
							<td><code>#grid &gt; .fluid()</code></td>
							<td><code>@fluidGridColumnWidth, @fluidGridGutterWidth</code></td>
							<td>使用 <em>n</em> 列和 <em>x</em>%間距寬度，生成一個百分比柵格系統</td>
						  </tr>
						</tbody>
					  </table>
				</div>
				
				<div class="inner">
					<h2>CSS3屬性</h2>
					  <table class="reference">
						<thead>
						  <tr>
							<th class="span3">混合</th>
							<th>參數</th>
							<th>用法</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td><code>.border-radius()</code></td>
							<td><code>@radius: 5px</code></td>
							<td>元素圓角化，可以是一個單獨的值，也可以分別是四個角的值</td>
						  </tr>
						  <tr>
							<td><code>.box-shadow()</code></td>
							<td><code>@shadow: 0 1px 3px rgba(0,0,0,.25)</code></td>
							<td>對元素應用陰影</td>
						  </tr>
						  <tr>
							<td><code>.transition()</code></td>
							<td><code>@transition</code></td>
							<td>	添加CSS3過渡效果(比如， <code>all .2s linear</code>)</td>
						  </tr>
						  <tr>
							<td><code>.rotate()</code></td>
							<td><code>@degrees</code></td>
							<td>旋轉一個元素<em>n</em> 度</td>
						  </tr>
						  <tr>
							<td><code>.scale()</code></td>
							<td><code>@ratio</code></td>
							<td>對一個元素縮放原有大小的 <em>n</em> 倍</td>
						  </tr>
						  <tr>
							<td><code>.translate()</code></td>
							<td><code>@x: 0, @y: 0</code></td>
							<td>在平面上移動x和y個像素</td>
						  </tr>
						  <tr>
							<td><code>.background-clip()</code></td>
							<td><code>@clip</code></td>
							<td>剪一個元素的背景(用於<code>border-radius</code>)</td>
						  </tr>
						  <tr>
							<td><code>.background-size()</code></td>
							<td><code>@size</code></td>
							<td>通過CSS3更改背景圖片的大小</td>
						  </tr>
						  <tr>
							<td><code>.box-sizing()</code></td>
							<td><code>@boxmodel</code></td>
							<td>改變一個元素的盒(box)模型(比如，用在100%寬度 <code>input</code> 上的 <code>border-box</code> )</td>
						  </tr>
						  <tr>
							<td><code>.user-select()</code></td>
							<td><code>@select</code></td>
							<td>更改頁面文本的選擇光標</td>
						  </tr>
						  <tr>
							<td><code>.resizable()</code></td>
							<td><code>@direction: both</code></td>
							<td>改變右下角坐標以重置元素大小</td>
						  </tr>
						  <tr>
							<td><code>.content-columns()</code></td>
							<td><code>@columnCount, @columnGap: @gridColumnGutter</code></td>
							<td>讓元素中的內容使用CSS3的列</td>
						  </tr>
						</tbody>
					  </table>

				</div>
				<div class="inner">
					  <h3>背景和漸變</h3>
						  <table class="reference">
							<thead>
							  <tr>
								<th class="span4">混合</th>
								<th>	參數</th>
								<th>用法</th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<td><code>#translucent &gt; .background()</code></td>
								<td><code>@color: @white, @alpha: 1</code></td>
								<td>設置一個元素的背景色和透明度</td>
							  </tr>
							  <tr>
								<td><code>#translucent &gt; .border()</code></td>
								<td><code>@color: @white, @alpha: 1</code></td>
								<td>設置一個元素的邊框的顏色和透明度</td>
							  </tr>
							  <tr>
								<td><code>#gradient &gt; .vertical()</code></td>
								<td><code>@startColor, @endColor</code></td>
								<td>建立一個跨瀏覽器的垂直背景漸變</td>
							  </tr>
							  <tr>
								<td><code>#gradient &gt; .horizontal()</code></td>
								<td><code>@startColor, @endColor</code></td>
								<td>建立一個跨瀏覽器的水平背景漸變</td>
							  </tr>
							  <tr>
								<td><code>#gradient &gt; .directional()</code></td>
								<td><code>@startColor, @endColor, @deg</code></td>
								<td>建立一個跨瀏覽器的有斜度的背景漸變</td>
							  </tr>
							  <tr>
								<td><code>#gradient &gt; .vertical-three-colors()</code></td>
								<td><code>@startColor, @midColor, @colorStop, @endColor</code></td>
								<td>建立一個跨瀏覽器的三色背景漸變</td>
							  </tr>
							  <tr>
								<td><code>#gradient &gt; .radial()</code></td>
								<td><code>@innerColor, @outerColor</code></td>
								<td>建立一個跨瀏覽器的放射背景漸變</td>
							  </tr>
							  <tr>
								<td><code>#gradient &gt; .striped()</code></td>
								<td><code>@color, @angle</code></td>
								<td>建立一個跨瀏覽器的條紋背景漸變</td>
							  </tr>
							  <tr>
								<td><code>#gradientBar()</code></td>
								<td><code>@primaryColor, @secondaryColor</code></td>
								<td>用於給按鈕指定漸變背景和淺暗的邊框</td>
							  </tr>
							</tbody>
						  </table>

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