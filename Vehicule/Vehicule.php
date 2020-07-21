<?php

namespace Devoir_oop_php_Alexandre\Vehicule\Vehicule;
class Vehicule
{
    //les proprietes
    private $nbreRoue;
    private $couleur;
    private $typeCarburant;
    private $numPlaque;
    protected $type;
    private const FORM = "<i><< Rectangulaire >></i>"; //un consate
    private $err;
    public function __construct($roue, $color, $typC, $num) //constructreur
    {
        if(intval($roue) >= 4)
        {
            if((intval($roue) % 2 ) == 0) //verification  si le nombre de pneu est valide
            {
                $this->nbreRoue = intval($roue);
                $this->couleur = $color;
                $this->typeCarburant = $typC;
                $this->numPlaque = $num;
            }
            else
                echo"le nombre de roue doit probablment etre positif";
        }
        else
            echo " non le nombre de roue fournit n'est pas vrai";
    }
    public function AffichageVehicule() // methode pour afichage du vehicule
    {
        if($this->nbreRoue >= 4)
        {
            echo "<BR><BR><b>ce Vehicule ".$this->type." est caractvrise par :</b><br>".
                "Numero du plaque : <span id='nom'><font color='blue'>".$this->numPlaque."</font></span><br>".
                "Type de Carburant : <span id='nom'><font color='blue'>".$this->typeCarburant."</font></span><br>".
                "Nombre de roue : <span id='nom'><font color='blue'>".$this->nbreRoue."</font></span><br>".
                "Couleur : <span id='nom'><font color='blue'>".$this->couleur."</font></span><br>".
                "avec une Forme ".Vehicule::FORM; //Affichge gu constante
            if($this->nbreRoue >= 4 and $this->nbreRoue <= 6)
                echo "<b><i><font color='green'> c'est un simple Vehicule</font></i></b>";
            else 
                echo "<b><i><font color='green'> c'est un Vehicule lourd</font></i></b>";    
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