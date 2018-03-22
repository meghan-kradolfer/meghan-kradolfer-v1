$(document).ready(function() {

    setTimeout(function(){

        $('body').addClass('loaded');

    }, 5000);

});


$(window).scroll(function() {
    
    var wScroll = $(this).scrollTop();
    
    $('.name').css({
        'transform' : 'translate(0px, '+ wScroll /4 +'%)'
    });


    if(wScroll > $('.offer-img').offset().top - ($(window).height() / 1.5 )) {


        $('.offer-img figure').each(function(i) {

            setTimeout(function(){
                $('.offer-img figure').eq(i).addClass('is-showing');
            }, 150 * (i+1));

        });
    }

    if(wScroll > $('.content').offset().top) {
        
        document.getElementById("nav-item").style.background = "rgba(255, 255, 255, 0.9)";
        
    }

    if(wScroll < $('.content').offset().top) {

        document.getElementById("nav-item").style.background = "none";

    }

    
    
});

function popUp(type) {
    $('.full-overlay').toggleClass('showing');
    $('.'+type).toggleClass('showing');
    $('body').toggleClass('noScroll');
}

function closeMessage() {
    $('.success').removeClass('showing');
    $('.full-overlay').removeClass('showing');
}


function scroll(){
    $(window).load(function(){


        $("nav a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
            layout:"auto",
            offset:10,
            highlightSelector:"#navigation-menu a"
        });

        $("a[rel='next']").click(function(e){
            e.preventDefault();
            var to=$(this).parent().parent("section").next().attr("id");
            $.mPageScroll2id("scrollTo",to);
        });

    });
}

scroll();

var doSubmit = function (event) {
    var postData = jQuery('#submit_message').serialize();

    console.log(postData);

    jQuery.ajax({
        url: 'contact.php',
        data: postData

    }).done(function() {
        $('.success').addClass('showing');
        $('.full-overlay').addClass('showing');

    });
    event.preventDefault();
};

$(function () {
    $('#submit_message').submit(doSubmit);
});

$('.single-item').slick({
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000
});