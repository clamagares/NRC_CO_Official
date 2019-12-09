<?php get_header(); ?>

<div class="contentareaitem" style="margin-top: 18px" >
	<div class="owl-carousel">

		<!-- CARRUSEL 1 -->
		<div class="slider-item">
			<?php
			$posts = query_posts(array(
					'meta_query' => array(
						array(
							'category_name' => 'noticia-principal',
							'key' => 'carrusel_noticias', // name of custom field
							'value' => '1', // matches exactly ""
						)
					)
			));
			?>
			<?php while (have_posts()) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('carousel-image');
						} else { ?>
				<?php } ?>
			<div class="marco-frase-slider">
				<div class="poster__heading">
					<h2 class="frase-slider"><?php the_title(); ?></h2>
				</div>
				
				<div class="poster__content">
					<div class="poster__text">
						<!--
						<span class="time"><?php the_date(); ?></span>
						<span class="separator">|</span>
						-->		
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
								//echo  $terms;
							}
						?>
						
						<?php the_content(); ?>
					</div>			
				</div>
				

			</div>
		<?php endwhile; ?>
		</div>

		<!-- CARRUSEL 2 -->
		<div class="slider-item">
			<?php
			$posts = query_posts(array(
					'meta_query' => array(
							array(
								'category_name' => 'noticia-principal',
								'key' => 'carrusel_noticias', // name of custom field
								'value' => '2', // matches exactly
							)
					)
			));
			?>
			<?php while (have_posts()) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('carousel-image');
						} else { ?>
				<?php } ?>
			<div class="marco-frase-slider">
				<div class="poster__heading">
					<h2 class="frase-slider"><?php the_title(); ?></h2>
				</div>
				<div class="poster__content">
					<div class="poster__text">
					<!--
					<span class="time"><?php the_date(); ?></span>
					<span class="separator">|</span>
					-->
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
							
									$terms = rtrim( trim( str_replace( '<br/>', $separator, $terms ) ), $separator );
							
									// Display post categories.
									//echo  $terms;
							}
						?>
						<?php the_content(); ?>
					</div>			
				</div>

			</div>
			<?php endwhile; ?>
		</div>

		<!-- CARRUSEL 3 -->
		<div class="slider-item">
			<?php
			$posts = query_posts(array(
					'meta_query' => array(
							array(
								'category_name' => 'noticia-principal',
								'key' => 'carrusel_noticias', // name of custom field
								'value' => '3', // matches exactly "red"
							)
					)
			));
			if( $posts ) {
				//...
		}
		?>
			<?php while (have_posts()) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('carousel-image');
						} else { ?>
				<?php } ?>
			<div class="marco-frase-slider">
				<div class="poster__heading">
					<h2 class="frase-slider"><?php the_title(); ?></h2>
				</div>
				<div class="poster__content">
					<div class="poster__text">
					<!--
					<span class="time"><?php the_date(); ?></span>
					<span class="separator">|</span>
					-->
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
									//echo  $terms;
							}
						?>
					<?php the_content(); ?>
					</div>			
				</div>

			</div>
		<?php endwhile; ?>
		
		</div>
	</div>
</div>

<!-- FRASE PRINCIPAL NRC-->
<div class="contentareaitem">
	<div class="wrapper-wid">
	<?php query_posts("page_id=726"); ?><?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?> <!-- Page Content -->
    <?php
    endwhile; //resetting the page loop
    ?>
	</div>
</div>

<!-- ÚLTIMAS NOTICIAS !-->
<h2 class="lined-heading"><span>Últimas Noticias</span></h2>
<div class="destacadoHome wrapper-wide contentareaitem">
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
<div class="contentareaitem">
	<div class="wrapper-wide">
		<a class="botonaccion" href="http://www.nrc.org.co/category/pais/">Más Noticias</a>
	</div>
</div>

<!-- MÁS QUE UN NÚMERO !-->
<h2 class="lined-heading"><span>Más que un número</span></h2>

<?php include TEMPLATEPATH . "/template/mas-que-un-mobile.php" ?>
<?php include TEMPLATEPATH . "/template/mas-que-un-desktop.php" ?>

<div class="contentareaitem">
	<div class="wrapper-wide">
		<a class="botonaccion" href="http://www.nrc.org.co/category/mas-que-un-numero/">Más Historias</a>
		<!--<a class="botonaccion" href="http://www.nrc.org.co/category/pais/">Más Historias</a>-->
	</div>
</div>

<!-- VIVE LA EDUCACIÓN !-->
<h2 class="lined-heading"><span>Vive la educación</span></h2>
<div class="contentareaitem">
	<div class="vive-la-educacion">
		<a href=" http://www.nrc.org.co/vive-la-educacion/" class="link-banner">
			<img src="<?php bloginfo('template_directory'); ?>/images/vive-la-educacion.jpg" alt="Vive-la-Educacion">
		</a>
	</div>
</div>

<!-- TRABAJA CON NOSOTROS !-->
<h2 class="lined-heading"><span>Trabaja con nosotros</span></h2>
<div class="contentareaitem">
	<div class="TrabajaConNosotros wrapper-wide">
		<a href="http://www.nrc.org.co/trabaja-con-nosotros/" class="TrabajaConNosotros-column">
			<figure>
				<img src="<?php bloginfo('template_directory'); ?>/images/trabaja-con-nosotros.jpg" alt="Trabaja con Nocotros">
			</figure>
			<div class="TrabajaConNosotros-column-content">
				<h2>Trabaja con nosotros</h2>
			</div>
		</a>

		<a href="http://www.nrc.org.co/contrataciones/" class="TrabajaConNosotros-column">
			<figure>
				<img src="<?php bloginfo('template_directory'); ?>/images/contrataciones.jpg" alt="Trabaja con Nocotros">
			</figure>
			<div class="TrabajaConNosotros-column-content">
				<h2>Contrataciones</h2>
			</div>
		</a>
	</div>
</div>

<h2 class="lined-heading">
	<i class="twitter-icon">
		<img src="<?php bloginfo('template_directory'); ?>/images/bird.svg" alt="">
	</i><br>
	<span class="lined-heading-twitter">Sígue la conversación</span>
</h2>
<div class="contentareaitem">
	<?php dynamic_sidebar( 'twitter-widget' ); ?>

	<a class="botonaccion" href="https://twitter.com/NRC_LAC" target="_blank">Síguenos</a>
</div>

<h2 class="lined-heading"><span>Sitios de interés</span></h2>
<!-- SITIOS DE INTERÉS !-->
<div class="contentareaitem">
	<div class="sitiosDeInteres wrapper-wide">
		<div class="sitiosDeInteres-column">
			<a href="https://www.nrc.no/search/?searchCategories=125" target="_blank">
				<figure>
					<img src="<?php bloginfo('template_directory'); ?>/images/perspective.jpg" alt="">
				</figure>
			</a>
		</div>
		<div class="sitiosDeInteres-column">
			<a href="http://www.internal-displacement.org" target="_blank">
				<figure>
					<img src="<?php bloginfo('template_directory'); ?>/images/logo-idmc.jpg" alt="">
				</figure>
			</a>
		</div>
		<div class="sitiosDeInteres-column">
			<a href="http://norcapweb.no/" target="_blank">
				<figure>
					<img src="<?php bloginfo('template_directory'); ?>/images/NORCAP_ENG_logo.jpg" alt="">
				</figure>
			</a>
		</div>
	</div>
</div>
<?php get_footer(); ?>