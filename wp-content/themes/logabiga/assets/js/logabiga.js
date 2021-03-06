jQuery(function($) {
    $('.slidertitul').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"></button>',
        nextArrow: '<button class="slick-next" aria-label="Next" type="button"></button>',
        responsive: [
            {
                breakpoint: 1101,
                settings: "unslick"
            }
    ]
    });

    $('.slider1').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev-case" aria-label="Previous" type="button"></button>',
        nextArrow: '<button class="slick-next-case" aria-label="Next" type="button"></button>',
    });
    $('.slider2').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev-case" aria-label="Previous" type="button"></button>',
        nextArrow: '<button class="slick-next-case" aria-label="Next" type="button"></button>',
    });
    $('.slider3').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev-case" aria-label="Previous" type="button"></button>',
        nextArrow: '<button class="slick-next-case" aria-label="Next" type="button"></button>',
    });


    $(".slidetitul").mouseenter(function () {
        let numslide = $(this).attr('data-id');
        console.log(numslide)
        $('.img-'+numslide).css("opacity", ".6").css("filter", "grayscale(100%)");
        // $('.slick-current + .slidetitul .slideimg').css("opacity", "1").css("filter", "none");
    });
    $(".slidetitul").mouseleave(function () {
        let numslide = $(this).attr('data-id');
        console.log(numslide)
        $('.img-'+numslide).css("opacity", "1").css("filter", "none");
    });
    


    $(".slick-prev").mouseover(function () {
        $('.slick-current .slideimg').css("opacity", ".6").css("filter", "grayscale(100%)");
        $('.slick-current + .slick-active .slideimg').css("opacity", "1").css("filter", "none");
    });
    $(".slick-prev").mouseout(function () {
        $('.slick-current .slideimg').css("opacity", "1").css("filter", "none");
    });
    $(".slick-prev").click(function () {
        $('.slick-current .slideimg').css("opacity", ".6").css("filter", "grayscale(100%)");
        $('.slick-current + .slick-active .slideimg').css("opacity", "1").css("filter", "none");
    });


    $(".slick-next").mouseover(function () {
        $('.slick-current .slideimg').css("opacity", "1").css("filter", "none");
        $('.slick-current + .slick-active .slideimg').css("opacity", ".6").css("filter", "grayscale(100%)");
    });
    $(".slick-next").mouseout(function () {
        $('.slick-current + .slick-active .slideimg').css("opacity", "1").css("filter", "none");
    });
    $(".slick-next").click(function () {
        $('.slick-current .slideimg').css("opacity", "1").css("filter", "none");
        $('.slick-current + .slick-active .slideimg').css("opacity", ".6").css("filter", "grayscale(100%)");
    });



    $(function() {
        $('.minnav [href]').each(function() {
            if (this.href == window.location.href) {
                $(this).addClass('activenav');
            }
        });
    });


    $('.menu-button').click(function () {
        $(".mob-nav").show();
        $(".menu-button").hide();
        $(".menu-cross").show();
        $("body").toggleClass("hidden");
    });
    $('.menu-cross').click(function () {
        $(".mob-nav").hide();
        $(".menu-button").show();
        $(".menu-cross").hide();
        $("body").toggleClass("hidden");
    });





    if (window.matchMedia("(min-width: 980px) and (max-width: 1440px)").matches) {
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            $('.cases').css("grid-template-columns", "calc((100vw - 80px)/4) calc((100vw - 80px)/4) calc((100vw - 80px)/4) calc((100vw - 80px)/4)");
            $('.clients .cases').css("grid-template-rows", "calc((100vw - 80px)/4) calc((100vw - 80px)/4)");
        } else {
            $('.cases').css("grid-template-columns", "calc((100vw - 100px)/4) calc((100vw - 100px)/4) calc((100vw - 100px)/4) calc((100vw - 100px)/4)");
            $('.clients .cases').css("grid-template-rows", "calc((100vw - 100px)/4) calc((100vw - 100px)/4)");
        }

    } else {

    }


    window.onscroll = function() {
        let scrolled = window.pageYOffset || document.documentElement.scrollTop;

        if(scrolled > 2){
            $(".filters").addClass('filter-padding');

        }
        if(2 > scrolled){
            $(".filters").removeClass('filter-padding');

        }


    };

    $('.input-mask__phone').inputmask('+375 (99) 999-99-99');


});





