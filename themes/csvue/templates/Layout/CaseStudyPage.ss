<div class="row ">
	<div class="module ContentTop" >
		<div class="large-8 columns mainContent">
			<h1> $Title </h1>
			$Content
			$Form
		</div>
	</div>	
	<div class="module" >
		<div class="large-4 columns mainContentSideBar" >
			<% if $SideBarPhoto %>
				$SideBarPhoto.CroppedImage(300,450)
			<% end_if %>
		</div>
	</div>
</div>