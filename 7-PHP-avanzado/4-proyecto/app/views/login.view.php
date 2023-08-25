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

    <!-- FONTS -->
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">

    <title>Blog | Inicio Sesión</title>

    <!-- SCRIPTS -->
    <script class="u-script" type="text/javascript" src="./vendor/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="./vendor/nicepage.js" defer=""></script>
    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Blog",
        "logo": "images/default-logo.png"}
    </script>
</head>

<!-- <body class="u-body u-overlap u-xl-mode" data-lang="es"> -->

<body class="u-body u-xl-mode" data-lang="es">
    <?php include_once 'app/views/components/header.php'; ?>
    <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="carousel_9e24">
        <form action="login.php" method="POST">
            Name: <input type="text" name="user"><br>
            E-mail: <input type="text" name="password"><br>
            <input type="submit">
        </form>
    </section>

    <section>
        Welcome
        <?php echo $user; ?><br>
        Your email address is:
        <?php echo $password; ?>
    </section>
    <?php include_once 'app/views/components/footer.php'; ?>

</body>

</html>