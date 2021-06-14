<?php

    include "class_sql.php";
    $conexao = new QuerySQL();

    if(!empty($_GET) && !empty($_GET['del'])) {
        $conexao->deletarRegistros($_GET['del']);
        header('Location: registros.php');
    } else if (!empty($_GET) && !empty($_GET['edit'])) { ?>

    <!-- Entrar no banco de dados e buscar usuário -->
<?php
    $edit_id = $_GET['edit'];
    $host = 'localhost';
    $user = 'root';
    $pass = 'admin';
    $bd = 'crud_basico';

    
    $dsn = 'mysql:host='. $host.'; ';
    $dsn .= 'dbname='. $bd.'; ';

    try {

        $conexao = new PDO($dsn, $user, $pass);

        $query = "SELECT * FROM crud_registros WHERE idcrud_registros = $edit_id";

        foreach($conexao->query($query) as $key => $value){

        }

    } catch (PDOException $e) {
            echo 'Erro: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage();
        }//Fim conectar

?>

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
                                <h2 class="display-4 text-dark text-uppercase">Atualizar registro</h2>
                            </div>

                            <hr>

                            <div class="card-body">

                            <form method="POST" action="registros.php?updateid=<?= $value[0] ?>" class="row g-3">

                              <div class="col-md-7">
                                <label for="nomecompleto" class="form-label">Nome completo</label>
                                <input type="text" class="form-control" id="nomecompleto" name="nome_completo" placeholder="Nome Completo" value="<?php echo $value[1] ?>" required>
                              </div>

                              <div class="col-md-4">
                                <label for="contato" class="form-label">Contato</label>
                                <input type="text" class="form-control" id="contato" name="contato" placeholder="(00) 1234-5678" value="<?php echo $value[2] ?>" required>
                              </div>

                              <div class="col-md-7 mt-3">
                                <label for="email" class="form-label">E-Mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail" value="<?php echo $value[3] ?>" required>
                              </div>

                              <div class="col-md-4 mt-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="text" class="form-control" id="senha" name="senha" placeholder="Senha" value="<?php echo $value[4] ?>" required>
                              </div>
                    
                              <div class="col-12 mt-3">
                                <button class="btn btn-outline-primary btn-lg" type="submit">Enviar</button>
                              </div>
                              <!-- Verificação de registro e retorno com mensagem -->
                            </form>
                                
                            </div>
                    </div>
                </div>
            </div>

    </div> <!-- Container Fluid -->
</body>
</html>

    <?php } else { ?>

<?php 

    if(!empty($_POST) && !empty($_GET) && !empty($_POST['nome_completo']) && !empty($_POST['contato']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        $id = $_GET['updateid'];
        $nome_completo = $_POST['nome_completo'];
        $contato = $_POST['contato'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $conexao->atualizarRegistro($id, $nome_completo, $contato, $email, $senha);
        header('Location: registros.php');
    }

?>

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
                                <h2 class="display-4 text-dark text-uppercase">Registros</h2>
                            </div>

                            <hr>

                            <div class="card-body">

                            <table class="table table-striped table-light">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome Completo</th>
                                    <th scope="col">Contato</th>
                                    <th scope="col">E-Mail</th>
                                    <th scope="col"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 

                                    $conexao->recuperarRegistros();

                                ?>
                                </tbody>
                                </table>
                                
                            </div>
                    </div>
                </div>
            </div>

    </div> <!-- Container Fluid -->
</body>
</html>
<?php } ?>