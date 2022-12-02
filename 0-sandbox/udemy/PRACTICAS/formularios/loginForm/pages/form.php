<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Form Practices</title>
</head>

<body>
    <!-- TITLE: Page Title -->
    <hgroup>
        <h1>Material Design Form</h1>
        <h3>By Nelson GE</h3>
    </hgroup>

    <!-- FORM: Beginig -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <div class="group">
            <input type="text" name="first-name"><span class="highlight"></span><span class="bar"></span>
            <label>Name</label>
        </div>

        <div class="group">
            <input type="email" name="email"><span class="highlight"></span><span class="bar"></span>
            <label>Email</label>
        </div>

        <!-- BUTTON: Subscribe -->
        <button type="submit" class="button buttonBlue" name="btn-submit">Subscribe
            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </button>

        <!-- ERROR: Validation -->
        <?php if (!empty($errorMessage)): ?>
        <div class="alert error">
            <?php echo $errorMessage ?>
        </div>
        <?php endif ?>
    </form>
    <!-- FORM: End -->

    <!-- FOOTER: Beginig -->
    <footer><a href="http://www.polymer-project.org/" target="_blank"><img
                src="https://www.polymer-project.org/images/logos/p-logo.svg"></a>
        <p>You Gotta Love <a href="http://www.polymer-project.org/" target="_blank">Google</a></p>
    </footer>

    <!-- <script src="./js/script.js"></script> -->
</body>

</html>