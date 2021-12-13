<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"></form>

    <label> Naam <br><input type="text" name="naam"><br> </label> 
    <label> Uw message <br><textarea cols="35" rows="5" name="message" name="message"></textarea></label><br>

    <input type="submit" name="submit" value="Verzenden">
    
</body>
</html>

<?php

$naam = $POST['naam'];
$message = $POST['message'];
$submit = $POST['submit'];

if($post) {
    $write = fopen("message.txt", "a+");
    fwrite($write, "<u><b> $naam </b></u><br>$message<br>");
    fclose($write);

    $read = fopen("message.txt", "r+t");

    while(!feof($read)) {
        echo fread($read, 1024);
    }
    fclose($read);
}