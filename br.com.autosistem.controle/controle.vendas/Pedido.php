<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CadastroPedidoBD
 *
 * @author drop-
 */
class Pedido {
    private $codigo;
    private $cliente;
    private $vendedor;
    private $data;
    private $status;
    private $observacao;
    public function getCodigo() {
        return $this->codigo;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getVendedor() {
        return $this->vendedor;
    }

    public function getData() {
        return $this->data;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getObservacao() {
        return $this->observacao;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function setVendedor($vendedor) {
        $this->vendedor = $vendedor;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setObservacao($observacao) {
        $this->observacao = $observacao;
    }


}
