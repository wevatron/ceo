$(document).ready(function(){
  
  console.log('%c CEO DIGITAL 2020 ', 'background: #ff0fc6; font-size:18px; font-weight: bold; padding: 5px; color: #ffffff');
  console.log('%c BIENVENIDO ', 'background: #fdeb00; font-size:18px; font-weight: bold; padding: 5px; color: #000000');

    $('.ediciones-anteriores').owlCarousel({
        loop:false,
        margin:10,
        rtl:true,
        autoplay: true,
        autoPlaySpeed: 5000,
        autoplayTimeout:5000,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true,
                loop:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:2,
                nav:false
            }
        }
    });

    $('.aliados-iconos-v1').owlCarousel({
        loop:false,
        margin:10,
        rtl:true,
        autoplay: true,
        autoPlaySpeed: 5000,
        autoPlayTimeout: 5000,
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
                nav:true,
                loop:true
            },
            600:{
                items:5,
                nav:false
            },
            1000:{
                items:5,
                nav:false,
            }
        }
    });

    $('.aliados-iconos-v2').owlCarousel({
        loop:false,
        margin:10,
        rtl:true,
        autoplay: true,
        autoPlaySpeed: 5000,
        autoPlayTimeout: 5000,
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
                nav:true,
                loop:true
            },
            600:{
                items:5,
                nav:false
            },
            1000:{
                items:5,
                nav:false,
            }
        }
    });

    $('.slide-bazar').owlCarousel({
          loop:false,
          margin:10,
          rtl:false,
          autoPlaySpeed: 5000,
          autoplayTimeout:5000,
          responsiveClass:true,
          responsive:{
              0:{
                  items:2,
                  nav:true
              },
              600:{
                  items:4,
                  nav:true
              },
              1000:{
                  items:4,
                  nav:true
              }
          }
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