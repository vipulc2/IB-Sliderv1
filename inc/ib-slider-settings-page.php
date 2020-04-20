<?php

add_shortcode("ib_slider", "ib_show_slider");
function ib_show_slider() {

$plugins_url = plugins_url();

$urlString .= get_option('image_url_name0'). ',';
$urlString .= get_option('image_url_name1'). ',';
$urlString .= get_option('image_url_name2'). ',';
$urlString .= get_option('image_url_name3'). ',';
$urlString .= get_option('image_url_name4');

$urlArray = (explode(",",$urlString));


$html = '
<div class="container">
<div id="slides">
';

 foreach ($urlArray as $eachUrl) {

 if($eachUrl != ""){

 $html .= "<img src=" . $eachUrl . " />";

 }

 }

 $html .= '

</div>
</div>
';

     return $html;


// echo '<div class="container">
//   <div id="slides">
//     <img src=" '.get_option('image_url_name0').'" />
//     <img src="'.get_option('image_url_name1').'" />
//     <img src="'.get_option('image_url_name2').'" />
//     <img src="'.get_option('image_url_name3').'" />
//     <img src="'.get_option('image_url_name4').'" />
//     <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
//     <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>
//   </div>
// </div>';
}



add_action( 'admin_menu', 'create_admin_menu' );

function create_admin_menu()
{
  add_menu_page( 'Create Slider Setting Page', 'IB-Slider', 'administrator', __FILE__, 'add_image_url_link', 'dashicons-format-image' );

  add_action( 'admin_init', 'register_the_images_url' );


}


function register_the_images_url()
{
   register_setting( 'image_url', 'image_url_name0' );
   register_setting( 'image_url', 'image_url_name1' );
   register_setting( 'image_url', 'image_url_name2' );
   register_setting( 'image_url', 'image_url_name3' );
   register_setting( 'image_url', 'image_url_name4' );
}



function add_image_url_link()
{ 
  wp_enqueue_media();

  
  ?>



<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );
  </script>
</head>
<body>
  
  <h1>Select Images For IB Slider</h1>
  

 
<ul class="ul-unique" id="sortable">
  <li class="ui-state-default unique"><img class="pictures0" src="<?php echo get_option('image_url_name0') ?>" alt=""></li>
  <li class="ui-state-default unique"><img class="pictures1" src="<?php echo get_option('image_url_name1') ?>" alt=""></li>
  <li class="ui-state-default unique"><img class="pictures2" src="<?php echo get_option('image_url_name2') ?>" alt=""></li>
  <li class="ui-state-default unique"><img class="pictures3" src="<?php echo get_option('image_url_name3') ?>" alt=""></li>
  <li class="ui-state-default unique"><img class="pictures4" src="<?php echo get_option('image_url_name4') ?>" alt=""></li>
</ul>

<div class="remove">

<span><a id="th1" href="#">Remove</a></span>
<span><a id="th2" href="#">Remove</a></span>
<span><a id="th3" href="#">Remove</a></span>
<span><a id="th4" href="#">Remove</a></span>
<span><a id="th5" href="#">Remove</a></span>

</div>



<form method="post" action="options.php">

<div class="uploadImg">
<div class="adjustside">Click Button to upload images </div> <input id="btnImage" type="button" class="button" value="<?php _e( 'Upload image' );?>" >

</div>

<div class="order">
 <div class="adjustside">Click Button to save the order of the images: </div> <input id="btnSubmit" type="button" class="button" value="Save Order">

</div>


<?php settings_fields('image_url'); 
      do_settings_sections('image_url'); ?>

<input id="img0" type="hidden" name="image_url_name0">
<input id="img1" type="hidden" name="image_url_name1">
<input id="img2" type="hidden" name="image_url_name2">
<input id="img3" type="hidden" name="image_url_name3">
<input id="img4" type="hidden" name="image_url_name4">

<div class="submitt">
<div>Click Button to save the IB Slider: </div> <input type="submit" name="submit" id="submit" class="button button-primary" value="Save Slider">
</div>


</form>
 
</body>
</html>

<?php }?>