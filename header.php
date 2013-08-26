<!DOCTYPE html>
<html>
<head>
	<title>Asperger vrouwen</title>
	<link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/stylesheets/screen.css">
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body>
<div id="outerWrap">
	<header>
		<div id="headerNavWrap">
			<?php wp_nav_menu( array(
				'theme_location'  =>  'Main_Menu',
				'menu'            =>  'Hoofd Menu',
				'container'       => 'nav', 
				'container_class' => 'main_nav', 
				'container_id'    => 'headerNav',
				'menu_class'      => '', 
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '' ) ); ?>
		</div><!--  end headerNavWrap  -->
		<div id="headerWrap">