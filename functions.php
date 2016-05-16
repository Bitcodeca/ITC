<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
function awesome_script_enqueue() {
	//css
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
	wp_enqueue_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('nivo-slidercss', get_template_directory_uri() . '/css/nivo-slider.css', array(), '1.0.0', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0', 'all');
	//js
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js',array(), '3.3.4', true);
  wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);  
  wp_enqueue_script('nivo-sliderjs', get_template_directory_uri() . '/js/jquery.nivo.slider.pack.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

/*
	==========================================
	 Activate menus
	==========================================
*/
function awesome_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}

add_action('init', 'awesome_theme_setup');

// Registro de Taxonomias

add_action( 'init', 'boton_taxonomy', 0 );

function boton_taxonomy() {

// Labels part for the GUI

  $labels = array(
    'name' => _x( 'Boton', 'taxonomy general name' ),
    'singular_name' => _x( 'boton', 'taxonomy singular name' ),
    'search_items' =>  __( 'buscar boton' ),
    'popular_items' => __( 'boton mas usado' ),
    'all_items' => __( 'Todos los botones' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Editar boton' ), 
    'update_item' => __( 'Actualizar boton' ),
    'add_new_item' => __( 'Agregar Nuevo Album' ),
    'new_item_name' => __( 'Nuevo nombre de Boton' ),
    'separate_items_with_commas' => __( 'Separar botones con comas' ),
    'add_or_remove_items' => __( 'Agregar nuevos botones' ),
    'choose_from_most_used' => __( 'Escoger el boton mas usado' ),
    'menu_name' => __( 'Boton' ),
  ); 

// Now register the non-hierarchical taxonomy like tag

  register_taxonomy('boton','post',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'boton' ),
  ));
}

add_action( 'init', 'tamaño_taxonomy', 0 );

function tamaño_taxonomy() {

// Labels part for the GUI

  $labels = array(
    'name' => _x( 'Tamaño', 'taxonomy general name' ),
    'singular_name' => _x( 'tamaño', 'taxonomy singular name' ),
    'search_items' =>  __( 'buscar tamaño' ),
    'popular_items' => __( 'tamaño mas usado' ),
    'all_items' => __( 'Todos los tamaños' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Editar tamaño' ), 
    'update_item' => __( 'Actualizar tamaño' ),
    'add_new_item' => __( 'Agregar Nuevo Album' ),
    'new_item_name' => __( 'Nuevo nombre de Tamaño' ),
    'separate_items_with_commas' => __( 'Separar tamaños con comas' ),
    'add_or_remove_items' => __( 'Agregar nuevos tamaños' ),
    'choose_from_most_used' => __( 'Escoger el tamaño mas usado' ),
    'menu_name' => __( 'Tamaño' ),
  ); 

// Now register the non-hierarchical taxonomy like tag

  register_taxonomy('tamaño','post',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tamaño' ),
  ));
}

add_action( 'init', 'formato_taxonomy', 0 );

function formato_taxonomy() {

// Labels part for the GUI

  $labels = array(
    'name' => _x( 'Formato', 'taxonomy general name' ),
    'singular_name' => _x( 'formato', 'taxonomy singular name' ),
    'search_items' =>  __( 'buscar formato' ),
    'popular_items' => __( 'formato mas usado' ),
    'all_items' => __( 'Todos los formatos' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Editar formato' ), 
    'update_item' => __( 'Actualizar formato' ),
    'add_new_item' => __( 'Agregar Nuevo Album' ),
    'new_item_name' => __( 'Nuevo nombre de Formato' ),
    'separate_items_with_commas' => __( 'Separar formatos con comas' ),
    'add_or_remove_items' => __( 'Agregar nuevos formatos' ),
    'choose_from_most_used' => __( 'Escoger el formato mas usado' ),
    'menu_name' => __( 'Formato' ),
  ); 

// Now register the non-hierarchical taxonomy like tag

  register_taxonomy('formato','post',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'formato' ),
  ));
}

// Registro de Pagina

