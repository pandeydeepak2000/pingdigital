<?php
/**
 * Title: Header
 * Slug: twentytwentyfive/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Ping Digital Marketing Modern Tech Header
 */
$logo_url = home_url( '/wp-content/uploads/ping-nav-logo.jpg' );
$home_url = home_url( '/' );
?>
<!-- wp:html -->
<header class="pdm-header">
	<div class="pdm-header-inner">
		<div class="pdm-brand">
			<a href="<?php echo esc_url( $home_url ); ?>" class="pdm-logo-link" title="Ping Digital Marketing - AI-Powered Growth &amp; Dominance">
				<img src="<?php echo esc_url( $logo_url ); ?>" alt="Ping Digital Marketing Logo" class="pdm-logo-img" />
				<div class="pdm-brand-text">
					<span class="pdm-brand-title">PING <span class="pdm-gradient-text">DIGITAL</span></span>
					<span class="pdm-brand-sub">AI &amp; GROWTH LAB 2026</span>
				</div>
			</a>
		</div>

		<nav class="pdm-nav" aria-label="Main Navigation">
			<ul class="pdm-nav-list">
				<li><a href="<?php echo esc_url( $home_url ); ?>" class="pdm-nav-item active">Home</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/marketing-trends/' ); ?>" class="pdm-nav-item">Marketing Trends</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/ai-search-geo/' ); ?>" class="pdm-nav-item">AI &amp; GEO</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/social-media/' ); ?>" class="pdm-nav-item">Social Media</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/cro-funnels/' ); ?>" class="pdm-nav-item">CRO &amp; Funnels</a></li>
			</ul>
		</nav>

		<div class="pdm-header-actions">
			<a href="<?php echo esc_url( $home_url . 'digital-marketing-trends-2026-strategies-grow-business-online/' ); ?>" class="pdm-btn-cta">
				<span>Free Growth Audit</span> &#128640;
			</a>
			<button class="pdm-mobile-toggle" aria-label="Toggle navigation" onclick="document.querySelector('.pdm-header').classList.toggle('pdm-mobile-open')">
				<span class="pdm-bar"></span>
				<span class="pdm-bar"></span>
				<span class="pdm-bar"></span>
			</button>
		</div>
	</div>
</header>
<!-- /wp:html -->
