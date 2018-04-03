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
class Funcao {
    //put your code here
    private $nome;
    private $descricao;
    private $carga_horaria_semanal;
    private $salario;
    private $codigo;
    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getCarga_horaria_semanal() {
        return $this->carga_horaria_semanal;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setCarga_horaria_semanal($carga_horaria_semanal) {
        $this->carga_horaria_semanal = $carga_horaria_semanal;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }
    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }



}
