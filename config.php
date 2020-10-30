<?php
/* FIRST READ DOCUMENTATIONS AT: https://www.ilariochiera.it/documentations/pgmapi/ */

/* GENERAL INFO WEBSITE/SERVER. EDIT ONLY "this" */
$name = "PGM SERVER"; //SERVER NAME
$ipaddressmc = "mc.pgmapiserver.it"; //IP SERVER MC
$urlwebsite = "www.ilariochiera.it"; //URL WEB
$administrator = "Ilario42"; //DEFAULT USERNAME. (INSERT ADMIN)
$logourl = "https://pgm.dev/img/logo.png"; //LOGO WEB
$apiavatar = "https://api.ashcon.app/mojang/v2/avatar"; //API AVATAR (NOT CHANGE)
$homebuttonurl = "https://www.pgmapiserver.it/home"; //HOME URL (Your Website)
/* STARTING DATABASE. EDIT ONLY "this" NOT CHANGE FOR DEFAULT */
$servername = "localhost";
$username = "Server";
$password = "YourPassword";
$dbname = "pgmapi";
/* AVVIO QUERY  WARN: NOT EDIT*/
$link = new mysqli($servername, $username, $password, $dbname);
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}




?>