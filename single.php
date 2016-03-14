<?php
/*
 	Template Name: Content No Sidebar
*/	
?>

<?php	get_header();	?>
	
		<div class="profile_area">
			<?php	while ( have_posts() ) : the_post();	?>

				<div class="profile profile_img">

					<?php	the_post_thumbnail( array(531, 398.5) );	?>
				
				</div>
				
				<?php	the_content();	?>
				  
			<?php	endwhile;	?>

		</div>
	
<?php	get_footer();	?>
	