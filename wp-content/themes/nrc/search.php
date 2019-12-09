<?php
// Get the query string
$query = get_search_query();
// if the first & last char is space, rip them
$query = trim($query);
// if there are more than one space, rip to one space
$query = preg_replace('/\s\s+/', ' ',$query);
// if chars count is less than  3, redirect them to homepage
if (strlen($query)<4){
wp_redirect( home_url() ); 
exit; 
}
?>
<?php get_header(); ?>

<div class="searchHeader">
	<div class="searchHeader-wrapper">
		<h1 class="searchHeader-wrapper-title"> <?php echo $wp_query->found_posts; ?>
			<?php _e( 'Resultados para', 'locale' ); ?>: "<?php the_search_query(); ?>"
		</h1>
	</div>
</div>

<div class="single">
		<?php if ( have_posts() ) { ?>
		<div class="searchresult">
			<?php while ( have_posts() ) { the_post(); ?>
			<div class="searchresult-item">
				<div class="searchresult-item-img">
					<?php  the_post_thumbnail('medium') ?>
				</div>
				<div class="searchresult-item-content">
					<h4 class="searchresult-item-content-title"><a href="<?php echo get_permalink(); ?>">
						<?php the_title();  ?>
					</a></h4>
					<div class="searchresult-item-content-catAndDate">
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
							
									$terms = rtrim( trim( str_replace( '<br/>',  $separator, $terms ) ), $separator );
							
									// Display post categories.
									echo  $terms;
							}
						?>
						<span class="searchresult-item-content-catAndDate-time"><?php the_date(); ?></span>
					</div>
					<p><?php echo substr(get_the_excerpt(), 0,200); ?></p>
				</div>
			</div>

		<?php } ?>
			<div class="pagination"><?php pagination('«', '»'); ?></div>
		</div>
	<?php } ?> 
</div>

<?php get_footer(); ?>
  