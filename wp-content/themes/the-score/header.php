<?php
// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * The header for our theme
 *
 */
?>
<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
		
		<?php the_score_before_header (); ?><!-- Go to /inc/before-header.php -->

		<?php the_score_header (); ?><!-- Go to /inc/header-top.php -->
	<?php if(get_theme_mod('the_score_home_activate_breadcrumb')and ( !is_front_page() || !is_home())) { ?>
		<div class="breadcrumb" itemprop="breadcrumb"> <!-- breadcrumb -->
			<ul itemscope="" itemtype="http://schema.org/BreadcrumbList">
				<meta name="numberOfItems" content="2">
				<meta name="itemListOrder" content="Ascending">
				<li class="trail-item trail-begin" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<span itemprop="name">
							<span class="dashicons dashicons-admin-home"></span>
							<span style=" display: none;"><?php echo get_bloginfo( 'name' ); ?></span>
						</span>
					</a>
					<meta content="1" itemprop="position">
				</li>
				<li class="trail-item trail-end" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
					<span itemprop="name"><?php the_title(); ?></span>
					<meta content="2" itemprop="position">
				</li>
			</ul>
		</div> <!-- breadcrumb -->	
	<?php } ?>		
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-score' ); ?></a>
		<div id="content" class="site-content">
			


	
		
