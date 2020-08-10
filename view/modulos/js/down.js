/*parallax scroll*/
		var isScrolling = false,scrollTimeout = null,lastScroll = 0, scrollDirection = 'none', parallaxElements = null;
		var scrollStart = function(){
			isScrolling = true;
			var currentScroll = $(window).scrollTop();
			var lastVisible;
			if(currentScroll>lastScroll){
				scrollDirection = 'down'
				$.each(parallaxElements,function(elementIndex,element){
					if(!$(element).hasClass('parallaxDown') && !mzBrain.checkVisible(element) && $(element).offset().top>currentScroll){$(element).addClass('parallaxDown')}
					else if(mzBrain.checkVisible(element)){$(element).removeClass('parallaxDown')}
				})
			}else if(currentScroll<lastScroll){
				scrollDirection = 'down'
			}else{
				scrollDirection = 'none'
			}
			lastScroll = currentScroll
			clearTimeout(scrollTimeout)
			scrollTimeout = setTimeout(scrollEnd,200)
		}
		var scrollEnd = function(){
			isScrolling = false
			scrollDirection = 'none'
		}
		parallaxElements = $('.parallax')
		$(window).on('scroll',function(e){
			if(!isTouch && $(window).width() > 900){
				scrollStart()
			}else{
				$.each(parallaxElements,function(elementIndex,element){
					if($(element).hasClass('parallaxDown')){$(element).removeClass('parallaxDown')}
				})
			}
		})
		/*parallax scroll*/
