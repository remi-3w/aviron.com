<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aviron.com</title>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
</head>

<body class="m-0">
    <header class=" bg-dark text-white row m-auto p-3">
        <div class="container-fluid logo col-10 row">
            <img src="assets/Logo-SCA2000-Tortue-300x192.png" class="col-2">
            <h1 class="nameasso col-3">SCA 2000 EVRY AVIRON</h1>
            <p class="col-10">CLUB D'AVIRON - EVRY COURCOURONNES</p>
        </div>

        <div class=" col-2">
            <i class="iconefacebook iconify m-0" data-icon="et:facebook" data-inline="false"> </i>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Le club</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Activités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Découverte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Partenaire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Boutique</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
        <?php
        include('acceuil.php')

        ?>
    </div>

    <footer class="row  p-4 bg-danger text-white">
        <div class="col-4">
            <H3>Restez informé</H3>

            <div class="mb-3 p-2 row">
                <label for="exampleFormControlInput1" class="form-label text-dark">Insrivez vous à la newsletter</label>
                <div class="col-8  ">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="adresse email">

                </div>
                <input type="button " class="col-2 btn btn-outline-light" value="Go">
            </div>

        </div>
        </div>
        <div class="col-4  m-auto">
            <H3 class="text-center">Contactez nous</H3>
            <div class=" m-auto row  ">
                <i class=" iconify col-2 text-dark" data-icon="mdi-email-edit-outline" data-inline="false"> </i>
                <p class=" col-10">Contactez nous par écrit</p>
            </div>
            <div class=" m-auto row ">
                <i class=" iconify col-2 text-dark" data-icon="bi:telephone" data-inline="false"> </i>
                <p class=" col-10">01 64 97 05 15</p>
            </div>
            <div class="m-auto row ">
                <i class=" iconify col-2 text-dark" data-icon="wpf-geo-fence" data-inline="false"> </i>
                <p class=" col-10 ">1 chemin de halage, Parking Gare 91000 Evry-Courcouronnes</p>
            </div>
        </div>
        <div class="col-4 text-center">
            <H3>Suivez nous</H3>
            <i class="iconefacebook iconify m-0 text-dark" data-icon="et:facebook" data-inline="false"> </i>
        </div>


    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous">
</script>

</html>