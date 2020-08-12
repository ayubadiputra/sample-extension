<?php
/**
 * SMPL_HelloWorld class file.
 *
 * @class   SMPL_HelloWorld
 * @package SMPL/modules
 */

/**
 * SMPL_HelloWorld class.
 *
 * The Hello World module class.
 */
class SMPL_HelloWorld extends ET_Builder_Module {

	/**
	 * Module's slug.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $slug = 'smpl_hello_world';

	/**
	 * VB support status.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $vb_support = 'on';

	/**
	 * Module's credit.
	 *
	 * @since 1.0.0
	 *
	 * @var array
	 */
	protected $module_credits = array(
		'module_uri' => 'https://github.com/ayubadiputra/sample-extension',
		'author'     => 'Ayub Adiputra',
		'author_uri' => 'https://www.ayubna.com/',
	);

	/**
	 * Initiate module's definition.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function init() {
		$this->name = esc_html__( 'Hello World', 'smpl-sample-extension' );
	}

	/**
	 * Define module's custom fields.
	 *
	 * @since 1.0.0
	 *
	 * @return array Custom module's fields definition.
	 */
	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'smpl-sample-extension' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'smpl-sample-extension' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	/**
	 * Render module's element.
	 *
	 * @since 1.0.0
	 *
	 * @param array  $attrs       Module's attributes.
	 * @param string $content     Module's content.
	 * @param string $render_slug Module's slug.
	 *
	 * @return string Module's rendered element.
	 */
	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf(
			'<h1>%1$s</h1>',
			$this->props['content']
		);
	}
}

new SMPL_HelloWorld();
