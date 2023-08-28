<?php include_once 'app/views/components/head.php' ?>

<body class="u-body u-xl-mode" data-lang="es">
    <?php include_once 'app/views/components/header.php'; ?>

    <section class="u-align-center u-clearfix u-grey-5" id="carousel_9e24">

        <div class=" u-sheet ">
            <h2>Panel de control</h2>
            <div class="u-flex">
                <a class="u-btn-1 u-border-3 
                3u-border-active-palette-1-base u-border-hover-palette-1-base u-border-palette-1-base  u-button-style u-hover-palette-1-base u-none u-text-active-white u-text-hover-white u-text-palette-1-base "
                    href="newPos.php">Nuevo Post</a>
                <a class="u-btn-1 u-border-3 
                3u-border-active-palette-1-base u-border-hover-palette-1-base u-border-palette-1-base  u-button-style u-hover-palette-1-base u-none u-text-active-white u-text-hover-white u-text-palette-1-base "
                    href="logout.php">Cerrar Sesion</a>
            </div>
        </div>

        <!-- Paint post into the DOM -->
        <?php
        while ($row = mysqli_fetch_assoc($posts)) {

            // Get the publication from the database.
            echo '
            <div class="u-clearfix u-sheet u-sheet-1">
                <article>
                    <h4 class="u-custom-font u-font-montserrat u-text u-text-default u-text-2">
                     ' . $row['id'] . ' . ' . $row["title"] . ' 
                    </h4>
                    <a href="edit.php?id=' . $row['id'] . ' ">Editar</a>
                    <a href="single.php?id=' . $row['id'] . ' ">Ver</a>
                    <a href="delete.php?id=' . $row['id'] . ' ">Borrar</a>
                </article>
            </div>
            ';
        }
        ?>

        <!-- Import pagination component  -->
        <?php include_once 'app/views/components/pagination.php'; ?>

    </section>

    <!-- Imports footer component -->
    <?php include_once 'app/views/components/footer.php' ?>

</body>

</html>