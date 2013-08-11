<div class="row caseStudiesHolderTop " >
	<div class="module ContentTop">
		<h1> Case Studies </h1>
	</div>
</div>
<% loop $CaseStudies %>
	
	<div class="row" >
		<div class="module caseStudiesHolder clearfix " >
			<div class="<% if DisplayVideo =0 %>caseStudiesHolderHover <% end_if %>">
				<a href="$Link" alt="$Title" title="$Title" >
					<div class="caseStudiesHolderPhoto small-12">
						<% if $VideoURL %>
							<iframe src="http://player.vimeo.com/video/{$VideoURL.RAW}?byline=0&title=0&portrait=0"  byline="flase" title="false" portrait="false" width="380" height="224" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
						<% else %>
							<Img src="$ExcerptPhotoUrl" alt="$Title" title="$Title" >
						<% end_if %>

					</div>
					<div class="caseStudiesHolderLogo small-6 columns">
						<Img src="$LogoUrl" alt="$Title" title="$Title" >
					</div>
					<div class="hoverContainerCSSummary" ></div>
				</a>

			</div>
			
			<div class="caseStudiesSummary small-6 columns">
				
				<h3> $Title</h3>
				$Summary
				
			</div>
			<a href="$Link" class="tiny button">More</a>
			
		</div>
	</div>
	
	
<% end_loop %>
<div class="row caseStudiesHolderBottom" ></div>