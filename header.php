<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="format-detection" content="telephone=no" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/fav.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/icon.png" />

	<!--SNS共有関係-->
	<meta property="og:url" content="<?php echo home_url(); ?>" />
	<meta property="og:title" content="自社農園「くりくり園」Webサイト" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="2021年から自社農園化した「くりくり園」。日々の活動報告や限定商品を紹介していきます。" />
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/image/ogp.png" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@your_twitter" />
	<meta property="og:site_name" content="くりくり園" />
	<!-- FB App IDがあれば下記も使用 -->
	<!-- <meta property="fb:app_id" content="1234567890" /> -->

	<!--【開発中】検索除外 本番で必ず消す！-->
	<meta name="robots" content="noindex,nofollow" />

	<!-- CSSの読み込み -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@4.0.1/destyle.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top.css" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
	<script defer src="https://www.instagram.com/embed.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
		<div class="header_inner">
			<h1 class="logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="くりくり園のロゴ" width="90" height="95" />
				</a>
			</h1>
			<div class="hamburger" id="hamburger">
				<div class="bar bar1"></div>
				<div class="bar bar2"></div>
				<div class="bar bar3"></div>
			</div>
			<nav class="hamburger_nav" id="nav">
				<ul class="nav_title">
					<li><a href="#top">TOP</a></li>
					<li><a href="#concept">コンセプト</a></li>
					<li><a href="#blog">くりくり園探訪記</a></li>
					<li><a href="#instagram">Instagram</a></li>
					<li><a href="#industry">栗を使ったお菓子たち</a></li>
					<li><a href="https://www.takoman.co.jp/" target="_blank" rel="noopener noreferrer">たこまん公式サイト</a></li>
					<li><a href="https://takoman-farm.jp/" target="_blank" rel="noopener noreferrer">TakomanFarmProject公式サイト</a></li>
				</ul>
			</nav>
		</div>
	</header>