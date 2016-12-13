<?php
include("inc/basic.php");
include("inc/input-fields.php");
new Agile_Input_Fields();

/////////////////////////////////////////
/* for custom post type loads */
include("inc/custom-post-type.php");
$custom_post_types=new Custom_Post_Type();
$custom_post_types->include_all_cpts();
//////////////////////////////////
add_theme_support( 'post-thumbnails' );

