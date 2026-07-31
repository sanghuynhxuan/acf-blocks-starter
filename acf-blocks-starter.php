<?php
/**
 * Plugin Name: ACF Blocks Starter
 * Description: A modern Advanced Custom Fields block starter for flexible WordPress content experiences.
 * Version: 0.1.0
 * Author: Sang Huynh Xuan
 * License: GPL-2.0-or-later
 */

declare(strict_types=1);

namespace SangPortfolio;

if (! defined('ABSPATH')) {
    exit;
}

final class AcfBlocksStarterPlugin {
    public function __construct() {
        add_action('init', [$this, 'bootstrap']);
    }

    public function bootstrap(): void {
        do_action('sang_portfolio_acf_blocks_starter_ready');
    }
}

new AcfBlocksStarterPlugin();
