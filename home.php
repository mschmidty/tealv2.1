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
<section class="home-links">
  <a href="/index.php/videos" class="home-links-child centered-verticle-container">
    <div class="centered-verticle">
      <h3 >Videos</h3>
    </div>
  </a>
  <a href="/index.php/schedule" class="home-links-child centered-verticle-container">
      <div class="centered-verticle">
        <h3>Schedule</h3>
      </div>
  </a>  
  <a href="/index.php/about" class="home-links-child centered-verticle-container">
      <div class="centered-verticle">
        <h3>About</h3>
      </div>
  </a>  
</section>
<section class="image-section-container">
  <div class="image-section">
    <a href="/index.php/photos"><h3>Latest Images</h3></a>
    <img 
        sizes="75vh"
        src="<?php echo get_template_directory_uri(); ?>/images/home/teal-fontana-medium.jpg"
        srcset="<?php echo get_template_directory_uri(); ?>/images/home/teal-fontana-large.jpg 1500w, <?php echo get_template_directory_uri(); ?>/images/home/teal-fontana-medium.jpg 1000w, <?php echo get_template_directory_uri(); ?>/images/home/teal-fontana-small.jpg 700w, <?php echo get_template_directory_uri(); ?>/images/home/teal-fontana-xsmall.jpg 500w" >
  </div>
</section>
<section class="width-100 home-sponsers">
  
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>

