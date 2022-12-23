<?php // index.php

require_once "./connection/login-udemy.php";

$connection = new mysqli(
    $db_hostname,
    $db_username,
    $db_password,
    $db_database
);

if ($connection->connect_error) {
    die("We are sorry, but is not possible to complete the requested task.");
} else {
    echo "Connection to the database made successfully";
}

# DELETE ACTION: delete button submited
if (isset($_POST["delete"]) && isset($_POST["isbn"])) {

    # DELETE: data from DDBB
    $isbn = $_POST["isbn"];
    $query = "DELETE FROM publications WHERE isbn = $isbn";
    $result = $connection->query($query);

    # CONDITIONAL: delete testing 
    if (!$result) {

        # MESSAGE: delete error
        echo "DELETE failed: $query";

    }

    # CONDITIONAL: verifying form submition
    if (
        isset($_POST["author"]) &&
        isset($_POST["title"]) &&
        isset($_POST["category"]) &&
        isset($_POST["year"]) &&
        isset($_POST["isbn"])
    ) {
        # DECONTRUCTION: $_POST variable
        $author = $_POST["author"];
        $title = $_POST["title"];
        $category = $_POST["category"];
        $year = $_POST["year"];
        $isbn = $_POST["isbn"];

        #QUERY: insert option
        $query = "INSERT INTO publications VALUES" . "(
            $author, 
            $title,
            $category,
            $year,
            $isbn
            )";
        $result = $connection->query($query);

        #CONDITIONAL: query validation
        if (!$result) {

            # MESSAGE: error
            echo "INSERT failed: $query <br>";
        }
    }
}

require_once "./view/index.view.php";

# QUERY: table content
$query = "SELECT * FROM publications";
$result = $connection->query($query);

if (!$result) {
    die("We are sorry, but is not possible to complete the requested task.");
}

# COUNTING: number of rows in the query
$rows = $result->num_rows;

# DISPLAY: all the table data on screen
for ($j = 0; $j < $rows; $j++) {

    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);

    echo "Author: " . $row[0] . "<br>";
    echo "Title" . $row[1] . "<br>";
    echo "Category" . $row[2] . "<br>";
    echo "Year" . $row[3] . "<br>";
    echo "ISBN" . $row[4] . "<br>";

}

?>