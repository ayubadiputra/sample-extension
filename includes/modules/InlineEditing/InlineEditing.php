<?php
/**
 * SMPL_InlineEditing class file.
 *
 * @class   SMPL_InlineEditing
 * @package SMPL/modules
 */

/**
 * SMPL_InlineEditing class.
 *
 * The Inline Editing module class.
 */
class SMPL_InlineEditing extends ET_Builder_Module {

	/**
	 * Module's slug.
	 *
	 * @since 1.0.2
	 *
	 * @var string
	 */
	public $slug = 'smpl_inline_editing';

	/**
	 * VB support status.
	 *
	 * @since 1.0.2
	 *
	 * @var string
	 */
	public $vb_support = 'on';

	/**
	 * Module's credit.
	 *
	 * @since 1.0.2
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
	 * @since 1.0.2
	 *
	 * @return void
	 */
	public function init() {
		$this->name = esc_html__( 'Inline Editing', 'smpl-sample-extension' );
	}

	/**
	 * Define module's custom fields.
	 *
	 * @since 1.0.2
	 *
	 * @return array Custom module's fields definition.
	 */
	public function get_fields() {
		return array(
			'title'   => array(
				'label'           => esc_html__( 'Title', 'smpl-sample-extension' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text entered here will appear inside the module.', 'smpl-sample-extension' ),
				'toggle_slug'     => 'main_content',
			),
			'summary' => array(
				'label'           => esc_html__( 'Summary', 'smpl-sample-extension' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'smpl-sample-extension' ),
				'toggle_slug'     => 'main_content',
			),
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
	 * @since 1.0.2
	 *
	 * @param array  $attrs       Module's attributes.
	 * @param string $content     Module's content.
	 * @param string $render_slug Module's slug.
	 *
	 * @return string Module's rendered element.
	 */
	public function render( $attrs, $content = null, $render_slug ) {
		$title   = $this->props['title'];
		$summary = $this->props['summary'];
		$content = $this->props['content'];

		return sprintf(
			'<div class="smpl-inline-editing-block">
				<h2>%1$s</h2>
			</div>
			<div class="smpl-inline-editing-block">
				%2$s
			</div>
			<div class="smpl-inline-editing-block">
				%3$s
			</div>',
			$title,
			$summary,
			$content
		);
	}
}

new SMPL_InlineEditing();
