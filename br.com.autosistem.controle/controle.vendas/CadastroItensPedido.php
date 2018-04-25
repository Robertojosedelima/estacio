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
    private $pedido_fk;
    private $produto_fk;
    private $quantidade_escolhida;
    private $total;
    public function getPedido_fk() {
        return $this->pedido_fk;
    }

    public function getProduto_fk() {
        return $this->produto_fk;
    }

    public function getQuantidade_escolhida() {
        return $this->quantidade_escolhida;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setPedido_fk($pedido_fk) {
        $this->pedido_fk = $pedido_fk;
    }

    public function setProduto_fk($produto_fk) {
        $this->produto_fk = $produto_fk;
    }

    public function setQuantidade_escolhida($quantidade_escolhida) {
        $this->quantidade_escolhida = $quantidade_escolhida;
    }

    public function setTotal($total) {
        $this->total = $total;
    }




}
