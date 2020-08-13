<?php
/**
 * SMPL_CustomFields class file.
 *
 * @class   SMPL_CustomFields
 * @package SMPL/modules
 */

/**
 * SMPL_CustomFields class.
 *
 * The Custom Field module class.
 */
class SMPL_CustomFields extends ET_Builder_Module {

	/**
	 * Module's slug.
	 *
	 * @since 1.0.1
	 *
	 * @var string
	 */
	public $slug = 'smpl_custom_fields';

	/**
	 * VB support status.
	 *
	 * @since 1.0.1
	 *
	 * @var string
	 */
	public $vb_support = 'on';

	/**
	 * Module's credit.
	 *
	 * @since 1.0.1
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
	 * @since 1.0.1
	 *
	 * @return void
	 */
	public function init() {
		$this->name = esc_html__( 'Custom Fields', 'smpl-sample-extension' );
	}

	/**
	 * Define module's custom fields.
	 *
	 * @since 1.0.1
	 *
	 * The code below is an example of how to use and define custom field type. As usual,
	 * we need to define "mandatory" Divi Builder field properties such as `label`, `type`,
	 * `description`, etc. We can also add additional common field properties as well such
	 * as `mobile_options` to enable responsive option, `affects` to set dependecy fields,
	 * `hover_options` to enable hover option, etc.
	 *
	 * In addition, we can define any additional properties to use on our custom field
	 * React component. For example, we can add `options_list` property on custom field
	 * select type to store all options list.
	 *
	 * @return array Custom module's fields definition.
	 */
	public function get_fields() {
		return array(
			'custom_field_input'     => array(
				'label'           => esc_html__( 'Custom Field - Input', 'smpl-sample-extension' ),
				'type'            => 'smpl_input',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text entered here will appear inside the module.', 'smpl-sample-extension' ),
				'toggle_slug'     => 'main_content',
			),
			'custom_field_select'    => array(
				'label'           => esc_html__( 'Custom Field - Select', 'smpl-sample-extension' ),
				'type'            => 'smpl_select',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text selected here will open Custom Field - Input Two.', 'smpl-sample-extension' ),
				'toggle_slug'     => 'main_content',
				'options_list'    => array(
					'off' => 'Off',
					'on'  => 'On',
				),
				'default'         => 'off',
				'affects'         => array(
					'custom_field_input_two',
				),
			),
			'custom_field_input_two' => array(
				'label'           => esc_html__( 'Custom Field - Input Two', 'smpl-sample-extension' ),
				'type'            => 'smpl_input',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text entered here will appear inside the module.', 'smpl-sample-extension' ),
				'toggle_slug'     => 'main_content',
				'depends_show_if' => 'on',
			),
		);
	}

	/**
	 * Render module's element.
	 *
	 * @since 1.0.1
	 *
	 * @param array  $attrs       Module's attributes.
	 * @param string $content     Module's content.
	 * @param string $render_slug Module's slug.
	 *
	 * @return string Module's rendered element.
	 */
	public function render( $attrs, $content = null, $render_slug ) {
		$custom_field_input     = $this->props['custom_field_input'];
		$custom_field_input_two = 'on' === $this->props['custom_field_select'] ? $this->props['custom_field_input_two'] : '';

		return sprintf(
			'<div className="smpl-custom-field-input">
				%1$s
			</div>
			<div className="smpl-custom-field-input">
				%2$s
			</div>',
			$custom_field_input,
			$custom_field_input_two
		);
	}
}

new SMPL_CustomFields();
