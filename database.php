<?php
    $hostName="localhost";
    $dbUser="root";
    $dbPass="";
    $dbName="login";

    $conn = mysqli_connect("$hostName","$dbUser","$dbPass","$dbName");

    if (!$conn) {
        die("something went wrong". mysqli_connect_error());
    }

?>