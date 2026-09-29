$(function () {
  $('.tck-rail').each(function () {
    var $rail = $(this);
    var $track = $rail.find('.tck-rail__track');
    $rail.on('click', '[data-rail]', function () {
      var step = $track.children().first().outerWidth(true) || 280;
      var dir = $(this).data('rail') === 'prev' ? -1 : 1;
      $track.animate({ scrollLeft: $track.scrollLeft() + (dir * step) }, 280);
    });
  });

  $('.tck-tabs button').on('click', function () {
    var id = $(this).data('tab');
    $('.tck-tabs button').removeClass('active');
    $(this).addClass('active');
    $('.tck-tabp').removeClass('active');
    $('#tck-tab-' + id).addClass('active');
    var img = $(this).data('img');
    if (img) { $('#tck-story-img').css('background-image', 'url(' + img + ')'); }
  });

  function tckMountSearch() {
    var el = document.getElementById('tck-search');
    if (el && el.parentNode !== document.body) {
      document.body.appendChild(el);
    }
  }
  tckMountSearch();

  $(document).on('mousedown click', '#tck-search', function (e) {
    e.stopPropagation();
  });

  $(document).on('click', '[data-tck-search]', function (e) {
    e.preventDefault();
    e.stopPropagation();
    tckMountSearch();
    var el = document.getElementById('tck-search');
    if (el && window.bootstrap) {
      bootstrap.Offcanvas.getOrCreateInstance(el, { backdrop: true, keyboard: true, scroll: false }).show();
      setTimeout(function () { $('#tck-search input[name="search"]').trigger('focus'); }, 250);
    }
  });

  var $slides = $('#tck-slideshow .tck-slide').not('.tck-slide-dots');
  var $dots = $('#tck-slideshow .tck-slide-dots');
  if ($slides.length) {
    $slides.each(function (i) {
      $dots.append('<button type="button"' + (i === 0 ? ' class="is-active"' : '') + '></button>');
    });
    var idx = 0;
    var show = function (n) {
      idx = (n + $slides.length) % $slides.length;
      $slides.removeClass('is-active').eq(idx).addClass('is-active');
      $dots.find('button').removeClass('is-active').eq(idx).addClass('is-active');
      $slides.eq(idx).find('video').each(function () { this.play().catch(function () {}); });
    };
    $dots.on('click', 'button', function () { show($(this).index()); });
    setInterval(function () { show(idx + 1); }, 5000);
  }

  var words = ['homemade', 'fresh cream', 'same day', 'whole wheat', 'made to order', 'from scratch'];
  var w = 0;
  setInterval(function () {
    w = (w + 1) % words.length;
    $('#tck-flicker-word').text(words[w]);
  }, 1000);

  $(document).on('click', '[data-tck-panel]', function (e) {
    e.preventDefault();
    e.stopPropagation();
    var id = $(this).data('tck-panel');
    var $panel = $('#' + id);
    var open = $panel.hasClass('is-open');
    $('.tck-drop').removeClass('is-open');
    $('[data-tck-panel]').removeClass('is-open');
    if (!open) {
      $panel.addClass('is-open');
      $(this).addClass('is-open');
    }
  });
  $(document).on('click', function () {
    $('.tck-drop').removeClass('is-open');
    $('[data-tck-panel]').removeClass('is-open');
  });
  $(document).on('click', '.tck-drop', function (e) { e.stopPropagation(); });

  $(document).on('click', '[data-qty-set]', function () {
    var n = parseInt($(this).attr('data-qty-set'), 10);
    if (isNaN(n) || n < 1) n = 1;
    $(this).closest('form').find('input[name="quantity"]').val(n);
  });

  $(document).ajaxSuccess(function (e, xhr, settings) {
    if (!settings.url || settings.url.indexOf('route=checkout/cart.add') === -1) return;
    window.setTimeout(function () {
      tckMountCart();
      var el = document.getElementById('cart-drawer');
      if (el && window.bootstrap) bootstrap.Offcanvas.getOrCreateInstance(el).show();
    }, 350);
  });

  function tckMountCart() {
    var drawer = document.getElementById('cart-drawer');
    if (drawer && drawer.parentNode !== document.body) {
      document.body.appendChild(drawer);
    }
  }
  tckMountCart();
  $(document).ajaxComplete(function () { tckMountCart(); });

  $(document).on('click', '.tck-product__thumb', function () {
    var src = $(this).data('src');
    if (!src) return;
    $('#tck-main-img').attr('src', src);
    $('.tck-product__photo').attr('href', src);
    $('.tck-product__thumb').removeClass('is-active');
    $(this).addClass('is-active');
  });
});
