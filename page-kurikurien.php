<?php get_header(); ?>

<section class="sub_kv">
    <picture>
        <!-- スマホ用画像（768px以下） -->
        <source srcset="<?php echo get_template_directory_uri(); ?>/image/sp_sub_kv.png" media="(max-width: 768px)">
        <!-- デフォルト画像（PC用） -->
        <img src="<?php echo get_template_directory_uri(); ?>/image/sub_kv_all.png" alt="くりくり園のイメージ画像">
    </picture>
</section>
<!-- パンくずリスト -->
<div class="breadcrumb">
    <a href="<?php echo home_url(); ?>">TOP</a> &gt; <span>くりくり園の一年</span>
</div>

<div class="decorated-box">
    <!-- 上部の画像 -->
    <img src="<?= get_template_directory_uri(); ?>/image/3malon.png" alt="" width="397" height="127" class="decorated-box__top">

    <div class="decorated-box__middle">
        <!-- 左右の画像 -->
        <img src="<?= get_template_directory_uri(); ?>/image/red_tree.png" alt="" width="138" height="118" class="decorated-box__left">
        <div class="decorated-box__center">
            栗の木の育成からお菓子の仕上げまで、<br>
            ほぼ全ての工程を職人たちの手作業によって行われています。<br>
            お菓子を通し、お客様に笑顔をお届けすること、<br>
            それが私たち「たこまん」の願いです。
        </div>
        <img src="<?= get_template_directory_uri(); ?>/image/glass.png" alt="" width="107" height="106" class="decorated-box__right">
    </div>

    <!-- 下部の画像 -->
    <img src="<?= get_template_directory_uri(); ?>/image/3malon.png" alt="" width="397" height="127" class="decorated-box__bottom">
</div>

<div class="season_back">
    <img src="<?= get_template_directory_uri(); ?>/image/mountain_back.png" alt="">
</div>
<section class=" season">
    <div class="season_inner">


    </div>
</section>


<?php get_footer(); ?>