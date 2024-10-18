# Flexible Content Extended for Advanced Custom Fields

## Editing Layouts

The button to collapse the layouts are changed to an edit button (pencil icon). When you click the edit button or double click the layout, the layout's field will be opened in a modal window.

### Image Conventions

-   They should be named based on the layout's name (`text_block`) with underscores converted to dashes (`text-block.jpg`).

### Image Location

Images should be placed in your theme. By default, images are located here: `THEME/lib/admin/images/acf-flexible-content-extended`.

Also note that you can filter this path, but it **MUST** be in your theme:

```php
add_filter( 'acf-flexible-content-extended.images_path', $path );

//Ex:
add_filter( 'acf-flexible-content-extended.images_path', function() {
    return 'img/acf';
});


```

**NOTE:** The path should not have a trailing beginning or trailing slash!

Additionally, you could filter all keys and/or images:

```php
add_filter( 'acf-flexible-content-extended.images', $images );
```
