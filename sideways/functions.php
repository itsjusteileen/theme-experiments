<?php

if ( ! function_exists( 'sideways_theme_support' ) ) :
	function sideways_theme_support() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Set content-width
		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 660;
		}

		// Post thumbnails
		add_theme_support( 'post-thumbnails' );

		// Set post thumbnail size.
		set_post_thumbnail_size( 1200, 9999 );

		// Title tag
		add_theme_support( 'title-tag' );

		// HTML5 semantic markup
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		// Alignwide and alignfull classes in the block editor
		add_theme_support( 'align-wide' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Starter content
		add_theme_support(
			'starter-content', [
				// Static front page set to Home, posts page set to Blog
				'options' => [
					'show_on_front'  => 'page',
					'page_on_front'  => '{{home}}',
					'page_for_posts' => '{{blog}}',
				],
				// Starter pages to include
				'posts'   => [
					'home'    => [
						'post_content' => '<!-- wp:template-part {"slug":"cover","theme":"sideways"} -->',
					],
					'about'   => [
						'post_content' => '<!-- wp:template-part {"slug":"about","theme":"sideways"} -->',
					],
					'contact' => [
						'post_content' => '<!-- wp:template-part {"slug":"contact","theme":"sideways"} -->',
					],
					'blog',
				],
			]
		);

	}
	add_action( 'after_setup_theme', 'sideways_theme_support' );
endif;

/**
 * Register and Enqueue Styles.
 */
function sideways_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'sideways-style', get_stylesheet_uri(), array(), $theme_version );

}

add_action( 'wp_enqueue_scripts', 'sideways_register_styles' );


/**
 * Block Editor Settings.
 * Add custom colors to the block editor.
 */

function sideways_block_editor_settings() {

	// Editor Color Palette
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __( 'Primary', 'sideways-blocks' ),
				'slug'  => 'primary',
				'color' => '#773B7A',
			),
			array(
				'name'  => __( 'Secondary', 'sideways-blocks' ),
				'slug'  => 'secondary',
				'color' => '#190D19',
			),
			array(
				'name'  => __( 'Sidetrack Neon', 'sideways-blocks' ),
				'slug'  => 'sidetrack-neon-orchid',
				'color' => '#B63BE2',
			),
			array(
				'name'  => __( 'Sidetrack Salmon', 'sideways-blocks' ),
				'slug'  => 'sidetrack-salmon',
				'color' => '#FF644C',
			),
			array(
				'name'  => __( 'Sidetrack Grey', 'sideways - blocks' ),
				'slug'  => 'sidetrack - grey',
				'color' => '// A39594',
			),
		),
	);
}
add_action( 'after_setup_theme', 'sideways_block_editor_settings' );

add_action(
	'after_setup_theme', function () {
	}
);
