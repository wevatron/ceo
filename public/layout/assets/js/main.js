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
        infinite: true,
        centerMode: true,
        slidesToShow: 4,
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
        slidesToScroll: 3
    });

	const box_up = $(".box-up")
	TweenMax.from(box_up, 2, {
	  y: 100,
	  opacity: 0
	})
	const box_down = $(".box-down")
	TweenMax.from(box_down, 2, {
	  y: -100,
	  opacity: 0
	})

	var dur = 0.4;
	$(".coolButton").each(function(index, element) {
	  var tl = new TimelineMax({ paused: true });
	  var cov = $(this).find(".background-btn");
	  var link = $(this).find("a");
	  var toggle = false;
	  tl.from(cov, dur, { scaleX: 0, transformOrigin: "left center" });
	  tl.to(link, dur, { color: "black" }, 0);
	  tl.addPause(null, function() {
	    if (toggle) tl.play();
	  });
	  tl.to(cov, dur, { scaleX: 0, transformOrigin: "right center" }, "part2");
	  tl.to(link, dur, { color: "black" }, "part2");

	  function over() {
	    toggle = false;
	    tl.play(0);
	  }
	  function out() {
	    toggle = true;
	    tl.resume();
	  }

	  $(element).hover(over, out);
	});


  $(".buttonEdiciones").each(function(index, element) {
        var tl = new TimelineMax({ paused: true });
        var cov = $(this).find(".background-btn-ediciones");
        var link = $(this).find("a");
        var toggle = false;
        tl.from(cov, dur, { scaleX: 0, transformOrigin: "left center" });
        tl.to(link, dur, { color: "black" }, 0);
        tl.addPause(null, function() {
          if (toggle) tl.play();
        });
        tl.to(cov, dur, { scaleX: 0, transformOrigin: "right center" }, "part2");
        tl.to(link, dur, { color: "black" }, "part2");

        function over() {
          toggle = false;
          tl.play(0);
        }
        function out() {
          toggle = true;
          tl.resume();
        }

        $(element).hover(over, out);
  });

    

});