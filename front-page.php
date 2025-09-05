<?php get_header(); ?>
<div class="kv">
    <picture>
        <!-- スマホ用画像（幅768px以下） -->
        <source media="(max-width: 768px)" srcset="<?= get_template_directory_uri(); ?>/image/sp_kv.png">

        <!-- PC用画像（デフォルト） -->
        <img class="mv_bg" src="<?= get_template_directory_uri(); ?>/image/mv.png" alt="栗の収穫シーン" width="1440" height="840" />
    </picture>
</div>

<!-- ここから流れるタグ -->
<div class="tag">
    <ul class="tag_list">
        <li>a#北遠の栗</li>
        <li>#くりくり園</li>
        <li>#コラボレーション</li>
        <li>#期間限定スイーツ</li>
        <li>#栗の食べ方</li>
        <li>#栗拾い</li>
        <li>#剪定</li>
        <li>#収穫祭</li>
        <li>#イガイガ</li>
        <li>#たこまん</li>
        <li>#たこまんファームプロジェクト</li>
        <li>#みのり</li>
        <li>#くりくり園探訪記</li>
        <li>#Instagram</li>
        <li>#たこまんアウトドア部</li>
        <li>#イベント</li>

        <!-- ここから同じリストをもう1回繰り返す -->
        <li>#北遠の栗</li>
        <li>#くりくり園</li>
        <li>#コラボレーション</li>
        <li>#期間限定スイーツ</li>
        <li>#栗の食べ方</li>
        <li>#栗拾い</li>
        <li>#剪定</li>
        <li>#収穫祭</li>
        <li>#イガイガ</li>
        <li>#たこまん</li>
        <li>#たこまんファームプロジェクト</li>
        <li>#みのり</li>
        <li>#くりくり園探訪記</li>
        <li>#Instagram</li>
        <li>#たこまんアウトドア部</li>
        <li>#イベント</li>
    </ul>
</div>
<!-- ここまで流れるタグ -->
<!-- ここからブログ -->
<section class="blog_section fadein" id="blog">
    <h2 class="blog_main_title">くりくり園探訪記</h2>
    <div class="blog_container">
        <ul id="blog_list">
            <li>
                <div class="blog_img"><a href="https://takoman-farm.jp/blog/950/" target="_blank"><img
                            src="https://takoman-farm.jp/wp-content/uploads/2025/04/IMG_7863-3-scaled.jpg" alt="ブログのサムネイル" width="1707" height="2560"></a></div>
                <div class="blog_content">
                    <div class="blog_date_title">
                        <div class="blog_date">2025年04月11日</div>
                        <div class="blog_title"><a href="https://takoman-farm.jp/blog/950/">くりくり園探訪記№28
                                2025年2月〜4月-冬のくりくり園と春の訪れ‐</a></div>
                    </div>
                    <div class="blog_category"><a class="blog_tag_link"
                            href="/blog/?q_blog_keyword=&q_blog_tag=blog_kurikuri">#くりくり園探訪記</a></div>
                </div>
            </li>
            <li>
                <div class="blog_img"><a href="https://takoman-farm.jp/blog/930/" target="_blank"><img
                            src="https://takoman-farm.jp/wp-content/uploads/2024/11/アートボード-25-100.jpg" alt="ブログのサムネイル" width="1280" height="721"></a></div>
                <div class="blog_content">
                    <div class="blog_date_title">
                        <div class="blog_date">2024年11月26日</div>
                        <div class="blog_title"><a href="https://takoman-farm.jp/blog/930/">たこまんアウトドア部 活動記録№8
                                2024年11月〜くりくり園の今〜</a></div>
                    </div>
                    <div class="blog_category"><a class="blog_tag_link"
                            href="/blog/?q_blog_keyword=&q_blog_tag=%e3%81%9f%e3%81%93%e3%81%be%e3%82%93%e3%82%a2%e3%82%a6%e3%83%88%e3%83%89%e3%82%a2%e9%83%a8">#たこまんアウトドア部</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="blog_img"><a href="https://takoman-farm.jp/blog/843/" target="_blank"><img
                            src="https://takoman-farm.jp/wp-content/uploads/2024/07/アートボード-22-100.jpg" alt="ブログのサムネイル" width="1281" height="721"></a></div>
                <div class="blog_content">
                    <div class="blog_date_title">
                        <div class="blog_date">2024年07月03日</div>
                        <div class="blog_title"><a href="https://takoman-farm.jp/blog/843/">たこまんアウトドア部
                                活動記録№7<br>2024年6月〜草刈り体験＆涼スイーツ会〜</a></div>
                    </div>
                    <div class="blog_category"><a class="blog_tag_link"
                            href="/blog/?q_blog_keyword=&q_blog_tag=%e3%81%9f%e3%81%93%e3%81%be%e3%82%93%e3%82%a2%e3%82%a6%e3%83%88%e3%83%89%e3%82%a2%e9%83%a8">#たこまんアウトドア部</a>
                    </div>
                </div>
            </li>
        </ul>
        <div class="blog_img_container">
            <img src="<?= get_template_directory_uri(); ?>/image/mountain_white.png" alt="山のイラスト" width="686" height="172">
        </div>
    </div>
