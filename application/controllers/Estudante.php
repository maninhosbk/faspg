<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estudante
 *
 * @author Administrador
 */
class Estudante extends CI_Controller {

    public function __construct($primeiro) {
        $this->primeiro = $primeiro;
    }
    public function nome(){
        echo "meu nome é ".$this->primeiro;
    }
}
