jQuery(document).ready(function($) {

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
