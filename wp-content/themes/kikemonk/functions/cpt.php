<?php
function post_types() {
	register_post_type("cities", [
		"labels" => [
			"name" => __("Cities"),
			"singular_name" => __("City"),
			"menu_name" => __("Cities"),
			"name_admin_bar" => __("Cities"),
			"add_new" => __("Add New"),
			"add_new_item" => __("Add New City"),
			"new_item" => __("New City"),
			"edit_item" => __("Edit City"),
			"view_item" => __("View City"),
			"all_items" => __("All Cities"),
			"search_items" => __("Search City"),
			"parent_item_colon" => __("Parent City:"),
			"not_found" => __("No Cities found."),
			"not_found_in_trash" => __("No Cities found in Trash.")
		],
		"public" => true,
		"show_ui" => true,
		"menu_icon" => "dashicons-media-spreadsheet",
		"capability_type" => "post",
		"hierarchical" => false,
		"query_var" => true,
		'show_in_rest' => true,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		"publicly_queryable" => true,
		"exclude_from_search" => false,
		"has_archive" => true,
		"taxonomies" => ["zip-codes", "state"]
	]);

	register_taxonomy("zip-codes", "cities", [
		"labels" => [
			"name" => "Zip Codes",
			"add_new_item" => "Add zip codes",
			"new_item_name" => "New zip codes"
		],
		"show_ui" => true,
		"show_tagcloud" => false,
		"hierarchical" => true,
		"args" => ["orderby" => "term_order"],
		"query_var" => true,
		'show_in_rest' => true,
		"capabilities" => ["manage_terms" => "edit_pages"]
	]);

  register_taxonomy("state", "cities", [
		"labels" => [
			"name" => "State",
			"add_new_item" => "Add state",
			"new_item_name" => "New state"
		],
		"show_ui" => true,
		"show_tagcloud" => false,
		"hierarchical" => true,
		"args" => ["orderby" => "term_order"],
		"query_var" => true,
		'show_in_rest' => true,
		"capabilities" => ["manage_terms" => "edit_pages"]
	]);
}
add_action("init", "post_types");