</section>
<!-- ここまでブログ -->
<!-- ここからブランドコンセプト -->
<section class="concept_section fadein" id="concept">
    <div class="concept_container">
        <div class="concept_side_title">
            <span class="concept_en">concept</span>
        </div>
        <div class="concept_main">
            <h2 class="concept_title">たこまん×地域素材</h2>
            <img class="concept_logo" src="<?= get_template_directory_uri(); ?>/image/logo.png" alt="たこまんファームプロジェクトロゴ" width="255" height="270" />
            <p class="concept_text">
                地元静岡の豊かな土地で大切に育てられた素材たち。<br />
                育て手の想いを引継ぎ、魅力溢れる素材を私たちたこ満が
                お菓子に変えてお届けするプロジェクト。<br />
                それが『TAKOMAN FARM PROJECT』です。
            </p>
        </div>
    </div>
    <div class="concept_columns">
        <div class="column_left">
            <h3 class="column_left_title">
                CO-CREATE LOCAL VALUE<br />
                地域の暮らしに、もっとワクワクを。
            </h3>
            <ul class="concept_columns_list">
                <li>菓子作りを柱とし、地域の人々の新たな結びつきを創ります。</li>
                <li>地域にある素晴らしい価値に眼を向け、育んでいきます。</li>
                <li>次の世代に手渡せるよう、より良い地域の暮らしを支えます。</li>
            </ul>
            <a href="https://takoman-farm.jp/ " target="_blank" rel="noopener noreferrer" class="btn">takoman farm project <span class="arrow">→</span></a>
        </div>
        <img src="<?= get_template_directory_uri(); ?>/image/cycle.png" alt="たこまんファームプトジェクトにて発生する地域の循環図" width="517" height="517" />
    </div>
    <img class="concept_img" src="<?= get_template_directory_uri(); ?>/image/kurikurien.png" alt="栗の木" width="1440" height="620" />
    <div class="concept_text_container">
        <p class="concept_text">
            掛川は日本でも有数の栗の産地、まさに「地域の宝」です。<br />
            しかし近年、高齢化や貢献者不足で生産者が減っているのが現状。<br />
            その課題を解決すべく、廃業を検討していた契約栗園「くりくり園」を2021年に自社農園化し、現在はたこ満社員が管理を行っています。<br />
            自社農園として運営をすることで、後継者不足の解消のみならず、収穫から加工までのリーチタイムが短くなり、新鮮かつ安心安全な品質で
            お届けできるというメリットも。<br />
            また、毎月販売スタッフが栗園管理の作業を学ぶ社内研修も行い、社内から掛川栗の魅力を発信する取り組みも行っております。
        </p>
    </div>
