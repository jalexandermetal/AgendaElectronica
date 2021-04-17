<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria de contactos</title>
    <link rel="icon" type="image/png" href="public/img/icons.png">
    <?php require_once "dependencias.php"; ?>
</head>

<body>
    <div class="container">
        <?php require_once "menu.php"; ?>

        <div class="jumbotron">
            <h1 class="display-4">Categorias</h1>
            <button class="btn btn-primary">
               <span class="fas fa-hdd"></span> Agregar Categoria
            </button>
            <hr class="my-4">
            <div id="cargaTablaCategorias"></div>
        </div>

    </div>

    <script src="public/js/categorias.js"></script>
</body>

</html>