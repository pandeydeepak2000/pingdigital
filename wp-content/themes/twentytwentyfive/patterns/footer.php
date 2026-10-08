<?php
/**
 * Title: Footer
 * Slug: twentytwentyfive/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Ping Digital Marketing Modern Agency Footer
 */
$logo_url = home_url( '/wp-content/uploads/ping-nav-logo.jpg' );
$home_url = home_url( '/' );
?>
<!-- wp:html -->
<footer class="pdm-footer">
	<div class="pdm-footer-inner">
		<div class="pdm-footer-grid">
			<div class="pdm-footer-col pdm-footer-about">
				<div class="pdm-brand">
					<a href="<?php echo esc_url( $home_url ); ?>" class="pdm-logo-link">
						<img src="<?php echo esc_url( $logo_url ); ?>" alt="Ping Digital Marketing" class="pdm-logo-img" />
						<div class="pdm-brand-text">
							<span class="pdm-brand-title">PING <span class="pdm-gradient-text">DIGITAL</span></span>
							<span class="pdm-brand-sub">AI &amp; GROWTH LAB 2026</span>
						</div>
					</a>
				</div>
				<p class="pdm-footer-desc">
					Ping Digital Marketing is an elite AI-driven growth engineering lab. We help visionary founders and brands conquer Google AI Overviews, scale viral short-form media, and build high-converting customer acquisition funnels.
				</p>
				<div class="pdm-trust-metrics">
					<div class="pdm-metric-item">
						<strong>500K+</strong>
						<span>Targeted Organic Clicks</span>
					</div>
					<div class="pdm-metric-item">
						<strong>#1 Ranked</strong>
						<span>AI Overview Results</span>
					</div>
				</div>
			</div>

			<div class="pdm-footer-col">
				<h4 class="pdm-footer-heading">Growth Playbooks</h4>
				<ul class="pdm-footer-links">
					<li><a href="<?php echo esc_url( $home_url . 'digital-marketing-trends-2026-strategies-grow-business-online/' ); ?>">Marketing Trends 2026</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'generative-engine-optimization-geo-ai-search-ranking-playbook-2026/' ); ?>">Generative Engine Optimization (GEO)</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'omnichannel-social-media-marketing-2026-short-form-video-viral-distribution/' ); ?>">Short-Form Video &amp; Social Scale</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'conversion-rate-optimization-cro-blueprint-traffic-to-revenue/' ); ?>">Conversion Funnels &amp; CRO</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'category/marketing-trends/' ); ?>">All Growth Blueprints</a></li>
				</ul>
			</div>

			<div class="pdm-footer-col">
				<h4 class="pdm-footer-heading">Company &amp; Trust</h4>
				<ul class="pdm-footer-links">
					<li><a href="<?php echo esc_url( $home_url . 'about-us/' ); ?>">About Ping Lab</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'contact-us/' ); ?>">Contact &amp; Audit Request</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'privacy-policy/' ); ?>">Privacy Policy</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'terms-of-service/' ); ?>">Terms of Service</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'editorial-guidelines/' ); ?>">Editorial Standards</a></li>
				</ul>
			</div>

			<div class="pdm-footer-col pdm-footer-newsletter-col">
				<h4 class="pdm-footer-heading">Ping Growth Dispatch</h4>
				<p class="pdm-newsletter-desc">
					Get confidential weekly algorithmic teardowns, AI marketing strategies, and zero-click search breakdowns delivered straight to your inbox.
				</p>
				<form class="pdm-newsletter-form" onsubmit="event.preventDefault(); alert('Welcome to Ping Growth Dispatch! Check your inbox soon.');">
					<input type="email" placeholder="Enter business email..." required class="pdm-newsletter-input" />
					<button type="submit" class="pdm-newsletter-btn">Join 15,000+ Marketers &#8594;</button>
				</form>
				<span class="pdm-footer-ssl-note">&#128274; 256-Bit SSL Encrypted. Zero spam.</span>
			</div>
		</div>

		<div class="pdm-footer-bottom">
			<p>&copy; <?php echo date('Y'); ?> Ping Digital Marketing (pingdigitalmarketing.com). All rights reserved. Precision Growth Engineered.</p>
			<div class="pdm-footer-bottom-links">
				<a href="<?php echo esc_url( $home_url . 'privacy-policy/' ); ?>">Privacy</a>
				<span>&bull;</span>
				<a href="<?php echo esc_url( $home_url . 'terms-of-service/' ); ?>">Terms</a>
				<span>&bull;</span>
				<a href="<?php echo esc_url( $home_url . 'wp-sitemap.xml' ); ?>">XML Sitemap</a>
			</div>
		</div>
	</div>
</footer>
<!-- /wp:html -->
