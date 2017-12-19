<?php
$hostname = "(local)";
$dbname = "fletnix2";
$username = "sa";
$pw = "database";

$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname;
			ConnectionPooling=0", "$username", "$pw");
?>

<?php
//$_POST['username'] = 'a.nunc@seddolor.com';
//$_post['password'] = 'In';

if(ISSET($_POST['username']) && ISSET($_POST['password'])){
    $userName = $_POST['username'];
    $password = $_POST['password'];

    echo 'a.nunc@seddolor.com <br>';
    echo 'In<br>';

    $data = $dbh->query("SELECT user_name FROM Customer where customer_mail_address = '{$userName}' and password = '{$password}'");
    $result = $data->fetch();

    echo count(count($result['user_name']));

    if(count(count($result['user_name'])) == 1){
        session_start();
        $_SESSION['user']=$result['user_name'];
        echo 'a';
    }else{
        echo 'b';
    }
}
?>


<form method="Post" action="">
    <input id="username" name="username" type="mail"        placeholder="E-mail"    required>
    <input id="password" name="password" type="password"    placeholder="password"  required>
    <button>verzend</button>
</form>