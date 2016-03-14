<?php	get_header();	?>
	
		<div class="profile_area">
			<?php	while ( have_posts() ) : the_post();	?>

				<div class="profile profile_img">

					<?php	the_post_thumbnail( array(531, 398.5) );	?>
				
				</div>
				<div class="profile profile_text">
					<p><span class="text_label">Name: </span><?php	the_field('name');	?></p>
					<p><span class="text_label">By: </span><?php	the_field('by');	?></p>
					<p><span class="text_label">Item model #: </span><?php	the_field('item_model');	?></p>
					<p><span class="text_label">Height: </span><?php	the_field('height');	?></p>
					<p><span class="text_label">Description: </span><?php	the_field('description');	?></p>
				</div>
				  
			<?php	endwhile;	?>

		</div>
	
<?php	get_footer();	?>
	