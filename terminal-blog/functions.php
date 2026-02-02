<?php
/**
 * Terminal Blog Theme functions and definitions
 *
 * @package Terminal_Blog_Dev
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup
 */
function terminal_blog_dev_setup() {
	// Add support for block styles
	add_theme_support( 'wp-block-styles' );

	// Add support for editor styles
	add_theme_support( 'editor-styles' );

	// Enqueue editor styles
	add_editor_style( 'assets/css/editor-style.css' );

	// Add support for responsive embedded content
	add_theme_support( 'responsive-embeds' );

	// Add support for custom logo
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// Add support for post thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add support for HTML5
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add support for custom background
	add_theme_support(
		'custom-background',
		array(
			'default-color' => '050804',
		)
	);
}
add_action( 'after_setup_theme', 'terminal_blog_dev_setup' );

/**
 * Enqueue scripts and styles
 */
function terminal_blog_dev_scripts() {
	// Enqueue main stylesheet
	wp_enqueue_style(
		'terminal-blog-dev-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	// Enqueue custom styles
	wp_enqueue_style(
		'terminal-blog-dev-custom',
		get_template_directory_uri() . '/assets/css/custom.css',
		array( 'terminal-blog-dev-style' ),
		wp_get_theme()->get( 'Version' )
	);

	// Enqueue theme toggle script
	wp_enqueue_script(
		'terminal-blog-dev-theme-toggle',
		get_template_directory_uri() . '/assets/js/theme-toggle.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		array(
			'strategy' => 'defer',
			'in_footer' => false, // Load in head for early theme application
		)
	);
}
add_action( 'wp_enqueue_scripts', 'terminal_blog_dev_scripts' );

/**
 * Add custom CSS for terminal effects
 */
function terminal_blog_dev_custom_css() {
	$custom_css = "
		/* Terminal glow effect */
		.has-primary-color {
			text-shadow: 0 0 5px rgba(91, 236, 19, 0.5);
		}

		/* Cursor blink animation */
		@keyframes terminal-blink {
			0%, 100% { opacity: 1; }
			50% { opacity: 0; }
		}

		.terminal-cursor {
			animation: terminal-blink 1s step-end infinite;
		}

		/* Custom scrollbar */
		::-webkit-scrollbar {
			width: 8px;
			height: 8px;
		}

		::-webkit-scrollbar-track {
			background: var(--wp--preset--color--background-alt, #0a0f09);
		}

		::-webkit-scrollbar-thumb {
			background: var(--wp--preset--color--secondary, #2e3928);
			border: 1px solid var(--wp--preset--color--primary, #5bec13);
			border-radius: 4px;
		}

		::-webkit-scrollbar-thumb:hover {
			background: var(--wp--preset--color--primary, #5bec13);
		}

		/* Code blocks styling */
		pre.wp-block-code,
		.wp-block-preformatted {
			overflow-x: auto;
		}

		/* Button hover glow */
		.wp-block-button__link:hover {
			box-shadow: 0 0 10px rgba(91, 236, 19, 0.5);
		}

		/* Link underline animation */
		a:not(.wp-block-button__link):hover {
			text-shadow: 0 0 5px rgba(91, 236, 19, 0.3);
		}

		/* Focus styles for accessibility */
		a:focus,
		button:focus,
		input:focus,
		textarea:focus,
		select:focus {
			outline: 2px solid var(--wp--preset--color--primary, #5bec13);
			outline-offset: 2px;
		}

		/* Navigation menu items */
		.wp-block-navigation .wp-block-navigation-item a:hover {
			text-shadow: 0 0 5px rgba(91, 236, 19, 0.5);
		}

		/* Post card hover effect */
		.wp-block-group:has(> .wp-block-post-title):hover {
			border-color: var(--wp--preset--color--primary, #5bec13) !important;
		}

		/* Selection styling */
		::selection {
			background: var(--wp--preset--color--primary, #5bec13);
			color: var(--wp--preset--color--background, #050804);
		}
	";

	wp_add_inline_style( 'terminal-blog-dev-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'terminal_blog_dev_custom_css' );

/**
 * Register block patterns category
 */
function terminal_blog_dev_register_pattern_category() {
	register_block_pattern_category(
		'terminal-blog-dev',
		array(
			'label'       => __( 'Terminal Blog Dev', 'terminal-blog-dev' ),
			'description' => __( 'Terminal-themed patterns for the Terminal Blog Dev theme.', 'terminal-blog-dev' ),
		)
	);
}
add_action( 'init', 'terminal_blog_dev_register_pattern_category' );

/**
 * Modify excerpt length
 */
function terminal_blog_dev_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'terminal_blog_dev_excerpt_length' );

/**
 * Modify excerpt more string
 */
function terminal_blog_dev_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'terminal_blog_dev_excerpt_more' );
