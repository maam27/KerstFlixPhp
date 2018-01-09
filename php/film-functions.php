<?php
function haalFilmsOp($dbh, $filter, $order){
    $html="";
    $query = "select * from movie where 1=1 {$filter} order by {$order}";
    $statement = $dbh->prepare($query);
    $statement->execute();
    while($row = $statement->fetch()){
        $id = $row['movie_id'];
        $title = $row['title'];
        $img = (!IS_NULL($row['cover_image']))?$row['cover_image']:"geen afbeelding";

        $html .= <<<Film
        <a href="home-alone.php?$id">
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