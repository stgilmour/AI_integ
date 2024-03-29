<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2014.2.1.284
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Comments? Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'muse@musefree.com',
		'to' => 'muse@musefree.com'
	),
	'fields' => array(
		'Email' => array(
			'type' => 'email',
			'label' => 'EMAIL',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'EMAIL\' is required.',
				'format' => 'Field \'EMAIL\' has an invalid email.'
			)
		),
		'custom_U1591' => array(
			'type' => 'string',
			'label' => 'Custom:',
			'required' => false,
			'errors' => array(
			)
		)
	)
);

process_form($form);
?>
