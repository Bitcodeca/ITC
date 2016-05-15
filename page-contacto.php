<?php get_header(); ?>

<section id="servicios">
    <div class="container">
      <div class="contenidocontactanos">
        <div class="row">
         <div class="col-md-12">
            <h2 class"contenidotitulo">CONTACTO</h2>
              <div class="lineatitulo"></div>
                <p>Si desea información sobre nuestro servicio técnico, productos de computación o quiere un presupuesto corporativo para su empresa, por favor complete el siguiente formulario y posteriormente nos comunicaremos con usted.</p>
                  <div class="col-sm-6 col-sm-offset-3">
                    <form role="form" action="phpmailer/archivodeprueba.php" method="post">
                      <div class="ajax-hidden">
                        <div class="form-group wow fadeInUp">
                          <label class="sr-only" >Nombre</label>
                            <input type="text" id="name" class="form-control" name="name" placeholder="Nombre">
                        </div>
                              <div class="form-group wow fadeInUp" data-wow-delay=".1s">
                                <label class="sr-only" >Correo</label>
                                  <input type="email" id="email" class="form-control" name="email" placeholder="Correo">
                              </div>
                                    <div class="form-group wow fadeInUp" data-wow-delay=".2s">
                                      <textarea class="form-control" id="message" name="message" rows="7" placeholder="Mensaje"></textarea>
                                    </div>
                                          <button type="submit"  class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s" formtarget="_new">Mandar Mensaje</button>
                      </div>
                                              <div class="ajax-response"></div>
                    </form>
                  </div>



         </div>
        </div>
      </div>
    </div>
</section>

 <section id="informacioncontacto">
  <div class="container">
    <div class="contenidocontactanos">
    <div class="row">
        <?php $args=array( 'post_type'=> 'contacto', 'post_status' => 'publish', 'posts_per_page' => 1000, 'order' => 'ASC', 'tax_query' => array( array(  'taxonomy' => 'category', 'field' => 'slug', 'terms' => 'contacto' ) ) ); $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post(); ?>
                  <div class="col-md-12">
                      <h3 class"contenidotitulo"><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                  <?php endwhile; }  wp_reset_query(); ?>
                  

                  <div class="col-md-12 col-sm-12">
                        <?php echo do_shortcode("[huge_it_maps id='2']"); ?>
                    </div>
                 </div>
  </div>
  </div>
</div>       
</section>

<?php get_footer(); ?>