<?php

    class QuerySQL {
        private $host = 'localhost';
        private $user = 'root';
        private $pass = 'admin';
        private $bd = 'crud_basico';
        private $lista_registros = array();

        public function inserirRegistros ($value1, $value2, $value3, $value4) {

            try { 
            $dsn = 'mysql:host='. $this->host.'; ';
            $dsn .= 'dbname='. $this->bd.'; ';

            $conexao = new PDO($dsn, $this->user, $this->pass);

            $query = "INSERT INTO crud_registros (nome_completo, contato, email, senha)VALUES('$value1', '$value2', '$value3', '$value4')";

            $stmt = $conexao->prepare($query);

            $stmt->bindValue(':nome_completo', $value1);
            $stmt->bindValue(':contato', $value2);
            $stmt->bindValue(':email', $value3);
            $stmt->bindValue(':senha', $value4);

            $stmt->execute();

            return true;
            
            } catch (PDOException $e) {
                echo 'Erro: '. $e->getCode() . ' Mensagem: ' . $e->getMessage();

                return false;
            }

            //return true;
        }

        public function recuperarRegistros (){
            try {
                $dsn = 'mysql:host='. $this->host.'; ';
                $dsn .= 'dbname='. $this->bd.'; ';
    
                $conexao = new PDO($dsn, $this->user, $this->pass);

                $query = "SELECT * from crud_registros";

                $stmt = $conexao->query($query);

                $this->lista_registros = $stmt->fetchAll(PDO::FETCH_NUM);

                /* echo '<pre>';
                print_r($lista_registros);
                echo '</pre>'; */

                /* if(!empty($lista_registros[1])) {
                    echo '<pre>';
                    print_r($lista_registros);
                    echo '</pre>';
                } else {
                    echo 'Não contém registros.';
                } */

                foreach ($this->lista_registros as $key => $value) {

                    echo '
                    <tr>
                        <th scope="row">'.$value[0].'</th>
                        <td>'.$value[1].'</td>
                        <td>'.$value[2].'</td>
                        <td>'.$value[3].'</td>
                        <td>
                        <div class="d-flex flex-row bd-hightlight">
                            <div class="px-1 bd-hightlight">
                                <form method="POST" action="registros.php?edit='. $value[0].'">
                                    <button type="submit" class="btn btn-outline-primary btn-sm"><label class="h6"><i class="bi bi-pencil-square"></i></label></button>
                                </form>
                            </div>
                            <div class="px-1 bd-hightlight">
                                <form method="POST" action="registros.php?del='. $value[0].'">    
                                    <button type="submit" class="btn btn-outline-danger btn-sm"><label class="h6"><i class="bi bi-trash"></i></label></button>
                                </form>
                            </div>
                        </div>
                        </td>
                    </tr>
                    ';

                    /* echo '<pre>';
                    print_r($value);
                    echo '</pre>'; */
                }


            } catch (PDOException $e){
                echo 'Erro: '. $e->getCode() . ' Mensagem: ' . $e->getMessage();

                return false;
            }
        }

        public function deletarRegistros ($value) {

            try {
                $dsn = 'mysql:host='. $this->host.'; ';
                $dsn .= 'dbname='. $this->bd.'; ';
    
                $conexao = new PDO($dsn, $this->user, $this->pass);

                $query = "DELETE from crud_registros WHERE idcrud_registros = $value";

                $stmt = $conexao->query($query);

                return true;

            } catch (PDOException $e) {
                echo 'Erro: '. $e->getCode() . ' Mensagem: ' . $e->getMessage();

                return false;
            }

        }

        public function atualizarRegistro($id, $nome_completo, $contato, $email, $senha) {

            try {
                $dsn = 'mysql:host='. $this->host.'; ';
                $dsn .= 'dbname='. $this->bd.'; ';
    
                $conexao = new PDO($dsn, $this->user, $this->pass);

                $query = "UPDATE crud_registros SET nome_completo = '$nome_completo', contato = '$contato', email = '$email', senha = '$senha' WHERE idcrud_registros = $id";

                $stmt = $conexao->query($query);

                return true;

            } catch (PDOException $e) {
                echo 'Erro: '. $e->getCode() . ' Mensagem: ' . $e->getMessage();

                return false;
            }
        }
    }

?>