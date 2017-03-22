# Kirby Logic Field

*Version 1.2 [Changelog](docs/changelog.md)*

Inject your logic into a custom field.

**[Installation instructions](docs/install.md)**

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

**As a config**

In `config.php` (or a plugin):

```php
c::set('plugin.logic.field', function($field, $page) {
  return '<p>' . $field->name() . ' ' . $page->title() . '</p>';
});
```

**As a snippet**

If you don't like inline html you can replace it with a [snippet](https://getkirby.com/docs/templates/snippets).

```php
c::set('plugin.logic.field', function($field, $page) {
  return snippet('logic-' . $page->intendedTemplate(), ['field' => $field, 'page' => $page], true);
});
```

In most cases the filename should be something like `logic-default.php` for the default template.

You have access to `$field` and `$page` in the snippet.

## Requirements

- [**Kirby**](https://getkirby.com/) 2.4.1+

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/jenstornell/plugin-name/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.

## Credits

- [Jens Törnell](https://github.com/jenstornell)