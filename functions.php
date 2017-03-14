<?php

//SCRIPTS

//TODO - remove everything that dont need to be accessible to wordpress via hook or filter to class
//require_once('wp_bootstrap_navwalker.php');



register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Skator' ),
    'secondary' =>__('secondary_menu', 'Skator' ),
    //'footer' =>__('Footer_menu', 'Skator' )
) );


function skator_theme_styles()
{
    wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' );
    wp_enqueue_style( 'googlefont_montserrat', 'https://fonts.googleapis.com/css?family=Montserrat' );

    wp_enqueue_style( 'bootstrap_css' , get_template_directory_uri() . '/css/bootstrap.css' );
    //wp_enqueue_style( 'bootstrap_theme_css' , get_template_directory_uri() . '/css/bootstrap-theme.css' );
    wp_enqueue_style( 'style_css' , get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'animate_css' , get_template_directory_uri() . '/css/animate.css' );
    wp_enqueue_style( 'fonts_css' , get_template_directory_uri() . '/css/font-awesome.min.css' );
    wp_enqueue_style( 'fonts' , get_template_directory_uri() . '/fonts/fontawesome-webfont.svg' );
    
}
add_action( 'wp_enqueue_scripts' , 'skator_theme_styles' );


function skator_theme_js()
{  
   //To load dynamically
    global $wp_scripts; 
    //Loads and prepare to be dynamically loaded later                                                                                                                                                                                               //load in Header
    wp_register_script( 'html5_shiv' , 'https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js' , '' , '' , false );
    wp_register_script( 'respond_js' , 'https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js' , '' , '' , false );
    // Conditionally load this only for IE < 9
    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );    
    $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );
    // Adds it, Dependent on jquery. Jquery gets loaded first
    if ( wp_is_mobile() ) { 
        wp_enqueue_script( 'mobile_js' ,  get_template_directory_uri() . '/js/mobile.js' ,array('jquery') , '' , true  ); 
    }else{
        wp_enqueue_script( 'onload_js' ,  get_template_directory_uri() . '/js/onload.js' ,array('jquery') , '' , true  ); 
    }
    wp_enqueue_script( 'bootstrap_js' , get_template_directory_uri() . '/js/bootstrap.min.js' , array('jquery') , '' , true );
}
add_action( 'wp_enqueue_scripts' , 'skator_theme_js' );

//add_theme_support( 'post-thumbnails' );
//add_theme_support( 'menus' );


function my_custom_tooltip() {
if(is_page('13')){
  wp_enqueue_style( 'styled_css', get_template_directory_uri() . '/css/styled.css' );
  wp_enqueue_script( 'styled_js', get_template_directory_uri() . '/js/styled.js', array('jquery'), '', true );
} 
}
add_action('wp_enqueue_scripts', 'my_custom_tooltip');


function what_menu($theme_placement){
    require_once('classes/navwalker.php');
                wp_nav_menu( array(
                'menu'              => $theme_placement,
                'theme_location'    => $theme_placement,
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-inverse',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
    
}























function get_top_ancestor_id()
{
    //Need to be available
    global $post;
      //if post has parents
    if( $post->post_parent > 0){
   
     
        //will create an array of parent grandparent osv. But we are looking for a single value    
        //But we need the top most parent is thefirst value. so we need to reverse
        $ancestors = array_reverse(get_post_ancestors( $post->ID));
      
        
            
        return $ancestors[0];
        
        
    }
    
    return $post->ID; 
}



    function has_children() {

    //$POST AVAILABLE IN FUNCTION
      global $post;

      //Get any pages that are a child of what we are currently viewing
      $pages = get_pages('child_of=' . $post->ID);


    //THE REASON WE WANNA RETURN THE NUMBER of pages that are a child of - if zero = false, if larger = true
      return count($pages);
        
    }

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_pressbilder',
		'title' => 'Pressbilder',
		'fields' => array (
			array (
				'key' => 'field_58c74b2824e97',
				'label' => 'Pressbilder',
				'name' => 'press_images',
				'type' => 'image',
				'instructions' => 'Lägg till bilder',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_58c74b7a24e98',
				'label' => 'Beskrivning',
				'name' => 'press_image_description',
				'type' => 'textarea',
				'instructions' => 'Lägg till en beskrivning',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_58c7508e7af2a',
				'label' => '',
				'name' => '',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'pressbilder',
					'order_no' => 0,
					'group_no' => 0,
				),
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '59',
					'order_no' => 1,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}



?>