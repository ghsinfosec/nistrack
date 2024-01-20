<?php

/*
	This is the default "public" landing page.
	Future features will include an authenticated area to 
	add entries for the subcategories (select Tiers, add comments, etc.)

	Will likely include function definitions and "about" info
	on this page. Will also include a "login" link
 */

return "
<section class='hero'>
	<div class='hero-section'>
		<span class='hero-title'>NISTrack</span>
		<span class='hero-text'>
			<p>
				Keep track of your organization's progress in
				maintaining a cybersecurity program that is consistent
				with the NIST-CSF.
			</p>
		</span>
	</div>
	<div class='hero-image'>
		<!-- image source: https://www.nist.gov/libraries/nist-component-library/dist/img/logo/NIST-Logo-Brand-White.svg -->
		<img src='images/NIST-Logo-Brand-White.svg' alt='NIST-Logo' />
	</div>
</section>
";
