<?php


include "database.php";

// ER WORDT AUTOMATISCH EEN USER AANGEMAAKT IN DE DATABASE.
$sql = "INSERT INTO admin VALUES (:id, :username, :password)";
    $placeholder = [
        'id'=> NULL,
        'username'=> 'mombuddymovement@hotmail.com',
        'password'=> password_hash('Positiviteit1986!', PASSWORD_DEFAULT),
    ]; 

            $db = new database();
                $db->insert($sql, $placeholder);

?> 