$(document).ready(function(){

    var heroSlider = $('.banner .owl-banner');

   heroSlider.owlCarousel({
        loop:true,
        margin:0,
        nav:false,
        dots:true,
        autoplay: true,
        autoplayHoverPause: false,
        autoplaySpeed: 5000,
        autoplayTimeout: 7000,
        mouseDrag: false,
        touchDrag: true,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        autowidth:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    heroSlider.on("changed.owl.carousel", function(event){
        
        var item = event.item.index-2;
        
        $('h1').removeClass('animated fadeInDown');
        $('.owl-item').not('.cloned').eq(item).find('h1').addClass('animated fadeInDown');

        $('p').removeClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('p').addClass('animated fadeInUp');

    });

});



$(window).on('scroll',function(){
let bodyScroll = $(window).scrollTop()
if(bodyScroll > 150){
    $('nav.navbar').addClass('nav-scroll');
}
else
    $('nav.navbar').removeClass('nav-scroll');
});


function openNav() {
    document.getElementById("myNav").style.height = "100%";
}
  
function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}

$('.home-review .owl-review').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    dots:true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplaySpeed: 5000,
    autoplayTimeout: 8000,
    mouseDrag: true,
    touchDrag: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
  });


jQuery(function($) {
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
    $('nav li a').each(function() {
        if (this.href === path) {
            $('nav li a').removeClass('active');
            $(this).addClass('active');

        }
    });
    $('.overlay-nav a').each(function() {
        if (this.href === path) {       
            $('.overlay-nav a').css({"color":"white"});
            $(this).css({"color":"var(--pri-color)"});

        }
    });
});


// ------------Isotope---------------

// $('.projects').isotope({
//     itemSelector:'.item',
//     layoutMode:'fitRows',
// });

// $('ul.nav-pills li a').click(function(){
//     var filter = $(this).attr('data-filter');

//     $('.projects').isotope({filter: filter});
// });

$(function(){
    wow = new WOW(
        {
        boxClass:     'wow',      
        animateClass: 'animated', 
        offset:       5,          
        mobile:       true,       
        live:         true        
      }
      )
    new WOW().init();
    });


$('section.faq .accordion .card').on('show.bs.collapse', function () {
    $(this).find('.card-header').css({'background':"transparent"});
    $(this).find('i').css({'transform':"rotate(180deg)"});
    // $(this).find('i').addClass('fa-angle-up').removeClass('fa-angle-down');
  });
  
  $('section.faq .accordion .card').on('hide.bs.collapse', function () {
    $(this).find('i').css({'transform':"rotate(0deg)"});
    $(this).find('.card-header').css({'background':"#f7f7f7"});
    // $(this).find('i').removeClass('fa-angle-up').addClass('fa-angle-down');

  });

  $('.scroll-top').on('click',function(){
      $(window).scrollTop(0);
  });

$(window).scroll(function(){
    if ($(this).scrollTop() > 200){
        $('.scroll-top').fadeIn();
    } 
    else{
        $('.scroll-top').fadeOut();
    }
});


jQuery(function ($) {
    // start all the timers
    animatecounters();
});

function animatecounters() {
    $('.timer').each(count);
    function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
    }

}

$('.timer').addClass('appear');
$('.timer').appear();
$(document.body).on('appear', '.timer', function () {
    // this code is executed for each appeared element
    if ($(this).hasClass('appear')) {
        animatecounters();
        $(this).removeClass('appear');
    }
});


$('section.disease .row .nav-1').on('click',function(){
    $('section.disease .row .img-1, section.disease .row .text-1').fadeIn();
    $('section.disease .row .img-2, section.disease .row .text-2').fadeOut();
    $('section.disease .row .img-3, section.disease .row .text-3').fadeOut();
    $('section.disease .row .img-4, section.disease .row .text-4').fadeOut();
    $('section.disease .row .img-5, section.disease .row .text-5').fadeOut();
    $('section.disease .row .img-6, section.disease .row .text-6').fadeOut();
})

