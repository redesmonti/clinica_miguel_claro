<?php

function clinica_styles(){
	wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css');
  wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
	//wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
  wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css');
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrapjs', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'), true);
  wp_enqueue_style('slider', get_stylesheet_directory_uri() . '/css/slider.css');
  wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/css/footer.css');
  wp_enqueue_style('style', get_stylesheet_uri()); //usa el style.css, debe ser la ultima hoja de estilos
}
add_action('wp_enqueue_scripts', 'clinica_styles'); //Hook para llamar al la funcion en wordpress


//Insertar javascripts
add_action("wp_enqueue_scripts", "incrustar_js");
function incrustar_js(){
  if ( !is_admin() ) { // para que solo haga la carga si no es el área de admin
     // registra la ubicación, dependencias y versión de su script.
     wp_register_script('navbarjs',
         get_template_directory_uri() . '/js/navbar.js',
         array('jquery'),
         '1.0' );
     wp_register_script('smoothscroll',
         get_template_directory_uri() . '/js/smoothscroll.js',
         array('jquery'),
         '1.0' );
     wp_register_script('slider',
         get_template_directory_uri() . '/js/slider.js',
         array('jquery'),
         '1.0' );
     // pone en cola es script
     wp_enqueue_script('smoothscroll');
     wp_enqueue_script('slider');
     wp_enqueue_script('navbarjs');
  }
}

/* Mail */
add_filter('wp_mail_content_type','set_content_type');
function set_content_type(){

    // If there is a $_POST['email']...
    if( isset($_POST['email']) && ($_POST['validation'] == true ) ) {

        $email = $_POST['email'];       
        $email_to = "redes.monti@gmail.com";
        $fullname = $_POST['fullname'];
        $headers = 'From: '. $fullname .' <'. $email .'>' . "\r\n";
        $email_subject = "example intro: $email";
        $message = $_POST['text']; 

        if(wp_mail($email_subject,$message,$headers)) {
            echo json_encode(array("result"=>"complete"));
        } else {
            echo json_encode(array("result"=>"mail_error"));
            var_dump($GLOBALS['phpmailer']->ErrorInfo);
    }
        wp_die();
    }
}


/*Menus*/

require_once('wp-bootstrap-navwalker.php');
//Permite agregar los menus
function mis_menus() {
  register_nav_menus(
    array(
      'navegation' => __( 'Menú de navegación de clinica'),
    )
  );
}
add_action( 'after_setup_theme', 'mis_menus' );

/**
 * Crear una zonan de widgets que podremos gestionar
 * fácilmente desde administrador de Wordpress.
 */

function mis_widgets(){
 register_sidebar(
   array(
       'name'          => __( 'Sidebar' ),
       'id'            => 'sidebar',
       'description'   => 'Widget para las paginas interiores',
       'before_widget' => '<div id="%1$s" class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3 class="widget-tittle">',
       'after_title'   => '</h3>',
   )
 );
}
add_action('init','mis_widgets');


/*le da el nacho y alto a las imagenes de las noticias*/
add_image_size('noticias', 750, 490, true);

/*Añadir imagen destacada*/
add_theme_support( 'post-thumbnails' );

/*Especialistas*/

  $labels = array(
  'name' => _x( 'Especialistas', 'post type general name' ),
        'singular_name' => _x( 'Especialistas', 'post type singular name' ),
        'add_new' => _x( 'Añadir nuevos Especialistas', 'Galeria' ),
        'add_new_item' => __( 'Añadir nuevos Especialistas' ),
        'edit_item' => __( 'Editar Especialistas' ),
        'new_item' => __( 'Nuevo Especialistas' ),
        'view_item' => __( 'Ver Especialistas' ),
        'search_items' => __( 'Buscar Especialistas' ),
        'not_found' =>  __( 'No se han encontrado el Especialistas que buscas' ),
        'not_found_in_trash' => __( 'No se han encontrado ningun Especialista en la papelera' ),
        'parent_item_colon' => ''
    );
  
    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'taxonomies' => array('category', 'post_tag'),
        'supports' => array( 'title', 'thumbnail','excerpt', 'custom-fields', 'editor' )
    );
    
    register_post_type( 'Especialistas', $args ); /* Registramos y a funcionar */
 
function add_taxonomies() {
  //Replace post_type with actual CPT slug
  register_taxonomy_for_object_type( 'category', 'Especialistas' ); 
  register_taxonomy_for_object_type( 'post_tag', 'Especialistas' );
}
add_action( 'init', 'add_taxonomies' );


?>