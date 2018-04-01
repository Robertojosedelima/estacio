<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**

 *
 * @author drop-
 */
abstract class Endereco {
    //put your code here
    private $cep;
    private $estado;
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;
    private $complemento;
    private $ponto_referencia;
    private $pessoa_referencia01;
    private $pessoa_referencia02;
    
    public function getCep() {
        return $this->cep;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getRua() {
        return $this->rua;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getComplemento() {
        return $this->complemento;
    }

    public function getPonto_referencia() {
        return $this->ponto_referencia;
    }

    public function getPessoa_referencia01() {
        return $this->pessoa_referencia01;
    }

    public function getPessoa_referencia02() {
        return $this->pessoa_referencia02;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function setRua($rua) {
        $this->rua = $rua;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function setPonto_referencia($ponto_referencia) {
        $this->ponto_referencia = $ponto_referencia;
    }

    public function setPessoa_referencia01($pessoa_referencia01) {
        $this->pessoa_referencia01 = $pessoa_referencia01;
    }

    public function setPessoa_referencia02($pessoa_referencia02) {
        $this->pessoa_referencia02 = $pessoa_referencia02;
    }


}
