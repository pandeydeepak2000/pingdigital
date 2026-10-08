<?php
/**
 * Title: Header
 * Slug: twentytwentyfive/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Ping Digital Marketing Modern Tech Header
 */
$logo_url  = home_url( '/wp-content/uploads/ping-nav-logo.jpg' );
$home_url  = home_url( '/' );
$audit_url = home_url( '/digital-marketing-trends-2026-strategies-grow-business-online/' );
?>
<!-- wp:html -->
<header class="pdm-header" id="pdm-site-header">
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

		<nav class="pdm-nav" id="pdm-main-nav" aria-label="Main Navigation">
			<ul class="pdm-nav-list">
				<li><a href="<?php echo esc_url( $home_url ); ?>" class="pdm-nav-item active"><span>Home</span><span class="pdm-nav-arrow">&#8250;</span></a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/marketing-trends/' ); ?>" class="pdm-nav-item"><span>Marketing Trends</span><span class="pdm-nav-arrow">&#8250;</span></a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/ai-search-geo/' ); ?>" class="pdm-nav-item"><span>AI &amp; GEO</span><span class="pdm-nav-arrow">&#8250;</span></a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/social-media/' ); ?>" class="pdm-nav-item"><span>Social Media</span><span class="pdm-nav-arrow">&#8250;</span></a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/cro-funnels/' ); ?>" class="pdm-nav-item"><span>CRO &amp; Funnels</span><span class="pdm-nav-arrow">&#8250;</span></a></li>
			</ul>
			<div class="pdm-mobile-nav-cta-wrap">
				<a href="<?php echo esc_url( $audit_url ); ?>" class="pdm-mobile-nav-cta">
					<span>Free Growth Audit</span> &#128640;
				</a>
			</div>
		</nav>

		<div class="pdm-header-actions">
			<a href="<?php echo esc_url( $audit_url ); ?>" class="pdm-btn-cta pdm-desktop-only">
				<span>Free Growth Audit</span> &#128640;
			</a>
			<button class="pdm-mobile-toggle" id="pdm-menu-toggle" aria-label="Toggle navigation" aria-expanded="false" onclick="var h=document.getElementById('pdm-site-header');var o=h.classList.toggle('pdm-mobile-open');this.setAttribute('aria-expanded',o);">
				<span class="pdm-bar"></span>
				<span class="pdm-bar"></span>
				<span class="pdm-bar"></span>
			</button>
		</div>
	</div>
</header>
<script>
document.addEventListener('DOMContentLoaded', function() {
	var header = document.getElementById('pdm-site-header');
	var toggle = document.getElementById('pdm-menu-toggle');
	if (!header || !toggle) return;
	document.addEventListener('click', function(e) {
		if (header.classList.contains('pdm-mobile-open') && !header.contains(e.target)) {
			header.classList.remove('pdm-mobile-open');
			toggle.setAttribute('aria-expanded', 'false');
		}
	});
	var navLinks = header.querySelectorAll('.pdm-nav-item, .pdm-mobile-nav-cta');
	for (var i = 0; i < navLinks.length; i++) {
		navLinks[i].addEventListener('click', function() {
			header.classList.remove('pdm-mobile-open');
			toggle.setAttribute('aria-expanded', 'false');
		});
	}
});
</script>
<!-- /wp:html -->
