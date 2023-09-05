<?php include_once '../private/initialize.php'; ?>
<?php
$parsedown = new Parsedown();
echo $parsedown->text(file_get_contents('sections/db_connection/notes/db_create.md'));

?>
<!-- <h2>db_connection</h2> -->

<a class="btn" href="./sections/db_connection/">db_connection</a>
