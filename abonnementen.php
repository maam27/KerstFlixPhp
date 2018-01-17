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
    require_once 'php/user-functions.php';
    require_once 'php/general-functions.php';
    //open database connection
    $dbh = db_connect();
    session_start();

    if(user_is_logged_in()){
        redirect('index.php');
    }

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
                    <input id="basic-plan" type="radio" name="plan" value="Basic" <?=($_POST['plan']== 'Basic')?'checked':''?>/>
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
                    <input id="normal-plan" type="radio" name="plan" value="Standaard" <?=($_POST['plan']== 'Standaard')?'checked':''?>/>
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
                    <input id="premium-plan" type="radio" name="plan" value="Premium" <?=($_POST['plan']== 'Premium')?'checked':''?>/>
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
                    <input id="email" type="email" name="email" value="<?=if_set('email','post')?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="voornaam">Voornaam</label>
                </td>
                <td>
                    <input id="voornaam" type="text" name="voornaam" value="<?=if_set('voornaam','post')?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="achternaam">Achternaam</label>
                </td>
                <td>
                    <input id="achternaam" type="text" name="achternaam" value="<?=if_set('achternaam','post')?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="username">Gebruikers naam</label>
                </td>
                <td>
                    <input id="username" type="text" name="username" value="<?=if_set('username','post')?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Wachtwoord</label>
                </td>
                <td>
                    <input id="password" type="password" name="password" pattern="">
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
                    <input id="cardnumber" type="number" name="cardnumber" value="<?=if_set('cardnumber','post')?>">
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
                        <option value="M" <?=($_POST['gender']== 'M')?'selected':''?>>Man</option>
                        <option value="F" <?=($_POST['gender']== 'F')?'selected':''?>>Vrouw</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="birthdate">Geboorte datum</label>
                </td>
                <td>
                    <input id="birthdate" type="date" name="birthdate"  value="<?=if_set('birthdate','post')?>">
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