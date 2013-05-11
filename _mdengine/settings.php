<?php

// This string occurs before the specified page title
$mdengine['title_prefix']        = '';

// This string occurs after the specified page title
$mdengine['title_suffix']        = '';

// If a page's title isn't specified, this will be
// substituted in
$mdengine['default_title']       = 'MDEngine';

// If a directory is requested, what file should
// MDEngine serve?
$mdengine['default_page']        = 'home';

// The file extension for your Markdown files,
// usually md or markdown, but you can make it
// whatever you like
$mdengine['markdown_extension']  = 'md';

// Should MDEngine redirect /directory/ to
// /directory/default?
$mdengine['redirect_canonical']  = false;

// Theme to use (the name of the CSS file)
$mdengine['theme']               = 'plain';

// Meta tags for site indexing
$mdengine['meta_description']    = 'A simple website created with MDEngine';
$mdengine['meta_author']         = 'John Doe';

// Should search engines be allowed?
$mdengine['meta_allow_search']   = true;

// Set this to your Google Analytics ID to enable
// tracking (e.g., UA-11627112-1)
$mdengine['google_analytics_id'] = false;

?>