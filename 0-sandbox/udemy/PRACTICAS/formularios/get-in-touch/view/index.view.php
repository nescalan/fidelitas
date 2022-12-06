<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS: Reset -->
    <link rel="stylesheet" href="./css/reset.css">
    <!-- CSS: Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai&family=Hind:wght@400;700&display=swap"
        rel="stylesheet">
    <!-- CSS: Local -->
    <link rel="stylesheet" href="./css/global.css">
    <title>Form: Get in Touch</title>
</head>

<body>
    <div class="container">
        <div class="col-1">
            <img src="./img/envelope.png" alt="envelope">
        </div>
        <div class="col-2">
            <div class="card">
                <h1>Get in touch</h1>

                <!-- FORM: Beginig -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <input class="name" name="name" type="text" placeholder="Name">
                    <input class="email" name="email" type="email" placeholder="Email">
                    <textarea id="message" name="message" class="message" name="message" cols="30" rows="5"
                        placeholder="Message">
                    </textarea>
                    <button type="submit" name="submit">Submit</button>


                    <?php if (!empty($error)): ?>
                    <div class="alert error">
                        <?php echo $error ?>
                    </div>
                    <?php elseif ($sended): ?>
                    <div class="alert success">
                        <p>Thanks for contact us, we'll be in touch.</p>
                    </div>
                    <?php endif ?>




                </form>
                <!-- FORM: End -->

            </div>
        </div>
    </div>


</body>

</html>