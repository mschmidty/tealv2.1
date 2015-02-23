<!-- for Testing Reponsive IMages -->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php 
	$image = get_field('image');
	$sixeXlarge = 'xlarge-img';
	$sizeLarge = 'large-img';
	$sizeMedium	= 'medium-img';
	$sizeSmall = 'small-img';
	$sizeXsmall = 'xsmall-img';
	$xlarge = $image['sizes'][$sizeXlarge];
	$large = $image['sizes'][$sizeLarge];
	$medium = $image['sizes'][$sizeMedium];
	$small = $image['sizes'][$sizeSmall];
	$xsmall = $image['sizes'][$sizeXsmall];
 ?>
<?php if( !empty($image) ): ?>
	<div class="single-image">
	 	<picture>
	 		<source srcset="<?php echo $xlarge; ?>" media="(min-width: 950px)"> 	
	 		<source srcset="<?php echo $large; ?>" media="(min-width: 650px)">
	 		<source srcset="<?php echo $medium; ?>" media="(min-width: 450px)">
	 		<source srcset="<?php echo $small; ?>" media="(min-width: 300px)">
	 		<source srcset="<?php echo $xsmall; ?>" media="(min-width: 1px)">
	 		<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt']; ?>">
	 	</picture>
	 	<div class = "photo-info">
	 		<div class="left">
	 			<h3><?php the_title(); ?></h3>
	 			<p><?php echo the_field('photo_text'); ?></p>
	 			
	 		</div>
	 		<?php
	 		$author = get_field('image_author');
	 		$website = get_field('author_website');
	 		if(isset($author)){
	 		?>
	 		<div class="right">
	 			<p>Photo: <a href="<?php echo $website; ?> "><?php echo $author; ?></a></p>
	 		</div>
	 		<?php 
	 		}
	 		else{
	 		 ?>
	 		
	 		<p>Photo: By Someone Awesome</p>
	 		<?php } ?>
	 		
	 	</div>
 	</div>

 
<?php endif ?>

<?php 
	endwhile; 
	
?>

<div class="image-links">
	<ul>
		<li><?php next_post_link('%link', '<svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" version="1.1"><use class="center" xlink:href="#next" transform="rotate(180 11 11)" ></use></svg>'); ?> </li>
		<li> <a href="<?php echo get_permalink( 27 ); ?>" class="button">Back to Photos</a> </li>
		<li><?php previous_post_link('%link', '<svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" version="1.1"><use class="center" xlink:href="#next" ></use></svg>'); ?></li>
	</ul>
</div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>