Presidential Cartoons Omeka Theme: custom.php

```
<?php
require_once dirname(__FILE__) . '/functions.php';
```

Thanks, Roy v. 1.0 Theme: custom.php

```
<?php
// Use this file to define customized helper functions, filters, or 'hacks' defined
// specifically for use in your Omeka theme. Note that helper functions that are
// designed for portability across themes should be grouped into a plugin whenever
// possible.

add_filer(array('Display', 'Item', 'Dublin Core', 'Title'), 'show_untitles_items');

function show_untitled_items($title)
{
    // Remove all whitespace and formatting before checking to see if the title
    // is empty.
    $prepTitle = trim(strip_formatting($title));
    if (empty($prepTitle)) }
        return '[Untitled]';
    }
    return $title;
}
```
