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
<section class="season">
    <div class="season_inner">
        <div class="season_heading">
            <div class="season_heading_inner">
                <p class="season_label">Spring</p>
                <h2>春</h2>
                <div class="season_tags">
                    <span>剪定</span>
                    <span>苗植え</span>
                </div>
            </div>
        </div>
        <div class="season_description">
            <p>寒さも残る春の初め。<br>
                枯れてしまった木や弱った枝を切り、
                これから木がどんどん成長できるように剪定をします。</p>

            <p>またこのタイミングで苗を植えていきます。
                暖かくなると芽を伸ばそうとしてしまうため、
                寒いうちに植えて根に養分を行き渡らせます。</p>

            <p>過剰な肥料は与えず、枯葉など自然な養分を混ぜて土を耕し
                丈夫な根を張る環境を整えるのも大事なポイント。</p>

            <p>毎年30本ほど新しい苗を植えていきます。</p>

        </div>
    </div>
    <!-- スライダー -->
    <div class="season_slider splide" aria-label="春の写真スライダー">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide"><img src="<?php echo get_template_directory_uri(); ?>/image/spring1.png" alt=""></li>
                <li class="splide__slide"><img src="<?php echo get_template_directory_uri(); ?>/image/spring2.png" alt=""></li>
                <li class="splide__slide"><img src="<?php echo get_template_directory_uri(); ?>/image/spring3.png" alt=""></li>
            </ul>
        </div>
    </div>
</section>
<!-- 夏（反転） -->
<section class="season summer other reverse">
    <div class="season_inner">
        <div class="season_heading">
            <div class="season_heading_inner">
                <p class="season_label reverse">Summer</p>
                <h2>夏</h2>
                <div class="season_tags">
                    <span>追肥</span>
                    <span>草刈り</span>
                </div>
            </div>
        </div>
        <div class="season_description">
            <p>6月頃に花が咲き始めます。<br>
                栗の花が落ちる頃が梅雨の始まりであることから
                「栗花落（つゆり）」と呼ばれ、季節を表す言葉として
                使われています。</p>

            <p>また立派な実をつけられるよう肥料も追加していきます。</p>

            <p>この頃から一気に下草が伸びるため、こまめな草刈りは
                必須。<br>
                この草刈りによって害虫被害を減らしたり、刈り草を
                有機肥料として活用し土壌をより豊かにしていきます。
                炎天下の中、ほぼ毎日行っています。</p>
        </div>
    </div>
    <!-- スライダー -->
    <div class="season_slider splide" aria-label="夏の写真スライダー">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide"><img src="<?php echo get_template_directory_uri(); ?>/image/summer1.png" alt=""></li>
                <li class="splide__slide"><img src="<?php echo get_template_directory_uri(); ?>/image/summer2.png" alt=""></li>
                <li class="splide__slide"><img src="<?php echo get_template_directory_uri(); ?>/image/summer3.png" alt=""></li>
            </ul>
        </div>
    </div>
</section>
<!-- 秋 -->
<section class="season autumn other">
    <div class="season_inner">
        <div class="season_heading">
            <div class="season_heading_inner">
                <p class="season_label">Autumn</p>
                <h2>秋</h2>
                <div class="season_tags">
                    <span>収穫</span>
                    <span>御礼肥</span>
                </div>
            </div>
        </div>
        <div class="season_description">
            <p>待ちに待った収穫の秋。<br>
                広大な園内には、ツヤツヤで大きな栗がたくさん落ちています。</p>

            <p>栗拾いは社員だけでなく、ふれあいカード会員様もご参加
                いただける人気イベントで、毎年多数のご応募の中から抽選で
                参加者を決定しています。</p>

            <p>収穫後は、虫食いや栄養不足の栗がないかを丁寧に選別をします。
                選りすぐりの大粒な掛川栗を使って、たこまんのお菓子をお作り
                しているため、この時期ならではの栗のお菓子をぜひご賞味ください。</p>

            <p>また、収穫後には御礼肥を施し、栗の木にしっかりと栄養を与えています。</p>

        </div>
    </div>
    <!-- スライダー -->
    <div class="season_slider splide" aria-label="秋の写真スライダー">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide"><img src="<?php echo get_template_directory_uri(); ?>/image/autumn1.png" alt=""></li>
                <li class="splide__slide"><img src="<?php echo get_template_directory_uri(); ?>/image/autumn2.png" alt=""></li>
                <li class="splide__slide"><img src="<?php echo get_template_directory_uri(); ?>/image/autumn3.png" alt=""></li>
            </ul>
        </div>
    </div>
</section>
<!-- 冬（反転） -->
<section class="season winter other reverse">
    <div class="season_inner ">
        <div class="season_heading">
            <div class="season_heading_inner">
                <p class="season_label reverse">Winter</p>
                <h2>冬</h2>
                <div class="season_tags">
                    <span>剪定</span>
                </div>
            </div>
        </div>
        <div class="season_description">
            <p>この時期の栗の木は葉を落とし、休眠期間に入ります。<br>
                冬の間に剪定を行うことで木に負担をかけることなく
                樹形を調整し、次の成長時期に向けて良い状態を作ることが
                できます。</p>

            <p>今年実がなった枝は、もう実がならないので落として
                いきます。</p>

            <p>また、大きく伸びすぎた木を剪定することにより
                風通しを良くし、日当たりが均一化され病害虫の予防や
                栄養吸収の促進にも繋がってきます</p>
            <p>
                簡単に見える作業ですが、とても多くの事を考えて剪定して
                います。
            </p>
        </div>
    </div>
    <!-- スライダー -->
    <div class="season_slider splide" aria-label="冬の写真スライダー">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide"><img src="<?php echo get_template_directory_uri(); ?>/image/winter1.png" alt=""></li>
                <li class="splide__slide"><img src="<?php echo get_template_directory_uri(); ?>/image/winter2.png" alt=""></li>
                <li class="splide__slide"><img src="<?php echo get_template_directory_uri(); ?>/image/winter3.png" alt=""></li>
            </ul>
        </div>
    </div>
</section>
<?php get_footer(); ?>