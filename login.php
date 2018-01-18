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
        //load required functions
        require_once 'php/db-functions.php';
        require_once 'php/user-functions.php';
        require_once 'php/general-functions.php';
        //open database connection
        $dbh = db_connect();
        session_start();
        //load navigation menu
        include_once 'partial/nav.php';
        ?>

        <?php
            //redirect naar profiel pagina als ingelogd
            if(user_is_logged_in()){
                redirect('index.php');
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
<h1>Login</h1>
                <form method="Post" action="">
                    <input id="username" name="username" type="mail"        placeholder="E-mail"    required    value="<?=if_set('username','post')?>">
                    <input id="password" name="password" type="password"    placeholder="Wachtwoord"  required>
                    <button>login</button>
                </form>
                 <p>Heeft u nog geen account klik <a class="no-margin" href="abonnementen.php">hier</a> om naar registratie te gaan</p>
            </div>
        </div>
        <?php
        include 'partial/footer.php'
        ?>
    </body>
</html>
