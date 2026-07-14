jQuery(function ($) {
    $(".single-post").slick({
        infinite: true,
        autoplay: true,
        dots: true,
        speed: 600
    });

    $(".multiple-posts").slick({
        infinite: true,
        autoplay: true,
        dots: true,
        speed: 600,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});