<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
    <!-- META -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Inicia Sesión">
    <meta name="description" content="">
    <meta name="referrer" content="origin">
    <meta name="theme-color" content="#707e89">
    <meta property="og:title" content="Home">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="public/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="public/css/home.css" media="screen">
    <link rel="stylesheet" href="public/css/contact.css" media="screen">

    <!-- FONTS -->
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">

    <!-- SCRIPTS -->
    <script class="u-script" type="text/javascript" src="./vendor/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="./vendor/nicepage.js" defer=""></script>

    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Blog",
        "logo": "images/default-logo.png"}
    </script>

    <title>Blog | Inicio Sesión</title>
</head>

<body class="u-body u-xl-mode" data-lang="es">

    <?php include_once 'app/views/components/header.php'; ?>

    <section class="u-clearfix u-image u-section-1" id="carousel_3db2" data-image-width="1645" data-image-height="1080">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-align-center u-container-style u-group u-white u-group-1">
                <div class="u-container-layout u-container-layout-1">

                    <form class="u-clearfix u-form-spacing-28 u-form-vertical u-inner-form" style="padding: 10px"
                        enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
                        name="form" method="POST">
                        <h2 class="u-form-group u-form-text u-text u-text-1">Nuevo Artículo</h2>
                        <div class="u-form-group u-label-top">
                            <label for="name-5a14" class="u-label" wfd-invisible="true">Titulo:</label>
                            <input type="text" placeholder="Título del artículo" id="name-5a14" name="title"
                                class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle"
                                autofocus>
                            <span class="error">
                                <?php echo $userError; ?>
                            </span>
                        </div>
                        <div class="u-form-email u-form-group u-label-top">
                            <label for="email-5a14" class="u-label" wfd-invisible="true">Extracto: </label>
                            <input type="text" placeholder="Extracto del artículo" id="email-5a14" name="summary"
                                class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle">
                            <span class="error">
                                <?php echo $userError; ?>
                            </span>
                        </div>
                        <div class="u-form-group u-form-message u-label-top">
                            <label for="message-5a14" class="u-label" wfd-invisible="true">Publicación:</label>
                            <textarea placeholder="Texto de la publicación" rows="4" cols="50" id="message-5a14"
                                name="post"
                                class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle"></textarea>
                            <span class="error">
                                <?php echo $userError; ?>
                            </span>
                        </div>
                        <div class="u-align-right u-form-group u-form-submit u-label-top">
                            <input class="u-btn u-button-style u-btn-1" type="submit" name="submit" value="Submit">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php require_once 'app/views/components/footer.php' ?>

</body>

</html>