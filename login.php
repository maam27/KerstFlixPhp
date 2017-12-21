<!doctype html>
    <html lang="NL">
        <head>
        <meta charset="utf-8">
        <title>Welkom bij KerstFlix!</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <?php
        //open database connection
        require_once 'php/db-conn.php';

        //load navigation menu
        include_once 'partial/nav.php';
        ?>

        <?php
        echo 'debug user info <br>';
        echo 'a.nunc@seddolor.com <br>';
        echo 'In<br>';

        if(ISSET($_POST['username']) && ISSET($_POST['password'])){
            $userName = $dbh->quote($_POST['username']);
            $password = $dbh->quote($_POST['password']);

            try {
                $data = $dbh->query("SELECT user_name FROM Customer where customer_mail_address = {$userName} and password = {$password}");
                $result = $data->fetch();

                if(!is_null($result)){
                    if(!is_null($result['user_name'])){
                        echo 'login';
                        session_start();
                        $_SESSION['user'] = $result['user_name'];
                        echo '<p>a</p>';
                    }
                }
                else{
                    echo '<p>b</p>';
                }
            }catch(mysqli_sql_exception $exception){
            }
        }
        ?>

        <form method="Post" action="">
            <input id="username" name="username" type="mail"        placeholder="E-mail"    required    value="<?=$_POST['username']?>">
            <input id="password" name="password" type="password"    placeholder="password"  required>
            <button>verzend</button>
        </form>

        <footer>
            &copy; KerstFlix Inc. 2017
        </footer>
    </body>
</html>


