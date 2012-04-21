<?php

/*

	Markdown Controller
	--------------------

	@file 		controller.php
	@version 	1.0.0
	@date 		2012-04-19 20:15:59 -0400 (Thu, 19 Apr 2012)
	@author 	Ben Burwell <bburwell1@gmail.com>

	Copyright (c) 2012 Ben Burwell <http://www.benburwell.com/>

*/

// change this to whatever you want your site to be called
define('SITE', 'MdEngine');

// links to pages?
define('SHOW_LINKS', true);

// bring in markdown engine
require_once('md/markdown.php');

// hide PHP
header('Server: ');
header('X-Powered-By: ');

// do not alter these!
define('WEBROOT', substr($_SERVER['PHP_SELF'], 0, -22)); // chop off /engine/controller.php (22 chars)
define('FILEROOT', substr(__FILE__, 0, -22));            // chop off /engine/controller.php (22 chars)

// get page name
$page = ($_GET['qs'] != '' && $_GET['qs'] != '')? strtolower($_GET['qs']) : 'home';
define('MD_FILE', FILEROOT.'/content/'.$page.'.md');

$title = ucwords(str_replace('_', '', $page));

// display content
if (!file_exists(MD_FILE) || $_GET['qs'] == '404') {

	// handle 404
	$html = Markdown(file_get_contents(FILEROOT.'/theme/404.md'));
	
	// set 404 status
	header('HTTP/'.$_SERVER['HTTP_VERSION'].' 404 Not Found');
	
} else {

	// parse file
	$html = Markdown(file_get_contents(MD_FILE));
	
}

// display header
require_once(FILEROOT.'/theme/header.php');

echo $html;

// display footer
require_once(FILEROOT.'/theme/footer.php');

//echo WEBROOT;
//echo FILEROOT;
//echo MD_FILE;

exit();

?>