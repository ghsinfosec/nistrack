<?php

// include the FunctionsTable model
include_once "models/FunctionsTable.class.php";

// create the functionsTable instance, query the DB, and return the results
$functionsTable = new FunctionsTable($db);
$functions = $functionsTable->getNistFunctions();
$output = include_once "views/functions-html.php";

return $output;
