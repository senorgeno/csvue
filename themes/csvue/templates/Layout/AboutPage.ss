<div class="row" >
	<div class="module ContentTop" >
		<div class="large-12 columns mainContent">
			<h1> $Title </h1>
			$Content
			$Form
		</div>
	</div>
</div>
<div class="row staff" >
	<div class="module " >
		<h2> Leadership </h2>
		<% loop StaffMembers %>
			<div class="large-6 columns staffMember">
				$Photo.CroppedImage(116,124)
				<h3>$Name</h3>
				<h4>$JobTitle</h4>
				<p>$Info</p>
			</div>
		<% end_loop %>
	</div>	
</div>

<% include AboutBanners %>
<div class="row caseStudiesHolderBottom" ></div>