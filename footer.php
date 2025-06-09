<footer class="footer">
    <p>Copyright &copy; 2025 Takoman Co., Ltd. All rights reserved.</p>
    <a href="#top" class="top_btn"><img src="<?php echo get_template_directory_uri(); ?>/image/top_button.png" alt="トップへ戻るボタン" width="159" height="165" />
    </a>
</footer>
<!-- ここまでフッター -->
<script>
    const hamburger = document.getElementById("hamburger");
    const nav = document.getElementById("nav");
    const navLinks = document.querySelectorAll(".nav_title a");

    // ハンバーガーを押したときのメニュー開閉処理
    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        nav.classList.toggle("active");
    });

    // ナビ内リンクを押したときの下線→遷移処理
    navLinks.forEach((link) => {
        link.addEventListener("click", (e) => {
            // 一度 tapped クラスがついたらスキップ（無限ループ防止）
            if (!link.classList.contains("tapped")) {
                e.preventDefault(); // 即リンクに飛ばない
                link.classList.add("tapped"); // 下線表示用クラス追加

                // メニューを閉じる演出（あれば）
                hamburger.classList.remove("active");
                nav.classList.remove("active");

                // 0.3秒後にリンクに遷移
                setTimeout(() => {
                    window.location.href = link.href;
                }, 300);
            }
        });
    });
</script>
<?php wp_footer(); ?>
</body>

</html>