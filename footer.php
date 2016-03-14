
		<div class="footer">
			<p class="col">Copyright <?php 	echo date('Y'); 	?></p>
			<p class="col">Design by Julio Salguero</p>
			<p class="col"><?php previous_post_link(); ?> | <a href="<?php bloginfo('url'); ?>">Home</a> | 
				<?php next_post_link(); ?></p>
		</div>
	</div>
	
	<?php	wp_footer(); 	?>
</body>
</html>