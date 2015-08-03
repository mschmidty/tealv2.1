<?php
/*
Template Name: Sponsors
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header') ); ?>

<h1 class="center page-title">Sponsors</h1>

<?php 
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $sponsor_query = new WP_Query(array(
        'post_type' => 'sponsor',
        'posts_per_page' => 40,
        'paged' => $paged
    )); 
 ?>
 <article>
  <p class="italic">Click on a sponsor to see their awesome products.</p>
  <?php 
    if($sponsor_query->have_posts()) :
      while($sponsor_query->have_posts()) : $sponsor_query->the_post();
  ?>
  <?php 
    $image = get_field('sponsor_image');
    $size = 'small-img';
    $sponsor_image = $image['sizes'][$size];
    $sponsor_link = get_field('sponsor_website');
  ?>
  <?php if(!empty($image) ): ?>
    <div class="sponsor-container">
      <a href="<?php echo $sponsor_link; ?>" target="_blank">
      <img src="<?php echo $sponsor_image; ?>" alt="<?php echo$sponsor_image['alt']; ?>">
      </a>
      
    </div>
  <?php endif; ?>
  <?php
    
    endwhile;
    endif;
  ?>
 </article>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>