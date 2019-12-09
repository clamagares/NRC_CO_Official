<?php get_header(); ?>
<body>
	<section class="single">
		<figure> 
			<?php the_post_thumbnail('principal-entrada'); ?>
		</figure>
			<div class="u-wrapper">
				<div class="meta-info">	
					<div id="iconCamera" class="icon-camera"><img src="<?php bloginfo('template_directory'); ?>/images/camera.png" alt=""></div>
					<div id="esconder" class="leyenda">
						<?php the_field('leyenda_foto_principal'); ?>
					</div>
				</div>
			</div>	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="u-wrapper">
			<div class="meta-info">
				<h1 class="title-post"><?php the_title(); ?></h1>			
				<div class="meta-info-compartir">
					<div class="meta-info-compartir-fecha">
						<h5 >Publicado <?php the_time('j M Y') ?></h5>
					</div>
					<?php include TEMPLATEPATH . "/template/social.php" ?>
				</div>
				<div class="category">
					<div class="category-icon">
						<div class="category-icon-tag"><img src="<?php bloginfo('template_directory'); ?>/images/tag.png" alt=""></div>
					</div>
					<div class="category-name">
						<?php 
							$taxonomy = 'category';
							
							// Get the term IDs assigned to post.
							$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
							
							// Separator between links.
							$separator = ', ';
							
							if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) {
							
									$term_ids = implode( ',' , $post_terms );
							
									$terms = wp_list_categories( array(
											'child_of' => 48,
											'title_li' => '',
											'style'    => 'none',
											'echo'     => false,
											'taxonomy' => $taxonomy,
											'include'  => $term_ids,
									) );
							
									$terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );
							
									// Display post categories.
									echo  $terms;
							}
						?>
					</div>


				</div>
			</div>
		</div>
		<section class="u-wrapper">
			<article class="single-body">
				<?php the_content(); ?>
			</article>
		</section>
		<!-- post -->
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
	</section>
	<!-- ÚLTIMAS NOTICIAS !-->

<h2 class="lined-heading"><span>Últimas Noticias</span></h2>
<div class="destacadoHome u-wrapper contentareaitem">
		<?php
		$posts = query_posts(array(
				'meta_query' => array(
						array(
								'category_name' => 'ultimas-noticias',
								'key' => 'ultimas_noticias', // name of custom field
								'value' => '1', // matches exactly "red"
						)
				)
		));
		?>
			<?php while (have_posts()) : the_post(); ?>
	<a class="destacadoHome-column" href="<?php the_permalink() ?>">
		<div class="destacadoHome-column-content">
			<div class="destacadoHome-column-content-imagen">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('ultimas-noticias-home');
						} else { ?>
				<?php } ?>
			</div>
				<h5 class="fecha"> <?php the_time('j M Y') ?></h5>

			<h2><?php the_title(); ?></h2>
			<?php the_excerpt(); ?>
		<?php endwhile; ?>
		</div>
	</a>

		<?php
		$posts = query_posts(array(
				'meta_query' => array(
						array(
								'category_name' => 'ultimas-noticias',
								'key' => 'ultimas_noticias', // name of custom field
								'value' => '2', // matches exactly "red"
						)
				)
		));
		?>
			<?php while (have_posts()) : the_post(); ?>
	<a class="destacadoHome-column" href="<?php the_permalink() ?>">
		<div class="destacadoHome-column-content">
				<div class="destacadoHome-column-content-imagen">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail('ultimas-noticias-home');
							} else { ?>
					<?php } ?>
				</div>
				<h5 class="fecha"><?php the_time('j M Y') ?></h5>
			<h2><?php the_title(); ?></h2>
			<?php the_excerpt(); ?>
			<!--<a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace a <?php the_title(); ?>"></a>-->
		<?php endwhile; ?>
		</div>
	</a>

		<?php
		$posts = query_posts(array(
				'meta_query' => array(
						array(
								'category_name' => 'ultimas-noticias',
								'key' => 'ultimas_noticias', // name of custom field
								'value' => '3', // matches exactly "red"
						)
				)
		));
		?>
		<?php while (have_posts()) : the_post(); ?>
	<a class="destacadoHome-column" href="<?php the_permalink() ?>">
		<div class="destacadoHome-column-content">
			<div class="destacadoHome-column-content-imagen">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('ultimas-noticias-home');
						} else { ?>
				<?php } ?>
			</div>
				<h5 class="fecha"><?php the_time('j M Y') ?></h5>
			<h2><?php the_title(); ?></h2>
			<?php the_excerpt(); ?>
			<!--<a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace a <?php the_title(); ?>"></a>-->
		<?php endwhile; ?>
		</div>
	</a>
</div>
<?php get_footer(); ?>