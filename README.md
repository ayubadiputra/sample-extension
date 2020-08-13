# Sample Extension
Sample Extension is a WordPress plugin that provide some code examples how Divi Builder features can be used on 3rd party extension. It's developed for demo, testing, and learning purpose.

## Development
After cloning the repository, install dependencies by running `yarn install`. The project was bootstrapped with [Create Divi Extension](https://github.com/elegantthemes/create-divi-extension). So, all [Create Divi Extension scripts](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/divi-scripts/template/README.md#available-scripts) are available on this plugin as well.

## Features
### Hello World (1.0.0)
Hello World is default module bootstrapped with Create Divi Extension.

### Custom Field (1.1.0)
Custom Field is a Divi Builder feature that allow 3rd party extension to register their handmade custom field. In this plugin, you can find some examples of custom fields, how to use them on custom module, and some useful info about custom field properties.
- Custom field examples can be found in `includes/fields`.
- The implementation can be found in `includes/modules/CustomFields`.

### Inline Editing Components (1.2.0)
Inline Editing Components are Divi Builder components that allow user to edit text directly on builder preview. So, the user no longer need to open settings modal to edit the text. It comes with 2 different elements and both of them can be accessed from `this.props.render` on React module component.
- `ETEditableBlock` for standard input
- `ETBuilderTinyMCE` for TinyMCE input
Both of components implementation can be found in `includes/modules/InlineEditing/InlineEditing.jsx`.

## Contributing
If you have feature suggestions or want to report bugs, [let me know](https://github.com/ayubadiputra/sample-extension/issues).