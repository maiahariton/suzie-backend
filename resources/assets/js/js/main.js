$.material.init();

$(function() {
    /**
     * equal height
     */
    function eqlHeight() {
        if($(window).width() > 1200) {
            $('.promo-box .heading').matchHeight();
            $('.promo-box .body').matchHeight();
            $('.mh-1').matchHeight();
        }
    }

    eqlHeight();

    $(window).on('resize', function () {
        eqlHeight();
    });

    /**
     * carousel
     */
    var latestBlogCarousel = $('.latest-blog-carousel');
    latestBlogCarousel.owlCarousel({
        items: 2,
        lazyLoad: true,
        pagination:false
    });

    // Custom Navigation Events
    $(".mainpage-latest-blog .next-btn a").click(function(e){
        e.preventDefault();
        latestBlogCarousel.trigger('owl.next');
    });
    $(".mainpage-latest-blog .prev-btn a").click(function(e){
        e.preventDefault();
        latestBlogCarousel.trigger('owl.prev');
    });


    var productSlider = $(".products-slider");

    productSlider.owlCarousel({
        itemsCustom : [
            [0, 1],
            [450, 1],
            [600, 1],
            [700, 1],
            [1024, 3],
            [1200, 5],
            [1400, 5],
            [1600, 5]
        ],
        navigation : true,
        pagination:false,
    });

    $('.achievements-slider').owlCarousel({
        itemsCustom : [
            [0, 1],
            [450, 1],
            [600, 1],
            [700, 1],
            [1024, 3],
            [1200, 5],
            [1400, 7],
            [1600, 7]
        ],
        navigation : true,
        pagination:false
    });

    window.onload = function() {
        var modal = document.getElementById('myModal');

        setTimeout(function() {
            $('#myModal').modal();
        }, 4000);
    };

    $(document).ready(function() {

        $("#achievement-carousel").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem: true,
            pagination: false,
            rewindSpeed: 500
        });

    });

    var mediaPressModal = document.getElementById('mediaPressModal');

    $('#media-button').click(function(){
        $('#mediaPressModal').modal();
    });

    var bookappoitment = document.getElementById('bookappoitment');

    $('#speaking-button').click(function(){
        $('#bookappoitment').modal();
    });

});
