<?php
function login_user($dbh, $user, $pass){
    $statement = $dbh->prepare("SELECT user_name, firstname, lastname FROM Customer where customer_mail_address = :name and password = :pass ");
    $statement->execute(array(  ':name' => $user,
                                ':pass' => $pass));
    $result = $statement->fetch();

    if(!is_null($result)){
        if(!is_null($result['user_name'])){
            $_SESSION['user'] = $result['firstname'] .' ' . $result['lastname'];
            $_SESSION['login_time'] = date("H:i");
            $_SESSION['login_date'] = date("d-m-Y");
            header("Location: index.php");
        }
    }
}

function require_Login(){
    if (!isset($_SESSION)) {
        session_start();
    }

    if(!user_is_logged_in()){
        redirect("login.php");
    }
}

function user_is_logged_in(){
    if(ISSET($_SESSION['user'])){
        if(!IS_NULL($_SESSION['user'])){
            return true;
        }
    }
    return false;
}

function redirect($location){
    header("Location: ".$location);
}

function register_user() {



}