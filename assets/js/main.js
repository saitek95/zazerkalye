$(document).on('click', '.product-props ul li', function () {
  $(this).addClass('active');
  $(this).siblings().removeClass('active');
})

$(document).on('click', '.catalog-tabs ul li', function () {
  $(this).addClass('active');
  $(this).siblings().removeClass('active');
})

$(document).on('click', '.order-info .delivery-info li', function () {
  $(this).addClass('active');
  $(this).siblings().removeClass('active');
})

$(document).on('click', '.props-color ul li', function () {
  var colorValue = $(this).data('value');
  var changeColorValue = $('.change-color-value');
  changeColorValue.text(colorValue);
})

$(document).on('click', '.props-backlight ul li', function () {
  var colorValue = $(this).data('value');
  var changeColorValue = $('.change-color-backlight');
  changeColorValue.text(colorValue);
})

$(document).on('click', '.count-product > div', function() {
  var input = $('.count');
  var value = parseInt(input.val()) || 0; 
  if ($(this).hasClass('count-product-minus')) {
    value = value - 1;
  }
  if ($(this).hasClass('count-product-plus')) {
    value = value + 1;
  }
  input.val(value).change(); 
});

const menuBtn = $(".menu-head-catalog"),
      menu = $(".big-menu");

menuBtn.on("click", function () {
    if ($(this).hasClass("is-active")) {
        $(this).removeClass("is-active");
        menu.fadeOut(100);
    } else {
        $(this).addClass("is-active");
        menu.fadeIn(100);
    }
});

$(document).click(function (e) {
    if (!menuBtn.is(e.target) && !menu.is(e.target) && menu.has(e.target).length === 0) {
        menu.fadeOut(100);
        menuBtn.removeClass("is-active");
    };
});

$(document).on('click', '[href="#location"]', function() {
  $('.popup').fadeIn(100);
  $('.location-city').fadeIn(100);
})

$(document).on('click', '[href="#custom-size"]', function() {
  $('.popup').fadeIn(100);
  $('.custom-size').fadeIn(100);
})

$(document).on('click', '.close', function() {
  $('.popup').fadeOut(100);
  $('.popup .location-city').fadeOut(100);
  $('.popup .custom-size').fadeOut(100);
  $('.menu-popup').fadeOut(100);
  $('.catalog-menu-mobile').fadeOut(100);

})

$(document).on('click', '.menu-burger .burger', function() {
  $('.menu-popup').fadeIn(100);
})

$(document).on('click', '.menu-bottom-fixed .burger', function() {
  $('.catalog-menu-mobile').fadeIn(100);
})

$('img.img-svg').each(function(){
  const $img = $(this);
  const imgClass = $img.attr('class');
  const imgURL = $img.attr('src');
  $.get(imgURL, function(data) {
    let $svg = $(data).find('svg');
    if(typeof imgClass !== 'undefined') {
      $svg = $svg.attr('class', imgClass+' replaced-svg');
    }
    $svg = $svg.removeAttr('xmlns:a');
    if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
      $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
    }
    $img.replaceWith($svg);
  }, 'xml');
});

var swiperHome = new Swiper(".slider-home", {
  navigation: {
    nextEl: ".slider-home-button-next",
    prevEl: ".slider-home-button-prev",
  },
  pagination: {
    el: ".slider-home-pagination",
    clickable: true,
  },
});

var swiperInfoArticle = new Swiper(".block-info-article .item-slider", {
  pagination: {
    el: ".slider-home-pagination",
    clickable: true,
  },
});

var swiperProductImgThumbs = new Swiper(".product-img-slider-thumbs", {
  spaceBetween: 21.12,
  slidesPerView: 5,
  freeMode: true,
  watchSlidesProgress: true,
  breakpoints: {
    320: {
      slidesPerView: 4,
      direction: "vertical",
    },
    991: {
      direction: "horizontal",
    }
    
  }
});

var swiperProductImg = new Swiper(".product-img-slider", {
  spaceBetween: 10,
  thumbs: {
    swiper: swiperProductImgThumbs,
  },
});

var swiperProducts4 = new Swiper(".products-slider-4", {
  // slidesPerView: 4,
  navigation: {
    nextEl: ".slider-product-button-next",
    prevEl: ".slider-product-button-prev",
  },
  spaceBetween: 26,
  breakpoints: {
    320: {
      slidesPerView: 2,
    },
    769: {
      slidesPerView: 3,
    },
    1180: {
      slidesPerView: 4,
    },
  }
});

var swiperProducts4Card = new Swiper(".products-slider-card .products-slider-4", {
  slidesPerView: 4,
  navigation: {
    nextEl: ".slider-product-button-next-card",
    prevEl: ".slider-product-button-prev-card",
  },
  spaceBetween: 26,
  breakpoints: {
    320: {
      slidesPerView: 2,
    },
    769: {
      slidesPerView: 3,
    },
    1180: {
      slidesPerView: 4,
    },
  }
});

var sliderPartners = new Swiper(".slider-partners", {
  slidesPerView: 1,
  pagination: {
    el: ".slider-home-pagination",
    clickable: true,
  },
});

$('[name="phone"]').inputmask("+7 (999) 999-99-99");