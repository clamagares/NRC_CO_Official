<?php get_header(); ?>
<?php
/*
Template Name: Plantilla Documentos
*/
?>

<div class="searchHeader">
	<div class="searchHeader-wrapper">
		<h1 class="searchHeader-wrapper-title"> Documentos NRC
		</h1>
	</div>
</div>

 <div class="single">		
  <div class="searchresult">
    <?php global $wp_query;
    $wp_query = new WP_Query("post_type=documentos&post_status=publish");
    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<div class="searchresult-item">
				<div class="searchresult-item-img">
          <?php  the_post_thumbnail('medium') ?>
				</div>
				<div class="searchresult-item-content">
					<h4 class="searchresult-item-content-title"><?php if( get_field('adjuntar_documento') ): ?><a href="<?php the_field('adjuntar_documento'); ?>" download>
          <?php the_title(); ?>
					</a></h4>
          Autor: <strong><?php the_field('autor_doc'); ?>|</strong> | Año: <strong><span class="searchresult-item-content-catAndDate-time"><?php the_field('doc_year'); ?></span></strong>
					<div class="searchresult-item-content-catAndDate">
						
					</div>
					<p><?php the_field('resumen_doc'); ?></p>
				</div>
			</div>
		</div>
</div>

  <?php endif; ?>

<?php endwhile; ?> 

<?php get_footer(); ?>