<?php
/**
 * Main plugin file
 *
 * @package    Foundation_Grid_Helper
 * @version    1.0.0
 * @license    GPL-3.0+
 * @link       https://github.com/barryceelen/wp-foundation-grid-helper
 * @copyright  2018 Barry Ceelen
 */

/*
 * Plugin Name:       Foundation Grid Helper
 * Plugin URI:        https://github.com/barryceelen/wp-foundation-grid-helper
 * Description:       Visualizes the Foundation grid.
 * Author:            Barry Ceelen
 * Author URI:        https://github.com/barryceelen
 * Version:           1.0.0
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Domain Path:       /languages
 * Text Domain:       foundation-grid-helper
 * GitHub Plugin URI: https://github.com/barryceelen/wp-foundation-grid-helper
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( is_admin() ) {
	return;
}

// Add admin bar toggle.
add_action( 'admin_bar_menu', 'foundation_grid_helper_admin_bar_toggle', 9999 );

/**
 * Add admin bar toggle.
 *
 * @since 1.0.0
 * @param WP_Admin_Bar $wp_admin_bar The admin bar object.
 */
function foundation_grid_helper_admin_bar_toggle( WP_Admin_Bar $wp_admin_bar ) {

	$html = '';
	ob_start();
	include 'templates/admin-bar-menu-item.php';
	$html .= ob_get_clean();

	$wp_admin_bar->add_menu(
		array(
			'id'        => 'foundation-grid-helper',
			'title'     => '<span class="ab-icon"></span>',
			'href'      => false,
			'position'  => 0,
			'class'     => 'hover',
			'meta'      => array(
				'title'   => esc_html( 'Toggle Grid', 'foundation-grid-helper' ),
				'onclick' => "jQuery(window).trigger('toggle.foundationGridHelper')",
				'html'    => $html,
			),
		)
	);
}

