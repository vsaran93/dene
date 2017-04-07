
jQuery(document).ready(function ($) {
    
    $(function(){
    $('#Container').mixItUp();
});
    //Navigation toggle
    $("#toggle").click(function () {
        $(this).toggleClass("on");
        $("#menu").slideToggle();
    });
    // Full Screen Slider JS
    $('#slider_full_window').maximage({
        cycleOptions: {
        		prev: '#arrow_left',
        		next: '#arrow_right',
                fx: 'fade',
        		speed: 1000, // Set the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)
        		timeout: 5000,
        		pause: 1
        	},
            backgroundSize: 'contain'
    });
    
    $(window).load(function () {
        var mnn = $(".innerr_header");
        var mrs = $(".top_inner_header");
        var mnni = $("#plx_about_section");
        mnsi = "plx_about_section";
        mnss = "main-nav-scrolled";
        hdrr = $('#home_slider').outerHeight();
        iheader = $('.innerr_header').outerHeight();
        iheader2 = $('.responsive_nav .top_inner_header').outerHeight();
        $(".site-header").css({"min-height": iheader});
        $(".my_class").css({"min-height": iheader});
        $(".responsive_nav").css({"min-height": iheader2});
        $(window).scroll(function () {
            if ($(this).scrollTop() > ((hdrr))) {
                mnn.addClass(mnss);
                mnni.addClass(mnsi);
            } else {
                mnn.removeClass(mnss);
                mnni.removeClass(mnsi);
            }
        });

        var mn = $(".onee");
        mns = "main-nav-scrolled";
        hdr = $('.site-header').outerHeight();
		iheader3 = $('.onee .top_inner_header').outerHeight();
		 $(".onee").css({"min-height": iheader3});
        $(window).scroll(function () {
            if ($(this).scrollTop() > 1) {
                
                mrs.addClass(mnss);
            } else {
              
                mrs.removeClass(mnss);
            }
        });
    });

iheader1 = $('.site-header').outerHeight();
$(".home .plx-nav.nav").onePageNav({
    
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 750,
        scrollThreshold: 0.5,
        scrollOffset: iheader1,
    });

    //bxslider
    $('.bxslider').bxSlider({
        pager: true,
        nextSelector: '#slider-next',
        prevSelector: '#slider-prev',
        auto: ($('.bxslider').children().length < 2) ? false : true
    });
    $('.portfolio_slider_image').bxSlider({
        auto: false,
        pager: false,
        prevSelector: '#slider-prev',
        nextSelector: '#slider-next',
        prevText: 'Prev',
        nextText: 'Next '

    });
    $('.bxslider_testimonial').bxSlider({
        auto: true,
        pager: true,
        nextSelector: '#slider-next',
        prevSelector: '#slider-prev',
    });
    $('.logo-slider').bxSlider({
        pager: false,
        auto: true,
        moveSlides: 1,
        minSlides: 1,
        maxSlides: 4,
        slideWidth: 232,
        slideMargin: 35,
        nextText: '<i class="fa fa-angle-right"></i>',
        prevText: '<i class="fa fa-angle-left"></i>'
    });

    $('.team_image').hover(function () {

        var id = (this.id);

        $("#id_" + id).toggle("fast", function () {

        });

    });
    $('.portfolio_image').hover(function () {
        var id = (this.id);
        $('#id_' + id).toggle("fast", function () {

        });
    });
    // .cloader function
    $('.cloader').each(function () {
        var that = $(this);
        var percent = that.attr("data-percentage");
        var color = that.attr("color");

        that.waypoint({
            handler: function (direction) {
                that.ClassyLoader({
                    percentage: percent,
                    diameter: 70,
                    lineWidth: 25,
                    speed: 20,
                    lineColor: color,
                    remainingLineColor: 'rgba(175,175,175,1)',
                    fontSize: '40px',
                    fontColor: 'rgba(0,0,0,1)',
                    roundedLine: false,
                    showRemaining: true,
                    animate: true,
                    displayOnLoad: true,
                });
                this.destroy();
            },
            offset: '95%'
        });

    });

    var wow = new WOW(
            {
                boxClass: 'wow', // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 150, // distance to the element when triggering the animation (default is 0)
                mobile: true, // trigger animations on mobile devices (default is true)
                live: true, // act on asynchronously loaded content (default is true)

                callback: function (box) {
                    // the callback is fired every time an animation is started
                    // the argument that is passed in is the DOM node being animated
                }
            }
    );
    wow.init();




    //$('#plx_service_section').parallax('50%',0.4, true);

    $('.next-page').localScroll({
        target: 'body',
        duration: 800,
        offset: -70

    });


//background parallax effect
$(window).load(function () {
    $('#plx_service_section').parallax('50%', 0.4, true);
    $('#plx_about_section').parallax('50%', 0.4, true);
    $('#plx_portfolio_section').parallax('50%', 0.4, true);
    $('#plx_team_section').parallax('50%', 0.4, true);
    $('#plx_client_section').parallax('50%', 0.4, true);
    $('#plx_blog_section').parallax('50%', 0.4, true);
    $('#plx_testimonial_section').parallax('50%', 0.4, true);
    $('#plx_pricing_section').parallax('50%', 0.4, true);
    $('#plx_cta_section').parallax('50%', 0.4, true);
    
});
    $('#home_slider').prependTo('#main-slider');


    $(window).load(function () {
        $(".client_slider1").flexisel();
        $("#flexiselDemo2").flexisel({
            itemWidth: 21,
            minItems: 2,
            maxItems: 4,
        });
    });   
    

});