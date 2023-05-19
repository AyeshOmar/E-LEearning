
<?php


//Set up database connection
$servername = "localhost";
$username = "root";
$dbname = "mysql";


// Établir une connexion avec la base de données phpMyAdmin
$conn =  new mysqli($servername,$username,"", $dbname);

if (!$conn) {
	echo "Connection failed!";
}
echo ""; 

?>