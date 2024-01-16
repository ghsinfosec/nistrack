<?php

// show errors
error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once "models/PageData.class.php";

// set properties for a new PageData object
$pageData = new PageData();
$pageData->title = "NISTrack";
$pageData->content = include_once "views/navigation.php";

$navLinkClicked = isset($_GET['page']);
if ($navLinkClicked) {
	$loadPage = $_GET['page'];
} else {
	$loadPage = "about";
}

$pageData->content .= include_once "views/$loadPage.php";

$page = require "views/page.php";
echo $page;
