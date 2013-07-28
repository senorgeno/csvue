<div class="row" >
	<div class="module ContentTop" >
		<% if $Image %>
			<div class="large-8 columns mainContent">
				<h1> $Title </h1>
				$Content
				$Form
			</div>
		<div class="large-4 columns mainContentSideBar" >
			$Image.CroppedImage(300,450)
		</div>
		<% else %>
			<div class="large-12 columns mainContent">
				<h1> $Title </h1>
				$Content
				$Form
			</div>
		<% end_if %>
	</div>
</div>
