<!doctype html>
<html lang="NL">
<head>
    <meta charset="utf-8">
    <title>Abonnementen</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
</head>
<body>
<?php
    //load required functions
    require_once 'php/db-functions.php';
    //open database connection
    $dbh = db_connect();
    session_start();
    //load navigation menu
    include_once 'partial/nav.php';
?>

<form method="post" action="#">
    <div class="full-width flex">
        <div class="third-width">
            <div class="subscription-plan">
                <div class="full-width plan">
                    <span class="caps-lock">Basis plan</span>
                </div>
                <div class="full-width">
                    <p>Use your imagination, let it go. We have all at one time or another mixed some mud. Let's make a
                        happy little mountain now. Mix your color marbly don't mix it dead. There is immense joy in just
                        watching - watching all the little creatures in nature.</p>
                    <p>Use your imagination, let it go. We have all at one time or another mixed some mud. Let's make a
                        happy little mountain now. Mix your color marbly don't mix it dead. There is immense joy in just
                        watching - watching all the little creatures in nature.</p>
                </div>
                <div class="full-width plan">
                    <label for="basic-plan">Selecteer Basis</label>
                    <input id="basic-plan" type="radio" name="plan" value="Basic"/>
                </div>
            </div>
        </div>

        <div class="third-width">
            <div class="subscription-plan">
                <div class="full-width plan">
                    <span class="caps-lock">Normaal plan</span>
                </div>
                <div class="full-width">
                    <p>Use your imagination, let it go. We have all at one time or another mixed some mud. Let's make a
                        happy little mountain now. Mix your color marbly don't mix it dead. There is immense joy in just
                        watching - watching all the little creatures in nature.</p>
                    <p>Use your imagination, let it go. We have all at one time or another mixed some mud. Let's make a
                        happy little mountain now. Mix your color marbly don't mix it dead. There is immense joy in just
                        watching - watching all the little creatures in nature.</p>
                </div>
                <div class="full-width plan">
                    <label for="normal-plan">Selecteer normaal</label>
                    <input id="normal-plan" type="radio" name="plan" value="Standaard"/>
                </div>
            </div>
        </div>

        <div class="third-width">
            <div class="subscription-plan">
                <div class="full-width plan">
                    <span class="caps-lock">Premium plan</span>
                </div>
                <div class="full-width">
                    <p>Use your imagination, let it go. We have all at one time or another mixed some mud. Let's make a
                        happy little mountain now. Mix your color marbly don't mix it dead. There is immense joy in just
                        watching - watching all the little creatures in nature.</p>
                    <p>Use your imagination, let it go. We have all at one time or another mixed some mud. Let's make a
                        happy little mountain now. Mix your color marbly don't mix it dead. There is immense joy in just
                        watching - watching all the little creatures in nature.</p>
                </div>
                <div class="full-width plan">
                    <label for="premium-plan">Selecteer premium</label>
                    <input id="premium-plan" type="radio" name="plan" value="Premium"/>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width subscription-information">
        <table>
            <tr>
                <td>
                    <label for="email">E-mail</label>
                </td>
                <td>
                    <input id="email" type="email" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="voornaam">Voornaam</label>
                </td>
                <td>
                    <input id="voornaam" type="text" name="voornaam">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="achternaam">Achternaam</label>
                </td>
                <td>
                    <input id="achternaam" type="text" name="achternaam">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="username">Gebruikers naam</label>
                </td>
                <td>
                    <input id="username" type="text" name="username">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Wachtwoord</label>
                </td>
                <td>
                    <input id="password" type="password" name="password">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password2">Wachtwoord opnieuw</label>
                </td>
                <td>
                    <input id="password2" type="password" name="password2">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="paymentmethod">Betaal methode</label>
                </td>
                <td>
                    <select id="paymentmethod" name="paymentmethod">
                        <option value="mastercard">Master-card</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="cardnumber">Kaart nummer</label>
                </td>
                <td>
                    <input id="cardnumber" type="number" name="cardnumber">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="country">Land</label>
                </td>
                <td>
                    <select id="country" name="country">
                        <option value="NL">Nederland</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gender">Geslacht</label>
                </td>
                <td>
                    <select id="gender" name="gender">
                        <option value="M">Man</option>
                        <option value="F">Vrouw</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="birthdate">Geboorte datum</label>
                </td>
                <td>
                    <input id="birthdate" type="date" name="birthdate">
                </td>
            </tr>
            <tr>
                <td></td>
                <td class="align-right">
                    <button>registreer</button>
                </td>
            </tr>
        </table>
    </div>
</form>

<?php
include 'partial/footer.php'
?>
</body>


</html>