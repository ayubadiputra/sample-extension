<?php
/**
 * SMPL_SampleExtension class file.
 *
 * @class   SMPL_SampleExtension
 * @package SMPL
 */

/**
 * SMPL_SampleExtension class.
 *
 * The main extension class.
 */
class SMPL_SampleExtension extends DiviExtension {

	/**
	 * The gettext domain for the extension's translations.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $gettext_domain = 'smpl-sample-extension';

	/**
	 * The extension's WP Plugin name.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $name = 'sample-extension';

	/**
	 * The extension's version
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $version = '1.0.0';

	/**
	 * SMPL_SampleExtension constructor.
	 *
	 * @since 1.0.0
	 *
	 * @param string $name Extension's name/slug.
	 * @param array  $args Argument for the extension classes.
	 */
	public function __construct( $name = 'sample-extension', $args = array() ) {
		$this->plugin_dir     = plugin_dir_path( __FILE__ );
		$this->plugin_dir_url = plugin_dir_url( $this->plugin_dir );

		parent::__construct( $name, $args );
	}
}

new SMPL_SampleExtension();
