<?php
if (! defined('ABSPATH')) { exit; }
$title = (string) (get_field('title') ?: __('A feature worth highlighting', 'sang-acf'));
$body = (string) (get_field('body') ?: __('Use ACF fields to give editors structured control of this block.', 'sang-acf'));
$link = get_field('link');
?>
<section class="sang-feature <?php echo esc_attr($block['className'] ?? ''); ?>">
  <h2><?php echo esc_html($title); ?></h2>
  <p><?php echo esc_html($body); ?></p>
  <?php if (is_array($link) && ! empty($link['url'])) : ?>
    <a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['title'] ?: __('Learn more', 'sang-acf')); ?></a>
  <?php endif; ?>
</section>
