<?php
/**
 * Plugin Name: Hello Lab Rat Zero
 * Plugin URI: https://github.com/thunderrabbit/hello-lab-rat-zero
 * Description: Hand Made. The Way Nature Intended.
 * Version: 0.0.1
 * Author: Rob Nugen
 * Author URI: https://www.robnugen.com/
 * Text Domain: hello-lab-rat-zero
 */

# https://lab.robnugen.com/wp/wp-content/plugins/hello-lab-rat-zero.php
print_r("helloooo  Zero!! https://lab.robnugen.com/wp/wp-content/plugins/hello-lab-rat-zero.php");

# This should be the top line, to disallow anything (else) running from the URL above
defined('ABSPATH') || exit;

# `hlrz_` is plugin global namespace
function hlrz_admin_notice()
{
    echo '<div class="notice notice-success"><p>'
        . esc_html__('Hello from Lab Rat Zero!', 'hello-lab-rat-zero')
        . '</p></div>';
}
add_action('admin_notices', 'hlrz_admin_notice');
