	<ul class="socialLinks">
	<% if $Socials %>
	<% loop $Socials %>
		<li><a href="$Link" target="_blank" ><img src="$IconUrl" alt="$Name" title="$Name"></a></li>
	<% end_loop %>
	<% end_if %>
	</ul>