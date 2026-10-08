<?php
/**
 * Twenty Twenty-Five functions and definitions for Ping Digital Marketing
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

if ( ! function_exists( 'twentytwentyfive_post_format_setup' ) ) :
	function twentytwentyfive_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'twentytwentyfive_post_format_setup' );

if ( ! function_exists( 'twentytwentyfive_editor_style' ) ) :
	function twentytwentyfive_editor_style() {
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'twentytwentyfive_editor_style' );

if ( ! function_exists( 'twentytwentyfive_enqueue_styles' ) ) :
	function twentytwentyfive_enqueue_styles() {
		$suffix = SCRIPT_DEBUG ? '' : '.min';
		$src    = 'style' . $suffix . '.css';

		wp_enqueue_style(
			'twentytwentyfive-style',
			get_parent_theme_file_uri( $src ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
		wp_style_add_data(
			'twentytwentyfive-style',
			'path',
			get_parent_theme_file_path( $src )
		);

		// Enqueue Ping Digital Marketing Premium Custom Styling
		wp_enqueue_style(
			'pdm-premium-style',
			get_parent_theme_file_uri( 'assets/css/pdm-premium.css' ),
			array( 'twentytwentyfive-style' ),
			time()
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'twentytwentyfive_enqueue_styles' );

if ( ! function_exists( 'twentytwentyfive_block_styles' ) ) :
	function twentytwentyfive_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfive' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action( 'init', 'twentytwentyfive_block_styles' );

/**
 * ============================================================================
 * PING DIGITAL MARKETING (PDM) - ENTERPRISE SECURITY HARDENING
 * ============================================================================
 */
// 1. Disable XML-RPC completely
add_filter( 'xmlrpc_enabled', '__return_false' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );

// 2. Hide WordPress Version everywhere
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'the_generator', '__return_empty_string' );

// 3. Prevent Username Enumeration / Author Scans (?author=1)
if ( ! is_admin() && isset( $_REQUEST['author'] ) ) {
	wp_redirect( home_url( '/' ), 301 );
	exit;
}

