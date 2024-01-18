<?php

// show errors
error_reporting(E_ALL);
ini_set("display_errors", 1);

// include the PageData model for page content
include_once "models/PageData.class.php";

// set properties for a new PageData object
$pageData = new PageData();
$pageData->title = "NISTrack";
$pageData->addCSS("css/style.css");
$pageData->content = include_once "views/navigation.php";

// get the page that was clicked in the navbar
$navLinkClicked = isset($_GET['page']);
if ($navLinkClicked) {
	// set the clicked page
	$loadPage = $_GET['page'];
} else {
	// default landing page
	$loadPage = "about";
}

// show the clicked page
$pageData->content .= include_once "views/$loadPage.php";

// require the page view layout/template and show it
$page = require "views/page.php";
echo $page;
