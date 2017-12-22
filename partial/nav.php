<?php
if( !isset($_SESSION)){
    session_start();
}
?>

<nav>
    <div>
        <div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="filmoverzicht.php">Films</a>
                    <ul>
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
                if(ISSET($_SESSION['user']))                {
                    if(!IS_NULL($_SESSION['user'])){
                    ?>
                <li><a href="#">Bob Ross</a>
                    <ul>
                        <li class="right"><a href="mijnaccount.php">Mijn account</a></li>
                        <li class="right"><a href="logout.php">Uitloggen</a></li>
                    </ul>
                </li>
                <?php
                }}
                else
                { ?>
                <li><a href="abonnementen.php">Registreer</a>
                    <ul>
                        <li class="right"><a href="login.php">Inloggen</a></li>
                    </ul>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

