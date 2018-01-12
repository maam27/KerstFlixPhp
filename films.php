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

//requireLogin

//load navigation menu
include_once 'partial/nav.php';
?>

<div class="movies">
    <div class="full-width"">
        <h1>Filmoverzicht</h1>

        <!--form voor filter opties-->
        <form name="filter" action="" method="get">
            <p>filters</p>
            <select name="genre">
                <option value="">alle</option>
                    <?php
                    foreach(get_all_film_genres($dbh) as $genre){
                        //autoselect the currently selected in the dropdown
                        $selected="";
                        if(isset($_GET['genre'])) {
                            if($genre == $_GET['genre']){
                            $selected = 'selected';
                            }
                        }
                        echo '<option '.$selected.'>'.$genre."</option>";
                    }
                    ?>
            </select>
            <button>filter</button>
       </form>
    </div>

    <!-- filmId, naam, img-->
    <div class="flex" style="flex-wrap:wrap;">
        <?php
            $filter="";
            //apply filters
            //filter genre
            if(isset($_GET['genre'])) {
                if(!empty($_GET['genre'])){
                    $filter .= "and movie_genre.genre_name = '" . $_GET['genre']."'";
                }
            }

            $order = "movie.movie_id desc";
            echo getFilms($dbh,$filter,$order);
        ?>
    </div>


</div>
<footer>
    &copy; KerstFlix Inc. 2017
</footer>
</body>
</html>