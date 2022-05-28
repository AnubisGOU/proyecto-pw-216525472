<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hunter Palace</title>
    <link rel="stylesheet" href="Estilos.css">
</head>
<body class="body">
    <?php
    include "Vistas/Modulos/header.php";
    include "Vistas/Modulos/nav.php";
    $mvc=new mvcController;
    $mvc->enlacesPaginasController();
    include "Vistas/Modulos/footer.php";
    ?>
</body>
</html>