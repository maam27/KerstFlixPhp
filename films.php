<!DOCTYPE html>
<html lang="NL">
<head>
    <meta charset="UTF-8">
    <title>Overzicht</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
</head>
<body>
<?php
//load required functions
require_once 'php/db-functions.php';
require_once 'php/film-functions.php';
//open database connection
$dbh = db_connect();
session_start();
//load navigation menu
include_once 'partial/nav.php';
?>



<div class="movies">
    <div class="full-width"">
        <h1>Filmoverzicht</h1>
        <p>filters</p>
    </div>

    <!-- filmId, naam, img-->
    <div class="flex" style="flex-wrap:wrap;justify-content: space-around">
        <?php
            $filter="";
            $order = "movie_id desc";
            echo haalFilmsOp($dbh,$filter,$order);
        ?>
    </div>


</div>
<footer>
    &copy; KerstFlix Inc. 2017
</footer>
</body>
</html>