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

<body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-overlap u-xl-mode" data-lang="en">
  <?php include_once 'app/views/components/header.php'; ?>

  <section class="u-align-center u-clearfix u-section-1" id="sec-ae05">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-expanded-width-xs u-form u-form-1">

        <!-- FORM -->
        <form class="u-clearfix u-form-spacing-15 u-inner-form" style="padding: 20px;" method="POST"
          action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
          <h2 class="u-form-group u-form-text u-text u-text-1"> Contactenos </h2>
          <br>

          <input type="hidden" name="id" value="<?php echo $post['id'] ?>">

          <div class="u-form-group u-form-name u-label-top">
            <label for="name-6797" class="u-label">Nombre:</label>
            <input type="text" id="name-6797" name="name"
              class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle"
              value="<?php echo $post['title'] ?>" autofocus>
            <br>
            <span class="error">
              <?php echo $titleError; ?>
            </span>
          </div>

          <div class="u-form-group u-label-top">
            <label for="email-6797" class="u-label">Correo:</label>
            <input
              class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle"
              id="email-6797" name="summary" type="email" value="<?php echo $post['summary'] ?>">
            <span class="error">
              <br>
              <?php echo "$summaryError"; ?>
            </span>
          </div>

          <div class="u-form-group u-label-top">
            <label for="email-6797" class="u-label">Publicación:</label>
            <textarea
              class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle"
              id="email-6797" name="post"><?php echo $post['post_content'] ?></textarea>

            <span class="error">
              <?php echo "$postError"; ?>
            </span>
          </div>

          <div class="u-form-group u-label-top">
            </br>
            <input name="thumb" type="file">
            <input name="thumb-guardada" type="hyden" value="<?php echo $post['thumb'] ?>">
          </div>

          <div class="u-align-right u-form-group u-form-submit u-label-top">
            <input class="u-btn u-button-style u-btn-1" type="submit" name="submit" value=" Enviar ">
          </div>

        </form>
      </div>
    </div>
  </section>

  <!-- Imports footer component -->
  <?php include_once 'app/views/components/footer.php' ?>

  <?php print_r($post); ?>
</body>

</html>