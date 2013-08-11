<div class="row ">
	<div class="module ContentTop" >
		<div class="large-8 columns mainContent">
			<h1> $Title </h1>
			$Content
			$Form
			<% if $VideoURL %>
				<iframe src="http://player.vimeo.com/video/{$VideoURL.RAW}?byline=0&title=0&portrait=0"  byline="flase" title="false" portrait="false" width="602" height="336" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
			<% end_if %>
		</div>
	</div>	
	<div class="module" >
		<div class="large-4 columns mainContentSideBar" >
			<% if $PageImage %>
				$PageImage.CroppedImage(300,450)
			<% end_if %>
		</div>
	</div>
</div>