// 4. Remove version strings from scripts and styles
function pdm_remove_ver_css_js( $src ) {
	if ( strpos( $src, '?ver=' ) ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}
add_filter( 'style_loader_src', 'pdm_remove_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'pdm_remove_ver_css_js', 9999 );

/**
 * ============================================================================
 * PING DIGITAL MARKETING - ENTERPRISE SEO, CRITICAL CSS & PERFORMANCE ENGINE
 * ============================================================================
 */

// 1. Resource Hints for Core Web Vitals
function pdm_inject_resource_hints() {
	echo "\n<!-- Ping Digital Marketing Resource Hints for Speed & SEO -->\n";
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'pdm_inject_resource_hints', 0 );

// 2. Automated SEO & Rich Schema Engine
function pdm_inject_seo_meta() {
	$site_name    = 'Ping Digital Marketing';
	$site_domain  = 'https://pingdigitalmarketing.com';
	$default_desc = 'Ping Digital Marketing is an elite AI-powered digital marketing and organic growth agency. We specialize in Generative Engine Optimization (GEO), omnichannel viral video growth, data-driven conversion funnels, and enterprise digital strategy for 2026.';
	$logo_url     = home_url( '/wp-content/uploads/ping-nav-logo.jpg' );

	echo "\n<!-- Search Engine Directives -->\n";
	echo '<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />' . "\n";

	if ( is_singular() ) {
		global $post;
		$title          = get_the_title() . ' | ' . $site_name;
		$excerpt        = has_excerpt() ? get_the_excerpt() : wp_trim_words( strip_shortcodes( $post->post_content ), 26, '...' );
		$canonical      = get_permalink();
		$thumb_id       = get_post_thumbnail_id();
		$image_url      = $thumb_id ? wp_get_attachment_image_url( $thumb_id, 'full' ) : $logo_url;
		$published_time = get_the_date( 'c' );
		$modified_time  = get_the_modified_date( 'c' );
		$author_name    = get_the_author() ? get_the_author() : 'Ping Strategy Team';
		$categories     = get_the_category();
		$cat_name       = ! empty( $categories ) ? $categories[0]->name : 'Digital Marketing';

		echo "\n<!-- PDM Article SEO Meta Tags -->\n";
		echo '<meta name="description" content="' . esc_attr( $excerpt ) . '" />' . "\n";
		echo '<link rel="canonical" href="' . esc_url( $canonical ) . '" />' . "\n";
		echo '<meta property="og:locale" content="en_US" />' . "\n";
		echo '<meta property="og:type" content="article" />' . "\n";
		echo '<meta property="og:title" content="' . esc_attr( $title ) . '" />' . "\n";
		echo '<meta property="og:description" content="' . esc_attr( $excerpt ) . '" />' . "\n";
		echo '<meta property="og:url" content="' . esc_url( $canonical ) . '" />' . "\n";
		echo '<meta property="og:site_name" content="' . esc_attr( $site_name ) . '" />' . "\n";
		echo '<meta property="article:published_time" content="' . esc_attr( $published_time ) . '" />' . "\n";
		echo '<meta property="article:modified_time" content="' . esc_attr( $modified_time ) . '" />' . "\n";
		echo '<meta property="article:section" content="' . esc_attr( $cat_name ) . '" />' . "\n";
		echo '<meta property="og:image" content="' . esc_url( $image_url ) . '" />' . "\n";
		echo '<meta property="og:image:alt" content="' . esc_attr( get_the_title() ) . '" />' . "\n";
		echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
		echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '" />' . "\n";
		echo '<meta name="twitter:description" content="' . esc_attr( $excerpt ) . '" />' . "\n";
		echo '<meta name="twitter:image" content="' . esc_url( $image_url ) . '" />' . "\n";

		// BlogPosting Schema
		$article_schema = array(
			'@context'         => 'https://schema.org',
			'@type'            => 'BlogPosting',
			'headline'         => get_the_title(),
			'description'      => $excerpt,
			'image'            => $image_url,
			'datePublished'    => $published_time,
			'dateModified'     => $modified_time,
			'inLanguage'       => 'en-US',
			'mainEntityOfPage' => array(
				'@type' => 'WebPage',
				'@id'   => $canonical,
			),
			'author'           => array(
				'@type' => 'Person',
				'name'  => $author_name,
				'url'   => home_url( '/about-us/' ),
			),
			'publisher'        => array(
				'@type' => 'Organization',
				'name'  => $site_name,
				'url'   => $site_domain,
				'logo'  => array(
					'@type' => 'ImageObject',
					'url'   => $logo_url,
				),
			),
		);
		echo '<script type="application/ld+json">' . json_encode( $article_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";

		// BreadcrumbList Schema
		$breadcrumb_schema = array(
			'@context'        => 'https://schema.org',
			'@type'           => 'BreadcrumbList',
			'itemListElement' => array(
				array(
					'@type'    => 'ListItem',
					'position' => 1,
					'name'     => 'Home',
					'item'     => home_url( '/' ),
				),
				array(
					'@type'    => 'ListItem',
					'position' => 2,
					'name'     => $cat_name,
					'item'     => ! empty( $categories ) ? get_category_link( $categories[0]->term_id ) : home_url( '/' ),
				),
				array(
					'@type'    => 'ListItem',
					'position' => 3,
					'name'     => get_the_title(),
					'item'     => $canonical,
				),
			),
		);
		echo '<script type="application/ld+json">' . json_encode( $breadcrumb_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";

	} else {
		$canonical  = is_home() || is_front_page() ? home_url( '/' ) : ( ( isset( $_SERVER['HTTPS'] ) && 'on' === $_SERVER['HTTPS'] ? 'https' : 'http' ) . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );
		$page_title = is_category() ? single_cat_title( '', false ) . ' | ' . $site_name : $site_name . ' | AI-Powered Growth & Digital Dominance';

		echo "\n<!-- PDM Site SEO Meta Tags -->\n";
		echo '<meta name="description" content="' . esc_attr( $default_desc ) . '" />' . "\n";
		echo '<link rel="canonical" href="' . esc_url( $canonical ) . '" />' . "\n";
		echo '<meta property="og:locale" content="en_US" />' . "\n";
		echo '<meta property="og:type" content="website" />' . "\n";
		echo '<meta property="og:title" content="' . esc_attr( $page_title ) . '" />' . "\n";
		echo '<meta property="og:description" content="' . esc_attr( $default_desc ) . '" />' . "\n";
		echo '<meta property="og:url" content="' . esc_url( $canonical ) . '" />' . "\n";
		echo '<meta property="og:site_name" content="' . esc_attr( $site_name ) . '" />' . "\n";
		echo '<meta property="og:image" content="' . esc_url( $logo_url ) . '" />' . "\n";
		echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
		echo '<meta name="twitter:title" content="' . esc_attr( $page_title ) . '" />' . "\n";
		echo '<meta name="twitter:description" content="' . esc_attr( $default_desc ) . '" />' . "\n";
		echo '<meta name="twitter:image" content="' . esc_url( $logo_url ) . '" />' . "\n";

		// WebSite Schema
		$site_schema = array(
			'@context'        => 'https://schema.org',
			'@type'           => 'WebSite',
			'name'            => $site_name,
			'url'             => $site_domain,
			'potentialAction' => array(
				'@type'       => 'SearchAction',
				'target'      => home_url( '/?s={search_term_string}' ),
				'query-input' => 'required name=search_term_string',
			),
		);
		echo '<script type="application/ld+json">' . json_encode( $site_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";

		// DigitalMarketingAgency Schema
		$agency_schema = array(
			'@context'       => 'https://schema.org',
			'@type'          => array( 'DigitalMarketingAgency', 'ProfessionalService', 'Organization' ),
			'name'           => $site_name,
			'url'            => $site_domain,
			'logo'           => $logo_url,
			'image'          => $logo_url,
			'description'    => $default_desc,
			'priceRange'     => '$$$',
			'areaServed'     => array(
				'@type' => 'Country',
				'name'  => 'Worldwide',
			),
			'knowsAbout'     => array(
				'AI Digital Marketing Trends 2026',
				'Generative Engine Optimization (GEO)',
				'Omnichannel Social Media Growth',
				'Conversion Rate Optimization (CRO)',
				'Technical SEO & Core Web Vitals',
			),
		);
		echo '<script type="application/ld+json">' . json_encode( $agency_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
	}
}
add_action( 'wp_head', 'pdm_inject_seo_meta', 2 );

// 3. Enqueue Styles & Inlined Critical CSS
function pdm_inject_critical_styles() {
	$css_file = get_template_directory() . '/assets/css/pdm-premium.css';
	if ( file_exists( $css_file ) ) {
		echo "\n<!-- PDM Critical Inlined Styles -->\n";
		echo "<style id=\"pdm-critical-css\">\n" . file_get_contents( $css_file ) . "\n</style>\n";
	}
}
add_action( 'wp_head', 'pdm_inject_critical_styles', 999 );
