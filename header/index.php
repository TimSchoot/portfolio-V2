<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../style.css" rel="stylesheet">
</head>
<body>

    <header>
        <nav class="navbar bg-primary bg-body-tertiary fixed-top" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../welkom/index.php">Tim van der Schoot</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Navigatie</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <div class="list-group">
                                <a href="../over/index.php" class="list-group-item list-group-item-action">Over mij</a>
                                <a href="../socials/index.php" class="list-group-item list-group-item-action">Contact</a>
                                <a href="http://github.com/TimSchoot" class="list-group-item list-group-item-action">Github</a>
                            </div><br>
                            <li class="nav-item  dropdown">
                                <a class="nav-link list-group dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <B>Projecten</B>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" target="_blank" href="http://rekenen.timschoot.nl/">Reken website</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" target="_blank" href="http://onepager.timschoot.nl">Onepager</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" target="_blank" href="http://irritanteonepager.timschoot.nl">Irritante onepager</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" target="_blank" href="http://webgame.timschoot.nl">Webgame(kleine bug)</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" target="_blank" href="http://rekenrace.timschoot.nl">Reken race</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" target="_blank" href="http://webshop.timschoot.nl">webshop(niet af)</a></li>
                                </ul>
                            </li>
                        </ul>
                        <br>
                        <form class="d-flex mt-3" aria-disabled="true" role="search">
                            <input disabled class="form-control me-2" type="search" placeholder="Search (buiten gebruik)" aria-label="Search">
                            <button disabled class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
