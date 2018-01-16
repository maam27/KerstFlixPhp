<?php
if( !isset($_SESSION)){
    session_start();
}
require_once 'php/user-functions.php';
?>
<nav>
    <div>
        <div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="filmoverzicht.php">Films</a>
                    <ul>
                        <li><a href="films.php">Alle films</a></li>
                        <li><a href="filmoverzicht.php#recent">Recent Toegevoegd</a></li>
                        <li><a href="filmoverzicht.php#voor-het-gezin">Voor het gezin</a></li>
                        <li><a href="filmoverzicht.php#klassiekers">Klassiekers</a></li>
                    </ul>
                </li>
                <li><a href="overons.php">Over ons</a></li>
            </ul>
        </div>
        <div>
            <ul>
                <?php
                if(userIsLoggedIn()){
                    ?>
                <li><a href="#"><?=$_SESSION['user']?> ingelogd op <?=$_SESSION['login_date']?> sinds <?=$_SESSION['login_time']?></a>
                    <ul class="right">
                        <li class="right"><a href="mijnaccount.php">Mijn account</a></li>
                        <li class="right"><a href="logout.php">Uitloggen</a></li>
                    </ul>
                </li>
                <?php
                }
                else
                { ?>
                    <li><a href="abonnementen.php">Registreer</a></li><span class="white">/</span>
                    <li><a href="login.php">Inloggen</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

