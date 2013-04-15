<?php

// MDEngine
//
// Pages Controller

define('DEBUG', true);

require_once('settings.php');
require_once('md/markdown.php');

// figure out which page was requested
$page = substr($_SERVER['REQUEST_URI'], 1);
if (DEBUG) echo "$page\n";

// if it is a directory, append default_page
if (substr($page, strlen($page)-1, 1) == '/' || $page == '') {
	$page .= $mdengine['default_page'];
	if (DEBUG) echo "$page\n";
}

// append .md to look for markdown files
$page .= '.' . $mdengine['markdown_extension'];
if (DEBUG) echo "$page\n";

// go a directory up
$page = '../' . $page;
if (DEBUG) echo "$page\n";

// now we have the file path, get content if it exists
$content = file_get_contents('views/404.md');

if (file_exists($page)) {
	$content = file_get_contents($page);
	//header($_SERVER['SERVER_PROTOCOL'] . ' 200 OK');
}

// now figure out the title
if (substr($content, 0, 7) === 'Title: ') {
	$title = substr($content, 7, strpos($content, "\n")-7);
	$content = substr($content, strpos($content, "\n"));
} else {
	$title = $mdengine['default_title'];
}

// add prefix and suffix
$title = $mdengine['title_prefix'] . $title . $mdengine['title_suffix'];

require_once('views/header.php');
echo Markdown($content);
require_once('views/footer.php');

?>