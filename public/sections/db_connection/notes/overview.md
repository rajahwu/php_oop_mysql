# overview

```php
// Procedural style
$db = mysqli_connect($server, $user, $pwd, $db_name);

$result = mysqli_query($db, $sql);

// Object-oriented style
$db = new mysqli($server, $user, $pwd, $db_name);


// mysqli_query($db, $sql)
$db->query($sql);

// mysqli_real_escape_string($db, $string)
$db->escape_string($string);

// mysqli_affected_rows($db)
$db->affected_rows;

// mysqli_insert_id($db)
$db->insert_id;

$db = mysqli_connect($server, $user, $pwd, $db_name);
$result = $db->query($sql);

// mysqli_fetch_assoc($result)
$result->fetch_assoc(); // associative arry
$result->fetch_row(); // basic array
$result->fetch_array(); // assoc, row, or both
$result->fetch_object(); // crude object

// mysqli_Free_result($result)
$result->free();

// mysqli_num_rows($result)
$result->num_rows;

```
