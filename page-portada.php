<?php get_header(); ?>


<style>
	.fondoportada {
			min-height: 72vh;
	<?php $args=array( 'post_type'=> 'portada', 'post_status' => 'publish', 'posts_per_page' => 1, 'order' => 'DESC'); $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post();
				  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	background-image: url('<?php echo $url; ?>');
	<?php endwhile; }  wp_reset_query(); ?> 

}
</style>

<div class="portada">
</div>



<?php get_footer(); ?>