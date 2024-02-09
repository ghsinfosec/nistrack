<?php

// check for returned functions (controllers/functions.php)
$functionsFound = isset($functions);

// trigger and error if none found
if ($functionsFound === false) {
	trigger_error('views/functions-html.php needs $functions');
}

// create a section to show functions
$functionsHTML = include_once "views/about.php";
$functionsHTML .= "<section class='information'>";
$functionsHTML .= "<div class='info-title'>NIST Functions</div>";
$functionsHTML .= "<div class='info-container'>
		<p>The NIST functions are defined on their <a href='https://www.nist.gov/cyberframework/online-learning/five-functions'>website</a> as follows:</p>

		<p class='quote-text'>\"The Functions are the highest level of abstraction included in the Framework. They act as the backbone of the Framework Core that all other elements are organized around.</p>

		<p class='quote-text'>These five Functions were selected because they represent the five primary pillars for a successful and holistic cybersecurity program. They aid organizations in easily expressing their management of cybersecurity risk at a high level and enabling risk management decisions.\"</p>

		<p>Click on the function names to get more information about the purpose of each function.</p>
	</div>";
$functionsHTML .= "<div class='card-container'>";

// create a hidden article element for each function returned
while ($func = $functions->fetchObject()) {
	$functionsHTML .= "
		<div id='$func->function_name' class='card'>
			<span class='card-title'>$func->function_name</span>
		</div>
		<article class='modal hidden'>
			<div class='flex'>
				<span class='card-title'>$func->function_name</span>
				<p>$func->function_description</p>
			</div>
		</article>
		";
}

$functionsHTML .= "<div class='overlay hidden'></div>";
$functionsHTML .= "</div>";
$functionsHTML .= "</section>";

$functionsHTML .= "<section class='quote'>
	<div class='quote-section'>
		<div class='quote-container'>
			<div class='quote-text'>
				The cybersecurity framework allows organizations—regardless of size, degree of cyber risk, or cybersecurity sophistication—to apply the principles and best practices of risk management to improve the security and resilience of critical infrastructure. Organizations can use the framework to determine their current level of cybersecurity, set goals for cybersecurity that are in sync with their business environment, and establish a plan for improving or maintaining their cybersecurity. The cybersecurity framework also offers a methodology to protect privacy and civil liberties to help organizations incorporate those protections into a comprehensive cybersecurity program.
			</div>
			<div class='quote-author'>-Federal Cybersecurity Programs: A Resource Guide, National Governors Association, October 2014</div>
			<div class='quote-subtext'>From <a href='https://www.nist.gov/cyberframework/state-local-tribal-and-territorial-perspectives'>perspectives</a> on the NIST website</div>
		</div>
	</div>
</section>
";

return $functionsHTML;
