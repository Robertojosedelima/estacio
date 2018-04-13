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
    private $quantidade;
    private $valor;
    private $fornecedor;
    public function getNome() {
        return $this->nome;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getFornecedor() {
        return $this->fornecedor;
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

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function setFornecedor($fornecedor) {
        $this->fornecedor = $fornecedor;
    }


}
