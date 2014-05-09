

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16982380-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();


$(document).ready(function () {	
	
	$('body').addClass('ready');
	$('.nav li').hoverIntent(
		function () {
			//show its submenu
			$('ul', this).slideDown(100);

		}, 
		function () {
			//hide its submenu
			$('ul', this).slideUp(100);			
		}
	);

	/*lva slideshow*/
	/*show first image*/
	function lvaSlideshow(lvaImg){
		$('.lva-slideshow .ss-img[img-index='+lvaImg+']').addClass('active').fadeIn();
		$('.slideshow-title').html($('#captions li[li-index='+lvaImg+']').html());
	}
	
	$('.lva-slideshow .ss-img[img-index=0]').addClass('active').delay( 50 ).fadeIn();
	$('.slideshow-title').html($('#captions li[li-index=0]').html());
	
	var len = $('.lva-slideshow .ss-img').size()-1;
	
	/*navigate by prev and next*/
	$('.ss-nav').click(function(){
		var curImg = $('.lva-slideshow .ss-img.active').attr('img-index');
		var direction = $(this).attr('id');
		var prevImg = curImg-1;
		var nextImg = parseInt(curImg)+1;
		//console.log(curImg+" : "+prevImg+" : "+nextImg);
		
		$('.lva-slideshow .ss-img.active').removeClass('active').hide();
		$('#captions').hide();

		if(direction == 'prev'){
			
			if(curImg == 0){

   				lvaSlideshow(len);
			}
			else{
				lvaSlideshow(prevImg);
			}

		}

		else if(direction == 'next'){

			if(curImg == len){

   				lvaSlideshow(0);
			}
			else{
				lvaSlideshow(nextImg);
			}

		}
		


	});

	$('#slider').click(function(){
			$('#captions').slideToggle('slow');
		}
		);

	$("#captions li").click(function(){
			var clickImg = $(this).attr('li-index');
			$('.lva-slideshow .ss-img.active').removeClass('active').hide();
			lvaSlideshow(clickImg);
			$('#captions').hide();
		});

	/*fan rotation*/

	var rotation = function (){
		$(".spinning-fan").rotate({
		angle:0,
		animateTo:360,
		duration:50000,
		callback: rotation,
		easing: function (x,t,b,c,d){
		return c*(t/d)+b;
		}
		});
	}


		  if (jQuery.support.leadingWhitespace) {
                  	 rotation();
                       }
   
		

	
});
