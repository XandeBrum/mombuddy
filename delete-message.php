<?php
include "database.php";
    $db = new database();

if (isset($_GET['user_id'])) {

    $id = $_GET['user_id'];
        $sql = "DELETE FROM user WHERE user_id=:user_id";
            $placeholder = [
                'user_id'=> $id
            ];
                $db->delete($sql, $placeholder, "messages.php");
}
?>
