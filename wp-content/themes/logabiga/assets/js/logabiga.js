jQuery(function($) {
    $('.slidertitul').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"></button>',
        nextArrow: '<button class="slick-next" aria-label="Next" type="button"></button>',
    });
    // $(".half1").mouseover(function () {
    //     $('.slick-current .slideimg').css("opacity", ".6");
    //     $('.slick-current + .slick-active .slideimg').css("opacity", "1");
    // });
    // $(".half1").mouseout(function () {
    //     $('.slick-current .slideimg').css("opacity", "1");
    // });
    // $(".half2").mouseover(function () {
    //     $('.slick-active .slideimg').css("opacity", ".6");
    //     $('.slick-current .slideimg').css("opacity", "1");
    // });
    // $(".half2").mouseout(function () {
    //     $('.slick-active .slideimg').css("opacity", "1");
    // });
    // $(".slick-prev").mouseover(function () {
    //     $('.slick-current .slideimg').css("opacity", ".6");
    //     $('.slick-current + .slick-active .slideimg').css("opacity", "1");
    // });
    // $(".slick-prev").mouseout(function () {
    //     $('.slick-current .slideimg').css("opacity", "1");
    // });
    // $(".slick-next").mouseover(function () {
    //     $('.slick-active .slideimg').css("opacity", ".6");
    //     $('.slick-current .slideimg').css("opacity", "1");
    // });
    // $(".slick-next").mouseout(function () {
    //     $('.slick-active .slideimg').css("opacity", "1");
    // });
    // $(".slick-next").hover(function () {
    //     $('.slick-current + .slick-active .slideimg').toggleClass("cursor");
    // });



    $(function() {
        $('.minnav [href]').each(function() {
            if (this.href == window.location.href) {
                $(this).addClass('activenav');
            }
        });
    });




});





