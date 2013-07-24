<div class="row" >
	<div class="module">
		<div class="large-12 flexslider-container">
			<div class=" heroImage flexslider" >
				<ul class="slides">

				<% loop $HeroImages %>
				<li>
					<% if $Link %>
						<a href="$Link">
					<% end_if %>
					$Image.CroppedImage(942,374)
					<% if $Link %>
						</a>
					<% end_if %>
				</li>
				<% end_loop %>

				</ul>
			</div>
		</div>
		<div class="large-12 lightBlue caseStudiesTitle" >
			<h3 class="myrid" > Case Studies</h3>
		</div>
	</div>
</div>

<div class="row">
	<div class="large-3 small-6 columns csContainer " >
		<div class="casestudiesHomePageintro lightBlue cs" >
			<p class="myrid">CS-VUE provides online systems for environmental management across a wide range of industries. Check out some of our customer case studies.</p>
		</div>
	</div>
	<% loop CaseStudyCategories %>
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
		<div class="lightGreen caseStudiesTitle aboutTitle" >
			<h3 class="myrid" > About </h3>
		</div>
	</div>
</div>
<% include AboutBanners %>
<div class="row" >
	<div class="module" >
		<div class="getintouchbox clearfix ReferBox">
			<h3>Got a colleague that might be interested in CS-VUE? Email them a link and we’ll get in touch. </h3>
			<a href="contact-us" class="button rounded hpb2">Refer CS-VUE</a>
		</div>
	</div>
</div>
