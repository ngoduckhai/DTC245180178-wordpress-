<?php
get_header();
$hero_title = get_theme_mod( 'aura_hero_title', 'Chạm vào khoảng lặng.' );
$title_parts = explode( ' ', $hero_title );
$last_word   = array_pop( $title_parts );
$title_start = implode( ' ', $title_parts );
$contact     = sanitize_email( get_theme_mod( 'aura_contact_email', get_option( 'admin_email' ) ) );
?>
<main id="main-content">
	<section class="hero" aria-labelledby="hero-title">
		<div class="hero-copy">
			<p class="eyebrow"><?php echo esc_html( get_theme_mod( 'aura_eyebrow', 'ÂM THANH CỦA RIÊNG BẠN' ) ); ?></p>
			<h1 id="hero-title"><?php echo esc_html( $title_start ); ?> <em><?php echo esc_html( $last_word ); ?></em></h1>
			<p class="hero-description"><?php echo esc_html( get_theme_mod( 'aura_hero_description', 'AURA ONE mang đến không gian âm thanh tinh khiết, để mỗi giai điệu trở thành khoảnh khắc của riêng bạn.' ) ); ?></p>
			<div class="hero-actions">
				<a class="button" href="#product"><?php esc_html_e( 'Khám phá sản phẩm', 'aura-product' ); ?></a>
				<a class="text-link" href="#story"><?php esc_html_e( 'Câu chuyện AURA', 'aura-product' ); ?> <span aria-hidden="true">→</span></a>
			</div>
			<p class="hero-note"><?php esc_html_e( 'Được lắng nghe bởi', 'aura-product' ); ?> <strong>12.000+ <?php esc_html_e( 'khách hàng', 'aura-product' ); ?></strong></p>
		</div>
		<div class="product-visual" aria-label="<?php esc_attr_e( 'Minh họa tai nghe AURA ONE', 'aura-product' ); ?>" role="img">
			<div class="visual-disc"></div><div class="visual-orbit"></div>
			<svg class="headphones" viewBox="0 0 400 390" fill="none" aria-hidden="true">
				<defs>
					<linearGradient id="band" x1="91" y1="63" x2="310" y2="230" gradientUnits="userSpaceOnUse"><stop stop-color="#53624D"/><stop offset=".48" stop-color="#26372D"/><stop offset="1" stop-color="#65735C"/></linearGradient>
					<linearGradient id="cup" x1="72" y1="189" x2="167" y2="323" gradientUnits="userSpaceOnUse"><stop stop-color="#53634F"/><stop offset="1" stop-color="#24332A"/></linearGradient>
					<linearGradient id="cushion" x1="100" y1="205" x2="151" y2="298" gradientUnits="userSpaceOnUse"><stop stop-color="#30352F"/><stop offset="1" stop-color="#171C18"/></linearGradient>
				</defs>
				<path d="M76 209V163C76 91 131 37 200 37s124 54 124 126v46" stroke="url(#band)" stroke-width="27" stroke-linecap="round"/>
				<path d="M91 199v-36c0-62 48-111 109-111s109 49 109 111v36" stroke="#89927E" stroke-opacity=".65" stroke-width="3" stroke-linecap="round"/>
				<path d="M67 178c-19 0-34 16-34 35v63c0 19 15 35 34 35h25V178H67ZM333 178c19 0 34 16 34 35v63c0 19-15 35-34 35h-25V178h25Z" fill="url(#cup)"/>
				<rect x="83" y="188" width="78" height="130" rx="35" fill="url(#cup)" stroke="#71816D" stroke-width="2"/>
				<rect x="239" y="188" width="78" height="130" rx="35" fill="url(#cup)" stroke="#71816D" stroke-width="2"/>
				<rect x="99" y="204" width="47" height="98" rx="23.5" fill="url(#cushion)"/>
				<rect x="254" y="204" width="47" height="98" rx="23.5" fill="url(#cushion)"/>
				<path d="M109 220v67M264 220v67" stroke="#777F70" stroke-opacity=".38" stroke-width="2" stroke-linecap="round"/>
				<path d="M178 103h44" stroke="#C9E27B" stroke-width="3" stroke-linecap="round"/>
			</svg>
			<div class="visual-caption"><span class="caption-dot"></span><?php esc_html_e( 'Thiết kế tối giản · Màu rêu', 'aura-product' ); ?></div>
		</div>
	</section>
	<div class="trust-strip" aria-label="<?php esc_attr_e( 'Điểm nổi bật', 'aura-product' ); ?>">
		<div class="trust-item"><span class="trust-icon" aria-hidden="true">◌</span><?php esc_html_e( 'Chống ồn chủ động', 'aura-product' ); ?></div>
		<div class="trust-item"><span class="trust-icon" aria-hidden="true">⌁</span><?php esc_html_e( 'Nghe nhạc đến 40 giờ', 'aura-product' ); ?></div>
		<div class="trust-item"><span class="trust-icon" aria-hidden="true">✳</span><?php esc_html_e( 'Âm thanh Hi-Fi', 'aura-product' ); ?></div>
	</div>
	<section class="section" id="features" aria-labelledby="features-title">
		<div class="section-heading">
			<div><p class="section-kicker"><?php esc_html_e( 'Âm thanh, theo cách của bạn', 'aura-product' ); ?></p><h2 id="features-title"><?php esc_html_e( 'Mọi chi tiết đều có lý do.', 'aura-product' ); ?></h2></div>
			<p><?php esc_html_e( 'Tập trung vào những gì quan trọng: âm thanh chân thực, sự thoải mái và thiết kế đồng hành cùng bạn mỗi ngày.', 'aura-product' ); ?></p>
		</div>
		<div class="feature-grid">
			<article class="feature-card"><span class="feature-number">01 / <?php esc_html_e( 'Tập trung', 'aura-product' ); ?></span><h3><?php esc_html_e( 'Không gian riêng.', 'aura-product' ); ?></h3><p><?php esc_html_e( 'Chủ động lọc tiếng ồn xung quanh, để bạn đắm mình trong âm nhạc hoặc tập trung vào điều đang làm.', 'aura-product' ); ?></p></article>
			<article class="feature-card"><span class="feature-number">02 / <?php esc_html_e( 'Thoải mái', 'aura-product' ); ?></span><h3><?php esc_html_e( 'Nhẹ nhàng cả ngày.', 'aura-product' ); ?></h3><p><?php esc_html_e( 'Đệm tai mềm mại và quai đeo ôm vừa vặn, sẵn sàng đồng hành từ buổi sáng đến chuyến đi cuối ngày.', 'aura-product' ); ?></p></article>
			<article class="feature-card"><span class="feature-number">03 / <?php esc_html_e( 'Bền bỉ', 'aura-product' ); ?></span><h3><?php esc_html_e( 'Năng lượng dài lâu.', 'aura-product' ); ?></h3><p><?php esc_html_e( 'Thời lượng pin đến 40 giờ và sạc nhanh tiện lợi cho nhịp sống linh hoạt, không gián đoạn.', 'aura-product' ); ?></p></article>
		</div>
	</section>
	<section class="story" id="story" aria-labelledby="story-title">
		<div class="story-art" aria-hidden="true">
			<svg class="headphones" viewBox="0 0 400 390" fill="none">
				<path d="M76 209V163C76 91 131 37 200 37s124 54 124 126v46" stroke="#AAB69E" stroke-width="27" stroke-linecap="round"/>
				<path d="M67 178c-19 0-34 16-34 35v63c0 19 15 35 34 35h25V178H67ZM333 178c19 0 34 16 34 35v63c0 19-15 35-34 35h-25V178h25Z" fill="#71816D"/>
				<rect x="83" y="188" width="78" height="130" rx="35" fill="#65745F" stroke="#C9E27B" stroke-opacity=".5" stroke-width="2"/><rect x="239" y="188" width="78" height="130" rx="35" fill="#65745F" stroke="#C9E27B" stroke-opacity=".5" stroke-width="2"/>
				<rect x="99" y="204" width="47" height="98" rx="23.5" fill="#30352F"/><rect x="254" y="204" width="47" height="98" rx="23.5" fill="#30352F"/>
			</svg>
		</div>
		<div class="story-copy">
			<p class="section-kicker"><?php esc_html_e( 'Ít hơn, nhưng tốt hơn', 'aura-product' ); ?></p>
			<h2 id="story-title"><?php esc_html_e( 'Một khoảng lặng giữa thế giới ồn ào.', 'aura-product' ); ?></h2>
			<p><?php esc_html_e( 'AURA bắt đầu từ một ý tưởng giản dị: công nghệ tốt không cần phô trương. Chúng tôi tạo nên những sản phẩm chỉn chu, để bạn dành nhiều thời gian hơn cho âm nhạc, công việc và những người mình yêu quý.', 'aura-product' ); ?></p>
			<a class="text-link" href="#product"><?php esc_html_e( 'Gặp AURA ONE', 'aura-product' ); ?> <span aria-hidden="true">→</span></a>
		</div>
	</section>
	<section class="section product-section" id="product" aria-labelledby="product-title">
		<div class="section-heading"><div><p class="section-kicker"><?php esc_html_e( 'Bắt đầu hành trình lắng nghe', 'aura-product' ); ?></p><h2 id="product-title"><?php esc_html_e( 'Một lựa chọn vừa vặn.', 'aura-product' ); ?></h2></div></div>
		<div class="product-panel">
			<div><h3>AURA ONE</h3><p><?php esc_html_e( 'Tai nghe chụp tai không dây · Màu rêu · Bảo hành 24 tháng', 'aura-product' ); ?></p></div>
			<div class="product-purchase"><span class="product-price"><?php echo esc_html( get_theme_mod( 'aura_price', '3.490.000₫' ) ); ?></span><a class="button" href="#contact"><?php esc_html_e( 'Tìm hiểu thêm', 'aura-product' ); ?></a></div>
		</div>
	</section>
	<section class="contact" id="contact" aria-labelledby="contact-title">
		<p class="section-kicker"><?php esc_html_e( 'Bắt đầu từ một giai điệu', 'aura-product' ); ?></p>
		<h2 id="contact-title"><?php esc_html_e( 'Sẵn sàng nghe theo cách mới?', 'aura-product' ); ?></h2>
		<p><?php esc_html_e( 'Liên hệ với chúng tôi để được tư vấn về sản phẩm.', 'aura-product' ); ?></p>
		<a class="button" href="<?php echo esc_url( 'mailto:' . $contact ); ?>"><?php esc_html_e( 'Liên hệ tư vấn', 'aura-product' ); ?></a>
	</section>
</main>
<?php get_footer(); ?>
