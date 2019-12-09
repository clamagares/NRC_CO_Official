<?php
// OCULTA BARRA DE ADMINISTRACIÓN DEL FRONT DEL SITIO WEB
add_filter( 'show_admin_bar', '__return_false' );

//HABILITA EL MODULO LATERAL DERECHO PARA SELECCIONAR IMAGEN DESTACADA DEL POST
if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );

// esta es la función que añade un tamaño extra de imagenes
add_image_size('carousel-image', 1400, 612, true);
add_image_size('principal-entrada', 1265, 632, true);
add_image_size('ultimas-noticias-home', 436, 218, true);
add_image_size('mas-que-un-numero', 600, 400, true);

// Añade el tamaño personalizado al listado de imagenes a seleccionar
add_filter('image_size_names_choose', 'my_image_sizes');
function my_image_sizes($sizes) {
  $my_sizes = array(
    //"carousel-image" => __("Carrusel Home"),
    //"principal-entrada" => __("principal Entrada"),
    //"ultimas-noticias-home" => __("Ultimas Noticias Home"),
    //"mas-que-un-numero" => __("Más que un número"),
  );
  $all_sizes = array_merge($sizes, $my_sizes);
  return $all_sizes;
}

// Función que llama el menú
function register_my_menus() {
	register_nav_menus(
		array(
			'menu-top' => __('Menú secundario'),
			'menu-main' => __('Menú principal'),
			'footer-donde-estamos' => __('Menú Dónde Estamos'),
			'footer-accesos-directos' => __('Menú Accesos Directos'),
			'footer-sitios-de-interes' => __('Menú Sitios de Interés')
		)
	);
}
add_action('init', 'register_my_menus');

//Activar todos los botones del editor
 function todos_los_botones($buttons) {

 $buttons[] = 'fontselect'; //Selector de tipo de fuente
 $buttons[] = 'fontsizeselect'; //Selector de tamaño de fuente
 $buttons[] = 'styleselect'; //Selector de estilos de párrafo mucho más amplio
 $buttons[] = 'backcolor'; //Color de fondo de párrafo
 $buttons[] = 'newdocument'; //Nuevo documento inline
 $buttons[] = 'cut'; //Cortar texto
 $buttons[] = 'copy'; //Copiar texto
 $buttons[] = 'charmap'; //Mapa de caracteres
 $buttons[] = 'hr'; //Línea horizontal
 $buttons[] = 'visualaid'; //Ayudas visuales del editor

 return $buttons;
 }
//HABILITA DESPLEGABLES DE FORMATOS, TIPOGRAFÍAS, TAMAÑOS EN EL EDITOR DE ENTRADAS
add_filter("mce_buttons_3", "todos_los_botones");

//INSERCIÓN DE LIBRERÍAS JavaScript
add_action("wp_enqueue_scripts", "incrustar_estilos", 11);
function incrustar_estilos(){
    // nos aseguramos que no estamos en el area de administracion
    if( !is_admin() ){
        //wp_register_script(‘menuResponsive’, get_bloginfo('template_directory'). '/js/menu.js', array('jquery'), '1', true );
        //wp_register_script(‘iconMenu’, get_bloginfo('template_directory'). '/js/btnmenu.js', array('jquery'), '1', true );
        wp_enqueue_script(‘owl.carousel’, get_bloginfo('template_directory'). '/js/owl.carousel.min.js', array('jquery'), '1', true);

        wp_enqueue_script(‘owl.carousel’);
        //wp_enqueue_script(‘menuResponsive’);
        //wp_enqueue_script(‘iconMenu’);
    }
}

