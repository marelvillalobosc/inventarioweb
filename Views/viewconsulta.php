
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
    <title>A cerca de</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <?php
        include_once("menu.php");
    ?>
    <h1 class="text-warning text-center mb-5 mt-5">
        Lista Productos
    </h1>
    <section>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">precio</th>
                    <th scope="col">Imagen</th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <?php while($renglon= $registros->fetch_assoc()){ ?>
                <tr>
                    <td><?php  echo $renglon['id']?></td>
                    <td><?php  echo $renglon['descripcion']?></td>
                    <td><?php  echo $renglon['cantidad']?></td>
                    <td><?php  echo $renglon['precio']?></td>
                    <td><?php  echo $renglon['imagen']?></td>
                    <td><a href="../Route/route.php?ruta=selectid&id=<?php  echo $renglon['id']?>" class="btn btn-warning">Modificar</a></td>
                    <td><a href="../Route/route.php?ruta=delete&id=<?php  echo $renglon['id']?>"class="btn btn-danger">Eliminar</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
</body>

</html>