# html forms

```php
// php
<input type="text" name="brand" value="" />
<input type="text" name="model" value="" />
<input type="text" name="year" value="" />

$args = [];
$args['brand'] = $_POST['brand'];
$args['model'] = $_POST['model'];
$args['year'] = $_POST['year'];

$bicycle = new Bicycle($args);

// html
<input type="text" name="bicycle[brand]" value="" />
<input type="text" name="bicycle[model]" value="" />
<input type="text" name="bicycle[year]" value="" />

$args = $_POST['bicycle'];

$bicycle = new Bicycle($args);
```
