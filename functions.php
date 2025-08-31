<?php
// Cargar estilos del tema padre
function kadence_child_enqueue_styles() {
    wp_enqueue_style( 'kadence-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'kadence-child-style', get_stylesheet_uri(), array('kadence-style') );
}
add_action( 'wp_enqueue_scripts', 'kadence_child_enqueue_styles' );

// 🔹 Personalización del login(cambiar logo siguiendo con mismo estilo de login de WP)
function mi_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/mi-logo.png');
            padding-bottom: 30px;
            background-size: contain;
            width: 100%;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'mi_login_logo');

// Cambiar el link del logo para que apunte al home
function mi_login_logo_url() {
    return home_url();
}
add_filter('login_headerurl', 'mi_login_logo_url');


// Bloquear acceso directo al wp-login.php y redirigir a home
function bloquear_wp_login() {
    global $pagenow;
    if( 'wp-login.php' == $pagenow && !is_user_logged_in() ) {
        wp_redirect( home_url() );
        exit();
    }
}
add_action( 'init','bloquear_wp_login' );
