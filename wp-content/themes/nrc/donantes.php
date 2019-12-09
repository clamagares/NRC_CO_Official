<?php get_header(); ?>
<?php
/*
Template Name: Plantilla Donantes
*/
?>

<div class="searchHeader">
	<div class="searchHeader-wrapper">
		<h1 class="searchHeader-wrapper-title">Donantes</h1>
	</div>
</div>
<div class="single">		
<div class="gridThumbDonantes wrapper-wide">
	<?php global $wp_query;
	$wp_query = new WP_Query("post_type=donantes&post_status=publish");
	$i = 1; while ($wp_query->have_posts() && $i < 50) : $wp_query->the_post(); ?>
	<div class="gridThumbDonantes-item">
		<a class="gridThumbDonantes-item-link" title="<?php the_title(); ?>" href="<?php the_field('url_donante'); ?>" target="_blank" rel="noopener noreferrer">
			<?php the_post_thumbnail('full'); ?>
		</a>
	</div>
	<?php $i++; endwhile; ?>
</div>
<!-- <img class="wp-image-764 size-large aligncenter" src="http://www.nrc.org.co/dev/wp-content/uploads/2017/01/Mapa-Donantes-1088x612.png" alt="" width="1088" height="612" /> -->
</div>

<?php get_footer(); ?>