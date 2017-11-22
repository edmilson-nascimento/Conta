<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ContaDAO {

    function __construct() {
        
    }

    public function lista(Conexao $conexao, $filter) {
        
        if (isset($filter)) {
            $query = "SELECT * FROM item WHERE " . $filter . " ORDER BY descricao;";
        } else {
            $query = "SELECT * FROM item ORDER BY descricao;";
        }

        $connection = $conexao->getConnection();
        $statement = $connection->prepare($query);
        $statement->execute();

        return $statement->fetchAll();
    }

}
