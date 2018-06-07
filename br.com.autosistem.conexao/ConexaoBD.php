<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConexaoBD
 *
 * @author drop-
 */
class ConexaoBD {
   public function conecta()
   {
       $bd = mysqli_connect("127.0.0.1", "root", "", "auto_pecas");
      mysqli_select_db($bd,'auto_pecas'); 
       return $bd;
       
       
   }
}
