<?php get_header(); ?>
<?php
/*
Template Name: Plantilla Vacantes
*/
?>
<body>
	<section class="single">
		<figure> 
			<?php the_post_thumbnail('principal-entrada'); ?>
		</figure>
			<!--
			<div class="u-wrapper">
				<div class="meta-info">	
					<div class="icon-camera">
            <img src="<?php bloginfo('template_directory'); ?>/images/camera.png" alt="">
          </div>
					<div id="leyenda">
						<?php the_field('leyenda_foto_principal'); ?>
					</div>
				</div>
			</div>	
			-->
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

      
      <div class="vacancy">

          <?php global $wp_query;
          $wp_query = new WP_Query("post_type=vacante&post_status=publish");
          while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="vacancy-list">

          <!-- Nombre Vacante con Descarga de PDF -->
          <?php if( get_field('termino-referencia-vacante') ): ?>
            <h2>
              <a href="<?php the_field('termino-referencia-vacante'); ?>" download><?php the_title(); ?></a>
            </h2>
          <?php endif; ?>
          
          <!-- Nombre Vacante con URL / Condicional si no tiene contenido-->
          <?php 
            $urlvacante = get_field('urlvacante');
            if ($urlvacante) { ?>
              <h2>
                <a href="<?php echo $urlvacante; ?>" target="_blank"><?php the_title(); ?></a>
              </h2>
            <?php 
              } else { 
              // do nothing; 
              }
            ?>
          
          <span><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('j <!--\d\e\--> F <!--\d\e\--> Y'); ?></time></span>

          <div class="vacancy-list-info">
            <!-- LUGAR -->
            <span>Lugar: </span>
            <strong><?php the_field('lugar-vacante'); ?></strong> |

            <!-- FECHA DE CIERRE -->
            <?php 
            // get raw date
            $date = get_field('fecha_de_cierre_vacante', false, false);
                // make date object
            $date = new DateTime($date);
            ?>
            <span>Fecha de cierre: <span><strong><?php echo $date->format('j M Y'); ?></strong>
            <div class="descripcion-vacante"><?php the_field('descripcion-vacante'); ?></div>
	       <?php 
              // Link  acceso a pagina de la vacante
                $urlvacante = get_field('link');
            if ($urlvacante) { ?>
              <h2>
               <span>Postularse aquí: <span>  <a href="<?php echo $urlvacante; ?>" target="_blank"><?php the_title(); ?></a>
              </h2>
            <?php 
              } else { 
              // do nothing; 
              }
            ?>

          </div>
        </div>

          <?php endwhile; ?>
      </div>
      
		</section>
	</section>

<?php get_footer(); ?>