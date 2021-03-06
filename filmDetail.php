<!doctype html>
<html lang="NL">
<head>
    <meta charset="utf-8">
    <title>Details</title>
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
//load navigation menu
require_Login();

include_once 'partial/nav.php';

$row = getMovieDetails($dbh, $_GET["movie"]);

$img = (!IS_NULL($row['cover_image'])) ? $row['cover_image'] : "missing_image.png";
?>

<div class="movie-details">
    <div class="full-width flex">
        <div class="third-width">
            <img src="img/<?= $img ?>" alt="<?= $img ?>">
        </div>
        <div class="two-third-width generic-information">
            <h1><?= $row["title"] ?></h1>
            <p><strong>Director: </strong><?php echo get_all_directors_of_movie($dbh, $_GET["movie"]) ?></p>
            <p><strong>Genre: </strong><?php echo get_all_film_genres_of_movie($dbh, $_GET["movie"]); ?></p>
            <p><strong>Speelduur:</strong> <?= $row["duration"] ?> minuten</p>
            <p><strong>Jaar van uitgave:</strong><?= $row["publication_year"] ?></p>
            <p><strong>Bekijk de <a href="trailer.php?movie=<?= $_GET["movie"] ?>"><span
                                class="highlight">trailer</span></a></strong></p>
        </div>
    </div>
    <div class="full-width margin-top">
        <div class="full-width">
            <p><strong>Beschrijving:</strong></p>
            <p><?= $row["description"] ?></p>
        </div>
        <div class="full-width space-top">
            <strong>Cast: </strong><br>
            <br>
            <table class="full-width">
                <tr>
                    <td><strong>Name</strong></td>
                    <td><strong>Role</strong></td>
                </tr>
                <tr>
                    <td><?php echo get_cast_of_movie($dbh, $_GET["movie"]) ?></td>
                    <td><?php echo get_roles_of_cast($dbh, $_GET["movie"]) ?></td>
                </tr>

            </table>
        </div>
    </div>
</div>

<?php
include 'partial/footer.php'
?>
</body>
</html>