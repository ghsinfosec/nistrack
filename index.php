<?php

// show errors
error_reporting(E_ALL);
ini_set("display_errors", 1);

// include the PageData model for page content
include_once "models/PageData.class.php";

// set properties for a new PageData object
$pageData = new PageData();
$pageData->title = "NISTrack";
$pageData->content = include_once "views/navigation.php";
$pageData->addCSS('css/style.css');
$pageData->addScript('js/cardbox.js');

// setup the database info needed to show functions data
$dbInfo = "mysql:host=localhost;dbname=nistrack";
$dbUser = getenv('MYSQL_DBUSER', true);
$dbPass = getenv('MYSQL_DBPASS', true);

$db = new PDO($dbInfo, $dbUser, $dbPass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pageData->content .= include_once "controllers/functions.php";

// require the page view layout/template and show it
$page = require "views/page.php";

echo $page;
