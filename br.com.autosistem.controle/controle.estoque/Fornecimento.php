<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Fornecimento
 *
 * @author drop-
 */
class Fornecimento {
    private $codigo;
    private $modelo;
    private $quantidade;
    private $valor;
    private $fornecedor;
    private $produto;
    public function getCodigo() {
        return $this->codigo;
    }

    public function getModelo() {
        return $this->modelo;
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

    public function getProduto() {
        return $this->produto;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
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

    public function setProduto($produto) {
        $this->produto = $produto;
    }


}
