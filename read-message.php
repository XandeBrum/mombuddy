<?php

require_once 'database.php';
    include 'table_generator_messages.php';
        $db = new database();
           


$act = $db->select("SELECT user_id, message from user");

    create_table($act, 'user');

?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        
