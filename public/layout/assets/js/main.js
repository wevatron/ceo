$(document).ready(function(){
  
  console.log('%c CEO DIGITAL 2020 ', 'background: #ff0fc6; font-size:18px; font-weight: bold; padding: 5px; color: #ffffff');
  console.log('%c BIENVENIDO ', 'background: #fdeb00; font-size:18px; font-weight: bold; padding: 5px; color: #000000');

    $(".ediciones-anteriores").slick({
        dots: true,
        arrows: false,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
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
                    slidesToScroll: 1,
                    autoplay: true
                }
            }
        ]
    });
    $(".aliados-iconos-v1").slick({
        dots: false,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    autoplay: true,
                    arrows: true
                }
            }
        ]
    });
    $(".aliados-iconos-general").slick({
        dots: false,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 4
    });

    /** Module Herramientas Emprender */
    $(".slide-aprende").slick({
        dots: false,
        arrows:true,
        infinite: false,
        centerMode: false,
        slidesToShow: 4,
        rtl: false,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    autoplay: true
                }
            }
        ]
    });

    $(".vertical-tutoriales").slick({
        dots: true,
        arrows: false,
        vertical: true,
        verticalSwiping:true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    autoplay: true,
                }
            }
        ]
    });
    

});