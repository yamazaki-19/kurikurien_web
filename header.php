<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- 電話番号が自動的にリンク扱いにされるのを防ぐ。 -->
	<meta name="format-detection" content="telephone=no" />

	<!-- ファビコン画像の指定。 -->
	<link rel="icon" href="<?= get_template_directory_uri(); ?>/image/favicon.png" />


	<!-- スマホでホームにサイトを追加したときに表示するアイコン画像の指定。 -->
	<link rel="apple-touch-icon" sizes="180x180" href="icon.png" />

	<!--SNS共有関係-->
	<meta property="og:url" content="<?= home_url(); ?>" />
	<meta property="og:title" content="自社農園「くりくり園」Webサイト" />
	<meta property="og:type" content="website" />

	<meta property="og:description" content="2021年から自社農園化した「くりくり園」。日々の活動報告や限定商品を紹介していきます。" />
	<meta property="og:image" content="<?= get_template_directory_uri(); ?>/image/kurikurien_img.jpg" />

	<!--絶対パスのURLで設定-->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="自社農園「くりくり園」Webサイト" />
	<meta name="twitter:description" content="2021年から自社農園化した「くりくり園」。日々の活動報告や限定商品を紹介していきます。" />
	<meta name="twitter:image" content="<?= get_template_directory_uri(); ?>/image/kurikurien_img.jpg" />



	<title>自社農園「くりくり園」</title>
	<meta name="description" content="自社農園「くりくり園」のコーポレートサイト" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
		<div class="header_inner">
			<h1 class="logo">
				<a href="<?php echo home_url(); ?>#concept"><img src="<?= get_template_directory_uri(); ?>/image/logo.png" alt="くりくり園のロゴ" width="90" height="95" /></a>
			</h1>
			<!-- ハンバーガーメニューのボタン -->
			<div class="hamburger" id="hamburger">
				<div class="bar bar1"></div>
				<div class="bar bar2"></div>
				<div class="bar bar3"></div>
			</div>
			<!-- ナビゲーションメニュー -->
			<nav class="hamburger_nav" id="nav">
				<ul class="nav_title">
					<li><a href="<?php echo home_url(); ?>#top">TOP</a></li>
					<li><a href="<?php echo home_url(); ?>#concept">コンセプト</a></li>
					<li><a href="<?php echo home_url(); ?>#blog">くりくり園探訪記</a></li>
					<li><a href="<?php echo home_url(); ?>#instagram">Instagram</a></li>
					<li><a href="<?php echo home_url(); ?>#industry">栗を使ったお菓子たち</a></li>
					<li><a href="https://www.takoman.co.jp/" target="_blank" rel="noopener noreferrer">たこまん公式サイト</a></li>
					<li><a href="https://takoman-farm.jp/" target="_blank" rel="noopener noreferrer">TakomanFarmProject公式サイト</a></li>
				</ul>
			</nav>
		</div>
	</header>