
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <!--inserta hoja de estilo al html-->
    <link rel="stylesheet" href="Assest/Css/hojaestilo.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>

<body>
    <?php  //backend
        //incluir el menu 
        include_once("menuindex.php");
       ?>
    
    <section id="informacion" name="informacion">
        <h1 id="h1principal" name="h1principal">
            INVENTARIO
        </h1>
        <img src="Assest/img/inventario.jpg" id="imginv" name="imginv">

    </section>
    <hr>
    <!--línea de separación de secciones-->
    <footer class="colorAzul">
        <div id="Redessociales" name="Redessociales">
            <h3 id="h3redesS" name="h3redesS">
                Redes Sociales
            </h3>
            <img src="" alt="">
            <address>
                <h2>Dirección empresa</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, quibusdam? Voluptatibus pariatur
                    quae minima maxime voluptates molestias sapiente magnam, nesciunt provident perspiciatis eveniet
                    aliquam quaerat natus accusamus facilis, reprehenderit quibusdam!</p>
            </address>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</body>

</html>