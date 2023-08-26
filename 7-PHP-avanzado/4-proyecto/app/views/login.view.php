<!DOCTYPE html>
<html style="font-size: 16px;" lang="sp">

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

<body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-overlap u-xl-mode" data-lang="en">
    <?php include_once 'app/views/components/header.php'; ?>
    <section class="u-align-center u-clearfix u-section-1" id="sec-ae05">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width-xs u-form u-form-1">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 15px;"
                    source="email" name="form" method="POST">
                    <h2 class="u-form-group u-form-text u-text u-text-1"> Inicia Sesión</h2>
                    <div class="u-form-group u-form-name u-label-top">
                        <label for="name-6797" class="u-label">Usuario</label>
                        <input type="text" placeholder="usuario@correo.com" id="name-6797" name="user"
                            class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle">
                        <span class="error">*
                            <?php echo $userError; ?>
                        </span>
                    </div>
                    <div class="u-form-group u-label-top">
                        <label for="email-6797" class="u-label">Contraseña</label>
                        <input placeholder="Ingrese la contraseña" id="email-6797" name="password"
                            class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle"
                            required="required" type="password">
                    </div>
                    <input type="submit" name="submit" value="Submit">
                    <div class="u-align-right u-form-group u-form-submit u-label-top">
                        <a href="#" class="u-btn u-btn-submit u-button-style u-btn-1">Ingresar</a>
                    </div>
                    <!-- <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
                    <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors
                        then try again.</div>
                    <input type="hidden" value="" name="recaptchaResponse">
                    <input type="hidden" name="formServices" value="1fa0696b-9cbf-50df-50f1-d1ddfe40230a"> -->
                </form>
            </div>
        </div>
    </section>

    <section class="u-align-center u-clearfix u-section-1" id="sec-ae05">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width-xs u-form u-form-1">
                <form class="u-clearfix u-form-spacing-15  u-inner-form" method="post"
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <h2 class="u-form-group u-form-text u-text u-text-1"> Inicia Sesión</h2>
                    <div class="u-form-group u-form-name u-label-top">
                        <label for="name-6797" class="u-label">Usuario</label>
                        <input type="text" placeholder="usuario@correo.com" id="name-6797" name="user"
                            class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle">
                        <span class="error">
                            <?php echo $userError; ?>
                        </span>
                    </div>
                    <div class="u-form-group u-label-top">
                        <label for="email-6797" class="u-label">Contraseña</label>
                        <input placeholder="Ingrese la contraseña" id="email-6797" name="password"
                            class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle"
                            type="password">
                        <span class="error">
                            <?php echo "$pwdError"; ?>
                        </span>
                    </div>
                    Password:
                    <input type="text" name="password">
                    <span class="error">
                        <?php echo "$pwdError"; ?>
                    </span>
                    <br><br>


                    <input type="submit" name="submit" value="Submit">

                </form>
            </div>
        </div>
    </section>

    <!-- Imports footer component -->
    <?php include_once 'app/views/components/footer.php' ?>

</body>

</html>