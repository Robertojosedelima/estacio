<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CadastroComplementoProduto
 *
 * @author drop-
 */
class ComplementoProduto {
    private $fornecimento_fk;
    private $codigo_fabricacao;
    private $data_fabricacao;
    private $lote;
    private $tempo_garantia;
    private $observacao_garantia;
    private $altura;
    private $largura;
    private $peso_produto;
    private $peso_embalagem;
    private $itens_produto;
    private $site_fabricante;
    private $telefone_fabricante;
    public function getFornecimento_fk() {
        return $this->fornecimento_fk;
    }

    public function getCodigo_fabricacao() {
        return $this->codigo_fabricacao;
    }

    public function getData_fabricacao() {
        return $this->data_fabricacao;
    }

    public function getLote() {
        return $this->lote;
    }

    public function getTempo_garantia() {
        return $this->tempo_garantia;
    }

    public function getObservacao_garantia() {
        return $this->observacao_garantia;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getLargura() {
        return $this->largura;
    }

    public function getPeso_produto() {
        return $this->peso_produto;
    }

    public function getPeso_embalagem() {
        return $this->peso_embalagem;
    }

    public function getItens_produto() {
        return $this->itens_produto;
    }

    public function getSite_fabricante() {
        return $this->site_fabricante;
    }

    public function getTelefone_fabricante() {
        return $this->telefone_fabricante;
    }

    public function setFornecimento_fk($fornecimento_fk) {
        $this->fornecimento_fk = $fornecimento_fk;
    }

    public function setCodigo_fabricacao($codigo_fabricacao) {
        $this->codigo_fabricacao = $codigo_fabricacao;
    }

    public function setData_fabricacao($data_fabricacao) {
        $this->data_fabricacao = $data_fabricacao;
    }

    public function setLote($lote) {
        $this->lote = $lote;
    }

    public function setTempo_garantia($tempo_garantia) {
        $this->tempo_garantia = $tempo_garantia;
    }

    public function setObservacao_garantia($observacao_garantia) {
        $this->observacao_garantia = $observacao_garantia;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setLargura($largura) {
        $this->largura = $largura;
    }

    public function setPeso_produto($peso_produto) {
        $this->peso_produto = $peso_produto;
    }

    public function setPeso_embalagem($peso_embalagem) {
        $this->peso_embalagem = $peso_embalagem;
    }

    public function setItens_produto($itens_produto) {
        $this->itens_produto = $itens_produto;
    }

    public function setSite_fabricante($site_fabricante) {
        $this->site_fabricante = $site_fabricante;
    }

    public function setTelefone_fabricante($telefone_fabricante) {
        $this->telefone_fabricante = $telefone_fabricante;
    }


    
}
