<div class="row" >
	<div class="module">
		<% include Slider %>
		<a href="case-studies/">
		<div class="large-12 lightBlue caseStudiesTitle" >
			<h3 class="myrid" > Case Studies</h3>
		</div>
		</a>
	</div>
</div>

<div class="row">
	<div class="large-3 small-6 columns csContainer " >

		<div class="casestudiesHomePageintro lightBlue cs" >
			<p class="myrid">$CaseStudiesIntro</p>
		</div>

	</div>
	<% loop $CaseStudyCategories %>
	<a href="$Link">
	<div class="large-3 small-6 columns csContainer" >
		<div class="cs" >
			<div>
				<img src="$ImageUrl">
				<div class="hoverContainer" ></div>
			</div>
			<h6 > $Title </h6>
		</div>
	</div>
	</a>
	<% end_loop %>
</div>
<div class="row" >
	<div class="module" >
		<div class="getintouchbox clearfix">
			<h3>We’re here to make environmental management easy!</h3>
			<a href="contact-us" class="button rounded hpb1">Get in touch</a>
		</div>
	</div>
</div>
<div class="row" >
	<div class="module">
		<a href="about/">
		<div class="lightGreen caseStudiesTitle aboutTitle" >
			<h3 class="myrid" > About </h3>
		</div>
		</a>
	</div>
</div>
<% include AboutBanners %>
