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

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>