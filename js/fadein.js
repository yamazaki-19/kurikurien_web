document.addEventListener('DOMContentLoaded', () => {
  const targets = document.querySelectorAll('.fadein');

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target); // 1回だけ実行したい場合
      }
    });
  }, {
    threshold: 0.1,
  });

  targets.forEach(target => {
    observer.observe(target);
  });
});
