<?php

// show errors
error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once "models/PageData.class.php";

// set properties for a new PageData object
$pageData = new PageData();
$pageData->title = "NISTrack";
$pageData->content = "More to come...";

$page = require "views/page.php";
echo $page;
