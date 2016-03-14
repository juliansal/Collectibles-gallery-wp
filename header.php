<!doctype html>
<html>
<head>
	<title><?php	wp_title(); 	?></title>
	<?php	wp_head(); 	?>
</head>
<body>
	<div class="container">
		<h1 class="header"><a href="<?php	bloginfo('url'); 	?>" ><?php	bloginfo('name'); 	?></a></h1>
		
		<?php
			$defaults = array(
				'container' => false,
				'theme_location' => 'primary-menu',
				'menu_class' => 'menu'
			);
			if( has_nav_menu( 'primary-menu' ) ) {
				wp_nav_menu( $defaults );
			}
		?>

