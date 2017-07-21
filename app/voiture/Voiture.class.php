<?php

include_once '../Assurance/Assurance.class.php';
include_once '../Categorie/Categorie.class.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Voiture {

    private $NumChassis;
    private $NumPlaque;
    private $Motorisation;
    private $Boite;
    private $Puissance;
    private $Marque;
    private $Modele;
    private $Prix;
    private $Categorie;
    private $Assurance;

    function __construct($NumChassis, $NumPlaque, $Motorisation, $Boite, $Puissance, $Marque, $Modele, $Prix, $Categorie, $Assurance) {
        $this->NumChassis = $NumChassis;
        $this->NumPlaque = $NumPlaque;
        $this->Motorisation = $Motorisation;
        $this->Boite = $Boite;
        $this->Puissance = $Puissance;
        $this->Marque = $Marque;
        $this->Modele = $Modele;
        $this->Prix = $Prix;
        $this->Categorie = $Categorie;
        $this->Assurance = $Assurance;
    }

    function getNumChassis() {
        return $this->NumChassis;
    }

    function getNumPlaque() {
        return $this->NumPlaque;
    }

    function getMotorisation() {
        return $this->Motorisation;
    }

    function getBoite() {
        return $this->Boite;
    }

    function getPuissance() {
        return $this->Puissance;
    }

    function getMarque() {
        return $this->Marque;
    }

    function getModele() {
        return $this->Modele;
    }

    function getPrix() {
        return $this->Prix;
    }

    function getCategorie() {
        return $this->Categorie;
    }

    function getAssurance() {
        return $this->Assurance;
    }

    function setNumChassis($NumChassis) {
        $this->NumChassis = $NumChassis;
    }

    function setNumPlaque($NumPlaque) {
        $this->NumPlaque = $NumPlaque;
    }

    function setMotorisation($Motorisation) {
        $this->Motorisation = $Motorisation;
    }

    function setBoite($Boite) {
        $this->Boite = $Boite;
    }

    function setPuissance($Puissance) {
        $this->Puissance = $Puissance;
    }

    function setMarque($Marque) {
        $this->Marque = $Marque;
    }

    function setModele($Modele) {
        $this->Modele = $Modele;
    }

    function setPrix($Prix) {
        $this->Prix = $Prix;
    }

    function setCategorie($Categorie) {
        $this->Categorie = $Categorie;
    }

    function setAssurance($Assurance) {
        $this->Assurance = $Assurance;
    }

}
