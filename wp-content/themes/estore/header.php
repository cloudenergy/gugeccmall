<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until </header>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeGrill
 * @subpackage eStore
 * @since eStore 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'tg_before' ); ?>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'estore' ); ?></a>

		<?php do_action( 'estore_before_header' ); ?>

		<?php if ( get_theme_mod( 'estore_header_media_placement', 'header_media_below_main_menu' ) == 'header_media_above_site_title' ) {
			estore_the_custom_header_markup();
		} ?>

<header class="w-header transparent">
  <div class="container"><a class="logo" href="index.html"></a>
    <div class="login-box"><a class=""  ><img class="telpng" src="http://9kpu.kuaileapp.com/img/phone.png">0571-86996727</a><a class="btn-white btn" target="_blank"  href="http://wpa.qq.com/msgrd?v=3&amp;uin=3066119618&amp;site=qq&amp;menu=yes" >在线咨询</a></div>
    <nav class="w-navbar">
    <a  href="http://zft.gugecc.com/index-2.html">首页</a>
    <a  href="http://zft.gugecc.com/product.html" >智能仪表</a>
    <a href="http://zft.gugecc.com/fangan.html" >方案</a>
    <a  class="curr"  href="https://mall.gugecc.com/" >商城</a>
    <a  href="http://zft.gugecc.com/index.html" >租付通</a>
    <a  href="http://kj.gugecc.com" >快缴</a>
    <a href="http://zft.gugecc.com/qudao.html" >渠道合作</a>
    <a  href="http://zft.gugecc.com/aboutus.html" >联系我们</a>
    </nav>
  </div>
</header>

	<?php if ( get_theme_mod( 'estore_header_media_placement', 'header_media_below_main_menu' ) == 'header_media_below_main_menu' ) {
		estore_the_custom_header_markup();
	} ?>

	<?php do_action( 'estore_after_header' ); ?>
	<?php do_action( 'estore_before_main' ); ?>
