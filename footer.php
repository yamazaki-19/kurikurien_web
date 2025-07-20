<!-- ここから公式サイトボタン -->
<section class="co_hp">
  <a href="https://www.takoman.co.jp/" target="_blank" rel="noopener noreferrer"><img src="<?= get_template_directory_uri(); ?>/image/takoman-logo.png" alt="公式サイトロゴ" width="325" height="73">
    <p>オフィシャルサイトはこちら</p>
  </a>
</section>
<!-- ここまで公式サイトボタン --><!-- フッター -->
<footer class="footer">
  <p>Copyright &copy; 2025 Takoman Co., Ltd. All rights reserved.</p>
  <a href="#top" class="top_btn"><img src="<?= get_template_directory_uri(); ?>/image/top_button.png" alt="トップへ戻るボタン" width="127" height="132"></a>
</footer>
<!-- ここまでフッター -->
<?php wp_footer(); ?>
<!-- Splide JS（JavaScriptはページの最後が効率的） -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/js/splide.min.js"></script>

<!-- 自作のJS（Splideを使う） -->
<script src="<?= get_template_directory_uri(); ?>/js/fadein.js"></script>
<script async defer src="https://www.instagram.com/embed.js"></script>

</body>

</html>