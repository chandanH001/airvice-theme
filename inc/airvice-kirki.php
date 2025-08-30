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
		'label'    => esc_html__( 'Offer Note (Topbar & OffCanvas)', 'airvice' ),
		'section'  => 'top_bar',
		'default'  => esc_html__( 'We do not received extra charges', 'airvice' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'top_opening',
		'label'    => esc_html__( 'Opening Day (Topbar & OffCanvas)', 'airvice' ),
		'section'  => 'top_bar',
		'default'  => esc_html__( 'Sunday to Thursday', 'airvice' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'top_address',
		'label'    => esc_html__( 'Address (Topbar & OffCanvas)', 'airvice' ),
		'section'  => 'top_bar',
		'default'  => esc_html__( '28/4 Palmal, London', 'airvice' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'top_email',
		'label'    => esc_html__( 'Email (Topbar & OffCanvas)', 'airvice' ),
		'section'  => 'top_bar',
		'default'  => esc_html__( 'info@sycho24.com', 'airvice' ),
		'priority' => 10,
	]
);

// Header
new \Kirki\Section(
	'header_1',
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
		'section'     => 'header_1',
		'default'     => get_template_directory_uri(). '/assets/img/logo/logo.png',
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'right_switch',
		'label'       => esc_html__( 'Right Header Switch Enable or Disable', 'airvice' ),
		'description' => esc_html__( 'Right Switch Enable or Disable', 'airvice' ),
		'section'     => 'header_1',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'airvice' ),
			'off' => esc_html__( 'Disable', 'airvice' ),
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'phone_number',
		'label'    => esc_html__( 'Phone Number', 'airvice' ),
		'section'  => 'header_1',
		'default'  => esc_html__( '02 (555) 520 890', 'airvice' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'button_title',
		'label'    => esc_html__( 'Button Title', 'airvice' ),
		'section'  => 'header_1',
		'default'  => esc_html__( 'Get Quote', 'airvice' ),
		'priority' => 10,
	]
);


new \Kirki\Field\URL(
	[
		'settings' => 'button_url',
		'label'    => esc_html__( 'Button URL', 'airvice' ),
		'section'  => 'header_1',
		'default'  => 'https://yoururl.com/',
		'priority' => 10,
	]
);

//off canvus 
new \Kirki\Section(
	'offcanvus',
	[
		'title'       => esc_html__( 'Off Canvus', 'airvice' ),
		'description' => esc_html__( 'Header', 'airvice' ),
		'panel'       => 'airvice_options',
		'priority'    => 160,
	]
);

new \Kirki\Field\URL(
    [
        'settings' => 'fa_social_offcanvas',
        'label'    => esc_html__('Facebook URL', 'solub'),
        'section'  => 'offcanvus',
        'default'  => 'https://facebook.com/',
        'priority' => 10,
    ]
);
new \Kirki\Field\URL(
    [
        'settings' => 'tw_social_offcanvas',
        'label'    => esc_html__('Twitter URL', 'solub'),
        'section'  => 'offcanvus',
        'default'  => 'https://facebook.com/',
        'priority' => 10,
    ]
);
new \Kirki\Field\URL(
    [
        'settings' => 'ins_social_offcanvas',
        'label'    => esc_html__('Instagram URL', 'solub'),
        'section'  => 'offcanvus',
        'default'  => 'https://instagram.com/',
        'priority' => 10,
    ]
);

new \Kirki\Field\URL(
    [
        'settings' => 'google_social_offcanvas',
        'label'    => esc_html__('Google URL', 'solub'),
        'section'  => 'offcanvus',
        'default'  => 'https://google.com/',
        'priority' => 10,
    ]
);