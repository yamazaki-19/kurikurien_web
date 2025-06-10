//ローディング
// ローディング
const LOADING = document.querySelector('.loading');
// 読み込みが完了したら
window.addEventListener('load', () => {
  LOADING.classList.add('hide');
});


// ハンバーガーメニュー
const NAV_BUTTON = document.querySelector(".nav_button");
const NAV_CLOSEBUTTON = document.querySelector(".nav_button-close");
const BODY = document.querySelector("body");

function NAV_OPEN() {
  BODY.classList.toggle('nav_open');
}
function NAV_CLOSE() {
  BODY.classList.remove('nav_open');
}

NAV_BUTTON.addEventListener('click', () => {
  NAV_OPEN();
})

NAV_CLOSEBUTTON.addEventListener('click', () => {
  NAV_CLOSE();
})


// 高さの最低値
const MAIN = document.querySelector("main");
const FOOTER = document.querySelector("footer");
const FOOTER_H = "calc(100vh - " + FOOTER.offsetHeight + "rem)";
MAIN.style.minHeight = FOOTER_H;

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
