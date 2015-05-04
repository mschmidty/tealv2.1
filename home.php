<?php
/*
Template Name: Homepage
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header') ); ?>

<div class="height-100 home-top-section">
	<div class="bottom-right">
		<img class="image-right-bottom" src="<?php echo get_template_directory_uri(); ?>/images/home/teal-cut-large.jpg">
	</div>
</div>
<div class="width-100">
	<picture>
		<source srcset="<?php echo get_template_directory_uri(); ?>/images/home/tealfontanalarge.jpg" media="(min-width: 1000px)">
		<source srcset="<?php echo get_template_directory_uri(); ?>/images/home/tealfontanamedium.jpg" media="(min-width: 700px)">
		<source srcset="<?php echo get_template_directory_uri(); ?>/images/home/tealfontanasmall.jpg" media="(min-width: 500px)">
		<img srcset="<?php echo get_template_directory_uri(); ?>/images/home/tealfontanaxsmall.jpg" alt="Teal in Fontana California.">
	</picture>
</div>
<div class="advocate height-100 centered-verticle-container">
	<p class="centered-verticle">
		"An advacate for women through cycling."
	</p>
	
</div>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>

