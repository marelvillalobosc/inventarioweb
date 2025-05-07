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
    <h1 class="text-warning text-center">
        Información de la empresa
    </h1>
    <div class="row text-center">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores, labore nisi? Sit vel asperiores magnam. Sint
        ullam ut quo explicabo, totam dolorum maxime saepe incidunt architecto commodi officiis. Perferendis,
        consequatur?
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
</body>

</html>