<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link href="assets/css/general.css" rel="stylesheet">
        <link href="<?= $link_css ?>" rel="stylesheet">

        <?php if(isset($link_css_2)): ?>
            <link href="<?= $link_css_2 ?>" rel="stylesheet">
        <?php endif ?>

        <title> <?= $title ?> </title>
    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/images/Tech&go(1).png" width="80" alt="logo" >
                    </a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item mx-3">
                                <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="boutique.php">Boutique</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a onclick="getCartItems()" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart " viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <?php include "views/modalCart.php";?>