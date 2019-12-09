<?php get_header(); ?>
<body>
<div class="subhead">

<?php $post_category = get_the_terms($post->ID, array('documentos-externos')); 
if ( $post_category==true ) { ?>  
	<span class="postedintop">
		<i class="icon-folder-open"></i> 
		<?php _e('posted in:', 'virtue');?> 
		<?php the_terms($post->ID, array('documentos-externos')) ?>
	</span> 
	
<?php }?>
|
<span class="postcommentscount">
<i class="icon-comments-alt"></i> <?php comments_number( '0', '1', '%' ); ?>
</span>
</div>


	<?php get_footer(); ?>
