<?php get_header(); ?>
<?php
/*
Template Name: Plantilla Documentos NRC
*/
?>

<div class="searchHeader">
	<div class="searchHeader-wrapper">
		<h1 class="searchHeader-wrapper-title"> Documentos NRC</h1>
	</div>
</div>
 <div class="single">		
  <div class="searchresult">

<?php
// Custom query.
$args = array(
    'post_type' => 'documentos',
    'tax_query' => array(
        array(
            'taxonomy' => 'documentos',
            'field' => 'slug',
            'terms' => 'documentos-nrc',
        )
    )
);

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="searchresult-item">
				<div class="searchresult-item-img">
					<a href="<?php the_field('adjuntar_documento'); ?>" download>
          	<?php  the_post_thumbnail('medium') ?>
					</a>
				</div>
				<div class="searchresult-item-content">
					<h4 class="searchresult-item-content-title">
						<?php if( get_field('adjuntar_documento') ) ?>
						<a href="<?php the_field('adjuntar_documento'); ?>" download><?php the_title(); ?></a>
					</h4>
          Autor: <strong><?php the_field('autor_doc'); ?>|</strong> | Año: <strong><span class="searchresult-item-content-catAndDate-time"><?php the_field('doc_year'); ?></span></strong>
					<div class="searchresult-item-content-catAndDate">
						
					</div>
					<p><?php the_field('resumen_doc'); ?></p>
				</div>
			</div>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



		</div>		


<?php get_footer(); ?>