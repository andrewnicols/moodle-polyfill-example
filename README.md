# moodle-polyfill-example

Moodle 3.3 supports PHP 5.6 and PHP 7.0
Moodle 3.4 supports PHP 7.0 and up.

PHP 7.0 introduced the concepts of:
* return type declarations
* type declartions for scalar types (int, float, string, bool)

Many contrib plugins support a number of Moodle versions with a single of their plugin.

To support those plugins we can provide a legacy provider which is only on Moodle 3.3, and which the standard providers extend.

From Moodle 3.4 and 3.5 we don't want to include the legacy content - we want to get the benefits of the type declarations.

We can suggest they follow the pattern in plugin.php to achieve one version of the plugin on 33, 34, and any other version.

## Testing

Moodle 3.3 support PHP 5.6 and PHP 7.0 so must support both:
```
/path/to/php56 test33.php
/path/to/php70 test33.php
```

Moodle 3.4 and up support PHP 7.0 onwards:
```
/path/to/php70 test34.php
```
