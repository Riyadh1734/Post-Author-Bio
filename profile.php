<?php

function solids_user_contact_methods( $methods ) {

	$methods ['twitter'] = __('Twitter', 'solids');
	$methods ['facebook'] = __('Facebook', 'solids');

	return $methods;
}
add_filter( 'user_contactmethods', 'solids_user_contact_methods');