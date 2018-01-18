<!doctype html>
<html lang="NL">

<head>
    <meta charset="utf-8">
    <title>Welkom bij KerstFlix!</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
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

<h1>Welkom bij KerstFlix!</h1>
<br>
<p>Welkom bij KerstFlix, de beste plek voor al je kerstfilms! We hebben dit jaar de beste films uitgezocht om lekker
    voor te gaan zitten met een mok chocolademelk. Of je nou met je familie een filmavond houdt, of even een momentje
    alleen wilt zijn, wij hebben precies de film die jij nodig hebt!</p>
<br>
<p>Om in te loggen of te registreren, klik rechtsbovenin op de gewenste keuze. Om bij de films te komen, klik op "Films"
    in de
    navigatiebalk.</p>
<?php
include 'partial/footer.php'
?>
</body>
</html>