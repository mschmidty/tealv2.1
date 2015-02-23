<?php
/*
Template Name: Videos
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header') ); ?>
	
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h1 class="center page-title"><?php the_title(); ?></h1>
	<?php endwhile; ?>
	<?php rewind_posts(); ?>
	<?php 
		$video_query = new WP_Query(array(
				'post_type' => 'video',
				'posts_per_page' => 10
		)); 
	?>	
		<ul>
	<?php

		if($video_query->have_posts()) : 
			while($video_query->have_posts()) : $video_query->the_post();
	?>
		
			<li class="video-thumb-wrap">
				<div class="video-thumb-left">
					<div class="video-thumb">
						<svg viewBox="0 0 1200 1200" xmlns="http://www.w3.org/2000/svg" version="1.1">
		    				<use class="center" xlink:href="#play-icon2"></use>
						</svg>
						<a href="<?php esc_url( the_permalink() ); ?>" class="darken" ><img src="<?php video_thumbnail(); ?>"></a>
					</div>
				</div>
				<div class="video-thumb-right">
					<h3><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title() ?></a></h3>
					<p><?php the_content() ?></p>
					<h4 class="video-link-right"><a href="<?php esc_url( the_permalink() ); ?>">Watch The Video</a></h4>
				</div>
				
			</li>
	<?php
		
		endwhile;
		endif;
 	?>
 		</ul>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
