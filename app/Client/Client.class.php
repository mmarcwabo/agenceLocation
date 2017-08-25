<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client
 *
 * @author marcellin
 */
class Client {
    //put your code here
    private $nom;
    private $prenom;
    private $adresse;
    private $numPermi;
    private $DateDeNaissance;
    private $tel;
    private $sexe;
    private $NumeroNational;
    private $idVille;
    
    function __construct($nom, $prenom, $adresse, $numPermi, $DateDeNaissance, $tel, $sexe, $NumeroNational, $idVille) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->numPermi = $numPermi;
        $this->DateDeNaissance = $DateDeNaissance;
        $this->tel = $tel;
        $this->sexe = $sexe;
        $this->NumeroNational = $NumeroNational;
        $this->idVille = $idVille;
    }
    
    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getNumPermi() {
        return $this->numPermi;
    }

    function getDateDeNaissance() {
        return $this->DateDeNaissance;
    }

    function getTel() {
        return $this->tel;
    }

    function getSexe() {
        return $this->sexe;
    }

    function getNumeroNational() {
        return $this->NumeroNational;
    }

    function getIdVille() {
        return $this->idVille;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setNumPermi($numPermi) {
        $this->numPermi = $numPermi;
    }

    function setDateDeNaissance($DateDeNaissance) {
        $this->DateDeNaissance = $DateDeNaissance;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    function setNumeroNational($NumeroNational) {
        $this->NumeroNational = $NumeroNational;
    }

    function setIdVille($idVille) {
        $this->idVille = $idVille;
    }



}
