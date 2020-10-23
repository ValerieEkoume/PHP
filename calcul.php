<?php
//ifisset regarde si tu as un GET dans l'url si oui il fait le calcul sinon il saute l'étape//

if (isset ($_GET['a'])){
    $na = $_GET['a'];
    $nb = $_GET['b'];
    $resultat = ($na * $nb);
}

?>

<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UFT-8">
    <title>Calculs</title>

</head>

<body>

        <h1>Calculez</h1>
        <!-- ne pas oublier de mettre action ="" pour le formulaire, sinon message d'erreur!-->
            <form action="" method="get">

                <!--toujours assigner un name pour pouvoir l'assigner à $_GET cf: plus haut!-->
                <select class="form-control" name="a">
                    //for pour la boucle
                    <?php for ($n = 0; $n<= 10; $n++){
                      ?>
                    <option><?= $n; ?></option>
                   <?php }?>
                </select>
                <select class="form-control" name="b">
                    <?php for ($n = 0; $n<= 10; $n++){
                        ?>
                        <option><?= $n; ?></option>
                    <?php }?>
                </select>

        <button type="submit" class="btn btn-primary">Calculer</button>

        <?php if(isset ($resultat)): ?>
        <?= $resultat ?>
        <?php endif; ?>

        </form>


</body>

</html>










