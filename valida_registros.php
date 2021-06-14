<?php

        include "class_sql.php"; 

      if(!empty($_POST) && !empty($_POST['nome_completo']) && !empty($_POST['contato']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        try{

            $querySQL = new QuerySQL();
            if ($querySQL->inserirRegistros($_POST['nome_completo'], $_POST['contato'], $_POST['email'], $_POST['senha'])) {

                header('location: add_registros.php?form=sucesso');
            } else {
                header('location: add_registros.php?form=erro');
            }


        } catch (Exception $e) {

            header('location: add_registros.php?form=erro?'. $e->getCode() . ' MSG: '. $e->getMessage());
        } catch (PDOException $e) {

            header('location: add_registros.php?form=erro?'. $e->getCode() . ' MSG: '. $e->getMessage());
        }

        //header('location: add_registros.php?form=sucesso'); //IF

      } else {
        header('location: add_registros.php?form=erro');
      }

?>