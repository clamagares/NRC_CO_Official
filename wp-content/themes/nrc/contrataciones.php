<?php get_header(); ?>
<?php
/*
Template Name: Plantilla Contrataciones
*/
?>
<body>
	<section class="single">
		<figure> 
			<?php the_post_thumbnail('principal-entrada'); ?>
		</figure>
			<div class="u-wrapper">
				<!--
				<div class="meta-info">
				  
					<div class="icon-camera">
            <img src="<?php bloginfo('template_directory'); ?>/images/camera.png" alt="">
          </div>
					<div id="leyenda">
						<?php the_field('leyenda_foto_principal'); ?>
					</div>
				</div>-->
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
		<section class="u-wrapper">
      <div class="single-body">
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
        $wp_query = new WP_Query("post_type=contrataciones&post_status=publish");
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
          <table>
            <tbody>
              <tr>
                <th>Fecha Inicio</th>
                <th>Número</th>
                <th>Contratación</th>
                <th>Lugar</th>
                <th>Preguntas hasta</th>
                <th>Fecha Cierre</th>
              </tr>
              <tr>
                <td><?php the_field('fecha_inicio_contratacion'); ?></td>
                <td><?php the_field('numero_contratacion'); ?></td>
                <td><!--Título y descarga de archivo-->
                  <?php if( get_field('archivo_contratacion') ): ?>
                  <a href="<?php the_field('archivo_contratacion'); ?>" download><?php the_title(); ?></a>
                  <?php endif; ?>
                </td>
                <td><?php the_field('lugar_contratacion'); ?></td>
                <td><?php the_field('preguntas_hasta'); ?></td>
                <td><?php the_field('fecha_cierre_contratacion'); ?></td>
              </tr>
              <tr>
                <td colspan="6" style="padding: 0px;">
                  <div class="collabsibleBox" >
                    <a href="javascript:void(0)" class="collabsibleBox-title" onclick="myFunction('<?php the_field('numero_contratacion'); ?>')">Documentos contratación Nro. <?php the_field('numero_contratacion'); ?></a>
                    <div  id="<?php the_field('numero_contratacion'); ?>" class="documentos-contratacion" style="display: none">
                      <?php the_field('listado_documentos'); ?>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <?php endwhile; ?>
        </div>
		</section>
	</section>

<?php get_footer(); ?>