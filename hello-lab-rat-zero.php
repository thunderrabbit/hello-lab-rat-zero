<?php
/**
 * Plugin Name: Hello Lab Rat Zero
 * Plugin URI: https://github.com/thunderrabbit/hello-lab-rat-zero
 * Description: Hand Made. The Way Nature Intended.
 * Version: 0.0.2
 * Author: Rob Nugen
 * Author URI: https://www.robnugen.com/
 * Text Domain: hello-lab-rat-zero
 * Domain Path: /languages
 */

# This disallows plugin running at https://lab.robnugen.com/wp/wp-content/plugins/hello-lab-rat-zero.php
defined('ABSPATH') || exit;

# `hlrz_` is plugin global namespace
function hlrz_shortcode()
{
    return esc_html__('Lab Rat Zero was here.', 'hello-lab-rat-zero');
}
add_shortcode('labrat', 'hlrz_shortcode');
