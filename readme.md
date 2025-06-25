=== MailHog SMTP for WAMP ===

Requires at least: 6.0 
Tested up to: 6.6 
Stable tag: 1.0.0 
License: GPLv2 or later 
License URI: https://www.gnu.org/licenses/gpl-2.0.html 

Redirects all outgoing WordPress emails to MailHog for safe local testing. Perfect for developers using WAMP.

== Description ==

This plugin configures WordPress to route all emails sent via `wp_mail()` to a local MailHog SMTP server, running on `localhost:1025`. It's ideal for developers working in WAMP who want to test email functionality without sending real emails.

- Uses PHPMailer with custom SMTP settings
- Supports HTML emails
- Automatically sets a safe "From" email and name
- No configuration needed, just activate and go

== Installation ==

1. Make sure MailHog is running on your machine (`localhost:1025`)
2. Upload this plugin to your `wp-content/plugins` directory
3. Activate the plugin via WordPress Admin → Plugins
4. Open `http://localhost:8025` to view emails in the MailHog inbox

== Changelog ==

= 1.0.0 =
* Initial release
