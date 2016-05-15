<?php get_header(); ?>
    <div class="container">
      <div class="contenidoproductos">
        <div class="row">
          <?php $args=array( 'post_type'=> 'productos', 'post_status' => 'publish', 'posts_per_page' => 1000, 'order' => 'ASC', 'tax_query' => array( array(  'taxonomy' => 'category', 'field' => 'slug', 'terms' => 'contenido' ) ) ); $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post(); ?>
                  <div class="col-md-12">
                      <h2 class"contenidotitulo"><?php the_title(); ?></h2>
                      <div class="lineatitulo"></div>
                        <div class="col-md-3">
                          <?php the_post_thumbnail('full', array()); ?>
                        </div>
                        <p><?php the_content(); ?></p>
                    </div>
                  <?php endwhile; }  wp_reset_query(); ?>

                   <div class="carruselproductos">
                    <div class="slider">
                      <div  id="slider"  class="nivoSlider">
                        <?php $args=array( 'post_type'=> 'productos', 'post_status' => 'publish', 'posts_per_page' => 1000, 'order' => 'ASC', 'tax_query' => array( array(  'taxonomy' => 'formato', 'field' => 'slug', 'terms' => 'pc' ) ) ); $my_query = new WP_Query($args);
                          if( $my_query->have_posts() ) {
                            while ($my_query->have_posts()) : $my_query->the_post(); ?>
                              <a href="#"><?php the_post_thumbnail(); ?></a>
                                <?php endwhile; }  wp_reset_query(); ?>
                      </div>
                    </div>
                  </div>
        </div>
      </div>
</div>

  <script type="text/javascript">
    jQuery(function($){
        $('#slider').nivoSlider({
          prevText: '',
          nextText: '',
          controlNav: false,
        });
    });
    </script>

<?php get_footer(); ?>