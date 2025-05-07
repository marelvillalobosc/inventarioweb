<?php
session_start();
if(!isset($_SESSION['email'])){
    include_once("menuindex.php");
    header("Location:../index.php");
}else{
    include_once("menu.php");
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>

<body>
    <?php
     include_once("menu.php");
    ?>
    <section id="contacto" name="contacto">
        <h1 class="text-center text-warning mb-5 mt-5" id="h1contacto" name="h1contacto">
            CONTACTO
        </h1>
        <div class="container">
            <div class="row">
                <div class="col border shadow p-3 mb-5 bg-body-tertiary rounded" id="divcontacto" name="divcontacto">
                    <label for="">Telefono: 452111111</label>
                    <br>
                    <label for="">Direccion: Centro #256</label>
                </div>
                <div class="col"></div>
                <div class="col border shadow p-3 mb-5 bg-body-tertiary rounded" id="divmapa" name="divmapa">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27604.188265976212!2d-102.07806804685295!3d19.420066306015933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842de3211bc73ccf%3A0xa09f0662225d825c!2sParque%20Nacional%20de%20Uruapan%20%22Barranca%20del%20Cupatitzio%22!5e0!3m2!1ses!2smx!4v1745680371177!5m2!1ses!2smx"
                        width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>


</body>

</html>