<?php

function ib_slider_scripts() {
  
  wp_enqueue_script('jquery');
  
  wp_register_script('slidesjs_core', plugins_url().'/IB-Slider/lib/jquery.slides.js',array("jquery"));
  wp_enqueue_script('slidesjs_core');
  
  wp_register_script('slidesjs_init', plugins_url().'/IB-Slider/lib/slidesjs.initialize.js');
  wp_enqueue_script('slidesjs_init');

  wp_register_script('adminjs', plugins_url().'/IB-Slider/admin/adminjs.js');
  wp_enqueue_script('adminjs');
  
}

function ib_slider_styles() {
  
  wp_register_style('slidesjs_example', plugins_url().'/IB-Slider/lib/example.css');
  wp_enqueue_style('slidesjs_example');

  wp_register_style('slidesjs_fonts', plugins_url().'/IB-Slider/lib/font-awesome.min.css');
  wp_enqueue_style('slidesjs_fonts');

  
}


function ib_add_back_scripts( )
{ 
  //wp_die($hook);
  // if ( 'toplevel_page_v-slider/includes/create-admin-menu' != $hook ) {
  //   return ;
  // }

  //wp_enqueue_style( 'ib-back-style', plugins_url(). '/v-slider/admin/adminstyle.css' );

  wp_enqueue_script( 'ib-back-script', plugins_url(). '/IB-Slider/admin/adminjs.js' );

}


function ib_add_back_styles()
{
  wp_enqueue_style( 'ib-back-style', plugins_url(). '/IB-Slider/admin/adminstyle.css' );
}

add_action( 'admin_enqueue_scripts', 'ib_add_back_scripts' );
add_action( 'admin_enqueue_scripts', 'ib_add_back_styles' );

add_action('wp_enqueue_scripts', 'ib_slider_styles');

add_action('wp_enqueue_scripts', 'ib_slider_scripts');