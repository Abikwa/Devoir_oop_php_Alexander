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
    <link rel="stylesheet" type="text/css" href="styleTp1.css" />
    <title>Devoir_oop_php_Alexandre</title>
</head>
<body>
    <div>
        <article>
            <h2>gg</h2>
            <?php
                $vehicul = new Vehicule("998", "blue", "essance", "1524A");
                $vehicul->AffichageVehicule();
            ?>
        </article>
    </div>
</body>
</html>