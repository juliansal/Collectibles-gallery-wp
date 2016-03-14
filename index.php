<?php	get_header();	?>

<?php
	$args = array(
		'post_type' => 'collectible'
	);
	$query = new WP_Query($args);
?>
	
	
		<div class="images_area">
			<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
			
				<div class="image_box">
					<a href="<?php	the_permalink();	?>"><?php	the_post_thumbnail();	?></a>
				</div>
			
			<?php 	endwhile; else :	?>
				<h3><?php _e( 'Sorry, no posts available.' );	?></h3>
			<?php	endif; wp_reset_postdata();	?>
			
		</div>
	
	
<?php	get_footer();	?>