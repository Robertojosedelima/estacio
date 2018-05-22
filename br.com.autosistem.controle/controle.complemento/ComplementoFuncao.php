<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ComplementoFuncao
 *
 * @author drop-
 */
class ComplementoFuncao {
    private $funcao_fk;
    private $prl;
    private $bonus_salarial;
    private $vale_alimentacao;
    private $vale_refeicao;
    private $vale_combustivel;
    private $vale_saude;
    private $vale_cultura;
    private $vale_educacao;
    private $carga_horaria_mensal;
    private $carga_horaria_anual;
    private $data_inicio;
    private $observacao;
    public function getPrl() {
        return $this->prl;
    }

    public function setPrl($prl) {
        $this->prl = $prl;
    }

        public function getFuncao_fk() {
        return $this->funcao_fk;
    }

    public function setFuncao_fk($funcao_fk) {
        $this->funcao_fk = $funcao_fk;
    }

    
    public function getBonus_salarial() {
        return $this->bonus_salarial;
    }

    public function getVale_alimentacao() {
        return $this->vale_alimentacao;
    }

    public function getVale_refeicao() {
        return $this->vale_refeicao;
    }

    public function getVale_combustivel() {
        return $this->vale_combustivel;
    }

    public function getVale_saude() {
        return $this->vale_saude;
    }

    public function getVale_cultura() {
        return $this->vale_cultura;
    }

    public function getVale_educacao() {
        return $this->vale_educacao;
    }

    public function getCarga_horaria_mensal() {
        return $this->carga_horaria_mensal;
    }

    public function getCarga_horaria_anual() {
        return $this->carga_horaria_anual;
    }

    public function getData_inicio() {
        return $this->data_inicio;
    }

    public function getObservacao() {
        return $this->observacao;
    }

    

    public function setBonus_salarial($bonus_salarial) {
        $this->bonus_salarial = $bonus_salarial;
    }

    public function setVale_alimentacao($vale_alimentacao) {
        $this->vale_alimentacao = $vale_alimentacao;
    }

    public function setVale_refeicao($vale_refeicao) {
        $this->vale_refeicao = $vale_refeicao;
    }

    public function setVale_combustivel($vale_combustivel) {
        $this->vale_combustivel = $vale_combustivel;
    }

    public function setVale_saude($vale_saude) {
        $this->vale_saude = $vale_saude;
    }

    public function setVale_cultura($vale_cultura) {
        $this->vale_cultura = $vale_cultura;
    }

    public function setVale_educacao($vale_educacao) {
        $this->vale_educacao = $vale_educacao;
    }

    public function setCarga_horaria_mensal($carga_horaria_mensal) {
        $this->carga_horaria_mensal = $carga_horaria_mensal;
    }

    public function setCarga_horaria_anual($carga_horaria_anual) {
        $this->carga_horaria_anual = $carga_horaria_anual;
    }

    public function setData_inicio($data_inicio) {
        $this->data_inicio = $data_inicio;
    }

    public function setObservacao($observacao) {
        $this->observacao = $observacao;
    }

}
