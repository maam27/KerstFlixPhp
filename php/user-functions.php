<?php
function login_user($dbh, $user, $pass){
    $userName = $dbh->quote($user);
    $password = $dbh->quote($pass);
    try {
        $data = $dbh->query("SELECT user_name FROM Customer where customer_mail_address = {$userName} and password = {$password}");
        $result = $data->fetch();

        if(!is_null($result)){
            if(!is_null($result['user_name'])){
                echo 'login gelukt';
                $_SESSION['user'] = $result['user_name'];
                header("Location: index.php");
            }
        }
        else{
        }
    }catch(mysqli_sql_exception $exception){
    }
}