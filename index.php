<?php
    use Devoir_oop_php_Alexandre\Vehicule\Vehicule\Vehicule;
    include_once("Vehicule\Vehicule.php");
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
                    $personne = new Vehicule(4, "blue", "Essence", "28522A");
                    $personne->AffichageVehicule();
                ?>
            </aside>
        </article>
    </div>
    <footer>
        <p align="right"><a href="mailto:abikalex8@gmail.com">Fait par ABIKWANINE BATUMIKE Alexandre</a></p>
    </footer>

</body>
</html>