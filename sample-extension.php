<?php
/**
 * Plugin Name: Sample Extension
 * Plugin URI:  https://github.com/ayubadiputra/sample-extension
 * Description: Sample Extension is a WordPress plugin that provide some code examples how Divi Builder features can be used on 3rd party extension. It's developed for demo, testing, and learning purpose.
 * Version:     1.0.2
 * Author:      Ayub Adiputra
 * Author URI:  https://www.ayubna.com/
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: smpl-sample-extension
 * Domain Path: /languages
 *
 * Sample Extension is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Sample Extension is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Sample Extension. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
 *
 * @package SMPL
 */

/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function smpl_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-smpl-sampleextension.php';
}
add_action( 'divi_extensions_init', 'smpl_initialize_extension' );