$('section.disease .row .nav-2').on('click',function(){
    $('section.disease .row .img-1, section.disease .row .text-1').fadeOut();
    $('section.disease .row .img-2, section.disease .row .text-2').fadeIn();
    $('section.disease .row .img-3, section.disease .row .text-3').fadeOut();
    $('section.disease .row .img-4, section.disease .row .text-4').fadeOut();
    $('section.disease .row .img-5, section.disease .row .text-5').fadeOut();
    $('section.disease .row .img-6, section.disease .row .text-6').fadeOut();
})
$('section.disease .row .nav-3').on('click',function(){
    $('section.disease .row .img-1, section.disease .row .text-1').fadeOut();
    $('section.disease .row .img-2, section.disease .row .text-2').fadeOut();
    $('section.disease .row .img-3, section.disease .row .text-3').fadeIn();
    $('section.disease .row .img-4, section.disease .row .text-4').fadeOut();
    $('section.disease .row .img-5, section.disease .row .text-5').fadeOut();
    $('section.disease .row .img-6, section.disease .row .text-6').fadeOut();
})
$('section.disease .row .nav-4').on('click',function(){
    $('section.disease .row .img-1, section.disease .row .text-1').fadeOut();
    $('section.disease .row .img-2, section.disease .row .text-2').fadeOut();
    $('section.disease .row .img-3, section.disease .row .text-3').fadeOut();
    $('section.disease .row .img-4, section.disease .row .text-4').fadeIn();
    $('section.disease .row .img-5, section.disease .row .text-5').fadeOut();
    $('section.disease .row .img-6, section.disease .row .text-6').fadeOut();
})
$('section.disease .row .nav-5').on('click',function(){
    $('section.disease .row .img-1, section.disease .row .text-1').fadeOut();
    $('section.disease .row .img-2, section.disease .row .text-2').fadeOut();
    $('section.disease .row .img-3, section.disease .row .text-3').fadeOut();
    $('section.disease .row .img-4, section.disease .row .text-4').fadeOut();
    $('section.disease .row .img-5, section.disease .row .text-5').fadeIn();
    $('section.disease .row .img-6, section.disease .row .text-6').fadeOut();
})
$('section.disease .row .nav-6').on('click',function(){
    $('section.disease .row .img-1, section.disease .row .text-1').fadeOut();
    $('section.disease .row .img-2, section.disease .row .text-2').fadeOut();
    $('section.disease .row .img-3, section.disease .row .text-3').fadeOut();
    $('section.disease .row .img-4, section.disease .row .text-4').fadeOut();
    $('section.disease .row .img-5, section.disease .row .text-5').fadeOut();
    $('section.disease .row .img-6, section.disease .row .text-6').fadeIn();
});

$('section.disease .row span').click(function(e){
    e.preventDefault();
    $('section.disease .row span').removeClass('active');
    $(this).addClass('active');
})

 jQuery(document).ready(function($) {
    $('.banner-about .counter').counterUp({
        delay: 10,
        time: 1000
    });
});

const el = document.querySelector('.counter')
new Waypoint( {
    element: el,
    handler:function() {
    counterUp( el )
    this.destroy()
    },
    offset:'bottom-in-view',
    // loadingClass: 'infinite-loading'
})


// $(document).ready(function() {
//     $('.img-box').magnificPopup({
//         type:'image',
//         delegate: 'a',
//         closeBtnInside: false,
//         callbacks: {
//             resize: changeImgSize,
//             imageLoadComplete:changeImgSize,
//             change:changeImgSize
//         },
//         gallery:{
//             enabled: true
//         },
//         zoom: {
//             enabled: true,
//             duration: 500
//         },
//         easing: 'ease-in-out', 
//         overflowY: 'hidden',
       
//     });
//     function changeImgSize(){
//         var img = this.content.find('img');
//         img.css('max-height', '600px');
//         // img.css('width', 'auto');
//         // img.css('max-width', 'auto');
//     }
// });
