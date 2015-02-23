<?php
/*
Template Name: Photos
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header') ); ?>

		<h1 class="center page-title">Photos</h1>
	
	
	<?php 
		$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
		$photo_query = new WP_Query(array(
				'post_type' => 'images',
				'posts_per_page' => 10,
				'paged' => $paged
		)); 
	?>
	<article>	
	<?php

		if($photo_query->have_posts()) : 
			while($photo_query->have_posts()) : $photo_query->the_post();
	?>
		
			<?php 
			$image = get_field('image');
			$size = 'thumb-img';
			$thumb = $image['sizes'][ $size ];
			?>
				<?php if( !empty($image) ): ?>
				<div class="photo-grid fancybox">
				<a href="<?php echo get_permalink(); ?>">
					
						<img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" >
					
				</a>
				</div>
	

			
			<?php endif; ?>

	

	<?php
		
		endwhile;
		endif;
 	?>
 	</article>
 	

 	

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