</section>
<!-- ここまでブランドコンセプト -->
<!-- ここからユーチューブ -->
<section class="youtube_section fadein">
    <div class="youtube_container">
        <div class="youtube_wrapper">
            <iframe src="https://www.youtube.com/embed/-RensusCMvI?si=F6ALNL1AF0G38byM" title="YouTube video" style="border: none;"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen loading="lazy">
            </iframe>
        </div>
    </div>
    <div class="youtube_button_container">
        <a href="<?php echo get_permalink(get_page_by_path('kurikurien')); ?>" class="youtube_btn">くりくり園の一年<span class="arrow">→</span></a>
    </div>
</section>
<!-- ここまでユーチューブ -->
<!-- ここからお菓子たち -->
<section class="industry_section fadein" id="industry">
    <div class="industry_container">
        <div class="industry_side_title">
            <span class="industry_en">industry</span>
        </div>
        <div class="industry_main">
            <div class="image_block">
                <img class="industry_img" src="<?= get_template_directory_uri(); ?>/image/minori_mv.png" alt="掛川栗を使った秋限定モンブラン" width="1080" height="717" />
                <div class="white_box">
                    <h2 class="industry_title">掛川栗モンブラン<br />みのり</h2>
                    <p class="industry_text">
                        たこまんが一年かけて作った<br />
                        本気のモンブラン『みのり』<br />
                        持続可能なサイクル作りにも挑戦！
                    </p>
                    <a href="https://www.takoman.co.jp/minori-2024/" target="_blank" rel="noopener noreferrer" class="more_btn">もっと見る<span class="arrow">→</span></a>
                </div>
            </div>

            <div class="image_block">
                <img class="industry_img" src="<?= get_template_directory_uri(); ?>/image/daisakyu_mv.png" alt="掛川栗を使った秋限定ブッセ" width="1080" height="717" />
                <div class="white_box">
                    <h2 class="industry_title">大砂丘<br />モンブランクリーム</h2>
                    <p class="industry_text">
                        大人気商品『大砂丘』の秋限定の<br />
                        お味。栗の刻みも贅沢にお入れした<br />
                        クリームはまるでモンブラン！
                    </p>
                    <a href="https://www.takoman.co.jp/2025/08/28/autumn-daisakyu-2/" target="_blank" rel="noopener noreferrer" class="more_btn">もっと見る<span class="arrow">→</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ここまでお菓子たち -->
