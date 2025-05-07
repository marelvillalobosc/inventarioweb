<?php
    include_once("menuindex.php");
?>

<body>
    <section>
        <h1 class="text-warning text-center">Autentificación</h1>
        <div class="container">
            <div class="row">
                <div class="col">

                </div>

                <div class="col shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                    <form action="../Route/route.php" method="post">
                        <input type="hidden" value="auth" name="ruta">
                        
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="name@example.com">
                                <br>
                            <label for="inputPassword6" class="col-form-label">Password</label>
                            <br>
                            <input type="password" id="pass" name="pass" class="form-control"
                                aria-describedby="passwordHelpInline">
                       <br>
                                                
                           
                            <input type="submit" class="btn btn-primary" value="Enviar">
                            <br>
                    </form>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>