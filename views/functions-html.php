<?php

// check for returned functions (controllers/functions.php)
$functionsFound = isset($functions);

// trigger and error if none found
if ($functionsFound === false) {
	trigger_error('views/functions-html.php needs $functions');
}

// create a div to show functions
$functionsHTML = "<div class='nist-functions'>";

// create an article element for each function returned
while ($func = $functions->fetchObject()) {
	$functionsHTML .= "
		<article class='functions'>
			<h1>$func->function_name</h1>
			<p>$func->function_description</p>
		</article>
		";
}

$functionsHTML .= "</div>";

return $functionsHTML;
