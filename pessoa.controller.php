<?php

// require_once ('../models/Produto.php');
// require_once ('../models/ProdutoDAO.php');
// require_once ('../config/Database.php');
require_once ('pessoa.class.php');
require_once ('pessoa.dao.php');
require_once ('conexao.class.php');

class PessoaController {

    public function listarRegistros(Pessoa $pessoa, PessoaDAO $pessoaDao) {
        $pessoa = new Pessoa();
    }

    public function insere() {
        
        // $nome = $_POST['nome'];
        $nome = "Ana";
        
        $conexao = new Conexao();
        
        $pessoa = new Pessoa();
        $pessoa->setNome($nome);
        
        $pessoaDao = new PessoaDAO();
        $pessoaDao->adiciona($conexao, $produto);
    }
}

?>