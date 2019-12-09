<?php get_header(); ?>
<?php
/*
Template Name: Pagina ancha
*/
?>
<body>
	<section id="single">
		<figure> 
			<?php the_post_thumbnail('principal-entrada'); ?>
		</figure>
			<div class="u-wrapper">
				<div class="meta-info">	
					<!--<button class="abre-leyenda" onclick="toggleContent()">I   Leer más</button>-->
					<!-- <div class="icon-camera"><img src="<?php bloginfo('template_directory'); ?>/images/camera.png" alt=""></div> -->
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
					</div>
					<?php include TEMPLATEPATH . "/template/social.php" ?>
				</div>
			</div>
		</div>
		<section class="wrapper-wide">
			
				<?php the_content(); ?>
			
		</section>
		<!-- post -->
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
	</section>
<?php get_footer(); ?>