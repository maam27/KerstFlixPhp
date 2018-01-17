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
    include_once 'php/user-functions.php';
    include_once 'php/film-functions.php';
    //open database connection
    $dbh = db_connect();
    session_start();
    require_Login();

    //load navigation menu
    include_once 'partial/nav.php';
?>

<div class="Trailer-Flex">
    <?php
    $source = get_trailer_of_movie($dbh,$_GET['movie']);
    $source = preg_replace('/.*watch\?v=/','',$source);
    ?>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$source?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
<?php
include 'partial/footer.php'
?>

</body>
</html>