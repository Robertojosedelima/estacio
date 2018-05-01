<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto
 *
 * @author drop-
 */
class Produto {
    private $nome;
    private $modelo;
    private $descricao;
    private $codigo;
    
    

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    
    
    public function getNome() {
        return $this->nome;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

 

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }



}
