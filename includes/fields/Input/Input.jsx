// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';

class Input extends Component {
  static slug = 'smpl_input';

  /**
   * Handle input value change.
   *
   * @since 1.0.0
   *
   * @param {object} event The event that triggered this action.
   */
  onChange = (event) => {
    this.props._onChange(this.props.name, event.target.value);
  }

  render() {
    return (
      <input
        id={`smpl-input-${this.props.name}`}
        name={this.props.name}
        value={this.props.value}
        type='text'
        className='smpl-input'
        onChange={this.onChange}
        placeholder='Your text here ...'
      />
    );
  }
}

export default Input;
