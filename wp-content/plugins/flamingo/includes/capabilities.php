<?php

add_filter( 'map_meta_cap', 'flamingo_map_meta_cap', 10, 4 );

function flamingo_map_meta_cap( $caps, $cap, $user_id, $args ) {
	$meta_caps = array(
		'flamingo_edit_contacts' => 'edit_users',
		'flamingo_edit_contact' => 'edit_users',
		'flamingo_edit_inbound_messages' => 'edit_users',
		'flamingo_delete_inbound_message' => 'edit_users',
		'flamingo_delete_inbound_messages' => 'edit_users' );

	$caps = array_diff( $caps, array_keys( $meta_caps ) );

	if ( isset( $meta_caps[$cap] ) )
		$caps[] = $meta_caps[$cap];

	return $caps;
}

?>