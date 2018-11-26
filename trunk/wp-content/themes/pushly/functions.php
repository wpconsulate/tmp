<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

//Pretty array printer
if ( !function_exists('pr') ){
    function pr( $arr , $dye = 0){
       $root = debug_backtrace();
       $file = str_replace($_SERVER['DOCUMENT_ROOT'],'',$root[0]['file']);
       $string = '</br>Line: '.$root[0]['line'].'</br>File : '.$file;

       echo "<pre>";        
       print_r($arr);        
       echo "</pre>";
       

       if($dye == 1){            
           die($string);
       }
    }
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );




/**
* Function that is helpful parsing template files
*/
if(!function_exists('do_replace')){
    function do_replace($txt, $to_replace_array){

        foreach($to_replace_array as $key=>$val){
            $txt = str_replace('{%'.$key.'%}', $val, $txt);
            // echo $key."=".$val;
        }

        return $txt;
    }
}

/**
 * Adding email template to the Contact 7 email
 */
function beutify_email( $components, $wpcf7_get_current_contact_form, $instance ) {

    pr($components);
    
    if(file_exists(__DIR__.'/email/email.html')){

        $to_replace = [];
        $to_replace['CONTENT'] = $components['body'];
        $email_contents = file_get_contents(__DIR__.'/email/email.html');
    
        $components['body'] = do_replace($email_contents, $to_replace);

        pr($components, 1);
    }

    return $components; 
}; 
         
// add the filter 
// add_filter( 'wpcf7_mail_components', 'beutify_email', 10, 3 ); 