// CREA UN ÁREA DE WIDGET BUSQUEDA
register_sidebar( array(
        'name'          => __( 'Buscar' ),
        'id'            => 'buscar',
        'description'   => __( 'Campo para realizar búsquedas' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3> <a class="subtitulo-home" href="http://www.cardioalejoteam.com/calendario/">',
        'after_title'   => '</a></h3>',
) );



//functions.php nuevas posiciones widget
// CREA UN ÁREA DE WIDGET BUSQUEDA
function twitter_init() {
    register_sidebar( array(
        'name'          => 'Twitter',
        'id'            => 'twitter-widget',
        'before_widget' => '<div class="classe-widget">',
        'after_widget'  => '</div>',
    ) );
}

add_action( 'widgets_init', 'twitter_init' );

function modify_read_more_link() {
    return '
			<div class="poster__button">
				<a class="actionbutton default " href="' . get_permalink() . '">Leer Más</a></a>
			</div>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

$result = add_role( 'prensa', __(

'Prensa' ),

array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => true, // Allows user to edit pages
'edit_others_posts' => true, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => true, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
)
);

// CUSTOM POST TYPE DOCUMENTO 
add_action( 'init', 'my_documentos_init' );
/* Here's how to create your customized labels */
function my_documentos_init() {
	$labels = array(
	'name' => _x( 'Documentos', 'post type general name' ),
        'singular_name' => _x( 'Documentos', 'post type singular name' ),
        'add_new' => _x( 'Añadir nevo documento', 'documento' ),
        'add_new_item' => __( 'Añadir nuevo documento' ),
        'all_items' => __( 'Todos los documentos'),
        'edit_item' => __( 'Editar documento' ),
        'new_item' => __( 'Nueva documento' ),
        'view_item' => __( 'Ver documento' ),
        'search_items' => __( 'Buscar documento' ),
        'not_found' =>  __( 'No se han encontrado documentos' ),
        'not_found_in_trash' => __( 'No se han encontrado documentos en la papelera' ),
        'parent_item_colon' => ''
        
    );
 
    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        'taxonomies'  => array( 'documentos' ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-format-aside',
        'menu_position' => 5,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'thumbnail')
    );
 
    register_post_type( 'documentos', $args ); /* Registramos y a funcionar */
}

// CREACIÓN DE TAXONOMIA PARA CUSTOM POST TYPE: DOCUMENTOS
add_action( 'init', 'create_tipo_documentos_taxonomies', 0 );

function create_tipo_documentos_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Tipo de documento', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Documento', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Buscar categoría de documento', 'textdomain' ),
		'all_items'         => __( 'Tipo de Documento', 'textdomain' ),
		'parent_item'       => __( 'Parent Genre', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Genre:', 'textdomain' ),
		'edit_item'         => __( 'Editar documento', 'textdomain' ),
		'update_item'       => __( 'Actualizar documento', 'textdomain' ),
		'add_new_item'      => __( 'Agregar nueva categoría de documento', 'textdomain' ),
		'new_item_name'     => __( 'Nuevo Documento', 'textdomain' ),
		'menu_name'         => __( 'Tipo de Documento', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'tipo-documentos' ),
	);

	register_taxonomy( 'documentos', array( 'tipo-documentos' ), $args );
}

// CUSTOM POST TYPE TRABAJA CON NOSOTROS 
add_action( 'init', 'my_vacantes_init' );

function my_vacantes_init() {
	$labels = array(
	'name' => _x( 'Vacantes', 'post type general name' ),
        'singular_name' => _x( 'Vacante', 'post type singular name' ),
        'add_new' => _x( 'Añadir neva', 'Vacante' ),
        'add_new_item' => __( 'Añadir nueva vacante' ),
        'all_items' => __( 'Todas las vacantes'),
        'edit_item' => __( 'Editar vacante' ),
        'new_item' => __( 'Nueva vacante' ),
        'view_item' => __( 'Ver vacante' ),
        'search_items' => __( 'Buscar vacante' ),
        'not_found' =>  __( 'No se han encontrado vacantes' ),
        'not_found_in_trash' => __( 'No se han encontrado vacantes en la papelera' ),
        'parent_item_colon' => ''
        
    );
 
    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        //'taxonomies'  => array( 'category' ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-universal-access',
        'menu_position' => 5,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title')
    );
 
    register_post_type( 'vacante', $args ); /* Registramos y a funcionar */
}

// CUSTOM POST TYPE CONTRATACIONES
add_action( 'init', 'my_contrataciones_init' );

