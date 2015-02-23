<!-- for Testing Reponsive IMages -->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<article>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php 
	$image = get_field('image');
	$sixeXlarge = 'xlarge-img';
	$sizeLarge = 'large-img';
	$sizeMedium	= 'medium-img';
	$sizeSmall = 'small-img';
	$xlarge = $image['sizes'][$sizeXlarge];
	$large = $image['sizes'][$sizeLarge];
	$medium = $image['sizes'][$sizeMedium];
	$small = $image['sizes'][$sizeSmall];
 ?>
<?php if( !empty($image) ): ?>
 	<picture>
 		<source srcset="<?php echo $xlarge; ?>" media="(min-width: 900px)"> 	
 		<source srcset="<?php echo $large; ?>" media="(min-width: 700px)">
 		<source srcset="<?php echo $medium; ?>" media="(min-width: 500px)">
 		<source srcset="<?php echo $large; ?>" media="(min-width: 300px)">
 		<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt']; ?>">


 	</picture>
<?php endif ?>

<?php 
	endwhile; 
	
?>
</article>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>