<?php require './app/views/head.view.php'; ?>

<body class="u-body u-xl-mode" data-lang="es">
    <?php require 'app/views/header.view.php'; ?>

    <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="carousel_9e24">

        <!-- Paint post into the DOM -->
        <?php
        while ($row = mysqli_fetch_assoc($resultPublications)) {
            // Get the publication from the database.
            echo '
            <div class="u-clearfix u-sheet u-sheet-1">
              <a href="single.php?id=' . $row['id'] . ' ">
                <img class="u-expanded-width u-image u-image-default u-image-1" src="./public/img/' . $row["thumb"] . '" alt="publication-image"
              data-image-width="1620" data-image-height="1080">  
              </a>
            <div
              class="u-align-left u-border-16 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-1-base u-container-style u-expanded-width u-group u-white u-group-1"
              data-animation-name="customAnimationIn" data-animation-duration="1500">
              <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h5 class="u-text u-text-1"> ' . calculateDate($row["date"]) . ' </h5>
                <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-2">
                  <a href="single.php?id=' . $row['id'] . ' "> ' . $row["title"] . ' </a>
                </h2>
                <p class="u-text u-text-3"> ' . $row["summary"] . ' </p>
                <a href="single.php?id=' . $row['id'] . ' "
                  class="u-active-palette-1-base u-border-3 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-palette-1-base u-btn u-button-style u-hover-palette-1-base u-none u-text-active-white u-text-hover-white u-text-palette-1-base u-btn-1">continuar
                  leyendo</a>
              </div>
            </div>
          </div>
        ';
        }
        ?>

        <!-- Import pagination component  -->
        <?php require './app/views/pagination.view.php'; ?>

    </section>

    <!-- Imports footer component -->
    <?php require './app/views/footer.view.php' ?>

</body>

</html>