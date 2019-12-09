
<div class="gridThumbMobile">
  <!--THUMB 1-->
  <div class="gridThumbMobile-item">
  <?php
	$posts = query_posts(array(
			'meta_query' => array(
					array(
						'category_name' => 'mas-que-un-numero',
						'key' => 'mas_que_un_numero',
						'value' => '1',
					)
			)
	));
	?>
  <?php while (have_posts()) : the_post(); ?>	
      <button class="gridThumbMobile-item-link" title="<?php the_field('titulo_thumb_mas_que_un_numero'); ?>" onclick="myFunction('thumbGrid1')">
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('mas-que-un-numero');
            } else { ?>
        <?php } ?>
      </button>
  </div>
  <div id="thumbGrid1" class="gridThumbOpenMobile" style="display:none">
    <div class="gridThumbOpenMobile-content">
      <h2 class="gridThumbOpenMobile-content-title">
        <?php the_title(); ?>
      </h2>
      <p class="gridThumb-Open-content-text"><?php the_content(); ?></p>
    <?php endwhile; ?>
    </div>
  </div>

  <!--THUMB 2-->
  <div class="gridThumbMobile-item">
  <?php
	$posts = query_posts(array(
			'meta_query' => array(
					array(
						'category_name' => 'mas-que-un-numero',
						'key' => 'mas_que_un_numero',
						'value' => '2',
					)
			)
	));
	?>
  <?php while (have_posts()) : the_post(); ?>			
      <button class="gridThumbMobile-item-link" title="<?php the_field('titulo_thumb_mas_que_un_numero'); ?>" onclick="myFunction('thumbGrid2')">
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('mas-que-un-numero');
            } else { ?>
        <?php } ?>
      </button>
  </div>
  <div id="thumbGrid2" class="gridThumbOpenMobile" style="display:none">
    <div class="gridThumbOpenMobile-content">
      <h2 class="gridThumbOpenMobile-content-title">
        <?php the_title(); ?>
      </h2>
      <p class="gridThumb-Open-content-text"><?php the_content(); ?></p>
    <?php endwhile; ?>
    </div>
  </div>

  <!--THUMB 3-->
  <div class="gridThumbMobile-item">
  <?php
	$posts = query_posts(array(
			'meta_query' => array(
					array(
						'category_name' => 'mas-que-un-numero',
						'key' => 'mas_que_un_numero',
						'value' => '3',
					)
			)
	));
	?>
  <?php while (have_posts()) : the_post(); ?>			
      <button class="gridThumbMobile-item-link" title="<?php the_field('titulo_thumb_mas_que_un_numero'); ?>" onclick="myFunction('thumbGrid3')">
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('mas-que-un-numero');
            } else { ?>
        <?php } ?>
      </button>
  </div>
  <div id="thumbGrid3" class="gridThumbOpenMobile" style="display:none">
    <div class="gridThumbOpenMobile-content">
      <h2 class="gridThumbOpenMobile-content-title">
        <?php the_title(); ?>
      </h2>
      <p class="gridThumb-Open-content-text"><?php the_content(); ?></p>
    <?php endwhile; ?>
    </div>
  </div>

  <!--THUMB 4-->
  <div class="gridThumbMobile-item">
  <?php
	$posts = query_posts(array(
			'meta_query' => array(
					array(
						'category_name' => 'mas-que-un-numero',
						'key' => 'mas_que_un_numero',
						'value' => '4',
					)
			)
	));
	?>
  <?php while (have_posts()) : the_post(); ?>			
      <button class="gridThumbMobile-item-link" title="<?php the_field('titulo_thumb_mas_que_un_numero'); ?>" onclick="myFunction('thumbGrid4')">
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('mas-que-un-numero');
            } else { ?>
        <?php } ?>
      </button>
  </div>
  <div id="thumbGrid4" class="gridThumbOpenMobile" style="display:none">
    <div class="gridThumbOpenMobile-content">
      <h2 class="gridThumbOpenMobile-content-title">
        <?php the_title(); ?>
      </h2>
      <p class="gridThumb-Open-content-text"><?php the_content(); ?></p>
    <?php endwhile; ?>
    </div>
  </div>

  <!--THUMB 5-->
  <div class="gridThumbMobile-item">
  <?php
	$posts = query_posts(array(
			'meta_query' => array(
					array(
						'category_name' => 'mas-que-un-numero',
						'key' => 'mas_que_un_numero',
						'value' => '5',
					)
			)
	));
	?>
  <?php while (have_posts()) : the_post(); ?>			
      <button class="gridThumbMobile-item-link" title="<?php the_field('titulo_thumb_mas_que_un_numero'); ?>" onclick="myFunction('thumbGrid5')">
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('mas-que-un-numero');
            } else { ?>
        <?php } ?>
      </button>
  </div>
  <div id="thumbGrid5" class="gridThumbOpenMobile" style="display:none">
    <div class="gridThumbOpenMobile-content">
      <h2 class="gridThumbOpenMobile-content-title">
        <?php the_title(); ?>
      </h2>
      <p class="gridThumb-Open-content-text"><?php the_content(); ?></p>
    <?php endwhile; ?>
    </div>
  </div>

  <!--THUMB 6-->
  <div class="gridThumbMobile-item">
  <?php
	$posts = query_posts(array(
			'meta_query' => array(
					array(
						'category_name' => 'mas-que-un-numero',
						'key' => 'mas_que_un_numero',
						'value' => '6',
					)
			)
	));
	?>
  <?php while (have_posts()) : the_post(); ?>			
      <button class="gridThumbMobile-item-link" title="<?php the_field('titulo_thumb_mas_que_un_numero'); ?>" onclick="myFunction('thumbGrid6')">
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('mas-que-un-numero');
            } else { ?>
        <?php } ?>
      </button>
  </div>
  <div id="thumbGrid6" class="gridThumbOpenMobile" style="display:none">
    <div class="gridThumbOpenMobile-content">
      <h2 class="gridThumbOpenMobile-content-title">
        <?php the_title(); ?>
      </h2>
      <p class="gridThumb-Open-content-text"><?php the_content(); ?></p>
    <?php endwhile; ?>
    </div>
  </div>

  <!--THUMB 7-->
  <div class="gridThumbMobile-item">
  <?php
	$posts = query_posts(array(
			'meta_query' => array(
					array(
						'category_name' => 'mas-que-un-numero',
						'key' => 'mas_que_un_numero',
						'value' => '7',
					)
			)
	));
	?>
  <?php while (have_posts()) : the_post(); ?>			
      <button class="gridThumbMobile-item-link" title="<?php the_field('titulo_thumb_mas_que_un_numero'); ?>" onclick="myFunction('thumbGrid7')">
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('mas-que-un-numero');
            } else { ?>
        <?php } ?>
      </button>
  </div>
  <div id="thumbGrid7" class="gridThumbOpenMobile" style="display:none">
    <div class="gridThumbOpenMobile-content">
      <h2 class="gridThumbOpenMobile-content-title">
        <?php the_title(); ?>
      </h2>
      <p class="gridThumb-Open-content-text"><?php the_content(); ?></p>
    <?php endwhile; ?>
    </div>
  </div>

  <!--THUMB 8-->
  <div class="gridThumbMobile-item">
  <?php
	$posts = query_posts(array(
			'meta_query' => array(
					array(
						'category_name' => 'mas-que-un-numero',
						'key' => 'mas_que_un_numero',
						'value' => '8',
					)
			)
	));
	?>
  <?php while (have_posts()) : the_post(); ?>			
      <button class="gridThumbMobile-item-link" title="<?php the_field('titulo_thumb_mas_que_un_numero'); ?>" onclick="myFunction('thumbGrid8')">
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('mas-que-un-numero');
            } else { ?>
        <?php } ?>
      </button>
  </div>
  <div id="thumbGrid8" class="gridThumbOpenMobile" style="display:none">
    <div class="gridThumbOpenMobile-content">
      <h2 class="gridThumbOpenMobile-content-title">
        <?php the_title(); ?>
      </h2>
      <p class="gridThumb-Open-content-text"><?php the_content(); ?></p>
    <?php endwhile; ?>
    </div>
  </div>
  
</div>

