<?php get_header(); ?>
<body>
	<section class="category">
		<?php $current_category = single_cat_title("", false); ?>COLOMBIAAAAAAA
		<h1><?php single_cat_title(''); ?></h1>

		<?php rewind_posts(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="listitems">
		<id class="headcategory">
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h2>
		</id>
		<div class="imagenesnoticias">
		<?php if ( has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail('carousel-image'); ?>
   </a>
 <?php endif; ?>
		</div>
		<?php the_excerpt(); ?>
		<footer>
			<!-- <strong><?php the_author(); ?></strong><br>
			<?php the_date(); ?> -->
		</footer>

	</div>
	<?php endwhile; ?>

	<!-- post navigation -->
	<?php else: ?>

	<!-- no posts found -->
	<?php endif; ?>
	<?php rewind_posts(); ?>
	<!-- <figure>
		<?php the_post_thumbnail(thumbnail); ?>
	</figure> -->
	<!--<?php the_category(); ?> -->

	</section>


	<?php get_footer(); ?>
