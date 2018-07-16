$(function () {
    
    // top
    var $top = $('.top');
    
    var $htmlbody = $('html,body');
    
    var $window = $(window);
    
    $top.on('click' , function(){
        
        $htmlbody.animate({
            scrollTop : 0
        } , 500)
        
        
    });
    
    $('.navbar_ul li a').on('click', function(){
        $('.navbar-collapse').removeClass('show');
        
    })
    
    $window.on('scroll' , function(){
        var $scrolling = $(this).scrollTop();
        if($scrolling >= 200){
            $top.fadeIn();
        }
        else{
            $top.fadeOut();
        }
        if($scrolling >= 300){
            $('#full_nav').addClass('sticky');
        }
        else{
             $('#full_nav').removeClass('sticky');
        }
        
        
        
        
        
        
    })
    // nav-menu scrolling
    $('a[href*="#"]:not([href="#"])').on('click', function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $htmlbody.animate({
                    scrollTop: target.offset().top - 56
                }, 1000);
                return false;
            }
        }
    });
    
 

    $('.full_slick_slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:false,
        fade:false,
        autoplay:true,
        autoplaySpeed:1000
    });
   $('.abt_slick').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows:false,
        autoplay:true,
        autoplaySpeed:1000,
        responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    });

    /*mixltup code*/
    $('.mixitup').mixItUp(); //mixitup activation
})