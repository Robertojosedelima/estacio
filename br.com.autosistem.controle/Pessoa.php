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
require_once 'Endereco.php';
abstract class Pessoa extends Endereco{
 private $email;
 private $email_alternativo;
 private $telefone_residencial;
 private $ramal;
 private $telefone_celular01;
 private $telefone_celular02;
 public function getRamal() {
     return $this->ramal;
 }

 public function setRamal($ramal) {
     $this->ramal = $ramal;
 }

  public function getEmail() {
     return $this->email;
 }

 public function getEmail_alternativo() {
     return $this->email_alternativo;
 }

 public function getTelefone_residencial() {
     return $this->telefone_residencial;
 }

 public function getTelefone_celular01() {
     return $this->telefone_celular01;
 }

 public function getTelefone_celular02() {
     return $this->telefone_celular02;
 }

 public function setEmail($email) {
     $this->email = $email;
 }

 public function setEmail_alternativo($email_alternativo) {
     $this->email_alternativo = $email_alternativo;
 }

 public function setTelefone_residencial($telefone_residencial) {
     $this->telefone_residencial = $telefone_residencial;
 }

 public function setTelefone_celular01($telefone_celular01) {
     $this->telefone_celular01 = $telefone_celular01;
 }

 public function setTelefone_celular02($telefone_celular02) {
     $this->telefone_celular02 = $telefone_celular02;
 }


 
}
