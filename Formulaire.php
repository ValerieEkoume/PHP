

<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="UFT-8">

    <link rel="stylesheet" href="style.css">
    <title>Form PHP</title>

</head>

<div class="container mt-5">
    <div class="card border-0 rounded-lg bgpink">
        <div class="card-body">
            <h1 class="display-1">Connectez-vous</h1><br>

                <form action="Test.php" method="post">
                    <div class="form-group">
                        <label for="">Email address</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Toggle this element</label>
                    </div>
                    <div class="text-center mt-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
        </div>
    </div>
</div>
</body>

</html>