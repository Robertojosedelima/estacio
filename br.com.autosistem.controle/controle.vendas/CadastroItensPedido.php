<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CadastroItensPedido
 *
 * @author drop-
 */
class CadastroItensPedido {
    private $pedido;
    private $produto_fk;
    private $quantidade;
    private $valor;
    public function getPedido() {
        return $this->pedido;
    }

    public function getProduto_fk() {
        return $this->produto_fk;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setPedido($pedido) {
        $this->pedido = $pedido;
    }

    public function setProduto_fk($produto_fk) {
        $this->produto_fk = $produto_fk;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }


}
