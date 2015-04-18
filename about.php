<?php
/*
Template Name: About
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header') ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h1 class="center page-title"><?php the_title(); ?></h1>
		<article>
			<?php 
			$image = get_field('about_image');
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

			if( !empty($image) ):
			 ?>
			<picture>
		 		<source srcset="<?php echo $xlarge; ?>" media="(min-width: 950px)"> 	
		 		<source srcset="<?php echo $large; ?>" media="(min-width: 650px)">
		 		<source srcset="<?php echo $medium; ?>" media="(min-width: 450px)">
		 		<source srcset="<?php echo $small; ?>" media="(min-width: 300px)">
		 		<source srcset="<?php echo $xsmall; ?>" media="(min-width: 1px)">
		 		<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt']; ?>">
		 	</picture>
		 <?php endif; ?>
		
		
		<div class="clearfix">
			<?php the_content(); ?>
		</div>
		</article>
	<?php endwhile; ?>
	

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
