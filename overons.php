<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Over Ons</title>
    <?php
    include 'partial/include-css.php';
    ?>
</head>
<body class="no-padding">
<?php
    //load required functions
    require_once 'php/db-functions.php';
    //open database connection
    $dbh = db_connect();
    session_start();
    //load navigation menu
    include_once 'partial/nav.php';
?>

<div class="full-width about-us">
    <div class="full-width">
        <h1>Over ons</h1>
        <p>Use what happens naturally, don't fight it. Let's get wild today. Happy painting, God bless.</p>
        <p>If these lines aren't straight, your water's going to run right out of your painting and get your floor wet.
            And right there you got an almighty cloud. Everybody needs a friend. We'll play with clouds today. Let's
            have a little bit of fun today.</p>
        <p>Trees get lonely too, so we'll give him a little friend. Son of a gun. You have to allow the paint to break
            to make it beautiful. The man who does the best job is the one who is happy at his job. There isn't a rule.
            You just practice and find out which way works best for you.</p>
        <p>Nice little fluffy clouds laying around in the sky being lazy. We have no limits to our world. We're only
            limited by our imagination. We'll put some happy little leaves here and there. This is gonna be a happy
            little seascape.</p>
        <p>In your world you have total and absolute power. I think there's an artist hidden in the bottom of every
            single one of us. We'll take a little bit of Van Dyke Brown. But they're very easily killed. Clouds are
            delicate. When you buy that first tube of paint it gives you an artist license. Tree trunks grow however
            makes them happy.</p>
        <p>Now, we're going to fluff this cloud. You don't have to be crazy to do this but it does help. Let's build
            some happy little clouds up here. Get tough with it, get strong.</p>
        <p>The least little bit can do so much. You need the dark in order to show the light. Any little thing can be
            your friend if you let it be. Every single thing in the world has its own personality - and it is up to you
            to make friends with the little rascals. You can do anything your heart can imagine.</p>
    </div>

    <div class="full-width flex personen">
        <div class="half-width persoon">
            <div class="flex img-div">
                <img alt="Lars" src="img/Lars.jpg">
            </div>
            <p>Use what happens naturally, don't fight it. Let's get wild today. Happy painting, God bless.
                If these lines aren't straight, your water's going to run right out of your painting and get your floor
                wet. And right there you got an almighty cloud. Everybody needs a friend. We'll play with clouds today.
                Let's have a little bit of fun today.</p>
        </div>
        <div class="half-width persoon">
            <div class="flex img-div">
                <img alt="Mart" src="img/mart.jpg">
            </div>
            <p>Use what happens naturally, don't fight it. Let's get wild today. Happy painting, God bless.
                If these lines aren't straight, your water's going to run right out of your painting and get your floor
                wet. And right there you got an almighty cloud. Everybody needs a friend. We'll play with clouds today.
                Let's have a little bit of fun today.</p>
        </div>
    </div>


</div>


<?php
include 'partial/footer.php'
?>

</body>
</html>