<?php

//panel
new \Kirki\Panel(
	'airvice_options',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Theme Options', 'airvice' ),
		'description' => esc_html__( 'All Header Options', 'airvice' ),
	]
);
//TopBar section
new \Kirki\Section(
	'top_bar',
	[
		'title'       => esc_html__( 'Top Bar', 'airvice' ),
		'description' => esc_html__( 'Header Top Bar', 'airvice' ),
		'panel'       => 'airvice_options',
		'priority'    => 160,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'topbar_switch',
		'label'       => esc_html__( 'Top Bar Enable or Disable', 'airvice' ),
		'description' => esc_html__( 'Top Bar Enable or Disable', 'airvice' ),
		'section'     => 'top_bar',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'airvice' ),
			'off' => esc_html__( 'Disable', 'airvice' ),
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'offer_note',
		'label'    => esc_html__( 'Offer Note', 'airvice' ),
		'section'  => 'top_bar',
		'default'  => esc_html__( 'We do not received extra charges', 'airvice' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'top_opening',
		'label'    => esc_html__( 'Opening Day', 'airvice' ),
		'section'  => 'top_bar',
		'default'  => esc_html__( 'Sunday to Thursday', 'airvice' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'top_address',
		'label'    => esc_html__( 'Address', 'airvice' ),
		'section'  => 'top_bar',
		'default'  => esc_html__( '28/4 Palmal, London', 'airvice' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'top_email',
		'label'    => esc_html__( 'Email', 'airvice' ),
		'section'  => 'top_bar',
		'default'  => esc_html__( 'info@sycho24.com', 'airvice' ),
		'priority' => 10,
	]
);

// Header
new \Kirki\Section(
	'header-1',
	[
		'title'       => esc_html__( 'Header', 'airvice' ),
		'description' => esc_html__( 'Header', 'airvice' ),
		'panel'       => 'airvice_options',
		'priority'    => 160,
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'logo',
		'label'       => esc_html__( 'Site Logo', 'airvice' ),
		'description' => esc_html__( 'Select Site Logo', 'airvice' ),
		'section'     => 'header-1',
		'default'     => get_template_directory_uri(). '/assets/img/logo/logo.png',
	]
);