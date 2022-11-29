// pagetop
$('.js_pagetop').click(function () {
  $('body,html').animate({
      scrollTop: 0
  }, 300);
  return false;
});


// 360px未満レスポンシブ用
!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value =
      window.outerWidth > 360
        ? 'width=device-width,initial-scale=1'
        : 'width=360';
    if (viewport.getAttribute('content') !== value) {
      viewport.setAttribute('content', value);
    }
  }
  addEventListener('resize', switchViewport, false);
  switchViewport();
})();

// modal
$(function(){
  $('.js_modal_open').each(function(){
      $(this).on('click',function(){
          var target = $(this).data('target');
          var modal = document.getElementById(target);
          $(modal).fadeIn();
          return false;
      });
  });
  $('.js_modal_close').on('click',function(){
      $('.js_modal').fadeOut();
      return false;
  }); 
});


