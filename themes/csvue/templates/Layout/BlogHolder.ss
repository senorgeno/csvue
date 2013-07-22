<div class="row" >
	<div class="module" >
		<div class="large-12  columns blogLatestPosts" >
			<h2 class="BlogSummaryBlockHeading"> $Title </h2>
			<% loop BlogEntries %>
				<div class="LatestPostModule">
					$Image.CroppedImage(142,170)
					<h3> $Title </h3>
					<h4> $Parent.Title </h4>
					<p class="bloginfo"> By $Author.XML $Date.Long </P>
						$Content.FirstParagraph(html)
						<a href="$Link">READ MORE </a>
				</div>
			<% end_loop %>
		</div>
	</div>
</div>