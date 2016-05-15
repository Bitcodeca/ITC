<?php get_header(); ?>


<section class="HD">
  <div class="container">
		<div class="slider">
			<div  id="slider"  class="nivoSlider">
			 <?php $args=array( 'post_type'=> 'inicio', 'post_status' => 'publish', 'posts_per_page' => 1000, 'order' => 'ASC', 'tax_query' => array( array(  'taxonomy' => 'formato', 'field' => 'slug', 'terms' => 'pc' ) ) ); $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<a href="#"><?php the_post_thumbnail(); ?></a>
                  <?php endwhile; }  wp_reset_query(); ?>
           	</div>
		</div>
  </div>
	</section>
    
    <section class="movil">
		<div class="slider">
			<div  id="slider2"  class="nivoSlider">
			 <?php $args=array( 'post_type'=> 'inicio', 'post_status' => 'publish', 'posts_per_page' => 1000, 'order' => 'ASC', 'tax_query' => array( array(  'taxonomy' => 'formato', 'field' => 'slug', 'terms' => 'movil' ) ) ); $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<a href="#"><?php the_post_thumbnail(); ?></a>
                  <?php endwhile; }  wp_reset_query(); ?>
           	</div>
		</div>
	</section>

  <section id="servicios">
    <div class="container">
      <div class="contenido">
        <div class="row">
        <div class="col-md-12 padding25">
          <?php $args=array( 'post_type'=> 'inicio', 'post_status' => 'publish', 'posts_per_page' => 1000, 'order' => 'ASC', 'tax_query' => array( array(  'taxonomy' => 'category', 'field' => 'slug', 'terms' => 'contenido' ) ) ); $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="col-md-3 textoinicio">
                      <h3 class"contenidotitulo"><?php the_title(); ?></h3>
                      <p><?php echo get_the_content(); ?></p>
                      <a class="boton btn btn-group-lg btn-primary" href="servicios.html" role="button">Saber más</a>
                    </div>
                  <?php endwhile; }  wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
    
      <script type="text/javascript">
    jQuery(function($){
        $('#slider').nivoSlider({
          prevText: '',
          nextText: '',
          controlNav: false,
        });
    });
    </script>
      <script type="text/javascript">
    jQuery(function($){
        $('#slider2').nivoSlider({
          prevText: '',
          nextText: '',
          controlNav: false,
        });
    });
    </script>

<?php get_footer(); ?>