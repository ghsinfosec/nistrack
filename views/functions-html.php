<?php

// check for returned functions (controllers/functions.php)
$functionsFound = isset($functions);

// trigger and error if none found
if ($functionsFound === false) {
	trigger_error('views/functions-html.php needs $functions');
}

// create a div to show functions
$functionsHTML = "<div class='container'>";

// create an article element for each function returned
while ($func = $functions->fetchObject()) {
	$functionsHTML .= "
		<div class='card'>
			<h2>$func->function_name</h2>
			<p>$func->function_description</p>
		</div>
		";
}

$functionsHTML .= "</div>";

return $functionsHTML;
