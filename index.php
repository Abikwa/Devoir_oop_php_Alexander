<?php
    use Devoir_oop_php_Alexander\Vehicule\Vehicule\Vehicule;
    use Devoir_oop_php_Alexander\Vehicule\Taxi\Taxi;
    use Devoir_oop_php_Alexander\Vehicule\Camion\Camion;
    include_once("Vehicule\Vehicule.php");
    include_once("Vehicule\Taxi.php");
    include_once("Vehicule\Camion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styleTp2.css" />
    <title>Devoir_oop_php_Alexander</title>
</head>
<body>
<div id="corps">
        <h2 id="titre">Deuxieme travail traitant sur la POO en php</h2>
        <article>
            <aside class="answer"><!--  pillier dE LA POO Creation des 2 vecules-->
                <?php
                     echo "<span class='question'>Vehicule</span>";
                    $vehicule = new Vehicule(4, "blue", "Essence", "28522A");
                    $vehicule->AffichageVehicule();
                    $vehicule = new Vehicule(12, "Noire", "Mazout", "125-7854-DB");
                    $vehicule->AffichageVehicule();
                ?>
            </aside>
            <aside class="answer"><!--  pillier dE LA POO Creation des 2 vecules Taxi-->
                <?php
                     echo "<span class='question'>Taxi du type Vehicule</span>";
                    $taxi = new Taxi(4, "Rouge", "Essence", "278528522A", "SwagMOrtel");
                    $taxi->AffichageTaxi();
                    $taxi = new Taxi(4, "Noire", "Essence", "7825-7854-DB", "Hungtolow");
                    $taxi->AffichageTaxi();
                ?>
            </aside>
            <aside class="answer"><!--  pillier dE LA POO Creation des 2 vecules camion-->
                <?php
                     echo "<span class='question'>Camion du type Vehicule</span>";
                    $camion = new Camion(22, "blue", "Mazout", "7285-22A", "BENZ");
                    $camion->AffichageCamion();
                    $camion = new Camion(12, "Noire", "Mazout", "495-7854-DB", "ISUZU");
                    $camion->AffichageCamion();
                ?>
            </aside>
        </article>
    </div>
    <footer>
        <p align="right"><a href="mailto:abikalex8@gmail.com">Fait par ABIKWANINE BATUMIKE Alexandre</a></p>
    </footer>

</body>
</html>