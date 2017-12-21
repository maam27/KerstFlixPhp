<?php
require_once 'db-credentials.php';

$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname;
			ConnectionPooling=0", "$username", "$pw");
?>