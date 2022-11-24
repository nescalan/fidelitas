<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS: Reset -->
    <link rel="stylesheet" href="./reset.css">
    <!-- CSS: Custom Styles -->
    <link rel="stylesheet" href="./css/global.css">
    <title>Validando Formularios con PHP</title>
</head>

<body>
    <div class="container">
        <div class="title">
            <h1>Validating Forms</h1>
            <h2>Welcome</h2>
            <p>Log in to your App to continue</p>
        </div>
        <form action="./server/server.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">

            <label for="username">Username: </label>
            <input type="text" name="username" id="username">

            <label for="correo">Correo:</label>
            <input type="email" name="email" id="email">

            <label for="age">Edad:</label>
            <input type="text" name="age" id="age">

            <button type="submit" name="action" value="default" class="btnSubmit">Submit</button>
        </form>
    </div>
</body>

</html>