<?php

add_action( 'wp_enqueue_scripts', 'timber_style' );
add_action( 'wp_enqueue_scripts', 'timber_scripts' );

function timber_style() {
  wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/assets/css/normalize.css' );
  // wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

function timber_scripts() {
  wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script( 'jquery' );

  // wp_enqueue_script( 'magnific-script', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(jquery), null, true);
  wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/index.js', array(jquery), null, true);
}
// function mihdan_add_defer_attribute( $tag, $handle ) {
    
//   $handles = array(
//     'magnific-script',
//     'main-script',
//   );
    
//    foreach( $handles as $defer_script) {
//       if ( $defer_script === $handle ) {
//          return str_replace( ' src', ' defer="defer" src', $tag );
//       }
//    }
 
//    return $tag;
// }
// add_filter( 'script_loader_tag', 'mihdan_add_defer_attribute', 10, 2 );
?>

