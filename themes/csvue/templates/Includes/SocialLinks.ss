	<nav class="socialLinks">
	<% if $Socials %>
	<% loop $Socials %>
		<a href="$Link" target="_blank" ><img src="$IconUrl" alt="$Name" title="$Name"></a></li>
	<% end_loop %>
	<% end_if %>
		<a class="desktop" href="https://login.csvue.co.nz/" target="_blank"><img src="$ThemeDir/images/csvue-launch-button.png" alt="Launch CSVUE" /></a>
		<a class="mobile" href="https://login.csvue.co.nz/" target="_blank"><img src="$ThemeDir/images/csvue-launch-button-mobile.png" alt="Launch CSVUE" /></a>
	</nav>