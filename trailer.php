<!doctype html>
<html lang="NL">
<head>
    <meta charset="utf-8">
    <title>Welkom bij KerstFlix!</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
</head>
<body>
<?php
    //load required functions
    require_once 'php/db-functions.php';
    //open database connection
    $dbh = db_connect();
    session_start();
    //load navigation menu
    include_once 'partial/nav.php';
?>

<div class="Trailer-Flex">
    <video controls>
        <source src="vid/Home-Alone.mp4" type="video/mp4">
    </video>
</div>
<?php
include 'partial/footer.php'
?>

</body>
</html>