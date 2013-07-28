

jQuery(document).ready(function($) {
	$("#nav").tinyNav({
	  active: 'active', // String: Set the "active" class
	  header: 'Navigation', // String: Specify text for "header" and show header instead of the active item
	  label: '' // String: Sets the <label> text for the <select> (if not set, no label will be added)
	});

	$('.flexslider').flexslider({
			animation: "slide",              //Select your animation type (fade/slide)
			slideshow: true,                //Should the slider animate automatically by default? (true/false)
			slideshowSpeed: 7000,           //Set the speed of the slideshow cycling, in milliseconds
			animationDuration: 500,         //Set the speed of animations, in milliseconds
			directionNav: true,             //Create navigation for previous/next navigation? (true/false)
			controlNav: true,               //Create navigation for paging control of each clide? (true/false)
			keyboardNav: true,              //Allow for keyboard navigation using left/right keys (true/false)
			touchSwipe: true,               //Touch swipe gestures for left/right slide navigation (true/false)
			prevText: "Previous",           //Set the text for the "previous" directionNav item
			nextText: "Next",               //Set the text for the "next" directionNav item
			randomize: false,                //Randomize slide order on page load? (true/false)
			slideToStart: 0,                //The slide that the slider should start on. Array notation (0 = first slide)
			pauseOnAction: true,            //Pause the slideshow when interacting with control elements, highly recommended. (true/false)
			pauseOnHover: false,
			useCSS:true        //Pause the slideshow when hovering over slider, then resume when no longer hovering (true/false)
			//controlsContainer: ".flexslider-container"           //Advanced property: Can declare which container the navigation elements should be appended too. Default container is the flexSlider element. Example use would be ".flexslider-container", "#container", etc. If the given element is not found, the default action will be taken.
		});

	// Top Menu Rollovers 
	$('.topMenuLi').each(function(){
		var $this = $(this);
		$this.css({'position':'relative'});
		var $hover = $this.find('.MenuHover');
		$this.find('a').mouseenter(function(event){
			$hover.fadeIn('fast');
		});
		$this.mouseleave(function(){
			console.log('hover out');
			$hover.fadeOut('fast');
		});
	});

	$('.topMenu ul li').each(function(){
		var $this = $(this);
		var $topNavA = $this.find('.topA');
		$this.mouseenter(function(event){
			$topNavA.css('color','#ffffff');
			$this.find('.topMenuArrow').show();
			$this.find('ul').show();
		});
		$this.mouseleave(function(){
			$topNavA.css('color','#5c5653');
			$this.find('.topMenuArrow').hide();
			$this.find('ul').slideUp('100');
		});
	});
	
	// homepage rollovers 

	$('.cs div:not(.hoverContainer)').each(function(){
		var $this = $(this);
		$this.css({'position':'relative'});
		var $hover = $this.find('.hoverContainer');
		$this.find('img').mouseenter(function(event){
			$hover.fadeIn('fast');
		});
		$this.mouseleave(function(){
			$hover.fadeOut('slow');
		});
	});

	$('.sellingImage').each(function(){
		var $this = $(this);
		$this.css({'position':'relative','display':'block'});
		var $hover = $this.find('.hoverContainerLarge');
		$this.find('img').mouseenter(function(event){
			$hover.fadeIn('fast');
		});
		$this.mouseleave(function(){
			$hover.fadeOut('slow');
		});
	});

	// Blog Holder Page
	var FeaturedPostHeight = 0;
	$('.FeaturedPost').each(function(){
		var thisHeight = $(this).height()
		if( thisHeight > FeaturedPostHeight){
			FeaturedPostHeight = thisHeight;
		}
	});
	$('.FeaturedPost').height(FeaturedPostHeight);
});
