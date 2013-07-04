<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <% base_tag %>
	<title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>

        <meta name="viewport" content="width=device-width">

	$MetaTags(false)


	<% require themedCSS('app') %>
        <script src="$ThemeDir/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

	<div class="top-bar2">
		<div class="row">
			<div class="large-12">
				<ul>
					<li><a href="#"><img src="$ThemeDir/images/Facebook.png"></a></li>
					<li><a href="#"><img src="$ThemeDir/images/LinkedIn.png"></a></li>
					<li><a href="#"><img src="$ThemeDir/images/email.png"></a></li>
				</ul>
			</div>
		</div>
	<div>
	<header class="row" >
        <div class="large-12 header-container">

            <div class="large-12 logoContainer">
		    	<img class="logo" src="$ThemeDir/images/cs-vue.gif" alt="" />
		    </div>
			<div class="large-12">
				<h2> Online Environment Compliance  |  Incident Management  |  Audit Systems </h2>
			</div>

        </div>
	</header>
	<div class="row" >
		<div class="large-12" >
			<p>
				<img class="homebanner" src="$ThemeDir/images/hero.png">
			</p>
		</div>
		<div class="large-12 lightBlue caseStudiesTitle" >
			<h3> Case Studies</h3>
		</div>
	</div>

	<div class="row" >
		<div class="large-3 columns csContainer" >
			<div class="intro" >
				<p>Check out how some of ourcustomers are benefiting fromusing CS-VUE</p>
			</div>
		</div>
		<div class="large-3 columns csContainer" >
			<div class="cs" >
				<img src="$ThemeDir/images/cs1.png">
				<h6> Transport </h6>
			</div>
		</div>
		<div class="large-3 columns csContainer" >
			<div class="cs" >
				<img src="$ThemeDir/images/sc2.png">
				<h6> Transport </h6>
			</div>
		</div>
		<div class="large-3 columns csContainer" >
			<div class="cs" >
				<img src="$ThemeDir/images/cs3.png">
				<h6> Transport </h6>
			</div>
		</div>
	</div>
	<div class="row" >
		<div class="large-3 columns csContainer" >
			<div class="cs" >
				<img src="$ThemeDir/images/sc4.png">
				<h6> Transport </h6>
			</div>
		</div>
		<div class="large-3 columns csContainer" >
			<div class="cs" >
				<img src="$ThemeDir/images/sc5.png">
				<h6> Transport </h6>
			</div>
		</div>
		<div class="large-3 columns csContainer" >
			<div class="cs" >
				<img src="$ThemeDir/images/sc7.png">
				<h6> Transport </h6>
			</div>
		</div>
		<div class="large-3 columns csContainer" >
			<div class="cs" >
				<img src="$ThemeDir/images/sc8.png">
				<h6> Transport </h6>
			</div>
		</div>
	</div>
	<div class="row" >
		<div class="large-3 columns csContainer" >
			<div class="cs" >
				<img src="$ThemeDir/images/sc9.png">
				<h6> Transport </h6>
			</div>
		</div>
		<div class="large-3 columns csContainer" >
			<div class="cs" >
				<img src="$ThemeDir/images/sc10.png">
				<h6> Transport </h6>
			</div>
		</div>
		<div class="large-3 columns csContainer" >
			<div class="cs" >
				<img src="$ThemeDir/images/sc11.png">
				<h6> Transport </h6>
			</div>
		</div>
		<div class="large-3 columns csContainer" >
			<div class="cs" >
				<img src="$ThemeDir/images/sc12.png">
				<h6> Transport </h6>
			</div>
		</div>
	</div>
		<!--
            <div class="main wrapper clearfix">

		    <div id="home-banner">
			    
		    </div>
			$Form
		    <h2 class="big-blue-heading">Case Studies</h2>
		    
		    <div id="home-case-study-wrapper" class="clearfix">
			<div class="home-case-study"></div>
			<div class="home-case-study"></div>
			<div class="home-case-study"></div>
			<div class="home-case-study no-right-margin"></div>
			<div class="home-case-study"></div>
			<div class="home-case-study"></div>
			<div class="home-case-study"></div>
			<div class="home-case-study no-right-margin"></div>
		    </div>
		   
		    <div class="grey-home-blockquote">
			    <blockquote>We're here to make environmental management easy!</blockquote>
		    </div>
		    
		    <h3 class="big-green-heading">About</h3>
		    
		    <div class="about-boxes"></div>
		    <div class="about-boxes"></div>
		    <div class="about-boxes no-right-margin"></div>
		    
                <!--<article>
                    <header>
                        <h1>article header h1</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec.</p>
                    </header>
                    <section>
                        <h2>article section h2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
                    </section>
                    <section>
                        <h2>article section h2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
                    </section>
                    <footer>
                        <h3>article footer h3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor.</p>
                    </footer>
                </article>

                <aside>
                    <h3>aside</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
                </aside>-->


        <div class="footer-container">
            <footer class="wrapper">
                <h3>footer</h3>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <!--<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>-->

        <script src="$ThemeDir/js/main.js"></script>

        
    </body>
</html>
