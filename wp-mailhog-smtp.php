<?php
/**
 * Plugin Name: MailHog SMTP for WAMP
 * Plugin URI: https://github.com/masoodmohamed90/wp-mailhog-smtp
 * Description: Redirects all outgoing WordPress emails to MailHog for local development testing on WAMP.
 * Version: 1.0
 * Author: Masood Mohamed
 * Author URI: https://github.com/masoodmohamed90/
 * Text Domain: wp-mailhog-smtp
 * Domain Path: /languages/
 * Requires at least: 6.6
 * Requires PHP: 7.4
 *
 * @package wp-mailhog-smtp
 */

defined( 'ABSPATH' ) || exit;

add_filter(
	'wp_mail_from',
	function( $email ) {
		return 'example@example.com';
	}
);

add_filter(
	'wp_mail_from_name',
	function( $name ) {
		return 'Test Site';
	}
);

add_action(
	'phpmailer_init',
	function( $phpmailer ) {
		$phpmailer->isSMTP();
		$phpmailer->Host        = 'localhost';
		$phpmailer->Port        = 1025;
		$phpmailer->SMTPAuth    = false;
		$phpmailer->SMTPAutoTLS = false;
	}
);

add_action(
	'wp_mail_failed',
	function( $error ) {
		error_log( print_r( $error, true ) );
	}
);
