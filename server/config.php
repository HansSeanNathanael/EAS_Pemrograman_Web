<?php    
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "cpns";

    $connection = mysqli_connect($server, $user, $password, $database);

    if(!$connection) {
        die("Failed to connect to database: " . mysqli_connect_error());
    }

    $izin_admin = "-ce-iAH70YcLc6Yk";
    $izin_anggota = "TDC65o5GHlHWOdW4";
?>