<img class="instagram_img" src="<?= get_template_directory_uri(); ?>/image/tree_green.png" alt="木のイラスト" width="183" height="201">
<!-- ここからインスタグラム -->
<section class="instagram_section fadein" id="instagram">
    <div class="instagram_container">

        <!-- 見出し・説明・ボタン -->
        <div class="instagram_main">
            <h2 class="instagram_title">農家様との新作コラボ商品やイベント<br>
                農園での日常をお届けしています！</h2>
            <a href="https://www.instagram.com/takoman_farm/" target="_blank" rel="noopener noreferrer " class="instagram_btn">Instagramをcheck!<span class="arrow">→</span></a>
        </div>
        <!-- Instagram投稿エリア -->
        <div class="instagram_posts">
            <!-- 埋め込み1 -->
            <div class="embed">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/DOGSlnxkywN/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/DOGSlnxkywN/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">この投稿をInstagramで見る</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/DOGSlnxkywN/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">たこまんファームプロジェクト(@takoman_farm)がシェアした投稿</a></p></div></blockquote>
            </div>
            <!-- 埋め込み2 -->
            <div class="embed">
                <blockquote class="instagram-media"
                    data-instgrm-permalink="https://www.instagram.com/p/DJA9HgMSEHv/?utm_source=ig_embed&amp;utm_campaign=loading"
                    data-instgrm-version="14"
                    style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                    <div style="padding:16px;"> <a
                            href="https://www.instagram.com/p/DJA9HgMSEHv/?utm_source=ig_embed&amp;utm_campaign=loading"
                            style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                            target="_blank">
                            <div style=" display: flex; flex-direction: row; align-items: center;">
                                <div
                                    style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                </div>
                                <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                    <div
                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                    </div>
                                    <div
                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 19% 0;"></div>
                            <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px"
                                    viewBox="0 0 60 60">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                            <g>
                                                <path
                                                    d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg></div>
                            <div style="padding-top: 8px;">
                                <div
                                    style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                    この投稿をInstagramで見る</div>
                            </div>
                            <div style="padding: 12.5% 0;"></div>
                            <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                <div>
                                    <div
                                        style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                    </div>
                                    <div
                                        style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                    </div>
                                    <div
                                        style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                    </div>
                                </div>
                                <div style="margin-left: 8px;">
                                    <div
                                        style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                    </div>
                                    <div
                                        style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                    </div>
                                </div>
                                <div style="margin-left: auto;">
                                    <div
                                        style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                    </div>
                                    <div
                                        style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                    </div>
                                    <div
                                        style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                    </div>
                                </div>
                            </div>
                            <div
                                style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                <div
                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                </div>
                                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                </div>
                            </div>
                        </a>
                        <p
                            style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                            <a href="https://www.instagram.com/p/DJA9HgMSEHv/?utm_source=ig_embed&amp;utm_campaign=loading"
                                style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                target="_blank">たこまんファームプロジェクト(@takoman_farm)がシェアした投稿</a>
                        </p>
                    </div>
                </blockquote>
            </div>
            <!-- 埋め込み3 -->
            <div class="embed">
                <blockquote class="instagram-media"
                    data-instgrm-permalink="https://www.instagram.com/p/DIOORtpSgNs/?utm_source=ig_embed&amp;utm_campaign=loading"
                    data-instgrm-version="14"
                    style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                    <div style="padding:16px;"> <a
                            href="https://www.instagram.com/p/DIOORtpSgNs/?utm_source=ig_embed&amp;utm_campaign=loading"
                            style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                            target="_blank">
                            <div style=" display: flex; flex-direction: row; align-items: center;">
                                <div
                                    style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                </div>
                                <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                    <div
                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                    </div>
                                    <div
                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 19% 0;"></div>
                            <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px"
                                    viewBox="0 0 60 60">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                            <g>
                                                <path
                                                    d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg></div>
                            <div style="padding-top: 8px;">
                                <div
                                    style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                    この投稿をInstagramで見る</div>
                            </div>
                            <div style="padding: 12.5% 0;"></div>
                            <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                <div>
                                    <div
                                        style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                    </div>
                                    <div
                                        style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                    </div>
                                    <div
                                        style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                    </div>
                                </div>
                                <div style="margin-left: 8px;">
                                    <div
                                        style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                    </div>
                                    <div
                                        style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                    </div>
                                </div>
                                <div style="margin-left: auto;">
                                    <div
                                        style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                    </div>
                                    <div
                                        style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                    </div>
                                    <div
                                        style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                    </div>
                                </div>
                            </div>
                            <div
                                style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                <div
                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                </div>
                                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                </div>
                            </div>
                        </a>
                        <p
                            style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                            <a href="https://www.instagram.com/p/DIOORtpSgNs/?utm_source=ig_embed&amp;utm_campaign=loading"
                                style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                target="_blank">たこまん【公式】| 期間限定スイーツ お菓子販売中(@takoman.co.jp)がシェアした投稿</a>
                        </p>
                    </div>
                </blockquote>
            </div>
        </div>
        <div class="instagram_bg">
            <img src="<?= get_template_directory_uri(); ?>/image/mountain_white.png" alt="山のイラスト" width="548" height="172">
        </div>
</section>
<!-- ここまでインスタグラム -->

<?php get_footer(); ?>