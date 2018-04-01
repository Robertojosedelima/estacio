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
require_once 'Pessoa.php';
class PessoaFisica extends Pessoa{
    //put your code here
    private $nome;
    private $sobre_nome;
    private $data_nascimento;
    private $naturalidade;
    private $nacionalidade;
    private $sexo;
    private $estado_civil;
    private $rg;
    private $cpf;
    private $ctps;
    private $pis;
    public function getNome() {
        return $this->nome;
    }

    public function getSobre_nome() {
        return $this->sobre_nome;
    }

    public function getData_nascimento() {
        return $this->data_nascimento;
    }

    public function getNaturalidade() {
        return $this->naturalidade;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getEstado_civil() {
        return $this->estado_civil;
    }

    public function getRg() {
        return $this->rg;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getCtps() {
        return $this->ctps;
    }

    public function getPis() {
        return $this->pis;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSobre_nome($sobre_nome) {
        $this->sobre_nome = $sobre_nome;
    }

    public function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    public function setNaturalidade($naturalidade) {
        $this->naturalidade = $naturalidade;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function setEstado_civil($estado_civil) {
        $this->estado_civil = $estado_civil;
    }

    public function setRg($rg) {
        $this->rg = $rg;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setCtps($ctps) {
        $this->ctps = $ctps;
    }

    public function setPis($pis) {
        $this->pis = $pis;
    }


}
