<?php
/*
Plugin Name: Custom Profile Fields
Plugin URI: https://github.com/alexmiron/custom-profile-fields
Description: Display Additional User Profile Fields
Version: 1.0
Author: Alex Miron
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// User Social Links
function cpf_user_contact_methods( $user_contact ) {
	$user_contact['facebook']	= esc_html__('Facebook Username', 'cpf');
	$user_contact['twitter']	= esc_html__('Twitter Username', 'cpf');
	$user_contact['instagram']	= esc_html__('Instagram Username', 'cpf');
	$user_contact['youtube']	= esc_html__('Youtube Username', 'cpf');
	$user_contact['google']		= esc_html__('Google Plus Username', 'cpf');
	$user_contact['pinterest']	= esc_html__('Pinterest Username', 'cpf');
	$user_contact['linkedin']	= esc_html__('LinkedIn Username', 'cpf');
	$user_contact['tumblr']		= esc_html__('Tumblr Username', 'cpf');

	return $user_contact;
}
add_filter( 'user_contactmethods', 'cpf_user_contact_methods' );
