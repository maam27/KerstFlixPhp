<!DOCTYPE html>
<html lang="NL">
<head>
    <meta charset="UTF-8">
    <title>Overzicht</title>
    <?php
    include 'partial/include-css.php';
    ?>
</head>
<body>
<?php
    //load required functions
    require_once 'php/db-functions.php';
    require_once 'php/film-functions.php';
    require_once 'php/user-functions.php';
    //open database connection
    $dbh = db_connect();
    session_start();
    //require login
    require_Login();
    //load navigation menu
    include_once 'partial/nav.php';
?>



<div class="movies">
    <div class="full-width">
        <h1>Filmoverzicht</h1>
        <p>If there's two big trees invariably sooner or later there's gonna be a little tree. These things happen
            automatically. All you have to do is just let them happen. You can create anything that makes you happy. Of
            course he's a happy little stone, cause we don't have any other kind. Isn't it fantastic that you can change
            your mind and create all these happy things? See. We take the corner of the brush and let it play
            back-and-forth. The shadows are just like the highlights, but we're going in the opposite direction. If I
            paint something, I don't want to have to explain what it is. It looks so good, I might as well not stop.
            This piece of canvas is your world. Paint anything you want on the canvas. Create your own world. Trees live
            in your fan brush, but you have to scare them out. Here's something that's fun. You have to make these big
            decisions. Just use the old one inch brush.</p>
        <p>Imagination is the key to painting. A beautiful little sunset. That's why I paint - because I can create the
            kind of world I want - and I can make this world as happy as I want it. That's the way I look when I get
            home late; black and blue.</p>
    </div>

    <h2 class="full-width" id="recent">Recent Toegevoegd</h2>
    <div class="category full-width">
        <?= get_latest_films($dbh,5)?>
    </div>
    <h2 class="full-width" id="Comedy">Comedy</h2>
    <div class="category full-width">
        <?= get_latest_films($dbh,5,'comedy')?>
    </div>
    <h2 class="full-width" id="Family">Family</h2>
    <div class="category last full-width">
        <?= get_latest_films($dbh,5,'Family')?>
    </div>

</div>
<?php
include 'partial/footer.php'
?>
</body>
</html>