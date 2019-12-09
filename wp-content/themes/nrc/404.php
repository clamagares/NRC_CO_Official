<?php get_header(); ?>
<body>
	<section class="single">
		<h2>Página no encontrada</h2>
		<figure> 
			<?php the_post_thumbnail('principal-entrada'); ?>
		</figure>

		<div id="ocultarIdVacio" class="meta-info">
			
		</div>
			<div class="u-wrapper">
				<div id="ocultarIdVacio" class="meta-info">	
					<div class="icon-camera">
						<img src="<?php bloginfo('template_directory'); ?>/images/camera.png" alt="">
					</div>
					<div id="leyenda">
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
						<!--<h5 >Publicado <?php the_time('j M Y') ?></h5>-->
					</div>
					<?php include TEMPLATEPATH . "/template/social.php" ?>
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
<?php get_footer(); ?>