<?php
/*
Template Name: Homepage
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header') ); ?>

<div class="home-top-section">
	<img sizes="100vw" src = "<?php echo get_template_directory_uri(); ?>/images/home/teal-face-medium.jpg"
srcset="<?php echo get_template_directory_uri(); ?>/images/home/teal-face-xsmall.jpg 500w, <?php echo get_template_directory_uri(); ?>/images/home/teal-face-small.jpg 700w, <?php echo get_template_directory_uri(); ?>/images/home/teal-face-medium.jpg 1000w, <?php echo get_template_directory_uri(); ?>/images/home/teal-face-large.jpg 1500w" alt="Teal looking at a score board">
</div>
<<<<<<< HEAD
<section class="width-100 home-links">
  <div class="home-links-child centered-verticle-container">
    <div class="centered-verticle">
      <h3 >Videos</h3>
      <p> Check out my latest videos from events around the country!</p>
    </div>
  </div>
  <div class="home-links-child centered-verticle-container">
    <div class="centered-verticle">
      <h3>Sponsors</h3>
      <p>It takes a village, if you know what I mean.</p>
    </div>
  </div>
  <div class="home-links-child centered-verticle-container">
    <div class="centered-verticle">
      <h3>About</h3>
      <p>The how, what, where and when of my career and life.</p>
    </div>
    </div>
  </div>
</section>
<section class="image-section-container">
  <div class="image-section">
    <h3>Latest Images</h3>
    <img 
        sizes="75vh"
        src="<?php echo get_template_directory_uri(); ?>/images/home/teal-fontana-medium.jpg"
        srcset="<?php echo get_template_directory_uri(); ?>/images/home/teal-fontana-large.jpg 1500w, <?php echo get_template_directory_uri(); ?>/images/home/teal-fontana-medium.jpg 1000w, <?php echo get_template_directory_uri(); ?>/images/home/teal-fontana-small.jpg 700w, <?php echo get_template_directory_uri(); ?>/images/home/teal-fontana-xsmall.jpg 500w" >
  </div>
</section>
=======
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

>>>>>>> origin/master


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>

