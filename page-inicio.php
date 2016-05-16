<?php get_header(); ?>

  <div class="container">
			<div  id="slider"  class="nivoSlider HD">
			 <?php $args=array( 'post_type'=> 'inicio', 'post_status' => 'publish', 'posts_per_page' => 1000, 'order' => 'ASC', 'tax_query' => array( array(  'taxonomy' => 'formato', 'field' => 'slug', 'terms' => 'pc' ) ) ); $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<a href="#"><?php the_post_thumbnail(); ?></a>
                  <?php endwhile; }  wp_reset_query(); ?>
           	</div>

			<div  id="slider2"  class="nivoSlider movil">
			 <?php $args=array( 'post_type'=> 'inicio', 'post_status' => 'publish', 'posts_per_page' => 1000, 'order' => 'ASC', 'tax_query' => array( array(  'taxonomy' => 'formato', 'field' => 'slug', 'terms' => 'movil' ) ) ); $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<a href="#"><?php the_post_thumbnail(); ?></a>
                  <?php endwhile; }  wp_reset_query(); ?>
           	</div>
      </div>

  <section id="servicios">
    <div class="container">
      <div class="contenido">
        <div class="row">
        <div class="col-md-12 padding25">
          <?php $args=array( 'post_type'=> 'inicio', 'post_status' => 'publish', 'posts_per_page' => 1000, 'order' => 'ASC', 'tax_query' => array( array(  'taxonomy' => 'category', 'field' => 'slug', 'terms' => 'contenido' ) ) ); $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post(); 
                  $terms = get_the_terms( $post->ID , 'boton' );
                      if ( $terms != null ){
                      foreach( $terms as $term ) {
                      if ( $term->slug == 'inicio') {
                        $boton = 'index.php/?p=8';
                      }
                      elseif ( $term->slug == 'empresa') {
                        $boton = 'index.php/?p=10';
                      }
                      elseif ( $term->slug == 'servicios') {
                        $boton = 'index.php/?p=12';
                      }
                      elseif ( $term->slug == 'productos') {
                        $boton = 'index.php/?p=14';
                      }
                      elseif ( $term->slug == 'contacto') {
                        $boton = 'index.php/?p=16';
                      }
                      elseif ( $term->slug == 'noticias') {
                        $boton = 'index.php/?p=18';
                      }

                      else {
                        $boton = $term->name;
                      }


                       unset($term);
                      } } ?>
                    <div class="col-md-3 textoinicio">
                      <h3 class"contenidotitulo"><?php the_title();  ?></h3>
                      <p><?php echo get_the_content(); ?></p>
                      <a class="boton btn btn-group-lg btn-primary" href="<?php echo $boton; ?>" role="button">Saber más</a>
                    </div>
                  <?php endwhile; }  wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
    
      <script>
            jQuery(document).ready(function() {
                function checkWidth() {
                    var w = jQuery(window).width();
                    if (w>768){
                                jQuery('#slider').nivoSlider({
                              prevText: '',
                              nextText: '',
                              directionNav: false,
                              effect: 'boxRandom',
                              controlNav:false,
                              pauseOnHover: true,     
                              animSpeed: 500,             
                              pauseTime: 4000,   
                              controlNavThumbs: false,
                                });
                    } else {
                                jQuery('#slider2').nivoSlider({
                              prevText: '',
                              nextText: '',
                              directionNav: false,
                              effect: 'boxRandom',
                              controlNav:false,
                              pauseOnHover: false,     
                              animSpeed: 500,             
                              pauseTime: 6000,   
                              controlNavThumbs: false,
                                });
                    }
                }
                checkWidth();
                jQuery(window).resize(checkWidth);
            });
        </script>

<?php get_footer(); ?>