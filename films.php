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

requireLogin();

//load navigation menu
include_once 'partial/nav.php';
?>

<div class="movies">
    <div class="full-width">
        <h1>Filmoverzicht</h1>

        <!--form voor filter opties-->
        <form name="filter" action="#" method="get">
            <div class="flex">
                <p>filters</p>
                <!--search bar-->
                <div>
                    <?php
                    $searchTerm ="";
                    if(isset($_GET['search'])) {
                        if(!empty($_GET['search'])){
                            $searchTerm = $_GET['search'];
                        }
                    }
                    ?>
                    <input name="search" type="text" placeholder="zoek op film naam" value="<?=$searchTerm?>">
                </div>
                <!--Genre filter-->
                <div>
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
                </div>
                <!--Year filter-->
                <div>
                    <select name="publication_year">
                        <option value="">alle</option>
                        <?php
                        foreach(get_all_film_publication_years($dbh) as $year){
                            //autoselect the currently selected in the dropdown
                            $selected="";
                            if(isset($_GET['publication_year'])) {
                                if($year == $_GET['publication_year']){
                                    $selected = 'selected';
                                }
                            }
                            echo '<option '.$selected.'>'.$year."</option>";
                        }
                        ?>
                    </select>
                </div>
                <!--director filter-->
                <div>
                    <select name="director">
                        <option value="">alle</option>
                        <?php
                        foreach(get_all_film_directors($dbh) as $id => $director){
                            //autoselect the currently selected in the dropdown
                            $selected="";
                            if(isset($_GET['director'])) {
                                if($id == $_GET['director']){
                                    $selected = 'selected';
                                }
                            }
                            echo '<option '.$selected.' value="'.$id.'">'.$director."</option>";
                        }
                        ?>
                    </select>
                </div>
                <button>filter</button>
            </div>
       </form>
    </div>

    <!-- filmId, naam, img-->
    <div class="flex" style="flex-wrap:wrap;">
        <?php
            $filter="";
            //apply filters
            if(isset($_GET['search'])) {
                if(!empty($_GET['search'])){
                    $filter .= " and movie.[title] like '%" . $_GET['search']."%'";
                }
            }
            //filter genre
            if(isset($_GET['genre'])) {
                if(!empty($_GET['genre'])){
                    $filter .= " and movie_genre.genre_name = '" . $_GET['genre']."'";
                }
            }
            //filter publication year
            if(isset($_GET['publication_year'])) {
                if(!empty($_GET['publication_year'])){
                    $filter .= " and movie.publication_year = '" . $_GET['publication_year']."'";
                }
            }
            //filter publication year
            if(isset($_GET['director'])) {
                if(!empty($_GET['director'])){
                    $filter .= " and movie_director.person_id = '" . $_GET['director']."'";
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