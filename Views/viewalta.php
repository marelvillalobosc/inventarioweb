<?php
session_start();
if(!isset($_SESSION['email'])){
    include_once("menuindex.php");
    header("Location:../index.php");
}else{
    include_once("menu.php");
}?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <?php
        include_once("menu.php");
    ?>
    <h1 class="text-warning text-center">
        Nuevo Producto
    </h1>

    <section>
        <div class="conteiner">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <form action="../Route/route.php" method="post" enctype="multipart/form-data" id="form" name="form">
                     <!-- se envia la ruta por un input oculto -->
                     <input type="hidden" value="insert" name="ruta">
                        <div class="mb-1">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion">
                        </div>
                        <div class="mb-3">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="cantidad" name="cantidad">
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="text" class="form-control" id="precio" name="precio">
                        </div>
                        <div class="mb-3">
                            <label for="imagen" class="form-label">Imagen</label>
                            <input type="file" class="form-control" id="imagen" name="imagen">
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Guardar" class="btn btn-warning">
                        </div>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>

        </div>


    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
</body>

</html>