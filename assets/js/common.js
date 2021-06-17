
// スクロールを無効にする
jQuery(window).on('touchmove.noScroll', function (e) {
  e.preventDefault();
});

// スクロール無効を解除する
jQuery(window).off('.noScroll');

// フッター　上へ戻るボタン
jQuery(window).scroll(function () {
  var now = jQuery(window).scrollTop();
  if (now > 800) {
    jQuery('.pagetop').fadeIn("slow");
  } else {
    jQuery('.pagetop').fadeOut('slow');
  }
});


jQuery('.pagetop').click(function () {
  jQuery('body,html').animate({
    scrollTop: 0
  }, 700);
  return false;
});

function menuBtnClicked() {
  if (document.getElementById("icon_menu").getAttribute("aria-expanded") == 'false') {
    /**メニューが閉じているときにクリックされたら*/
    document.getElementById('img_togller').classList.add('display_none');
    document.getElementById('img_close').classList.remove('display_none');
  } else {
    document.getElementById('img_close').classList.add('display_none');
    document.getElementById('img_togller').classList.remove('display_none');
  }
}

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
});

function kakunin() {
  href = document.getElementById('select_menu').value;
  location.href = href;
}


jQuery('.select').on('change', function () {

  var $this = jQuery(this)
  var $option = $this.find('option:selected');
  jQuery('.label').text($option.text());

  // onchange後にフォーカスしてるのが嫌な場合
  $this.blur();

});

function navFunc(){
  document.querySelector('html').classList.toggle('open');
}