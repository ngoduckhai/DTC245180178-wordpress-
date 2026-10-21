	<footer class="site-footer">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="brand-mark" aria-hidden="true">a</span><span><?php echo esc_html( get_bloginfo( 'name' ) ?: 'AURA' ); ?></span></a>
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> AURA. <?php esc_html_e( 'Âm thanh của riêng bạn.', 'aura-product' ); ?></p>
		<a href="#main-content"><?php esc_html_e( 'Lên đầu trang ↑', 'aura-product' ); ?></a>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
