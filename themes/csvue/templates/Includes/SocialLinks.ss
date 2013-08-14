	<ul class="socialLinks">
	<% if $Socials %>
	<% loop $Socials %>
		<li><a href="$Link" target="_blank" ><img src="$IconUrl" alt="$Name" title="$Name"></a></li>
	<% end_loop %>
	<% end_if %>
		<li><a href="https://login.csvue.co.nz/" target="_blank"><img src="$ThemeDir/images/csvue-launch-button.png" alt="Launch CSVUE" /></a>
	</ul>