<!DOCTYPE html>
<html lang="en">

<head>
    <base href="http://localhost/bootstrap/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/assets/css/style.css">


    <title><?= "Bootstrap" ?></title>
</head>

<body>
    <div class="container">
        <header>
            <?php require "nav.html.php" ?>
            <div class="p-5 bg-body-tertiary">
    <h1 class="text-body-emphasis">Lorem ipsum dolor sit.</h1>
    <p class="col-lg-8 fs-5 text-muted">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. At odit blanditiis cumque excepturi accusantium, cum beatae aspernatur maxime dolore dolorem provident perspiciatis labore, rem eaque eligendi magnam, corporis maiores totam.
    </p>
    <div class="d-inline-flex gap-2 mb-5">
        <button class="d-inline-flex align-items-center btn btn_orange btn-lg px-4" type="button">
            Voir plus
        </button>
    </div>
</div>
        </header>