<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>

		<!-- YUI Reset CSS v3 -->
		<link rel="stylesheet" type="text/css" href="/_mdengine/views/css/yui-reset.css" />

		<!-- MDEngine Default Styles -->
		<link rel="stylesheet" type="text/css" href="/_mdengine/views/css/base.css" />

		<!-- Theme -->
		<link rel="stylesheet" type="text/css" id="theme-stylesheet" href="/_mdengine/views/css/<?php echo $mdengine['theme']; ?>.css" />

		<meta name="description" content="<?php echo $mdengine['meta_description']; ?>" />
		<meta name="author" content="<?php echo $mdengine['meta_author']; ?>" />

		<script src="/_mdengine/views/mdengine.js"></script>

		<?php if ( ! $mdengine['meta_allow_search']): ?>
		<meta name="robots" content="noindex, nofollow" />
		<?php endif; ?>

	</head>
	<body>
		<div class="main">