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
    <h2 class="full-width" id="Action">Action</h2>
    <div class="category full-width">
        <?= get_latest_films($dbh,5,'action')?>
    </div>
    <h2 class="full-width" id="Sci-Fi">Sci-Fi</h2>
    <div class="category last full-width">
        <?= get_latest_films($dbh,5,'Sci-Fi')?>
        <!--
        <a href="home-alone.html">
            <div class="movie">
                <div class="img-div">
                    <img src="img/a-royal-christmas-2014.jpg" alt="a-royal-christmas-2014.jpg"/>
                </div>
                <div class="title">
                    <h3>A Royal Christmas</h3>
                </div>
            </div>
        </a>
        <a href="home-alone.html">
            <div class="movie">
                <div class="img-div">
                    <img src="img/get-santa-2014.jpg" alt="get-santa-2014.jpg"/>
                </div>
                <div class="title">
                    <h3>Get Santa</h3>
                </div>
            </div>
        </a>
        <a href="home-alone.html">
            <div class="movie">
                <div class="img-div">
                    <img src="img/Grumpy-Cats-Worst-Christmas-Ever-2014.jpg"
                         alt="Grumpy-Cats-Worst-Christmas-Ever-2014.jpg"/>
                </div>
                <div class="title">
                    <h3>Grumpy Cat's Worst Christmas Ever</h3>
                </div>
            </div>
        </a>
        <a href="home-alone.html">
            <div class="movie">
                <div class="img-div">
                    <img src="img/northpole-2014.jpg" alt="northpole-2014.jpg"/>
                </div>
                <div class="title">
                    <h3>Northpole</h3>
                </div>
            </div>
        </a>
        <a href="home-alone.html">
            <div class="movie">
                <div class="img-div">
                    <img src="img/the-night-before-2015.jpg" alt="the-night-before-2015.jpg"/>
                </div>
                <div class="title">
                    <h3>The Night Before</h3>
                </div>
            </div>
        </a>
        <a href="home-alone.html">
            <div class="movie">
                <div class="img-div">
                    <img src="img/elf.jpg" alt="elf.jpg"/>
                </div>
                <div class="title">
                    <h3>Elf</h3>
                </div>
            </div>
        </a>
        <a href="home-alone.html">
            <div class="movie">
                <div class="img-div">
                    <img src="img/a-christmas-story.jpg" alt="a-christmas-story.jpg"/>
                </div>
                <div class="title">
                    <h3>A Christmas Story</h3>
                </div>
            </div>
        </a>
        <a href="home-alone.html">
            <div class="movie">
                <div>
                    <img src="img/home_alone.jpg" alt="home_alone.jpg"/>
                </div>
                <div class="title">
                    <h3>Home Alone</h3>
                </div>
            </div>
        </a>
        <a href="home-alone.html">
            <div class="movie">
                <div>
                    <img src="img/The-Polar-Express.jpg" alt="The-Polar-Express.jpg"/>
                </div>
                <div class="title">
                    <h3>The Polar Express</h3>
                </div>
            </div>
        </a>
        <a href="home-alone.html">
            <div class="movie">
                <div>
                    <img src="img/the-santa-clause.jpg" alt="the-santa-clause.jpg"/>
                </div>
                <div class="title">
                    <h3>The Santa Clause</h3>
                </div>
            </div>
        </a>
        <a href="home-alone.html">
            <div class="movie">
                <div>
                    <img src="img/white-christmas.jpg" alt="white-chirstmas.jpg"/>
                </div>
                <div class="title">
                    <h3>White Christmas</h3>
                </div>
            </div>
        </a>
        <a href="home-alone.html">
            <div class="movie">
                <div>
                    <img src="img/Scrooged.jpg" alt="Scrooged.jpg"/>
                </div>
                <div class="title">
                    <h3>Scrooged</h3>
                </div>
            </div>
        </a>
        <a href="home-alone.html">
            <div class="movie">
                <div>
                    <img src="img/national-lampoons-christmas-vacation.jpg"
                         alt="national-lampoons-christmas-vacation.jpg"/>
                </div>
                <div class="title">
                    <h3>National Lampoon's Christmas Vacation</h3>
                </div>
            </div>
        </a>
        <a href="home-alone.html">
            <div class="movie">
                <div>
                    <img src="img/miracle-on-34th-street.jpg" alt="miracle-on-34th-street.jpg"/>
                </div>
                <div class="title">
                    <h3>Miracle on 34th Street</h3>
                </div>
            </div>
        </a>
        <a href="home-alone.html">
            <div class="movie">
                <div>
                    <img src="img/its-a-wonderful-life.jpg" alt="its-a-wonderful-life.jpg"/>
                </div>
                <div class="title">
                    <h3>It's a Wonderful Life</h3>
                </div>
            </div>
        </a>
        -->
    </div>

</div>
<?php
include 'partial/footer.php'
?>
</body>
</html>