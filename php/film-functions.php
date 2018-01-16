<?php
function getFilms($dbh, $filter, $order){
    $html="";
    $query = "select distinct movie.title, movie.cover_image, movie.movie_id from movie
              full join Movie_Genre on Movie_Genre.movie_id = Movie.movie_id 
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
    $statement = $dbh->prepare('select distinct genre_name as \'genre\' from movie join movie_genre on movie_genre.movie_id = movie.movie_id');
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


function getMovieDetails($dbh, $movieID){
    $query = "select movie.title, movie.duration, movie.description, movie.publication_year, movie.cover_image, movie_genre.genre_name
              from movie LEFT JOIN movie_genre on movie.movie_id = movie_genre.movie_id
              where movie.movie_id=$movieID";

    //echo $query; //debug the query

    $statement = $dbh->prepare($query);
    $statement->execute();
    $result = $statement -> fetch();
    return $result;
}

function get_all_film_genres_of_movie($dbh, $movieID){
    //query all genres linked to a movie
    $statement = $dbh->prepare("select distinct genre_name FROM movie_genre where movie_id=$movieID");
    $statement->execute();
    $result = $statement->fetch();
    //put first one in a string
    $genres = $result['genre_name'];

    //add the remaining into the string
    while($row = $statement->fetch()){
        $genres .= ','.$row['genre_name'];
    }
    //convert to array
    return $genres;
}

function get_all_directors_of_movie($dbh, $movieID){
    //query all genres linked to a movie
    $statement = $dbh->prepare("SELECT CONCAT(firstname,' ', lastname) AS naam from Person 
						   join Movie_Director on Person.person_id = Movie_Director.person_id
						   where movie_id =$movieID");
    $statement->execute();
    $result = $statement->fetch();
    //put first one in a string
    $directors = $result['naam'];
    //add the remaining into the string
    while($row = $statement->fetch()){
        $directors .= ', '.$row['naam'];
    }
    //convert to array
    return $directors;
}

function get_cast_of_movie($dbh, $movieID){
    //query all genres linked to a movie
    $statement = $dbh->prepare("SELECT CONCAT(Person.firstname,' ', Person.lastname) AS [name], [role] FROM Person 
                              join Movie_Cast on Person.person_id = Movie_Cast.person_id
                              where movie_id =$movieID");
    $statement->execute();
    $result = $statement->fetch();
    //put first one in a string
    $cast = $result['name'];
    //add the remaining into the string
    while($row = $statement->fetch()){
        $cast.= ', '.$row['name'];
    }
    //convert to array
    return $cast;
}