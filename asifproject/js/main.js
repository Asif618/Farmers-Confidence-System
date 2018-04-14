  $('#carousel-example-generic').carousel({
    interval: 2000
});


//Enllax js activation
$(window).enllax();
//jQuery Parallax Scrolling Effect

// slick slider
$('.succes-slider').slick({
        slidesToShow: 3,
        dots: false,
        infinite: true,
        prevArrow: '.controler .pre',
        nextArrow: '.controler .next',
        autoplay: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
      });
//   slick slider

// slick slider
$('.footer-slick').slick({
        slidesToShow: 3,
        dots: false,
        infinite: true,
        prevArrow: '.footer-control .pre',
        nextArrow: '.footer-control .next',
        autoplay: true,
        speed: 1500,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
      });
//   slick slider


// slick slider
  $('.news-slick').slick({
        vertical: true,
         autoplay: true,
         speed: 500,
         autoplaySpeed: 2000,
         arrows: false,
        slidesToShow: 4,
        responsive: [{
            breakpoint: 768,
            settings: {
                vertical: true,
                slidesToShow: 4,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                vertical: true,
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }]
    });
//   slick slider


// slick slider
  $('.news-right').slick({
        vertical: true,
         autoplay: true,
         arrows: false,
         speed: 1000,
         slidesToShow: 3,
         responsive: [{
            breakpoint: 768,
            settings: {
                vertical: true,
                slidesToShow: 4,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                vertical: true,
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }]
    });
//   slick slider

//

/* Demo Scripts for Bootstrap Carousel and Animate.css article
* on SitePoint by Maria Antonietta Perna
*/
(function( $ ) {

	//Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	
	//Variables on page load 
	var $myCarousel = $('#carousel-example-generic'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
		
	//Initialize carousel 
	$myCarousel.carousel();
	
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);
	
	//Pause carousel  
	$myCarousel.carousel('pause');
	
	
	//Other slides to be animated on carousel slide event 
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});  
	
})(jQuery);


/*==============*/

// BACK TO TOP
  $(document).ready(function(){
		       	$('.back_to_top').click(function(){
					 $('html, body') .animate({
						  scrollTop:0
					  },2000);
				});         
				 }); 
// BACK TO TOP



/*== Back to top ====*/
 $(window).scroll(function(){
 var navTop =  $(window).scrollTop();
 $('.model-0').css("top", navTop + 100);
});


alsolike(
  "xbyvmZ", "Radio Button List",
  "XJyqQr", "Loading",
  "VYRzaV", "open close"
);
 /*== Back to top ====*/

