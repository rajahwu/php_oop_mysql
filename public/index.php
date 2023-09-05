<?php require_once('../private/initialize.php'); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div>
    <div class="menu text-center">
        <h1 class="text-lg">php opp mysql training</h1>
        <a class="btn" href="../sites/chain_gang/public/">project</a>
    </div>
    
    <div class="container card">
        <h2 class="card-title">Sections</h2>
        <div class="card-body prose">
            <?php include 'sections/index.php' ?>
        </div>
    </div>
    
</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>