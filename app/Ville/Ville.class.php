<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ville
 *
 * @author marcellin
 */
class Ville {
    //put your code here

    private $nomVille;
    private $codePostal;
    
    function __construct($nomVille, $codePostal) {
        $this->nomVille = $nomVille;
        $this->codePostal = $codePostal;
    }

    function getNomVille() {
        return $this->nomVille;
    }

    function getCodePostal() {
        return $this->codePostal;
    }

    function setNomVille($nomVille) {
        $this->nomVille = $nomVille;
    }

    function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
    }


    
}
