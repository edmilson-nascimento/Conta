<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of itemClass
 *
 * @author Nascimento
 */
class Item {
    //put your code here
    
    private $id;
    private $descricao;
    private $quantidade;
    private $valor;
    private $total;
    
    public function __construct(){
        
    }
    
    function getId() {
        return $this->id;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getValor() {
        return $this->valor;
    }

    function getTotal() {
        return $this->total;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setTotal($valor, $quantidade) {
        $this->total = ( $valor * $quantidade);
    }



}
