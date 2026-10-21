<?php
/**
 * AURA Product theme setup.
 */

function aura_product_setup() {
	register_nav_menus(
		array(
			'primary' => __( 'Điều hướng chính', 'aura-product' ),
		)
	);

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
}
add_action( 'after_setup_theme', 'aura_product_setup' );

function aura_product_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'aura-product-style', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_script( 'aura-product-navigation', get_theme_file_uri( '/assets/navigation.js' ), array(), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'aura_product_assets' );

function aura_product_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'aura_product_homepage',
		array(
			'title'       => __( 'Nội dung trang chủ', 'aura-product' ),
			'description' => __( 'Tùy chỉnh nội dung trang giới thiệu sản phẩm mẫu.', 'aura-product' ),
			'priority'    => 30,
		)
	);

	$settings = array(
		'aura_eyebrow' => array(
			'label'   => __( 'Nhãn phần mở đầu', 'aura-product' ),
			'default' => 'ÂM THANH CỦA RIÊNG BẠN',
			'type'    => 'text',
		),
		'aura_hero_title' => array(
			'label'   => __( 'Tiêu đề chính', 'aura-product' ),
			'default' => 'Chạm vào khoảng lặng.',
			'type'    => 'text',
		),
		'aura_hero_description' => array(
			'label'   => __( 'Mô tả sản phẩm', 'aura-product' ),
			'default' => 'AURA ONE mang đến không gian âm thanh tinh khiết, để mỗi giai điệu trở thành khoảnh khắc của riêng bạn.',
			'type'    => 'textarea',
		),
		'aura_price' => array(
			'label'   => __( 'Giá sản phẩm', 'aura-product' ),
			'default' => '3.490.000₫',
			'type'    => 'text',
		),
		'aura_contact_email' => array(
			'label'   => __( 'Email liên hệ', 'aura-product' ),
			'default' => get_option( 'admin_email' ),
			'type'    => 'email',
		),
	);

	foreach ( $settings as $setting_id => $field ) {
		$sanitize_callback = 'textarea' === $field['type']
			? 'sanitize_textarea_field'
			: ( 'email' === $field['type'] ? 'sanitize_email' : 'sanitize_text_field' );
		$wp_customize->add_setting(
			$setting_id,
			array(
				'default'           => $field['default'],
				'sanitize_callback' => $sanitize_callback,
			)
		);
		$wp_customize->add_control(
			$setting_id,
			array(
				'label'   => $field['label'],
				'section' => 'aura_product_homepage',
				'type'    => $field['type'],
			)
		);
	}
}
add_action( 'customize_register', 'aura_product_customize_register' );
