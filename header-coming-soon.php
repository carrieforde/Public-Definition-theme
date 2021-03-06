<?php
/**
 * Template for displaying our header.
 *
 * This template displays all of the <head> section and everything up until <div id="content">
 *
 * This template is customized for the Coming Soon Template
 *
 * @package publicdefinition
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'image-as-background template-coming-soon' ); ?> <?php pd_post_thumbnail_as_background(); ?>>

	<?php do_action( 'alcatraz_before' ); ?>

	<div id="page" class="site">

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'alcatraz' ); ?></a>

		<?php do_action( 'alcatraz_before_header' ); ?>

		<header id="site-header" class="site-header" role="banner">

			<?php do_action( 'alcatraz_before_header_inside' ); ?>

			<div class="header-inner">

				<?php do_action( 'alcatraz_header' ); ?>

			</div>

			<?php do_action( 'alcatraz_after_header_inside' ); ?>

		</header>

		<?php do_action( 'alcatraz_after_header' ); ?>

		<?php do_action( 'alcatraz_before_content' ); ?>

		<div id="content" class="site-content">

			<?php do_action( 'alcatraz_before_content_inside' ); ?>
