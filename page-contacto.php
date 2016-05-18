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
                    <div ng-controller="ContactController">
                      <form ng-submit="submit(contactform)" name="contactform" method="post" action="" role="form">
                        <div class="form-group wow fadeInLeftBig animated" ng-class="{ 'has-error': contactform.nombre.$invalid && submitted }">
                          <input placeholder="Nombre" id="nombre" name="nombre" type="text" class="form-control" ng-model="formData.nombre" required>
                        </div>
                        <div class="form-group wow fadeInRightBig" ng-class="{ 'has-error': contactform.email.$invalid && submitted }">
                          <input placeholder="Correo"  id="email" name="email" type="email" class="form-control" ng-model="formData.email" required>
                        </div>
                        <div class="form-group wow fadeInUpBig" ng-class="{ 'has-error': contactform.message.$invalid && submitted }">
                          <textarea placeholder="Mensaje"  id="message" name="message" class="form-control" rows="5" style="resize: none;" ng-model="formData.message" required></textarea>
                        </div>                
                          <button class="btn btn-bit" type="submit" ng-disabled="submitButtonDisabled"><i class="fa fa-send-o"> </i> Enviar</button>
                      </form>
                          <p ng-class="result" style="padding: 15px; margin: 0;">{{ resultMessage }}</p>
                    </div>
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
                        <?php echo do_shortcode("[huge_it_maps id='1']"); ?>
                    </div>
                 </div>
  </div>
  </div>
</div>       
</section>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.js"></script>
    <script src="<?php echo get_bloginfo('template_directory');?>/app.js"></script>
    <script src="<?php echo get_bloginfo('template_directory');?>/controllers.js"></script>
<?php get_footer(); ?>