<?php

namespace Devoir_oop_php_Alexandre\Vehicule\Vehicule;
class Vehicule
{
    private $nbreRoue;
    private $couleur;
    private $typeCarburant;
    private $numPlaque;
    private $model;
    private $err;
    public function __construct($roue, $color, $typC, $num)
    {
        if(intval($roue) >= 4)
        {
            if((intval($roue) % 2 ) == 0)
            {
                $this->nbreRoue = intval($roue);
                $this->couleur = $color;
                $this->typeCarburant = $typC;
                $this->numPlaque = $num;
            }
            else
                $this->err = "le nombre de roue doit probablment etre positif";
        }
        else
            $this->err = " non le nombre de roue fournit n'est pas vrai";
    }
    public function AffichageVehicule()
    {
        if($this->nbreRoue > 4)
        {
            echo "ce Vehicule est caractvrise par :<br>".
                "Numero du plaque : ".$this->numPlaque.
                "Type de Carburant : ".$this->typeCarburant.
                "Nombre de roue : ".$this->nbreRoue.
                "Couleur : ".$this->couleur;
            if($this->nbreRoue >= 4 and $this->nbreRoue <= 6)
                echo "c'est un simple Vehicule";
            else 
                echo "c'est un Vehicule lourd";    
        }
        else
            echo "Renseigner d'abord un nombre valide des roues";
    }
    

    /**
     * Get the value of nbreRoue
     */ 
    public function getNbreRoue()
    {
        return $this->nbreRoue;
    }

    /**
     * Set the value of nbreRoue
     *
     * @return  self
     */ 
    public function setNbreRoue($nbreRoue)
    {
        $this->nbreRoue = $nbreRoue;

        return $this;
    }

    /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */ 
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of typeCarburant
     */ 
    public function getTypeCarburant()
    {
        return $this->typeCarburant;
    }

    /**
     * Set the value of typeCarburant
     *
     * @return  self
     */ 
    public function setTypeCarburant($typeCarburant)
    {
        $this->typeCarburant = $typeCarburant;

        return $this;
    }

    /**
     * Get the value of numPlaque
     */ 
    public function getNumPlaque()
    {
        return $this->numPlaque;
    }

    /**
     * Set the value of numPlaque
     *
     * @return  self
     */ 
    public function setNumPlaque($numPlaque)
    {
        $this->numPlaque = $numPlaque;

        return $this;
    }

    /**
     * Get the value of err
     */ 
    public function getErr()
    {
        return $this->err;
    }

    /**
     * Set the value of err
     *
     * @return  self
     */ 
    public function setErr($err)
    {
        $this->err = $err;

        return $this;
    }
}