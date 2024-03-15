<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

add_action( 'after_setup_theme', 'velocityiklan_theme_setup', 9 );
function velocityiklan_theme_setup() {
	
	if (class_exists('Kirki')) :

		Kirki::add_panel('panel_vmpc', [
			'priority'    => 10,
			'title'       => esc_html__('Velocity Marketplace', 'justg'),
			'description' => esc_html__('', 'justg'),
		]);
		
		Kirki::add_section('section_headervmpc', [
			'panel'    => 'panel_header',
			'title'    => __('Header Image', 'justg'),
			'priority' => 10,
		]);
		Kirki::add_field('justg_config', [
			'type'        => 'image',
			'settings'    => 'header_image',
			'label'       => esc_html__('Image', 'kirki'),
			'description' => esc_html__('', 'kirki'),
			'section'     => 'section_headervmpc',
		]);

		///Section Banner
		Kirki::add_section('section_bannervmpc', [
			'panel'    => 'panel_vmpc',
			'title'    => __('Banner Iklan', 'justg'),
			'priority' => 10,
		]);
		Kirki::add_field('justg_config', [
			'type'        => 'image',
			'settings'    => 'single_iklan_banner',
			'label'       => esc_html__('Single Iklan', 'kirki'),
			'description' => esc_html__('', 'kirki'),
			'section'     => 'section_bannervmpc',
		]);

	endif;

}