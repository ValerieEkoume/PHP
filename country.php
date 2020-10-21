<?php

$pdo = new PDO('mysql:host=mysql;dbname=villes;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$capitales  = $pdo->query("SELECT * FROM capitales")->fetchAll();

/*$pdoStat = $pdo->prepare("SELECT * FROM capitales WHERE 'capitales', 'pays' = ?");
$capitales = $pdo;
$pays = $pdo;

$capitales ->bind_param("$capitales", $pays);*/



?>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UFT-8">
    <title>Sélection de capiltales</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

    <body>
    <div class="container mt-5">
        <div class="card border-0 rounded-lg bgpink">
            <div class="card-body">
    <h1 class="display-1 text-center">Les pays et leurs capitales</h1>

        <form method="get" action="country.php">
            <div class="form-group">
                <label for="FormControlSelect">Sélectionner une ville</label>
                <select class="form-control" name="capitales">
                    <option value=" " > </option>
                    <option selected="selected" <?php echo $_GET['capitales']; ?>></option>
                   <?php foreach ($capitales as $capitale): ?>
                        <option value="<?php echo $capitale['capitales']; ?>"
                        >
                            <?= $capitale['capitales'] ?></option>
                   <?php endforeach;?>
                </select>
            </div>
            <div class="text-center mt-2">
                <button type="submit"  class="btn btn-primary">Submit</button>
            </div>
        </form>
            <?php
                if (isset($_GET["capitales"]))
                {
                    $capitales = $_GET["capitales"];
                if   ($capitales == 'yaounde'){
                    $pays = "du Cameroun";
                    echo $capitales ." ". 'est la capitale' ." ". $pays;
                }

                elseif
                    ($capitales == 'paris') {
                    $pays = "France";
                    echo $capitales ." ". 'est la capitale' ." ". $pays;
                }

                elseif ($capitales == 'johannesburg'){
                    $pays = "Afrique du Sud";
                    echo $capitales ." ". 'est  la capitale d'." " . $pays;
                }
            }
                ?>
            </div>
        </div>
    </div>


    </body>

</html>







