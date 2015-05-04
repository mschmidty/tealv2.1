<?php
/*
Template Name: Schedule
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header') ); ?>

<h1 class="center page-title">Schdule</h1>



<?php 
		$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
		$schedule_query = new WP_Query(array(
				'post_type' => 'schedule',
				'posts_per_page' => -1,
				'meta_key' => 'date',
        'orderby' => 'meta_value_num' ,
        'order' => 'ASC'
		)); 
	?>

<article>	
	<?php

		if($schedule_query->have_posts()) : 
			while($schedule_query->have_posts()) : $schedule_query->the_post();
	?>
  <?php 
      $image = get_field('logo');
      $date = DateTime::createFromFormat('Ymd', get_field('date'));
      $location = get_field('location');
      $website = get_field('event_website');
      $eventDetails = get_field('event_details');

  ?>
  <div class="schedule-module">
    <div class="schedule-date">
      <h3><?php echo $date->format('M d, Y'); ?></h3>
    </div>
    <div class="schedule-logo">
    <?php if( !empty($image) ): ?> 
      <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt']; ?>">
    <?php endif; ?>  
    </div>
    <h2><?php the_title(); ?></h2>
    <p class="schedule-location"><?php echo $location; ?></p>

    <p><?php echo $eventDetails; ?></p>
    <a href="<?php echo $website; ?>">Event Website</a>
  </div>

<?php
		
		endwhile;
		endif;
 	?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