function my_contrataciones_init() {
	$labels = array(
	'name' => _x( 'Contrataciones', 'post type general name' ),
        'singular_name' => _x( 'Contratación', 'post type singular name' ),
        'add_new' => _x( 'Añadir neva', 'Contratación' ),
        'add_new_item' => __( 'Añadir nueva contratación' ),
        'edit_item' => __( 'Editar contratación' ),
        'all_items' => __( 'Todas las contrataciones'),
        'new_item' => __( 'Nueva contratación' ),
        'view_item' => __( 'Ver contratación' ),
        'search_items' => __( 'Buscar contratación' ),
        'not_found' =>  __( 'No se han encontrado contrataciones' ),
        'not_found_in_trash' => __( 'No se han encontrado contrataciones en la papelera' ),
        'parent_item_colon' => ''
        
    );
 
    $args = array( 'labels' => $labels,
        //'taxonomies'  => array( 'category' ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-portfolio',
        'menu_position' => 5,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title')
    );
 
    register_post_type( 'contrataciones', $args ); /* Registramos y a funcionar */
}

// CUSTOM POST TYPE DONANTES 
add_action( 'init', 'donantes_init' );

function donantes_init() {
	$labels = array(
	'name' => _x( 'Donantes', 'post type general name' ),
        'singular_name' => _x( 'Donante', 'post type singular name' ),
        'add_new' => _x( 'Añadir donante', 'Vacante' ),
        'add_new_item' => __( 'Añadir nuevo donante' ),
        'all_items' => __( 'Todos los donantes'),
        'edit_item' => __( 'Editar Donante' ),
        'new_item' => __( 'Nuevo Donante' ),
        'view_item' => __( 'Ver Donante' ),
        'search_items' => __( 'Buscar Donante' ),
        'not_found' =>  __( 'No se han encontrado donantes' ),
        'not_found_in_trash' => __( 'No se han encontrado donantes en la papelera' ),
        'parent_item_colon' => ''
        
    );
 
    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        //'taxonomies'  => array( 'category' ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-heart',
        'menu_position' => 5,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'thumbnail')
    );
 
    register_post_type( 'Donantes', $args ); /* Registramos y a funcionar */
}

// CUSTOM POST TYPE MULTIMEDIA
add_action( 'init', 'my_multimedia_init' );

function my_multimedia_init() {
	$labels = array(
	    'name' => _x( 'Mutimedia', 'post type general name' ),
        'singular_name' => _x( 'Multimedia', 'post type singular name' ),
        'add_new' => _x( 'Añadir nevo', 'Vacante' ),
        'add_new_item' => __( 'Añadir nueva multimedia' ),
        'all_items' => __( 'Todo en multimedia'),
        'edit_item' => __( 'Editar multimedia' ),
        'new_item' => __( 'Nueva multimedia' ),
        'view_item' => __( 'Ver multimedia' ),
        'search_items' => __( 'Buscar multimedia' ),
        'not_found' =>  __( 'No se han encontrado contenidos' ),
        'not_found_in_trash' => __( 'No se han encontrado multimedia en la papelera' ),
        'parent_item_colon' => ''
        
    );
 
    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        //'taxonomies'  => array( 'category' ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-video-alt3',
        'menu_position' => 5,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title')
    );
 
    register_post_type( 'multimedia', $args ); /* Registramos y a funcionar */
}


// FUNCIÓN PARA ELIMINAR ítems del menú de administración 
add_action( 'admin_menu', 'apk_eliminar_admin_menu_links' );
function apk_eliminar_admin_menu_links() {
    //remove_menu_page('edit.php'); // Removemos el ítem Entradas
    remove_menu_page('edit-comments.php'); // Removemos el ítem comentarios
}

function SearchFilter($query) {
    if ($query->is_search) {
        $query->set(‘post_type’, ‘post’);
    }
    return $query;
}
add_filter(‘pre_get_posts’,’SearchFilter’);

// PAGINACIÓN 
function pagination($prev = '«', $next = '»') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'prev_text' => __($prev),
        'next_text' => __($next),
        'type' => 'plain'
);
    if( $wp_rewrite->using_permalinks() )
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
    if( !empty($wp_query->query_vars['s']) )
        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
    echo paginate_links( $pagination );
};

//check if https being used regardless of certificate
function shapeSpace_check_https() { 
    if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) {
        return true; 
    }
    return false;
}


//Limitar el número de post por página en Wordpress
// function limit_posts_per_archive_page() {
//   if ( is_category() )
//       $limit = 15;
//   elseif ( is_search() )
//       $limit = 20;
//   else
//       $limit = get_option('posts_per_page');

//   set_query_var('posts_per_archive_page', $limit);
// }
// add_filter('pre_get_posts', 'limit_posts_per_archive_page');