import 'slick-carousel'

export default () => {
    $('.hero-slider').slick({
        infinite: true,
        arrows: true,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        speed: 1000,
        rows: 0,
        // autoplay: true,
        autoplay: false,
        responsive: [{
            breakpoint: 767,
            settings: {
                autoplay: false,
                speed: 0,
            },
        }],
    });

    $('.case-study-images').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        rows: 0,
        asNavFor: '.case-study-content',
    });

    $('.case-study-content').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.case-study-images',
        dots: true,
        infinite: true,
        // centerMode: true,
        rows: 0,
        focusOnSelect: true,
    });


}