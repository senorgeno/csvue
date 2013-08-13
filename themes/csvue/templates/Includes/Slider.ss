<div class="large-12 flexslider-container">
	<% if $HeroImages.Count == 1 %>
		<% loop $HeroImages %>
			<% if $Link %>
				<a href="$Link">
			<% end_if %>
			$Image.CroppedImage(942,374)
			<% if $Link %>
				</a>
			<% end_if %>
		<% end_loop %>
	<% else %>
	<div class="flexslider" >
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
	<% end_if %>
</div>