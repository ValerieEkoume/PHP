<?php

$pdo = new PDO('mysql:host=mysql;dbname=villes;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


$query= ("SELECT * FROM capitales");

$queryBuilder = $pdo->query($query);
$capitales = $queryBuilder->fetchAll();
if (isset($_GET["capitales"])){

    $getCapitales = $_GET["capitales"];

    $sql = "SELECT pays FROM capitales WHERE capitales = :capitales";

    $prepare = $pdo->prepare($sql);

    $prepare->bindParam(':capitales', $getCapitales);

    $prepare->execute();

    $pays = $prepare->fetch();

    $result = "La" . " ". $pays['pays'] ." ". " a pour capitale $getCapitales";

}





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
                <?php if (isset($result)): ?>
    <h1 class="display-1 text-center"><?= $result ?></h1>
                <?php else:?>
                <?php endif; ?>

        <form method="get" action="country.php">
            <div class="form-group">
                <label for="FormControlSelect">Sélectionner une ville</label>
                <select class="form-control" name="capitales">
                    <option> </option>

                    <?php foreach ($capitales as $item):?>
                        <option><?php echo $item['capitales'] ?></option>
                   <?php endforeach;?>

                </select>
            </div>
            <div class="text-center mt-2">
                <button type="submit"  class="btn btn-primary">Submit</button>
            </div>
        </form>

            </div>
        </div>
    </div>


    </body>

</html>







