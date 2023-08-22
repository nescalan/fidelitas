<?php require_once 'app\views\components\head.component.php'; ?>

<body>
    <section class="container shadow border mt-5">
        <form action="" method="post" class=" ">
            <section class=" form-register p-5 " data-aos="flip-left" data-aos-easing="ease-out-cubic"
                data-aos-duration="1000">
                <h4 class="mb-4">Ingresar a su Cuenta</h4>

                <div class="contenedor-inputs">

                    <div id="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="card-body">

                                <div class="row">

                                    <div class="col-12">
                                        <label>Cédula</label>
                                        <input type="text" id="txtCedula" name="txtCedula" required="required"
                                            maxlength="12" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <label>Contraseña</label>
                                        <input type="password" id="txtClave" name="txtClave" maxlength="30"
                                            required="required" class="form-control">
                                    </div>

                                </div>

                                <br>
                                <input button type="submit" id="btnIniciarSesion" name="btnIniciarSesion"
                                    value="Iniciar Sesión" class="btn btn-success btn-block mt-3">
                                <br>

                            </div>

                        </div>

                    </div>
                </div>
            </section>



            <script>
                function isNumber(evt) {
                    evt = (evt) ? evt : window.event;
                    var charCode = (evt.which) ? evt.which : evt.keyCode;
                    if (charCode < 48 || charCode > 57) {
                        return false;
                    }
                    return true;
                }

            </script>

        </form>
    </section>
</body>

</html>