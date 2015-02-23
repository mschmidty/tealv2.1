<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article>

	<h2 class="center page-title">Videos</h2>

	<div class="video-embed-container"> 
		<div class="video-embed">
			<?php the_field('embed_video'); ?>
		</div>
	</div>

	<h3><?php the_title(); ?></h3>

	<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>

	<div class="single-video-content">
		<?php the_content(); ?>			
	</div>

</article>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>