// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './style.css';

class InlineEditing extends Component {

  /**
   * Module slug.
   *
   * @since 1.0.2
   *
   * @type {string}
   */
  static slug = 'smpl_inline_editing';

  render() {
    const Content = this.props.content;

    /**
     * ETEditableBlock
     *
     * Inline editing element for standard input. Accessible from `this.props.render`.
     *
     * @prop {string} text      Text value that will be displayed & edited.
     * @prop {string} tagName   HTML tag as text wrapper element.
     * @prop {string} name      Field name.
     * @prop {string} className Additional class name for the element.
     */
    const ETEditableBlock = this.props.render.ETEditableBlock;

    /**
     * ETEditableBlock
     *
     * Inline editing element for TinyMCE. Accessible from `this.props.render`.
     *
     * @prop {string} name    Field name.
     * @prop {string} content Text value that will be displayed & edited.
     */
    const ETBuilderTinyMCE = this.props.render.ETBuilderTinyMCE;

    return (
      <Fragment>
        <div class="smpl-inline-editing-block">
          <ETEditableBlock
            text={this.props.title}
            tagName="h2"
            name="title"
          />
        </div>
        <div class="smpl-inline-editing-block">
          <ETBuilderTinyMCE
            content={this.props.summary}
            name="summary"
          />
        </div>
        <div class="smpl-inline-editing-block">
          <Content/>
        </div>
      </Fragment>
    );
  }
}

export default InlineEditing;
