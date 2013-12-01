<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <% base_tag %>
	<title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>

        <meta name="viewport" content="width=device-width">

	$MetaTags(false)
	<link rel="stylesheet" type="text/css" href="themes/csvue/flexslider/flexslider.css" />

	<% require themedCSS('app') %>
	<% require themedCSS('editor') %>
	<script src="$themeDir/js/modernizr.js" ></script>
	<% if $SiteConfig.GoogleAnalyticsID %>
	<script type="text/javascript">
			var _gaq = _gaq || [];
		_gaq.push(['_setAccount', '$SiteConfig.GoogleAnalyticsID']);
		_gaq.push(['_trackPageview']);

		(function() {
		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<% end_if %>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

	<div class="top-bar2">
		<div class="row">
			<div class="module">
				<div class="large-12">
					<% include SocialLinks %>
				</div>
			</div>
		</div>
	<div>
	<header class="row" >
		<div class="module" >
	        <div class="large-12 header-container clearfix">
			    <a href="home"><img class="logo" src="$ThemeDir/images/CS-Vue-logo-taglineOP.png" alt="$Title" title="$Title" /></a>
			 
			    <nav >
			    	<section class="topMenu" >
					    <ul id="nav">
						<% loop $Menu(1) %>
						<li class="<% if LinkingMode == current %>active<% end_if %> topMenuLi">
							<div class="MenuHover" ></div>
							<a href="$Link" class="topA">$MenuTitle.XML</a>
							<% if Children %>
							<ul >
								<% loop Children %>
								<li class="<% if LinkingMode == current %>active<% end_if %>">
									<a href="$Link" title="Go to the $Title.XML page">$MenuTitle.XML</a>
								</li>
								<% end_loop %>
							</ul>
							<!--<span class="topMenuArrow"></span>-->
							<% end_if %>
						</li>
						<% end_loop %>
						</ul>
					</section>
				</nav>
			    
			</div>
        </div>
	</header>
	<div class="row">
		<div class="module">
			<div class="large-12 colums tagline clearfix">
				<a href="about/products/" >
				<div class="taglinoxes taglinoxes-first">
					<h2>Online Environmental Compliance</h2>
				</div>
				<div class="taglinoxes">
					<h2>Incident Management</h2>
				</div>
				<div class="taglinoxes">
					<h2> Audit Systems </h2>
				</div>
				</a>
			</div>
		</div>
	</div>
	$Layout
	<% include  callToActionBar %>
	<footer class="footer-container">
        <div class="row">
        	<div class="module" >
        		<div class="large-4 columns">
        			<h5>TALK TO US ABOUT COMPLIANCE, INCIDENT MANAGEMENT OR AUDIT SYSTEMS</h5>
        			<div class="address">
        				$SiteConfig.Address
        			</div>
        			<div class="phone">
        				$SiteConfig.Phone
        			</div>
        			<div class="email">
        				<a href="mailto:$SiteConfig.email">$SiteConfig.email</a>
        			</div>
        		</div>
        		<div class="large-4 columns footerBlogLatest">
        			<h5> Recent Articles</h5>
				<p>Coming soon</p>
				<!--
        			<% loop LatestBlogPosts %>
        				<a href="$Link"><h6 class="">$Title</h6></a>
        				<p class="date"> $Date.Long </p>
        			<% end_loop %>
				-->
        		</div>
        		<div class="large-4 columns">
        			<a href="home"><h5 class="footerMenu">Home</h5></a>
				<% loop $Menu(1) %>
        			<a href="$Link"><h5 class="footerMenu">$Title</h5></a>
        			<% end_loop %>
        		</div>
        	</div>
        </div>
        <div class="row">
        	<div class="module footercopy" >
        		<p class="copyright">&copy; $SiteConfig.copyright</P>
        		<% include SocialLinks %>
        	</div>
        </div>
    </footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!--<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>-->

	<script src="$ThemeDir/javascripts/foundation/foundation.js"></script>
	<script src="$ThemeDir/js/tinynav.min.js"></script>
	<script src="$ThemeDir/flexslider/jquery.flexslider.js"></script>
    <script src="$ThemeDir/js/main.js"></script>
    </body>
</html>
