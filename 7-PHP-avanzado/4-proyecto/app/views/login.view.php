<?php require_once 'app\views\components\head.php' ?>

<body class="u-body u-xl-mode" data-lang="es">
    <?php include_once 'app\views\components\header.php'; ?>
    <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="carousel_9e24">
        <form action="login.php" method="POST">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            <input type="submit">
        </form>
    </section>

    <section>
        Welcome
        <?php echo $name; ?><br>
        Your email address is:
        <?php echo $email; ?>
    </section>
    <?php include_once 'app\views\components\footer.php'; ?>

</body>

</html>