<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
</head>
<body class="no-padding">
<?php
    //load required functions
    require_once 'php/user-functions.php';
    require_once 'php/db-functions.php';
    //open database connection
    $dbh = db_connect();
    session_start();
    //check if the user is logged in, if not redirect to the login page
    requireLogin();
    //load navigation menu
    include_once 'partial/nav.php';
?>

<div class="full-width about-us gebruiker">


    <div class="full-width flex">
        <aside class="third-width">
            <ul>
                <li><a href="#">Gegevens wijzigen</a></li>
                <li><a href="#">Wachtwoord wijzigen</a></li>
                <li><a href="#">Account verwijderen</a></li>
            </ul>
        </aside>

        <main class="two-third-width">
            <table class="full-width">
                <tr>
                    <td>
                        E-mail
                    </td>
                    <td>
                        BobRoss@happy.tree
                    </td>
                </tr>
                <tr>
                    <td>
                        Voornaam
                    </td>
                    <td>
                        Bob
                    </td>
                </tr>
                <tr>
                    <td>
                        Achternaam
                    </td>
                    <td>
                        Ross
                    </td>
                </tr>
                <tr>
                    <td>
                        Gebruikers naam
                    </td>
                    <td>
                        Bob Ross
                    </td>
                </tr>
                <tr>
                    <td>
                        Betaal methode
                    </td>
                    <td>
                        Master-card
                    </td>
                </tr>
                <tr>
                    <td>
                        Kaart nummer
                    </td>
                    <td>
                        123456789
                    </td>
                </tr>
                <tr>
                    <td>
                        Land
                    </td>
                    <td>
                        Nederland
                    </td>
                </tr>
                <tr>
                    <td>
                        Geslacht
                    </td>
                    <td>
                        Man
                    </td>
                </tr>
                <tr>
                    <td>
                        Geboorte datum
                    </td>
                    <td>
                        29 oktober 1942
                    </td>
                </tr>
            </table>
        </main>
    </div>
</div>

<footer>
    &copy; KerstFlix Inc. 2017
</footer>


</body>
</html>