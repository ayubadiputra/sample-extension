// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './style.css';

class CustomFields extends Component {

  /**
   * Module slug.
   *
   * @since 1.1.0
   *
   * @type {string}
   */
  static slug = 'smpl_custom_fields';

  render() {
    const customFieldInput = this.props.custom_field_input;
    const customFieldInputTwo = 'on' === this.props.custom_field_select ? this.props.custom_field_input_two : '';

    return (
      <Fragment>
        <div className="smpl-custom-field-input">
          {customFieldInput}
        </div>
        <div className="smpl-custom-field-input">
          {customFieldInputTwo}
        </div>
      </Fragment>
    );
  }
}

export default CustomFields;
