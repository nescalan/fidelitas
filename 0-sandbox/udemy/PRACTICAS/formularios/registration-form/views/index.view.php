<!DOCTYPE html>
<html>

<head>
    <title>Simple registration form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <div class="main-block">
        <h1>Registration</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <hr>
            <div class="account-type">
                <input type="radio" value="none" id="radioOne" name="account" checked />
                <label for="radioOne" class="radio">Personal</label>
                <input type="radio" value="none" id="radioTwo" name="account" />
                <label for="radioTwo" class="radio">Company</label>
            </div>
            <hr>

            <label id="icon" for="name"><i class="fas fa-user"></i></label>
            <input type="text" name="name" id="name" placeholder="Name" />
            <label id="icon" for="email"><i class="fas fa-envelope"></i></label>
            <input type="text" name="email" id="name" placeholder="Email" />
            <label id="icon" for="password"><i class="fas fa-unlock-alt"></i></label>
            <input type="password" name="password" id="name" placeholder="Password" />
            <hr>
            <div class="gender">
                <input type="radio" value="none" id="male" name="gender" checked />
                <label for="male" class="radio">Male</label>
                <input type="radio" value="none" id="female" name="gender" />
                <label for="female" class="radio">Female</label>
            </div>
            <hr>
            <div class="btn-block">
                <button type="submit" href="/" name="submit">Submit</button>
                <!-- ERROR: Validation -->
                <?php if (!empty($errorMessage)): ?>
                <div class="alert error">
                    <?php echo $errorMessage ?>
                </div>
                <?php endif ?>

                <!-- SUCCESS: Validation -->
                <?php if ($success): ?>
                <div class="alert success">
                    <?php echo "Formulario enviado correctamente" ?>

                </div>
                <?php endif ?>
            </div>
        </form>
    </div>
</body>

</html>