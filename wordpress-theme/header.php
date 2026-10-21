<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site-shell">
	<div class="announcement"><?php esc_html_e( 'Miễn phí giao hàng · Bảo hành chính hãng 24 tháng', 'aura-product' ); ?></div>
	<header class="site-header">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
			<span class="brand-mark" aria-hidden="true">a</span>
			<span><?php echo esc_html( get_bloginfo( 'name' ) ?: 'AURA' ); ?></span>
		</a>
		<button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation" aria-label="<?php esc_attr_e( 'Mở menu', 'aura-product' ); ?>">
			<span aria-hidden="true">☰</span>
		</button>
		<nav class="primary-navigation" id="primary-navigation" aria-label="<?php esc_attr_e( 'Điều hướng chính', 'aura-product' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => '',
					'fallback_cb'    => false,
					'items_wrap'     => '<ul>%3$s</ul>',
				)
			);
			?>
			<?php if ( ! has_nav_menu( 'primary' ) ) : ?>
				<ul>
					<li><a href="#story"><?php esc_html_e( 'Câu chuyện', 'aura-product' ); ?></a></li>
					<li><a href="#features"><?php esc_html_e( 'Công nghệ', 'aura-product' ); ?></a></li>
					<li><a href="#product"><?php esc_html_e( 'Sản phẩm', 'aura-product' ); ?></a></li>
				</ul>
			<?php endif; ?>
		</nav>
		<a class="header-cta" href="#product"><?php esc_html_e( 'Khám phá AURA ONE', 'aura-product' ); ?></a>
	</header>
