# Kirby Logic Field

*Version 1.0.0*

Add a custom field without building it.

**[Installation instructions](docs/install.md)**

## Usage

### Blueprint

Use the type logic:

```yaml
fields
  my_field:
    title: My title
    type: logic
```

### Code

In `config.php` put this code:

```php
<?php
kirby()->hook('pluginLogicField', function($field, $page) { ?>
	<strong>Title:</strong><?php echo $page->title(); ?><br>
	<strong>Field name:</strong><?php echo $field->name(); ?>
<?php }); ?>
```

If you don't like inline html you can replace it with a snippet.

You can also use the code inside of a plugin. In that case you need to put this code before the hook:

```php
kirby()->plugin('kirby-logic-field');
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