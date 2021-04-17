<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contactos</title>
    <link rel="icon" type="image/png" href="public/img/icons.png">
    <?php require_once "dependencias.php"; ?>
</head>

<body>
    <div class="container">
        <?php require_once "menu.php"; ?>
        <div class="jumbotron">
            <h1 class="display-4">Agenda de contactos</h1>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                        <img src="public/img/busto.jpg" alt="..." class="img-thumbnail">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Name</li>
                                <li class="list-group-item">Surname</li>
                                <li class="list-group-item">Date of Birth</li>
                                <li class="list-group-item">Place of birth</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <p>Ejercicio de aprendizaje eleborado por Jhoan Rodriguez</p>
            <p class="lead">
            </p>
        </div>



    </div>

</body>

</html>