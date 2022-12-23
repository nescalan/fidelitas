<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Publications Form</title>
</head>

<body>
    <h1>Publications Form</h1>

    <!-- FORM: Publications -->
    <form action="../index.php" method="post">
        <div>
            <label for="author">Author:</label>
            <input type="text" name="author" id="author">
        </div>
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="category">Category:</label>
            <input type="text" name="category" id="category">
        </div>
        <div>
            <label for="year">Year:</label>
            <input type="text" name="year" id="year">
        </div>
        <div>
            <label for="isbn">ISBN:</label>
            <input type="text" name="isbn" id="isbn">
        </div>
        <button type="submit">ADD RECORD</button>
    </form>
    <!-- END FORM -->

</body>

</html>