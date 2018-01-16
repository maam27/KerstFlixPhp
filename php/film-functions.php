<?php
function getFilms($dbh, $filter, $order){
    $html="";
    $query = "select distinct movie.title, movie.cover_image, movie.movie_id from movie
              full join Movie_Genre on Movie_Genre.movie_id = Movie.movie_id 
              full join Movie_Director on movie.movie_id = Movie_Director.movie_id
              where 1=1 {$filter} 
              order by {$order}";

    //echo $query; //debug the query

    $statement = $dbh->prepare($query);
    $statement->execute();
    while($row = $statement->fetch()){
        $id = $row['movie_id'];
        $title = $row['title'];
        $img = (!IS_NULL($row['cover_image']))?$row['cover_image']:"missing_image.png";

        $html .= <<<Film
        <a href="filmDetail.php?movie=$id">
            <div class="movie">
                <div class="img-div">
                    <img src="img/$img" alt="$img"/>
                </div>
                <div class="title">
                    <h3>$title</h3>
                </div>
            </div>
        </a>
Film;
    }
    return $html;
}

function get_all_film_genres($dbh){
    //query all genres linked to a movie
    $statement = $dbh->prepare('select distinct 
                                genre_name as \'genre\' 
                                from movie 
                                join movie_genre on movie_genre.movie_id = movie.movie_id');
    $statement->execute();
    $result = $statement->fetch();

    //put first one in a string
    $genres = $result['genre'];
    //add the remaining into the string
    while($row = $statement->fetch()){
        $genres .= ','.$row['genre'];
    }
    //convert to array
    return explode(',',$genres);
}

function get_all_film_publication_years($dbh){
    //query all genres linked to a movie
    $statement = $dbh->prepare('select distinct 
                                publication_year as \'year\' 
                                from movie');
    $statement->execute();
    $result = $statement->fetch();

    //put first one in a string
    $years = $result['year'];
    //add the remaining into the string
    while($row = $statement->fetch()){
        $years .= ','.$row['year'];
    }
    //convert to array
    return explode(',',$years);
}

function get_all_film_directors($dbh){
    //query all genres linked to a movie
    $statement = $dbh->prepare('select distinct 
concat(person.firstname,\' \',Person.lastname) as \'director\',
Person.person_id from Movie_Director 
join Person on Movie_Director.person_id = Person.person_id
');
    $statement->execute();
    $directors = array();
    while($row = $statement->fetch()){
        $directors[$row['person_id']] = $row['director'];
    }
    return $directors;
}

function get_latest_films($dbh, $amount, $genre = ""){
    $html="";
    $query = "select distinct top ".$amount." movie.title, movie.cover_image, movie.movie_id from movie
              full join Movie_Genre on Movie_Genre.movie_id = Movie.movie_id ";
    if($genre != ""){
        $query .= " where movie_genre.genre_name = '".$genre."'";
    }
    $query .= " order by movie.movie_id desc";

    //echo $query; //debug the query

    $statement = $dbh->prepare($query);
    $statement->execute();
    while($row = $statement->fetch()){
        $id = $row['movie_id'];
        $title = $row['title'];
        $img = (!IS_NULL($row['cover_image']))?$row['cover_image']:"missing_image.png";

        $html .= <<<Film
        <a href="filmDetail.php?movie=$id">
            <div class="movie">
                <div class="img-div">
                    <img src="img/$img" alt="$img"/>
                </div>
                <div class="title">
                    <h3>$title</h3>
                </div>
            </div>
        </a>
Film;
    }
    return $html;
}
