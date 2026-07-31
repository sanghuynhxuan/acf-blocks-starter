<?php
/**
 * Plugin Name: ACF Blocks Starter
 * Description: A ready-to-use server-rendered ACF feature block.
 * Version: 1.0.0
 * Requires Plugins: advanced-custom-fields-pro
 */
if (! defined('ABSPATH')) { exit; }
add_action('acf/init', static function (): void {
    require_once __DIR__ . '/blocks/feature/fields.php';
    acf_register_block_type([
        'name' => 'sang-feature',
        'title' => __('Sang Feature', 'sang-acf'),
        'description' => __('Feature card rendered with ACF fields.', 'sang-acf'),
        'render_template' => __DIR__ . '/blocks/feature/render.php',
        'category' => 'widgets',
        'icon' => 'star-filled',
        'supports' => ['align' => ['wide', 'full']],
    ]);
});
