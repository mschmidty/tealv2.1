<?php
/*
Template Name: Homepage
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header') ); ?>


<?php while ( have_posts() ) : the_post(); ?>

<div class="height-100">
	<div class="col-1-2 centered-verticle-container">
		<div class="centered-verticle">
			<h2>Teal<br>Stetson-Lee</h2>
		</div>
	</div>
	<div class="col-1-2 centered-verticle-container">
		<div class="centered-verticle">	
			<p><?php the_field('home_page_paragraph'); ?></p>
		</div>
	</div>
</div>
<?php endwhile; // end of the loop homepage. ?>
<div class="height-100 homepage-video">
	
</div>
<div class="height-100 image-cover">
	
</div>
<div class="height-100">
	
</div>
<div class="height-100">
	
</div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>