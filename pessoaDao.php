<?php

include_once 'pessoa.class.php';

class PessoaDAO {

    public function adiciona(Pessoa $pessoa, $conexao) {
       
        if (isset($pessoa)) {
            
            $statement = 
                $conexao->prepare(" INSERT INTO pessoa (nome) VALUES (:nome);");
            
            $result = $statement->execute(array(':nome' => $pessoa->getNome()));
            
            if (! empty($result)) {
                echo 'Data Inserted';
            }
        }
    }
        
        /**
         * Implementar filtro de consulta
         *
         */
        public function lista($conn){
            
            $statement = $conn->prepare("SELECT * FROM pessoas ORDER BY nome DESC");
            $statement->execute();
            
            $result = $statement->fetchAll();
            
            return $result;
            
        }
        
    }

?>