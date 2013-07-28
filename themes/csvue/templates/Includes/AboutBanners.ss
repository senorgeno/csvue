<div class="row" >
	<% loop SellingPage %>
	<a href="$Link">
	<div class="large-4 small-12 columns SellingPageContainer">
		<div class="sellingImage">
			<img src="$BannerUrl" alt="$Title" title="$Title">
			<div class="hoverContainerLarge" ></div>
		</div>
		<h5> $Title </h5>
		$Summary
		<a class="HomepageLink" href="$Link">More </a>
	</div>
	</a>

	<% end_loop %>
</div>