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

// create an article element for each function returned
while ($func = $functions->fetchObject()) {
	$functionsHTML .= "
		<div id='$func->function_name' class='card'>
			<span class='card-title'>$func->function_name</span>
			<p class='card-content'>$func->function_description</p>
		</div>
		";
}

$functionsHTML .= "</div>";
$functionsHTML .= "</section>";

return $functionsHTML;
