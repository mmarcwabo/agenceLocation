<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author marcellin
 */
class User {
    //put your code here

    private $privilege;
    private $pseudo;
    private $motDePasse;
    
    function __construct($privilege, $pseudo, $motDePasse) {
        $this->privilege = $privilege;
        $this->pseudo = $pseudo;
        $this->motDePasse = $motDePasse;
    }
    function getPrivilege() {
        return $this->privilege;
    }

    function getPseudo() {
        return $this->pseudo;
    }

    function getMotDePasse() {
        return $this->motDePasse;
    }

    function setPrivilege($privilege) {
        $this->privilege = $privilege;
    }

    function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

    function setMotDePasse($motDePasse) {
        $this->motDePasse = $motDePasse;
    }


}
