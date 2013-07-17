<div class="row ">
	<div class="module ContentTop" >
		<div class="large-8 columns mainContent blogentry">
			<h1> $Title </h1>
			<p class="bloginfo"> By $Author.XML $Date.Long </P>
			$Content
			$Form
			$PageComments
		</div>
	</div>	
	<div class="module" >
		<div class="large-4 columns mainContentSideBar" >
			<% if $Image %>
				$Image.CroppedImage(300,450)
			<% end_if %>
			<h2 class="BlogSummaryBlockHeading"> $Parent.Title</h2>
			<% loop $AllPosts %>
				<% if $Parent.Title == $Top.parent.Title %>
					<% if $Title != $Top.Title %>
						<% include SidebarPostSummary %>
					<% end_if %>
				<% end_if %>
			<% end_loop %>
		</div>
	</div>
</div>