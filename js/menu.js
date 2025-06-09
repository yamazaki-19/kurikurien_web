document.addEventListener("DOMContentLoaded", () => {
    const hamburger = document.getElementById('hamburger');
    const nav = document.getElementById('nav');
    const navLinks = document.querySelectorAll('.nav_title a');

    if (hamburger && nav) {
        // ハンバーガーを押したときのメニュー開閉処理（基本の切り替え）
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            nav.classList.toggle('active');
        });
    }

    if (navLinks.length > 0) {
        // ナビ内リンクを押したときの下線→遷移処理
        navLinks.forEach((link) => {
            link.addEventListener("click", (e) => {
                if (!link.classList.contains("tapped")) {
                    e.preventDefault();
                    link.classList.add("tapped");

                    // メニューを閉じる
                    if (hamburger && nav) {
                        hamburger.classList.remove("active");
                        nav.classList.remove("active");
                    }

                    setTimeout(() => {
                        window.location.href = link.href;
                    }, 300);
                }
            });
        });
    }
});
