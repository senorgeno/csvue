<div class="large-12 flexslider-container">
	<% if $HeroImages.Count == 1 %>
		<% loop $HeroImages %>
			<% if $URL %>
				<a href="$URL">
			<% end_if %>
			$Image.CroppedImage(942,374)
			<% if $URL %>
				</a>
			<% end_if %>
		<% end_loop %>
	<% else %>
	<div class="flexslider" >
		<ul class="slides">
		<% loop $HeroImages %>
		<li>
			<% if $URL %>
				<a href="$URL">
			<% end_if %>
			$Image.CroppedImage(942,374)
			<% if $URL %>
				</a>
			<% end_if %>
		</li>
		<% end_loop %>
		</ul>
	</div>
	<% end_if %>
</div>