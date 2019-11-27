<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= URLROOT; ?>/public/css/bootstrap-cerulean.css">
    <link rel="stylesheet" href="<?= URLROOT; ?>/public/css/custom-cerulean.css">
    <title> <?= SITENAME; ?> </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <a class="navbar-brand" href="<?= URLROOT; ?>/public">DISBURSEMENT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= URLROOT; ?>/public">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URLROOT; ?>/public/list">Preview disbursement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URLROOT; ?>/public/tasks">Create Disbursement</a>
                </li>
            </ul>
        </div>
    </nav>