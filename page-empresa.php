<?php get_header(); ?>
  <section id="servicios">
    <div class="container">
      <div class="contenidoempresa">
          <?php $args=array( 'post_type'=> 'empresa', 'post_status' => 'publish', 'posts_per_page' => 1000, 'order' => 'ASC', 'tax_query' => array( array(  'taxonomy' => 'category', 'field' => 'slug', 'terms' => 'contenido' ) ) ); $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post(); ?>
               <div class="row">
                  <div class="col-md-12">
                      <h2 class"contenidotitulo"><?php the_title(); ?></h2>
                      <div class="lineatitulo"></div>
                        <div class="col-xs-7 col-sm-6 col-md-4">
                          <?php the_post_thumbnail('full', array()); ?>
                        </div>
                        <?php the_content(); ?>
                    </div>
               </div>
                  <?php endwhile; }  wp_reset_query(); ?>

              
                <ul class="nav nav-tabs">
                  <?php $args=array( 'post_type'=> 'empresa', 'post_status' => 'publish', 'posts_per_page' => 1000, 'order' => 'ASC', 'tax_query' => array( array(  'taxonomy' => 'category', 'field' => 'slug', 'terms' => 'pestañas' ) ) ); $my_query = new WP_Query($args);
                  if( $my_query->have_posts() ) { $active = 0;
                  while ($my_query->have_posts()) : $my_query->the_post(); ?>
                      <li><a data-toggle="tab" href="#<?php the_title(); ?>" class="<?php if ($active == '0' ) {echo 'active';} $active++; ?>"><?php the_title(); ?></a></li>
                  <?php endwhile; }  wp_reset_query(); ?>
                </ul>
                <div class="tab-content">
                     <?php $args=array( 'post_type'=> 'empresa', 'post_status' => 'publish', 'posts_per_page' => 1000, 'order' => 'ASC', 'tax_query' => array( array(  'taxonomy' => 'category', 'field' => 'slug', 'terms' => 'pestañas' ) ) ); $my_query = new WP_Query($args);
                      if( $my_query->have_posts() ) { $active = 0;
                      while ($my_query->have_posts()) : $my_query->the_post(); ?>
                          <div id="<?php the_title(); ?>" class="tab-pane fade <?php if ($active == '0' ) {echo 'active';} $active++; ?> ">
                                <div class="col-xs-5 col-sm-4 col-md-2"><?php the_post_thumbnail(); ?></div><?php the_content(); ?>
                          </div>
                      <?php endwhile; }  wp_reset_query(); ?>
                </div>


    </div>
  </div>
  </section> 
<?php get_footer(); ?>