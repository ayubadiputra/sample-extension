// External Dependencies
import React, { Component, Fragment } from 'react';
import {
  get,
  keys,
  map,
} from 'lodash';

// Internal Dependencies
import './style.css';

class Select extends Component {

  /**
   * Field slug.
   *
   * @since 1.0.1
   *
   * Field `slug` is the main field identifier. We use field `slug` to define option
   * field `type` on module definition.
   *
   * @type {string}
   */
  static slug = 'smpl_select';

  /**
   * Handle selected value change.
   *
   * @since 1.0.1
   *
   * @param {object} event The event that triggered this action.
   */
  _onChange = (event) => {
    this.props._onChange(this.props.name, event.target.value);
  }

  /**
   * Render options on select field.
   *
   * @since 1.0.1
   *
   * @return {object}
   */
  _renderOptions() {
    // All the field defintion can be found in `this.props.fieldDefinition`.
    const optionsList = get(this.props, ['fieldDefinition', 'options_list'], {});
    const optionKeys = keys(optionsList);

    const options =
      map(optionKeys, key => {
        return (
          <option key={`smpl-option-${key}`} value={key}>
            {get(optionsList, key, '')}
          </option>
        );
      });

    return options;
  }

  render() {
    /**
     * Available props for the custom field type:
     *
     * - name:                Field name. It's generated based on active preview mode
     *                        automatically. For example, on tablet preview, it returns
     *                        `field_name_tablet instead of `field_name`.
     * - value:               Field value. It stores value based on active preview mode.
     * - content:             Field content.
     * - default:             Field default value. It stores default value based on active preview mode.
     * - fieldDefinition:     All the field definition defined on the module.
     * - activeTabMode:       Active tab mode. Very useful when we're on Wireframe mode.
     * - previewMode:         Active preview mode.
     * - isResponsiveEnabled: Responsive enabled status.
     * - isHoverEnabled:      Hover enabled status.
     * - moduleSettings:      All module settings values. Very useful when we want to
     *                        get value from other field settings.
     * - _onChange:           {
     *   The _onChange() method is a Divi Builder method to handle property value change.
     *
     *   @param {string} name  Field name. Use `this.props.name` to get the actual field
     *                         name automatically. See `name` prop explanation above.
     *   @param {string} value Field value. Depend on the value that we want to save.
     *   @param {string} type  Field type. By default, it will use field `type`.
     * }
     */
    const {
      name,
      value,
    } = this.props;

    return(
      <Fragment>
        <select
          id={`smpl-${name}`}
          name={name}
          className='smpl-select'
          value={value}
          onChange={this._onChange}
        >
          {this._renderOptions()}
        </select>
      </Fragment>
    );
  }
}

export default Select;
