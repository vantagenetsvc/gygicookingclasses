<?php
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>" />
<title><?php woo_title(); ?></title>
<?php woo_meta(); ?>
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>" />
<?php wp_head(); ?>
<?php woo_head(); ?>
<?php
 $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $ub = '';
if(preg_match('/Firefox/i',$u_agent))
    {
?>
  <style>      
  #gform_submit_button_3 { margin-top: -53px; }
  #input_3_1 {height: 18px;margin-top: -38px;}
   #menu-item-7824{ margin-right:754px;}
@media only screen and (max-width: 768px) {
#menu-item-7824{ margin-right:0px;}
#logo { padding-left: 0px; }
}
  </style>
<?php
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
     ?>
  <style>      
  #gform_submit_button_3 { margin-top: -63px; }
 #menu-item-7824{ margin-right:765px;}
@media only screen and (max-width: 768px) {
#menu-item-7824{ margin-right:0px;}
#logo { padding-left: 0px; }
}
  </style>
<?php
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
     ?>
  <style>      
  #gform_submit_button_3 { margin-top: -63px; }
  #menu-item-7824{ margin-right:765px;}
@media only screen and (max-width: 768px) {
#menu-item-7824{ margin-right:0px;}
#logo { padding-left: 0px; }
}
  </style>
<?php
    } 
?>


</head>
<body <?php body_class(); ?>>
<?php woo_top(); ?>
<div id="wrapper">

	<div id="inner-wrapper">

	<?php woo_header_before(); ?>

	<header id="header" class="col-full">

		<?php woo_header_inside(); ?>

	</header>
	<?php woo_header_after(); ?>

