<?php

//panel
new \Kirki\Panel(
	'airvice_options',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Header Options', 'airvice' ),
		'description' => esc_html__( 'All Header Options', 'airvice' ),
	]
);
//section
new \Kirki\Section(
	'top_bar',
	[
		'title'       => esc_html__( 'Top Bar', 'airvice' ),
		'description' => esc_html__( 'Header Top Bar', 'airvice' ),
		'panel'       => 'airvice_options',
		'priority'    => 160,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'text_setting',
		'label'    => esc_html__( 'Offer Note', 'airvice' ),
		'section'  => 'top_bar',
		'default'  => esc_html__( 'We do not received extra charges', 'airvice' ),
		'priority' => 10,
	]
);