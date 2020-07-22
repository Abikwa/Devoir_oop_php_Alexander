<?php
namespace Devoir_oop_php_Alexander\Vehicule\Taxi;
use  Devoir_oop_php_Alexander\Vehicule\Vehicule\Vehicule;
class Taxi extends Vehicule{
    private $model;
    public function __construct($roue, $color, $typC, $num, $model)
    {
        if($roue < 6)
        {
            parent::__construct($roue, $color, $typC, $num);
            $this->model = $model;
            $this->type = "Taxi";
        }
        else
            echo"c'est ne pas un taxi";
    }
    public function AffichageTaxi()
    {
        # code...
        $this->AffichageVehicule();
        echo  "<br>enplus c'est un Taxi du model <b>".$this->model."</b>";
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
