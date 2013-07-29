<div class="row">
	<div class="module heroPostContainer" >
		<% with $HeroPost %>
			<div class="large-12 heroPost clearfix" >
				<div class="heropostImageHolder" >
						$Image.CroppedImage(520,300) 
					<h1> $Title </h1>
				</div>
				<div class="heropostSummary" >
					<h1> $Title </h1>
					$Content.FirstParagraph(html)
					<a href="$Link">READ MORE </a>
				</div>
			</div>
		<% end_with %>
	</div>
</div>
<div class="row  clearfix">
	<% loop $FeaturedPosts %>
		<div class="large-3 columns FeaturedPost" >
			<h3> $Title </h3>
			$Image.CroppedImage(300,105) 
		
			$Content.FirstParagraph(html)
			<a href="$Link">READ MORE </a>
			<p class="date"> $Date.Long </p>
			<p class="CommentCount"> $Comments.Count 0 Comments </p>
		</div>
	<% end_loop %>
	<div class="module featuredPostsSpacer clearfix" ></div>

</div>
<div class="row" >
	<div class="module" >
		<div class="large-8  columns blogLatestPosts" >
			<h2 class="BlogSummaryBlockHeading"> Recent Posts </h2>
			<% include BlogPagination %>
			<% loop $BlogEntries %>
				<div class="LatestPostModule">
					$Image.CroppedImage(142,170)
					<h3> $Title </h3>
					<h4> $Parent.Title </h4>
					<p class="bloginfo"> By $Author.XML $Date.Long </P>
						$Content.FirstParagraph(html)
						<a href="$Link">READ MORE </a>
				</div>
			<% end_loop %>
			<% include BlogPagination %>
			<div class="spacer" ></div>
		</div>

		<div class="large-4 columns blog BlogSidebar" >
			<h2 class="BlogSummaryBlockHeading"> $Parent.Title</h2>
			<% loop HomePageSiderBarPost %>
				<% include SidebarPostSummary %>
			<% end_loop %>
			<div class="BlogWidget">
			</div>
		</div>
	</div>
</div>