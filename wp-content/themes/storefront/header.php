<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php
	do_action( 'storefront_before_header' ); ?>

	<!--<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked into storefront_header action
			 *
			 * @hooked storefront_skip_links                       - 0
			 * @hooked storefront_social_icons                     - 10
			 * @hooked storefront_site_branding                    - 20
			 * @hooked storefront_secondary_navigation             - 30
			 * @hooked storefront_product_search                   - 40
			 * @hooked storefront_primary_navigation_wrapper       - 42
			 * @hooked storefront_primary_navigation               - 50
			 * @hooked storefront_header_cart                      - 60
			 * @hooked storefront_primary_navigation_wrapper_close - 68
			 */
			do_action( 'storefront_header' ); ?>

		</div>
	</header><!-- #masthead -->

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

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		/**
		 * Functions hooked in to storefront_content_top
		 *
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'storefront_content_top' );
