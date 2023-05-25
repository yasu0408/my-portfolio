// ワークスとプラクティスのモーダル
const modalBtns = document.querySelectorAll('.modal_btn');
const modals = document.querySelectorAll('.modal');
const closeBtns = document.querySelectorAll('.close_btn');

modalBtns.forEach((btn) => {
  btn.addEventListener('click', (e) => {
    e.preventDefault();
    const modalId = btn.getAttribute('data-modal');
    const modal = document.getElementById(modalId);
    modal.style.display = "block";
  });
});

closeBtns.forEach((btn) => {
  btn.addEventListener('click', () => {
    const modal = btn.parentNode.parentNode.parentNode;
    console.log(modal);
    modal.style.position = "";
    modal.style.display = "none";
  });
});

// ヘッダーのハンバーガーメニューのモーダル
$('.header_burger').on('click', function () {
  $('.header_burger').toggleClass('is-active');
  $('.header_nav').toggleClass('is-active');
});

$('.header_link').on('click', function () {
  if ($('.header_burger').hasClass('is-active')) {
    $('.header_burger').removeClass('is-active');
    $('.header_nav').removeClass('is-active');
  };
});

// スクロール時のヘッダーのカラー変更とトップへのスクロールアイコンの表示
const header = document.querySelector('.header');
const firstView = document.querySelector('.first_view');
const firstViewHeight = firstView.offsetHeight;
const toTop = document.querySelector('.to_top');

window.addEventListener('scroll', function () {
  const scrollPosition = window.scrollY;
  if (scrollPosition > firstViewHeight) {
    header.classList.add('scrolled');
    toTop.classList.add('scrolled');
    toTop.style.opacity = 1;
  } else {
    header.classList.remove('scrolled');
    toTop.classList.remove('scrolled');
    toTop.style.opacity = 0;
  }
});


// ヘッダーナビのスクロール

$(document).ready(function () {
  $(".to_about").on("click", function (event) {
    // event.preventDefault();
    const targetOffset = $(".about").offset().top - 100;
    $("html, body").animate({
      scrollTop: targetOffset
    }, 1000);
  });
});
$(document).ready(function () {
  $(".to_skill").on("click", function (event) {
    // event.preventDefault();
    const targetOffset = $(".skill").offset().top - 100;
    $("html, body").animate({
      scrollTop: targetOffset
    }, 1000);
  });
});
$(document).ready(function () {
  $(".to_works").on("click", function (event) {
    // event.preventDefault();
    const targetOffset = $(".works").offset().top - 100;
    $("html, body").animate({
      scrollTop: targetOffset
    }, 1000);
  });
});
$(document).ready(function () {
  $(".to_strength").on("click", function (event) {
    // event.preventDefault();
    const targetOffset = $(".strength").offset().top - 100;
    $("html, body").animate({
      scrollTop: targetOffset
    }, 1000);
  });
});


// ページトップのスクロール
$(document).ready(function () {
  $(".to_top").on("click", function (event) {
    event.preventDefault();
    const targetOffset = $(".first_view").offset().top;
    $("html, body").animate({
      scrollTop: targetOffset
    }, 1000);
  });
});