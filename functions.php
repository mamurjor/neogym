<?php



if(!function_exists('mythemefuctoin')){

    function mythemefuctoin(){
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats', array( 'aside', 'image', 'video' ) );
    }


    load_theme_textdomain( 'neogymtextdomain', get_template_directory() . '/languages' );

    register_nav_menus(array(

        'top_menu' =>  __("Top Menu","neogymtextdomain"),



    ));






    // if(!function_exists('neogymliclassadd')){
    //     function neogymliclassadd($classes, $item, $args){
    //         if(isset($args->add_li_class)) {
    //             $classes[] = $args->add_li_class;
    //         }
    //         return $classes;

    //     }
    // }
    // add_filter('nav_menu_css_class', 'neogymliclassadd', 1, 3);





}



add_action('after_setup_theme','mythemefuctoin');





function wporg_custom_post_type() {
	register_post_type('wporg_product',
		array(
			'labels'      => array(
				'name'          => __('Products', 'textdomain'),
				'singular_name' => __('Product', 'textdomain'),
			),
				'public'      => true,
				'has_archive' => true,
		)
	);
}


if(!function_exists('neogym_service')){
    function neogym_service(){

        register_post_type("younus",array(
            'labels' =>array(
                'name' => __('Services', 'textdomain'),
                'singular_name' => __('Service', 'textdomain'),
            ),
            'public' => true,
            'has_archive' => true
        ));

    }
}
add_action('init', 'neogym_service');

?>
