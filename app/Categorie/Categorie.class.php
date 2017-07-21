<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Categorie{
    
    private $IdCategorie;
    private $NomCategorie;
    
    function __construct($IdCategorie, $NomCategorie) {
        $this->IdCategorie = $IdCategorie;
        $this->NomCategorie = $NomCategorie;
    }
    
    function getIdCategorie() {
        return $this->IdCategorie;
    }

    function getNomCategorie() {
        return $this->NomCategorie;
    }

    function setIdCategorie($IdCategorie) {
        $this->IdCategorie = $IdCategorie;
    }

    function setNomCategorie($NomCategorie) {
        $this->NomCategorie = $NomCategorie;
    }



}

