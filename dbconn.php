<?php
//adatbázis login
$db = mysqli_connect("localhost", "root", "", "we_love");

if(!$db)
{
    die("Hiba: " . mysqli_connect_error());
}
?>
