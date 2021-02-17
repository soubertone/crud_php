<?php

    class Conexao {
        private $host = 'localhost';
        private $user = 'root';
        private $pass = 'admin';
        private $bd = 'crud_basico';

        public function conectar(){
            $dsn = 'mysql:host='. $this->host.'; ';
            $dsn .= 'dbname='. $this->bd.'; ';


            try {
            $conexao = new PDO($dsn, $this->user, $this->pass);
            } catch (PDOException $e) {
                echo 'Erro: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage();
            }
        } //Fim conectar

    } //Fim Class

?>