<?php



if(!function_exists('mythemefuctoin')){

    function mythemefuctoin(){
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats', array( 'aside', 'image', 'video' ) );
    }

}



add_action('after_setup_theme','mythemefuctoin');

?>