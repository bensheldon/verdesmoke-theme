<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/layout.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/style.css" type="text/css" />

	<?php wp_head(); ?>
</head>
	<body>
		<div id="header">
			<div id="banner">
				<div id="banner-inner" class="container_10">
				<h1 id="title" class="grid_6"><a href="<?php bloginfo('url'); ?>/">Hi! Welcome to <span class="site-title"><?php bloginfo('name'); ?></span></a></h1>
				<div id="search" class="grid_3"><?php include (TEMPLATEPATH . '/searchform.php'); ?></div>
				<a href="<?php bloginfo('rss2_url'); ?>" class="grid_1 feed"><img src="<?php bloginfo('stylesheet_directory') ?>/images/feedicon14x14.png" alt="RSS Feed" title="RSS Feed" /></a>
				<div class="clear"></div>
				</div>
			</div>
			<div id="about" class="container_10">
				<p class="grid_10"><?php print html_entity_decode(get_bloginfo('description')) ?></p>
			</div>
		</div>
		<div class="clear"></div> 

