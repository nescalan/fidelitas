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

        <section class="paginacion">
            <ul>
                <!-- Set the number of pages -->
                <?php
                $pagesNumber = pagesNumber($blog_config['publication_per_page'], $dbConnection);
                ?>

                <!-- Show the button to go back one page -->
                <?php if (actualPage() === 1): ?>
                    <li class="disabled">&laquo;</li>
                <?php else: ?>
                    <li><a href="admin.php?p=<?php echo actualPage() - 1 ?>">&laquo;</a></li>
                <?php endif; ?>

                <!-- Create a <li> element for each page we have -->
                <?php for ($i = 1; $i <= $pagesNumber; $i++): ?>
                    <!-- Add the active class on the current page  -->
                    <?php if (actualPage() === $i): ?>
                        <li class="active">
                            <?php echo $i; ?>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="admin.php?p=<?php echo $i ?>"><?php echo $i; ?></a>
                        </li>
                    <?php endif; ?>
                <?php endfor; ?>

                <!-- Show the button to go forward one page -->
                <?php if (actualPage() == $pagesNumber): ?>
                    <li class="disabled">&raquo;</li>
                <?php else: ?>
                    <li><a href="admin.php?p=<?php echo actualPage() + 1; ?>">&raquo;</a></li>
                <?php endif; ?>
            </ul>
        </section>
    </section>


    <!-- Imports footer component -->
    <?php include_once 'app/views/components/footer.php' ?>

</body>

</html>