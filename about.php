<?php
/*
Template Name: About
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header') ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h1 class="center page-title"><?php the_title(); ?></h1>
		<article>
			<?php the_content(); ?>
		</article>
	<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
