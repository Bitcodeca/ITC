<?php get_header(); ?>
  <section id="servicios">
    <div class="container">
      <div class="contenidoempresa">
        <div class="row">
          <?php $args=array( 'post_type'=> 'empresa', 'post_status' => 'publish', 'posts_per_page' => 1000, 'order' => 'ASC', 'tax_query' => array( array(  'taxonomy' => 'category', 'field' => 'slug', 'terms' => 'contenido' ) ) ); $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post(); ?>
                  <div class="col-md-12">
                      <h2 class"contenidotitulo"><?php the_title(); ?></h2>
                      <div class="lineatitulo"></div>
                        <div class="col-md-4">
                          <?php the_post_thumbnail('full', array()); ?>
                        </div>
                        <p><?php the_content(); ?></p>
                    </div>
                  <?php endwhile; }  wp_reset_query(); ?>
                  
      </div>
    </div>
  </section>

<?php get_footer(); ?>