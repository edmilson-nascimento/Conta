<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once './conexao.class.php';
require_once './itemDAO.php';

class ItemController {
    

    function __construct() {
        
    }
    
    public function lista() {

        $filter = filter_input(INPUT_POST, 'filter');

        $conexao = new Conexao();
        $itemDao = new ItemDAO();
        
        return $itemDao->lista($conexao, $filter);

    }

}