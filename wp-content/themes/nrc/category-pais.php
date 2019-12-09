<?php get_header(); ?>
<body>
	<section class="category">
<h2 class="lined-heading" style="margin-top: 62px"><span>Últimas Noticias de NRC</span></h2>
<div class="destacadoHome wrapper-wide contentareaitem">
  <?php rewind_posts(); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <a class="destacadoHome-column" href="<?php the_permalink() ?>" style="margin-bottom: 30px">
		<div class="destacadoHome-column-content">
			<div class="destacadoHome-column-content-imagen">
				<?php if ( has_post_thumbnail() ) : ?>
				<?php	the_post_thumbnail('ultimas-noticias-home');?>
			</div>
          <?php endif; ?>
			
				<h5 class="fecha"> <?php the_time('j M Y') ?></h5>

			<h2><?php the_title(); ?></h2>
			<?php the_excerpt(); ?>
		</div>
	</a>
		<?php endwhile; ?>
    <?php else: ?>
	  <!-- no posts found -->
	  <?php endif; ?>
</div>	
  
  
  
  
  

	

	</section>



<div class="pagination"><?php pagination('«', '»'); ?></div>

	<?php get_footer(); ?>
