<div class="row caseStudiesHolderTop " >
	<div class="module ContentTop">
		<h1> Case Studies </h1>
	</div>
</div>
<% loop $Children %>
	<div class="row" >
		<div class="module caseStudiesHolder clearfix">
			<div class="caseStudiesHolderPhoto">
				<Img src="$ExcerptPhotoUrl" alt="$Title" title="$Title" >
			</div>
			<div class="caseStudiesHolderLogo">
				<Img src="$LogoUrl" alt="$Title" title="$Title" >
			</div>
			<div class="caseStudiesSummary">
				
				<h3> $Title</h3>
				$Summary
				
			</div>
			<a href="$Link" class="tiny button">Read More</a>
		</div>
	</div>
<% end_loop %>
<div class="row caseStudiesHolderBottom" ></div>