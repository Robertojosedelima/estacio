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
class PessoaJuridica extends Pessoa{
    //put your code here
    private $razao_social;
    private $nome_fantasia;
    private $data_parceria;
    private $cpf_cnpj;
    private $nit_pis_pasep;
    public function getRazao_social() {
        return $this->razao_social;
    }

    public function getNome_fantasia() {
        return $this->nome_fantasia;
    }

    public function getData_parceria() {
        return $this->data_parceria;
    }

    public function getCpf_cnpj() {
        return $this->cpf_cnpj;
    }

    public function getNit_pis_pasep() {
        return $this->nit_pis_pasep;
    }

    public function setRazao_social($razao_social) {
        $this->razao_social = $razao_social;
    }

    public function setNome_fantasia($nome_fantasia) {
        $this->nome_fantasia = $nome_fantasia;
    }

    public function setData_parceria($data_parceria) {
        $this->data_parceria = $data_parceria;
    }

    public function setCpf_cnpj($cpf_cnpj) {
        $this->cpf_cnpj = $cpf_cnpj;
    }

    public function setNit_pis_pasep($nit_pis_pasep) {
        $this->nit_pis_pasep = $nit_pis_pasep;
    }


}
