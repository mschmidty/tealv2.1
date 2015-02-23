<?php
/*
Template Name: Homepage
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header') ); ?>


<?php while ( have_posts() ) : the_post(); ?>

<div class="height-100 home-top-section">
	<div class="bottom-right">
		<img class="image-right-bottom" src="<?php echo get_template_directory_uri(); ?>/images/home/teal-cut-large.jpg">
	</div>
</div>
<?php endwhile; // end of the loop homepage. ?>
<div class="width-100 link-section background-black fill-red center">
	<svg viewBox="0 0 300 100" xmlns="http://www.w3.org/2000/svg" version="1.1">
	    <use class="fill-red" xlink:href="#scott-logo"></use>
	</svg>
	<h2>Race</h2>
	<p>Professional mountain bike and cyclocross racer for the SCOTT 3Rox Racing Team. </p>
</div>

<div class="width-100">
	<picture>
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/home/teal-enduro-large.jpg" media="(min-width: 1200px)">
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/home/teal-enduro-medium.jpg" media="(min-width: 800px)">
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/home/teal-enduro-small.jpg" media="(min-width: 601px)">
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/home/teal-enduro-xsmall.jpg" media="(min-width: 400px)">
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/home/teal-enduro.jpg">
	  <img srcset="<?php echo get_template_directory_uri(); ?>/images/home/teal-enduro-medium.jpg" alt="Photo:Robert Lowe">
	</picture> 		
</div>

<div class="width-100 link-section background-black fill-green center">
	<svg viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg" version="1.1">
	    <use class="fill-green" xlink:href="#moon_logo_white"></use>
	</svg>
	<h2>Promote</h2>
	<p>Working to promote local race events with my crew at Shadow Industries.</p>	
</div>

<div class="width-100">
	<picture>
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/home/teal-cross-large.jpg" media="(min-width: 800px)">
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/home/teal-cross-medium.jpg" media="(min-width: 600px)">
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/home/teal-cross-small.jpg" media="(min-width: 400px)">
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/home/teal-cross.jpg">
	  <img srcset="<?php echo get_template_directory_uri(); ?>/images/home/teal-cross-small.jpg" alt="Photo:Corey Keizer">
	</picture> 		
</div>

<div class="width-100 background-black center fill-orange link-section">
	<svg viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg" version="1.1">
	    <use class="fill-orange" xlink:href="#video"></use>
	</svg>
	<h2>Videos</h2>
	<p>Check out my latest videos from my time on the front lines of professional cycling. </p>
</div>

<div class="height-100">
	<div class="col-1-2 centered-verticle-container z100">
		<p class="italic centered-verticle z100">Fierce believer in equity, self empowerment and confidence for women through cycling.</p>
	</div>
	<div class="image-full z10">
		<img src="<?php echo get_template_directory_uri(); ?>/images/teal-hair.jpg">
	</div>
</div>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>