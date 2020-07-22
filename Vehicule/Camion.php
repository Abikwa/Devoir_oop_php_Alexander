<?php
namespace Devoir_oop_php_Alexander\Vehicule\Camion;
use  Devoir_oop_php_Alexander\Vehicule\Vehicule\Vehicule;
class Camion extends Vehicule{
    private $model; //propriete
    public function __construct($roue, $color, $typC, $num, $model) //construceur
    {
        if($roue > 6)
        {
            parent::__construct($roue, $color, $typC, $num);
            $this->model = $model;
            $this->type = "Camion";
        }
        else
            echo "non ca n doit pas etre un Camion ca";
    }
    public function AffichageCamion() //affichae du vehicule camion
    {
        # code...
        $this->AffichageVehicule();
        echo  "<br>enplus c'est un Camion du model <b>".$this->model."</b>";
    }

    /**
     * Get the value of model
     */ 
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */ 
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }
}
