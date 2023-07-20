$(document).ready(function () {
  // Плавная прокрутка меню
  $('.header a[href^="#"]').click(function () {
    let target = $(this).attr("href");
    $("html, body").animate(
      {
        scrollTop: $(target).offset().top,
      },
      500
    );
    $('.header a[href^="#"]').parent().removeClass("active");
    $(this).parent().addClass("active");
    $(".menu_mobile .menu").toggle(500);
    $(".menu_burger").toggleClass("close");
    return false;
  });

  // Мобильное меню
  $(".menu_burger").click(function () {
    $(".menu_mobile .menu").toggle(500);
    $(this).toggleClass("close");
  });

  // Слайдер
  let swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    slidesPerGroup: 3,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});
