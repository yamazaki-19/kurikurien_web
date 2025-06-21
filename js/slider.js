document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.season_slider').forEach(function (el) {
    new Splide(el, {
      type: 'fade',
      autoplay: true,
      interval: 3000,
      pauseOnHover: false,
      rewind: true,
      pagination: true,
      arrows: false,
    }).mount();
  });
});
