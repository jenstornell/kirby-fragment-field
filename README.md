# Kirby Logic Field

*Version 1.0.0*

Inject your logic into a custom field.

**[- Installation instructions - ](docs/install.md)**

## Usage

### Blueprint

Set the `type` to `logic`:

```yaml
fields:
  my_logic_field:
    title: My logic field
    type: logic
```

### Code

In `config.php` put this code:

```php
kirby()->hook('pluginLogicField', function($field, $page) {
	echo $page->title();
	echo $field->name();
});
```

## Advanced (optional alternatives)

### Code with snippet

If you don't like inline html you can replace it with a [snippet](https://getkirby.com/docs/templates/snippets).

```php
kirby()->hook('pluginLogicField', function($field, $page) {
	snippet('some-logic', ['field' => $field, 'page' => $page]);
});
```

### As plugin

You can also use the code inside of a plugin. Then you need to force load the plugin first:

```php
kirby()->plugin('kirby-logic-field');

// Hook code goes here
```

## Requirements

- [**Kirby**](https://getkirby.com/) 2.4.1+

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/jenstornell/plugin-name/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.

## Credits

- [Jens Törnell](https://github.com/jenstornell)