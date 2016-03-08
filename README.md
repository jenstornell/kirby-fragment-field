# Kirby Fragment Field

## For custom panel stuff, use a snippet

I found myself creating new panel fields from scratch every time I needed something in the panel. With this plugin you can instead just call a snippet.

## Instructions

Place the fragment field in `site/fields` first.

1. Create a snippet file.
1. Add css and javascript, if needed.
1. Add the snippet in your blueprint.

## 1. Create a snippet file

The `site/snippets` folder is the default path, but you can create your snippet anywhere by changing this config.php:

```
c::set( 'fragment.snippet.uri', kirby()->roots()->snippets() );
```

### `$field` object

All the field variables are available through the `$field` object and you can use them like this:

```php
echo $field->type();
```

### `$page` object

All the page variables are available through the `$page` object and you can use them like this:

```php
echo $page->title();
```

## 2. Add css and javascript, if needed

You can add css and javascript and it's done inside the snippet file, like this:

```php
// Single css file
echo $field->js( 'assets/css/style.css' );

// Single js file
echo $field->js( 'assets/css/script.js' );

// Multiple css files
echo $field->css( array(
    'assets/css/style1.css',
    'assets/css/style2.css'
));

// Multiple js files
echo $field->js( array(
    'assets/css/script1.js',
    'assets/css/script2.js'
));
```

If you don't like the root urls of the assets, you can change them in your config.php:

```php
c::set( 'fragment.css.uri', u() );
c::set( 'fragment.js.uri', u() );
```

## 3. Blueprint

```yaml
fields:
  my_fragment:
    type: fragment
    uri: my-fragment
```

- Key can be `my_fragment` or something else of your choice.
- Type needs to be `fragment`.
- The `uri` is the location of your snippet file.

If the `uri` is `my-fragment`, the by default it will look for `site/snippets/my-fragment.php`. You can change the path as described in previous steps.

## Requirements

This plugin is tested with Kirby 2.3 but it will probably work with 2.2 as well.