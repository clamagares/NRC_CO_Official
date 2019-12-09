<?php get_header(); ?>
<?php
/*
Template Name: Plantilla Multimedia
*/
?>
<body>
	<section class="single">
		<figure> 
			<?php the_post_thumbnail('principal-entrada'); ?>
		</figure>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="u-wrapper">
            <div class="meta-info">
			    <h1 class="title-post"><?php the_title(); ?></h1>			
			    <div class="meta-info-compartir">
				    <div class="meta-info-compartir-fecha">
					    <!--<h5 >Publicado <?php the_time('j M Y') ?></h5>-->
				    </div>
					<?php include TEMPLATEPATH . "/template/social.php" ?>
			    </div>
		    </div>
          <div class="meta-info">
            <?php the_content(); ?>
          </div>
          <!-- post -->
          <?php endwhile; ?>
          <!-- post navigation -->
          <?php else: ?>
          <!-- no posts found -->
          <?php endif; ?>

            <div class="videoContainer">
                <?php global $wp_query;
                $wp_query = new WP_Query("post_type=multimedia&post_status=publish");
                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <div class="videoContainer-videoItem">
                    <div class="videoContainer-videoItem-iframe">
                        <iframe src="<?php the_field('url_video'); ?>" with="100%" height="auto" frameborder="0"></iframe>
                    </div>
                    <div class="videoContainer-videoItem-title"><h2><?php the_title(); ?></h2></div>
                </div>
                <?php endwhile; ?>
            </div>

            

		</section>
		<div class="wrapper-wide">
            <a class="botonaccion" href="https://www.youtube.com/channel/UCbItEsK1xs3EXTKn-lT_T1Q/videos" target="_blank" rel="noopener noreferrer">Ver Más Videos</a>
        </div>
	</section>

<?php get_footer(); ?>