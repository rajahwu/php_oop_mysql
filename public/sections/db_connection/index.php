<?php include_once '../../../private/initialize.php' ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div class="card">
        <h2 class="card-title">db_connection</h2>
        <div class="card-body prose">
         <?php
        $parsedown = new Parsedown();
        echo $parsedown->text(file_get_contents('notes/db_create.md'));
        ?>
        </div>
</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>