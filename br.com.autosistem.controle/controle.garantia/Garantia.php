<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Garantia
 *
 * @author drop-
 */
class Garantia {
    private $pedido_fk;
    private $nota_fk;
    private $produto_fk;
    private $codigo_fabricacao;
    private $data_fabricacao;
    private $data_compra;
    private $lote;
    private $descricao_solicitacao;
    private $descricao_motivo;
    private $nome_solicitante;
    private $cpf_rg_solicitante;
    private $data_solicitacao;
    private $telefone01_solicitante;
    private $telefone02_solicitante;
    private $prazo_retorno;
    private $status;
    private $conclusao;
    
    public function getPedido_fk() {
        return $this->pedido_fk;
    }

    public function getNota_fk() {
        return $this->nota_fk;
    }

    public function getProduto_fk() {
        return $this->produto_fk;
    }

    public function getCodigo_fabricacao() {
        return $this->codigo_fabricacao;
    }

    public function getData_fabricacao() {
        return $this->data_fabricacao;
    }

    public function getData_compra() {
        return $this->data_compra;
    }

    public function getLote() {
        return $this->lote;
    }

    public function getDescricao_solicitacao() {
        return $this->descricao_solicitacao;
    }

    public function getDescricao_motivo() {
        return $this->descricao_motivo;
    }

    public function getNome_solicitante() {
        return $this->nome_solicitante;
    }

    public function getCpf_rg_solicitante() {
        return $this->cpf_rg_solicitante;
    }

    public function getData_solicitacao() {
        return $this->data_solicitacao;
    }

    public function getTelefone01_solicitante() {
        return $this->telefone01_solicitante;
    }

    public function getTelefone02_solicitante() {
        return $this->telefone02_solicitante;
    }

    public function getPrazo_retorno() {
        return $this->prazo_retorno;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getConclusao() {
        return $this->conclusao;
    }

    public function setPedido_fk($pedido_fk) {
        $this->pedido_fk = $pedido_fk;
    }

    public function setNota_fk($nota_fk) {
        $this->nota_fk = $nota_fk;
    }

    public function setProduto_fk($produto_fk) {
        $this->produto_fk = $produto_fk;
    }

    public function setCodigo_fabricacao($codigo_fabricacao) {
        $this->codigo_fabricacao = $codigo_fabricacao;
    }

    public function setData_fabricacao($data_fabricacao) {
        $this->data_fabricacao = $data_fabricacao;
    }

    public function setData_compra($data_compra) {
        $this->data_compra = $data_compra;
    }

    public function setLote($lote) {
        $this->lote = $lote;
    }

    public function setDescricao_solicitacao($descricao_solicitacao) {
        $this->descricao_solicitacao = $descricao_solicitacao;
    }

    public function setDescricao_motivo($descricao_motivo) {
        $this->descricao_motivo = $descricao_motivo;
    }

    public function setNome_solicitante($nome_solicitante) {
        $this->nome_solicitante = $nome_solicitante;
    }

    public function setCpf_rg_solicitante($cpf_rg_solicitante) {
        $this->cpf_rg_solicitante = $cpf_rg_solicitante;
    }

    public function setData_solicitacao($data_solicitacao) {
        $this->data_solicitacao = $data_solicitacao;
    }

    public function setTelefone01_solicitante($telefone01_solicitante) {
        $this->telefone01_solicitante = $telefone01_solicitante;
    }

    public function setTelefone02_solicitante($telefone02_solicitante) {
        $this->telefone02_solicitante = $telefone02_solicitante;
    }

    public function setPrazo_retorno($prazo_retorno) {
        $this->prazo_retorno = $prazo_retorno;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setConclusao($conclusao) {
        $this->conclusao = $conclusao;
    }


    
}
