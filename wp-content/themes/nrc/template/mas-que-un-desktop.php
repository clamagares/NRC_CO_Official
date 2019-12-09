<!-- Content Grid 1 -->
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
	<div id="contentGrid1" class="gridThumb-Open wrapper-wide" style="display:none">
  <div class="gridThumb-Open-video">
    <?php if ( has_post_thumbnail() ) {
      the_post_thumbnail('mas-que-un-numero');
        } else { ?>
    <?php } ?>
  </div>
  
  <div class="gridThumb-Open-content">
    <h2 class="gridThumb-Open-content-title">
      <?php the_title(); ?>
    </h2>
    <!--<h3 class="gridThumb-Open-content-subtitle">
      Subtitulo
    </h3>-->
    <p class="gridThumb-Open-content-text"><?php the_content(); ?></p>
    <div class="gridThumb-Open-content-social">
      <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
          <a class="a2a_button_facebook"></a>
          <a class="a2a_button_twitter"></a>
          <a class="a2a_button_linkedin"></a>
          <a class="a2a_button_google_plus"></a>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
  </div>
</div>


	<!-- Content Grid 2 -->
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
	<div id="contentGrid2" class="gridThumb-Open wrapper-wide" style="display:none">
		<div class="gridThumb-Open-video">
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('mas-que-un-numero');
					} else { ?>
			<?php } ?>
		</div>
		
		<div class="gridThumb-Open-content">
			<h2 class="gridThumb-Open-content-title">
				<?php the_title(); ?>
			</h2>
			<p class="gridThumb-Open-content-text"><?php the_content(); ?></p>
			<div class="gridThumb-Open-content-social">
				<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
						<a class="a2a_button_facebook"></a>
						<a class="a2a_button_twitter"></a>
						<a class="a2a_button_linkedin"></a>
						<a class="a2a_button_google_plus"></a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>

	<!-- Content Grid 3 -->
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
	<div id="contentGrid3" class="gridThumb-Open wrapper-wide" style="display:none">
		<div class="gridThumb-Open-video">
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('mas-que-un-numero');
					} else { ?>
			<?php } ?>
		</div>
		
		<div class="gridThumb-Open-content">
			<h2 class="gridThumb-Open-content-title">
				<?php the_title(); ?>
			</h2>
			<p class="gridThumb-Open-content-text"><?php the_content(); ?></p>
			<div class="gridThumb-Open-content-social">
				<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
						<a class="a2a_button_facebook"></a>
						<a class="a2a_button_twitter"></a>
						<a class="a2a_button_linkedin"></a>
						<a class="a2a_button_google_plus"></a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>

	<!-- Content Grid 4 -->
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
	<div id="contentGrid4" class="gridThumb-Open wrapper-wide" style="display:none">
		<div class="gridThumb-Open-video">
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('mas-que-un-numero');
					} else { ?>
			<?php } ?>
		</div>
		
		<div class="gridThumb-Open-content">
			<h2 class="gridThumb-Open-content-title">
				<?php the_title(); ?>
			</h2>
			<p class="gridThumb-Open-content-text"><?php the_content(); ?></p>
			<div class="gridThumb-Open-content-social">
				<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
						<a class="a2a_button_facebook"></a>
						<a class="a2a_button_twitter"></a>
						<a class="a2a_button_linkedin"></a>
						<a class="a2a_button_google_plus"></a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>

	<!-- Content Grid 5 -->
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
	<div id="contentGrid5" class="gridThumb-Open wrapper-wide" style="display:none">
		<div class="gridThumb-Open-video">
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('mas-que-un-numero');
					} else { ?>
			<?php } ?>
		</div>
		
		<div class="gridThumb-Open-content">
			<h2 class="gridThumb-Open-content-title">
				<?php the_title(); ?>
			</h2>
			<p class="gridThumb-Open-content-text"><?php the_content(); ?></p>
			<div class="gridThumb-Open-content-social">
				<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
						<a class="a2a_button_facebook"></a>
						<a class="a2a_button_twitter"></a>
						<a class="a2a_button_linkedin"></a>
						<a class="a2a_button_google_plus"></a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>

	<!-- Content Grid 6 -->
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
	<div id="contentGrid6" class="gridThumb-Open wrapper-wide" style="display:none">
		<div class="gridThumb-Open-video">
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('mas-que-un-numero');
					} else { ?>
			<?php } ?>
		</div>
		
		<div class="gridThumb-Open-content">
			<h2 class="gridThumb-Open-content-title">
				<?php the_title(); ?>
			</h2>
			<p class="gridThumb-Open-content-text"><?php the_content(); ?></p>
			<div class="gridThumb-Open-content-social">
				<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
						<a class="a2a_button_facebook"></a>
						<a class="a2a_button_twitter"></a>
						<a class="a2a_button_linkedin"></a>
						<a class="a2a_button_google_plus"></a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>

	<!-- Content Grid 7 -->
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
	<div id="contentGrid7" class="gridThumb-Open wrapper-wide" style="display:none">
		<div class="gridThumb-Open-video">
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('mas-que-un-numero');
					} else { ?>
			<?php } ?>
		</div>
		
		<div class="gridThumb-Open-content">
			<h2 class="gridThumb-Open-content-title">
				<?php the_title(); ?>
			</h2>
			<p class="gridThumb-Open-content-text"><?php the_content(); ?></p>
			<div class="gridThumb-Open-content-social">
				<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
						<a class="a2a_button_facebook"></a>
						<a class="a2a_button_twitter"></a>
						<a class="a2a_button_linkedin"></a>
						<a class="a2a_button_google_plus"></a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>

	<!-- Content Grid 8 -->
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
	<div id="contentGrid8" class="gridThumb-Open wrapper-wide" style="display:none">
		<div class="gridThumb-Open-video">
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('mas-que-un-numero');
					} else { ?>
			<?php } ?>
		</div>
		
		<div class="gridThumb-Open-content">
			<h2 class="gridThumb-Open-content-title">
				<?php the_title(); ?>
			</h2>
			<p class="gridThumb-Open-content-text"><?php the_content(); ?></p>
			<div class="gridThumb-Open-content-social">
				<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
						<a class="a2a_button_facebook"></a>
						<a class="a2a_button_twitter"></a>
						<a class="a2a_button_linkedin"></a>
						<a class="a2a_button_google_plus"></a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>

