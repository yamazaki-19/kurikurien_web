<?php get_header(); ?>
<section class="kurinen-year">
    <div class="container">
        <h2 class="section-title">くりくり園の一年</h2>

        <!-- 春 -->
        <section class="season season-spring">
            <h3 class="season-title">春</h3>
            <div class="season-content">
                <div class="text-box">
                    <p>春の作業内容などのテキスト</p>
                </div>
                <div class="image-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spring01.jpg" alt="春の作業風景1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spring02.jpg" alt="春の作業風景2">
                    <!-- 必要な枚数分 -->
                </div>
            </div>
        </section>

        <!-- 夏 -->
        <section class="season season-summer">
            <h3 class="season-title">夏</h3>
            <div class="season-content">
                <!-- 同様にテキストと画像 -->
            </div>
        </section>

        <!-- 秋・冬も同様に -->
    </div>
</section>


<?php get_footer(); ?>