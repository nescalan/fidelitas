<?php include_once 'app/views/components/head.php' ?>

<body class="u-body u-xl-mode" data-lang="es">
    <?php include_once 'app/views/components/header.php'; ?>

    <section class="u-align-center u-clearfix u-grey-5" id="carousel_9e24">

        <div class=" u-sheet ">
            <h2>Panel de control</h2>
            <div class="u-flex">
                <a class="u-btn-1 u-border-3 
                3u-border-active-palette-1-base u-border-hover-palette-1-base u-border-palette-1-base  u-button-style u-hover-palette-1-base u-none u-text-active-white u-text-hover-white u-text-palette-1-base "
                    href="./newpost.php">Nuevo Post</a>
                <a class="u-btn-1 u-border-3 
                3u-border-active-palette-1-base u-border-hover-palette-1-base u-border-palette-1-base  u-button-style u-hover-palette-1-base u-none u-text-active-white u-text-hover-white u-text-palette-1-base "
                    href="logout.php">Cerrar Sesion</a>
            </div>
        </div>
        <br>

        <!-- Paint post into the DOM -->
        <?php
        while ($post = mysqli_fetch_assoc($posts)) {

            echo '
            <div class="u-clearfix u-sheet u-sheet-1">
           
            <div
              class="u-align-left u-border-16 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-1-base u-container-style u-expanded-width u-group u-white u-group-1"
              data-animation-name="customAnimationIn" data-animation-duration="1500">
              
                <div class="u-container-layout u-valign-middle u-container-layout-1">

                      
                    <h4 class="u-custom-font u-font-montserrat u-text u-text-default u-text-2">
                    ' . $post['id'] . ' . ' . $post["title"] . ' 
                    </h4>

                      <article  >
                          <div>
                            <a href="#">  | </a>
                            <a href="edit.php?id=' . $post['id'] . ' ">Editar |</a>
                            <a href="single.php?id=' . $post['id'] . ' ">Ver |</a>
                            <a href="delete.php?id=' . $post['id'] . ' ">Borrar |</a>
                          </div>
                          <br>
                      </article>
                    
                </div>

            </div>

            <br>

        </div>
        <br/>
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