<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>Crud Básico</title>
</head>
<body>
    <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                <a class="navbar-brand text-white text-uppercase" href="#">Crud Básico</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Início</a>
                        </li>
                    </ul>
                    <!-- <div class=" my-2 my-lg-0">
                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Sair</button>
                    </div> -->
                </div>
            </nav>

            <div class="row">
                <div class="col-md-6 mx-auto p-2 mt-5">

                    <div class="card mt-4 d-flex justify-content-start">

                            <div class="card-title mt-3 mx-auto">
                                <h2 class="display-4 text-dark text-uppercase">Crud Básico com PHP</h2>
                            </div>

                            <hr>

                            <div class="card-body">

                                <div class="row mx-auto p-1">

                                    <div class="col-md-6 d-flex justify-content-center">
                                        <a class="text-decoration-none btn btn-outline-primary" href="registros.php">
                                            <h1 class="display-2"><i class="bi bi-list-check"></i></h1>
                                        </a>    
                                    </div>

                                    <div class="col-md-6 d-flex justify-content-center">
                                        <a class="text-decoration-none btn btn-outline-success" href="add_registros.php">
                                            <h1 class="display-2"><i class="bi bi-plus"></i></h1>
                                        </a>
                                    </div>

                                </div>
                            </div>

                    </div>
                </div>
            </div>

    </div> <!-- Container Fluid -->
</body>
</html>