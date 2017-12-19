<?php
$hostname = "(local)";
$dbname = "fletnix2";
$username = "sa";
$pw = "database";

$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname;
			ConnectionPooling=0", "$username", "$pw");
?>

<?php
if(ISSET($_POST['username']) && ISSET($_POST['password'])){
    $userName = $_POST['username'];
    $password = $_POST['password'];

    $password = 'bob';
    echo 'a.nunc@seddolor.com <br>';
    echo 'In<br>';

    $data = $dbh->query("SELECT user_name FROM Customer where customer_mail_address = '{$userName}' and password = '{$password}'");
    $result = $data->fetch();

    //debug
    echo '<br>';
    var_dump($data);
    echo '<br>';
    echo $result['user_name'];
    echo count(count($result['user_name']));
    echo '<br>';
    //end debug


    if(count(count($result['user_name'])) == 1){
        session_start();
        $_SESSION['user']=$result['user_name'];
        echo '<p>a</p>';
    }else{
        echo '<p>b</p>';
    }
}
?>


<form method="Post" action="">
    <input id="username" name="username" type="mail"        placeholder="E-mail"    required>
    <input id="password" name="password" type="password"    placeholder="password"  required>
    <button>verzend</button>
</form>