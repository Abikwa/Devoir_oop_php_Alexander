<?php
    use Devoir_oop_php_Alexandre\Vehicule\Vehicule\Vehicule;
    use Devoir_oop_php_Alexandre\Vehicule\Taxi\Taxi;
    include_once("Vehicule\Vehicule.php");
    include_once("Vehicule\Taxi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styleTp2.css" />
    <title>Devoir_oop_php_Alexandre</title>
</head>
<body>
<div id="corps">
        <h2 id="titre">Deuxieme travail traitant sur la POO en php</h2>
        <article>
            <aside class="answer"><!--  pillier dE LA POO-->
                <?php
                     echo "<span class='question'>Vehicule</span>";
                    $vehicule = new Vehicule(4, "blue", "Essence", "28522A");
                    $vehicule->AffichageVehicule();
                    $vehicule = new Vehicule(12, "Noire", "Mazout", "125-7854-DB");
                    $vehicule->AffichageVehicule();
                ?>
            </aside>
            <aside class="answer"><!--  pillier dE LA POO-->
                <?php
                     echo "<span class='question'>Taxi du type Vehicule</span>";
                    $taxi = new Taxi(4, "blue", "Essence", "28522A", "SwagMOrtel");
                    $taxi->AffichageTaxi();
                    $taxi = new Taxi(12, "Noire", "Mazout", "125-7854-DB", "Hungtolow");
                    $taxi->AffichageTaxi();
                ?>
            </aside>
        </article>
    </div>
    <footer>
        <p align="right"><a href="mailto:abikalex8@gmail.com">Fait par ABIKWANINE BATUMIKE Alexandre</a></p>
    </footer>

</body>
</html>