<!-- GRILlA THUMBS MÁS QUE UN NÚMERO-->
<div class="contentareaitem">

<div class="gridThumb wrapper-wide">
	<!--THUMB 1-->
	<div class="gridThumb-item">
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
			<button class="gridThumb-item-link" title="<?php the_field('titulo_thumb_mas_que_un_numero'); ?>" onclick="thumbGrid1()">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('mas-que-un-numero');
						} else { ?>
				<?php } ?>
			</button>
		<?php endwhile; ?>
	</div>

	<!--THUMB 2-->
	<div class="gridThumb-item">
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
			<button class="gridThumb-item-link" title="<?php the_field('titulo_thumb_mas_que_un_numero'); ?>" onclick="thumbGrid2()" >
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('mas-que-un-numero');
						} else { ?>
				<?php } ?>
			</button>
		<?php endwhile; ?>
	</div>

	<!--THUMB 3-->
	<div class="gridThumb-item">
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
			<button class="gridThumb-item-link" title="<?php the_field('titulo_thumb_mas_que_un_numero'); ?>" onclick="thumbGrid3()" >
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('mas-que-un-numero');
						} else { ?>
				<?php } ?>
			</button>
		<?php endwhile; ?>
	</div>

	 <!--THUMB 4-->
	<div class="gridThumb-item">
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
			<button class="gridThumb-item-link" title="<?php the_field('titulo_thumb_mas_que_un_numero'); ?>" onclick="thumbGrid4()" >
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('mas-que-un-numero');
						} else { ?>
				<?php } ?>
			</button>
		<?php endwhile; ?>
	</div>
 </div>

 <div class="gridThumb wrapper-wide">
	 <!--THUMB 5-->
	<div class="gridThumb-item">
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
			<button class="gridThumb-item-link" title="<?php the_field('titulo_thumb_mas_que_un_numero'); ?>" onclick="thumbGrid5()" >
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('mas-que-un-numero');
						} else { ?>
				<?php } ?>
			</button>
		<?php endwhile; ?>
	</div>

	<!--THUMB 6-->
	<div class="gridThumb-item">
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
			<button class="gridThumb-item-link" title="<?php the_field('titulo_thumb_mas_que_un_numero'); ?>" onclick="thumbGrid6()" >
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('mas-que-un-numero');
						} else { ?>
				<?php } ?>
			</button>
		<?php endwhile; ?>
	</div>

	<!--THUMB 7-->
	<div class="gridThumb-item">
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
			<button class="gridThumb-item-link" title="<?php the_field('titulo_thumb_mas_que_un_numero'); ?>" onclick="thumbGrid7()" >
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('mas-que-un-numero');
						} else { ?>
				<?php } ?>
			</button>
		<?php endwhile; ?>
	</div>

	<!--THUMB 8-->
	<div class="gridThumb-item">
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
			<button class="gridThumb-item-link" title="<?php the_field('titulo_thumb_mas_que_un_numero'); ?>" onclick="thumbGrid8()" >
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('mas-que-un-numero');
						} else { ?>
				<?php } ?>
			</button>
		<?php endwhile; ?>
		
	</div>
 </div>
</div>