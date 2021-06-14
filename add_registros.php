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
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Início</a>
                        </li>
                    </ul>
                    <!-- <div class=" my-2 my-lg-0">
                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Sair</button>
                    </div> -->
                </div>
            </nav>

            <div class="row">
                <div class="col-md-9 mx-auto p-2 mt-5">

                    <div class="card mt-4 d-flex justify-content-start">

                            <div class="card-title mt-3 mx-auto">
                                <h2 class="display-4 text-dark text-uppercase">Adicionar registros</h2>
                            </div>

                            <hr>

                            <div class="card-body">

                            <form method="POST" action="valida_registros.php" class="row g-3">
                              <div class="col-md-7">
                                <label for="nomecompleto" class="form-label">Nome completo</label>
                                <input type="text" class="form-control" id="nomecompleto" name="nome_completo" placeholder="Nome Completo" required>
                              </div>

                              <div class="col-md-4">
                                <label for="contato" class="form-label">Contato</label>
                                <input type="text" class="form-control" id="contato" name="contato" placeholder="(00) 1234-5678" required>
                              </div>

                              <div class="col-md-7 mt-3">
                                <label for="email" class="form-label">E-Mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail" required>
                              </div>

                              <div class="col-md-4 mt-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
                              </div>
                    
                              <div class="col-12 mt-3">
                                <button class="btn btn-outline-primary btn-lg" type="submit">Enviar</button>
                              </div>
                              <!-- Verificação de registro e retorno com mensagem -->
                              <?php 
                              if($_GET && $_GET['form'] == 'sucesso'){?>
                              <div class="col-md-4 mt-3">
                              <p class="text-success"><i class="bi bi-check2"></i> Registro inserido com sucesso!</p>
                              </div>
                              <?php } else if ($_GET && $_GET['form'] == 'erro') {?>
                              <div class="col-md-4 mt-3">
                              <p class="text-danger"><i class="bi bi-x"></i> Erro ao inserir registro, tente novamente!</p>
                              </div>
                              <?php } ?>
                            </form>
                                
                            </div>
                    </div>
                </div>
            </div>

    </div> <!-- Container Fluid -->
</body>
</html>
