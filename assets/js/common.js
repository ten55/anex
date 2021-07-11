
(function ($) {
  // スクロールを無効にする
  $(window).on('touchmove.noScroll', function (e) {
    e.preventDefault();
  });

  // スクロール無効を解除する
  $(window).off('.noScroll');

  // フッター　上へ戻るボタン
  $(window).scroll(function () {
    var now = jQuery(window).scrollTop();
    if (now > 800) {
      $('.pagetop').fadeIn("slow");
    } else {
      $('.pagetop').fadeOut('slow');
    }
  });


  $('.pagetop').click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 700);
    return false;
  });

  /*
  var galleryThumbs = new Swiper('.tab-menu', {
    spaceBetween: 20,
    slidesPerView: 'auto',
    freeMode: false,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });

  var galleryTop = new Swiper('.tab-contents', {
    autoHeight: true,
    thumbs: {
      swiper: galleryThumbs
    }
  });

  var swiper = new Swiper('.swiper-container', {
    direction: 'vertical',
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });*/

/*
  $('.select').on('change', function () {

    var $this = $(this)
    var $option = $this.find('option:selected');
    $('.label').text($option.text());

    // onchange後にフォーカスしてるのが嫌な場合
    $this.blur();

  });*/
})( jQuery );

function navFunc() {
  document.querySelector('html').classList.toggle('open');
}

/*
function kakunin() {
  href = document.getElementById('select_menu').value;
  location.href = href;
}*/