function paginaportada(){
   $args = array(
   'labels'=> array( 'name'=>'portada',
       'singular_name'=> 'portada',
       'menu_name'=>'Portada',
       'name_admin_bar'=> 'portada',
       'all_items' =>'Ver todas las publicaciones',
       'add_new'=> 'Añadir nueva publicación' ),
   'description' =>"Este tipo de post es para la portada",
   'public' => true,
   'exclude_from_search'=>false,
   'publicly_queryable'=> true,
   'show_ui' => true,
   'show_in_menu'=> true,
   'show_in_admin_bar'=> true,
   'menu_position'=>6,
   'capability_type'=> 'page',
   'supports'=> array( 'title', 'editor', 'author', 'thumbnail' ),
  'taxonomies' => array( 'tamaño', 'category'),
   'query_var'=>true,
  );
  register_post_type( "portada", $args );
 }
 add_action("init","paginaportada");


 function paginainicio(){
   $args = array(
   'labels'=> array( 'name'=>'inicio',
       'singular_name'=> 'inicio',
       'menu_name'=>'Inicio',
       'name_admin_bar'=> 'inicio',
       'all_items' =>'Ver todas las publicaciones',
       'add_new'=> 'Añadir nueva publicación' ),
   'description' =>"Este tipo de post es para el inicio",
   'public' => true,
   'exclude_from_search'=>false,
   'publicly_queryable'=> true,
   'show_ui' => true,
   'show_in_menu'=> true,
   'show_in_admin_bar'=> true,
   'menu_position'=>6,
   'capability_type'=> 'page',
   'supports'=> array( 'title', 'editor', 'author', 'thumbnail' ),
  'taxonomies' => array('formato', 'boton', 'category'),
   'query_var'=>true,
  );
  register_post_type( "inicio", $args );
 }
 add_action("init","paginainicio");

 function paginaempresa(){
   $args = array(
   'labels'=> array( 'name'=>'empresa',
       'singular_name'=> 'empresa',
       'menu_name'=>'Empresa',
       'name_admin_bar'=> 'empresa',
       'all_items' =>'Ver todas las publicaciones',
       'add_new'=> 'Añadir nueva publicación' ),
   'description' =>"Este tipo de post es para la empresa",
   'public' => true,
   'exclude_from_search'=>false,
   'publicly_queryable'=> true,
   'show_ui' => true,
   'show_in_menu'=> true,
   'show_in_admin_bar'=> true,
   'menu_position'=>6,
   'capability_type'=> 'page',
   'supports'=> array( 'title', 'editor', 'author', 'thumbnail' ),
  'taxonomies' => array('category'),
   'query_var'=>true,
  );
  register_post_type( "empresa", $args );
 }
 add_action("init","paginaempresa");

 function paginaservicios(){
   $args = array(
   'labels'=> array( 'name'=>'servicios',
       'singular_name'=> 'servicios',
       'menu_name'=>'Servicios',
       'name_admin_bar'=> 'servicios',
       'all_items' =>'Ver todas las publicaciones',
       'add_new'=> 'Añadir nueva publicación' ),
   'description' =>"Este tipo de post es para los servicios",
   'public' => true,
   'exclude_from_search'=>false,
   'publicly_queryable'=> true,
   'show_ui' => true,
   'show_in_menu'=> true,
   'show_in_admin_bar'=> true,
   'menu_position'=>6,
   'capability_type'=> 'page',
   'supports'=> array( 'title', 'editor', 'author', 'thumbnail' ),
  'taxonomies' => array('category'),
   'query_var'=>true,
  );
  register_post_type( "servicios", $args );
 }
 add_action("init","paginaservicios");

 function paginaproductos(){
   $args = array(
   'labels'=> array( 'name'=>'productos',
       'singular_name'=> 'productos',
       'menu_name'=>'Productos',
       'name_admin_bar'=> 'productos',
       'all_items' =>'Ver todas las publicaciones',
       'add_new'=> 'Añadir nueva publicación' ),
   'description' =>"Este tipo de post es para los productos",
   'public' => true,
   'exclude_from_search'=>false,
   'publicly_queryable'=> true,
   'show_ui' => true,
   'show_in_menu'=> true,
   'show_in_admin_bar'=> true,
   'menu_position'=>6,
   'capability_type'=> 'page',
   'supports'=> array( 'title', 'editor', 'author', 'thumbnail' ),
  'taxonomies' => array('formato', 'category'),
   'query_var'=>true,
  );
  register_post_type( "productos", $args );
 }
 add_action("init","paginaproductos");

 function paginacontacto(){
   $args = array(
   'labels'=> array( 'name'=>'contacto',
       'singular_name'=> 'contacto',
       'menu_name'=>'Contacto',
       'name_admin_bar'=> 'contacto',
       'all_items' =>'Ver todas las publicaciones',
       'add_new'=> 'Añadir nueva publicación' ),
   'description' =>"Este tipo de post es para el contacto",
   'public' => true,
   'exclude_from_search'=>false,
   'publicly_queryable'=> true,
   'show_ui' => true,
   'show_in_menu'=> true,
   'show_in_admin_bar'=> true,
   'menu_position'=>6,
   'capability_type'=> 'page',
   'supports'=> array( 'title', 'editor', 'author', 'thumbnail' ),
  'taxonomies' => array('category'),
   'query_var'=>true,
  );
  register_post_type( "contacto", $args );
 }
 add_action("init","paginacontacto");

/*
	==========================================
	 Theme support function
	==========================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));
add_theme_support('html5',array('search-form'));


class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() )
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu dropdown-menu\">\n";
    }

    function display_element ($element, &$children_elements, $max_depth, $depth = 0, $args, &$output)
    {
        $element->hasChildren = isset($children_elements[$element->ID]) && !empty($children_elements[$element->ID]);

        return parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        if($item->current || $item->current_item_ancestor || $item->current_item_parent){
            $class_names .= ' active';
        }
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
        $output .= $indent . '<li' . $id . $class_names .'>';
        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';
        $atts['class']  = ($item->hasChildren)         ? 'dropdown-toggle' : '';
        $atts['data-toggle']  = ($item->hasChildren)   ? 'dropdown'        : '';
        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        if( $item->hasChildren) {
            $item_output .= ' <b class="caret"></b>';
        }
        $item_output .= '</a>';
        $item_output .= $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}
update_option('image_default_link_type','none');