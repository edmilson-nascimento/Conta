<?php

require_once './conexao.class.php';
require_once './contaDAO.php';

class ContaController{

    function __construct() {
        
    }
    
    public function lista() {

        $filter = filter_input(INPUT_POST, 'filter');

        $conexao = new Conexao();
        $contaDao = new ContaDAO();
        
        return $contaDao->lista($conexao, $filter);

    }

}