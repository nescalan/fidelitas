<?php include_once 'app/views/components/head.component.php'; ?>

<body>
    <?php include_once 'app/views/components/Menu.php'; ?>

    <form action="" method="post">

        <section class="form-register p-5 imgFondo text-center">

            <h1 class="p-5"> Bienvenido/a,
                <?php echo $nombre; ?>
            </h1>

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

</body>

</html>