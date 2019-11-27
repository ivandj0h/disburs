<?php require_once APPROOT . '/src/views/include/header.php'; ?>
<div class="container">
    <div class="jumbotron">
        <h3 class="display-5">DISBURSEMENT</h3>
        <p class="lead">This is a Small Services that Connected to 3rd party API called slightly-big Flip. 
        <br />The purpose of this Services is to send the disbursement data to the 3rd party API (slightly-big Flip) & save it to the DB</p>
        <hr class="my-4">
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="<?= URLROOT; ?>/public/list" role="button">Preview Disbursement</a> 
            <a class="btn btn-success btn-sm" href="<?= URLROOT; ?>/public/create" role="button">Create Disbursement</a>
        </p>
    </div>

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>
</div>