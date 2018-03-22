$(document).ready(function() {

  $(".load-img").one("load", function() {

    $(".logo-load").addClass('bounceOut');
    setTimeout(function() {
      $(".loading").addClass('fadeOut');
    }, 1200)

  }).each(function() {
    if(this.complete) $(this).load();
  });

  $('.single-item').slick({
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000
  });

  $(window).scroll(function() {
    var wScroll = $(this).scrollTop();

    // Logo
    $('.name').css({
      'transform' : 'translate(0px, '+ wScroll /4 +'%)'
    });

    // Offer section
    if(wScroll > $('.offer-row').offset().top - ($(window).height() / 0.8 )) {
      $('.offer-row .col').each(function(i) {
        setTimeout(function(){
          $('.offer-row .col').eq(i).addClass('is-showing');
        }, 150 * (i+1));
      });
    }

    // Tech section
    if(wScroll > $('.tech-row').offset().top - ($(window).height() / 0.8 )) {
      $('.tech-row .col').each(function(i) {
        setTimeout(function(){
          $('.tech-row .col').eq(i).addClass('is-showing');
        }, 150 * (i+1));
      });
    }

    // if(wScroll > $('.content').offset().top) {
    //
    //     document.getElementById("nav-item").style.background = "rgba(255, 255, 255, 0.9)";
    //
    // }
    //
    // if(wScroll < $('.content').offset().top) {
    //
    //     document.getElementById("nav-item").style.background = "none";
    //
    // }
  });

});

