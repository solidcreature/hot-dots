<?php get_header(); ?>

<div class="hot-dots__wrapper">
	<div class="hot-dots">
		<img class="hot-dots__image" src="<?php the_field('hot_image'); ?>">
		<?php 
			$dots_count = get_field('hot_count');
			$counter = 1;
			
			while ($counter <= $dots_count):
				$pos_x = get_field('hot_x_' . $counter);
				$pos_y = get_field('hot_y_' . $counter);	
				$text = get_field('hot_text_' . $counter);
				$position = get_field('hot_position_' . $counter);
				
				echo '<div class="hot-dots__point" style="top:' . $pos_y . '%; left:' . $pos_x . '%;">' . $counter . '<span class="hot-dots__point-text position--' . $position .'">' . $text . '</span></div>';
			
				$counter++;
			endwhile;
			
		?>
	</div>
</div>


<?php get_footer(); ?>
