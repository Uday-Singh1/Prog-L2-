<?php
include '../private/path.php';
include '../private/db/connect.php';

 if (!isset($_POST['user'], $_POST['email'])) {
    echo 'doei';
    echo $_POST['user'];
    echo $_POST['email'];
    die; 
} else {
    echo 'hallo';
    if (empty(trim($_POST['user']))) {
        echo 'Ongeldige gebruikersnaam';
    }

     if (empty(trim($_POST['email']))) {
         echo 'Ongeldig email';
     }

     if (!filter_var($_POST['email'], filter: FILTER_VALIDATE_EMAIL)) {
        echo 'ongeldig email formaat'; 
     }
 }

 $str = "INSERT INTO MOCK_DATA (naam, email)
        VALUES ('{$_POST['user']}','{$_POST['email']}')";

$result = $PDO->query($str);

$result = $PDO->query( 
    "SELECT naam, email FROM MOCK_DATA ORDER BY id DESC");

foreach ($result as $row) {
    print ($row['naam'] . '<br>' .
          $row['email'] . '<br><br>');
};