<?php
if ( ! function_exists('is_exists_term') ) {
	function is_exists_term( $term, $taxonomy = '', $parent = null ){

		$is_term_exist = pmxi_term_exists($term, $taxonomy, $parent);

        if ( ! $is_term_exist && ! empty($term) && is_numeric($term) ) {
            $is_term_exist = term_exists( (int) $term, $taxonomy, $parent );
        }
		return apply_filters( 'wp_all_import_term_exists', $is_term_exist, $taxonomy, $term, $parent );
	}
}

if( ! function_exists('pmxi_term_exists')){
	function pmxi_term_exists($term, $taxonomy = '', $parent = null){
		$existing_term = term_exists($term, $taxonomy, $parent);

		if (!empty($existing_term)) {
			// Get the actual term object.
			$term_object = get_term_by('id', $existing_term['term_id'], $taxonomy);

			// Check if the provided term matches the found term's slug or name.
			if ($term == $term_object->slug || $term == $term_object->name) {
				return $existing_term;
			}else{
				$term_object = get_term_by('name', $term, $taxonomy);

				if (!empty($term_object)) {
					return (array)$term_object;
				}
			}
		}

		return false;
	}
}
