<?php

function register_acf_block_types() {
	// Hero
	acf_register_block_type([
		"name" => "hero",
		"title" => __("Hero"),
		"description" => __("Hero"),
		"render_template" => "blocks/hero.php",
    'enqueue_script'    => get_template_directory_uri() . '/assets/js/hero.js',
		"category" => "common",
		"icon" => "editor-alignleft",
		"keywords" => ["hero"]
	]);

	// CTA Label
	acf_register_block_type([
		"name" => "cta-label",
		"title" => __("CTA Label"),
		"description" => __("CTA Label"),
		"render_template" => "blocks/cta-label.php",
    'enqueue_script'    => get_template_directory_uri() . '/assets/js/cta-label.js',
		"category" => "common",
		"icon" => "editor-alignleft",
		"keywords" => ["cta"]
	]);


	// Logo Grid
	acf_register_block_type([
		"name" => "logo-grid",
		"title" => __("Logo Grid"),
		"description" => __("Logo Grid"),
		"render_template" => "blocks/logo-grid.php",
    'enqueue_script'    => get_template_directory_uri() . '/assets/js/logo-grid.js',
		"category" => "common",
		"icon" => "editor-alignleft",
		"keywords" => ["logo-grid"]
	]);

	// Side by Side
	acf_register_block_type([
		"name" => "side-by-side",
		"title" => __("Side by Side"),
		"description" => __("Side by Side"),
		"render_template" => "blocks/side-by-side.php",
    'enqueue_script'    => get_template_directory_uri() . '/assets/js/side-by-side.js',
		"category" => "common",
		"icon" => "editor-alignleft",
		"keywords" => ["side-by-side"]
	]);

	// Style Guide Block
	acf_register_block_type([
		"name" => "styleguide",
		"title" => __("Style Guide"),
		"description" => __("Style Guide"),
		"render_template" => "blocks/styleguide.php",
		"category" => "common",
		"icon" => "editor-alignleft",
		"keywords" => ["styleguide"]
	]);
}

// Check if function exists and hook into setup.
if (function_exists("acf_register_block_type")) {
	add_action("acf/init", "register_acf_block_types");
}

// Only allow custom Gutenberg Blocks
// add_filter( 'allowed_block_types', 'husl_allowed_block_types' );
// function husl_allowed_block_types($allowed_blocks)
// {
//   return array(
//     'acf/hero',
//     'core/block' //Needed for re-usable blocks
//   );
// }
