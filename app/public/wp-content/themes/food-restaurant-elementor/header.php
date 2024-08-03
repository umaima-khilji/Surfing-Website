<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Food Restaurant Elementor
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>
<?php if(get_theme_mod('food_restaurant_elementor_preloader_hide', false )){ ?>
	<div class="loader">
		<div class="preloader">
			<div class="diamond">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
<?php } ?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'food-restaurant-elementor' ); ?></a>

<header id="site-navigation">
	<div class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-9 col-12 align-self-center text-md-start text-center adv-text py-2">
					<?php if ( get_theme_mod('food_restaurant_elementor_header_advertisement_text') ) : ?>
						<p class="mb-0"><i class="fa-solid fa-volume-low me-2"></i><?php echo esc_html( get_theme_mod('food_restaurant_elementor_header_advertisement_text' ) ); ?></p>
					<?php endif; ?>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-12 align-self-center text-md-end text-center">
					<?php $food_restaurant_elementor_settings = get_theme_mod( 'food_restaurant_elementor_social_links_settings' ); ?>
					<div class="social-links text-md-end text-center my-2">
						<?php if ( is_array($food_restaurant_elementor_settings) || is_object($food_restaurant_elementor_settings) ){ ?>
							<?php foreach( $food_restaurant_elementor_settings as $food_restaurant_elementor_setting ) { ?>
								<a href="<?php echo esc_url( $food_restaurant_elementor_setting['link_url'] ); ?>" target="_blank">
									<i class="<?php echo esc_attr( $food_restaurant_elementor_setting['link_text'] ); ?> me-3"></i>
								</a>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="middle-header py-2 <?php if( get_theme_mod( 'food_restaurant_elementor_sticky_header',false ) != '') { ?>sticky-header<?php } else { ?>close-sticky <?php } ?>">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 align-self-center text-center">
					<div class="logo text-start text-md-start mb-3 mb-md-0">
						<div class="logo-image">
							<?php the_custom_logo(); ?>
						</div>
						<div class="logo-content">
							<?php
								if ( get_theme_mod('food_restaurant_elementor_display_header_title', true) == true ) :
									echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
									echo esc_attr(get_bloginfo('name'));
									echo '</a>';
								endif;
								if ( get_theme_mod('food_restaurant_elementor_display_header_text', false) == true ) :
									echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
								endif;
							?>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-lg-8 col-md-7 col-sm-6 col-3 align-self-center text-center">
					<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
						<span aria-hidden="true"><i class="fa-solid fa-bars"></i></span>
					</button>
					<nav id="main-menu" class="close-panal">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'container' => 'false'
							));
						?>
						<button class="close-menu my-2 p-2" type="button">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</nav>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-3 align-self-center text-center d-flex justify-content-between">
					<div class="my-account">
						<?php if(class_exists('woocommerce')){ ?>
							<?php if ( is_user_logged_in() ) { ?>
								<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('My Account','food-restaurant-elementor'); ?>"><i class="fas fa-user me-1"></i><span class="screen-reader-text"><?php esc_html_e( 'My Account','food-restaurant-elementor' );?></span></a>
							<?php }
							else { ?>
								<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','food-restaurant-elementor'); ?>"><i class="fas fa-user me-1"></i><span class="screen-reader-text"><?php esc_html_e( 'Login / Register','food-restaurant-elementor' );?></span></a>
							<?php } ?>
						<?php }?>
					</div>
					<div class="my-cart">
						<?php if ( class_exists( 'woocommerce' ) ) {?>
							<a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','food-restaurant-elementor' ); ?>"><i class="fa-solid fa-cart-shopping me-1"></i></a>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
