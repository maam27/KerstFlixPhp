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
        //remove before done
        echo 'debug user info <br>';
        echo 'a.nunc@seddolor.com <br>';
        echo 'In<br>';
        ?>

        <?php
        //load required functions
        require_once 'php/db-functions.php';
        require_once 'php/user-functions.php';
        //open database connection
        $dbh = db_connect();
        session_start();
        //load navigation menu
        include_once 'partial/nav.php';
        ?>

        <?php
            //redirect naar profiel pagina als ingelogd
            if(ISSET($_SESSION['user'])){
                if(!IS_NULL($_SESSION['user'])){
                    header("Location: index.php");
                }
            }
        ?>


        <div class="login">
             <div>
                <?php
                //try logging in
                if(ISSET($_POST['username']) && ISSET($_POST['password'])){
                    login_user($dbh,$_POST['username'],$_POST['password']);
                    echo <<<login_fout
                    <div class="error-message" >De combinatie van e-mailadres en wachtwoord is niet geldig.</div>
login_fout;
                }
                //fill form fiels with user input when login failed
                $username = "";
                if(isset($_POST['username'])){
                    $username = $_POST['username'];
                };
                ?>

                <form method="Post" action="">
                    <input id="username" name="username" type="mail"        placeholder="E-mail"    required    value="<?=$username?>">
                    <input id="password" name="password" type="password"    placeholder="password"  required>
                    <button>login</button>
                </form>
            </div>
        </div>
        <?php
        include 'partial/footer.php'
        ?>
    </body>
</html>
